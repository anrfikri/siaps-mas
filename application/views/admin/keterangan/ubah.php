<div class="container-fluid">
    <h1 class="mt-4">Edit Data</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('admin/keterangan') ?>">Data Keterangan DTKS untuk Rekomendasi KIP</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Edit Data
        </div>
          <?= form_open_multipart('admin/keterangan/update/'. $keterangan['id_keterangan']); ?>
          <div class="card-body">
          <input type="hidden" name="id_keterangan" class="form-control" value="<?= $keterangan['id_keterangan']; ?>">
         <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control"value="<?= $keterangan['nama_pengaju']; ?>" required>
        <div class="form-group mt-3">
          <label for="nik">NIK</label>
          <input type="number" name="nik" id="nik" class="form-control"value="<?= $keterangan['nik_pengaju']; ?>" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit NIK')"onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group mt-3">
          <label for="ttl">Tempat Tanggal Lahir</label>
          <input type="text" name="ttl" id="ttl" class="form-control"value="<?= $keterangan['ttl']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control"value="<?= $keterangan['alamat']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="sktm">SKTM</label>
          <input type="file" name="sktm" id="sktm" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/keterangan/<?= $keterangan['sktm']; ?>" width="100">
        </div>
        <div class="form-group mt-3">
          <label for="ktp">KTP</label>
          <input type="file" name="ktp" id="ktp" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/keterangan/<?= $keterangan['ktp']; ?>" width="100">
        </div>
        <div class="form-group mt-3">
          <label for="kk">KK</label>
          <input type="file" name="kk" id="kk" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/keterangan/<?= $keterangan['kk']; ?>" width="100">
        </div>
        <div class="form-group mt-3">
          <label for="akte">Akte Kelahiran</label>
          <input type="file" name="akte" id="akte" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/keterangan/<?= $keterangan['akte']; ?>" width="100">
        </div>
        
          <div class="form-group mt-3">
            <a class="btn btn-secondary" href="<?= base_url('admin/keterangan'); ?>">Close</a>
            <button type="submit" class="btn btn-dark">Ubah</button>
          </div>
        </div>
          <?= form_close(); ?> 
        </div>
      </div>