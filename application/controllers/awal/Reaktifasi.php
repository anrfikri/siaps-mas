<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaktifasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reaktifasi_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Reaktifasi PBI JKN KIS APBN';
		$data['reaktifasi'] = $this->Reaktifasi_m->get('reaktifasi')->result_array();
			$this->load->view('halawal/reaktifasi',$data);
	}


	public function add()
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$sktm 	= $_FILES['sktm'];
		$ktp 	= $_FILES['ktp'];
		$kk 	= $_FILES['kk'];
		//sktm
		if ($sktm=''){}else{
					$config['upload_path']	='./assets/image/reaktifasi';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('sktm')) {
						echo "Upload gagal"; die();
					}else{
						$sktm = $this->upload->data('file_name');
					}
				}
		//ktp
		if ($ktp=''){}else{
					$config['upload_path']	='./assets/image/reaktifasi';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('ktp')) {
						echo "Upload gagal"; die();
					}else{
						$ktp = $this->upload->data('file_name');
					}
				}

		//kk
		if ($kk=''){}else{
					$config['upload_path']	='./assets/image/reaktifasi';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kk')) {
						echo "Upload gagal"; die();
					}else{
						$kk = $this->upload->data('file_name');
					}
				}

		
		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'sktm' => $sktm,
				'ktp' => $ktp,
				'kk' => $kk
		);
		$this->Reaktifasi_m->tambahDataReaktifasi($data);
			redirect('welcome/reaktifasi');
	}
}
