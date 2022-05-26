<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Keterangan DTKS untuk Rekomendasi KIP</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Keterangan DTKS untuk Rekomendasi KIP</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalKeterangan">
        <div class="fas fa-plus"></div> Tambah Data Keterangan
      </button>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('keterangan');?>"></div>
      </div>
        <div class="card-body">
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>SKTM</th>
                  <th>KTP</th>
                  <th>KK</th>
                  <th>Akte Kelahiran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($keterangan as $u) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['nama_pengaju']; ?></td>
                    <td><?= $u['nik_pengaju']; ?></td>
                    <td><?= $u['ttl']; ?></td>
                    <td><?= $u['alamat']; ?></td>
                    <td>
                      <img src="<?= base_url();?>assets/image/keterangan/<?= $u['sktm']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/keterangan/<?= $u['ktp']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/keterangan/<?= $u['kk']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/keterangan/<?= $u['akte']; ?>" width="100">
                    </td>
                    <td>
                      <a href="<?= base_url('admin/keterangan/ubah/') . $u['id_keterangan']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/keterangan/hapus/') . $u['id_keterangan']; ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      

<!-- Modal -->
<div class="modal fade" id="formModalKeterangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelKeterangan">Tambah Data Keterangan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <div class="modal-body">
        <?= form_open_multipart('admin/keterangan/add'); ?>
        <input type="hidden" name="id_keterangan" id="id_keterangan">
        <div class="form-group">
          <label for="nama">Nama Lengkap *</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="form-group mt-3">
          <label for="nik">NIK *</label>
          <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan 16 digit NIK" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit NIK')"onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group mt-3">
          <label for="ttl">Tempat, Tanggal Lahir (tanggal-bulan-tahun) *</label>
          <input type="text" name="ttl" id="ttl" class="form-control" placeholder=" Contoh : Kudus, 13-01-2001" required>
        </div>
        <div class="form-group mt-3">
          <label for="alamat">Alamat *</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>
        <div class="form-group mt-3">
          <label for="sktm">Upload Foto/Scan SKTM perihal Pengajuan Surat Keterangan DTKS untuk Rekomendasi KIP dari Desa Mengetahui Kecamatan stempel basah/Asli (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="sktm" id="sktm" class="form-control" required> 
        </div>

        <div class="form-group mt-3">
          <label for="ktp">Upload Foto/Scan KTP (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="ktp" id="ktp" class="form-control" required>
        </div>

        <div class="form-group mt-3">
          <label for="kk">Upload Foto/Scan KK (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="kk" id="kk" class="form-control" required>
        </div>
        <div class="form-group mt-3">
          <label for="akte">Upload Foto/Scan Akte Kelahiran (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="akte" id="akte" class="form-control"required>
        </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
