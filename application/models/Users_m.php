<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	

	public function tambahDataUser($data)
	{
		$this->db->insert('users', $data);
	}

	public function ubahDataUser($data,$id)
	{
		$this->db->where('id_user', $id);
		$this->db->update('users', $data);
		
	}

}