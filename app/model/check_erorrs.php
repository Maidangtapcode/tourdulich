<?php 
    class homemodel extends dmodel {
        public function __construct(){
            parent::__construct();
        }
    public function checkinputtour(array $data):array{
        $erorr = [];
        $nametour = trim($data['nametour'] ?? '');
        if (!$nametour) {
          $errors['hoten'] = 'Invalid nametour';
        }
        
        return $erorr;
    }
}
?>