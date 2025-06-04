<?php
class news extends dcontroller
{
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->viewnews();
  }
  public function viewnews(){
    // $hotelmodel =$this->load->model("hotelmodel");
    // $table_hotel = 'hotel';
    // $data['listhotel'] = $hotelmodel->listhotel($table_hotel);
    // $this->load->view('khachsan', $data);
    $this->load->view('tintuc');
  }
}