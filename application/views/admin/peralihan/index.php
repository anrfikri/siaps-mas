<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Peralihan</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalPeralihan">
        <div class="fas fa-plus"></div> Tambah Data Peralihan
      </button>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('peralihan');?>"></div>
      </div>
        <div class="card-body">
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama Pengaju</th>
                  <th>NIK Pengaju</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Kecamatan</th>
                  <th>SKTM</th>
                  <th>KTP</th>
                  <th>KK</th>
                  <th>Tampak Rumah Depan</th>
                  <th>Tampak Ruang Tamu</th>
                  <th>Kamar Tidur</th>
                  <th>Dapur</th>
                  <th>Kamar Mandi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($peralihan as $u) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['nama_pengaju']; ?></td>
                    <td><?= $u['nik_pengaju']; ?></td>
                    <td><?= $u['ttl']; ?></td>
                    <td><?= $u['alamat']; ?></td>
                    <td><?= $u['kecamatan']; ?></td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['sktm']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['ktp']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['kk']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['depan']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['tamu']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['kamar']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['dapur']; ?>" width="100">
                    </td>
                    <td>
                      <img src="<?= base_url();?>assets/image/peralihan/<?= $u['wc']; ?>" width="100">
                    </td>
                    <td>
                      <!-- <a href="<?= base_url('admin/peralihan/printsurat/') . $u['id_peralihan']; ?>" class="btn btn-success"><i class="fas fa-print"></i></a> -->
                      <a href="<?= base_url('admin/peralihan/ubah/') . $u['id_peralihan']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/peralihan/hapus/') . $u['id_peralihan']; ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      

<!-- Modal -->
<div class="modal fade" id="formModalPeralihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelPeralihan">Tambah Data Peralihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <div class="modal-body">
        <?= form_open_multipart('admin/peralihan/add'); ?>
        <input type="hidden" name="id_peralihan" id="id_peralihan">
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
          <label for="alamat">Alamat Desa (Contoh : Besito RT 03 RW 02) *</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Contoh : Besito RT 03 RW 02" required>
        </div>
        <div class="form-group mt-3">
          <label for="kecamatan">Kecamatan *</label>
          <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Contoh : Gebog" required>
        </div>

        <div class="form-group mt-3">
          <label for="sktm">Upload Foto/Scan SKTM perihal Pengajuan Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD   dari Desa Mengetahui Kecamatan stempel basah/Asli (format .jpg/.jpeg/.pdf) *</label>
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
          <label for="depan">Upload Foto Tampak Rumah Depan (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="depan" id="depan" class="form-control"required>
        </div>
        <div class="form-group mt-3">
          <label for="tamu">Upload Foto Tampak Ruang Tamu (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="tamu" id="tamu" class="form-control"required>
        </div>
        <div class="form-group mt-3">
          <label for="kamar">Upload Foto Tampak Kamar Tidur (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="kamar" id="kamar" class="form-control"required>
        </div>
        <div class="form-group mt-3">
          <label for="dapur">Upload Foto Tampak Dapur (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="dapur" id="dapur" class="form-control"required>
        </div>
        <div class="form-group mt-3">
          <label for="wc">Upload Foto Tampak Kamar Mandi (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="wc" id="wc" class="form-control"required>
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
