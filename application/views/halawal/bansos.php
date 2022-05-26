<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?> Pelayanan DINSOS P3AP2KB</title>

        <!-- CSS Tampilan -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/styles.css"/>

        <!-- DataTables -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/buttons.bootstrap5.min.css" />

        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <!--favicon-->
        <link rel="icon" href="<?= base_url('/assets/') ?>image/kudus.png" />

        <!-- Sweet Alert -->
        <link rel="stylesheet" type="text/css"  href="<?= base_url('assets/') ?>css/sweetalert2.min.css" />

        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/bootstrap.min.css"/>
        <!-- Select 2 -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" />
    </head>

    <body>
    <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-2 shadow">
        <a class="navbar-brand btn btn-danger btn-sm " href="<?= base_url('welcome') ?>"><i class="fas fa-angle-double-left me-1"></i>Kembali</a>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <center>
                
                     <img  src="<?= base_url(); ?>assets/image/awal.png" width="250"></img>
                 
            </center>
        </form>
        </ul>
    </nav>

 <main>

        <div class="container">
    <h1 class="mt-6">Cek Data Bantuan Sosial Kabupaten Kudus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Cari Data Bantuan Sosial Dengan NIK di Kolom Pencarian</li>
    </ol>

    <div class="row">
    
      <div class="col-md-12">
          <form action="<?= base_url('welcome/caribansos')?>" method="post">
          <input type="text" class="form col-lg-4" name="carinik" placeholder="Masukkan NIK Anda" required>
          <input type="submit" class="btn btn-info" value="Cari">
        </form>
        </div>
</div>
    <div class="card mb-4 mt-3">
      <div class="card-header">
      <i class="fas fa-table me-1"></i>
        Data Bantuan Sosial Kabupaten Kudus
      </div>
    <div class="card-body body-table">
      <?php 
      
        if($bansos == null){
          echo "Data Tidak Ditemukan";
        }else{

      
      ?>
            <table class="table table-bordered responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <!-- <th>No</th> -->
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>BPNT</th>
                  <th>BST</th>
                  <th>PKH</th>
                  <th>PBI</th>
                  <th>BPNT PPKM</th>
                  <th>Keterangan Meninggal</th>
                  
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><?= $bansos['nik_penerima']; ?></td>
                    <td><?= $bansos['nama_penerima']; ?></td>
                    <td><?= $bansos['alamat']; ?></td>
                    <td><?= $bansos['bpnt']; ?></td>
                    <td><?= $bansos['bst']; ?></td>
                    <td><?= $bansos['pkh']; ?></td>
                    <td><?= $bansos['pbi']; ?></td>
                    <td><?= $bansos['bpnt_ppkm']; ?></td>
                    <td><?= $bansos['ket_meninggal']; ?></td>
                    
                  </tr>
              </tbody>
            </table>
            <?php } ?>
          </div>
        </div>
        <center>
        <p class="mt-5 mb-3 text-muted">Dinas Sosial P3AP2KB Kab. Kudus</p>
              <p class="mt-1 mb-3 text-muted">Jl. Mejobo No.99, Mlati Kidul, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59319</p>
            <a class="mt-2 mb-3 text-muted" href="<?= base_url('credit'); ?>">Copyright &copy; <?= date('Y'); ?></a>
            </center>
      </div>
  </main>

        
        <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/') ?>js/scripts.js"></script>

        <!-- DataTables -->
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.dataTables.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/dataTables.bootstrap5.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/dataTables.buttons.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/buttons.bootstrap5.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/jszip.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/buttons.colVis.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/buttons.html5.min.js" ></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/buttons.print.min.js" ></script>
        <script src="<?= base_url('assets/assets/demo/bansos.js') ?>"></script>

        <!-- Sweet Alert -->
        <script type="text/javascript" src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/myscript.js') ?>"></script>

        <!-- Select 2 -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/select2.js') ?>"></script>
    </body>
</html>
