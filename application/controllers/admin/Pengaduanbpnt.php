<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaduanbpnt extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduanbpnt_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data pengaduanbpnt PBI JKN KIS APBD';
		$data['pengaduanbpnt'] = $this->Pengaduanbpnt_m->get('pengaduanbpnt')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengaduanbpnt/index');
			$this->load->view('layout/footer');
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
			$this->session->set_flashdata('pengaduanbpnt', 'Data Pengaduan BPNT Berhasil Ditambahkan');
			redirect('admin/pengaduanbpnt');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data pengaduan BPNT';
		$where = ['id_pengaduanbpnt' => $id];
		$data['pengaduanbpnt'] = $this->Pengaduanbpnt_m->get_where('pengaduanbpnt', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengaduanbpnt/ubah');
			$this->load->view('layout/footer');
		
	}

	public function update($id)
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$pengaduan	= $this->input->post('pengaduan');

		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'pengaduan' => $pengaduan
		);
		// $where = ['id_pengaduanbpnt' => $id];
		// $data_old = $this->Pengaduanbpnt_m->get_where('pengaduanbpnt', $where)->row_array();
		// $nama 	= $this->input->post('nama');
		// $nik 	= $this->input->post('nik');
		// $ttl 	= $this->input->post('ttl');
		// $alamat	= $this->input->post('alamat');
		// $pengaduan	= $this->input->post('pengaduan');
		// $ktp 	= $_FILES['ktp'];
		// // var_dump($ktp['name']);
		// if (!$ktp['name']){
		// 	$data = array(
		// 		'nama_pengaju' => $nama,
		// 		'nik_pengaju' => $nik,
		// 		'ttl' => $ttl,
		// 		'alamat' => $alamat,
		// 		'pengaduan' => $pengaduan
		// 	);
		// 	// echo "tanpa gambar";
		// }else{
		// 	$config['upload_path']	='./assets/image/pengaduanbpnt';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('ktp')) {
		// 		unlink("./assets/image/pengaduanbpnt/".$data_old['ktp']);
		// 		$ktp = $this->upload->data('file_name');
		// 	}else{
		// 		echo 'gagal upload';
		// 	}

		// 	$data = array(
		// 			'nama_pengaju' => $nama,
		// 			'nik_pengaju' => $nik,
		// 			'ttl' => $ttl,
		// 			'alamat' => $alamat,
		// 			'pengaduan' => $pengaduan,
		// 			'ktp' => $ktp
		// 	);
		// 	// echo "dengan gambar";
		// }
		$this->Pengaduanbpnt_m->ubahDataPengaduanbpnt($data, $id);
		$this->session->set_flashdata('pengaduanbpnt', 'Data pengaduanbpnt Berhasil Diubah');
		redirect('admin/pengaduanbpnt');
	}

	public function hapus($id)
	{
		$where = ['id_pengaduanbpnt' => $id];
		$data_old = $this->Pengaduanbpnt_m->get_where('pengaduanbpnt', $where)->row_array();
		unlink("./assets/image/pengaduanbpnt/".$data_old['ktp']);
		$this->db->delete('pengaduanbpnt', ['id_pengaduanbpnt' => $id]);
		$this->session->set_flashdata('pengaduanbpnt', 'Data Pengaduan BPNT Berhasil Dihapus');
		redirect('admin/pengaduanbpnt');
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