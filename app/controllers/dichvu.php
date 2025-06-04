<?php
class dichvu extends dcontroller
{
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->list_dv();
  }
  public function viewdv(){
    $dvmodel =$this->load->model("dvmodel");
    $table_dv = 'dichvu';
    $cond = 'Trong Nước';
    $condloaidv= 'Điểm tham quan';
    $conddvcaptreo='Cáp treo';
    $conddvsanchoi='Sân chơi';
    $conddvnhsk='Nhạc hội & sự kiện';
    
    $data['listvvctrongnuoc'] = $dvmodel->listvvctrongnuoc($table_dv, $cond, $condloaidv);
    $data['listvvcngoainuoc'] = $dvmodel->listvvcngoainuoc($table_dv, $cond, $condloaidv);
    $data['listdvcaptreo'] = $dvmodel->listdvloaidv($table_dv, $conddvcaptreo);
    $data['listdvdiemthamquan'] = $dvmodel->listdvloaidv($table_dv, $condloaidv);
    $data['listdvsanchoi'] = $dvmodel->listdvloaidv($table_dv, $conddvsanchoi);
    $data['listdvnhsk'] = $dvmodel->listdvloaidv($table_dv, $conddvnhsk);
    $this->load->view('dichvu',$data);
  }
  public function add_dv()
  {
   $this->load->view('admin/dichvu/add_dv');
  }

  public function insert_dv()
  {
    $namedv = $_POST['namedv'];
    $giadv = $_POST['giadv'];
    $loaidv = $_POST['loaidv'];
    $quocgiadv = $_POST['quocgiadv'];
    $diachidv = $_POST['diachidv'];
    $imgdv = $_FILES['imgdv']['tmp_name'] ?? null;
    $table = "dichvu";
    $luuduongdananh = 'img/';
    if ($imgdv) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imgdv']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    //   if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imgdv']['size'] < 2 * 1024 * 1024) { // Max size 2MB
       
    //   } else {
    //     $message['insert'] = 'File không hợp lệ hoặc quá kích thước cho phép';
    //     $this->load->view('admin/touradmin', $message);
    //     return;
    //   }
        if (move_uploaded_file($_FILES['imgdv']['tmp_name'], $anhdaluu)) {
            $imgdv = $anhdaluu;
        } else {
            $message['insert'] = 'Lỗi khi tải ảnh lên';
            $this->load->view('admin/touradmin', $message);
            return;
        }
    }
    $data = array(
      'namedv' => $namedv,
      'giadv' => $giadv,
      'quocgiadv' =>$quocgiadv,
      'loaidv' => $loaidv,
      'diachidv' => $diachidv,
      'imgdv' => $imgdv
    );

    $tourmodel = $this->load->model('dvmodel');
    $result = $tourmodel->insertdv($table, $data);

    if ($result == 1) {
      $message['insert'] = 'Thêm dịch vụ thành công';
    } else {
      $message['insert'] = 'Thêm dịch vụ không thành công';
    }

    $this->load->view('admin/touradmin', $message);
  }

  public function list_dv()
  {
    $table = "dichvu";
    $tourmodel = $this->load->model('dvmodel');
    $data['dv'] = $tourmodel->listdv($table);
    $this->load->view('admin/dichvu/list_dv', $data);
  }
  public function delete_dv($id)
  {
    $table = "dichvu";
    $cond = "dichvu.id_dv='$id'";
    $dvmodel = $this->load->model('dvmodel');
    $result = $dvmodel->deletedv($table, $cond);
  }
  public function edit_dv($id)
  {
    $table = "dichvu";
    $cond = "dichvu.id_dv='$id'";
    $dvmodel = $this->load->model('dvmodel');
    $data['editdvbyid'] = $dvmodel->editdvbyid($table, $cond);
    $this->load->view('admin/dichvu/edit_dv', $data);
  }
  public function update_dv($id)
  {
    $namedv = $_POST['namedv'];
    $giadv = $_POST['giadv'];
    $loaidv = $_POST['loaidv'];
    $quocgiadv = $_POST['quocgiadv'];
    $diachidv = $_POST['diachidv'];
    $imgdv = $_FILES['imgdv']['tmp_name'] ?? null;
    $table = "dichvu";
    $imgdv = $_FILES['imgdv']['tmp_name'] ?? null;
    $luuduongdananh = 'img/';
    if ($imgdv) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imgdv']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif','webp'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imgdv']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imgdv']['tmp_name'], $anhdaluu)) {
          $imgdv = $anhdaluu;
        } else {
          $message['update'] = 'Lỗi khi tải ảnh lên';
          $this->load->view('admin/touradmin', $message);
          return;
        }
      } else {
        $message['update'] = 'File không hợp lệ hoặc quá kích thước cho phép';
        $this->load->view('admin/touradmin', $message);
        return;
      }
    }
   
    $data = array(
        'namedv' => $namedv,
        'giadv' => $giadv,
        'loaidv' => $loaidv,
        'diachidv' => $diachidv,
        'quocgiadv' => $quocgiadv,
        'imgdv' => $imgdv
      );
  
    $cond = "dichvu.id='$id'";
    $dvmodel = $this->load->model('dvmodel');
    $result = $dvmodel->updatedv($table, $data, $cond);
    if ($result == 1) {
      $message['update'] = 'Cập nhật dich vụ thành công';
      $this->load->view('admin/touradmin', $message);
    } else {
      $message['update'] = 'Cập nhật dich vụ không thành công';
      $this->load->view('admin/touradmin', $message);
    }
  }
  public function getvvctrongnuoc(){
    $table = "dichvu";
    $dvmodel = $this->load->model('dvmodel');
    $cond = 'Trong Nước';
    $condloaidv = 'Điểm tham quan';
    $data['dichvu'] = $dvmodel->listvvctrongnuoc($table,$cond,$condloaidv);
    $this->load->view('admin/hotel/list_hotel', $data);
  }
  public function getvvcngoainuoc(){
    $table = "dichvu";
    $dvmodel = $this->load->model('dvmodel');
    $cond = 'Trong Nước';
    $condloaidv = 'Điểm tham quan';
    $data['dichvu'] = $dvmodel->listvvcngoainuoc($table,$cond,$condloaidv);
    $this->load->view('admin/hotel/list_hotel', $data);
  }

}
