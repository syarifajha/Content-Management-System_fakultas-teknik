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
$a = $_POST['judul'];
$b = $_POST['detail'];
$c = $_POST['tentang'];
$d = $_POST['tgl'];

// Ambil data foto lama dari database
$query = mysqli_query($conn, "SELECT foto FROM agenda WHERE id = $id");
$row = mysqli_fetch_assoc($query);
$old_foto = $row['foto'];

// Periksa apakah ada file foto yang diunggah
if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = $_FILES['foto']['name'];
    $target_dir = "../foto/agenda/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    
    // Pindahkan file yang diunggah ke direktori target
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Hapus foto lama dari server jika ada
        if ($old_foto && file_exists($target_dir . $old_foto)) {
            unlink($target_dir . $old_foto);
        }

        // Update database dengan file foto baru
        $sql = mysqli_query($conn, "UPDATE agenda SET judul = '$a', detail='$b', tentang = '$c', tgl='$d', foto='$foto' WHERE id=$id");
        if (!$sql) {
            die(mysqli_error($conn)); // Tambahkan penanganan error untuk query
        }
    } else {
        die("Error uploading the file"); // Jika file gagal diunggah, beri pesan kesalahan
    }
} else {
    // Jika tidak ada file foto yang diunggah, gunakan foto yang sudah ada
    $sql = mysqli_query($conn, "UPDATE agenda SET judul = '$a', detail='$b', tentang = '$c', tgl='$d' WHERE id=$id");
    if (!$sql) {
        die(mysqli_error($conn)); // Tambahkan penanganan error untuk query
    }
}

header('location: agenda.php');
exit; // pastikan exit setelah header untuk menghentikan eksekusi script
?>
