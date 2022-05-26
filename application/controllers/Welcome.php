<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('halawal/index');
	}

	public function caribansos()
	{
		
	 $carinik = $this->input->post('carinik', true);
	 redirect("welcome/bansos/$carinik");

	}

	public function bansos($nik = null)
	{

		$carinik = $this->input->post('carinik', true);
		$data['title'] = 'Data Bantuan Sosial';
		if($nik == null){
			$data['bansos'] = NULL;
		}else{
			$data['bansos'] = $this->db->get_where('bansos', array('nik_penerima' => $nik) )->row_array();
		}
		$this->load->view('halawal/bansos',$data);
	}

	public function lks()
	{
		$data['title'] = 'Data Lembaga Kesejahteraan Sosial';
		$data['lks'] = $this->db->get('lks')->result_array();
		$this->load->view('halawal/lks',$data);
	}

	public function pengajuan()
	{
		$data['title'] = 'Form Pengajuan Pembebasan Biaya Rawat Inap / Jalan';
		$this->load->view('konfir/pengajuan');}

	public function pengusulan()
	{
		$data['title'] = 'Form Pengusulan PBI JKN KIS APBD';
		$this->load->view('konfir/pengusulan');}

	public function peralihan()
	{
		$data['title'] = 'Form Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD';
		$this->load->view('konfir/peralihan');}

	public function keterangan()
	{
		$data['title'] = 'Form Keterangan DTKS untuk Rekomendasi KIP';
		$this->load->view('konfir/keterangan');}

	public function pengaduanpkh()
	{
		$data['title'] = 'Form Pengaduan Bansos PKH';
		$this->load->view('konfir/pengaduanpkh');}

	public function pengaduanbpnt()
	{
		$data['title'] = 'Form Pengaduan Bansos Pangan Sembako / BPNT';
		$this->load->view('konfir/pengaduanbpnt');}

	public function reaktifasi()
	{
		$data['title'] = 'Form Data Reaktifasi PBI JKN KIS APBN';
		$this->load->view('konfir/reaktifasi');}

}
