<?php
class User
{
    private $error = array();
    private $a = array();
    public function signup($POST)
    {
        // echo $this->error;
        if (isset($_POST['sub_signup'])) {

            $data = array();
            $db = Database::getInstance();

            $data['name']       = trim($POST['name']);
            $data['email']      = trim($POST['email']);
            $data['password']   = trim($POST['password']);
            $password2          = trim($POST['password2']);
            /**
             * preg_match() =>  function searches a string for pattern, returning true if the pattern exists, and false otherwise.
             */
            if (empty($data['name']) || !preg_match("/^[a-zA-Z-' ]*$/", $data['name'])) {
                $this->error['name'] = "please enter a valid username <br>";
            }
            if (empty($data['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z_-]+.[a-zA-Z_-]+$/", $data['email'])) {
                $this->error['email'] = "please enter a valid email <br>";
            }
            if ($data['password'] !== $password2) {
                $this->error['password2'] = "  password do not match <br>";
            }
            if (strlen($data['password']) < 4) {
                $this->error['password'] = " please the password must be ateleas 4 characters long  <br>";
            }
            /**
             * check if The Email already exists 
             */
            if (empty($this->error)) {
                $sql = "SELECT * FROM `users` WHERE `email`=:email limit 1";
                $arr['email'] = $data['email'];
                $check = $db->read($sql, $arr);
                if (is_array($check)) {
                    $this->error['check_email'] = "The email is already in use<br>";
                }
            }
            // check for url address 
            if (empty($this->error)) {
                //seve
                $data['rank'] = "customer";
                $data['address'] = $this->get_random_string_max(60);
                $data['date'] = date("Y-m-d H:i:s");

                $query = "INSERT INTO `users`(`address`, `name`, `email`, `password`, `date`, `rank`) VALUES (:address,:name,:email,:password,:date,:rank)";
                $result = $db->write($query, $data);
                if ($result) {
                    $this->a .= "<div class='alert alert-success'> Row Inserted</div>";
                    // echo $this->a;
                    header("location:" . ROOT . "login");
                } else {
                    $this->a .= "<div class='alert alert-success'> Row don't Inserted</div>";
                    // echo $this->a;
                }
            }
            $_SESSION['error'] = $this->error;
            $_SESSION['a'] = $this->a;
        }
    }
    public function login($POST)
    {
        // echo $this->error;
        if (isset($_POST['login'])) {

            $data = array();
            $db = Database::getInstance();

            $data['email']      = trim($POST['email']);
            $data['password']   = trim($POST['password']);
            /**
             * preg_match() =>  function searches a string for pattern, returning true if the pattern exists, and false otherwise.
             */
            if (empty($data['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z_-]+.[a-zA-Z_-]+$/", $data['email'])) {
                $this->error['email'] = "please enter a valid email <br>";
            }
            if (strlen($data['password']) < 4) {
                $this->error['password'] = " please the password must be ateleas 4 characters long  <br>";
            }
            /**
             * check if The Email already exists 
             */
            if (empty($this->error)) {
            }
            // check for url address 
            if (empty($this->error)) {
                //seve

                $sql = "SELECT * FROM `users` WHERE `email`=:email limit 1";
                $result = $db->read($sql, $data);
                if (is_array($result)) {
                    // $this->error['check_email'] = "The email is already in use<br>";
                    // echo $this->a;
                    $_SESSION['a'] = $this->a[0];
                    header("location:" . ROOT . "home");
                    $this->a .= "<div class='alert alert-success'> Row Inserted</div>";
                } else {
                    $this->a .= "<div class='alert alert-success'> Row don't Inserted</div>";
                    // echo $this->a;
                }
            }
            $_SESSION['error'] = $this->error;
        }
    }
    public function get_user($url)
    {
    }
    /**
     * this function from return value to address
     */
    public function get_random_string_max($length)
    {
        $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $randomString = '';

        // تحسين الأداء بتعيين النص العشوائي مباشرة من random_bytes()
        $length = rand(4, $length);

        for ($i = 0; $i < $length; $i++) {
            // تحويل البايت العشوائي إلى قيمة بين 0 و63
            $index = rand(0, 62);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
