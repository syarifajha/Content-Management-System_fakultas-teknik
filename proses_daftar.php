<?php

include "admin/config/koneksi.php";
include "pondasi/alert.php";
session_start();

$nama_mahasiswa = $_POST["nama_mahasiswa"];
$nim = $_POST["nim"];
$nomor_hp = $_POST["nomor_hp"];
$alamat = $_POST["alamat"];
$program_studi = $_POST["program_studi"];
$kelas = $_POST["kelas"];
$keterampilan_khusus = $_POST["keterampilan_khusus"];
$ukuran = $_POST["ukuran"];
$status_keikutsertaan = $_POST["status_keikutsertaan"];

$sql = "INSERT INTO pendaftaran (nama_mahasiswa, nim, nomor_hp, alamat, program_studi, kelas, keterampilan_khusus, ukuran, status_keikutsertaan) VALUES
        ('$nama_mahasiswa', '$nim', '$nomor_hp', '$alamat', '$program_studi', '$kelas', '$keterampilan_khusus', '$ukuran', '$status_keikutsertaan')";

$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    $last_id = mysqli_insert_id($conn);
    $_SESSION['current_id'] = $last_id;

    echo "<script>alert('Anda Berhasil Mendaftar');document.location='kartu_daftar.php'</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar');document.location='pendaftaran.php'</script>";
}
?>
