<?php
class Signup extends Controller
{
    public function index()
    {
        $data['page_title'] = "signup";
        if ($_SERVER['REQUEST_METHOD']) {
            // show($_POST);
            $User = $this->load_model("User");
            /**
             * signup($_POST) => this is from user.class::signup()
             */
            $User->signup($_POST);
        }
        $this->view("signup", $data);
    }
}
