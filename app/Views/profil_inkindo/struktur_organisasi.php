<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<!-- Include Navbar -->
<?= $this->include('layouts/partials/navbar'); ?>
<!-- End Navbar -->

<section class="py-5">
    <div class="container">
        <div class="row text-center d-flex flex-column-reverse align-items-center flex-md-row justify-content-md-center py-md-0 my-md-0">
            <div class="col-md-6 col-lg-5 col-xl-4 py-3 ms-lg-4">
                <div style="background: url('assets/img/background.png') center / cover no-repeat;"><img class="w-100 fit-cover px-md-4 py-md-4" src="assets/img/image 1.png" /></div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 text-md-start d-sm-flex flex-sm-column justify-content-sm-center py-3 px-4 px-md-4 me-lg-4">
                <h4 class="fw-bold text-center my-md-0 mb3 mb-md-3" style="font-family: Poppins, sans-serif;">Dewan Pengurus Provinsi Harian</h4>
                <p class="my-3 my-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div id="tree"></div>
    </div>
</section>

<script src="js/OrgChart.js"></script>
<script>
    var chart = new OrgChart(document.getElementById("tree"), {
        enableSearch: false,
        enableDragDrop: true,
        mouseScrool: OrgChart.none,
        tags: {
            "assistant": {
                template: "ula"
            }
        },
        nodeMenu: {
            details: {
                text: "Details"
            },
            edit: {
                text: "Edit"
            },
            add: {
                text: "Add"
            },
            remove: {
                text: "Remove"
            }
        },
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        }
    });

    chart.load([{
            id: 1,
            name: "Denny Curtis",
            title: "CEO",
            img: "https://cdn.balkan.app/shared/2.jpg"
        },
        {
            id: 2,
            pid: 1,
            name: "Ashley Barnett",
            title: "Sales Manager",
            img: "https://cdn.balkan.app/shared/3.jpg"
        },
        {
            id: 3,
            pid: 1,
            name: "Caden Ellison",
            title: "Dev Manager",
            img: "https://cdn.balkan.app/shared/4.jpg"
        },
        {
            id: 4,
            pid: 2,
            name: "Elliot Patel",
            title: "Sales",
            img: "https://cdn.balkan.app/shared/5.jpg"
        },
        {
            id: 5,
            pid: 2,
            name: "Lynn Hussain",
            title: "Sales",
            img: "https://cdn.balkan.app/shared/6.jpg"
        },
        {
            id: 6,
            pid: 3,
            name: "Tanner May",
            title: "Developer",
            img: "https://cdn.balkan.app/shared/7.jpg"
        },
    ]);
</script>

<!-- Footer -->
<?= $this->include('layouts/partials/footer'); ?>
<!-- End Footer -->
<?= $this->endsection(); ?>