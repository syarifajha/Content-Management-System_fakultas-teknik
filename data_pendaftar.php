<?php
include "pondasi/kepala.php";
include("admin/config/koneksi.php");
$data_pendaftar = mysqli_query($conn, "SELECT * FROM pendaftaran");
$nomor = 1;
?>

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">

        <div class="our-features grey-background">
            <div class="container">
                <div class="heading-block wow fadeIn">
                    <h2>Pendaftar</h2>
                    <h4 class="tagline">Berikut adalah data pendaftar</h4>
                </div>
                <h3 class="tagline">Berikut adalah data data yang sudah mendaftar KKN TEMATIK Fakultas Teknik UMPO</h3>
                <table id="tabel-data" class="display">
                    <thead>
                        <tr>
                            <th style="background-color: #219ebc;"><b>No</b></th>
                            <th style="background-color: #219ebc;"><b>Nama Mahasiswa</b></th>
                            <th style="background-color: #219ebc;"><b>NIM</b></th>
                            <th style="background-color: #219ebc;"><b>Program Studi</b></th>
                            <th style="background-color: #219ebc;"><b>Kelas</b></th>
                            <!--<th style="background-color: #219ebc;"><b>Download Kartu</b></th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($data_pendaftar)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data['nama_mahasiswa']; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['program_studi']; ?></td>
                                <td><?php echo $data['kelas']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- FEATURES SECTION END -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">

        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left wow fadeInUp">
                    <h3>Ayo Daftar Sekarang !</h3>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="button-normal white pull-right">
                        <a href="https://pmb.umpo.ac.id" class="no-margin">Daftar Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- FOOTER END -->

    <!-- COPYRIGHT START
            ============================================= -->

    <?php
    include "pondasi/kaki.php";
    ?>
    <!-- COPYRIGHT END -->

    <!-- Footer Scripts
        ============================================= -->
    <!-- External -->
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" class="no-print"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" class="no-print"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js" class="no-print"></script>
    <script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" class="no-print"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>

</body>

</html>
