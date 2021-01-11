<?php

require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
 
$capsule = new Capsule();

    $capsule->addConnection([
        'driver'   => 'mysql',
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'database' => 'phpmvc',
        'charset'  => 'utf8',
        'collation'=> 'utf8_unicode_ci',
        'prefix'   => ''
    ]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
?>