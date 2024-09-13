<?php
include "pondasi/kepala.php";
?>
<!-- HEADER END -->

<!-- CONTENT START -->
<section id="content" class="single-wrapper">
    <!-- Page Title -->
    <div class="grey-background wow fadeIn">
        <div class="container">
            <div class="heading-block page-title wow fadeInUp">
                <h1>Informasi Jurusan</h1>
                <h4 class="tagline">Dibawah ini adalah beberapa informasi semua jurusan</h4>
            </div>
        </div>
    </div>

    <!-- SINGLE CLASS START -->
    <div class="single-classes clearfix">
        <div class="container">
            <div class="row justify-content-center"> <!-- Centering content -->
                <!-- Class Gallery Start -->
                <div class="class-gallery wow fadeIn col-md-6 clearfix">
                    <div class="class-flexslider">
                        <ul class="slides">
                            <?php
                            include "admin/config/koneksi.php";
                            $sql = mysqli_query($conn, "SELECT * FROM galeri_jurusan");
                            while ($b = mysqli_fetch_assoc($sql)) {
                            ?>
                                <li data-thumb="admin/foto/galeri_jurusan/<?php echo $b['foto_jur'] ?>">
                                    <img src="admin/foto/galeri_jurusan/<?php echo $b['foto_jur'] ?>" alt="" width="auto" height="auto" style="margin: 0 auto; display: block;" /> <!-- Styling for centering -->
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- Class Gallery End -->
            </div>
        </div>
    </div>
</section>
<!-- CONTENT END -->

<!-- FOOTER START -->
<footer id="footer">
    <div class="container">
        <div class="row">
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
