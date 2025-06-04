<?php
class hotel extends dcontroller
{
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->list_hotel();
  }
  public function viewhotel(){
    $hotelmodel =$this->load->model("hotelmodel");
    $table_hotel = 'hotel';
    $condhn='Hà Nội';
    $condnt="Nha Trang";
    $condhcm="TP.Hồ Chí Minh";
    $conddl="Đà Lạt";
    $condvt="Vũng Tàu";
    $condpt="Phan Thiết";
    $condpq="Phú Quốc";
    $condha="Hội An";
    $condbk="Bangkok";
    $condsing="Singapore";
    $condseoul="Seoul";
    $condtokyo="Tokyo";
    $condphuket="Phuket";
    $condbali="Bali";
    $data['listhotel'] = $hotelmodel->listhotel($table_hotel);
    $data['listhotelhn'] = $hotelmodel->listhoteldiachi($table_hotel,$condhn);
    $data['listhotelhcm'] = $hotelmodel->listhoteldiachi($table_hotel,$condhcm);
    $data['listhotelnt'] = $hotelmodel->listhoteldiachi($table_hotel,$condnt);
    $data['listhoteldl'] = $hotelmodel->listhoteldiachi($table_hotel,$conddl);
    $data['listhotelvt'] = $hotelmodel->listhoteldiachi($table_hotel,$condvt);
    $data['listhotelpt'] = $hotelmodel->listhoteldiachi($table_hotel,$condpt);
    $data['listhotelpq'] = $hotelmodel->listhoteldiachi($table_hotel,$condpq);
    $data['listhotelha'] = $hotelmodel->listhoteldiachi($table_hotel,$condha);
    $data['listhotelbk'] = $hotelmodel->listhoteldiachi($table_hotel,$condbk);
    $data['listhotelsing'] = $hotelmodel->listhoteldiachi($table_hotel,$condsing);
    $data['listhotelseoul'] = $hotelmodel->listhoteldiachi($table_hotel,$condseoul);
    $data['listhoteltokyo'] = $hotelmodel->listhoteldiachi($table_hotel,$condtokyo);
    $data['listhotelphuket'] = $hotelmodel->listhoteldiachi($table_hotel,$condphuket);
    $data['listhotelbali'] = $hotelmodel->listhoteldiachi($table_hotel,$condbali);
    $this->load->view('khachsan', $data);
  }
  public function add_hotel()
  {
    $this->load->view('admin/hotel/add_hotel');
  }

  public function insert_hotel()
  {
    $namehotel = $_POST['namehotel'];
    $bannerhotel = $_POST['bannerhotel'];
    $sosao = $_POST['sosaohotel'];
    $diachi = $_POST['diachihotel'];
    $giahotel = $_POST['giahotel'];
    $giasale = $_POST['giahotelsale'];
    $quocgia = $_POST['quocgia'];
    $issale = $_POST['issale'];
    $imghotel = $_FILES['imghotel']['tmp_name'] ?? null;
    $table = "hotel";
    $luuduongdananh = 'img/';
    if ($imghotel) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imghotel']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imghotel']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imghotel']['tmp_name'], $anhdaluu)) {
          $imghotel = $anhdaluu;
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
      'namehotel' => $namehotel,
      'bannerhotel' => $bannerhotel,
      'sosaohotel'=>$sosao,
      'diachihotel' => $diachi,
      'giahotel' => $giahotel,
      'giahotelsale' => $giasale,
      'imghotel' => $imghotel,
      'quocgia' => $quocgia,
      'issale' => $issale
    );

    $tourmodel = $this->load->model('hotelmodel');
    $result = $tourmodel->inserthotel($table, $data);

    if ($result == 1) {
      $message['insert'] = 'Thêm khách sạn thành công';
    } else {
      $message['insert'] = 'Thêm khách sạn không thành công';
    }

    $this->load->view('admin/touradmin', $message);
  }

  public function list_hotel()
  {
    $table = "hotel";
    $tourmodel = $this->load->model('hotelmodel');
    $data['hotel'] = $tourmodel->listhotel($table);
    $this->load->view('admin/hotel/list_hotel', $data);
  }
  public function delete_hotel($id)
  {
    $table = "hotel";
    $cond = "hotel.id_hotel='$id'";
    $hotelmodel = $this->load->model('hotelmodel');
    $result = $hotelmodel->deletehotel($table, $cond);
    if ($result == 1) {
      $message['update'] = 'Xóa hotel thành công';
      header('Location:' . BASE_URL . "hotel/list_hotel?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = 'Xóa hotel không thành công';
      header('Location:' . BASE_URL . "hotel/list_hotel?msg=" . urlencode(serialize($message)));
    }
  }
  public function edit_hotel($id)
  {
    $table = "hotel";
    $cond = "hotel.id_hotel='$id'";
    $hotelmodel = $this->load->model('hotelmodel');
    $data['edithotelbyid'] = $hotelmodel->edithotelbyid($table, $cond);
    $this->load->view('admin/hotel/edit_hotel', $data);
  }
  public function update_hotel($id)
  {
    $namehotel = $_POST['namehotel'];
    $bannerhotel = $_POST['bannerhotel'];
    $sosao = $_POST['sosaohotel'];
    $diachi = $_POST['diachihotel'];
    $giahotel = $_POST['giahotel'];
    $giasale = $_POST['giahotelsale'];
    $quocgia = $_POST['quocgia'];
    $issale = $_POST['issale'];
    $imghotel = $_FILES['imghotel']['tmp_name'] ?? null;
    $table = "hotel";
    $luuduongdananh = 'img/';
    if ($imghotel) {
      $anhdaluu = $luuduongdananh . basename($_FILES['imghotel']['name']);

      // Kiểm tra loại file và kích thước
      $fileType = pathinfo($anhdaluu, PATHINFO_EXTENSION);
      $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
      if (in_array(strtolower($fileType), $allowedTypes) && $_FILES['imghotel']['size'] < 2 * 1024 * 1024) { // Max size 2MB
        if (move_uploaded_file($_FILES['imghotel']['tmp_name'], $anhdaluu)) {
          $imghotel = $anhdaluu;
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
      'namehotel' => $namehotel,
      'bannerhotel' => $bannerhotel,
      'sosaohotel'=>$sosao,
      'diachihotel' => $diachi,
      'giahotel' => $giahotel,
      'giahotelsale' => $giasale,
      'imghotel' => $imghotel,
      'quocgia' => $quocgia,
      'issale' => $issale
    );

    $cond = "hotel.id_hotel='$id'";
    $hotelmodel = $this->load->model('hotelmodel');
    $result = $hotelmodel->updatehotel($table, $data, $cond);
    if ($result == 1) {
      $message['update'] = 'Cập nhật hotel thành công';
      $this->load->view('admin/touradmin', $message);
    } else {
      $message['update'] = 'Cập nhật hotel không thành công';
      $this->load->view('admin/touradmin', $message);
    }
  }
  public function gethoteltrongnuoc(){
    $table = "hotel";
    $hotelmodel = $this->load->model('hotelmodel');
    $cond = 'Trong Nước';
    $data['hotel'] = $hotelmodel->listhoteltrongnuoc($table,$cond);
    $this->load->view('admin/hotel/list_hotel', $data);
  }
  public function gethotelngoainuoc(){
    $table = "hotel";
    $hotelmodel = $this->load->model('hotelmodel');
    $cond = 'Trong Nước';
    $data['hotel'] = $hotelmodel->listhotelngoainuoc($table,$cond);
    $this->load->view('admin/hotel/list_hotel', $data);
  }
  public function gethotelsale(){
    $table = "hotel";
    $hotelmodel = $this->load->model('hotelmodel');
    $data['hotel'] = $hotelmodel->listhotelsale($table);
    $this->load->view('admin/hotel/list_hotel', $data);
  }
}
