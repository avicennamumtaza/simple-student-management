<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data['judul']?> </title>
    <!-- WRONG: <link rel="stylesheet" href="../../../public/css/bootstrap.css"> -->
    <link rel="stylesheet" href='<?= BASEURL; ?>/css/bootstrap.css'>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="<?= BASEURL; ?>/js/node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">
            <img class="d-inline-block align-text-top" width="30" height="24" src="<?= BASEURL; ?>/img/ss.png" alt="">
            Navbar
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                <a class="nav-link" href="<?= BASEURL; ?>/AboutController/">About</a>
                <a class="nav-link" href="<?= BASEURL; ?>/MhsController/">Mahasiswa</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav>