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
        $view = new view('home/index');
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

    
    public static function edit($request)
    {
        $id = $request['id'];
        $user = UserQuery::find($id);
        $view = new view('home/edit');
        $view->assign('user', $user);
    }

    public static function update($request)
    {
        $user = UserQuery::edit($request);
        self::index();
    }

    public static function store($request)
    {
        $user = UserQuery::create($request);
        self::index();
    }

    public static function delete($request)
    {
        $id = $request['id'];
        $user = UserQuery::delete($id);
        self::index();
    }

}

?>