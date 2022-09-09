<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

<div class="col" style="background-image: url(<?= base_url('assets/img/visimisi.jpg'); ?>); height: 434px; ">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 text-white my-5 py-5">
                <h1 class="fw-bold fs-1 align-middle">Visi</h1>
                <h4 class="fw-normal">Terwujudnya perusahaan Jasa Konsultan yang berintegritas, <br>professional dan inovatif</h3>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 py-5">
    <h1 class="text-center my-5 fw-bold">Misi</h1>
    <div class="row py-3 px-5 text-center">
        <div class="owl-carousel owl-theme">
            <div class="item mb-4 me-4">
                <div class="card shadow">
                    <img src="<?= base_url('assets/img/misi3.png'); ?>" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h6> Meningkatkan efektivitas INKINDO sebagai wadah komunikasi dan koordinasi antar Anggota dengan para pemangku kepentingan</h6>
                    </div>
                </div>
            </div>
            <div class="item mb-4  me-4">
                <div class="card shadow">
                    <img src="<?= base_url('assets/img/misi.png'); ?>" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h6> Meningkatkan efektivitas INKINDO sebagai wadah komunikasi dan koordinasi antar Anggota dengan para pemangku kepentingan</h6>
                    </div>
                </div>
            </div>
            <div class="item mb-4  me-4">
                <div class="card shadow">
                    <img src="<?= base_url('assets/img/misi2.png'); ?>" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h6> Meningkatkan efektivitas INKINDO sebagai wadah komunikasi dan koordinasi antar Anggota dengan para pemangku kepentingan</h6>
                    </div>
                </div>
            </div>
            <div class="item mb-4  me-4">
                <div class="card shadow">
                    <img src="<?= base_url('assets/img/misi3.png'); ?>" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h6> Meningkatkan efektivitas INKINDO sebagai wadah komunikasi dan koordinasi antar Anggota dengan para pemangku kepentingan</h6>
                    </div>
                </div>
            </div>
            <div class="item mb-4  me-4">
                <div class="card shadow">
                    <img src="<?= base_url('assets/img/misi2.png'); ?>" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h6> Meningkatkan efektivitas INKINDO sebagai wadah komunikasi dan koordinasi antar Anggota dengan para pemangku kepentingan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>