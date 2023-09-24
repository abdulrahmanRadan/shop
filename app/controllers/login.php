<?php
class login extends Controller
{
    public function index()
    {
        $data['page_title'] = "login";
        $this->view("login", $data);
    }
}
