<?php
    class support extends dcontroller{
        function __construct()
    {
        $message = array();

        parent::__construct();
    }
    public function index()
    {
        $this->support();
    }
    public function support()
    {
        $this->load->view('lienhe');
    }
    }
?>