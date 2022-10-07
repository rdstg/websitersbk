-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 04:43 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhayangkara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `status`) VALUES
(1, 'admin', 'TWpFeU16Sm1NamszWVRVM1lUVmhOelF6T0RrMFlUQmxOR0U0TURGbVl6TT0=', 'Rojiah Dewi Sartika', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(10) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `deskripsi`, `tgl_buat`, `foto`) VALUES
(1, 'Data Rumah Sakit', 'Data Rumah Sakit Saat Ini Ada 200 ini contoh kata kata yang dibuat dalam berita', 'Data Rumah Sakit Saat Ini Ada 200 ini contoh kata kata yang dibuat dalam berita', '2016-09-19', '91506958.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE IF NOT EXISTS `jadwal_dokter` (
`id_jadwal` int(10) NOT NULL,
  `nama_dokter` text NOT NULL,
  `spesialis` text NOT NULL,
  `hari_praktek` text NOT NULL,
  `jam_praktek` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `nama_dokter`, `spesialis`, `hari_praktek`, `jam_praktek`) VALUES
(1, 'dr. NYOMAN SUNARKA, Sp.PD', 'PENYAKIT DALAM', 'SENIN & JUMAT', '08.00 - SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_inap`
--

CREATE TABLE IF NOT EXISTS `kamar_inap` (
`id_kamar` int(10) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `kamar_kosong` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kamar_inap`
--

INSERT INTO `kamar_inap` (`id_kamar`, `nama_kamar`, `kelas`, `kamar_kosong`) VALUES
(1, 'PERAWATAN MAWAR', 'VIP', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
 ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
