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
   
    <h3>Data Pengunjung</h3>
	<table class="table table-bordered border-primary">
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>No Identitas</th>
            <th>Jadwal</th>
			<th>Jumlah Pengunjung Dewasa</th>
			<th>Jumlah Pengunjung Anak-anak</th>
            <th>Total Harga</th>
            <th>Aksi</th>
		</tr>
    <?php
  

                            //perintah SELECT untuk menampilkan data dari database
                            $sql = "SELECT * FROM pendaftaran_wisata";
                            $query = mysqli_query($conn, $sql) or die(mysqli_error());
                            while($data = mysqli_fetch_array($query)){
                         
                            ?>
         <tr>
          <!-- tampilkan data -->
         <td><?php echo $data['id_pendaftar'] ?></td>
             <td><?php echo $data['nama_lengkap'] ?></td>
             <td><?php echo $data['no_identitas'] ?></td>
             <td><?php echo $data['tanggal'] ?></td>
             <td><?php echo $data['dewasa'] ?></td>
             <td><?php echo $data['anak'] ?></td>
             <td>Rp. <?php echo $data['total_bayar'] ?></td>
             <td>
             <a href="detail.php?id_pendaftar=<?php echo $data['id_pendaftar']?>" class="btn btn-info btn-xs">Detail</a>
             <a href="hapus.php?id_pendaftar=<?php echo $data['id_pendaftar']; ?>" class="btn btn-danger btn-xs">Hapus</a>
         </td>
      </tr>
      <?php } ?>
</body>
</html>