<?php
session_start();
require_once("../config/koneksi.php");

// Redirect to login if admin session is not set
if (!isset($_SESSION['admin'])) {
    header('location:../index.php');
    exit(); // Ensure script stops executing after redirection
}

$username = $_SESSION['admin'];

// Fetch admin details
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$hasil = mysqli_fetch_array($query);

// Handle form submission and update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Print out POST data to debug
    echo "Nama Mahasiswa dari Form: " . $_POST['nama_mahasiswa'] . "<br>";

    $id = $_POST['id'];
    $nama_mahasiswa = $_POST['nama_mahasiswa']; // Corrected variable name
    $nim = $_POST['nim'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];
    $kelas = $_POST['kelas'];
    $keterampilan_khusus = $_POST['keterampilan_khusus'];
    $ukuran = $_POST['ukuran'];
    $status_keikutsertaan = $_POST['status_keikutsertaan'];

    // Perform update query
    $sql = "UPDATE pendaftaran SET 
                nama_mahasiswa = '$nama_mahasiswa', 
                nim = '$nim', 
                nomor_hp = '$nomor_hp', 
                alamat = '$alamat', 
                program_studi = '$program_studi', 
                kelas = '$kelas', 
                keterampilan_khusus = '$keterampilan_khusus', 
                ukuran = '$ukuran', 
                status_keikutsertaan = '$status_keikutsertaan' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header('location: pendaftaran.php');
        exit(); // Ensure script stops executing after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Invalid request"; // Handle cases where POST data is not received
}
?>
