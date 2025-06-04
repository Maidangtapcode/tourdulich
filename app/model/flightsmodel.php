<?php
class flightsmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function listflights($table){
        $sql = "SELECT * FROM $table";
          return $this->db->select($sql);
    }
    public function editflightsbyid($table, $cond ){
        $sql = "SELECT * FROM $table WHERE $cond";
       return $this->db->select($sql);
    }
    public function insertflights($table, $data){
       return $this->db->insert($table,$data);
    }
    public function updateflights($table,$data,$cond){
        return $this->db->update($table,$data,$cond);
    }
    public function deleteflights($table,$cond){
        return $this->db->delete($table,$cond);
    }
}
?>