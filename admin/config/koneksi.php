<?php

$conn = mysqli_connect("localhost", "arsipdok_user_cms", "12!4w5qwty", "arsipdok_db_cms");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
