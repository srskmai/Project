<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('login_model'));
    }

    public function index()
    {
        $this->load->view('login_view');
    }

    public function check_login()
    {
        $result = $this->login_model->check_login();

        if ($result['status'] == "Success") {
            $session_data = array(
              'user_id'  => $result['data'][0]['user_id'],
              'username'  => $result['data'][0]['user_name'],
            );
            $this->session->set_userdata($session_data);

            echo "Success";
        } else {
            echo "Error";
        }
    }

    public function change_password()
    {
        $check_password = $this->login_model->check_current_pw();
        if ($check_password == "OK") {
            echo $this->login_model->change_password();
        } else {
            echo "Error";
        }
    }
}
