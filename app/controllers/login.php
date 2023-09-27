<?php
class login extends Controller
{
    public function index()
    {
        $data['page_title'] = "login";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $this->load_model("user");
            $user->login($_POST);
        }

        // show($_POST);
        $this->view("login", $data);
    }
}
