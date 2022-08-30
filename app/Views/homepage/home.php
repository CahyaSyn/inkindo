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

    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Profil</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card"><img class="card-img w-100 d-block shadow" src="Office 1.jpg" style="opacity: 1;" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4 class="bg-white shadow">Spot Gallery</h4>
                        <p class="bg-white shadow">Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card"><img class="card-img w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Sub gallery</h4>
                        <p>Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card"><img class="card-img w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Sub gallery</h4>
                        <p>Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>