<?php
include('koneksi.php');

//jika mendapat id dari method get
if(isset($_GET['id'])){
    //variabel $id untuk menyimpan id dari method get dari idi yang ada di URL	
    $id = $_GET['id'];
	
	//query menampilkan data bantuan sosial berdasarkan id dana
    $tampil = mysqli_query($koneksi, "SELECT * FROM dana_bantuan WHERE id_dana='$id'") or die(mysqli_error($koneksi));
	
	//kondisi jika query menghasilkan nilai > 0 
	if(mysqli_num_rows($tampil) > 0){
		//query untuk hapus data berdasarkan $id
		$hapus = mysqli_query($koneksi, "DELETE FROM dana_bantuan WHERE id_dana='$id'") or die(mysqli_error($koneksi));
		if($hapus){
			echo '<script>alert("Data Info Dana Berhasil Dihapus"); document.location="viewinfodana.php";</script>';
		}else{
			echo '<script>alert("Data Info Dana Gagal Dihapus, Harap Coba Hapus Kembali"); document.location="viewinfodana.php";</script>';
		}
	}
    else{
		echo '<script>alert("ID Dana Tidak Ada Di Database"); document.location="viewinfodana.php";</script>';
	}
}

?>