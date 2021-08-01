-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01 Mar 2020 pada 13.45
-- Versi Server: 5.5.60-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c5ferdy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `kodepos_sekarang` varchar(100) NOT NULL,
  `telepon_sekarang` varchar(100) NOT NULL,
  `alamat_libur` varchar(100) NOT NULL,
  `kodepos_libur` varchar(15) NOT NULL,
  `telepon_libur` varchar(15) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `eskul` varchar(100) NOT NULL,
  `golongan_darah` enum('a','b','o','ab') NOT NULL,
  `agama` enum('islam','protestan','katolik','hindu','budha') NOT NULL,
  `asal_smp` varchar(100) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `dari` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `umur_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `agama_ayah` enum('islam','protestan','katolik','hindu','budha') NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `kodepos_ayah` varchar(100) NOT NULL,
  `telepon_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `umur_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `agama_ibu` enum('islam','protestan','katolik','hindu','budha') NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `kodepos_ibu` varchar(100) NOT NULL,
  `telepon_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `umur_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `hubungan_wali` varchar(100) NOT NULL,
  `agama_wali` enum('islam','protestan','katolik','hindu','budha') DEFAULT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `kodepos_wali` varchar(100) NOT NULL,
  `telepon_wali` varchar(100) NOT NULL DEFAULT '-'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_sekarang`, `kodepos_sekarang`, `telepon_sekarang`, `alamat_libur`, `kodepos_libur`, `telepon_libur`, `hobi`, `eskul`, `golongan_darah`, `agama`, `asal_smp`, `anak_ke`, `dari`, `foto`, `nama_ayah`, `umur_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `agama_ayah`, `alamat_ayah`, `kodepos_ayah`, `telepon_ayah`, `nama_ibu`, `umur_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `agama_ibu`, `alamat_ibu`, `kodepos_ibu`, `telepon_ibu`, `nama_wali`, `umur_wali`, `pekerjaan_wali`, `hubungan_wali`, `agama_wali`, `alamat_wali`, `kodepos_wali`, `telepon_wali`) VALUES
(10, 'Ferdy Hendriawan', 'Ferdy', 'laki-laki', 'Bandung', '2002-10-29', 'Komp Pesona Fajar Asri', '50112', '14022', 'Komp Pesona Fajar Asri', '50112', '14022', 'Bermain Games', 'OTB', 'ab', 'islam', 'SMP NEGERI 1 CIMAHI', '2', '1', '01032020125714dank.jpg', 'Ivan Muktiana', '50', 'Wirausaha', '8.000.000', 'islam', 'Komp Pesona Fajar Asri', '50112', '14022', 'Santy Herawati', '40', 'Ibu rumah tangga', '1.000.000', 'islam', 'Komp Pesona Fajar Asri', '50112', '14022', '-', '-', '-', '-', 'islam', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
