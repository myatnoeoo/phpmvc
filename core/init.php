<?php
namespace core;

class View {

    public function views($filename , $data){
        
        require_once'app/views/' . $filename . '.php';
        
    }
}

?>