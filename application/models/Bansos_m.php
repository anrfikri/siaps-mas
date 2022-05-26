<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bansos_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataBansos($data)
	{
		$this->db->insert('bansos', $data);
	}

	public function ubahDataBansos($data, $id)
	{
		$this->db->where('id_penerima', $id);
		$this->db->update('bansos', $data);
	}

}