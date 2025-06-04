<?php
class hotelmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function listhotel($table){
        $sql = "SELECT * FROM $table";
          return $this->db->select($sql);
    }
    public function edithotelbyid($table, $cond ){
        $sql = "SELECT * FROM $table WHERE $cond";
       return $this->db->select($sql);
    }
    public function inserthotel($table, $data){
       return $this->db->insert($table,$data);
    }
    public function updatehotel($table,$data,$cond){
        return $this->db->update($table,$data,$cond);
    }
    public function deletehotel($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function listhoteltrongnuoc($table, $cond) {
        $sql = "SELECT * FROM $table WHERE quocgia = :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
    public function listhotelngoainuoc($table, $cond) {
        $sql = "SELECT * FROM $table WHERE quocgia != :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
    public function listhoteldiachi($table, $cond) {
        $sql = "SELECT * FROM $table WHERE diachihotel = :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
    public function listhotelsale($table) {
        $sql = "SELECT * FROM $table WHERE issale =1";
        return $this->db->select($sql);
    }
}
?>