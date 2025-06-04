<?php
class loginmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function login($table_admin,$email,$matkhau){
        $sql = "SELECT * FROM $table_admin WHERE email=? AND matkhau = ?";
        return $this->db->affectedRows($sql,$email,$matkhau);
    }
    public function getlogin($table_admin,$email,$matkhau){
        $sql = "SELECT * FROM $table_admin WHERE email=? AND matkhau = ? ";
        return $this->db->selectuser($sql,$email,$matkhau);
    }
    public function insertlogin($table_product, $data){
        return $this->db->insert($table_product,$data);
    }
    public function edituserbyid($table, $cond ){
        $sql = "SELECT * FROM $table WHERE $cond";
       return $this->db->select($sql);
      }
    public function updateuser($table,$data,$cond){
        return $this->db->updateuser($table,$data,$cond);
      }
    public function getuser($table){
        $sql = "SELECT * FROM $table";
          return $this->db->select($sql);
    }
    public function getUserById($table, $cond){
        $sql = "SELECT hoten, sodt, email, avatar, background, ngaysinh FROM $table WHERE $cond";
        return $this->db->getUserById($sql);
    }
}
    

?>