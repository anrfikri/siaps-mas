<div class="container-fluid">
    <h1 class="mt-4">Tambah Data</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('admin/bansos') ?>">Data Bantuan Sosial</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Tambah Data
        </div>
          <?= form_open('admin/bansos/tambah'); ?>
          <div class="card-body">
          <input type="hidden" name="id_penerima" class="form-control" value="<?= 'id_penerima'; ?>">
          
          <div class="form-group">
          <label for="kk">No KK</label>
          <input type="number" name="kk" id="kk" class="form-control" value="<?=set_value('kk')?>">
          <small class="muted text-danger"><?= form_error('kk'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="nik">NIK</label>
          <input type="number" name="nik" id="nik" class="form-control" value="<?=set_value('nik')?>">
          <small class="muted text-danger"><?= form_error('nik'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?=set_value('nama')?>">
          <small class="muted text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" value="<?=set_value('alamat')?>">
          <small class="muted text-danger"><?= form_error('alamat'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="bpnt">BPNT</label>
          <input type="text" name="bpnt" id="bpnt" class="form-control" value="<?=set_value('bpnt')?>">
          <small class="muted text-danger"><?= form_error('bpnt'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="bst">BST</label>
          <input type="text" name="bst" id="bst" class="form-control" value="<?=set_value('bst')?>">
          <small class="muted text-danger"><?= form_error('bst'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="pkh">PKH</label>
          <input type="text" name="pkh" id="pkh" class="form-control" value="<?=set_value('pkh')?>">
          <small class="muted text-danger"><?= form_error('pkh'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="pbi">PBI</label>
          <input type="text" name="pbi" id="pbi" class="form-control" value="<?=set_value('pbi')?>">
          <small class="muted text-danger"><?= form_error('pbi'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="bpnt_ppkm">BPNT PPKM</label>
          <input type="text" name="bpnt_ppkm" id="bpnt_ppkm" class="form-control" value="<?=set_value('bpnt_ppkm')?>">
          <small class="muted text-danger"><?= form_error('bpnt_ppkm'); ?></small>
        </div>
        <div class="form-group mt-3">
          <label for="ket">Keterangan Meninggal</label>
          <input type="text" name="ket" id="ket" class="form-control" value="<?=set_value('ket')?>">
          <small class="muted text-danger"><?= form_error('ket'); ?></small>
        </div>
        <div class="form-group mt-3">
          <a class="btn btn-secondary" href="<?= base_url('admin/bansos'); ?>">Close</a>
          <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
      </div>
          <?= form_close(); ?> 
        </div>
      </div>