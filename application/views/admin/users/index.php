<div class="container-fluid">
    <h1 class="mt-4">Manajemen Data Administrator</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Administrator</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModalUser">
        <div class="fas fa-plus"></div> Tambah Data User
      </button>

    
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('user');?>"></div>
     

      </div>
        <div class="card-body">
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Username</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($users as $u) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['nama_lengkap']; ?></td>
                    <td><?= $u['username']; ?></td>
                    <td>
                      <a href="<?= base_url('admin/users/ubah/') . $u['id_user']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('admin/users/hapus/') . $u['id_user']; ?>" class="btn btn-danger tombol-hapus" ><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
   


<!-- Modal -->
<div class="modal fade" id="formModalUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelUser">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
        <div class="modal-body">
        <?= form_open('admin/users/index'); ?>
        <input type="hidden" name="id_user" id="id_user">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control">
          <small class="muted text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
          <small class="muted text-danger"><?= form_error('username'); ?></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
          <small class="muted text-danger"><?= form_error('password'); ?></small>
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
