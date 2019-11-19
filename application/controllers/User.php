<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    protected $data = '';
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('user_model'));
    }

    public function index()
    {
        $this->template
        ->title('Dashboard')
        ->set_layout('main')
        ->build('user_view.php', $this->data);
    }

    public function get_user()
    {
        echo $this->user_model->get_user();
    }

    public function create_user()
    {
        echo $this->user_model->create_user();
    }

    public function update_user()
    {
        echo $this->user_model->update_user();
    }

    public function delete_user()
    {
        echo $this->user_model->delete_user();
    }
}
