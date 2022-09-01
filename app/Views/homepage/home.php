<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Inkindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</head>
<style>
    .navbar-background {
        background: rgba(255, 255, 255, 0.7);
    }

    .caption-background {
        background: rgba(255, 255, 255, 0.7);
    }

    .center {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .a {
        text-decoration: none;
    }
    .kategori {
        font-size: 18px; 
        margin: 4.5px; 
        text-decoration:none;
        padding-top: 4px;
        color: black;
    }
    .kategori:hover {
        background-color: black;
        color: white;

    }
</style>

<body>
    <nav class="navbar navbar-light navbar-expand-xl fixed-top shadow" style="background: rgba(255,255,255,0.7);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="<?= base_url('assets/img/Inkindo-logo.png'); ?>" style="width: 200px;" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-2" class="collapse navbar-collapse">
                <ul class="navbar-nav fw-bold ms-auto">
                    <li class="nav-item"><a class="nav-link active text-uppercase fw-bold" href="#" style="font-size: 14px;">Beranda</a></li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link text-uppercase fw-bold" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">Profile Inkindo</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Prakata</a>
                            <a class="dropdown-item" href="#">Visi misi</a><a class="dropdown-item" href="#">Kode etik</a>
                        </div>
                    </li>
                    <li class="nav-item ms-5"><a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">Bidang Layanan</a></li>
                    <li class="nav-item ms-5"><a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">KEANGGOTAAN</a></li>
                    <li class="nav-item ms-5"><a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">INFORMASI PUBLIK</a></li>
                    <li class="nav-item dropdown d-xl-flex d-xxl-flex align-items-xl-center ms-5"><i class="fas fa-ellipsis-h d-lg-flex align-items-lg-center"></i></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner shadow">
            <div class="carousel-item active"><img class="w-100 d-block" src="<?= base_url('assets/img/slider1.jpeg'); ?>" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url('assets/img/office1.jpg'); ?>" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url('assets/img/office3.jpg'); ?>" /></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">previous</span></a></div>
        <div class="row" style="bottom: 0px;position: absolute;width: 100%;margin: 0px;height: 80px;">
            <div class="col d-flex justify-content-center align-items-center" style="background: rgba(255,255,255,0.4);">
                <h2 class="d-flex align-items-center" style="margin-bottom: 0px;">Mendaftar menjadi anggota, sekarang lebih praktis!  <a class="btn btn-lg btn-outline-dark" href="#" style="border-width: 2.5px;"><strong>Daftar Sekarang</strong></a></h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h2 class="text-center">Regulasi</h2>
        <br>
        <div class="center">
            <div class="col">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <h5>Billing Rate INKINDO Tahun 2022</h5>
                            <h6>Billing Rate INKINDO Tahun 2022</h6>
                            <div class="col">
                                <iconify-icon icon="akar-icons:download"></iconify-icon>
                                <a href="https://www.inkindo-dki.org/download-regulasi/billing-rate-inkindo-tahun-2021" style="text-decoration:none">Download</a>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h5>Ketetapan Dewan Pengurus Nasional Konsultan Indonesia Ikatan Nasional Konsultan Indonesia Nomor : 1 ITAP.DPN/ll/2019</h5>
                            <h6>Ketetapan Dewan Pengurus Nasional Konsultan Indonesia Ikatan Nasional Konsultan Indonesia Nomor : 1 ITAP.DPN/ll/2019 Tentang Peraturan Organisasi</h6>
                            <div class="col">
                                <iconify-icon icon="akar-icons:download"></iconify-icon>
                                <a href="https://www.inkindo-dki.org/download-regulasi/ketetapan-dewan-pengurus-nasional-konsultan-indonesia-ikatan-nasional-konsultan-indonesia-nomor-1-itapdpnll2019" style="text-decoration:none">Download</a>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h5>Roadmap Menuju INKINDO Emas 2030</h5>
                            <h6>Roadmap Menuju Inkindo Emas 2030 "INKINDO Mandiri Demi Keunggulan Negeri"</h6>
                            <div class="col">
                                <iconify-icon icon="akar-icons:download"></iconify-icon>
                                <a href="https://www.inkindo-dki.org/download-regulasi/roadmap-menuju-inkindo-emas-2030" style="text-decoration:none">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <h5 style="margin:3px;">Kategori</h5>
                        </div>
                        <div class="row" style="width: 350px; height: 48px; margin: 3px;">
                            <a href="#" class="kategori border border-gray" type="button">Regulasi Inkindo</a>
                        </div>
                        <div class="row" style="width: 350px; height: 48px; margin:3px;">
                            <a href="#" class="kategori border border-gray" type="button">Regulasi Jasa Konsultasi Konstruksi</a>
                        </div>
                        <div class="row" style="width: 350px; height: 48px; margin:3px;">
                            <a href="#" class="kategori border border-gray" type="button">Regulasi Jasa Konsultasi Non-Konstruksi</a>
                        </div>
                        <div class="row" style="width: 350px; height: 48px; margin:3px;">
                            <a href="#" class="kategori border border-gray" type="button">Regulasi Jasa Konsultasi Umum</a>
                        </div>
                        <div class="row" style="width: 350px; height: 48px; margin:3px;">
                            <a href="#" class="kategori border border-gray" type="button">Regulasi Terkait</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h2 class="text-center">Mitra</h2>
        <div class="center">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/dekson.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/seven.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/jiyu.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/Daikin.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/LG.png'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/CEC.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/Majalah-Konstruksi.png'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/Bromindo.png'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/HITACHI.png'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/granito.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/LG.png'); ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?= base_url('../assets/img/CEC.jpg'); ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>