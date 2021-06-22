<?php
// include file koneksi.php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
// membuat heading dari tabel padA excel yang terletak pada baris 1
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nomor KK');
$sheet->setCellValue('C1', 'NIK');
$sheet->setCellValue('D1', 'Nama Lengkap');
$sheet->setCellValue('E1', 'Jenis Kelamin');
$sheet->setCellValue('F1', 'Agama');
$sheet->setCellValue('G1', 'Tempat Lahir');
$sheet->setCellValue('H1', 'Tanggal Lahir');
$sheet->setCellValue('I1', 'Usia');
$sheet->setCellValue('J1', 'Status Pernikahan');
$sheet->setCellValue('K1', 'Jumlah Anggota Keluarga');
$sheet->setCellValue('L1', 'Alamat');
$sheet->setCellValue('M1', 'RT');
$sheet->setCellValue('N1', 'RW');
$sheet->setCellValue('O1', 'Pekerjaan');
$sheet->setCellValue('P1', 'Penghasilan');
$sheet->setCellValue('Q1', 'Nomor HP');
$sheet->setCellValue('R1', 'Ikut JPS');
$sheet->setCellValue('S1', 'Kriteria');
$sheet->setCellValue('T1', 'Keterangan');
// query untuk mengambil data pada tabel bantuan_sosial
$query = mysqli_query($koneksi,"SELECT no_kk, nik, nama_lengkap, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, usia, status_pernikahan, jumlah_anggota_keluarga, alamat, rt, rw, pekerjaan, penghasilan, nomor_hp, ikut_jps, kriteria, keterangan FROM bantuan_sosial");
// variabel i untuk menyimpan nomor awal cell, bernilai 2 nantinya data ditampilkan mulai dari baris 2
$i = 2;
// variabel nomor untuk memberi urutan nomor, dimulaidari 1
$no = 1;
// setiap perulangan, data disimpan pada variabel row
while($row = mysqli_fetch_array($query))
{
    // menampilkan data dari hasil query, ditampilkan secara berurutaan
    // kolom A untuk nomor
	$sheet->setCellValue('A'.$i, $no++);
    //kolom B untuk nomor kk
	$sheet->setCellValue('B'.$i, $row['no_kk']);
    //kolom C untuk NIK
	$sheet->setCellValue('C'.$i, $row['nik']);
    //kolom D untuk nama lengkap
	$sheet->setCellValue('D'.$i, $row['nama_lengkap']);	
    //kolom E untuk nomor jenis kelamin
	$sheet->setCellValue('E'.$i, $row['jenis_kelamin']);
	//kolom F untuk agama
	$sheet->setCellValue('F'.$i, $row['agama']);
    //kolom G untuk tempat lahir
	$sheet->setCellValue('G'.$i, $row['tempat_lahir']);
    //kolom H untuk tanggal lahir
	$sheet->setCellValue('H'.$i, $row['tanggal_lahir']);
    //kolom I untuk usia
	$sheet->setCellValue('I'.$i, $row['usia']);
    //kolom J untuk status_pernikahan
	$sheet->setCellValue('J'.$i, $row['status_pernikahan']);
    //kolom K untuk jumlah_anggota_keluarga
	$sheet->setCellValue('K'.$i, $row['jumlah_anggota_keluarga']);
    //kolom L untuk alamat
	$sheet->setCellValue('L'.$i, $row['alamat']);
    //kolom M untuk rt 
	$sheet->setCellValue('M'.$i, $row['rt']);
    //kolom N untuk rw
	$sheet->setCellValue('N'.$i, $row['rw']);
    //kolom O untuk pekerjaan 
	$sheet->setCellValue('O'.$i, $row['pekerjaan']);
    //kolom P untuk penghasilan  
	$sheet->setCellValue('P'.$i, $row['penghasilan']);
    //kolom Q untuk nomor hp
	$sheet->setCellValue('Q'.$i, $row['nomor_hp']);
    //kolom R untuk ikut_jps
	$sheet->setCellValue('R'.$i, $row['ikut_jps']);
    //kolom S untuk kriteria
	$sheet->setCellValue('S'.$i, $row['kriteria']);
    //kolom T untuk keterangan
	$sheet->setCellValue('T'.$i, $row['keterangan']);
    $i++;
}

$styleArray = [
            // mengatur border untuk cell
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
// border digunakan dari cell A1 hingga kolom T dengan baris diakhir perulangan data
$sheet->getStyle('A1:T'.$i)->applyFromArray($styleArray);

// membuat report dalam bentuk xlsx
$writer = new Xlsx($spreadsheet);
// nama file excel yang akan disimpan
$writer->save('Data Penerima Bantuan Dana Desa.xlsx');
?>

<!DOCTYPE html>
<html>
<head>
	<!-- kembali ke halaman view.php dalam 3 detik -->
	<meta http-equiv="REFRESH" content="3; url=view.php">
	<title>Bisa Cetak Excel</title>
</head>
<body>
<center><h1>Berhasil Cetak Laporan Excel</h1></center>
</body>
</html>