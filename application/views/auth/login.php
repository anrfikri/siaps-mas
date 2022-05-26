<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
<link href="<?= base_url('/assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="icon" href="<?= base_url('/assets/'); ?>image/kudus.png">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="container py-5">
    <div class="row py-1">
      <div class="col-md-4 offset-md-4 py-5">
          <form class="form-signin" action="" method="post">
            <img class="mt-5" src="<?= base_url(); ?>assets/image/awal.png" alt="" width="300"></img>
            <center><p><h5>Login</h5></p></center>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('logout');?>"></div>
              <?= $this->session->flashdata('login'); ?>
              <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
                <small class="muted text-danger"><?= form_error('username'); ?></small>
              </div>
              <div class="form-group mt-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <small class="muted text-danger"><?= form_error('password'); ?></small>
              </div>
              <div class="form-group mt-3">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
              </div>
              <p class="mt-5 mb-3 text-muted">Dinas Sosial P3AP2KB Kab. Kudus</p>
              <p class="mt-1 mb-3 text-muted">Jl. Mejobo No.99, Mlati Kidul, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59319</p>
            <a class="mt-4 mb-3 text-muted" href="<?= base_url('credit'); ?>">Copyright&copy; <?= date('Y'); ?></a>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
