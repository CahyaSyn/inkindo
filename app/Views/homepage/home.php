<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

<!-- Carousel -->
<div id="carousel-1" class="carousel slide carousel-light" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100 d-block" id="carousel_image" src="<?= base_url('assets/img/slider1.jpeg'); ?>" alt="Slide Image" />
            <div class="carousel-caption bg-secondary shadow">
                <h3>Slide Title</h3>
                <p>Slide Caption</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100 d-block" id="carousel_image" src="<?= base_url('assets/img/hut43.jpg'); ?>" alt="Slide Image" />
            <div class="carousel-caption bg-secondary shadow">
                <h3>Slide Title</h3>
                <p>Slide Caption</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100 d-block" id="carousel_image" src="<?= base_url('assets/img/rekarnas.jpg'); ?>" alt="Slide Image" />
            <div class="carousel-caption bg-secondary shadow">
                <h3>Slide Title</h3>
                <p>Slide Caption</p>
            </div>
        </div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
    <ol class="carousel-indicators">
        <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
    </ol>
</div>
<!-- End Carousel -->

<!-- Profile -->
<section>
    <div class="container py-4 py-xl-5 pb-xl-0">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" src="assets/img/profil.jpeg" /></div>
            </div>
            <div class="col-md-6 text-center text-md-start d-flex justify-content-center align-items-center">
                <div class="profil-text">
                    <h2 class="text-uppercase fw-bold">Profile</h2>
                    <p class="my-3">Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia yang didirikan pada tanggal 20 Juni 1979 di Jakarta, INKINDO merupakan fusi dari Ikatan Konsultan Indonesia (IKINDO) yang didirikan pada tanggal 10 Februari 1970 dan Persatuan Konsultan Teknik Pembangunan Indonesia (PKTPI).</p><a class="btn btn-outline-primary d-flex d-sm-inline-flex justify-content-center align-items-center" role="button" href="#">Lihat selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
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
<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-md-3">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-semibold">Berita</h3>
                <p class="w-lg-50">Dokumentasi kegiatan dan agenda yang telah dilaksanakan</p>
            </div>
        </div>
        <div class="row d-flex flex-column justify-content-center flex-md-row">
            <div class="col-md-4 me-md-2">
                <div class="row">
                    <div class="col"><img class="img-fluid" src="assets/img/rekarnas.jpg" /></div>
                </div>
                <div class="row">
                    <div class="col pt-3">
                        <h5>Rakernas INKINDO, Tetapkan 8 Bakal Calon Ketua Umum</h5>
                        <p>Konstruksi Media - Dalam penyelenggaran Rapat Kerja Nasinal (Rakernas) Ikatan Nasional Konsultan Indonesia (INKINDO) yang ke-2, Ketua Umum Dewan Pengurus Nasional (DPN) INKINDO Peter Frans mengungkapkan <br /><a href="#">selengkapnya...</a><br /></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 flex-md-nowrap ms-md-2" style="overflow-y: scroll;max-height: 500px;">
                <div class="row mb-md-4">
                    <div class="col-md-5"><img class="img-fluid" src="assets/img/profil.jpeg" /></div>
                    <div class="col pt-3 pt-md-0">
                        <h6 class="fw-semibold">Acara inkindo</h6>
                        <p>Agustus 31, 2022</p>
                    </div>
                </div>
                <div class="row mb-md-4">
                    <div class="col-md-5"><img class="img-fluid" src="assets/img/profil.jpeg" /></div>
                    <div class="col pt-3 pt-md-0">
                        <h6 class="fw-semibold">Acara inkindo</h6>
                        <p>Agustus 31, 2022</p>
                    </div>
                </div>
                <div class="row mb-md-4">
                    <div class="col-md-5"><img class="img-fluid" src="assets/img/profil.jpeg" /></div>
                    <div class="col pt-3 pt-md-0">
                        <h6 class="fw-semibold">Acara inkindo</h6>
                        <p>Agustus 31, 2022</p>
                    </div>
                </div>
                <div class="row mb-md-4">
                    <div class="col-md-5"><img class="img-fluid" src="assets/img/profil.jpeg" /></div>
                    <div class="col pt-3 pt-md-0">
                        <h6 class="fw-semibold">Acara inkindo</h6>
                        <p>Agustus 31, 2022</p>
                    </div>
                </div>
                <div class="row mb-md-4">
                    <div class="col-md-5"><img class="img-fluid" src="assets/img/profil.jpeg" /></div>
                    <div class="col pt-3 pt-md-0">
                        <h6 class="fw-semibold">Acara inkindo</h6>
                        <p>Agustus 31, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agenda -->
<section class="section-agenda">
    <div class="container py-4 py-xl-5">
        <div class="row mb-3">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-semibold">Agenda</h3>
                <p class="w-lg-50">Daftar agenda yang terlaksana dan yang akan datang</p>
            </div>
        </div>
        <div class="row background-agendaa">
            <div class="col px-md-0 mx-md-0">
                <div class="py-md-0 px-md-0 mx-md-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Berikutnya</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Sebelumnya</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active" role="tabpanel">
                            <div class="row d-md-flex justify-content-md-center mt-md-0 pt-3 py-md-4 mx-md-0">
                                <div class="col-md-2 col-lg-1 text-center text-md-center text-secondary">
                                    <h5 class="fw-semibold">AGU</h5>
                                    <h4 class="fw-bold">27</h4>
                                </div>
                                <div class="col-md-5 col-lg-3 col-xl-2"><img class="img-fluid" src="assets/img/agenda-2.jpg" /></div>
                                <div class="col-md-5 col-lg-5 pt-3 pt-md-0 ms-lg-3">
                                    <h5>Diskusi Panel Peluang Jasa Konsultasi Pasca Pandemi Covid 19</h5>
                                    <p>Jalan Kenari, Umbulharjo, Yogyakarta<br />08.00 am - 10.00 am<br /></p>
                                    <p>Saat ini kondisi kegiatan baik APBN dan APBD terpangaruh oleh adanya pandemi, INKINDO DKI akan ...</p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane" role="tabpanel">
                            <div class="row d-md-flex justify-content-md-center mt-md-0 pt-3 py-md-4 mx-md-0">
                                <div class="col-md-2 col-lg-1 text-center text-md-center text-secondary">
                                    <h5 class="fw-semibold">AGU</h5>
                                    <h4 class="fw-bold">28</h4>
                                </div>
                                <div class="col-md-5 col-lg-3 col-xl-2"><img class="img-fluid" src="assets/img/agenda-2.jpg" /></div>
                                <div class="col-md-5 col-lg-5 pt-3 pt-md-0 ms-lg-3">
                                    <h5>Diskusi Panel Peluang Jasa Konsultasi Pasca Pandemi Covid 19</h5>
                                    <p>Jalan Kenari, Umbulharjo, Yogyakarta<br />08.00 am - 10.00 am<br /></p>
                                    <p>Saat ini kondisi kegiatan baik APBN dan APBD terpangaruh oleh adanya pandemi, INKINDO DKI akan ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Regulasi -->
<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-3">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-semibold">Regulasi</h3>
                <p class="w-lg-50">Regulasi Inkindo</p>
            </div>
        </div>
        <div class="row d-md-flex justify-content-md-center">
            <div class="col-md-4 me-md-3 pb-3 pb-md-0">
                <div class="row my-md-0 py-md-0">
                    <div class="col">
                        <h5>Billing rate inkindo tahun 2021</h5>
                        <p>Billing rate inkindo tahun 2021</p><a class="btn btn-outline-secondary btn-sm d-inline-flex justify-content-xl-center align-items-xl-center" role="button"><i class="fas fa-download"></i> Download</a>
                    </div>
                </div>
                <hr />
                <div class="row my-md-0 py-md-0">
                    <div class="col">
                        <h5>Billing rate inkindo tahun 2021</h5>
                        <p>Billing rate inkindo tahun 2021</p><a class="btn btn-outline-secondary btn-sm d-inline-flex justify-content-xl-center align-items-xl-center" role="button"><i class="fas fa-download"></i> Download</a>
                    </div>
                </div>
                <hr />
                <div class="row my-md-0 py-md-0">
                    <div class="col">
                        <h5>Billing rate inkindo tahun 2021</h5>
                        <p>Billing rate inkindo tahun 2021</p><a class="btn btn-outline-secondary btn-sm d-inline-flex justify-content-xl-center align-items-xl-center" role="button"><i class="fas fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ms-md-3 pt-3 pt-md-0">
                <h4>Kategori</h4>
                <div class="row mt-2">
                    <div class="col">
                        <h6 class="border rounded-0 border-dark" style="margin-top: 8px;padding: 8px;">Regulasi INKINDO</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <h6 class="border rounded-0 border-dark" style="margin-top: 8px;padding: 8px;">Regulasi jasa konsultasi konstruksi</h6>
                    </div>
                </div>
                <div class="row pt-md-0 mt-2">
                    <div class="col">
                        <h6 class="border rounded-0 border-dark" style="margin-top: 8px;padding: 8px;">Regulasi jasa konsultasi non-konstruksi</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <h6 class="border rounded-0 border-dark" style="margin-top: 8px;padding: 8px;">Regulasi jasa konsultasi umum</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <h6 class="border rounded-0 border-dark" style="margin-top: 8px;padding: 8px;">Regulasi terkait</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Regulasi -->

<!-- Mitra -->
<section class="py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-semibold">Mitra</h3>
                <p class="w-lg-50">Mitra dari inkindo</p>
            </div>
        </div>
        <div class="row d-lg-flex align-items-lg-center owl-carousel owl-theme owl-loaded">
            <div class="col item"><img src="assets/img/Bromindo.png" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/CEC.jpg" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/Daikin.jpg" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/dekson.jpg" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/granito.jpg" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/HITACHI.png" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/indofon.png" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/jiyu.jpg" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/LG.png" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/Majalah-Konstruksi.png" width="200px" height="200px" /></div>
            <div class="col item"><img src="assets/img/seven.jpg" width="200px" height="200px" /></div>
        </div>
    </div>
</section>
<!-- End of Mitra -->

<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>