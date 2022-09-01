<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Inkindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">

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
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2" >Daftar Agenda</h1>
                    <div class="container text-center py-5 px-2">
                    <?= $pager->links('tabel_agenda', 'agenda_pagination'); ?>
                    <?php foreach ($agenda as $a) : ?>
                    <div class="row">
                        <div class="col col-lg-2 first">
                        <h4><?= $a['tanggal']; ?></h4>
                        </div>
                        <div class="col-md-auto second">
                        <img src="/img/<?= $a['sampul']; ?>" width="250px" alt="">
                        </div>
                        <div class="col third text-start">
                            <h5><?= $a['judul']; ?></h5>
                            <p class="mt-2" ><?= $a['lokasi']; ?></p>
                            <p><?= $a['waktu']; ?></p>
                            <p class="mt-4" ><?= $a['deskripsi']; ?></p>
                            <div class="btn btn-outline-secondary mt-4" >Detail Acara <i class="fa-solid fa-arrow-right"></i> </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>