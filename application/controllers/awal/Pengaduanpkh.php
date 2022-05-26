<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanpkh extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduanpkh_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Form Pengaduan Bansos PKH';
		$data['pengaduanpkh'] = $this->db->get('pengaduanpkh')->result_array();
			$this->load->view('halawal/pengaduanpkh',$data);
	}


	public function add()
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');

		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat
		);
		$this->Pengaduanpkh_m->tambahDataPengaduanpkh($data);
			redirect('welcome/pengaduanpkh');
	}

}