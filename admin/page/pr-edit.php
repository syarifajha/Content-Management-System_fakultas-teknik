<?php
include "pondasi/kepala.php";
include "pondasi/kiri.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Edit Data Prestasi</h3>
                <div class="d-inline-block align-items-center">
                    <nav></nav>
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
                        <h4 class="box-title">Form Prestasi</h4>
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="prestasi.php"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->

                    <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($conn, "SELECT * FROM prestasi WHERE id='$id'");
                    while ($b = mysqli_fetch_assoc($sql)) {
                    ?>
                    <form class="form" action="pr-act-edit.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Prestasi</label>
                                        <input type="hidden" name="id" value="<?php echo $b['id'] ?>" class="form-control">
                                        <input type="text" name="prestasi" value="<?php echo $b['prestasi'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail Prestasi</label>
                                        <input type="text" name="detail" value="<?php echo $b['detail'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Prestasi</label>
                                        <input type="date" name="tgl" value="<?php echo $b['tgl'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ganti Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                        <p class="help-block">Biarkan kosong jika tidak ingin mengubah foto.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger btn-outline">
                                <a href="prestasi.php"><i class="ti-arrow-alt"></i> Batal</a>
                            </button>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Simpan
                            </button>
                        </div>
                    </form>
                    <?php } ?>
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
