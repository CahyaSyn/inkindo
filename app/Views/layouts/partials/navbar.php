<!-- Navbar -->
<nav class="navbar navbar-light navbar-expand-xl sticky-top shadow" style="background: rgba(255,255,255,0.7);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="<?= base_url('assets/img/Inkindo-logo.png'); ?>" style="width: 200px;" />
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navcol-2" class="collapse navbar-collapse">
            <ul class="navbar-nav fw-bold ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase fw-bold" href="<?= base_url('/'); ?>" style="font-size: 14px;">Beranda</a>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">Profile Inkindo</a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <a class="dropdown-item" href="<?= base_url('/prakata'); ?>">Prakata</a>
                        <a class="dropdown-item" href="#">Visi misi</a>
                        <a class="dropdown-item" href="<?= base_url('/kodeetik'); ?>">Kode etik</a>
                    </div>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">bidang layanan</a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <a class="dropdown-item" href="#">Prakata</a>
                        <a class="dropdown-item" href="#">Visi misi</a>
                        <a class="dropdown-item" href="#">Kode etik</a>
                    </div>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">keanggotaan</a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <a class="dropdown-item" href="#">Prakata</a>
                        <a class="dropdown-item" href="#">Visi misi</a>
                        <a class="dropdown-item" href="#">Kode etik</a>
                    </div>
                </li>
                <li class="nav-item dropdown ms-5">
                    <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">informasi publik</a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <a class="dropdown-item" href="#">Prakata</a>
                        <a class="dropdown-item" href="#">Visi misi</a>
                        <a class="dropdown-item" href="#">Kode etik</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-xl-flex align-items-xl-center ms-5">
                    <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;"><i class="fas fa-ellipsis-h d-lg-flex align-items-lg-center"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <a class="dropdown-item" href="#">Prakata</a>
                        <a class="dropdown-item" href="#">Visi misi</a>
                        <a class="dropdown-item" href="#">Kode etik</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>