<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Lembaga Kesejahteraan Sosial</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data LKS</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalLks">
        <div class="fas fa-plus"></div> Tambah Data LKS
      </button>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('lks');?>"></div>
      </div>
    <div class="card-body">
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama LKS</th>
                  <th>Alamat LKS</th>
                  <th>Nama Pengurus</th>
                  <th>Tgl / No Legalisasi</th>
                  <th>Registrasi KEMENKUMHAM</th>
                  <th>Type LKS</th>
                  <th>Kegiatan Pokok</th>
                  <th>Jumlah Pekerja Sosial</th>
                  <th>Dalam Panti (P)</th>
                  <th>Dalam Panti (L)</th>
                  <th>Non Panti (P)</th>
                  <th>Non Panti (L)</th>
                  <th>Jumlah (P)</th>
                  <th>Jumlah (L)</th>
                  <th>Jumlah (Total)</th>
                  <th>Berdiri / Ruang Lingkup</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($lks as $lks) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $lks['nama_lks']; ?></td>
                    <td><?= $lks['alamat']; ?></td>
                    <td><?= $lks['nama_pengurus']; ?></td>
                    <td><?= $lks['tgl_no']; ?></td>
                    <td><?= $lks['registrasi']; ?></td>
                    <td><?= $lks['tipe_lks']; ?></td>
                    <td><?= $lks['kegiatan']; ?></td>
                    <td><?= $lks['jml_pekerja']; ?></td>
                    <td><?= $lks['dlm_p']; ?></td>
                    <td><?= $lks['dlm_l']; ?></td>
                    <td><?= $lks['non_p']; ?></td>
                    <td><?= $lks['non_l']; ?></td>
                    <td><?= $lks['jml_p']; ?></td>
                    <td><?= $lks['jml_l']; ?></td>
                    <td><?= $lks['jml_tot']; ?></td>
                    <td><?= $lks['berdiri']; ?></td>
                    <td>
                      <a href="<?= base_url('admin/lks/ubah/') . $lks['id_lks']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/lks/hapus/') . $lks['id_lks']; ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


<!-- Modal -->
<div class="modal fade" id="formModalLks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelLks">Tambah Data LKS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <div class="modal-body">
        <?= form_open('admin/lks'); ?>
        <div class="form-group">
          <label for="nama">Nama LKS *</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat LKS *</label>
          <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="nama_pengurus">Nama Pengurus *</label>
          <input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="tgl_no">Tgl / No Legalisasi *</label>
          <input type="text" name="tgl_no" id="tgl_no" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="registrasi">Registrasi KEMENKUMHAM *</label>
          <input type="text" name="registrasi" id="registrasi" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="tipe">Type LKS *</label>
          <input type="text" name="tipe" id="tipe" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="kegiatan">Kegiatan Pokok *</label>
          <input type="text" name="kegiatan" id="kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="jml_pekerja">Jumlah Pekerja Sosial</label>
          <input type="text" name="jml_pekerja" id="jml_pekerja" class="form-control" >
        </div>
        <div class="form-group">
          <label for="dlm_p">Dalam panti (P)</label>
          <input type="text" name="dlm_p" id="dlm_p" class="form-control" >
        </div>
        <div class="form-group">
          <label for="dlm_l">Dalam Panti (L)</label>
          <input type="text" name="dlm_l" id="dlm_l" class="form-control" >
        </div>
        <div class="form-group">
          <label for="non_p">Non Panti (P)</label>
          <input type="text" name="non_p" id="non_p" class="form-control" >
        </div>
        <div class="form-group">
          <label for="non_l">Non Panti (L)</label>
          <input type="text" name="non_l" id="non_l" class="form-control" >
        </div>
        <div class="form-group">
          <label for="jml_p">Jumlah (P)</label>
          <input type="text" name="jml_p" id="jml_p" class="form-control" >
        </div>
        <div class="form-group">
          <label for="jml_l">Jumlah (L)</label>
          <input type="text" name="jml_l" id="jml_l" class="form-control" >
        </div>
        <div class="form-group">
          <label for="jml_tot">Jumlah (Total)</label>
          <input type="text" name="jml_tot" id="jml_tot" class="form-control" >
        </div>
        <div class="form-group">
          <label for="berdiri">Berdiri / Ruang Lingkup *</label>
          <input type="text" name="berdiri" id="berdiri" class="form-control" required>
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
