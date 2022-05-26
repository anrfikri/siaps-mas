<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaktifasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reaktifasi_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Reaktifasi PBI JKN KIS APBN';
		$data['reaktifasi'] = $this->Reaktifasi_m->get('reaktifasi')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/reaktifasi/index');
			$this->load->view('layout/footer');
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
			$this->session->set_flashdata('reaktifasi', 'Data Reaktifasi PBI JKN KIS APBN Berhasil Ditambahkan');
			redirect('admin/reaktifasi');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Reaktifasi PBI JKN KIS APBN';
		$where = ['id_reaktifasi' => $id];
		$data['reaktifasi'] = $this->Reaktifasi_m->get_where('reaktifasi', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/reaktifasi/ubah');
			$this->load->view('layout/footer');
		
	}

	public function update($id)
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
		// $where = ['id_reaktifasi' => $id];
		// $data_old = $this->Reaktifasi_m->get_where('reaktifasi', $where)->row_array();
		// $nama 	= $this->input->post('nama');
		// $nik 	= $this->input->post('nik');
		// $ttl 	= $this->input->post('ttl');
		// $alamat	= $this->input->post('alamat');
		// $sktm 	= $_FILES['sktm'];
		// $ktp 	= $_FILES['ktp'];
		// $kk 	= $_FILES['kk'];
		// // var_dump($sktm['name']);
		// if (!$sktm['name']){
		// 	$data = array(
		// 		'nama_pengaju' => $nama,
		// 		'nik_pengaju' => $nik,
		// 		'ttl' => $ttl,
		// 		'alamat' => $alamat
		// 	);
		// 	// echo "tanpa gambar";
		// }else{
		// 	$config['upload_path']	='./assets/image/reaktifasi';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('sktm')) {
		// 		unlink("./assets/image/reaktifasi/".$data_old['sktm']);
		// 		$sktm = $this->upload->data('file_name');
		// 	}else{
		// 		echo 'gagal upload';
		// 	}

		// 	$data = array(
		// 			'nama_pengaju' => $nama,
		// 			'nik_pengaju' => $nik,
		// 			'ttl' => $ttl,
		// 			'alamat' => $alamat,
		// 			'sktm' => $sktm
		// 	);
		// 	// echo "dengan gambar";
		// }

		// //ktp
		// if (!$ktp['name']){
		// 	$data = array(
		// 		'nama_pengaju' => $nama,
		// 		'nik_pengaju' => $nik,
		// 		'ttl' => $ttl,
		// 		'alamat' => $alamat,
		// 		'sktm' => $sktm
		// 	);
		// 	// echo "tanpa gambar";
		// }else{
		// 	$config['upload_path']	='./assets/image/reaktifasi';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('ktp')) {
		// 		unlink("./assets/image/reaktifasi/".$data_old['ktp']);
		// 		$ktp = $this->upload->data('file_name');
		// 	}else{
		// 		echo 'gagal upload';
		// 	}

		// 	$data = array(
		// 			'nama_pengaju' => $nama,
		// 			'nik_pengaju' => $nik,
		// 			'ttl' => $ttl,
		// 			'alamat' => $alamat,
		// 			'sktm' => $sktm,
		// 			'ktp' => $ktp
		// 	);
		// 	// echo "dengan gambar";
		// }
		// //kk
		// if (!$kk['name']){
		// 	$data = array(
		// 		'nama_pengaju' => $nama,
		// 		'nik_pengaju' => $nik,
		// 		'ttl' => $ttl,
		// 		'alamat' => $alamat,
		// 		'sktm' => $sktm,
		// 		'ktp' => $ktp
		// 	);
		// 	// echo "tanpa gambar";
		// }else{
		// 	$config['upload_path']	='./assets/image/reaktifasi/kk';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('kk')) {
		// 		unlink("./assets/image/reaktifasi/".$data_old['kk']);
		// 		$ktp = $this->upload->data('file_name');
		// 	}else{
		// 		echo 'gagal upload';
		// 	}

		// 	$data = array(
		// 			'nama_pengaju' => $nama,
		// 			'nik_pengaju' => $nik,
		// 			'ttl' => $ttl,
		// 			'alamat' => $alamat,
		// 			'sktm' => $sktm,
		// 			'ktp' => $ktp,
		// 			'kk' => $kk
		// 	);
		// 	// echo "dengan gambar";
		// }
		$this->Reaktifasi_m->ubahDataReaktifasi($data, $id);
		$this->session->set_flashdata('reaktifasi', 'Data Reaktifasi PBI JKN KIS APBN Berhasil Diubah');
		redirect('admin/reaktifasi');
	}

	public function hapus($id)
	{
		$where = ['id_reaktifasi' => $id];
		$data_old = $this->Reaktifasi_m->get_where('reaktifasi', $where)->row_array();
		unlink("./assets/image/reaktifasi/".$data_old['sktm']);
		unlink("./assets/image/reaktifasi/".$data_old['ktp']);
		unlink("./assets/image/reaktifasi/".$data_old['kk']);
		$this->db->delete('reaktifasi', ['id_reaktifasi' => $id]);
		$this->session->set_flashdata('reaktifasi', 'Data Reaktifasi PBI JKN KIS APBN Berhasil Dihapus');
		redirect('admin/reaktifasi');
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Dokter';
		$data['dokter'] = $this->Dokter_m->get('dokter')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_dokter');
		$this->load->view('layout/footer');
	}

}