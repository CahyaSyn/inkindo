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

<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>