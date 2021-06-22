<?php
//menyertakan file koneksi.php agar terkoneksi dengan database db_bandha
include('koneksi.php');
//menyertakan file autoload.inc.php yang ada di folder dompdf
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
//membuat class Dompdf()
$dompdf = new Dompdf();
//query untuk mendapatkan data di tabel bantuan sosial
$query = mysqli_query($koneksi,"SELECT no_kk, nik, nama_lengkap, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, usia, status_pernikahan, jumlah_anggota_keluarga, alamat, rt, rw, pekerjaan, penghasilan, nomor_hp, ikut_jps, kriteria, keterangan FROM bantuan_sosial");
//membuat judul pada dokumen pdf
$html = '<center><h3>Data Penerima Bantuan Dana Sosial</h3></center><br>';
// membuat heading setiap kolom tabel
$html .= '<br> <br> <table border="1" width="100%">
 <tr>
 <th> No </th>
 <th>Nomor KK</th>
 <th>NIK</th>
 <th>Nama Lengkap </th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Usia </th>
 <th>Status Pernikahan</th>
 <th>Jumlah Anggota Keluarga</th>
 <th>Alamat</th>
 <th>RT</th>
 <th>RW</th>
 <th>Pekerjaan</th>
 <th>Penghasilan</th>
 <th>Nomor HP</th>
 <th>Ikut JPS</th>
 <th>Kriteria</th>
 <th>Keterangan</th>
 </tr>';
//memberikan nomor urut disetiap data di tabel bantuan sosial
$no = 1;
//menyimpan hasil query dalam variabel $row
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr> 
 <td>".$no++."</td>
 <td>".$row['no_kk']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['jenis_kelamin']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['tempat_lahir']."</td>
 <td>".$row['tanggal_lahir']."</td>
 <td>".$row['usia']."</td>
 <td>".$row['status_pernikahan']."</td>
 <td>".$row['jumlah_anggota_keluarga']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['pekerjaan']."</td>
 <td>".$row['penghasilan']."</td>
 <td>".$row['nomor_hp']."</td>
 <td>".$row['ikut_jps']."</td>
 <td>".$row['kriteria']."</td>
 <td>".$row['keterangan']."</td>
 </tr>";
}
$html .= "</html>";
$dompdf->loadHtml($html);
// mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A1', 'landscape');
// melakukan rendering dari HTML Ke PDF
$dompdf->render();
// menghasilkan output file Pdf beserta nama filenya yaitu Data Peserta Didik.pdf
$dompdf->stream('Data Penerima Bantuan Dana Desa.pdf');
?>

<!DOCTYPE html>
<html>
<head>
    <!-- kembali ke halaman view.php dalam 3 detik -->
	<meta http-equiv="REFRESH" content="3; url=view.php">
	<title>Bisa Cetak PDF</title>
</head>
<body>
<center><h1>Berhasil Cetak Laporan PDF</h1></center>
</body>
</html>