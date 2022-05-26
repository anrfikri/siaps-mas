<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanbpnt extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduanbpnt_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Form Tambah Data Pengaduan Bansos bpnt';
		$data['pengaduanbpnt'] = $this->db->get('pengaduanbpnt')->result_array();
			$this->load->view('halawal/pengaduanbpnt',$data);
	}


	public function add()
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$pengaduan	= $this->input->post('pengaduan');
		$ktp 	= $_FILES['ktp'];
		//ktp
		if ($ktp=''){}else{
					$config['upload_path']	='./assets/image/pengaduanbpnt';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('ktp')) {
						echo "Upload gagal"; die();
					}else{
						$ktp = $this->upload->data('file_name');
					}
				}
		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'pengaduan' => $pengaduan,
				'ktp' => $ktp
		);
		$this->Pengaduanbpnt_m->tambahDataPengaduanbpnt($data);
			redirect('welcome/pengaduanbpnt');
	}

}