<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengusulan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengusulan_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Pengusulan PBI JKN KIS APBD';
		$data['pengusulan'] = $this->Pengusulan_m->get('pengusulan')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengusulan/index');
			$this->load->view('layout/footer');
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
					$config['upload_path']	='./assets/image/pengusulan';
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
		$this->Pengusulan_m->tambahDataPengusulan($data);
			$this->session->set_flashdata('pengusulan', 'Data Pengusulan Berhasil Ditambahkan');
			redirect('admin/pengusulan');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Pengusulan PBI JKN KIS APBD';
		$where = ['id_pengusulan' => $id];
		$data['pengusulan'] = $this->Pengusulan_m->get_where('pengusulan', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengusulan/ubah');
			$this->load->view('layout/footer');
		
	}

	public function update($id)
	{
		$nama 	= $this->input->post('nama');
		$nik 	= $this->input->post('nik');
		$ttl 	= $this->input->post('ttl');
		$alamat	= $this->input->post('alamat');
		$kecamatan	= $this->input->post('kecamatan');
		

		$data = array(
				'nama_pengaju' => $nama,
				'nik_pengaju' => $nik,
				'ttl' => $ttl,
				'alamat' => $alamat,
				'kecamatan' => $kecamatan
		);
		// $where = ['id_pengusulan' => $id];
		// $data_old = $this->Pengusulan_m->get_where('pengusulan', $where)->row_array();
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
		// 	$config['upload_path']	='./assets/image/pengusulan/sktm';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('sktm')) {
		// 		unlink("./assets/image/pengusulan/sktm/".$data_old['sktm']);
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
		// 	$config['upload_path']	='./assets/image/pengusulan/ktp';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('ktp')) {
		// 		unlink("./assets/image/pengusulan/ktp/".$data_old['ktp']);
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
		$this->Pengusulan_m->ubahDataPengusulan($data, $id);
		$this->session->set_flashdata('pengusulan', 'Data Pengusulan Berhasil Diubah');
		redirect('admin/pengusulan');
	}

	public function hapus($id)
	{
		$where = ['id_pengusulan' => $id];
		$data_old = $this->Pengusulan_m->get_where('pengusulan', $where)->row_array();
		unlink("./assets/image/pengusulan/".$data_old['sktm']);
		unlink("./assets/image/pengusulan/".$data_old['ktp']);
		unlink("./assets/image/pengusulan/".$data_old['kk']);
		unlink("./assets/image/pengusulan/".$data_old['depan']);
		unlink("./assets/image/pengusulan/".$data_old['tamu']);
		unlink("./assets/image/pengusulan/".$data_old['kamar']);
		unlink("./assets/image/pengusulan/".$data_old['dapur']);
		unlink("./assets/image/pengusulan/".$data_old['wc']);
		$this->db->delete('pengusulan', ['id_pengusulan' => $id]);
		$this->session->set_flashdata('pengusulan', 'Data pengusulan Berhasil Dihapus');
		redirect('admin/pengusulan');
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Dokter';
		$data['dokter'] = $this->Dokter_m->get('dokter')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_dokter');
		$this->load->view('layout/footer');
	}

	public function printsurat($id)
	{
		$where = ['id_pengusulan' => $id];
		$pengusulan = $this->Pengusulan_m->get_where('pengusulan', $where)->row_array();

		$data['nama'] = $pengusulan['nama_pengaju'];
		$data['ttl'] = $pengusulan['ttl'];
		$data['alamat'] = $pengusulan['alamat'];
		$data['kecamatan'] = $pengusulan['kecamatan'];
		$this->load->view('surat', $data);
	}

}