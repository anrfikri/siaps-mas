<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaktifasi_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataReaktifasi($data)
	{
		$this->db->insert('reaktifasi', $data);
	}

	public function ubahDataReaktifasi($data, $id)
	{
		$this->db->where('id_reaktifasi', $id);
		$this->db->update('reaktifasi', $data);
	}

}