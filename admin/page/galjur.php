<?php
include "pondasi/kepala.php";
include "pondasi/kiri.php";
?>

<link rel="stylesheet" type="text/css" href="../../assets/vendor_components/gallery/css/animated-masonry-gallery.css" />
<!-- fancybox -->
<link rel="stylesheet" type="text/css" href="../../assets/vendor_components/lightbox-master/dist/ekko-lightbox.css" />

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <div class="d-inline-block align-items-center">
                    <nav>
                        <a href="galjur-tbh.php" class="btn btn-success"><i class="fa fa-upload"></i> Upload Galeri Jurusan</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div id="gallery">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">Photo <strong>Gallery Jurusan</strong></h2>
                    <div class="pull-right btn-group"></div>
                </div>
            </div>

            <!-- Content -->
            <section class="content">
                <div class="row">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM galeri_jurusan");
                    while ($b = mysqli_fetch_assoc($sql)) {
                        echo "
                        <div class='col-12 col-lg-6 col-xl-4'>
                            <div class='box'>
                                <div class='box-body'>
                                    <div class='product-img'>
                                        <img src='../foto/galeri_jurusan/" . $b['foto_jur'] . "' alt='' width='300px' height='300px'>
                                    </div>
                                    <div class='product-text'>
                                        <div class='pro-img-overlay'>
                                            <a href='galjur-hapus.php?id=" . $b['id'] . "' class='btn btn-danger btn-icon-circle'><i class='mdi mdi-delete'></i></a>
                                        </div>
                                        <h3 class='box-title mb-0'>" . $b['ket_jur'] . "</h3>
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </section>
</div>

<?php
include "pondasi/kaki.php";
?>
