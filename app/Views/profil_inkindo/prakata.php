<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

<section class="py-5">
    <div class="container">
        <div class="row text-center d-flex flex-column-reverse align-items-center flex-md-row justify-content-md-center py-md-0 my-md-0">
            <div class="col-md-6 col-lg-5 col-xl-4 text-md-start d-sm-flex flex-sm-column justify-content-sm-center py-3 px-4 px-md-4 me-lg-4">
                <h3 class="fw-bold text-center my-md-0 mb3 mb-md-3" style="font-family: Poppins, sans-serif;">Tentang INKINDO</h3>
                <p class="my-3 my-md-0">Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia yang didirikan pada tanggal 20 Juni 1979 di Jakarta, INKINDO merupakan fusi dari Ikatan Konsultan Indonesia (IKINDO) yang didirikan pada tanggal 10 Februari 1970 dan Persatuan Konsultan Teknik Pembangunan Indonesia (PKTPI)</p>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 py-3 ms-lg-4">
                <div style="background: url('assets/img/background.png') center / cover no-repeat;"><img class="w-100 fit-cover px-md-4 py-md-4" src="assets/img/image 1.png" /></div>
            </div>
        </div>
    </div>
</section>



<section class="py-5">
    <div style="width: 70%;position: absolute;height: 255px;transform: translate(22%) translateY(-20px);background: #69c3cb;"></div>
    <div class="container d-lg-flex justify-content-lg-center">
        <div class="row owl-prakata owl-carousel owl-theme owl-loaded">
            <div class="col item shadow">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="height: 180px;">
                            <div class="col-auto"><i class="far fa-star"></i></div>
                            <div class="col">
                                <p>Saat ini INKINDO memiliki 6,252 anggota perusahaan Jasa Konsultan Nasional dan 120 perusahaan Afiliasi/Asing yang tersebar di 34 Provinsi. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col item shadow">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="height: 180px;">
                            <div class="col-auto"><i class="far fa-star"></i></div>
                            <div class="col">
                                <p> INKINDO memiliki peran penting dalam mengendalikan pelayanan konsultansi pada jasa konstruksi dan jasa non konstruksi. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col item shadow">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="height: 180px;">
                            <div class="col-auto"><i class="far fa-star"></i></div>
                            <div class="col">
                                <p> INKINDO Mempunyai Roadmap Menuju INKINDO Emas 2030, merupakan upaya INKINDO dalam menghadapi tantangan di usia 50 tahun pada tahun 2029 mendatang. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col item shadow">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="height: 180px;">
                            <div class="col-auto"><i class="far fa-star"></i></div>
                            <div class="col">
                                <p> INKINDO Mempunyai Roadmap Menuju INKINDO Emas 2030, merupakan upaya INKINDO dalam menghadapi tantangan di usia 50 tahun pada tahun 2029 mendatang. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container bg-roadmap">
        <div class="row d-md-flex justify-content-md-center">
            <div class="col-md-8 col-xl-6 text-center py-0 px-md-0 px-5">
                <h4 class="text-primary">Roadmap INKINDO 2022</h4>
                <p class="py-md-4 px-md-4">Merupakan blueprint dan grand design yang menjadi peta jalan strategis berupa rencana berbasis waktu yang mendefinisikan kondisi eksisting organisasi INKINDO saat ini, kearah mana tujuan ideal kondisi yang dituju dalam prespektif waktu, dan bagaimana mencapai tujuan tersebut. Roadmap akan menjadi representasi visual yang mengatur dan menyajikan informasi penting terkait dengan rencana masa depan INKINDO.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>