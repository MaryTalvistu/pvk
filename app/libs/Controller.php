<?php


class Controller
{
    // load model

    // load view
    public function view($view, $data = array()) {
        if(file_exists('../app/views'.$view.'.php')){
            require_once '../app/views'.$view.'.php';
        } else {
            die('View '.$view.' does not exist');
        }
    }

}