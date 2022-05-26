<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanbpnt_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataPengaduanbpnt($data)
	{
		$this->db->insert('pengaduanbpnt', $data);
	}

	public function ubahDataPengaduanbpnt($data, $id)
	{
		$this->db->where('id_pengaduanbpnt', $id);
		$this->db->update('pengaduanbpnt', $data);
	}

}