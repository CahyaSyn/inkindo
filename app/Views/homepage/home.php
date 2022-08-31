<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Inkindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .navbar-background {
        background: rgba(255, 255, 255, 0.7);
    }

    .caption-background {
        background: rgba(255, 255, 255, 0.7);
    }
</style>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light navbar-expand-xl fixed-top shadow" style="background: rgba(255,255,255,0.7);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="<?= base_url('assets/img/Inkindo-logo.png'); ?>" style="width: 200px;" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-2" class="collapse navbar-collapse">
                <ul class="navbar-nav fw-bold ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fw-bold" href="#" style="font-size: 14px;">Beranda</a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link text-uppercase fw-bold" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">Profile Inkindo</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Prakata</a>
                            <a class="dropdown-item" href="#">Visi misi</a>
                            <a class="dropdown-item" href="#">Kode etik</a>
                        </div>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">Bidang Layanan</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">KEANGGOTAAN</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-uppercase fw-bold" href="#" style="font-size: 14px;">INFORMASI PUBLIK</a>
                    </li>
                    <li class="nav-item dropdown d-xl-flex d-xxl-flex align-items-xl-center ms-5">
                        <a class="nav-link text-uppercase fw-bold" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 14px;"><i class="fas fa-ellipsis-h d-lg-flex align-items-lg-center"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Prakata</a>
                            <a class="dropdown-item" href="#">Visi misi</a>
                            <a class="dropdown-item" href="#">Kode etik</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner shadow">
            <div class="carousel-item active"><img class="w-100 d-block" src="<?= base_url('assets/img/slider1.jpeg'); ?>" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url('assets/img/office1.jpg'); ?>" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="<?= base_url('assets/img/office3.jpg'); ?>" /></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">previous</span></a></div>
        <div class="row" style="bottom: 0px;position: absolute;width: 100%;margin: 0px;height: 80px;">
            <div class="col d-flex justify-content-center align-items-center" style="background: rgba(255,255,255,0.4);">
                <h3 class="d-flex align-items-center" style="margin-bottom: 0px;">Mendaftar menjadi anggota, sekarang lebih praktis!&nbsp;&nbsp;&nbsp;<a class="btn btn-lg btn-outline-dark" href="#" style="border-width: 2.5px;"><strong>Daftar Sekarang&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></strong></a></h3>
            </div>
        </div>
    </div>

    <div class="container py-5 mt-5">
        <div class="row d-flex justify-content-center gx-5">
            <div class="col-md-5">
                <img src="<?= base_url('assets/img/office2.jpg'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5">
                <h3>Profil</h3>
                <h4>We are learning organization</h4>
                <p>
                    Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi
                    Perusahaan Jasa Konsultan di Indonesia yang didirikan pada tanggal
                    20 Juni 1979 di Jakarta, INKINDO merupakan fusi dari Ikatan Konsultan
                    Indonesia (IKINDO) yang didirikan pada tanggal 10 Februari 1970 dan
                    Persatuan Konsultan Teknik Pembangunan Indonesia (PKTPI).
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>