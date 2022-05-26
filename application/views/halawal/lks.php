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
    <h1 class="mt-6">Data Lembaga Kesejahteraan Sosial</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Lembaga Kesejahteraan Sosial</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
      <i class="fas fa-table me-1"></i>
        Data Lembaga Kesejahteraan Sosial
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
                    
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <center>
        <p class="mt-5 mb-3 text-muted">Dinas Sosial P3AP2KB Kab. Kudus</p>
              <p class="mt-1 mb-3 text-muted">Jl. Mejobo No.99, Mlati Kidul, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59319</p>
            <a class="mt-2 mb-3 text-muted" href="<?= base_url('credit'); ?>">Copyright &copy; <?= date('Y'); ?></a>
            </center>
      </div>


</main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Dinas Sosial P3AP2KB Kab. Kudus</div>
                            <div>
                                
                                <a class="text-muted">Copyright &copy; <?= date('Y'); ?></a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            
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
