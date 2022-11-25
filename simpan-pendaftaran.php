<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran

        $sql = "INSERT INTO pendaftaran_wisata (id_pendaftar, nama_lengkap, no_identitas, no_hp, nama_wisata, tanggal, dewasa, anak, harga, total_bayar)
        VALUES ('$_POST[id_pendaftar]','$_POST[nama_lengkap]','$_POST[no_identitas]','$_POST[no_hp]','$_POST[nama_wisata]','$_POST[tanggal]','$_POST[dewasa]','$_POST[anak]','$_POST[harga]','$_POST[total_bayar]')";
        if ($conn->query($sql) === TRUE) {
        $conn->close(); 
        header("location:form-pendaftaran.php");
        exit();
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
        exit();
    }
?>