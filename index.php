<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Utama Website Bandha</title>
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
                  <a class="nav-link active" aria-current="page" href="#">Halaman Utama</a>
                  <a class="nav-link active" href="masuk.php">Masuk</a>
              </div>
          </div>
          </div>   
</header>

<!-- Slide Gambar-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
        <div class="carousel-inner">
           <div class="carousel-item active" style="height: 32rem;">
           <img src="images/selamat datang.png" alt="Selamat Datang" class="bd-placeholder-img" style="margin: auto; width: 100% ; height: 100%;">
           </div>

          <div class="carousel-item" style="height: 32rem;">
          <img src="images/ajakan.png" alt="Ajakan" class="bd-placeholder-img" style="margin: auto;  width: 100%; height: 100%;">
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

 <section>
   <!-- Sekilas Info Bandha -->
 <div class="container post">
          <div class="row">
            <div class="col">
              <div class="card box-shadow">
                <div class="card-body">
                <h4><strong>Apa Itu Bandha ? </strong></h4>
                <h6>Bandha (Bantuan Dana untuk Masyarakat Desa)</h6>
                    <p align="justify">Website ini digunakan untuk memfasilitasi masyarakat Desa Sawotratap 
                    yang ingin mengajukan data diri guna mendapat dana bantuan yang disediakan. 
                    Pengajuan dilakaukan oleh admin Bandha di Desa Sawotratap. Harap mnghubungi kontak admin Bandha 
                    untuk informasi yang lebih lanjut.
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
                <h4><strong>Apa Saja Syarat yang Untuk Menerima Dana Bantuan Desa ?</strong></h4>
                <h6><strong>Syarat Menerima Bantuan Dana Desa :</strong></h6>
                  <p> 1. Berasal dari keluarga tidak mampu. 
                  2. Tidak Menerima Bantuan dari Jaminan Pengaman Sosial yang Lain.
                  3. Sakit Keras
                  4. Kehilangan Mata Pencaharian
                  5. Belum Terdata di Tahun Sebelumnya
                  </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <h4><strong>Perolehan Dana Desa Dari Tahun Ke Tahun</strong></h4>
                <div class="container" style="margin-top: 50px; font-size: small;">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Dana Masuk</th>
                            <th>Dana Terpakai</th>
                            <th>Dana Sisa</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        $no = 1;

                        include ('koneksi.php');
                        if (!$koneksi) {
                            die("Connection Failed : ". mysqli_connect_error());
                        }
                
                        $sql = mysqli_query($koneksi, "SELECT tahun, dana_masuk, dana_terpakai, dana_sisa, keterangan FROM dana_bantuan");

                        foreach ($sql as $row){
                            echo "<tr>"; 
                            echo "<td> " .$no. " </td>";
                            echo "<td> " .$row['tahun']. "</td>";
                            echo "<td> " .$row['dana_masuk']. "</td>";
                            echo "<td> " .$row['dana_terpakai']. " </td>";
                            echo "<td> " .$row['dana_sisa']. " </td>";
                            echo "<td> " .$row['keterangan']. " </td>";
                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
</section>
    

<!-- Footer -->
<footer class="footer-container bg-light">
        <center>
        <p>&copy; Elsa Indah Suci Paralel A 2021 <br>
        Hubungi Kami di : <br>
        Telepon : 031 445679 || Email : info@bandha.com  <br>
        <a href="https://api.whatsapp.com/send?phone=6281234608522&text=Halo%20admin%20"> Whats App</a>
           </p>
        </center>          
</footer>
</body>
</html>