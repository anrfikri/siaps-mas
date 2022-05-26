<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Bansos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bansos_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Bantuan Sosial';
		$data['bansos'] = $this->Bansos_m->get('bansos')->result_array();
		$this->form_validation->set_rules('kk', 'No KK', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/bansos/index', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'kk_penerima' => html_escape($this->input->post('kk', true)),
				'nik_penerima' => html_escape($this->input->post('nik', true)),
				'nama_penerima' => html_escape($this->input->post('nama', true)),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'bpnt' => html_escape($this->input->post('bpnt', true)),
				'bst' => html_escape($this->input->post('bst', true)),
				'pkh' => html_escape($this->input->post('pkh', true)),
				'pbi' => html_escape($this->input->post('pbi', true)),
				'bpnt_ppkm' => html_escape($this->input->post('bpnt_ppkm', true)),
				'ket_meninggal' => html_escape($this->input->post('ket', true))
			];
			$this->Bansos_m->tambahDataBansos($data);
			$this->session->set_flashdata('bansos', 'Data BANSOS Berhasil Ditambahkan');
			redirect('admin/bansos');
		}
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Penerima BANSOS';
		$where = ['id_penerima' => $id];
		$data['bansos'] = $this->Bansos_m->get_where('bansos', $where)->row_array();
		$this->form_validation->set_rules('kk', 'No KK', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/bansos/ubah', $data);
			$this->load->view('layout/footer');
		} else {
			$id = $this->input->post('id_penerima');
			$data = [
				'kk_penerima' => html_escape($this->input->post('kk', true)),
				'nik_penerima' => html_escape($this->input->post('nik', true)),
				'nama_penerima' => html_escape($this->input->post('nama', true)),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'bpnt' => html_escape($this->input->post('bpnt', true)),
				'bst' => html_escape($this->input->post('bst', true)),
				'pkh' => html_escape($this->input->post('pkh', true)),
				'pbi' => html_escape($this->input->post('pbi', true)),
				'bpnt_ppkm' => html_escape($this->input->post('bpnt_ppkm', true)),
				'ket_meninggal' => html_escape($this->input->post('ket', true))
			];
			$this->Bansos_m->ubahDataBansos($data, $id);
			$this->session->set_flashdata('bansos', 'Data BANSOS Berhasil Diubah');
			redirect('admin/bansos');
		}
	}

	public function hapus($id)
	{
		$this->db->delete('bansos', ['id_penerima' => $id]);
		$this->session->set_flashdata('bansos', 'Data BANSOS Berhasil Dihapus');
		redirect('admin/bansos');
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Pasien';
		$data['pasien'] = $this->Pasien_m->get('pasien')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_pasien');
		$this->load->view('layout/footer');
	}

	public function import_excel(){
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['import_excel']['name']) && in_array($_FILES['import_excel']['type'], $file_mimes)) 
		{
			$arr_file = explode('.', $_FILES['import_excel']['name']);
			$extension = end($arr_file);
		
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			
			$spreadsheet = $reader->load($_FILES['import_excel']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			$this->db->truncate('bansos');
			foreach ($sheetData as $x => $excel) {
				if ($x == 0) {
					continue;
				}
				$alamat = $excel[5] . " Rt.". $excel[6]. " Rw.".$excel[7] . " Kec." . $excel[3]. " Kab.". $excel[2]. " ".$excel[1];
				$data = [
					'kk_penerima' => $excel[9],
					'nik_penerima' => $excel[10],
					'nama_penerima' => $excel[11],
					'alamat' => $alamat,
					'bpnt' => $excel[19],
					'bst' => "",
					'pkh' => $excel[20],
					'pbi' => $excel[22],
					'bpnt_ppkm' => $excel[21],
					'ket_meninggal' => "",
				];

				// $this->modelpemilih->save($data);
				$this->Bansos_m->tambahDataBansos($data);
				
			}
			$this->session->set_flashdata('bansos', 'Data BANSOS Berhasil Ditambahkan');
				redirect('admin/bansos');
		}	
		
	}
}