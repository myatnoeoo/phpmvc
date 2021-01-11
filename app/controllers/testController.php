<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class testController extends Controller{

    private $controller;

    public static function index()
    {
        $data = [
            'name' => 'ess'
        ];
        return new View('testing', [$data]);
    }
}

?>