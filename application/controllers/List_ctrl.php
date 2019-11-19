<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_ctrl extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    protected $data = '';



    public function __construct()
    {
        parent::__construct();

        // $this->__G_check_isvalidated();
        // $this->__G_title_notification();
    }
    
    public function index()
    {
        $this->template
        ->title('List')
        // ->title_link('')
        ->set_layout('main')
        ->build('list_view.php', $this->data);
    }

    public function list_detail()
    {
        $this->template
        ->title('List')
        // ->title_link('')
        ->set_layout('main')
        ->build('list_detail_view.php', $this->data);
    }
}
