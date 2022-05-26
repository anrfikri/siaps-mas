<div class="container-fluid">
    <h1 class="mt-4">Edit Data</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('admin/reaktifasi') ?>">Data Reaktifasi</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Edit Data
        </div>
          <?= form_open_multipart('admin/reaktifasi/update/'. $reaktifasi['id_reaktifasi']); ?>
          <div class="card-body">
          <input type="hidden" name="id_reaktifasi" class="form-control" value="<?= $reaktifasi['id_reaktifasi']; ?>">
         <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control"value="<?= $reaktifasi['nama_pengaju']; ?>" required>
        <div class="form-group mt-3">
          <label for="nik">NIK</label>
          <input type="number" name="nik" id="nik" class="form-control"value="<?= $reaktifasi['nik_pengaju']; ?>" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit NIK')"onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group mt-3">
          <label for="ttl">Tempat Tanggal Lahir</label>
          <input type="text" name="ttl" id="ttl" class="form-control"value="<?= $reaktifasi['ttl']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control"value="<?= $reaktifasi['alamat']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="sktm">SKTM</label>
          <input type="file" name="sktm" id="sktm" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/reaktifasi/<?= $reaktifasi['sktm']; ?>" width="100">
        </div>
        <div class="form-group mt-3">
          <label for="ktp">KTP</label>
          <input type="file" name="ktp" id="ktp" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/reaktifasi/<?= $reaktifasi['ktp']; ?>" width="100">
        </div>
        <div class="form-group mt-3">
          <label for="kk">KK</label>
          <input type="file" name="kk" id="kk" class="form-control" disabled>
          <img src="<?= base_url();?>assets/image/reaktifasi/<?= $reaktifasi['kk']; ?>" width="100">
        </div>
        
          <div class="form-group mt-3">
            <a class="btn btn-secondary" href="<?= base_url('admin/reaktifasi'); ?>">Close</a>
            <button type="submit" class="btn btn-dark">Ubah</button>
          </div>
        </div>
          <?= form_close(); ?> 
        </div>
      </div>