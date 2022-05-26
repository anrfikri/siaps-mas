<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataPengajuan($data)
	{
		$this->db->insert('pengajuan', $data);
	}

	public function ubahDataPengajuan($data, $id)
	{
		$this->db->where('id_pengajuan', $id);
		$this->db->update('pengajuan', $data);
	}

}