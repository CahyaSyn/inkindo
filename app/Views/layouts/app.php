<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
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
        font-size: 16px;
        margin: 4.5px;
        text-decoration: none;
        padding-top: 4px;
        color: black;
    }

    .kategori:hover {
        background-color: black;
        color: white;

    }

    .kode-1 {
        font-family: 'Poppins';
        padding-top: 35px;
        padding-bottom: 20px;
    }

    .kode-2 {
        color: gray;
        padding-left: 140px;
        padding-right: 140px;
        font-size: 16PX;
        font-family: 'Poppins';
    }

    .center-card {
        height: 80px;
    }

    .lingkaran1 {
        width: 90px;
        height: 66px;
        background: #207FC1;
        border-radius: 50%;
        border-top-left-radius: 100% 160%;
        border-top-right-radius: 100% 160%;
        padding-left: 30px;
        padding-right: 30px;
        margin-bottom: 18px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
    }

    .nomer {
        text-align: center;
        padding-top: 15px;
        color: white;
        font-size: 22px;
        font-family: 'Poppins';
    }

    .card-text {
        padding: 8px;
        font-size: 12.3px;
        font-family: 'Poppins';
    }

    .pembungkus {
        width: 1167px;
        height: 283px;
        top: 82px;
        background: url("../assets/img/kode.png");
        opacity: 0.9;
    }
</style>

<body>
    <!-- Render Section -->
    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
<script>
    $(Window).scroll(function() {
        $('.navbar').toggleClass('bg-white', $(Window).scrollTop() > 700);
    });
</script>

</html>