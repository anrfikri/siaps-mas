<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Bantuan Sosial</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Bantuan Sosial</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalBansos">
    <div class="fas fa-plus"></div> Tambah Data BANSOS
    </button>
    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#importexcel">
    <i class="fas fa-file-import"></i> Import dari Excel Data BANSOS
    </button>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('bansos');?>"></div>
      </div>
    <div class="card-body">
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>No KK</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>BPNT</th>
                  <th>BST</th>
                  <th>PKH</th>
                  <th>PBI</th>
                  <th>BPNT PPKM</th>
                  <th>Keterangan Meninggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($bansos as $u) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['kk_penerima']; ?></td>
                    <td><?= $u['nik_penerima']; ?></td>
                    <td><?= $u['nama_penerima']; ?></td>
                    <td><?= $u['alamat']; ?></td>
                    <td><?= $u['bpnt']; ?></td>
                    <td><?= $u['bst']; ?></td>
                    <td><?= $u['pkh']; ?></td>
                    <td><?= $u['pbi']; ?></td>
                    <td><?= $u['bpnt_ppkm']; ?></td>
                    <td><?= $u['ket_meninggal']; ?></td>
                    <td>
                      <a href="<?= base_url('admin/bansos/ubah/') . $u['id_penerima']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/bansos/hapus/') . $u['id_penerima']; ?>" class="btn btn-danger tombol-hapus" ><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


<!-- Modal Import Excel -->
<div class="modal fade" id="importexcel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelBansos">Tambah Data Bantuan Sosial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <?= form_open_multipart('admin/bansos/import_excel'); ?>
        <div class="form-group">
          <label for="import">Silahkan Pilih Excel</label>
          <input type="file" name="import_excel" id="import" class="form-control" required>
        </div>
        <div class="modal-footer">
          <button type="button" required class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Import</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="formModalBansos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelBansos">Tambah Data Bantuan Sosial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <?= form_open('admin/bansos'); ?>
        <input type="hidden" name="id_bansos" id="id_bansos">
        <div class="form-group">
          <label for="kk">No KK *</label>
          <input type="number" name="kk" id="kk" class="form-control" placeholder="Masukkan 16 digit No KK" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit No KK')"onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="nik">NIK *</label>
          <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan 16 digit NIK" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit NIK')"onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="nama">Nama *</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama"required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat *</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" required>
        </div>
        <div class="form-group">
          <label for="bpnt">BPNT</label>
          <input type="text" name="bpnt" id="bpnt" class="form-control" >
        </div>
        <div class="form-group">
          <label for="bst">BST</label>
          <input type="text" name="bst" id="bst" class="form-control" >
        </div>
        <div class="form-group">
          <label for="pkh">PKH</label>
          <input type="text" name="pkh" id="pkh" class="form-control" >
        </div>
        <div class="form-group">
          <label for="pbi">PBI</label>
          <input type="text" name="pbi" id="pbi" class="form-control" >
        </div>
        <div class="form-group">
          <label for="bpnt_ppkm">BPNT PPKM</label>
          <input type="text" name="bpnt_ppkm" id="bpnt_ppkm" class="form-control" >
        </div>
        <div class="form-group">
          <label for="ket">Keterangan Meninggal</label>
          <input type="text" name="ket" id="ket" class="form-control" >
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