<?php

require_once './core/controller.php';
require_once './core/view.php';

//use core\View as view;

class loginController extends Controller{

    private $controller;

    public static function index()
    {
        return new View('login');
    }

    public static function login($request)
    {
        // Create a new cURL resource
        $ch = curl_init('http://10.1.9.242/zabbix/api_jsonrpc.php');

        // Setup request to send json via POST
        $ar = array('user' => $request['username'], 'password' => $request['password'] );

        $payload = json_encode(array(
            'jsonrpc'=>  '2.0',
            'method'=>  'user.login',

            'params'=> $ar,

            'id'=>  1
        ));

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);
       
        // Close cURL resource
        curl_close($ch);

        if (str_contains($result , 'Login name or password is incorrect')) {
            echo '<script>alert("Wrong username or password!")</script>'; 
            self::index();      
        }
        else
        {
            $view = new view('ObjectList');
        }
    }
}

?>