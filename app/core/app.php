<?php

class App
{
    // protected Because i don't want them to be accessed to be able to access
    protected $controller = "home";
    protected $method = "index";
    protected $params; // from the kay of  array is be starts at 2 we make it start at 0 

    public function __construct()
    {
        $url = $this->parseURL();
        // show($url);

        if (file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller  = new $this->controller;
        if (isset($url[1])) {
            $url[1] = strtolower($url[1]);
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = (count($url) > 0) ? $url : ["home"];
        call_user_func_array([$this->controller, $this->method], $this->params);
        // show(array_values($url));
    } // end __construct

    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
        // trim() ==> remove characters from both side of a string 
        // Filters a variable with a specified filter
    } //End parseURL
}// end Class App
