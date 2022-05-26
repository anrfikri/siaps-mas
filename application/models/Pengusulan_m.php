<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengusulan_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataPengusulan($data)
	{
		$this->db->insert('pengusulan', $data);
	}

	public function ubahDataPengusulan($data, $id)
	{
		$this->db->where('id_pengusulan', $id);
		$this->db->update('pengusulan', $data);
	}

}