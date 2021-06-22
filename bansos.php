<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Pengajuan Dana Bandha</title>
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
$error_no_kk="";
$error_nik="";
$error_nama_lengkap = "";
$error_jenis_kelamin = "";
$error_agama = "";
$error_tempat_lahir = "";
$error_tanggal_lahir = "";
$error_usia = "";
$error_status_pernikahan = "";
$error_jumlah_anggota_keluarga= "";
$error_alamat = "";
$error_rt= "";
$error_rw = "";
$error_pekerjaan = "";
$error_penghasilan = "";
$error_nomor_hp = "";
$error_ikut_jps = "";
$error_kriteria = "";
$error_keterangan = "";

$no_kk="";
$nik="";
$nama_lengkap = "";
$jenis_kelamin = "";
$agama = "";
$tempat_lahir = "";
$tanggal_lahir = "";
$usia = "";
$status_pernikahan = "";
$jumlah_anggota_keluarga= "";
$alamat = "";
$rt= "";
$rw = "";
$pekerjaan = "";
$penghasilan = "";
$nomor_hp = "";
$ikut_jps = "";
$kriteria = "";
$keterangan = "";

// $sukses_input="";


// Kondisi saat method post dijalankan
if ($_SERVER["REQUEST_METHOD"]=="POST"){
     
       //INPUT NO KK
	if(empty($_POST["no_kk"])){
		//  deklarasi variabel berisi pesan error saat form input no kk tidak diisi
		$error_no_kk="NO KK Harus Diisi";
	}
	else{
		$no_kk=cek_input($_POST["no_kk"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($no_kk)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_no_kk="Nomor KK Hanya Boleh Berisi Angka";
		}
		elseif (strlen($no_kk) != 16) {
			$error_no_kk="Nomor Kartu Keluarga harus diisi sebesar 16 digit";
		}
	}

	//INPUT NIK
	if(empty($_POST["nik"])){
		//  deklarasi variabel berisi pesan error saat form input nik tidak diisi
		$error_nik="NIK Harus Diisi";
	}
	else{
		$nik=cek_input($_POST["nik"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($nik)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_nik="NIK Hanya Boleh Berisi Angka";
		}
		elseif (strlen($nik) != 16) {
			$error_nik="NIK harus diisi sebesar 16 digit";
		}
	}

    //INPUT Nama Lengkap
	if(empty($_POST["nama_lengkap"])){
		//  deklarasi variabel berisi pesan error saat form input nama tidak diisi
		$error_nama_lengkap="Nama Lengkap Harus Diisi";
	}
	else{
		$nama_lengkap=cek_input($_POST["nama_lengkap"]);
		// pengecekan inputan nama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $nama_lengkap)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_nama_lengkap="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Jenis Kelamin
	if(empty($_POST["jenis_kelamin"])){
		$error_jenis_kelamin="Opsi Jenis Kelamin Harus Diisi";
	}
	else{
		//  deklarasi variabel berisi pesan error saat input jenis kelamin tidak diisi
		$jenis_kelamin=cek_input($_POST["jenis_kelamin"]);
	}

	//INPUT Agama
	if(empty($_POST["agama"])){
		//  deklarasi variabel berisi pesan error saat form input agama tidak diisi
		$error_agama="Agama Harus Diisi";
	}
	else{
		$agama=cek_input($_POST["agama"]);
		// pengecekan inputan agama hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $agama)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_agama="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Tempat Lahir
	if(empty($_POST["tempat_lahir"])){
		//  deklarasi variabel berisi pesan error saat form input tempat_lahir tidak diisi
		$error_tempat_lahir="Tempat Lahir Harus Diisi";
	}
	else{
		$tempat_lahir=cek_input($_POST["tempat_lahir"]);
		// pengecekan inputan tempat lahir hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $tempat_lahir)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_tempat_lahir="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Tanggal Lahir
	if(empty($_POST["tanggal_lahir"])){
		//  deklarasi variabel berisi pesan error saat form input tanggal lahir tidak diisi
		$error_tanggal_lahir="Tanggal Lahir Harus Diisi";
	}
	else{
		$tanggal_lahir=cek_input($_POST["tanggal_lahir"]);
        $tanggal_lahir=date('Y-m-d', strtotime($tanggal_lahir));
	}

    //INPUT Usia
	if(empty($_POST["usia"])){
		//  deklarasi variabel berisi pesan error saat form input Usia tidak diisi
		$error_usia="Usia Harus Diisi";
	}
	else{
		$usia=cek_input($_POST["usia"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($usia)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_usia="Usia Hanya Boleh Berisi Angka";
		}
	}
    
    //INPUT Status Pernikahan
	if(empty($_POST["status_pernikahan"])){
		//  deklarasi variabel berisi pesan error saat input status_pernikahan tidak diisi
		$error_status_pernikahan="Opsi Harus Diisi";
	}
	else{
		$status_pernikahan=cek_input($_POST["status_pernikahan"]);
	}

     //INPUT Jumlah Anggota Keluarga
	if(empty($_POST["jumlah_anggota_keluarga"])){
		//  deklarasi variabel berisi pesan error saat form input jumlah anggota keluarga tidak diisi
		$error_jumlah_anggota_keluarga="Jumlah Anggota Keluarga Harus Diisi";
	}
	else{
		$jumlah_anggota_keluarga=cek_input($_POST["jumlah_anggota_keluarga"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($jumlah_anggota_keluarga)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_jumlah_anggota_keluarga="Jumlah Anggota Keluarga Hanya Boleh Berisi Angka";
		}
	}

	//INPUT Alamat 
	if(empty($_POST["alamat"])){
		$error_alamat="Alamat Harus Diisi";
	}
	else{
		$alamat=cek_input($_POST["alamat"]);
		// pengecekan inputan alamat  hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $alamat)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_alamat="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT RT
	if(empty($_POST["rt"])){
		//  deklarasi variabel berisi pesan error saat form input RT tidak diisi
		$error_rt="RT Harus Diisi";
	}
	else{
		$rt=cek_input($_POST["rt"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($rt)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_rt="RT Hanya Boleh Berisi Angka";
		}
	}

	//INPUT RW
	if(empty($_POST["rw"])){
		//  deklarasi variabel berisi pesan error saat form input RW tidak diisi
		$error_rw="RW Harus Diisi";
	}
	else{
		$rw=cek_input($_POST["rw"]);
		// pengecekan inputan  hanya boleh angka saja
		if(!is_numeric($rw)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa angka
			$error_rw="RW Hanya Boleh berisi angka";
		}
	}

	//INPUT Pekerjaan
	if(empty($_POST["pekerjaan"])){
		$error_pekerjaan="Pekerjaan Harus Diisi";
	}
	else{
		$pekerjaan=cek_input($_POST["pekerjaan"]);
		// pengecekan inputan pekerjaan hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $pekerjaan)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_pekerjaan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	//INPUT Penghasilan
	if(empty($_POST["penghasilan"])){
		//  deklarasi variabel berisi pesan error saat form input penghasilan tidak diisi
		$error_penghasilan="Penghasilan Harus Diisi";
	}

	//INPUT Nomor HP
	if(empty($_POST["nomor_hp"])){
		//  deklarasi variabel berisi pesan error saat form input Nomor HP tidak diisi
		$error_nomor_hp="Nomor HP Harus Diisi";
	}


	//INPUT  Ikut JPS atau Tidak
	if(empty($_POST["ikut_jps"])){
		//  deklarasi variabel berisi pesan error saat input tidak diisi
		$error_ikut_jps="Opsi Ya atau Tidak Harus Diisi";
	}
	else{
		$ikut_jps=cek_input($_POST["ikut_jps"]);
	}

   //INPUT  Kriteria
	if(empty($_POST["kriteria"])){
		//  deklarasi variabel berisi pesan error saat input tidak diisi
		$error_kriteria="Opsi Harus Diisi";
	}
	else{
		$kriteria=cek_input($_POST["kriteria"]);
	}

   	//INPUT Keterangan
	if(empty($_POST["keterangan"])){
		$error_keterangan="Keterangan Harus Diisi";
	}
	else{
		$keterangan=cek_input($_POST["keterangan"]);
		// pengecekan inputan alamat jalan hanya boleh berupa huruf dan spasi saja
		if(!preg_match("/^[a-zA-z ]*$/", $keterangan)){
			//  deklarasi variabel berisi pesan error saat inputan bukan berupa huruf dan spasi
			$error_keterangan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}



	//kondisi bila tidak ada error
	if (isset($no_kk) && isset($nik) && isset($nama_lengkap) && isset($jenis_kelamin) && isset($agama) && isset($tempat_lahir) && isset($tanggal_lahir) && isset($usia)  && isset($status_pernikahan) && isset($jumlah_anggota_keluarga) && isset($alamat) && isset($rt) && isset($rw) && isset($pekerjaan) && isset($penghasilan) && isset($nomor_hp) && isset($ikut_jps) && isset($kriteria) && isset($keterangan)) 
	{
        //Memasukkan data ke tabel bantuan_sosial
        $query=("INSERT INTO bantuan_sosial (id_bansos, no_kk, nik, nama_lengkap, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, usia, status_pernikahan, jumlah_anggota_keluarga, alamat, rt, rw, pekerjaan, penghasilan, nomor_hp, ikut_jps, kriteria, keterangan) VALUES ('', '$no_kk', '$nik', '$nama_lengkap', '$jenis_kelamin', '$agama', '$tempat_lahir', '$tanggal_lahir', '$usia', '$status_pernikahan', '$jumlah_anggota_keluarga', '$alamat', '$rt', '$rw', '$pekerjaan', '$penghasilan', '$nomor_hp', '$ikut_jps', '$kriteria', '$keterangan')");
        if (mysqli_query($koneksi, $query)) {
			echo "<script>
			alert('Data Sudah Disimpan!');
			document.location= 'view.php';
			</script>";
		}
		
      
      }
      else{
		echo "<script>
		alert('Data Belum Disimpan, Ulangi Lagi Untuk Mengisi Data Kembali!');
		document.location= 'bansos.php';
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
<!-- Bagian Data Pribadi  -->
<div class="row">
<div class="col-md">
<div class="card">
<div class="card-header"> DATA PRIBADI </div>
    <!-- Mengarahkan action ke halaman view.php -->
    <form method="post"  action="">
					<div class="form-group row">
						<label for="no_kk" class="col-sm-2 col-form-label">Nomor KK
						</label>
						<div class="col-sm-10">
							<input type="text" name="no_kk" class="form-control <?php echo ($error_no_kk !="" ? "is_invalid" : ""); ?>" id="no_kk" placeholder="Nomor KK" value="<?php echo $no_kk; ?>"><span class="warning"><?php echo $error_no_kk; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="nik" class="col-sm-2 col-form-label">NIK
						</label>
						<div class="col-sm-10">
							<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is_invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
						</div>
					</div>
                    <br>
        
                    <div class="form-group row">
						<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
						<div class="col-sm-10">
							<input type="text" name="nama_lengkap" class="form-control <?php echo ($error_nama_lengkap !="" ? "is_invalid" : ""); ?>" id="nama_lengkap" placeholder="Nama" value="<?php echo $nama_lengkap; ?>"><span class="warning"><?php echo $error_nama_lengkap; ?></span>
						</div>
					</div>
                    <br>
					
					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
							<span class="warning"><?php echo $error_jenis_kelamin; ?></span>
						</div>
					</div>								
                    <br>

					<div class="form-group row">
						<label for="agama" class="col-sm-2 col-form-label"> Agama </label>
						<div class="col-sm-10">
							<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is_invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-10">
							<input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is_invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
						</div>
					</div>
                    <br>
					
					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir
                        <br> Contoh Penulisan : 06-12-1980 </label>
						<div class="col-sm-10">
							<input type="text" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir !="" ? "is_invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>"><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="usia" class="col-sm-2 col-form-label">Usia
						<br> Masukkan Angka Saja!</label>
						<div class="col-sm-10">
							<input type="text" name="usia" class="form-control <?php echo ($error_usia !="" ? "is_invalid" : ""); ?>" id="usia" placeholder="Usia" value="<?php echo $usia; ?>"><span class="warning"><?php echo $error_usia; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
						<div class="col-sm-10">
							<input type="radio" name="status_pernikahan" value="Belum Menikah">Belum Menikah
							<br>
							<input type="radio" name="status_pernikahan" value="Menikah">Menikah
							<br>
							<input type="radio" name="status_pernikahan" value="Janda/Duda Perceraian">Janda/Duda Perceraian
							<br>
							<input type="radio" name="status_pernikahan" value="Janda/Duda Kematian">Janda/Duda Kematian
							 <br>
							<span class="warning"><?php echo $error_status_pernikahan; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="jumlah_anggota_keluarga" class="col-sm-2 col-form-label">Jumlah Anggota Keluarga
						<br> Masukkan Angka Saja!</label>
						<div class="col-sm-10">
							<input type="text" name="jumlah_anggota_keluarga" class="form-control <?php echo ($error_jumlah_anggota_keluarga !="" ? "is_invalid" : ""); ?>" id="jumlah_anggota_keluarga" placeholder="Jumlah Anggota Keluarga" value="<?php echo $jumlah_anggota_keluarga; ?>"><span class="warning"><?php echo $error_jumlah_anggota_keluarga; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is_invalid" : ""); ?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="rt" class="col-sm-2 col-form-label">RT</label>
						<div class="col-sm-10">
							<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is_invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="rw" class="col-sm-2 col-form-label">RW</label>
						<div class="col-sm-10">
							<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is_invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-10">
							<input type="text" name="pekerjaan" class="form-control <?php echo ($error_pekerjaan !="" ? "is_invalid" : ""); ?>" id="pekerjaaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>"><span class="warning"><?php echo $error_pekerjaan; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="penghasilan" class="col-sm-2 col-form-label">Penghasilan</label>
						<div class="col-sm-10">
							<input type="text" name="penghasilan" class="form-control <?php echo ($error_penghasilan !="" ? "is_invalid" : ""); ?>" id="penghasilan" placeholder="Penghasilan" value="<?php echo $penghasilan; ?>"><span class="warning"><?php echo $error_penghasilan; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
						<div class="col-sm-10">
							<input type="text" name="nomor_hp" class="form-control <?php echo ($error_nomor_hp !="" ? "is_invalid" : ""); ?>" id="hp" placeholder="Nomor HP" value="<?php echo $nomor_hp; ?>"><span class="warning"><?php echo $error_nomor_hp; ?></span>
						</div>
					</div>
                    <br>
</div>
</div>
</div>
</div>

<!-- Bagian Pengajuan Dana -->
<div class="row">
<div class="col-md">
<div class="card">
<div class="card-header"> PENGAJUAN DANA </div>

  <div class="card-body">
<form method="post" > 
					
					<div class="form-group row">
						<label for="ikut_jps" class="col-sm-2 col-form-label">Ikut Program Jaminan Pengaman Sosial</label>
						<div class="col-sm-10">
							<input type="radio" name="ikut_jps" value="Ya">Ya
							<input type="radio" name="ikut_jps" value="Tidak">Tidak
							<span class="warning"><?php echo $error_ikut_jps; ?></span>
						</div>
					</div>
                    <br>

					<div class="form-group row">
						<label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
						<div class="col-sm-10">
							<input type="radio" name="kriteria" value="Keluarga Tidak Mampu">Keluarga Tidak Mampu
							<br>
							<input type="radio" name="kriteria" value="Kehilangan Mata Pencaharian">Kehilangan Mata Pencaharian
							<br>
							<input type="radio" name="kriteria" value="Belum Terdata Tahun Sebelumnya">Belum Terdata Tahun Sebelumnya
							<br>
							<input type="radio" name="kriteria" value="Sakit Kronis">Sakit Kronis
							<br>
							<span class="warning"><?php echo $error_kriteria; ?></span>
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