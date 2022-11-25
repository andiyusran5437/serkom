<?php
//Include file koneksi ke database
include "koneksi.php";

//query untuk menghapus
$id_pendaftar = $_GET['id_pendaftar'];
$sql = "DELETE FROM pendaftaran_wisata WHERE id_pendaftar='$id_pendaftar'";
if ($conn->query($sql) === TRUE) {
    $conn->close(); 
    header("location:admin.php");
    exit();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
    exit();
}
?>