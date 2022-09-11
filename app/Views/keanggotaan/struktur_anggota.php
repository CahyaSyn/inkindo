<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

<section>
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h3 class="fw-semibold">Struktur Organisasi</h3>
                <p class="w-lg-50">Daftar struktur anggota</p>
            </div>
        </div>
        <div class="row">
            <div id="tree"></div>
        </div>
    </div>
</section>

<?= $this->include('script/orgchart'); ?>
<!-- Include Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->

<?= $this->endsection(); ?>