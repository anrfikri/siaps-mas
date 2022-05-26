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

       <div class="container-fluid">
    <h1 class="mt-4">Pengaduan Bansos PKH</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a>Pengaduan Bansos PKH</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <div class="fas fa-edit"></div> Form Pengaduan Bansos PKH
        </div>
          <?= form_open_multipart('awal/pengaduanpkh/add'); ?>
          <div class="card-body">
          <input type="hidden" name="id_pengaduanpkh" class="form-control" >
         <div class="form-group">
          <label for="nama">Nama Lengkap *</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="form-group mt-3">
          <label for="nik">NIK *</label>
          <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan 16 digit NIK Anda" required min="1000000000000000"  max="9000000000000000" oninvalid="this.setCustomValidity('Harap masukkan 16 digit NIK')"onchange="this.setCustomValidity('')">
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
            <button type="submit" class="btn btn-dark">Submit</button>
          </div>
        </div>
          <?= form_close(); ?> 
        </div>
      </div>


</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Dinas Sosial P3AP2KB Kab. Kudus</div>
                            <div>
                                <a class="text-muted" href="<?= base_url('credit'); ?>">Copyright &copy; <?= date('Y'); ?></a>
                            </div>
                        </div>
                    </div>
                </footer>
            
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
        <script src="<?= base_url('assets/assets/demo/halawal.js') ?>"></script>

        <!-- Sweet Alert -->
        <script type="text/javascript" src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/myscript.js') ?>"></script>

        <!-- Select 2 -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/select2.js') ?>"></script>
    </body>
</html>
