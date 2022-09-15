<!-- Navbar -->
<nav class="navbar navbar-light navbar-expand-lg shadow-sm">
    <div class="container"><a class="navbar-brand" href="#"><img id="logo-inkindo" src="assets/img/Inkindo-logo.png" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-1" class="collapse navbar-collapse d-xl-flex justify-content-md-end">
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('/'); ?>">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Profil Inkindo</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="<?= base_url('/prakata'); ?>">Prakata</a>
                        <a class="dropdown-item" href="<?= base_url('/visimisi'); ?>">Visi - Misi</a>
                        <a class="dropdown-item" href="<?= base_url('/kode_etik'); ?>">Kode Etik</a>
                        <a class="dropdown-item" href="<?= base_url('/struktur'); ?>">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Bidang Layanan</a>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="<?= base_url('/struktur'); ?>">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Keanggotaan</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Daftar Anggota</a>
                        <a class="dropdown-item" href="<?= base_url('/syarat_anggota'); ?>">Syarat Anggota</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Informasi Publik</a>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </li>
                <li>
                    <a class="ms-md-2 btn btn-outline-secondary" href="<?= base_url('/login'); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>