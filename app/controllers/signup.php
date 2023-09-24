<?php
class signup extends Controller
{
    public function index()
    {
        $data['page_title'] = "signup";
        if ($_SERVER['REQUEST_METHOD']) {
            show($_POST);
            $User = $this->load_model("User");
        }
        $this->view("signup", $data);
    }
}
