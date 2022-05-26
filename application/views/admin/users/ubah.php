<div class="container-fluid">
    <h1 class="mt-4">Edit Data</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('admin/users') ?>">Data Administrator</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Edit Data
        </div>
          <?= form_open('admin/users/ubah/'. $users['id_user']); ?>
          <div class="card-body">
          <input type="hidden" name="id_user" class="form-control" value="<?= $users['id_user']; ?>">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $users['nama_lengkap']; ?>">
            <small class="muted text-danger"><?= form_error('nama_lengkap'); ?></small>
          </div>

          <div class="form-group mt-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $users['username']; ?>">
            <small class="muted text-danger"><?= form_error('username'); ?></small>
            </div>
        
          <div class="form-group mt-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" 
            placeholder="Kosongkan jika tidak merubah password">
            <small class="muted text-danger"><?= form_error('password'); ?></small>
          </div>
          
          <div class="form-group mt-3">
            <a class="btn btn-secondary" href="<?= base_url('admin/users'); ?>">Close</a>
            <button type="submit" class="btn btn-dark">Ubah</button>
          </div>
        </div>
          <?= form_close(); ?> 
        </div>
      </div>