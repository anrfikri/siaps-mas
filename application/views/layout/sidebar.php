<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav">
                            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                                <i  class="fas fa-home"></i><dt class="ps-2">
                                Dashboard</dt>
                            </a>
                            </div>
                            <div class="sb-sidenav-menu-heading">----- MENU PENDATAAN -----</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <i class="fas fa-list-alt"></i><dt class="ps-2">
                                Pengajuan</dt>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('admin/pengajuan') ?>">Pembebasan Biaya Rawat Inap / Jalan</a>
                                    <a class="nav-link" href="<?= base_url('admin/pengusulan') ?>"> Pengusulan PBI JKN KIS APBD</a>
                                    <a class="nav-link" href="<?= base_url('admin/peralihan') ?>">Peralihan BPJS</a>
                                    <a class="nav-link" href="<?= base_url('admin/keterangan') ?>">Keterangan DTKS KIP</a>
                                    <a class="nav-link" href="<?= base_url('admin/pengaduanbpnt') ?>">Pengaduan Bansos BPNT</a>
                                    <a class="nav-link" href="<?= base_url('admin/pengaduanpkh') ?>">Pengaduan Bansos PKH</a>
                                    <a class="nav-link" href="<?= base_url('admin/reaktifasi') ?>">Reaktifasi PBI JKN KIS APBD</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?= base_url('admin/bansos') ?>">
                        <i class="fas fa-users"></i><dt class="ps-2">
                        Data Bantuan Sosial</dt>
                    </a>
                        <a class="nav-link" href="<?= base_url('admin/lks') ?>">
                            <i class="fas fa-house-user"></i><dt class="ps-2">
                            Data LKS</dt>
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/users') ?>">
                            <i class="fas fa-key"></i><dt class="ps-2">
                            Data Administrator</dt>
                        </a>
                   
                    <a class="nav-link" onclick="return confirm('Apakah yakin anda ingin keluar ?')" href="<?= base_url('auth/logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i><dt class="ps-2">
                        Logout</dt>
                    </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>