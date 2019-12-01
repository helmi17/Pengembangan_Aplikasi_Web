<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->get('tbl_pendaftaran');
    return $query;
  }
  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
class READ extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->get('tbl_admin');
    return $query;
  }
  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
