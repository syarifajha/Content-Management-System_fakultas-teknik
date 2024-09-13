<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
    exit();
} else {
    $username = $_SESSION['admin'];
}

require_once("../config/koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$hasil = mysqli_fetch_array($query);

$a = $_POST['judul'];
$b = $_POST['detail'];
$c = $_POST['tentang'];
$d = $_POST['tgl'];

$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$nama = $_FILES['foto']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

// Validasi ekstensi file
if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
    // Validasi ukuran file
    if ($ukuran <= 10440070) {
        $nama_baru = uniqid() . '.' . $ekstensi;
        $target_file = '../foto/agenda/' . $nama_baru;

        // Pindahkan file ke direktori tujuan
        if (move_uploaded_file($file_tmp, $target_file)) {
            // Insert data ke database
            $query = mysqli_query($conn, "INSERT INTO agenda (judul, detail, tentang, tgl, foto) VALUES ('$a','$b','$c','$d','$nama_baru')");
            if ($query) {
                header("location:agenda.php");
                exit();
            } else {
                echo 'GAGAL MENGUPLOAD DATA KE DATABASE';
            }
        } else {
            echo 'GAGAL MENGUPLOAD GAMBAR';
        }
    } else {
        echo 'UKURAN FILE TERLALU BESAR';
    }
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
?>
