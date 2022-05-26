<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peralihan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Peralihan_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD';
		$data['peralihan'] = $this->Peralihan_m->get('peralihan')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/peralihan/index');
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
		$this->Peralihan_m->tambahDataperalihan($data);
			$this->session->set_flashdata('peralihan', 'Data Peralihan Berhasil Ditambahkan');
			redirect('admin/peralihan');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data peralihan';
		$where = ['id_peralihan' => $id];
		$data['peralihan'] = $this->Peralihan_m->get_where('peralihan', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/peralihan/ubah');
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
		// $where = ['id_peralihan' => $id];
		// $data_old = $this->Peralihan_m->get_where('peralihan', $where)->row_array();
		// $nama 	= $this->input->post('nama');
		// $nik 	= $this->input->post('nik');
		// $ttl 	= $this->input->post('ttl');
		// $alamat	= $this->input->post('alamat');
		// $sktm 	= $_FILES['sktm'];
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
		// 	$config['upload_path']	='./assets/image/peralihan/sktm';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('sktm')) {
		// 		unlink("./assets/image/peralihan/sktm/".$data_old['sktm']);
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
		$this->Peralihan_m->ubahDataPeralihan($data, $id);
		$this->session->set_flashdata('peralihan', 'Data Peralihan Berhasil Diubah');
		redirect('admin/peralihan');
	}

	public function hapus($id)
	{
		$where = ['id_peralihan' => $id];
		$data_old = $this->Peralihan_m->get_where('peralihan', $where)->row_array();
		unlink("./assets/image/peralihan/".$data_old['sktm']);
		unlink("./assets/image/peralihan/".$data_old['ktp']);
		unlink("./assets/image/peralihan/".$data_old['kk']);
		unlink("./assets/image/peralihan/".$data_old['depan']);
		unlink("./assets/image/peralihan/".$data_old['tamu']);
		unlink("./assets/image/peralihan/".$data_old['kamar']);
		unlink("./assets/image/peralihan/".$data_old['dapur']);
		unlink("./assets/image/peralihan/".$data_old['wc']);
		$this->db->delete('peralihan', ['id_peralihan' => $id]);
		$this->session->set_flashdata('peralihan', 'Data Peralihan Berhasil Dihapus');
		redirect('admin/peralihan');
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
		$where = ['id_peralihan' => $id];

		$peralihan = $this->Peralihan_m->get_where('peralihan', $where)->row_array();
		$data['nama'] = $peralihan['nama_pengaju'];
		$data['ttl'] = $peralihan['ttl'];
		$data['alamat'] = $peralihan['alamat'];
		$data['kecamatan'] = $peralihan['kecamatan'];
		$this->load->view('surat', $data);
	}
}