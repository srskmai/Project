<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function check_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $result = $this->db->where(['user_name' => $username, 'user_password' => $password])->get('user')->result_array();

        if (count($result) > 0) {
            $return_array['status'] = "Success";
            $return_array['data']   = $result;
        } else {
            $return_array['status'] = "Not found";
            $return_array['data']   = null;
        }

        return $return_array;
    }

    public function check_current_pw()
    {
        $user_data = $this->db->where(['user_id' => $this->input->post('user_id')])->get('user')->result_array();
        if (strtolower($user_data[0]['user_password']) == strtolower(md5($this->input->post('current_password')))) {
            return "OK";
        } else {
            return "Fail";
        }
    }

    public function change_password()
    {
        $data_update = array(
          'user_password' => md5($this->input->post('new_password')),
          'updated_by' => $_SESSION['username'],
          'updated_date' => date('Y-m-d H:i:s'),
        );

        $this->db->trans_start();
        $this->db->where(['user_id' => $this->input->post('user_id')])->update('user', $data_update);
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            return "Error";
        } else {
            return "Success";
        }
    }
}
