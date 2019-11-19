<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function index()
    {
        $this->template
        ->title('List')
        // ->title_link('')
        ->set_layout('main')
        ->build('setting_view.php');
    }
}
