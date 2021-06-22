<?php
include('koneksi.php');

//jika mendapat id dari method get
if(isset($_GET['id'])){
    //variabel $id untuk menyimpan id dari method get dari idi yang ada di URL	
    $id = $_GET['id'];
	
	//query menampilkan data bantuan sosial berdasarkan id admin
    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$id'") or die(mysqli_error($koneksi));
	
	//kondisi jika query menghasilkan nilai > 0 
	if(mysqli_num_rows($tampil) > 0){
		//query untuk hapus data berdasarkan $id
		$hapus = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin='$id'") or die(mysqli_error($koneksi));
		if($hapus){
			echo '<script>alert("Data Admin Berhasil Dihapus"); document.location="viewadmin.php";</script>';
		}else{
			echo '<script>alert("Data Gagal Dihapus Coba Hapus Kembali"); document.location="viewadmin.php";</script>';
		}
	}
	else{
		echo '<script>alert("ID Tidak Ada Di Database"); document.location="viewadmin.php";</script>';
	}
}
else{
	echo '<script>alert("ID Tidak Ada Di Database"); document.location="viewadmin.php";</script>';
}

?>