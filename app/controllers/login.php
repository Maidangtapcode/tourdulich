<?php
class login extends dcontroller
{
    function __construct()
    {
        $message = array();

        parent::__construct();
    }
    public function index()
    {
        $this->login();
    }
    public function login()
    {
        // Session::init();
        // if (Session::get("login") == true) {
        //     header("Location:" . BASE_URL . "login/dashboard");
        // }
        $this->load->view('login');
    }
    public function loadtrangchu()
    {
        $this->load->view('public/Trangchu');
    }
    public function signup()
    {
        $this->load->view('signup');
    }
    public function loadadmin()
    {
        Session::checksession();
       
        $this->load->view('admin/touradmin');
    }
    public function loadedituser($id)
    {
      $table = "nguoidung";
      $cond = "nguoidung_id='$id'";
      $usermodel = $this->load->model('loginmodel');
      $data['edituserbyid'] = $usermodel->edituserbyid($table, $cond);
      $this->load->view('edituser', $data);
    }
    public function dashboard()
    {
        Session::checksession();
        $this->load->view('admin/dashboard');
    }
    public function insertlogin()
    {
        $homemodel = $this->load->model("homemodel");
        $loginmodel = $this->load->model("loginmodel");
        $table_product = 'nguoidung';
        $hoten = $_POST['hoten'];
        $sodt = $_POST['sodt'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $data = array(
            'hoten' => $hoten,
            'sodt' => $sodt,
            'email' => $email,
            'matkhau' => $matkhau
        );
        $checkerorr = array();
        $checkerorr = $homemodel->validate($data);
        if (!empty($checkerorr)) {
            $this->load->view('signup', $checkerorr);
        } else {
            $result = $loginmodel->insertlogin($table_product, $data);
            if ($result == 1) {
                $checkerorr['msg'] = 'Đăng kí thành công';
                $this->load->view('signup', $checkerorr);
            }
        }
    }
    public function updateuser($id){
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sodt = $_POST['sodt'];
        $ngaysinh = $_POST['ngaysinh'];
        $avatar = $_FILES['avatar']['tmp_name'] ?? null;
        $background = $_FILES['background']['tmp_name'] ?? null;  
        $table = "nguoidung";
        $luuduongdananh = 'picture/';
    
        // Upload avatar nếu có
        if ($avatar) {
            $anhdaluu = $luuduongdananh . basename($_FILES['avatar']['name']);
        
            // Kiểm tra loại file và kích thước
            $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['avatar']['size'] < 2 * 1024 * 1024) { // Max size 2MB
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $anhdaluu)) {
                    $avatar = $anhdaluu;
                } else {
                    $message['update'] = 'Lỗi khi tải ảnh lên';
                    $this->load->view('edituser', $message);
                    return;
                }
            } else {
                $message['update'] = 'File không hợp lệ hoặc quá kích thước cho phép';
                $this->load->view('edituser', $message);
                return;
            }
        }
    
        // Upload background nếu có
        if ($background) {
            $anhdaluu2 = $luuduongdananh . basename($_FILES['background']['name']);
        
            // Kiểm tra loại file và kích thước
            $fileType = pathinfo($anhdaluu2, PATHINFO_EXTENSION);
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['background']['size'] < 2 * 1024 * 1024) { // Max size 2MB
                if (move_uploaded_file($_FILES['background']['tmp_name'], $anhdaluu2)) {
                    $background = $anhdaluu2;
                } else {
                    $message['update'] = 'Lỗi khi tải ảnh lên';
                    $this->load->view('homepage', $message);
                    return;
                }
            } else {
                $message['update'] = 'File không hợp lệ hoặc quá kích thước cho phép';
                $this->load->view('homepage', $message);
                return;
            }
        }
    
        // Dữ liệu cần cập nhật
        $data = array(
            'hoten' => $hoten,
            'email' => $email,
            'sodt' => $sodt,
            'ngaysinh' => $ngaysinh,
            'avatar' => $avatar,
            'background' => $background,
        );
    
        $cond = "nguoidung.id='$id'";
    
        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $loginmodel = $this->load->model('loginmodel');
        $result = $loginmodel->updateuser($table, $data, $cond);
    
        // Cập nhật lại session nếu thành công
        if ($result == 1) {
            // Cập nhật lại session với dữ liệu mới
            $this->updateSession($id);
            header("Location: " . BASE_URL . "");
            
        } else {
            
        }
    }
    
    // Phương thức cập nhật session sau khi thay đổi dữ liệu người dùng
    private function updateSession($id) {
        $table = "nguoidung";
        $cond = "nguoidung.id='$id'";
        $usermodel = $this->load->model('loginmodel');
        $user = $usermodel->getUserById($table, $cond); // Lấy lại thông tin người dùng từ CSDL
    
        // Cập nhật lại session
        $_SESSION['hoten'] = $user['hoten'];
        $_SESSION['sodt'] = $user['sodt'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['background'] = $user['background'];
        $_SESSION['ngaysinh'] = $user['ngaysinh'];
        session_write_close();
    }
    
    
    public function authentication_login()
    {
        //$homemodel =$this->load->model("homemodel");
        $email = $_POST['email'];
        $matkhau = ($_POST['matkhau']);
        $table_admin = 'nguoidung';
        $loginmodel = $this->load->model('loginmodel');
        $count = $loginmodel->login($table_admin, $email, $matkhau);
        if ($count == 0) {
            Session::init();
            $checkerorr['mgs'] = 'Email hoặc mật khẩu không đúng ';
            $_SESSION['error_message'] = $checkerorr['mgs'];
            header("Location: " . BASE_URL . "login");
            exit();
        } else {
            $result = $loginmodel->getlogin($table_admin, $email, $matkhau);
            if ($result !== null && isset($result[0]['isadmin'])) {
                if ($result[0]['isadmin'] == 1) {
                    Session::init();
                    Session::set('login',true);
                    Session::set('hoten',$result[0]['hoten']);
                    Session::set('nguoidung_id',$result[0]['nguoidung_id']);
                    Session::set('email',$result[0]['email']);
                    Session::set('avatar',$result[0]['avatar']);
                    Session::set('sodt',$result[0]['sodt']);
                    Session::set('background',$result[0]['background']);
                    Session::set('isadmin', 1);
                    // Người dùng đăng nhập là admin
                    $this->load->view('admin/touradmin');
                    //$this->load->view('admin/headeradmin');
                    //header("Location:" . BASE_URL . "login/loadadmin");
                    
                } else {
                    // Người dùng không phải là admin
                    Session::init();
                    Session::set('login',true);
                    Session::set('hoten',$result[0]['hoten']);
                    Session::set('nguoidung_id',$result[0]['nguoidung_id']);
                    Session::set('sodt',$result[0]['sodt']);
                    Session::set('avatar',$result[0]['avatar']);
                    Session::set('background',$result[0]['background']);
                    Session::set('email',$result[0]['email']);
                    Session::set('isadmin', 0);
                    header("Location:" . BASE_URL . "");
                }
            } else {
                // Xử lý trường hợp không có dữ liệu hoặc dữ liệu không đúng định dạng
                // Redirect hoặc hiển thị thông báo lỗi
                header("Location:" . BASE_URL . "login");
            }
        }
    }
    public function logout()
    {
        Session::init();
        Session::destroy();
        header("Location:" . BASE_URL . "login");
    }
}
