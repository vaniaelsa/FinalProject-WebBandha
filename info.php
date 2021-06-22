<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Pengisian Info Dana Bandha</title>
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

<?php
// deklarasi variabel 
$error_tahun="";
$error_dana_masuk="";
$error_dana_terpakai="";
$error_dana_sisa="";
$error_keterangan="";


$tahun="";
$dana_masuk="";
$dana_terpakai="";
$dana_sisa="";
$keterangan="";




// Kondisi saat method post dijalankan
if ($_SERVER["REQUEST_METHOD"]=="POST"){
     
      //INPUT Tahun
	if(empty($_POST["tahun"])){
		//  deklarasi variabel berisi pesan error saat form input tahun tidak diisi
		$error_tahun="Tahun Harus Diisi";
	}
	else{
		$tahun=cek_input($_POST["tahun"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($tahun)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_tahun="Tahun Hanya Boleh Berisi Angka";
		}
	}

     //INPUT Dana Masuk
	if(empty($_POST["dana_masuk"])){
		//  deklarasi variabel berisi pesan error saat form inputdana_masuk tidak diisi
		$error_dana_masuk="Dana Masuk Harus Diisi";
	}
	else{
		$dana_masuk=cek_input($_POST["dana_masuk"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($dana_masuk)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_dana_masuk="Dana Masuk Hanya Boleh Berisi Angka";
		}
	}

    //INPUT Dana Terpakai
	if(empty($_POST["dana_terpakai"])){
		//  deklarasi variabel berisi pesan error saat form input dana_terpakai tidak diisi
		$error_dana_terpakai="Dana Masuk Harus Diisi";
	}
	else{
		$dana_terpakai=cek_input($_POST["dana_terpakai"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($dana_terpakai)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_dana_terpakai="Dana Terpakai Hanya Boleh Berisi Angka";
		}
	}

    //INPUT Dana Sisa
	if(empty($_POST["dana_sisa"])){
		//  deklarasi variabel berisi pesan error saat form input dana_terpakai tidak diisi
		$error_dana_sisa="Dana Sisa Harus Diisi";
	}
	else{
		$dana_sisa=cek_input($_POST["dana_sisa"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($dana_sisa)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_dana_sisa="Dana Sisa Hanya Boleh Berisi Angka";
		}
	}

    //INPUT Keterangan
	if(empty($_POST["keterangan"])){
		$error_keterangan="Keterangan Harus Diisi";
	}
	else{
		$keterangan=cek_input($_POST["keterangan"]);
	
	}

//kondisi bila tidak ada error
if (isset($tahun) && isset($dana_masuk) && isset($dana_terpakai) && isset($dana_sisa) && isset($keterangan)) 
{
	//Memasukkan data ke tabel bantuan_sosial
	$query=("INSERT INTO dana_bantuan (id_dana, dana_masuk, dana_terpakai, dana_sisa, keterangan) VALUES ('', '$tahun', '$dana_masuk', '$dana_sisa', '$keterangan')");
	if (mysqli_query($koneksi, $query)) {
		echo "<script>
		alert('Data Sudah Disimpan!');
		document.location= 'viewinfodana.php';
		</script>";
	}
	
  
  }
  else{
	echo "<script>
	alert('Data Belum Disimpan, Ulangi Lagi Untuk Mengisi Data Kembali!');
	document.location= 'info.php';
	</script>";
	
  }
}



function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>



<!-- Bagian Data Info Dana Bantuan  -->
<div class="row">
<div class="col-md">
<div class="card">
<div class="card-header"> Data Info Dana Bantuan </div>
    <form method="post">
			
                    <div class="form-group row">
						<label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
						<div class="col-sm-10">
							<input type="text" name="tahun" class="form-control <?php echo ($error_tahun !="" ? "is_invalid" : ""); ?>" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>"><span class="warning"><?php echo $error_tahun; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
						<label for="dana_masuk" class="col-sm-2 col-form-label">Dana Masuk</label>
						<div class="col-sm-10">
							<input type="text" name="dana_masuk" class="form-control <?php echo ($error_dana_masuk !="" ? "is_invalid" : ""); ?>" id="dana_masuk" placeholder="Dana Masuk" value="<?php echo $dana_masuk; ?>"><span class="warning"><?php echo $error_dana_masuk; ?></span>
						</div>
					</div>
                    <br>
					
                    <div class="form-group row">
						<label for="dana_terpakai" class="col-sm-2 col-form-label">Dana Terpakai</label>
						<div class="col-sm-10">
							<input type="text" name="dana_terpakai" class="form-control <?php echo ($error_dana_terpakai !="" ? "is_invalid" : ""); ?>" id="dana_terpakai" placeholder="Dana Terpakai" value="<?php echo $dana_terpakai; ?>"><span class="warning"><?php echo $error_dana_terpakai; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
						<label for="dana_sisa" class="col-sm-2 col-form-label">Dana Tersisa</label>
						<div class="col-sm-10">
							<input type="text" name="dana_sisa" class="form-control <?php echo ($error_dana_sisa !="" ? "is_invalid" : ""); ?>" id="dana_sisa" placeholder="Dana Sisa" value="<?php echo $dana_sisa; ?>"><span class="warning"><?php echo $error_dana_sisa; ?></span>
						</div>
					</div>
                    <br>

                    <div class="form-group row">
						<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
						<div class="col-sm-10">
							<input type="text" name="keterangan" class="form-control <?php echo ($error_keterangan !="" ? "is_invalid" : ""); ?>" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>"><span class="warning"><?php echo $error_keterangan; ?></span>
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