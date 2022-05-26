<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Pengaduan Bansos BPNT</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pengaduan Bansos BPNT</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalPengaduanbpnt">
        <div class="fas fa-plus"></div> Tambah Data Pengaduan Bansos BPNT
      </button>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pengaduanbpnt');?>"></div>
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
                  <th>Isi Pengaduan</th>
                  <th>KTP</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($pengaduanbpnt as $u) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['nama_pengaju']; ?></td>
                    <td><?= $u['nik_pengaju']; ?></td>
                    <td><?= $u['ttl']; ?></td>
                    <td><?= $u['alamat']; ?></td>
                    <td><?= $u['pengaduan']; ?></td>
                    <td>
                      <img src="<?= base_url();?>assets/image/pengaduanbpnt/<?= $u['ktp']; ?>" width="100">
                    </td>
                    <td>
                      <a href="<?= base_url('admin/pengaduanbpnt/ubah/') . $u['id_pengaduanbpnt']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/pengaduanbpnt/hapus/') . $u['id_pengaduanbpnt']; ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      

<!-- Modal -->
<div class="modal fade" id="formModalPengaduanbpnt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelPengaduanbpnt">Tambah Data Pengaduan Bansos BPNT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <div class="modal-body">
        <?= form_open_multipart('admin/pengaduanbpnt/add'); ?>
        <input type="hidden" name="id_pengaduanbpnt" id="id_pengaduanbpnt">
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
          <label for="pengaduan">Sampaikan Pengaduan Anda *</label>
          <textarea type="text" name="pengaduan" id="pengaduan" class="form-control"required></textarea>
        </div>
        <div class="form-group mt-3">
          <label for="ktp">Upload Foto/Scan KTP (format .jpg/.jpeg/.pdf) *</label>
          <input type="file" name="ktp" id="ktp" class="form-control" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
