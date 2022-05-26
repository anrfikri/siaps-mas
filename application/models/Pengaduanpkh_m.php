<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanpkh_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataPengaduanpkh($data)
	{
		$this->db->insert('pengaduanpkh', $data);
	}

	public function ubahDataPengaduanpkh($data, $id)
	{
		$this->db->where('id_pengaduanpkh', $id);
		$this->db->update('pengaduanpkh', $data);
	}

}