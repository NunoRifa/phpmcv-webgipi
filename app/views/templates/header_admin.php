<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin GIPI | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- boxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= BASEURL ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= BASEURL ?>/dist/img/AdminLTELogo.png" alt="AdminLogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= BASEURL ?>/Admin/logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- End Navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= BASEURL ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Page</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/Admin/dashboard/" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle nav-icon"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= BASEURL ?>/Admin/header/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Header</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL ?>/Admin/about/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tentang Kami</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL ?>/Admin/services/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Layanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL ?>/Admin/portfolio/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Portfolio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL ?>/Admin/gallery/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gallery</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/Admin/history/" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Sejarah
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/Admin/visi/" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Visi & Misi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASEURL ?>/Admin/portfolioContent/" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Portofolio
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End sidebar-menu -->
            </div>
            <!-- End sidebar -->
        </aside>
        <!-- End main sidebar container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $data['breadcrumb_active'] ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= $data['breadcrumb_link'] ?>"><?= $data['breadcrumb'] ?></a></li>
                                <li class="breadcrumb-item active"><?= $data['breadcrumb_active'] ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- End content-header -->