<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asuhan Keperawatan</title>

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" type="button" data-toggle="dropdown">
                        <div class="user-panel d-flex">
                            <div class="image">
                                <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <p class="kapital">
                                    Hello, Selamat Datang <strong> <?php echo $username ?> </strong>
                                </p>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="logout.php" type="button" class="dropdown-item dropdown-header">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index.php" class="brand-link" style="text-align: center;">
                <div class="container brand-text font-weight-light" style="color: #fed189"><b>TUGAS</b><span style="color: #00a0df !important"><b> WEB SI</b></span>
                </div>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link <?php if ($title == 'dashboard') {
                                                                    echo 'active';
                                                                } ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_perawat.php" class="nav-link <?php if ($title == 'data_perawat') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-user-nurse"></i>
                                <p>
                                    Data Perawat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_pasien.php" class="nav-link  <?php if ($title == 'data_pasien') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-hospital-user"></i>
                                <p>
                                    Data Pasien
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_askep.php" class="nav-link  <?php if ($title == 'data_askep') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-stethoscope"></i>
                                <p>
                                    Data AsKep
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_ruang.php" class="nav-link  <?php if ($title == 'data_ruang') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-procedures"></i>
                                <p>
                                    Data Ruang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_diagnosa.php" class="nav-link  <?php if ($title == 'data_diagnosa') {
                                                                                echo 'active';
                                                                            } ?>">
                                <i class="nav-icon fas fa-diagnoses"></i>
                                <p>
                                    Data Diagnosa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_luaran.php" class="nav-link <?php if ($title == 'data_luaran') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Data Luaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_intervensi.php" class="nav-link <?php if ($title == 'data_intervensi') {
                                                                                echo 'active';
                                                                            } ?>">
                                <i class="nav-icon fas fa-hand-holding-heart"></i>
                                <p>
                                    Data Intervensi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_lama_intervensi.php" class="nav-link <?php if ($title == 'data_lama_intervensi') {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="nav-icon fas fa-user-clock"></i>
                                <p>
                                    Data Lama Intervensi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_jenis_kriteria.php" class="nav-link <?php if ($title == 'data_jenis_kriteria') {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="nav-icon fas fa-file-medical"></i>
                                <p>
                                    Data Jenis Kriteria
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_kriteria.php" class="nav-link <?php if ($title == 'data_kriteria') {
                                                                            echo 'active';
                                                                        } ?>">
                                <i class="nav-icon fas fa-file-medical-alt"></i>
                                <p>
                                    Data Kriteria
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_jenis_evaluasi.php" class="nav-link <?php if ($title == 'data_jenis_evaluasi') {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="nav-icon fas fa-comment-medical"></i>
                                <p>
                                    Data Jenis Evaluasi
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">