<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
    exit; // Pastikan untuk menghentikan eksekusi script setelah redirect
} else {
    $username = $_SESSION['admin'];
}

require_once("../config/koneksi.php");

$id = $_POST['id'];
$a = $_POST['prestasi'];
$b = $_POST['detail'];
$c = $_POST['tgl'];

// Ambil nama file foto lama dari database
$query = mysqli_query($conn, "SELECT foto FROM prestasi WHERE id = $id");
if (!$query) {
    die(mysqli_error($conn)); // Tambahkan penanganan error untuk query
}
$row = mysqli_fetch_assoc($query);
$old_foto = $row['foto'];

// Periksa apakah ada file foto yang diunggah
if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = $_FILES['foto']['name'];
    $target_dir = "../foto/prestasi/";

    // Periksa dan buat direktori target jika belum ada
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_file = $target_dir . basename($foto);
    
    // Pindahkan file yang diunggah ke direktori target
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Hapus file foto lama dari server
        if ($old_foto && file_exists($target_dir . $old_foto)) {
            unlink($target_dir . $old_foto);
        }

        // Update database dengan file foto baru
        $sql = mysqli_query($conn, "UPDATE prestasi SET prestasi = '$a', detail = '$b', tgl = '$c', foto = '$foto' WHERE id = $id");
        if (!$sql) {
            die(mysqli_error($conn)); // Tambahkan penanganan error untuk query
        }
    } else {
        // Jika file gagal diunggah, beri pesan kesalahan (opsional)
        die("Error uploading the file");
    }
} else {
    // Jika tidak ada file foto yang diunggah, gunakan foto yang sudah ada
    $sql = mysqli_query($conn, "UPDATE prestasi SET prestasi = '$a', detail = '$b', tgl = '$c' WHERE id = $id");
    if (!$sql) {
        die(mysqli_error($conn)); // Tambahkan penanganan error untuk query
    }
}

header('location: prestasi.php');
exit; // Pastikan untuk menghentikan eksekusi script setelah redirect
?>
