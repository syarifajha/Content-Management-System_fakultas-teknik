<?php
include "pondasi/kepala.php";
include "admin/config/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM visimisi");
$b = mysqli_fetch_assoc($sql);

?>

<body>

    <!-- MAIN WRAPPER START
        ============================================= -->
    <!-- HEADER END -->

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Visi Misi</h1>
                </div>
            </div>
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
                                <li data-thumb="image/2.jpg">
                                    <img src="image/2.jpg" alt="" width="auto" height="auto" />
                                </li>
                                <li data-thumb="image/1.png">
                                    <img src="image/1.png" alt="" width="auto" height="auto" />
                                </li>
                                <li data-thumb="image/1.png">
                                    <img src="image/1.png" alt="" />
                                </li>
                                <li data-thumb="image/2.jpg">
                                    <img src="image/2.jpg" alt="" />
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Class Gallery End -->

                    <!-- Class Content Start -->
                    <div class="class-content wow fadeIn col-md-6 clearfix">
                    <h2>Visi</h2>
                        <p align="justify" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $b['visi'] ?></p>
                    <h2>Misi</h2>
                        <p align="justify" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $b['misi'] ?></p>


                    </div>
                    <!-- Class Content End -->

                </div>
            </div>
        </div>

        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Strategi</h1>
                </div>
            </div>
        </div>
        <div class="class-feature grey-background clearfix">
            <div class="container">
                <div class="row">


                    <?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM strategi");
                    while ($b = mysqli_fetch_assoc($sql)) {

                    ?>
                        <div class="feature-item col-md-4 wow fadeInUp">
                            <div class="feature-with-bg" style="background-color: #59bec9;">
                                <div class="feature-icon">
                                    <div class="icon icon-map-1"></div>
                                </div>
                                <div class="feature-desc">

                                    <p><?php echo $b['strategi'] ?>.</p>
                                    <br /> <br /> <br />
                                    <p></p>
                                </div>
                            </div>
                        </div><?php } ?>
                </div>
            </div>
        </div>
        <!-- CLASS FEATURE END -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Tujuan</h1>
                </div>
            </div>
        </div>
        <div class="class-feature grey-background clearfix">
            <div class="container">
                <div class="row">


                    <?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM tujuan");
                    while ($b = mysqli_fetch_assoc($sql)) {

                    ?>
                        <div class="feature-item col-md-4 wow fadeInUp">
                            <div class="feature-with-bg" style="background-color: #e57978;">
                                <div class="feature-icon">
                                    <div class="icon icon-thumbs26"></div>
                                </div>
                                <div class="feature-desc">

                                    <p><?php echo $b['tujuan'] ?></p>
                                    <br /> <br /> <br /> <br />
                                </div>
                            </div>
                        </div><?php } ?>
                </div>
            </div>
        </div>
        </div>


        <script type="text/javascript">
            jQuery(window).load(function() {
                var classDetailsHeight = jQuery('.class-item img').height();
                jQuery(".class-details").css("height", classDetailsHeight);
            });
        </script>
        <!-- RELATED CLASSES SCRIPT END -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">
        <div class="container">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-left wow fadeInUp">
                        <h3>Ayo Daftar Sekarang Juga !</h3>
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

    <!-- COPYRIGHT START
            ============================================= -->

    <?php
    include "pondasi/kaki.php";
    ?>
    <!-- COPYRIGHT END -->

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    <!-- External -->
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>