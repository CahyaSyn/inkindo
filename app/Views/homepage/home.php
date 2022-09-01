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
        text-decoration: none;
        padding-top: 4px;
        color: black;
    }

    .kategori:hover {
        background-color: black;
        color: white;

    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-xl fixed-top shadow" style="background: rgba(255,255,255,0.7);">
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
                        <a class="nav-link active text-uppercase fw-bold" href="#" style="font-size: 14px;">Beranda</a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link text-uppercase fw-bold" aria-expanded="true" data-bs-toggle="dropdown" href="#" style="font-size: 14px;">Profile Inkindo</a>
                        <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                            <a class="dropdown-item" href="#">Prakata</a>
                            <a class="dropdown-item" href="#">Visi misi</a>
                            <a class="dropdown-item" href="#">Kode etik</a>
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

    <!-- Carousel -->
    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner shadow">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="<?= base_url('assets/img/slider1.jpeg'); ?>" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="<?= base_url('assets/img/hut43.jpg'); ?>" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="<?= base_url('assets/img/rekarnas.jpg'); ?>" />
            </div>
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">previous</span>
            </a>
        </div>
        <div class="d-flex row" style="bottom: 0px;position: absolute;width: 100%;margin: 0px;height: 80px;">
            <div class="col d-flex align-items-center flex-lg-row justify-content-lg-center" style="background: rgba(255,255,255,0.4);">
                <h4 class="d-flex" style="margin-bottom: 0px;">Mendaftar menjadi anggota, sekarang lebih praktis!  </h4>
                <a class="btn btn-outline-dark d-flex justify-content-center align-items-center" role="button" href="#">Daftar Sekarang<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>

    <!-- Profile -->
    <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5">
                    <img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="<?= base_url('assets/img/profil.jpeg'); ?>" />
                </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center justify-content-xl-center">
                <div style="max-width: 450px;">
                    <h3 class="text-capitalize fw-bold">Profile</h3>
                    <h4 class="text-capitalize fw-bold">we are learning organization</h4>
                    <p class="my-3">Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia yang didirikan pada tanggal 20 Juni 1979 di Jakarta, INKINDO merupakan fusi dari Ikatan Konsultan Indonesia (IKINDO) yang didirikan pada tanggal 10 Februari 1970 dan Persatuan Konsultan Teknik Pembangunan Indonesia (PKTPI).</p><a class="btn btn-outline-dark d-flex d-lg-inline-flex justify-content-center align-items-center justify-content-lg-start" role="button" href="#">Lihat Selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Gallery</h2>
                    <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row gx-4 gy-3 row-cols-1 row-cols-md-3 photos" data-bss-baguettebox>
                <div class="col item">
                    <a href="#">
                        <img class="img-fluid" src="<?= base_url('assets/img/slider1.jpeg'); ?>" style="height: 100%;" />
                    </a>
                </div>
                <div class="col item">
                    <a href="#">
                        <img class="img-fluid" src="<?= base_url('assets/img/profil.jpeg'); ?>" style="height: 100%;" />
                    </a>
                </div>
                <div class="col item">
                    <a href="#">
                        <img class="img-fluid" src="<?= base_url('assets/img/rekarnas.jpg'); ?>" style="height: 100%;" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita -->
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5 mb-3">
        <h2>Berita</h2>
        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="card border-0" style="height: 400px;">
                    <img class="img-fluid" src="<?= base_url('assets/img/slider1.jpeg'); ?>" style="height: 50%; object-fit:cover; object-position: 0px 10%" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/slider1.jpeg'); ?>" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/slider1.jpeg'); ?>" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/slider1.jpeg'); ?>" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
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

    <div class="row d-flex justify-content-center align-items-center" style="background: #cee6e6;">
        <div class="col d-flex justify-content-center align-items-center"><i class="fas fa-phone-alt fs-1 me-2"></i>
            <div style="margin: 12px;">
                <h4 style="margin-bottom: 6px;">Bagaimana kami bisa membantu?<br /></h4>
                <p style="margin-bottom: 0px;">Hubungi kami melalui email, media sosial atau nomor telepon dan kami akan membalasnya secepat mungkin</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white bg-dark">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="col-md-10">
                        <h3 class="text-white">Inkindo Yogyakarta</h3>
                        <p>Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia yang di dirikan pada tanggal 20 Juni 1979 di Jakarta.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="h-100">
                        <div class="d-flex justify-content-center justify-content-sm-start p-3">
                            <div>
                                <h3 class="mb-0">Kontak</h3>
                            </div>
                        </div>
                        <div class="d-flex d-sm-flex d-xl-flex align-items-center align-items-sm-center align-items-xl-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="px-2">
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0">+123456789</p>
                            </div>
                        </div>
                        <div class="d-flex d-sm-flex d-xl-flex align-items-center align-items-sm-center align-items-xl-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><i class="far fa-envelope"></i></div>
                            <div class="px-2">
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex d-sm-flex d-xl-flex align-items-center align-items-sm-center align-items-xl-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><i class="fas fa-map-marked"></i></div>
                            <div class="px-2">
                                <h6 class="mb-0">Location</h6>
                                <p class="mb-0">12 Example Street</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">© INKINDO D.I. YOGYAKARTA - All Right Reserved</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 24px;">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 24px;">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 24px;">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>