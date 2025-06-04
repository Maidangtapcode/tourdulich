<?php
    class index extends dcontroller{
        function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->homepage();
        }
        public function homepage(){
            $tourmodel =$this->load->model("tourmodel");
            $table_tour = 'tour';
            $data['listtour'] = $tourmodel->listtour($table_tour);
            $cond = 'Viet Nam';
            $data['listtourvn'] = $tourmodel->listtourtrongnuoc($table_tour,$cond);
            $data['listtourqt'] = $tourmodel->listtourngoainuoc($table_tour,$cond);
            $data['listtoursale'] = $tourmodel->listtoursale($table_tour);
            $this->load->view('homepage', $data);
        }
        public function notfound(){
            $this->load->view('404');
        }
    }
?>