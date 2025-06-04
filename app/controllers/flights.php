<?php
class flights extends dcontroller
{
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->list_flights();
  }
  public function viewflights(){
    $flightsmodel =$this->load->model("flightsmodel");
    $table_flights = 'vmb';
    $data['listflights'] = $flightsmodel->listflights($table_flights);
    $this->load->view('vemaybay',$data);
  }
  public function add_flights()
  {
   $this->load->view('admin/vemaybay/add_flights');
  }

  public function insert_flights()
  {
    $noidi = $_POST['noidi'];
    $noiden = $_POST['noiden'];
    $thoigian = $_POST['thoigian'];
    $giave = $_POST['giave'];
    $loaive = $_POST['loaive'];
    $imgvmb = $_FILES['imgvmb']['tmp_name'] ?? null;
    $table = "vmb";
    $dateParts = explode('-', $thoigian);  // Tách ngày, tháng, năm
    if (count($dateParts) === 3) {
        $formattedDate = $dateParts[2] . '/' . $dateParts[1] . '/' . $dateParts[0];  // dd/mm/yyyy
        
    } else {
      $message['insert'] = 'Định dang ngày không hợp lệ';
      $this->load->view('admin/touradmin', $message);
    }
    $luuduongdananh = 'img/';
    if ($imgvmb) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imgvmb']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif','webp'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imgvmb']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imgvmb']['tmp_name'], $anhdaluu)) {
          $imgvmb = $anhdaluu;
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
      'noidi' => $noidi,
      'noiden' => $noiden,
      'thoigian'=>$formattedDate,
      'giave' => $giave,
      'loaive' => $loaive,
      'imgvmb' => $imgvmb
    );

    $tourmodel = $this->load->model('flightsmodel');
    $result = $tourmodel->insertflights($table, $data);

    if ($result == 1) {
      $message['insert'] = 'Thêm chuyến bay thành công';
    } else {
      $message['insert'] = 'Thêm chuyến bay không thành công';
    }

    $this->load->view('admin/touradmin', $message);
  }

  public function list_flights()
  {
    $table = "vmb";
    $tourmodel = $this->load->model('flightsmodel');
    $data['flights'] = $tourmodel->listflights($table);
    $this->load->view('admin/vemaybay/list_flights', $data);
  }
  public function delete_flights($id)
  {
    $table = "vmb";
    $cond = "vmb.id_vmb='$id'";
    $flightsmodel = $this->load->model('flightsmodel');
    $result = $flightsmodel->deleteflights($table, $cond);
    if ($result == 1) {
      $message['update'] = 'Xóa chuyến bay thành công';
      header('Location:' . BASE_URL . "flights/list_flights?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = 'Xóa flights không thành công';
      header('Location:' . BASE_URL . "flights/list_flights?msg=" . urlencode(serialize($message)));
    }
  }
  public function edit_flights($id)
  {
    $table = "vmb";
    $cond = "vmb.id_vmb='$id'";
    $flightsmodel = $this->load->model('flightsmodel');
    $data['editflightsbyid'] = $flightsmodel->editflightsbyid($table, $cond);
    $this->load->view('admin/vemaybay/edit_flights', $data);
  }
  public function update_flights($id)
  {
    $noidi = $_POST['noidi'];
    $noiden = $_POST['noiden'];
    $thoigian = $_POST['thoigian'];
    $giave = $_POST['giave'];
    $loaive = $_POST['loaive'];
    $imgvmb = $_FILES['imgvmb']['tmp_name'] ?? null;
    $table = "vmb";
    $luuduongdananh = 'img/';
    if ($imgvmb) {
      $anhdaluu = $luuduongdananh . basename($_FILES['img$imgvmb']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['img$imgvmb']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['img$imgvmb']['tmp_name'], $anhdaluu)) {
          $imgvmb = $anhdaluu;
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
      'noidi' => $noidi,
      'noiden' => $noiden,
      'thoigian'=>$thoigian,
      'giave' => $giave,
      'loaive' => $loaive,
      'imgvmb' => $imgvmb
    );

    $cond = "vmb.id_vmb='$id'";
    $flightsmodel = $this->load->model('flightsmodel');
    $result = $flightsmodel->updateflights($table, $data, $cond);
    if ($result == 1) {
      $message['update'] = 'Cập nhật chuyến bay thành công';
      $this->load->view('admin/touradmin', $message);
    } else {
      $message['update'] = 'Cập nhật chuyến bay không thành công';
      $this->load->view('admin/touradmin', $message);
    }
  }
}
