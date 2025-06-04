<?php
class dvmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function listdv($table){
        $sql = "SELECT * FROM $table";
          return $this->db->select($sql);
    }
    public function editdvbyid($table, $cond ){
        $sql = "SELECT * FROM $table WHERE $cond";
       return $this->db->select($sql);
    }
    public function insertdv($table, $data){
       return $this->db->insert($table,$data);
    }
    public function updatedv($table,$data,$cond){
        return $this->db->update($table,$data,$cond);
    }
    public function deletedv($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function listvvctrongnuoc($table_dv, $cond, $condloaidv) {
        $sql = "SELECT * FROM $table_dv WHERE quocgiadv = :cond and loaidv = :condloaidv";
        return $this->db->select($sql, array(':cond' => $cond, ':condloaidv'=>$condloaidv));
    }
    public function listvvcngoainuoc($table, $cond, $condloaidv) {
        $sql = "SELECT * FROM $table WHERE quocgiadv != :cond and loaidv = :condloaidv";
        return $this->db->select($sql, array(':cond' => $cond, ':condloaidv'=>$condloaidv));
    }
    public function listdvloaidv($table, $cond) {
        $sql = "SELECT * FROM $table WHERE loaidv = :cond";
        return $this->db->select($sql, array(':cond' => $cond));
    }
}
?>