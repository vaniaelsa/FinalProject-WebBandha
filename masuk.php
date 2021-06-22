<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Masuk Akun Bandha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="cssmasuk.css">

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
                  <a class="nav-link active"  href="index.php">Halaman Utama</a>
                  <a class="nav-link active" href="masuk.php">Masuk</a>
                  </div>
          </div>
          </div>   
</header>

<h2 align= "center" class="h2"> Selamat Datang, Silahkan Masuk  Akun Anda !</h2>
        <div id="containerlogin">
            <form action="cek_masuk.php" method="post">
			      <label> Username</label>
            <input type="text" name="username_admin" placeholder="Masukan Username">
            <label for=> Password:</label>
            <input type="password" name="password_admin" placeholder="Masukan Password">
            <input type="submit" value="Masuk">
            <input type="reset" value="Reset">
            </form>
	    </div>

<footer class="footer-container bg-light">
            <center>
            <p>&copy; Elsa Indah Suci Paralel A 2021 <br>
        Hubungi Kami di : <br>
        Telepon : 031 445679 || Email : info@bandha.com 
           </p>
</footer>
</body>
</html>