<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Fakultas Teknik UMPO</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/plugin.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/logo.png">

    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
    <!-- MAIN WRAPPER START -->
    <div id="main-wrapper" class="animsition clearfix">
        <!-- HEADER START -->
        <header id="header" class="site-header clearfix">
            <div class="container">
                <div class="row">
                    <!-- LOGO START -->
                    <div class="logo col-md-2">
                        <a href="index.php">
                            <img src="image/logo.png" alt="" width="115px" height="115px">
                        </a>
                    </div>
                    <!-- LOGO END -->

                    <!-- NAVIGATION START -->
                    <div class="navigation col-md-10 text-right">
                        <!-- SEARCH BAR START -->
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                            </form>
                        </div>
                        <!-- SEARCH BAR END -->

                        <!-- MOBILE MENU START -->
                        <div class="mobile-menu">
                            <button id="slide-buttons" class="icon icon-navicon-round"></button>
                        </div>

                        <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right" style="overflow-y: auto;">
                            <button class="c-menu__close icon icon-remove-delete"></button>
                            <div class="logo-menu-right text-center">
                                <img src="image/logo.png" alt="" />
                            </div>
                            <ul class="menus-mobile">
                                <li><a href="index.php">Home</a></li>
                                <li class="has-child">
                                    <a href="#">Tentang Kami</a>
                                    <ul class="child">
                                        <li><a href="profil.php">Tentang Kami</a></li>
                                        <li><a href="galeri.php">Gallery</a></li>
                                        <li><a href="visimisi.php">Visi Misi</a></li>
                                        <li><a href="guru.php">Data Dosen</a></li>
                                    </ul>
                                </li>
                                <li><a href="agenda.php">Agenda</a></li>
                                <li><a href="prestasi.php">Prestasi</a></li>
                                <li class="has-child">
                                    <a href="#">Akademik</a>
                                    <ul class="child">
                                        <li><a href="galeri_jurusan.php">Gallery Jurusan</a></li>
                                        <li><a href="teknikelektro.php">Teknik Elektro</a></li>
                                        <li><a href="teknikinformatika.php">Teknik Informatika</a></li>
                                        <li><a href="teknikmesin.php">Teknik Mesin</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="#">Informasi</a>
                                    <ul class="child">
                                        <li><a href="pendaftaran.php">Pendaftaran KKN TEMATIK 2024</a></li>
                                        <li><a href="info.php">Informasi Pendaftaran KKN TEMATIK 2024</a></li>
                                        <li><a href="data_pendaftar.php">Data Pendaftar KKN TEMATIK 2024</a></li>
                                    </ul>
                                </li>
                                <li><a class="btn" style="background-color:#ffb703" href="https://pmb.umpo.ac.id">Daftar</a></li>
                            </ul>
                        </nav>
                        <div id="slide-overlay" class="slide-overlay"></div>
                        <!-- MOBILE MENU END -->

                        <!-- MAIN NAVIGATION START -->
                        <nav id="main-menu" class="menu">
                            <ul id="menu-top-menu" class="menus">
                                <li><a href="index.php">Home</a></li>
                                <li class="has-child">
                                    <a href="#">Tentang Kami</a>
                                    <ul class="child">
                                        <li><a href="profil.php">Tentang Kami</a></li>
                                        <li><a href="galeri.php">Gallery</a></li>
                                        <li><a href="visimisi.php">Visi Misi</a></li>
                                        <li><a href="guru.php">Data Dosen</a></li>
                                    </ul>
                                </li>
                                <li><a href="agenda.php">Agenda</a></li>
                                <li><a href="prestasi.php">Prestasi</a></li>
                                <li class="has-child">
                                    <a href="#">Akademik</a>
                                    <ul class="child">
                                        <li><a href="galeri_jurusan.php">Gallery Jurusan</a></li>
                                        <li><a href="teknikelektro.php">Teknik Elektro</a></li>
                                        <li><a href="teknikinformatika.php">Teknik Informatika</a></li>
                                        <li><a href="teknikmesin.php">Teknik Mesin</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="#">Informasi</a>
                                    <ul class="child">
                                        <li><a href="pendaftaran.php">Pendaftaran KKN TEMATIK 2024</a></li>
                                        <li><a href="info.php">Informasi Pendaftaran KKN TEMATIK 2024</a></li>
                                        <li><a href="data_pendaftar.php">Data Pendaftar KKN TEMATIK 2024</a></li>
                                    </ul>
                                </li>
                                <li><a class="btn" style="background-color:#ffb703" href="https://pmb.umpo.ac.id">Daftar</a></li>
                            </ul>
                        </nav>
                        <!-- MAIN NAVIGATION END -->
                    </div>
                    <!-- NAVIGATION END -->
                </div>
            </div>
        </header>
        <!-- HEADER END -->
    </div>
    <!-- MAIN WRAPPER END -->
</body>
</html>
