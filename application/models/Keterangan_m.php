<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterangan_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataKeterangan($data)
	{
		$this->db->insert('keterangan', $data);
	}

	public function ubahDataKeterangan($data, $id)
	{
		$this->db->where('id_keterangan', $id);
		$this->db->update('keterangan', $data);
	}

}