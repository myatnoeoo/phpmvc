<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class csrfController extends Controller{

    private $controller;

    public static function index()
    {
        $data = [
            'name' => 'ess'
        ];
        return new View('csrf', [$data]);
    }

    public static function store()
    {
        
        return new View('csrf');
    }
}

?>