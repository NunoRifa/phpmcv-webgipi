<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> PT. Giri Permata Indo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href="<?= BASEURL; ?>/img/fav-icon.png">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link href="<?= BASEURL; ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendor/aos/aos.css">
</head>

<body>
    <!-- Navbar -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $data['getDataGeneral']['email'] ?>"><?= $data['getDataGeneral']['email'] ?></a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $data['getDataGeneral']['phone'] ?></span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="<?= $data['getDataGeneral']['facebook'] ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="<?= $data['getDataGeneral']['instagram'] ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="<?= $data['getDataGeneral']['whatsapp'] ?>" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></i></a>
            </div>
        </div>
    </section>
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- <h1 class="logo"><a href="index.html">LOGO</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= BASEURL; ?>" class="logo"><img src="<?= BASEURL; ?>/img/icon.png" alt="Icon"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <?php foreach ($data['listPage'] as $listPage) : ?>
                        <li><a class="nav-link scrollto" href="<?= BASEURL . $listPage['url']; ?>"><?= $listPage['nama']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Navbar -->