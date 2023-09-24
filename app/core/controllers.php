<?php

class Controller
{
    public function view($path, $data = [])
    {
        if (file_exists("../app/views/" . THEME . $path . ".php")) {
            include "../app/views/" . THEME . $path . ".php";
        }
        // else {
        //     include "../app/views/" . THEME . "404.php";
        // }
    } // end function view
    public function load_model($model)
    {
        if (file_exists("../app/models/"  . strtolower($model) . ".class.php")) {
            include "../app/models/"  . strtolower($model) . ".class.php";
            return $a = new $model();
        }
        return false;
        // else {
        //     include "../app/views/" . THEME . "404.php";
        // }
    } // end function view
}// End class Controller