<?php
include "pondasi/kepala.php";
include "admin/config/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM info");
$b = mysqli_fetch_assoc($sql);
?>

<head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- MAIN WRAPPER START -->
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section id="content" class="single-wrapper">

        <div class="our-features grey-background">
            <div class="container">
                <div class="heading-block wow fadeIn">
                    <h2>INFORMASI PERKULIAHAN</h2>
                    <h4 class="tagline"></h4>
                </div>


                        <!-- SINGLE CLASS START
                ============================================= -->
        <div class="single-classes clearfix">
            <div class="container">
                <div class="row">
                    <!-- Class Gallery Start -->
                    <div class="class-gallery wow fadeIn col-md-6 clearfix">
                        <div class="class-flexslider">
                            <ul class="slides">
                                <li data-thumb="image/praktikum/1.JPG">
                                    <img src="image/praktikum/2.JPG" alt="" width="auto" height="auto" />
                                </li>
                                <li data-thumb="image/praktikum/2.JPG">
                                    <img src="image/praktikum/3.JPG" alt="" width="auto" height="auto" />
                                </li>
                                <li data-thumb="image/praktikum/3.JPG">
                                    <img src="image/praktikum/1.JPG" alt="" />
                                </li>
                                <li data-thumb="image/praktikum/1.JPG">
                                    <img src="image/praktikum/2.JPG" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Class Gallery End -->

                <div class="about-us">
                    <div class="container">
                        <div class="row">
                            <!-- Accordion Start -->
                            <div class="accordion col-md-6">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">Teknik Mesin</h4>
                                            </div>
                                        </a>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <!-- Display the schedule image -->
                                                <img src="image/1.png" alt="Jadwal Pendaftaran" style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">Download Jadwal Perkuliahan</h4>
                                            </div>
                                        </a>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <a href="image/JADWAL KULIAH TI GENAP 2024.pdf" download="jadwal.png" class="btn btn-primary btn-lg" style="background-color: #ffb703; border-color: #ffb703;">
                                                    <i class="fas fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">Download Jadwal UTS</h4>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <a href="image/JADWAL KULIAH TI GENAP 2024.pdf" download="jadwal.png" class="btn btn-primary btn-lg" style="background-color: #ffb703; border-color: #ffb703;">
                                                    <i class="fas fa-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer id="footer">
        <div class="container">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-left wow fadeInUp">
                        <h3>Ayo Daftar Sekarang Juga!</h3>
                    </div>

                    <div class="col-md-4 wow fadeInUp">
                        <div class="button-normal white pull-right">
                            <a href="https://pmb.umpo.ac.id" class="no-margin">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- COPYRIGHT START -->
    <?php
    include "pondasi/kaki.php";
    ?>
    <!-- COPYRIGHT END -->

    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts -->
    <!-- External -->
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
