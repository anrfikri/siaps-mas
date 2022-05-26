<div class="container-fluid">
    <h1 class="mt-4">Edit Data</h1>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('admin/lks') ?>">Data LKS</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
  </nav>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Edit Data
        </div>
          <?= form_open('admin/lks/ubah/'. $lks['id_lks']); ?>
          <div class="card-body">
          <input type="hidden" name="id_lks" class="form-control" value="<?= $lks['id_lks']; ?>" >
          
        <div class="form-group">
          <label for="nama">Nama LKS *</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?= $lks['nama_lks']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="alamat">Alamat LKS *</label>
          <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $lks['alamat']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="nama_pengurus">Nama Pengurus *</label>
          <input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control" value="<?= $lks['nama_pengurus']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="tgl_no">Tgl / No Legalisasi *</label>
          <input type="text" name="tgl_no" id="tgl_no" class="form-control" value="<?= $lks['tgl_no']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="registrasi">Registrasi KEMENKUMHAM *</label>
          <input type="text" name="registrasi" id="registrasi" class="form-control" value="<?= $lks['registrasi']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="tipe">Type LKS *</label>
          <input type="text" name="tipe" id="tipe" class="form-control" value="<?= $lks['tipe_lks']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="kegiatan">Kegiatan Pokok *</label>
          <input type="text" name="kegiatan" id="kegiatan" class="form-control" value="<?= $lks['kegiatan']; ?>" required>
        </div>
        <div class="form-group mt-3">
          <label for="jml_pekerja">Jumlah Pekerja Sosial</label>
          <input type="text" name="jml_pekerja" id="jml_pekerja" class="form-control" value="<?= $lks['jml_pekerja']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="dlm_p">Dalam panti (P)</label>
          <input type="text" name="dlm_p" id="dlm_p" class="form-control" value="<?= $lks['dlm_p']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="dlm_l">Dalam Panti (L)</label>
          <input type="text" name="dlm_l" id="dlm_l" class="form-control" value="<?= $lks['dlm_l']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="non_p">Non Panti (P)</label>
          <input type="text" name="non_p" id="non_p" class="form-control" value="<?= $lks['non_p']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="non_l">Non Panti (L)</label>
          <input type="text" name="non_l" id="non_l" class="form-control" value="<?= $lks['non_l']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="jml_p">Jumlah (P)</label>
          <input type="text" name="jml_p" id="jml_p" class="form-control" value="<?= $lks['jml_p']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="jml_l">Jumlah (L)</label>
          <input type="text" name="jml_l" id="jml_l" class="form-control" value="<?= $lks['jml_l']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="jml_tot">Jumlah (Total)</label>
          <input type="text" name="jml_tot" id="jml_tot" class="form-control" value="<?= $lks['jml_tot']; ?>">
        </div>
        <div class="form-group mt-3">
          <label for="berdiri">Berdiri / Ruang Lingkup *</label>
          <input type="text" name="berdiri" id="berdiri" class="form-control" value="<?= $lks['berdiri']; ?>" required>
        </div>
          <div class="form-group mt-3">
            <a class="btn btn-secondary" href="<?= base_url('admin/lks'); ?>">Close</a>
            <button type="submit" class="btn btn-dark">Ubah</button>
          </div>
        </div>
          <?= form_close(); ?> 
        </div>
      </div>