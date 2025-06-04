<?php
class homemodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function category($table_product){
        return $this->db->select($table_product);
    //    $sql = "SELECT * FROM product ORDER BY id DESC ";
    //    $query = $this->db->->query($sql);
    //    $result = $query->fetchAll();
    //    return $result;
    }
    public function categorybyid($table_product, $id ){
        $sql = "SELECT * FROM $table_product WHERE id = :id";
        $data = array(':id' => $id);
       return $this->db->select($sql,$data);
    }
    public function validate(array $data): array
  {
    $errors = [];

    $name = trim($data['hoten'] ?? '');
    if (!$name) {
      $errors['hoten'] = 'Invalid name.';
    }
    $email = $data['email'] ?? '';
    if (!preg_match(
        '/^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/',
        $email
    )) {
        $errors['email'] = 'Invalid email.';
    }
    $validPhone = preg_match(
      '/^(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b$/',
      $data['sodt'] ?? ''
    );
    if (!$validPhone) {
      $errors['sodt'] = 'Invalid phone number.';
    }
    $password = $data['matkhau'];

  if (strlen($password) < 8) {
      $errors['matkhau'] = 'Mật khẩu cần có ít nhất 8 ký tự.';
  } elseif (!preg_match('/[A-Z]/', $password)) {
      $errors['matkhau'] = 'Mật khẩu cần chứa ít nhất một chữ cái hoa.';
  } elseif (!preg_match('/[a-z]/', $password)) {
      $errors['matkhau'] = 'Mật khẩu cần chứa ít nhất một chữ cái thường.';
  } elseif (!preg_match('/\d/', $password)) {
      $errors['matkhau'] = 'Mật khẩu cần chứa ít nhất một chữ số.';
  } elseif (!preg_match('/[!@#$%^&*]/', $password)) {
      $errors['matkhau'] = 'Mật khẩu cần chứa ít nhất một ký tự đặc biệt.';
  }

    return $errors;
  }


}
?>