<?php

include("admin/config/koneksi.php");

session_start();
$current_id = $_SESSION['current_id'];

$sql = 'SELECT id, nama_mahasiswa, nim, nomor_hp, alamat, program_studi, kelas, keterampilan_khusus, ukuran, status_keikutsertaan FROM pendaftaran WHERE id=' . $current_id;
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/kartu.css" type="text/css" />
    <link rel="stylesheet" href="css/print.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />

    <!-- icon web address
    ============================================= -->
    <link rel="shortcut icon" href="image/logo_tk_hd.png">

    <!-- Document Title
    ============================================= -->
    <title>Download Kartu Pendaftaran</title>
</head>
<body>
    <!-- Header Card-->
    <header id="header" class="site-header clearfix no-print">
        <div class="container">
            <div class="row">

                <!-- LOGO START
                ============================================= -->
                <div class="logo col-md-2">
                    <a href="index.php">
                        <img src="image/logo_tk_cut.png" alt="" width="115px" height="115px">
                    </a>
                </div>
                <!-- LOGO END -->

                <!-- NAVIGATION START
                ============================================= -->
                <div class="navigation col-md-10 text-right">
                        <!-- MAIN NAVIGATION START
                            ============================================= -->
                        <nav id="main-menu" class="menu">
                            <ul id="menu-top-menu" class="menus">
                                <!--<li class="active"><a href="index.php">Home</a></li>-->
                                <li><a href="index.php">Home</a></li>
                                <!--<li><a href="profil.php">Profil Sekolah</a></li>-->
                                <!--<li><a href="galeri.php">Gallery</a></li>-->
                                <li class="has-child">
                                    <a href="#">Tentang Kami</a>
                                    <ul class="child">
                                        <li><a href="profil.php">Tentang Kami</a></li>
                                        <li><a href="galeri.php">Gallery</a></li>
                                        <li><a href="visimisi.php">Visi Misi</a></li>
                                        <li><a href="guru.php">Data Dosen</a></li>
                                    </ul>
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
                                <li><a class="btn" style="background-color:#ffb703" href="https://pmb.umpo.ac.id">Daftar</a></li>
                            </ul>
                        </nav>
                        <!-- MAIN NAVIGATION END -->
                    </div>
                    <!-- NAVIGATION END -->
            </div>
        </div>
    </header>

    <div id="kartu" style="background-image: url(image/demo.png);">
        <img src="image/logo.png" alt="KKN TEMATIK UMPO 2024" style="display: block; margin-top: 10px; margin-left: 5cm;" height="150px" width="150px">
        <h1 align="center">KKN TEMATIK</h1>
        <h2 align="center">Kartu Pendaftaran</h2>

        <p>Berikut adalah biodata mahasiswa yang mendaftar :</p>

        <table style="font-family:'Times New Roman', Times, serif">
            <tr>
                <td style="width: 30%;">No Peserta</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['id'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['nama_mahasiswa'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">NIM</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['nim'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Program Studi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['program_studi'] ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Kelas</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $result['kelas'] ?></td>
            </tr>
        </table>

        <br>

        <p align="justify" style="font-family:'Times New Roman', Times, serif">Dengan ini, kami menyatakan bahwa mahasiswa tersebut telah resmi mendaftar dalam KKN Tematik dan telah mengikuti prosedur pendaftaran yang ditetapkan.
            Untuk memverifikasi data, <b style="color: crimson;">maka kepada calon peserta diharapkan untuk membawa persyaratan yang diperlukan dan dapat dilihat pada halaman informasi pendaftaran serta cetak kartu pendaftaran ini.</b></p>
        <br>
        <div style="width: 50%; text-align: left; float: right;">Ponorogo, <?= date('d-M-Y'); ?></div><br>
    </div>

    <!-- FOOTER START
    ============================================= -->

    <footer id="footer">
        <div class="container no-print">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 pull-left wow fadeInUp">
                            <h3>Silahkan klik tombol cetak kartu, untuk mencetak kartu pendaftaran!</h3>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="button-normal white pull-right">
                                <a class="no-margin no-print" onclick="JavaScript:window.location.href='kartu_daftar.php?file=kartu peserta.pdf';">Cetak Kartu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- FOOTER END -->
    <script>
        window.print();
    </script>
</body>
</html>
