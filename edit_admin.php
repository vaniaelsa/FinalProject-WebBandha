<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Edit Admin Bandha</title>
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
                  <a class="nav-link active"  href="edit_admin.php">Edit Data Admin</a>
                  <a class="nav-link active" href="keluar.php">Keluar</a>
                
          </div>
          </div>   
</header>

<!-- DEKLARASI VARIABEL -->
<?php
// deklarasi variabel 
$error_nama_admin="";
$error_username_admin="";
$error_password_admin="";
$error_email_admin="";


$nama_admin="";
$username_admin="";
$password_admin="";
$email_admin="";



// Kondisi saat method post dijalankan
if ($_SERVER["REQUEST_METHOD"]=="POST"){
     
   
    //INPUT Nama Admin
	if(empty($_POST["nama_admin"])){
		//  deklarasi variabel berisi pesan error saat form input nama tidak diisi
		$error_nama_admin="Nama Admin Harus Diisi";
	}
	else{
		$nama_admin=cek_input($_POST["nama_admin"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $nama_admin)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_nama_admin="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

    //INPUT Username Admin
	if(empty($_POST["username_admin"])){
		//  deklarasi variabel berisi pesan error saat form input username admin tidak diisi
		$error_username_admin="Username Admin Harus Diisi";
	}

    //INPUT Password Admin
	if(empty($_POST["password_admin"])){
		//  deklarasi variabel berisi pesan error saat form input password_admin admin tidak diisi
		$error_username_admin="Password Admin Harus Diisi";
	}

	//INPUT Email Admin
	if(empty($_POST["email_admin"])){
		//  deklarasi variabel berisi pesan error saat form input email tidak diisi
		$error_email_admin="Email Admin Harus Diisi";
	}
	else{
		$email_admin=cek_input($_POST["email_admin"]);
		// pengecekan inputan email hanya boleh email yang valid saja
		if(!filter_var($email_admin, FILTER_VALIDATE_EMAIL)){
			 //  deklarasi variabel berisi pesan error saat inputan bukan email yang valid
			$error_email_admin="Format Email Invalid";
		}
	}



}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<?php
		//jika mendapat id dari method get
		if(isset($_GET['id'])){
			// variabel $id untuk menyimpan id dari method get dari idi yang ada di URL
			$id = $_GET['id'];
			
			//query menampilkan data bantuan sosial berdasarkan id admin
			$tampil = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$id'") or die(mysqli_error($koneksi));
			
			//jika hasil query tidak ada, ada pesan peringatan yang muncul
			if(mysqli_num_rows($tampil) == 0){
				echo '<div class="alert alert-warning">ID Admin Tidak Ada </div>';
				exit();
			}else{
				//variabel $data untuk  menyimpan data per baris dari query
				$data = mysqli_fetch_assoc($tampil);
			}
		}
		?>
		
		<?php
		//kondisi jika tombol simpan ddi klik
		if ($error_nama_admin =="" && $error_username_admin=="" && $error_password_admin=="" && $error_email_admin=="" ){

		if(isset($_POST['simpan'])){
            $nama_admin=$_POST['nama_admin'];
            $username_admin=$_POST['username_admin'];
            $password_admin = $_POST['password_admin'];
            $email_admin = $_POST['email_admin'];
            // query untuk update data
			$sql = mysqli_query($koneksi, "UPDATE tb_admin SET nama_admin='$nama_admin', username_admin='$username_admin', password_admin='$password_admin', email_admin='$email_admin' WHERE id_admin='$id'") or die(mysqli_error($koneksi));
			
            // pengecekan kondisi bisa diubah atau tidak
			if($sql){
				echo '<script>alert("Data Admin Berhasil Di Ubah"); document.location="viewadmin.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Pengubahan Data Admin Tidak Berhasil, Silhkan Coba Kembali</div>';
			}
		}
		}
		?>
<!-- Bagian Data Admin  -->
<div class="row">
<div class="col-md">
<div class="card">
<div class="card-header"> Data Admin </div>
    <!-- Mengarahkan action ke halaman view.php -->
    <form method="post">
			
                    <div class="form-group row">
						<label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
						<div class="col-sm-10">
							<input type="text" name="nama_admin" class="form-control <?php echo ($error_nama_admin !="" ? "is_invalid" : ""); ?>" id="nama_admin" placeholder="Nama Admin" value="<?php echo $nama_admin; ?>"><span class="warning"><?php echo $error_nama_admin; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
						<label for="username_admin" class="col-sm-2 col-form-label">Username Admin</label>
						<div class="col-sm-10">
							<input type="text" name="username_admin" class="form-control <?php echo ($error_username_admin !="" ? "is_invalid" : ""); ?>" id="username_admin" placeholder="Username Admin" value="<?php echo $username_admin; ?>"><span class="warning"><?php echo $error_username_admin; ?></span>
						</div>
					</div>
                    <br>
					
                    <div class="form-group row">
						<label for="password_admin" class="col-sm-2 col-form-label">Password Admin</label>
						<div class="col-sm-10">
							<input type="password" name="password_admin" class="form-control <?php echo ($error_password_admin !="" ? "is_invalid" : ""); ?>" id="password_admin" placeholder="Password Admin" value="<?php echo $password_admin; ?>"><span class="warning"><?php echo $error_password_admin; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
						<label for="email_admin" class="col-sm-2 col-form-label">Email Admin</label>
						<div class="col-sm-10">
							<input type="email" name="email_admin" class="form-control <?php echo ($error_email_admin !="" ? "is_invalid" : ""); ?>" id="email_admin" placeholder="Email Admin" value="<?php echo $email_admin; ?>"><span class="warning"><?php echo $error_email_admin; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
                    	<div class="col-sm-10">
                   		 <!-- tombol simpan untuk simpan data -->
                   		<button type="submit" class="btn btn-primary" value="simpan" name="simpan"> SIMPAN </button>
                    	</div>
                    </div>
 </form>
</div>
</div>
</div>
</div>


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