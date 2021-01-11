<?php

namespace core;

class Model{

    function model($filename)
    {
        require_once'app/models/' . $filename . 'Model.php';

        $object = $filename . "Model";

        return new $object();
    }
}

?>