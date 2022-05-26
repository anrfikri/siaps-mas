<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajuan_m');
		$this->load->library('form_validation');
		if($this->session->userdata('username') == ''){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Manajemen Data Pengajuan Pembebasan Biaya Rawat Inap / Jalan';
		$data['pengajuan'] = $this->Pengajuan_m->get('pengajuan')->result_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengajuan/index');
			$this->load->view('layout/footer');
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
			$this->session->set_flashdata('pengajuan', 'Data Pengajuan Berhasil Ditambahkan');
			redirect('admin/pengajuan');
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Pengajuan';
		$where = ['id_pengajuan' => $id];
		$data['pengajuan'] = $this->Pengajuan_m->get_where('pengajuan', $where)->row_array();
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/pengajuan/ubah');
			$this->load->view('layout/footer');
	}

	public function update($id)
	{
		$data_lama = $this->Pengajuan_m->get_where('pengajuan', ['id_pengajuan' => $id])->row_array();

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
		if ($sktm["name"] == ''){
			$sktm = $data_lama['sktm'];
		}else{

					$config['upload_path']	='./assets/image/pembebasan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('sktm')) {
						echo "Upload sktm gagal"; die();
					}else{
						$sktm = $this->upload->data('file_name');
					}
				}
		//ktp
		if ($ktp["name"] == ''){
			$ktp = $data_lama['ktp'];
		}else{
					
					$config['upload_path']	='./assets/image/pembebasan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('ktp')) {
						echo "Upload ktp gagal"; die();
					}else{
						$ktp = $this->upload->data('file_name');
					}
				}
		//kk
		if ($kk["name"] == ''){
			$kk = $data_lama['kk'];

		}else{

					$config['upload_path']	='./assets/image/pembebasan';
					$config['allowed_types']= 'jpeg|jpg|png|pdf';
unlink("./assets/image/pembebasan/".$data_lama['kk']);
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('kk')) {
						echo "Upload gagal"; die();
					}else{
						$kk = $this->upload->data('file_name');
					}
				}
		//Surat Rawat
		if ($rawat["name"] == ''){
			$rawat = $data_lama['surat_rawat'];
		}else{
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
		if ($depan["name"] == ''){
			$depan = $data_lama['depan'];

		}else{
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
		if ($tamu["name"] == ''){
			$tamu = $data_lama['tamu'];

		}else{
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
		if ($kamar["name"] == ''){
			$kamar = $data_lama['kamar'];
		}else{
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
		if ($dapur["name"] == ''){
			$dapur = $data_lama['dapur'];

		}else{
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
		if ($wc["name"] == ''){
			$wc = $data_lama['wc'];

		}else{
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
		$where = ['id_pengajuan' => $id];
		// $data_old = $this->Pengajuan_m->get_where('pengajuan', $where)->row_array();
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
		// 	$config['upload_path']	='./assets/image/pembebasan/sktm';
		// 	$config['allowed_types']= 'jpeg|jpg|png|pdf';
		// 	$this->load->library('upload',$config);
		// 	if ($this->upload->do_upload('sktm')) {
		// 		unlink("./assets/image/pembebasan/sktm/".$data_old['sktm']);
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
		// var_dump($data);
		$this->Pengajuan_m->ubahDataPengajuan($data, $id);
		$this->session->set_flashdata('pengajuan', 'Data Pengajuan Berhasil Diubah');
		redirect('admin/pengajuan');
	}

	public function hapus($id)
	{
		$where = ['id_pengajuan' => $id];
		$data_old = $this->Pengajuan_m->get_where('pengajuan', $where)->row_array();
		unlink("./assets/image/pembebasan/".$data_old['sktm']);
		unlink("./assets/image/pembebasan/".$data_old['ktp']);
		unlink("./assets/image/pembebasan/".$data_old['kk']);
		unlink("./assets/image/pembebasan/".$data_old['surat_rawat']);
		unlink("./assets/image/pembebasan/".$data_old['depan']);
		unlink("./assets/image/pembebasan/".$data_old['tamu']);
		unlink("./assets/image/pembebasan/".$data_old['kamar']);
		unlink("./assets/image/pembebasan/".$data_old['dapur']);
		unlink("./assets/image/pembebasan/".$data_old['wc']);
		$this->db->delete('pengajuan', ['id_pengajuan' => $id]);
		$this->session->set_flashdata('pengajuan', 'Data Pengajuan Berhasil Dihapus');
		redirect('admin/pengajuan');
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
		$where = ['id_pengajuan' => $id];

		$pengaju = $this->Pengajuan_m->get_where('pengajuan', $where)->row_array();
		$data['nama'] = $pengaju['nama_pengaju'];
		$data['ttl'] = $pengaju['ttl'];
		$data['alamat'] = $pengaju['alamat'];
		$data['kecamatan'] = $pengaju['kecamatan'];
		$this->load->view('surat', $data);
	}

}