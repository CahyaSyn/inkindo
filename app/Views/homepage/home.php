<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

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
<!-- End Carousel -->

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
<!-- End Profile -->

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
<!-- End Gallery -->

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

<!-- Agenda -->
<div class="container">
    <h2 class="text-center" >Agenda</h2>
    <div class="row">
        <div class="col">
        <ul class="nav nav-tabs" style="border: 0;" >
        <li class="nav-items"><a href="#next-agenda" class="nav-link active" data-bs-toggle="tab" >Agenda Berikutnya</a></li>
        <li class="nav-items"><a href="#prev-agenda" class="nav-link" data-bs-toggle="tab">Agenda Lama</a></li>
    </ul>
    <div class="tab-content px-5 m-5" style="height: 300px;" >
        <div class="tab-pane active" id="next-agenda" >
            <div class="row border">
                <div class="col-md-1">
                    <h5>Agu</h5>
                    <h5>31</h5>
                </div>
                <div class="col-md-4" style="object-fit: cover;" >
                    <img class="img-fluid" src="<?= base_url('assets/img/agenda-2.jpg'); ?>" width="300" alt="">
                </div>
                <div class="col-7">
                    <div>
                    <h5>Diskusi Panel Peluang Jasa Konsultasi Pasca Pandemi Covid 19</h5>
                    <ul>
                        <li>
                            <p>Jalan Kenari, Umbulharjo, Yogyakarta</p>
                        </li>
                        <li>
                            <p>08.00 am - 10.00 am</p>
                        </li>
                    </ul>
                    <p>Saat ini kondisi kegiatan baik APBN dan APBD terpangaruh oleh adanya pandemi, INKINDO  DKI akan ...</p>
                    </div>
                    
                    <a class="btn btn-outline-dark justify-content-center align-items-center mt-3" role="button" href="#">Daftar Sekarang<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="prev-agenda" >
            <div class="row border">
                <div class="col-md-1">
                    <h5>Agu</h5>
                    <h5>31</h5>
                </div>
                <div class="col-md-4" style="object-fit: cover;" >
                    <img class="img-fluid" src="<?= base_url('assets/img/agenda-1.jpg'); ?>" width="300" alt="">
                </div>
                <div class="col-7">
                    <div>
                    <h5>Diskusi Panel Peluang Jasa Konsultasi Pasca Pandemi Covid 19</h5>
                    <ul>
                        <li>
                            <p>Jalan Kenari, Umbulharjo, Yogyakarta</p>
                        </li>
                        <li>
                            <p>08.00 am - 10.00 am</p>
                        </li>
                    </ul>
                    <p>Saat ini kondisi kegiatan baik APBN dan APBD terpangaruh oleh adanya pandemi, INKINDO  DKI akan ...</p>
                    </div>
                    
                    <a class="btn btn-outline-dark justify-content-center align-items-center mt-3" role="button" href="#">Daftar Sekarang<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>


<!-- Regulasi -->
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
<!-- End Regulasi -->

<!-- Mitra -->
<br>
<div class="container my-3 ">
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
<!-- End of Mitra -->

<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>