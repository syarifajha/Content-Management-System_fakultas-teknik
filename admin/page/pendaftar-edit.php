<?php

include "pondasi/kepala.php";
include "pondasi/kiri.php";


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Edit Data Pendaftar</h3>
                <div class="d-inline-block align-items-center">
                    <nav>

                    </nav>
                </div>
            </div>

        </div>
    </div>


    <!-- Main content -->
    <section class="content">




        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Edit Pendaftar </h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="pendaftaran.php"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->
                    <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($conn, "SELECT * FROM pendaftaran where id='$id'");
                    while ($b = mysqli_fetch_assoc($sql)) {

                    ?>

                        <form class="form" action="pendaftar-act-edit.php" method="post">
                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="hidden" name="id" value="<?php echo $b['id'] ?>" class="form-control">
                                            <input type="text" name="nama_mahasiswa" value="<?php echo $b['nama_mahasiswa'] ?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input type="text" name="nim" value="<?php echo $b['nim'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" name="nomor_hp" value="<?php echo $b['nomor_hp'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" value="<?php echo $b['alamat'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <input type="text" name="program_studi" value="<?php echo $b['program_studi'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="kelas" value="<?php echo $b['kelas'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Keterampilan Khusus</label>
                                            <input type="text" name="keterampilan_khusus" value="<?php echo $b['keterampilan_khusus'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran</label>
                                            <input type="text" name="ukuran" value="<?php echo $b['ukuran'] ?>" class="form-control" required>

                                        </div>
                                        <div class="form-group">
                                            <label>Status Keikutsertaan</label>
                                            <input type="text" name="status_keikutsertaan" value="<?php echo $b['status_keikutsertaan'] ?>" class="form-control" required>

                                        </div>
                                    </div>

                                </div>

                            </div> <?php } ?>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="pendaftaran.php"> <i class="ti-arrow-alt"></i> Batal
                                </a></button>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Simpan
                            </button>
                        </div>
                        </form>
                </div>
                <!-- /.box -->
            </div>




        </div>

    </section>
    <!-- /.content -->
</div>
<?php


include "pondasi/kaki.php";


?>