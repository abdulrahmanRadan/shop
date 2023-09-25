<?php
class User
{
    public function signup($POST)
    {
        $username  = $POST['name'];
        $email     = $POST['email'];
        $password  = $POST['password'];
        $password2 = $POST['password2'];
    }
    public function lofin($POST)
    {
    }
    public function get_user($url)
    {
    }
}
