<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanpkh extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduanpkh_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Pengaduan Bansos PKH';
		$data['pengaduanpkh'] = $this->Pengaduanpkh_m->get('pengaduanpkh')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengaduanpkh/index');
			$this->load->view('layout/footer');
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
			$this->session->set_flashdata('pengaduanpkh', 'Data Pengaduan PKH Berhasil Ditambahkan');
			redirect('admin/pengaduanpkh');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data pengaduanpkh PBI JKN KIS APBD';
		$where = ['id_pengaduanpkh' => $id];
		$data['pengaduanpkh'] = $this->Pengaduanpkh_m->get_where('pengaduanpkh', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengaduanpkh/ubah');
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
		$this->Pengaduanpkh_m->ubahDataPengaduanpkh($data, $id);
		$this->session->set_flashdata('pengaduanpkh', 'Data Pengaduan PKH Berhasil Diubah');
		redirect('admin/pengaduanpkh');
	}

	public function hapus($id)
	{
		$this->db->delete('pengaduanpkh', ['id_pengaduanpkh' => $id]);
		$this->session->set_flashdata('pengaduanpkh', 'Data Pengaduan PKH Berhasil Dihapus');
		redirect('admin/pengaduanpkh');
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