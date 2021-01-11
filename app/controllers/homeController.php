<?php

use App\homeModel;

require_once './core/controller.php';
require_once './core/view.php';
require_once './config/UserQuery.php';

//use core\View as view;

class homeController extends Controller{

    private $controller;

    public static function index()
    {
        $users = UserQuery::all();
        $view = new view('home');
        $view->assign('users', $users);
    }

    public static function create()
    {
        $view = new view('home/create');
    }

    public static function view($request)
    {
        $id = $request['id'];
        $user = UserQuery::find($id);
        $view = new view('home/detail');
        $view->assign('user', $user);
    }

    public static function store($request)
    {
        $user = UserQuery::create($request);
        self::index();
    }

}

?>