<?php
class tourmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function listtour($table){
        $sql = "SELECT * FROM $table";
          return $this->db->select($sql);
    }
    public function edittourbyid($table, $cond ){
        $sql = "SELECT * FROM $table WHERE $cond";
       return $this->db->select($sql);
    }
    public function inserttour($table, $data){
       return $this->db->insert($table,$data);
    }
    public function updatetour($table,$data,$cond){
        return $this->db->update($table,$data,$cond);
    }
    public function deletetour($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function listtourtrongnuoc($table, $cond) {
        $sql = "SELECT * FROM $table WHERE quocgia = :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
    public function listtourngoainuoc($table, $cond) {
        $sql = "SELECT * FROM $table WHERE quocgia != :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
    public function listtoursale($table) {
        $sql = "SELECT * FROM $table WHERE showsale =1";
        return $this->db->select($sql);
    }
}
?>