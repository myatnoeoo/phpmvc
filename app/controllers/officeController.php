<?php

class officeController extends Controller{

    private $controller;

    function __construct(){

        $this->controller = new Controller();

        $this->controller->render->views('office' , '');
        
    }
}

?>