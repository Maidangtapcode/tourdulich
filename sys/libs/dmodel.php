<?php
    class dmodel{
        protected $db;
        public function __construct(){
            $connect = 'mysql:dbname=project_web;host=localhost';
            $user = 'root';
            $passwd = '';
            $this->db = new database($connect,$user,$passwd);
        }
    }
?>