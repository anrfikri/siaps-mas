<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajuan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajuan_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Form Pengajuan Pembebasan Biaya Rawat Inap/Jalan';
		$data['pengajuan'] = $this->db->get('pengajuan')->result_array();
			$this->load->view('halawal/pengajuan',$data);
	}


	public function add()
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$kecamatan	= $this->input->post('kecamatan');
		$whatsapp	= $this->input->post('whatsapp');
		$sktm 	= $_FILES['sktm'];
		$ktp 	= $_FILES['ktp'];
		$kk 	= $_FILES['kk'];
		$rawat 	= $_FILES['rawat'];
		$depan 	= $_FILES['depan'];
		$tamu 	= $_FILES['tamu'];
		$kamar 	= $_FILES['kamar'];
		$dapur 	= $_FILES['dapur'];
		$wc 	= $_FILES['wc'];
		//sktm
		if ($sktm=''){}else{
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kk')) {
						echo "Upload gagal"; die();
					}else{
						$kk = $this->upload->data('file_name');
					}
				}
		//Surat Rawat
		if ($rawat=''){}else{
					$config['upload_path']	='./assets/image/pembebasan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('rawat')) {
						echo "Upload gagal"; die();
					}else{
						$rawat = $this->upload->data('file_name');
					}
				}
		//rumah Depan
		if ($depan=''){}else{
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
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
					$config['upload_path']	='./assets/image/pembebasan';
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
				'whatsapp' => $whatsapp,
				'sktm' => $sktm,
				'ktp' => $ktp,
				'kk' => $kk,
				'surat_rawat' => $rawat,
				'depan' => $depan,
				'tamu' => $tamu,
				'kamar' => $kamar,
				'dapur' => $dapur,
				'wc' => $wc
		);
		$this->Pengajuan_m->tambahDataPengajuan($data);
			redirect('welcome/pengajuan');
	}

}