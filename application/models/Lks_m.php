<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lks_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataLks($data)
	{
		$this->db->insert('lks', $data);
	}

	public function ubahDataLks($data, $id)
	{
		$this->db->where('id_lks', $id);
		$this->db->update('lks', $data);
	}

}