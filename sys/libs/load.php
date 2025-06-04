<?php
    class load {
        public function __construct() {
            // Constructor
        }
    
        public function view($viewFilename, $data = null) {
            if($data == true){
                extract($data);
            }
            include '../app/view/' . $viewFilename . '.php';
        }
    
        public function model($model){
            require_once "../app/model/".$model.".php";
            return new $model();
    }
}
?>
