<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function get_user()
    {
        $result_user = $this->db->where_not_in('user_type', 'Admin')->get('user')->result_array();
        return json_encode($result_user);
    }

    public function create_user()
    {
        $check_exists = $this->db->where(['user_name' => $this->input->post('username')])->get('user')->result_array();

        if (count($check_exists) > 0) {
            return "Exists";
        } else {
            $data_insert = array(
              'user_name' => $this->input->post('username'),
              'user_password' => md5($this->input->post('password')),
              'user_type' => $this->input->post('user_type'),
              'created_by' => $_SESSION['username'],
              'created_date' => date('Y-m-d H:i:s'),
              'updated_by' => $_SESSION['username'],
              'updated_date' => date('Y-m-d H:i:s'),
            );
            $this->db->insert('user', $data_insert);
            if ($this->db->affected_rows() != 1) {
                return "Insert error";
            } else {
                return "Success";
            }
        }
    }

    public function update_user()
    {
        if ($this->input->post('password') == '') {
            $data_update = array(
              'user_type' => $this->input->post('user_type'),
              'updated_by' => $_SESSION['username'],
              'updated_date' => date('Y-m-d H:i:s'),
            );
        } else {
            $data_update = array(
              'user_password' => md5($this->input->post('password')),
              'user_type' => $this->input->post('user_type'),
              'updated_by' => $_SESSION['username'],
              'updated_date' => date('Y-m-d H:i:s'),
            );
        }

        $this->db->trans_start();
        $this->db->where(['user_id' => $this->input->post('id')])->update('user', $data_update);
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            return "Error";
        } else {
            return "Success";
        }
    }


    public function delete_user()
    {
        $this->db->trans_start();
        $this->db->where(['user_id' => $this->input->post('id')])->delete('user');
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return "Error";
        } else {
            return "Success";
        }
    }
}
