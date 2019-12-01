<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_User extends CI_Model
{
    public function get_data()
    {
        $result = $this->db->query('SELECT * FROM tbl_login l, role_id v WHERE l.EMAIL="' . $this->session->userdata('email') . '" AND l.ID="' . $this->session->userdata('role_id') . '" AND l.ID=v.ID group by l.EMAIL')->row_array();
        return $result;
    }
    public function edit_data($nama, $email)
    {
        $this->db->query("UPDATE tbl_login SET NAME='" . $nama . "', EMAIL='" . $email . "' WHERE EMAIL='" . $this->session->userdata('email') . "'");
        return $this->db->affected_rows();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
