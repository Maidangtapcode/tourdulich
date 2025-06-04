<?php
class tour extends dcontroller
{
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->list_tour();
  }
  public function add_tour()
  {
    $this->load->view('admin/tour/add_tour');
  }
  public function viewtour()
  {
    $this->load->view('homepage');
  }
  public function insert_tour()
  {
    $nametour = $_POST['nametour'];
    $bannertour = $_POST['bannertour'];
    $labeltour1 = $_POST['labeltour1'];
    $labeltour2 = $_POST['labeltour2'];
    $labeltour3 = $_POST['labeltour3'];
    $labeltour4 = $_POST['labeltour4'];
    $quocgia = $_POST['quocgia'];
    $tinhthanh = $_POST['tinhthanh'];
    $showsale = $_POST['showsale'];
    $giatour = $_POST['giatour'];
    $imgtour = $_FILES['imagetour']['tmp_name'] ?? null;
    $table = "tour";
    $luuduongdananh = 'img/';
    if ($imgtour) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imagetour']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif','webp'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imagetour']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imagetour']['tmp_name'], $anhdaluu)) {
          $imgtour = $anhdaluu;
        } else {
          $message['insert'] = 'Lỗi khi tải ảnh lên';
          $this->load->view('admin/touradmin', $message);
          return;
        }
      } else {
        $message['insert'] = 'File không hợp lệ hoặc quá kích thước cho phép';
        $this->load->view('admin/touradmin', $message);
        return;
      }
    }

    $data = array(
      'nametour' => $nametour,
      'bannertour' => $bannertour,
      'labeltour1' => $labeltour1,
      'labeltour2' => $labeltour2,
      'labeltour3' => $labeltour3,
      'labeltour4' => $labeltour4,
      'quocgia' => $quocgia,
      'tinhthanh' => $tinhthanh,
      'showsale' => $showsale,
      'giatour' => $giatour,
      'imagetour' => $imgtour
    );

    $tourmodel = $this->load->model('tourmodel');
    $result = $tourmodel->inserttour($table, $data);

    if ($result == 1) {
      $message['insert'] = 'Thêm tour thành công';
    } else {
      $message['insert'] = 'Thêm tour không thành công';
    }

    $this->load->view('admin/touradmin', $message);
  }

  public function list_tour()
  {
    $table = "tour";
    $tourmodel = $this->load->model('tourmodel');
    $data['tour'] = $tourmodel->listtour($table);
    $this->load->view('admin/tour/list_tour', $data);
  }
  public function delete_tour($id)
  {
    $table = "tour";
    $cond = "tour.id_tour='$id'";
    $tourmodel = $this->load->model('tourmodel');
    $result = $tourmodel->deletetour($table, $cond);
    if ($result == 1) {
      $message['update'] = 'Xóa tour thành công';
      header('Location:' . BASE_URL . "tour/list_tour?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = 'Xóa tour không thành công';
      header('Location:' . BASE_URL . "tour/list_tour?msg=" . urlencode(serialize($message)));
    }
  }
  public function edit_tour($id)
  {
    $table = "tour";
    $cond = "tour.id_tour='$id'";
    $tourmodel = $this->load->model('tourmodel');
    $data['edittourbyid'] = $tourmodel->edittourbyid($table, $cond);
    $this->load->view('admin/tour/edit_tour', $data);
  }
  public function update_tour($id)
  {
    $nametour = $_POST['nametour'];
    $bannertour = $_POST['bannertour'];
    $labeltour1 = $_POST['labeltour1'];
    $labeltour2 = $_POST['labeltour2'];
    $labeltour3 = $_POST['labeltour3'];
    $labeltour4 = $_POST['labeltour4'];
    $quocgia = $_POST['quocgia'];
    $tinhthanh = $_POST['tinhthanh'];
    $showsale = $_POST['showsale'];
    $giatour = $_POST['giatour'];
    $imgtour = $_FILES['imagetour']['tmp_name'] ?? null;
    $table = "tour";
    $luuduongdananh = 'img/';
    if ($imgtour) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imagetour']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif','webp'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imagetour']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imagetour']['tmp_name'], $anhdaluu)) {
          $imgtour = $anhdaluu;
        } else {
          $message['insert'] = 'Lỗi khi tải ảnh lên';
          $this->load->view('admin/touradmin', $message);
          return;
        }
      } else {
        $message['insert'] = 'File không hợp lệ hoặc quá kích thước cho phép';
        $this->load->view('admin/touradmin', $message);
        return;
      }
    }
    $data = array(
      'nametour' => $nametour,
      'bannertour' => $bannertour,
      'labeltour1' => $labeltour1,
      'labeltour2' => $labeltour2,
      'labeltour3' => $labeltour3,
      'labeltour4' => $labeltour4,
      'quocgia' => $quocgia,
      'tinhthanh' => $tinhthanh,
      'showsale' => $showsale,
      'giatour' => $giatour,
      'imagetour' => $imgtour
    );
    $cond = "tour.id_tour='$id'";
    $tourmodel = $this->load->model('tourmodel');
    $result = $tourmodel->updatetour($table, $data, $cond);
    if ($result == 1) {
      $message['update'] = 'Cập nhật tour thành công';
      $this->load->view('admin/touradmin', $message);
    } else {
      $message['update'] = 'Cập nhật tour không thành công';
      $this->load->view('admin/touradmin', $message);
    }
  }
  public function gettourtrongnuoc(){
    $table = "tour";
    $tourmodel = $this->load->model('tourmodel');
    $cond = 'Viet Nam';
    $data['tour'] = $tourmodel->listtourtrongnuoc($table,$cond);
    $this->load->view('admin/tour/list_tour', $data);
  }
  public function gettourngoainuoc(){
    $table = "tour";
    $tourmodel = $this->load->model('tourmodel');
    $cond = 'Việt Nam';
    $data['tour'] = $tourmodel->listtourngoainuoc($table,$cond);
    $this->load->view('admin/tour/list_tour', $data);
  }
  public function gettoursale(){
    $table = "tour";
    $tourmodel = $this->load->model('tourmodel');
    $data['tour'] = $tourmodel->listtoursale($table);
    $this->load->view('admin/tour/list_tour', $data);
  }
}
