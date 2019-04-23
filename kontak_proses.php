<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "INSERT INTO kontak (Nama,Email,Pertanyaan,Aksi) Values ('$Nama','$Email','$Pertanyaan','$Aksi');";

if ($conn->query($sql) === TRUE) {
	header('Location: index.php?pesan=berhasil');
	# code... 
}
else{
	echo "Error dengan pesan: ".$sql."<br>".$conn->error;
}
$conn->close();
?> 