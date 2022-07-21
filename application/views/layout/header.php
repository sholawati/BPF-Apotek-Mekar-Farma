<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek Mekar Farma</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/e41d3eae69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <?php
                if ($user['role'] == 'User') {
                ?>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('Profil/pembelian') ?>">
                        <i class="fas fa-history fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">
                            !
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('Profil/detail') ?>">
                        <i class="fas fa-shopping-cart fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">
                            <?= $jlh ?>
                        </span>
                    </a>
                </li>
                <?php
                }
                ?>


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= base_url('assets/') ?>dist/img/apotek.jfif" alt="apotek"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Apotek Mekar Farma</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img class="img-profile rounded-circle"
                            src="<?= base_url('assets/dist/img/profile/') . $user['gambar']; ?>">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><span
                                class="brand-text font-weight-light"><?= $user['nama']; ?></span></a>
                    </div>
                </div>


                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dahboard
                                </p>
                            </a>

                        </li> -->
                        <!-- <li class="nav-header">EXAMPLES</li> -->
                        <?php
                        if ($user['role'] == 'Admin') { ?>
                        <li class="nav-item">
                            <a href="<?= site_url('Dashboard/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Dashboard
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Pegawai/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-user"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Pegawai
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Obat/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tablets"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Obat
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('Supplier/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Supplier
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Penjualan/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Penjualan
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= site_url('Auth/Logout') ?>">
                                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        <?php } else if ($user['role'] == 'Pegawai') { ?>
                        <li class="nav-item">
                            <a href="<?= site_url('Dashboard/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tablets fas fa-tachometer-alt"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Dashboard
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Obat/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tablets"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Obat
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Supplier/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Supplier
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('Penjualan/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <!-- <i class="fa-duotone fa-pills"></i> -->
                                <p>
                                    Penjualan
                                    <!-- <span class="badge badge-danger right">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= site_url('Auth/Logout') ?>">
                                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        <?php } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= site_url('Profil/') ?>">
                                <i class="nav-icon fas fa-fw fa-user"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= site_url('Profil/Obat') ?>">
                                <i class="nav-icon fas fa-fw fa-tablets"></i>
                                <span>Obat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= site_url('Auth/Logout') ?>">
                                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <?php
                        }
        ?>

            <!-- /.sidebar -->
        </aside>