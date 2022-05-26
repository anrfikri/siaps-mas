<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterangan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keterangan_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Keterangan DTKS untuk Rekomendasi KIP';
		$data['keterangan'] = $this->Keterangan_m->get('keterangan')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/keterangan/index');
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
		$akte 	= $_FILES['akte'];
		//sktm
		if ($sktm=''){}else{
					$config['upload_path']	='./assets/image/keterangan';
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
					$config['upload_path']	='./assets/image/keterangan';
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
					$config['upload_path']	='./assets/image/keterangan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kk')) {
						echo "Upload gagal"; die();
					}else{
						$kk = $this->upload->data('file_name');
					}
				}

		//Akte Kelahiran
		if ($akte=''){}else{
					$config['upload_path']	='./assets/image/keterangan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';

					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('akte')) {
						echo "Upload gagal"; die();
					}else{
						$akte = $this->upload->data('file_name');
					}
				}
		
		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'sktm' => $sktm,
				'ktp' => $ktp,
				'kk' => $kk,
				'akte' => $akte
		);
		$this->Keterangan_m->tambahDataKeterangan($data);
			$this->session->set_flashdata('keterangan', 'Data Keterangan DTKS untuk Rekomendasi KIP Berhasil Ditambahkan');
			redirect('admin/keterangan');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Keterangan DTKS untuk Rekomendasi KIP';
		$where = ['id_keterangan' => $id];
		$data['keterangan'] = $this->Keterangan_m->get_where('keterangan', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/keterangan/ubah');
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
		// $where = ['id_keterangan' => $id];
		// $data_old = $this->Keterangan_m->get_where('keterangan', $where)->row_array();
		// $nama 	= $this->input->post('nama');
		// $nik 	= $this->input->post('nik');
		// $ttl 	= $this->input->post('ttl');
		// $alamat	= $this->input->post('alamat');
		// $sktm 	= $_FILES['sktm'];
		// $ktp 	= $_FILES['ktp'];
		// $kk 	= $_FILES['kk'];
		// $rumah 	= $_FILES['rumah'];
		// // var_dump($sktm['name']);
		// if (!$sktm['name']){
		// 	$data = array(
		// 		'nama_pengaju' => $nama,
		// 		'nik_pengaju' => $nik,
		// 		'ttl' => $ttl,
		// 		'alamat' => $alamat,
		// 	);
		// 	// echo "tanpa gambar";
		// }else{
		// 	$config['upload_path']	='./assets/image/keterangan/sktm';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('sktm')) {
		// 		unlink("./assets/image/keterangan/".$data_old['sktm']);
		// 		$sktm = $this->upload->data('file_name');
		// 	}else{
		// 		echo 'gagal upload';
		// 	}

		// 	$data = array(
		// 			'nama_pengaju' => $nama,
		// 			'nik_pengaju' => $nik,
		// 			'ttl' => $ttl,
		// 			'alamat' => $alamat
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
		// 	$config['upload_path']	='./assets/image/keterangan/ktp';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('ktp')) {
		// 		unlink("./assets/image/keterangan/".$data_old['ktp']);
		// 		$ktp = $this->upload->data('file_name');
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
		$this->Keterangan_m->ubahDataKeterangan($data, $id);
		$this->session->set_flashdata('keterangan', 'Data Keterangan DTKS untuk Rekomendasi KIP Berhasil Diubah');
		redirect('admin/keterangan');
	}

	public function hapus($id)
	{
		$where = ['id_keterangan' => $id];
		$data_old = $this->Keterangan_m->get_where('keterangan', $where)->row_array();
		unlink("./assets/image/keterangan/".$data_old['sktm']);
		unlink("./assets/image/keterangan/".$data_old['ktp']);
		unlink("./assets/image/keterangan/".$data_old['kk']);
		unlink("./assets/image/keterangan/".$data_old['akte']);
		$this->db->delete('keterangan', ['id_keterangan' => $id]);
		$this->session->set_flashdata('keterangan', 'Data keterangan Berhasil Dihapus');
		redirect('admin/keterangan');
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