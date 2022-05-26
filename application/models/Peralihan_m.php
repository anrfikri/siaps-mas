<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peralihan_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataPeralihan($data)
	{
		$this->db->insert('peralihan', $data);
	}

	public function ubahDataPeralihan($data, $id)
	{
		$this->db->where('id_peralihan', $id);
		$this->db->update('peralihan', $data);
	}

}