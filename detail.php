<?php
 include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load ke bootstrap online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</style>
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
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="form-pendaftaran.php">Book Now</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="daftar-harga.php">Daftar Harga</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link active" href="admin.php">Admin</a>
        </li>
    </div>
  </div>
</nav>
    <!-- tutup Navbar -->

        <?php
$id_pendaftar = $_GET['id_pendaftar'];
$ambil=  mysqli_query($conn, "SELECT * FROM pendaftaran_wisata WHERE id_pendaftar ='$id_pendaftar'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container-fluid ">
    <table class="table table-borderless d-flex ">  
                        <tr>
                            <td>Nama :</td> <td><?= $data['nama_lengkap'] ?></td>
                        </tr>
						<tr>
                            <td>Nomer Identitas :</td> <td><?= $data['no_identitas'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Wisata :</td> <td><?= $data['nama_wisata']?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Kunjungan :</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah Pengunjung :</td> <td><?= $data['dewasa'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Anak :</td> <td><?= $data['anak'] ?></td>
                        </tr>
                        	<tr>
                            <td>Harga Tiket :</td> <td>Rp. <?= $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Total :</td> <td>Rp. <?= $data['total_bayar'] ?></td>
                        </tr>
                       
                    </table>
</body>
</html>