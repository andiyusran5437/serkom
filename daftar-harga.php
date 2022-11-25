
<?php 
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
<script type="text/javascript" src="chartjs/Chart.js"></script>
	<style type="text/css">
		body{font-family: roboto;}
		table{margin: 0px auto;}
	</style>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="form-pendaftaran.php">Book Now</a>
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
<!-- navtutup -->

<div class="container ">
    <center><h2> Daftar Harga</h2></center>
<table class="table table table-borderless">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Harga Tiket</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Wisata Kebun</td>
      <td>Rp. 20.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bantimurung </td>
      <td>Rp. 40.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Bugis Waterpark </td>
      <td>Rp. 110.000</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Malino Lembanna</td>
      <td>Rp. 50.000</td>
    </tr>
  </tbody>
</table>
<?php 
		include "koneksi.php";
		?>
		<div style="width: 800px;margin: 0px auto;">
			<canvas id="myChart"></canvas>
		</div><br/><br/>
	
		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Wisata Kebun", "Bantimurung", "Bugis Waterpark", "Lembanna Malino"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_1 = mysqli_query($conn,"select * from pendaftaran_wisata where nama_wisata='1'");
					echo mysqli_num_rows($jumlah_1);
					?>, 
					<?php 
					$jumlah_2 = mysqli_query($conn,"select * from pendaftaran_wisata where nama_wisata='2'");
					echo mysqli_num_rows($jumlah_2);
					?>, 
					<?php 
					$jumlah_3 = mysqli_query($conn,"select * from pendaftaran_wisata where nama_wisata='3'");
					echo mysqli_num_rows($jumlah_3);
					?>, 
					<?php 
					$jumlah_4 = mysqli_query($conn,"select * from pendaftaran_wisata where nama_wisata='4'");
					echo mysqli_num_rows($jumlah_4);
					?> 
						],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)'
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>
		</body>
		</html>