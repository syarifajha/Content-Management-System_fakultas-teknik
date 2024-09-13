<?php
include "pondasi/kepala.php";
?>
<html>

<head>

</head>

<body>

    <!-- MAIN WRAPPER START
        ============================================= -->
    <!-- HEADER END -->

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">

        <div class="our-features grey-background">
            <div class="container">
                <div class="heading-block wow fadeIn">
                    <h2><strong>Pendaftaran KKN TEMATIK</strong></h2>
                    <h4 class="tagline">Form Pendaftaran KKN</h4>
                </div>

                <div class="row">
                    <div class="features">
                    </div>

                    <!-- <center>-->
                    <form action="proses_daftar.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="nim" class="form-control" placeholder="Input NIM" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor HP/Whatsapp</label>
                                <input type="text" name="nomor_hp" class="form-control" placeholder="Input Nomor HP" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Domisili</label></br>
                                <input type="text" name="alamat" class="form-control" placeholder="Input Alamat Domisili" style="width: 500px;" required>
                            </div>
                            <div class="form-group">
                                <label>Program Studi</label></br>
                                <select name="program_studi" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Prodi--</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                </select>
                            </div>
                            <div class="form-group"></br>
                                <label>Kelas</label></br>
                                <select name="kelas" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Kelas--</option>
                                    <option value="Reguler">Reguler</option>
                                    <option value="Malam">Malam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterampilan Khusus</label></br>
                                <select name="keterampilan_khusus" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Keterampilan--</option>
                                    <option value="baca_tulis">Baca Tulis Al-Quran</option>
                                    <option value="adzan">Adzan Iqomah</option>
                                    <option value="bilal">Bilal / Khotib</option>
                                    <option value="keterampilan_lain">Keterampilan Lain di Luar Prodi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ukuran</label></br>
                                <select name="ukuran" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Ukuran--</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                    <option value="xxl">XXL</option>
                                    <option value="3xl">3XL</option>
                                    <option value="4xl">4XL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Keikutsertaan</label></br>
                                <select name="status_keikutsertaan" class="form-control" style="width: 500px;" required>
                                    <option>--Pilih Status--</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="konversi">Konversi</option>
                                </select>
                            </div>
                            <p>
                            <div class="box-footer">
                                <button type="button" class="btn btn-danger">
                                    <a href="index.php"> <strong>Batal</strong>
                                    </a></button>
                                &nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">
                                    <strong>Simpan</strong>
                                </button>
                            </div>
                            </p>
                        </div>
                        <!--</center>-->
                </div>
                </form>

    </section>

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-15 pull-left wow fadeInUp">
                            <h2>Segera Mendaftar KKN TEMATIK UMPO 2024 !</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </footer>

    <!-- COPYRIGHT START
            ============================================= -->
    <?php
    include "pondasi/kaki.php";
    ?>
</body>

</html>
