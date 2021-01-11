<?php

// class View{

//     protected $view;
//     public $data;

//     function __construtor($view, $data)
//     {
//         $this->view = $view;
//         $this->data = $data;
//     }

//     public function view(String $view, array $data){
//         readfile("app/views/$view.php");
//     }
// }


class View
{
private $data = array();

private $render = FALSE;

public function __construct($template)
{
    // try {
        $file = 'app/views/' . strtolower($template) . '.php';
        if (file_exists($file)) {
            $this->render = $file;
        } else {
            // throw new customException('Template ' . $template . ' not found!');
        }
    // }
    // catch (customException $e) {
    //     echo $e->errorMessage();
    // }
}

public function assign($variable, $value)
{
    $this->data[$variable] = $value;
}

public function __destruct()
{
    extract($this->data);
    include($this->render);

}
}
?>