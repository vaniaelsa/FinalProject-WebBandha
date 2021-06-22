-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 02:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bandha`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan_sosial`
--

CREATE TABLE `bantuan_sosial` (
  `ID_BANSOS` int(11) NOT NULL,
  `NO_KK` varchar(50) DEFAULT NULL,
  `NIK` varchar(50) NOT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(25) DEFAULT NULL,
  `AGAMA` varchar(25) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(25) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `USIA` varchar(10) DEFAULT NULL,
  `STATUS_PERNIKAHAN` varchar(25) DEFAULT NULL,
  `JUMLAH_ANGGOTA_KELUARGA` varchar(25) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `RT` varchar(10) DEFAULT NULL,
  `RW` varchar(10) DEFAULT NULL,
  `PEKERJAAN` varchar(50) DEFAULT NULL,
  `PENGHASILAN` varchar(55) DEFAULT NULL,
  `NOMOR_HP` varchar(25) DEFAULT NULL,
  `IKUT_JPS` varchar(10) DEFAULT NULL,
  `KRITERIA` varchar(50) DEFAULT NULL,
  `KETERANGAN` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan_sosial`
--

INSERT INTO `bantuan_sosial` (`ID_BANSOS`, `NO_KK`, `NIK`, `NAMA_LENGKAP`, `JENIS_KELAMIN`, `AGAMA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `USIA`, `STATUS_PERNIKAHAN`, `JUMLAH_ANGGOTA_KELUARGA`, `ALAMAT`, `RT`, `RW`, `PEKERJAAN`, `PENGHASILAN`, `NOMOR_HP`, `IKUT_JPS`, `KRITERIA`, `KETERANGAN`) VALUES
(1, '3234567891011121', '3146799131546677', 'Rusmini', 'Perempuan', 'Islam', 'Surabaya', '1973-01-01', '48', 'Menikah', '4', 'Jl Sekar Melati', '04', '08', 'Buruh', 'Rp. 1.000.000,00', '0812345678', 'Tidak', 'Kehilangan Mata Pencaharian', 'Akan Dicek Petugas Tanggal 15 Juni 2021'),
(3, '3234567891043673', '3146799131546454', 'Antok Budianto Rahman', 'Laki-laki', 'Islam', 'Surabaya', '1971-01-01', '49', 'Menikah', '8', 'Jl Mawar Melati', '06', '10', 'Buruh', '', '', 'Tidak', 'Keluarga Tidak Mampu', 'Akan Dicek Petugas Tanggal 21 Juni 2021'),
(4, '3234567891043673', '3146799131546677', 'Suyatno', 'Laki-laki', 'Islam', 'Surabaya', '1973-01-01', '48', 'Janda/Duda Perceraian', '8', 'Jl Mawar Melati', '04', '08', 'Buruh', '', '', 'Tidak', 'Belum Terdata Tahun Sebelumnya', 'Akan Dicek Petugas Tanggal 21 Juni 2021');

-- --------------------------------------------------------

--
-- Table structure for table `dana_bantuan`
--

CREATE TABLE `dana_bantuan` (
  `ID_DANA` int(11) NOT NULL,
  `TAHUN` year(4) NOT NULL,
  `DANA_MASUK` int(50) NOT NULL,
  `DANA_TERPAKAI` int(50) NOT NULL,
  `DANA_SISA` int(50) NOT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_bantuan`
--

INSERT INTO `dana_bantuan` (`ID_DANA`, `TAHUN`, `DANA_MASUK`, `DANA_TERPAKAI`, `DANA_SISA`, `KETERANGAN`) VALUES
(1, 2017, 1000000, 500000, 500000, 'Dana Untuk Kesehatan'),
(2, 2019, 25000000, 20000000, 5000000, 'Pembagian Dana Untuk 33 Kepala Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(50) NOT NULL,
  `USERNAME_ADMIN` varchar(50) NOT NULL,
  `PASSWORD_ADMIN` varchar(255) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID_ADMIN`, `NAMA_ADMIN`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`, `EMAIL_ADMIN`) VALUES
(1, 'Budi', 'adminbudi', 'b13d', 'budi12@gmail.com'),
(2, 'Fatma Putri', 'fatmafatma', 'f123', 'fatmaputriw@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan_sosial`
--
ALTER TABLE `bantuan_sosial`
  ADD PRIMARY KEY (`ID_BANSOS`);

--
-- Indexes for table `dana_bantuan`
--
ALTER TABLE `dana_bantuan`
  ADD PRIMARY KEY (`ID_DANA`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan_sosial`
--
ALTER TABLE `bantuan_sosial`
  MODIFY `ID_BANSOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dana_bantuan`
--
ALTER TABLE `dana_bantuan`
  MODIFY `ID_DANA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
