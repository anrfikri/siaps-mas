<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lks extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lks_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data LKS';
		$data['lks'] = $this->Lks_m->get('lks')->result_array();
		$this->form_validation->set_rules('nama', 'Nama LKS', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat LKS', 'required|trim');
		$this->form_validation->set_rules('nama_pengurus', 'Nama Pengurus', 'required|trim');
		$this->form_validation->set_rules('tgl_no', 'Tgl / No Legalisasi', 'required|trim');
		$this->form_validation->set_rules('registrasi', 'Registrasi KEMENKUMHAM', 'required|trim');
		$this->form_validation->set_rules('tipe', 'Type LKS', 'required|trim');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan Pokok', 'required|trim');
		$this->form_validation->set_rules('berdiri', 'Berdiri / Ruang Lingkup', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/lks/index');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_lks' => html_escape($this->input->post('nama', true)),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'nama_pengurus' => html_escape($this->input->post('nama_pengurus', true)),
				'tgl_no' => html_escape($this->input->post('tgl_no', true)),
				'registrasi' => html_escape($this->input->post('registrasi', true)),
				'tipe_lks' => html_escape($this->input->post('tipe', true)),
				'kegiatan' => html_escape($this->input->post('kegiatan', true)),
				'jml_pekerja' => html_escape($this->input->post('jml_pekerja', true)),
				'dlm_p' => html_escape($this->input->post('dlm_p', true)),
				'dlm_l' => html_escape($this->input->post('dlm_l', true)),
				'non_p' => html_escape($this->input->post('non_p', true)),
				'non_l' => html_escape($this->input->post('non_l', true)),
				'jml_p' => html_escape($this->input->post('jml_p', true)),
				'jml_l' => html_escape($this->input->post('jml_l', true)),
				'jml_tot' => html_escape($this->input->post('jml_tot', true)),
				'berdiri' => html_escape($this->input->post('berdiri', true))
			];
			$this->Lks_m->tambahDataLks($data);
			$this->session->set_flashdata('lks', 'Data LKS Berhasil Ditambahkan');
			redirect('admin/lks');
		}
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data LKS';
		$where = ['id_lks' => $id];
		$data['lks'] = $this->Lks_m->get_where('lks', $where)->row_array();
		$this->form_validation->set_rules('nama', 'Nama LKS', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat LKS', 'required|trim');
		$this->form_validation->set_rules('nama_pengurus', 'Nama Pengurus', 'required|trim');
		$this->form_validation->set_rules('tgl_no', 'Tgl / No Legalisasi', 'required|trim');
		$this->form_validation->set_rules('registrasi', 'Registrasi KEMENKUMHAM', 'required|trim');
		$this->form_validation->set_rules('tipe', 'Type LKS', 'required|trim');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan Pokok', 'required|trim');
		$this->form_validation->set_rules('berdiri', 'Berdiri / Ruang Lingkup', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/lks/ubah', $data);
			$this->load->view('layout/footer');
		} else {
			$id = $this->input->post('id_lks');
			$data = [
				'nama_lks' => html_escape($this->input->post('nama', true)),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'nama_pengurus' => html_escape($this->input->post('nama_pengurus', true)),
				'tgl_no' => html_escape($this->input->post('tgl_no', true)),
				'registrasi' => html_escape($this->input->post('registrasi', true)),
				'tipe_lks' => html_escape($this->input->post('tipe', true)),
				'kegiatan' => html_escape($this->input->post('kegiatan', true)),
				'jml_pekerja' => html_escape($this->input->post('jml_pekerja', true)),
				'dlm_p' => html_escape($this->input->post('dlm_p', true)),
				'dlm_l' => html_escape($this->input->post('dlm_l', true)),
				'non_p' => html_escape($this->input->post('non_p', true)),
				'non_l' => html_escape($this->input->post('non_l', true)),
				'jml_p' => html_escape($this->input->post('jml_p', true)),
				'jml_l' => html_escape($this->input->post('jml_l', true)),
				'jml_tot' => html_escape($this->input->post('jml_tot', true)),
				'berdiri' => html_escape($this->input->post('berdiri', true))
			];
			$this->Lks_m->ubahDatalks($data, $id);
			$this->session->set_flashdata('lks', 'Data LKS Berhasil Diubah');
			redirect('admin/lks');
		}
	}

	public function hapus($id)
	{
		$this->db->delete('lks', ['id_lks' => $id]);
		$this->session->set_flashdata('lks', 'Data LKS Berhasil Dihapus');
		redirect('admin/lks');
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Obat';
		$data['obat'] = $this->Obat_m->get('obat')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_obat');
		$this->load->view('layout/footer');
	}

}