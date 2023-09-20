<?php

class Controller
{
    public function view($path, $data = [])
    {
        if (file_exists("../app/views/" . $path . ".php")) {
            include "../app/views/" . $path . ".php";
        }
    } // end function view
}// End class Controller