<?php
include('koneksi.php');

//jika mendapat id dari method get
if(isset($_GET['id'])){
    //variabel $id untuk menyimpan id dari method get dari idi yang ada di URL	
    $id = $_GET['id'];
	
	//query menampilkan data bantuan sosial berdasarkan id bansos
    $tampil = mysqli_query($koneksi, "SELECT * FROM bantuan_sosial WHERE id_bansos='$id'") or die(mysqli_error($koneksi));
	
	//kondisi jika query menghasilkan nilai > 0 
	if(mysqli_num_rows($tampil) > 0){
		//query untuk hapus data berdasarkan $id
		$hapus = mysqli_query($koneksi, "DELETE FROM bantuan_sosial WHERE id_bansos='$id'") or die(mysqli_error($koneksi));
		if($hapus){
			echo '<script>alert("Data Berhasil Dihapus"); document.location="view.php";</script>';
		}else{
			echo '<script>alert("Data Gagal Dihapus, Coba Hapus Kembali"); document.location="view.php";</script>';
		}
	}
    else{
		echo '<script>alert("ID Tidak Ada Di Database"); document.location="view.php";</script>';
	}
}
else{
	echo '<script>alert("ID Tidak Ada Di Database"); document.location="view.php";</script>';
}

?>