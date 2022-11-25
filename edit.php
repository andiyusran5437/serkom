<!-- hubungankan dengan file koneksi php -->
<?php
 include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load ke bootstrap online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href=""><img src="https://cdn.icon-icons.com/icons2/1949/PNG/512/free-30-instagram-stories-icons34_122582.png" width="50px"> WisataMKS

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-5 ">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link active" href="form-pendaftaran">Book Now</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="daftar-harga.php">Daftar Harga</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
    </div>
  </div>
</nav>
<!-- TUTUP NAVBAR -->
<!-- untuk menampilkan data dari database -->
<?php

$id_pendaftar = $_GET['id_pendaftar'];
$ambil=  mysqli_query($conn, "SELECT * FROM pendaftaran_wisata WHERE id_pendaftar ='$id_pendaftar'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
<h2> <center> Form EDIT</center></h2><hr>
    <form action="simpan-edit.php" method="post">
        <div class="form-group">
       <input type="hidden" name="id_pendaftar" />
        <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Lengkap :</label>
    <div class="col-sm-10">
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Anda" value="<?=$data['nama_lengkap']?>" />
        </div>
</div>
		<di class="form-group">
    <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nomor Identitas :</label>
            <div class="col-sm-10">
            <input type="number" name="no_identitas" class="form-control" value="<?php $data['no_identitas']?>" placeholder="No Identitas Anda" />
        </div></div>
        <div class="form-group">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">No. HP :</label>
            <div class="col-sm-10">
            <input type="number" name="no_hp" class="form-control" value="<?php echo $data['no_hp']?>" placeholder="Masukan No HP" />
        </div> </div>
		<div class="form-group">
    <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tempat Wisata:</label>
            <div class="col-sm-10">
                         <select value="<?php echo $data['nama_wisata'];?>" name="nama_wisata" id="nama_wisata" class="form-control">
                         <option value="0" disabled selected hidden>-- Pilih Lokasi Wisata --</option>
                                    <option value="1">Wisata Kebun - IDR 20.000</option>
                                    <option value="2">Bantimurung - IDR 40.000</option>
                                    <option value="3">Bugis Waterpark - IDR 110.000</option>
                                    <option value="4">Malino Lembanna - IDR 50.000</option>
                                </select>
</div>
        </div>
		<div class="form-group">
    <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
            <div class="col-sm-10">
            <input type="date" name="tanggal"class="form-control"  value="<?=$data['tanggal']?>" placeholder="Masukkan Jumlah Pengunjung">
        </div></div>
        <div class="form-group">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Pengunjung Dewasa : </label>
            <div class="col-sm-10">
            <input type="text" id="dewasa" name="dewasa" class="form-control" value="<?php echo $data['dewasa']?>" placeholder="Masukan Jumlah Orang Dewasa" />
        </div></div>
        <div class="form-group">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Pengunjung Anak : </label>
            <div class="col-sm-10">
            <input type="text" name="anak" id="anak" class="form-control" value="<?php echo $data['anak']?>" placeholder="Masukan Jumlah Anak-anak" />
        </div></div>
        <div class="form-group"> 
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Harga Tiket : &emsp;&emsp;&emsp; Rp</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $data['harga']?>" name="harga" id="harga">
        </div></div>
        <div class="form-group">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Total Bayar : &emsp;&emsp;&emsp;&ensp;Rp</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" value="<?php echo $data['total_bayar']?>" id="total_bayar" name="total_bayar">
        </div></div>
<center>
        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        
    </form>
</div>
</body>
</html>