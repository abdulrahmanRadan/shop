<?php
class Admin extends Controller
{
    public function index()
    {
        $User = $this->load_model('User');
        // we are check chether the user is logged in or not
        $data['user_data'] = $User->check_login(true);
        // if is $data['user_data'] exists or not 
        // show($data['user_data']);
        if (is_array($data['user_data'])) {
            $data['user_data'] = $data['user_data'];
        }
        $data['page_title'] = "Admin";
        $this->view("admin/index", $data);
        // show($data['user_data']->rank);
    }
}
