<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas Teknik UMPO</title>
    <!-- External -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <style>
        /* Your custom styles here */
        #gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery-item {
            flex: 1 1 calc(33.333% - 20px); /* Adjust number of items per row */
            margin-bottom: 20px;
        }

        .card {
            position: relative;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .card-img-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            transition: background-color 0.5s;
            opacity: 0; /* Hide by default */
            pointer-events: none; /* Prevent hover from interfering with underlying elements */
        }

        .card:hover .card-img-overlay {
            opacity: 1; /* Show on hover */
        }

        .card-img-overlay h4, .card-img-overlay p {
            color: white;
        }

        @media (max-width: 768px) {
            .gallery-item {
                flex: 1 1 calc(50% - 20px); /* Two items per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .gallery-item {
                flex: 1 1 100%; /* One item per row on very small screens */
            }
        }
    </style>
    
        <!-- icon web addres
        ============================================= -->
    <link rel="shortcut icon" href="image/logo.png">
</head>
<body>

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
                <h1>PRESTASI</h1>
                <h4 class="tagline">BERIKUT BEBERAPA PRESTASI YANG DIRAIH</h4>
            </div>
        </div>
    </div>

    <!-- GALLERY START -->
    <div class="container">
        <div class="row" id="gallery">
            <?php
            include "admin/config/koneksi.php";
            $sql = mysqli_query($conn, "SELECT * FROM prestasi");
            while ($b = mysqli_fetch_assoc($sql)) {
            ?>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <div class="card wow fadeIn">
                        <a title="gallery" href="admin/foto/prestasi/<?php echo $b['foto'] ?>">
                            <img class="card-img-top" src="admin/foto/prestasi/<?php echo $b['foto'] ?>" alt="">
                            <div class="card-img-overlay">
                                <h4 class="card-title"><?php echo $b['prestasi'] ?></h4>
                                <p class="card-text"><?php echo $b['detail'] ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- GALLERY END -->

</section>
<!-- CONTENT END -->

<!-- FOOTER START -->
<footer id="footer">
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
</footer>
<!-- FOOTER END -->

<!-- COPYRIGHT START -->
<?php
include "pondasi/kaki.php";
?>
<!-- COPYRIGHT END -->

<!-- Footer Scripts -->
<script type="text/javascript" src="js/plugin.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
