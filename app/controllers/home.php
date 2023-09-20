<?php
class Home extends Controller
{
    public function index($a = '', $b = '')
    {
        echo $a;
        echo $b;
        $this->view("eshop/index");
    }
}
