<?php

// class Route {
//     public function __construct($url)
//     {
//         $url = rtrim($url,'/');
//         $url = explode('/',$url);

//         $controller = $url[0] . 'Controller';
    
//         require_once'app/controllers/' . $controller .'.php';
    
//         new $controller();
//     }

//     Route::get('admin', 'Controller@admin');
//     Route::get('api/admin', 'ApiController@admin');

// }

$r->addRoute('GET', '/index', 'homeController@index');
$r->addRoute('POST', '/test', 'handler')

?>