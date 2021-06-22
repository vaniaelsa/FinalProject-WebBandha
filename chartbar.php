<?php
// menyertakan file koneksi.php untuk koneksi ke database
include('koneksi.php');
//mengambil data pada tabel dana_bantuan
$bandha = mysqli_query($koneksi,"SELECT tahun, dana_masuk, dana_terpakai, dana_sisa FROM dana_bantuan");
while($row = mysqli_fetch_array($bandha)){
	// array untuk menyimpan hasil query 
	$tahun[] = $row['tahun'];
	$dana_masuk[] = $row['dana_masuk'];
	$dana_terpakai[] = $row['dana_terpakai'];
	$dana_sisa[] = $row['dana_sisa'];
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Grafik Bandha </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- memanggil file Chart.js -->
	<script type="text/javascript" src="Chart.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <div class="container">
          <a class="navbar-brand" style="font-family: Tahoma" href="#"> 
          <img src="images/logo bandha 1.png" class="rounded-circle mb-1" alt="logo" width="40" height="40" /> BANDHA</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link avtive dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="daftar.php">Daftar Admin</a></li>
            <li><a class="dropdown-item" href="viewadmin.php">Lihat Admin</a></li>
            </ul>
            </li>
			<li class="nav-item dropdown">
                <a class="nav-link avtive dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Info Dana
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="info.php">Isi Informasi Dana</a></li>
            <li><a class="dropdown-item" href="viewinfodana.php">Informasi Dana Bantuan</a></li>
            <li><a class="dropdown-item" href="chartbar.php">Grafik Dana</a></li>
			</ul>
            </li>
			  	  <a class="nav-link active"  href="bansos.php">Pendataan Dana Bantuan</a>
                  <a class="nav-link active"  href="view.php">Data Pengajuan</a>
                  <a class="nav-link active" href="keluar.php">Keluar</a>
                
          </div>
          </div>   
</header>
<div style="width: 100%;height: 100%">
		<!-- membuat grafik dengan id myChart -->
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			// tipe chart adalah bar
			type: 'bar',
			data: {
				// membuat label pada chart/grafik yang berisi tahun menerima bantuan
				labels: <?php echo json_encode($tahun); ?>,
				datasets: [
                    {
					label: 'Dana Masuk ',
					// bagian data dari chart berisi Dana Masuk
					data: <?php echo json_encode($dana_masuk); ?>,
					// memberi warna pada chart
					backgroundColor: 'rgba(147, 112, 219)',
					//memodifikasi border pada chart
					borderColor:  'rgba(186, 85, 211)',
					borderWidth: 3
				    },

                    {
					label: 'Dana Terpakai ',
					// bagian data dari chart berisi Dana Terpakai
					data: <?php echo json_encode($dana_terpakai); ?>,
					// memberi warna pada chart
					backgroundColor: 'rgba(248, 248, 255)',
					//memodifikasi border pada chart
					borderColor: 'rgba(220, 220, 220)',
					borderWidth: 3
				    },

                    {
					label: 'Dana Sisa ',
					// bagian data dari chart berisi Dana Sisa
					data: <?php echo json_encode($dana_sisa); ?>,
					// memberi warna pada chart
					backgroundColor: 'rgba(176, 196, 222)',
					//memodifikasi border pada chart
					borderColor:  'rgba(119, 136, 153)',
					borderWidth: 3
				    }
                    
                ]
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

<footer class="fixed-bottom bg-light">
            <center>
            <p>&copy; Elsa Indah Suci Paralel A 2021 <br>
        Website Bandha <br>
        Pemrograman Website
           </p>
            </center>
</footer>
</body>
</html>