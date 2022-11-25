<!-- hubungankan dengan file koneksi php -->
<?php
 include "koneksi.php";
 //menangkap data dari form
$nama_lengkap=$_POST['nama_lengkap'];
$no_identitas=$_POST['no_identitas'];
$no_hp=$_POST['no_hp'];
$nama_wisata=$_POST['nama_wisata'];
$tanggal=$_POST['tanggal'];
$dewasa=$_POST['dewasa'];
$anak=$_POST['anak'];
$harga=$_POST['harga'];
$total_bayar=$_POST['total_bayar'];

mysqli_query($conn, "UPDATE pendaftaran_wisata SET nama_lengkap='$nama_lengkap', no_identitas='$no_identitas', no_hp='$no_hp', nama_wisata='$nama_wisata', tanggal='$tanggal', dewasa='$dewasa', anak='$anak', harga='$harga', total_bayar='$total_bayar' WHERE id_pendaftar='$id_pendaftar'");
header("location:admin.php");

?>