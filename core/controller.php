<?php

use core\View;
use core\Model;

class Controller {

    protected $render;
    protected $run;

    public function __construct(){
        $this->render = new View();
        $this->run = new Model();
    }
}

?>