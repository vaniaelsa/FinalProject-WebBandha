<?php

include "koneksi.php";
    $vnama_admin = $_POST['nama_admin'];
    $vusername_admin = $_POST['username_admin'];
    $vpassword_admin = $_POST['password_admin'];
	$vemail_admin = $_POST['email_admin'];

	$sql = "INSERT INTO tb_admin (nama_admin, username_admin, password_admin, email_admin) VALUES ('$vnama_admin','$vusername_admin','$vpassword_admin','$vemail_admin') ";
	if(mysqli_query($koneksi,$sql)){
        echo "<script>
			alert('Pendaftaran Berhasil!');
			document.location= 'masuk.php';
			</script>";
        
	}
	else {
        echo "<script>
			alert('Pendaftaran Admin Belum Berhasil');
			document.location= 'daftar.php';
			</script>";
            }

?>