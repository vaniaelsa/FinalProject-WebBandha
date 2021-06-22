<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dana Bandha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <li><a class="dropdown-item" href="admin.php">Halaman Utama Admin</a></li>
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
<h2 align= "center"> Selamat Datang Admin, Silahkan Baca Panduan Fitur Dibawah Ini !</h2>
<!-- Slide Gambar-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
        <div class="carousel-inner">
           <div class="carousel-item active" style="height: 32rem;">
           <img src="images/pendataan.png" alt="Pendataan" class="bd-placeholder-img" style="margin: auto; width: 100% ; height: 100%;">
           </div>

          <div class="carousel-item" style="height: 32rem;">
          <img src="images/dana.png" alt="Dana" class="bd-placeholder-img" style="margin: auto;  width: 100%; height: 100%;">
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
 </div>
 <br>
 <br>
<!-- Sekilas Info Penggunaan Bandha -->
<section>
   <!-- Sekilas Info Bandha -->
 <div class="container post">
          <div class="row">
            <div class="col">
              <div class="card box-shadow">
                <div class="card-body">
                <h4><strong>Fitur Pendataan Masyarakat Penerima Dana Bantuan</strong></h4>
                    <p>Fitur ini berguna untuk menginputkan data masyarakat<br>
                    yang menerima dana bantuan dari desa. <br>
                  </p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            <div class="col">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4><strong>Fitur Input Informasi Dana yang Diterima</strong></h4>
                  <p> Fitur ini berguna untuk mrnginputkan dana yang diterima dan digunakan. <br>
                 Harap memberi keterangan penggunaan dana itu untuk apa.<br>
                  </p>
                    </div>
                  </div>
                </div>
              </div>
</section>

<footer class="footer-container bg-light">
            <center>
            <p>&copy; Elsa Indah Suci Paralel A 2021 <br>
        Website Bandha <br>
        Pemrograman Website
           </p>
            </center>
</footer>

</body>
</html>