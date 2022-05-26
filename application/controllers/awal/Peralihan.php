<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peralihan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Peralihan_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Form Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD ';
		$data['peralihan'] = $this->db->get('peralihan')->result_array();
			$this->load->view('halawal/peralihan',$data);
	}


	public function add()
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$kecamatan	= $this->input->post('kecamatan');
		$sktm 	= $_FILES['sktm'];
		$ktp 	= $_FILES['ktp'];
		$kk 	= $_FILES['kk'];
		$depan 	= $_FILES['depan'];
		$tamu 	= $_FILES['tamu'];
		$kamar 	= $_FILES['kamar'];
		$dapur 	= $_FILES['dapur'];
		$wc 	= $_FILES['wc'];
		//sktm
		if ($sktm=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
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
					$config['upload_path']	='./assets/image/peralihan';
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
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kk')) {
						echo "Upload gagal"; die();
					}else{
						$kk = $this->upload->data('file_name');
					}
				}
		//rumah Depan
		if ($depan=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('depan')) {
						echo "Upload gagal"; die();
					}else{
						$depan = $this->upload->data('file_name');
					}
				}
		//ruang tamu
		if ($tamu=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('tamu')) {
						echo "Upload gagal"; die();
					}else{
						$tamu = $this->upload->data('file_name');
					}
				}
		//kamar
		if ($kamar=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kamar')) {
						echo "Upload gagal"; die();
					}else{
						$kamar = $this->upload->data('file_name');
					}
				}
		//dapur
		if ($dapur=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('dapur')) {
						echo "Upload gagal"; die();
					}else{
						$dapur = $this->upload->data('file_name');
					}
				}
		//wc
		if ($wc=''){}else{
					$config['upload_path']	='./assets/image/peralihan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('wc')) {
						echo "Upload gagal"; die();
					}else{
						$wc = $this->upload->data('file_name');
					}
				}
		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'kecamatan' => $kecamatan,
				'sktm' => $sktm,
				'ktp' => $ktp,
				'kk' => $kk,
				'depan' => $depan,
				'tamu' => $tamu,
				'kamar' => $kamar,
				'dapur' => $dapur,
				'wc' => $wc
		);
		$this->Peralihan_m->tambahDataPeralihan($data);
			redirect('welcome/peralihan');
	}

}