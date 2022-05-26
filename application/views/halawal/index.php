
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIAPS-MAS Kab. Kudus</title>

        <!--favicon-->
        <link rel="icon" href="<?= base_url('/assets/') ?>image/kudus.png" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/halawal/') ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('welcome') ?>"><h6><dt class="col-sm-3">DINAS SOSIAL P3AP2KB KAB. KUDUS</dt></h6></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('auth'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase"><img src="<?= base_url(); ?>assets/image/tambah.png" alt="" width="200"></img></div>
                
                <div class="btn-group">
                <button type="button" class="btn btn-dark dropdown-toggle btn-xl text-uppercase mt-4" data-bs-toggle="dropdown" aria-expanded="false">
                Pengusulan
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('awal/pengajuan') ?>">Pembebasan Biaya Rawat Inap / Jalan</a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/pengusulan') ?>">Pengusulan PBI JKN KIS APBD</a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/peralihan') ?>">Peralihan BPJS Mandiri Kelas 3 ke PBI JKN KIS APBD </a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/keterangan') ?>">Keterangan DTKS untuk Rekomendasi KIP</a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/pengaduanbpnt') ?>">Pengaduan Bansos Pangan Sembako / BPNT</a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/pengaduanpkh') ?>">Pengaduan Bansos PKH</a></li>
                <li><a class="dropdown-item" href="<?= base_url('awal/reaktifasi') ?>">Reaktifasi PBI JKN KIS APBN</a></li>
                </ul>
                </div>
                <a class="btn btn-dark btn-xl text-uppercase mt-4" href="<?= base_url('welcome/bansos') ?>">Data BANSOS</a>
                <a class="btn btn-dark btn-xl text-uppercase mt-4" href="<?= base_url('welcome/lks') ?>">Data LKS</a>

            </div>
        </header>
       
        <!-- Footer-->
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
        <!-- Bootstrap core JS-->
        <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- Core theme JS-->
        <script src="<?= base_url('assets/halawal/') ?>js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="<?= base_url('assets/') ?>js/sb-forms-0.4.1.js"></script> -->
    </body>
</html>
