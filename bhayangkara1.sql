-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 11:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhayangkara1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `status`) VALUES
(1, 'admin', 'TWpFeU16Sm1NamszWVRVM1lUVmhOelF6T0RrMFlUQmxOR0U0TURGbVl6TT0=', 'Rojiah Dewi Sartika', 'Aktif'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'randy', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `deskripsi`, `tgl_buat`, `foto`) VALUES
(4, 'RS BHAYANGKARA KENDARI', '<p align=\"justify\">RS BHAYANGKARA KENDARI\r\n\r\n\r\n\r\n\r\n<p align=\"justify\">', 'RS BHAYANGKARA KENDARI', '2022-08-09', '92098999.PNG'),
(6, 'PENANDATANGANAN MOU', 'Penandatanganan MOU antara Fakultas Kedokteraan UHO dengan Wahana Kepanitraan Klinik untuk mengoptimalkan pendayagunaan sumber daya yang dimiliki secara terencana, terpadu, sistematis, efektif, dan efisien, guna peningkatan mutu pelayanan di Rumah Sakit Tingkat III Kendari, peningkatan mutu pendidikan dan pengembangan kedokteran sesuai Standar Nasional Pendidikan dan pengembangan ilmu pengetahuan dan teknologi kedokteran di Rumah Sakit Bhayangkara Tingkat III Kendari. Pelaksanaan dari MOU ini terdiri dari pelayanan kesehatan dan pelayanan pendidikan.', 'Penandatanganan MOU antara Fakultas Kedokteraan UHO dengan Wahana Kepanitraan Klinik\r\n\r\n\r\n', '2017-03-10', '7959622.jpg'),
(7, 'SARANA RS BHAYANGKARA ', 'Peletakan Batu Pertama Pembangunan GEdung - Aula Rumah Sakit Bhayangkara Tingkat III Kendari Oleh Bapak Kapolda SULTRA', 'Peletakan Batu Pertama Gedung- Aula RS. Bhayangkara Kendari Oleh Bapak Kapolda SULTRA', '2017-03-10', '26227864.PNG'),
(8, 'PENYERAHAN BANTUAN 1 UNIT AMBULANCE', 'Penyerahan Bantuan 1 Unit Ambulance Oleh Bank BRI oleh RS.Bhayangkara Tingkat III Kendari', 'Penyerahan Bantuan 1 Unit Ambulance Oleh Bank BRI Kepada Rs Bhayangkara Kendari', '2017-03-10', '73762413.PNG'),
(12, 'BIMBINGAN AKREDITASI KARS', 'Kegiatan Bimbingan Akreditasi Oleh KARS di RS.Bhayangkara Kendari', 'Kegiatan Bimbingan Akreditasi Oleh KARS di RS.Bhayangkara Kendari', '2017-04-18', '83196084.jpg'),
(13, 'KOMITMEN BERSAMA AKREDITASI', 'Komitmen Bersama RS.Bhayangkara Tingkat III Kendari Tahun 2017 \r\n\r\nTerakreditasi Program Khusus KARS Versi 2012', 'Komitmen Bersama Rumah SakitBhayangkara Tingkat III Kendari', '2017-06-06', '89432837.PNG'),
(14, 'KUNJUNGAN BHAYANGKARI ', 'Kunjungan Bhayangkari ke Rumah Sakit Bhayangkara Tingkat III Kendari', 'Kunjungan Bhayangkari ke Rumah Sakit Bhayangkara Tingkat III Kendari', '2017-10-26', '99466318.PNG'),
(15, 'ROUND TABLE DISCUSSION', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n\r\n\r\n<div dir=\"auto\">Round Table Discussion :Pentingnya Kesehatan Pencernaan Untuk Mendukung Tumbuh Sehat Bahagia oleh Dr. Dianti Maya Sari B. Sp.A., M.Kes dilaksanakan pada tanggal 30 Januari 2019 yang bertempat di Aula RS.Bhayangkara Kendari.</div>\r\n</div>\r\n \r\n\r\n<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\"> </div>', '(300119)Pentingnya Kesehatan Pencernaan Untuk Mendukung Tumbuh Sehat Bahagia', '2022-08-09', '3265381.PNG'),
(17, 'SOSIALISASI ILMU KEPERAWATAN', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n\r\n<div dir=\"auto\">Sosialisasi Bidang Ilmu Keperawatan \"Nursing Critical Care\" Bagi Tenaga Perawat dan Bidan di RS. Bhayangkara TK.III Kendari yang dilaksanakan pada tanggal 8 Februari 2019 di Aula RS.Bhayangkara Kendari.</div>\r\n</div>', '(080219)Sosialisasi Bidang Ilmu Keperawatan \"Nursing Critical Care\" ', '2022-08-09', '57894897.PNG'),
(18, 'GIAT PAPARAN SOSIALISASI', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n\r\n<div dir=\"auto\">Giat Paparan Sosialisasi Training Peningkatan Mutu dan Keselamatan Pasien oleh Wakil Kepala RS. Bhayangkara TK.III Kendari drg. Mulyati.</div>\r\n</div>\r\n \r\n\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n\r\n<div dir=\"auto\"> </div>\r\n</div>', '(2019)Giat Paparan Sosialisasi Training Peningkatan Mutu dan Keselamatan Pasien', '2022-08-09', '93530273.PNG'),
(19, 'HUT BHAYANGKARA KE 73', '<div dir=\"auto\">Dalam rangka HUT Bhayangkara ke 73 Operasi celah bibir dan celah langit-langit di Rumah Sakit Bhayangkara Tk.III Kendari yang diselenggarakan pada tanggal 18 Juni 2019 di RS.Bhayangkara Kendari.</div>\r\n<div dir=\"auto\">\"Senyum Bersama Polri\"</div>', '(180619)HUT Bhayangkara ke 73 Operasi celah bibir dan celah langit-langit \"Senyum Bersama Polri\"', '2022-08-09', '44973755.PNG'),
(20, 'SUPERVISI PUSDOKKES POLRI', '<div dir=\"auto\">Supervisi Pusdokkes Polri 2019 Oleh Komisaris Besar Polisi dr. Yusuf Mawadi, Pembina I drg. Sri Indriastuti di RS Bhayangkara Kendari</div>', '(2019)Supervisi Pusdokkes Polri 2019 Oleh Komisaris Besar Polisi dr. Yusuf Mawadi', '2022-08-09', '41583252.PNG'),
(21, 'P R O G R A M   4 T', 'Terselenggaranya upaya percepatan pencegahan dan pengendalian COVID-19 melalui penguatan PEMERIKSAAN, PELACAKAN, PERAWATAN dan ISOLASI, serta TRANSPORTASI kasus COVID-19 dilingkungan kantor dan rumah khusus anggota polri dan keluarga', ' (300921)   Testing,  Tracing,   Treatment,  Transport ( 4T )', '2022-08-09', '50054932.jpg'),
(22, 'ALUR VAKSIN', '<iframe src=\"//www.youtube.com/embed/dzrmESWJmKw\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe>', 'Alur pelayanan vaksin RS. Bhayangkara Kendari', '2022-08-09', '18878174.PNG'),
(24, 'IN HOUSE TRAINING PPI', 'In House Training Pencegahan dan Pengendalian Infeksi Rumah Sakit Bhayangkara Kendari\r\nyang di adakan pada tanggal 28 Mei 2021 di Aula RS.Bhayangkara Kendari oleh Muhammad Asrul, S.Kep.Ns.,M.kep.', '(280521)In House Training Pencegahan dan Pengendalian Infeksi', '2022-08-09', '54769897.PNG'),
(25, 'IN HOUSE TRAINING BHD', 'In House Training Bantuan Hidup Dasar Rumah Sakit Bhayangkara Kendari dilaksanakan pada tanggal 30 September 2021 oleh dr. Hery Irawan, Sp.An.', '(300921)In House Training Bantuan Hidup Dasar', '2022-08-09', '68273926.PNG'),
(26, 'IN HOUSE TRAINING CS', 'In House Training Customer Service dan Komunikasi Efektif Rumah Sakit Rumah Sakit Bhayangkara Kendari yang dilaksanakan pada tanggal 10 November 2021oleh Ratna Sesotya Wedadjayati, S.Psi., MSi.Psi.', '(101121)In House Training Customer Service dan Komunikasi Efektif ', '2022-08-09', '90536499.PNG'),
(27, 'GIAT DONOR DARAH ', 'Giat Donor Darah Serentak dalam rangka HUT POLRI ke-76 tanggal 3 Juni 2022', '(030622) Giat Donor Darah Serentak dalam rangka HUT POLRI ke-76 ', '2022-08-09', '60427856.PNG'),
(28, 'TIPS KESEHATAN', 'Tips Kesehatan Cegah Stunting pada Anak sejak Masa Kehamilan', 'Tips Kesehatan Cegah Stunting pada Anak sejak Masa Kehamilan', '2022-08-09', '38964844.PNG'),
(29, 'INFO KESEHATAN', 'Info Kesehatan Kebiasaan yang dapat merusak ginjal', 'Info Kesehatan Kebiasaan yang dapat merusak ginjal', '2022-08-09', '47747803.PNG'),
(30, 'TIPS  KESEHATAN', 'Tips Kesehatan Mencegah Penularan Hepatitis Akut pada Anak', 'Tips Kesehatan Mencegah Penularan Hepatitis Akut pada Anak', '2022-08-09', '76467895.PNG'),
(31, 'ESWL - Extracorporeal Shock Wave Lithotripsy', 'Kini telah tersedia di RS. Bhayangkara Kendari ESWL - Extracorporeal Shock Wave Lithotripsy merupakan tindakan non-invasif untuk menangani batu saluran kemih, batu kandung kemih, maupun batu ginjal dengan memanfaatkan gelombang kejut dari luar tubuh. Gelombang kejut yang digunakan berupa gelombang ultrasonik atau elektrohidrolik yang akan memecah batu menjadi ukuran lebih kecil sehingga dapat keluar bersama air kemih.\r\n Tindakan ini sama sekali tak memerlukan sayatan ke kulit sehingga tidak membutuhkan penanganan observasi yang lama seperti pasca operasi. Proses ESWL pun tergolong singkat, hanya dengan membutuhkan waktu 1-2 jam saja, dan setelah itu pasien yang telah diterapi dapat melanjutkan aktivitasnya kembali.', '(070622)ESWL - Extracorporeal Shock Wave Lithotripsy', '2022-08-09', '34841919.PNG'),
(32, 'GIAT BAKSOS', 'Giat Bakti Sosial Operasi Celah Bibir dan Lelangit dalam rangka memperingati HUT POLRI ke 76', 'Giat Bakti Sosial Operasi Celah Bibir dan Lelangit dalam rangka memperingati HUT POLRI ke 76', '2022-08-09', '58880615.PNG'),
(33, 'Giat Vaksinasi Covid-19 dan Sunatan Massal', 'Giat Vaksinasi Covid-19 dan Sunatan Massal bersama BNN Provinsi SULTRA dalam rangka HUT BNN Provinsi Sulawesi Tenggara', '(150622)Giat Vaksinasi Covid-19 dan Sunatan Massal bersama  BNN Provinsi SULTRA ', '2022-08-09', '40466309.PNG'),
(34, 'SOSIALISASI STUNTING DAN WASTING', 'Giat Sosialisasi Stunting dan Wasting di Puskesmas Mekar', '(150622)Giat Sosialisasi Stunting dan Wasting ', '2022-08-09', '83786010.PNG'),
(35, 'KEGIATAN PEMBINAAN ROHANI DAN MENTAL', 'Kegiatan Pembinaan Rohani dan Mental (Binrohtal) untuk personil RS. Bhayangkara Kendari guna membentuk karakter personil yang lebih harmonis, humanis, dan prima dalam pelayanan', '(04082022)Kegiatan Pembinaan Rohani dan Mental (Binrohtal) ', '2022-08-09', '49099731.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_pasien` varchar(14) NOT NULL DEFAULT '',
  `diagnosa` varchar(50) DEFAULT NULL,
  `key_id` varchar(1) DEFAULT NULL,
  `kode_idc` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(10) NOT NULL,
  `nama_dokter` text NOT NULL,
  `spesialis` text NOT NULL,
  `hari_praktek` text NOT NULL,
  `jam_praktek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `nama_dokter`, `spesialis`, `hari_praktek`, `jam_praktek`) VALUES
(1, 'dr. NYOMAN SUNARKA, Sp.PD', 'PENYAKIT DALAM', 'SENIN & JUMAT', '08.00 - SELESAI'),
(2, 'dr.DWIANA PERTIWI TRISNOWATI,Sp.PD, MSc', 'PENYAKIT DALAM ', 'SELASA S/D JUMAT', '13.00 - 15.00'),
(3, 'dr. IWAN DERMA KARYA, Sp.p', 'SPESIALIS PARU', 'SENIN, RABU, & JUM\'AT', '14.00-SELESAI'),
(5, 'dr. HAPPY HANDARUWATI, Sp.S,M.KES', 'SPESIALIS SARAF', 'SELASA & KAMIS  I  JUMAT', '10.00-12.00        I        14.00 - SELESAI  '),
(6, 'dr. NUR HILALIYAH, Sp.THT, M.KES', 'SPESIALIS THT', 'RABU & JUM\'AT', '10.00-12.00'),
(7, 'dr. DEWI KURNIAWATI, Sp.THT -KL, M.KES', 'SPESIALIS THT', 'SELASA & KAMIS ', '14.00-SELESAI'),
(8, 'dr. YENI HARYANI, Sp.A, M.KES', 'SPESIALIS ANAK', 'SENIN & RABU', '13.00-15.00'),
(9, 'dr. DIANTI MAYA SARI BUDI,Sp.A', 'SPESIALIS ANAK', 'KAMIS & JUMAT', '14.00-SELESAI'),
(10, 'dr. SHINTA N.BARNAS, Sp.KK,M.KES', 'SPESIALIS PENYAKIT KULIT & KELAMIN', 'SELASA', '09.00-10.00'),
(12, 'dr. MD.CHRISTIAN MA,M.Repro, Sp.b (K) ONK', 'SPESIALIS BEDAH TUMOR (ONKOLOGI)', 'SENIN S/D RABU', '10.00-SELESAI'),
(13, 'dr. SUHARTINI, Sp.OG', 'SPESIALIS OBSENTRI & GINEKOLOGI (KEBIDANAN & KANDUNGAN)', 'KAMIS', '13.00-15.00'),
(14, 'dr. INDRA MAGDA TIARA, Sp.OG', 'SPESIALIS OBSENTRI & GINEKOLOGI (KEBIDANAN & KANDUNGAN)', 'JUMAT', '08.00 - 10.00'),
(15, 'dr. BIMO BINTORO, Sp.JP', 'SPESIALIS JANTUNG & PEMBULUH DARAH', '-', '-'),
(16, 'drg. NENENG SAVITRY', 'DOKTER GIGI', 'SENIN S/D JUM\'AT', '08.00-11.00'),
(18, 'drg. YUNITA SYAMSUDIN', 'DOKTER GIGI', 'SENIN S/D JUMAT', '08.00-11.00'),
(19, 'dr. JAMALUDDIN, M.Kes, Sp. JP', 'SPESIALIS JANTUNG & PEMBULUH DARAH', 'SELASA & RABU | KAMIS', '08.00-10.00 | 16.00 - SELESAI'),
(20, 'dr.NEVITA YONNIA AYU SORAYA, Sp.M', 'SPESIALIS MATA', 'SENIN S/D KAMIS', '13:00 - SELESAI'),
(21, 'dr.TEDJO ARIANTO, Sp.KBD', 'SPESIALIS BEDAH DIGESTIVE', 'SELASA S/D KAMIS', '15.00 - SELESAI'),
(22, 'dr.MUHAMMAD JABIR, Sp.U', 'SPESIALIS UROLOGI', 'SENIN-JUMAT', '14.00-SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_inap`
--

CREATE TABLE `kamar_inap` (
  `id_kamar` int(10) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `kamar_kosong` varchar(20) NOT NULL,
  `kamar_terisi` int(11) NOT NULL,
  `total_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar_inap`
--

INSERT INTO `kamar_inap` (`id_kamar`, `nama_kamar`, `kelas`, `kamar_kosong`, `kamar_terisi`, `total_kamar`) VALUES
(2, 'PERAWATAN MAWAR ', 'RUANG ANAK', '4', 5, 9),
(3, 'PERAWATAN MAWAR ', 'KELAS I', '2', 14, 16),
(4, 'PERAWATAN MAWAR ', 'KELAS II', '1', 7, 8),
(5, 'PERAWATAN MAWAR ', 'KELAS III', '3', 6, 9),
(8, 'KEBIDANAN', 'VIP', '3', 1, 4),
(9, 'KEBIDANAN', 'KELAS I', '1', 1, 2),
(10, 'KEBIDANAN', 'KELAS II', '1', 2, 3),
(11, 'KEBIDANAN', 'KELAS III', '1', 2, 3),
(12, 'PERAWATAN EDELWEIS', 'VVIP', '1', 0, 1),
(13, 'PERAWATAN EDELWEIS', 'VIP', '5', 6, 11),
(14, 'PERAWATAN EDELWEIS', 'KELAS I', '1', 7, 8),
(15, 'PERAWATAN EDELWEIS ANAK', 'KELAS I', '2', 0, 2),
(16, 'ICU', '-', '0', 3, 3),
(17, 'IGD', '-', '7', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_reg` int(11) UNSIGNED NOT NULL,
  `id_pasien` varchar(14) NOT NULL DEFAULT '',
  `type` char(1) NOT NULL DEFAULT '',
  `no_mr` varchar(6) NOT NULL DEFAULT '',
  `nama_pasien` varchar(40) DEFAULT '',
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT '',
  `jenis_kelamin` char(1) DEFAULT '',
  `pendidikan` char(1) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `pangkat` varchar(20) DEFAULT NULL,
  `satuan_kerja` varchar(20) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT '',
  `suku` varchar(35) DEFAULT NULL,
  `goldar` char(2) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `agama` char(1) DEFAULT NULL,
  `nama_ortu` varchar(40) DEFAULT NULL,
  `pekerjaan_ortu` varchar(20) DEFAULT NULL,
  `satuan_kerja_ortu` varchar(20) DEFAULT NULL,
  `nama_keldek` varchar(40) DEFAULT NULL,
  `hubungan_keldek` varchar(20) DEFAULT NULL,
  `alamat_keldek` varchar(255) DEFAULT '',
  `no_telp_keldek` varchar(13) DEFAULT NULL,
  `bagian` varchar(25) DEFAULT NULL,
  `ruang` varchar(25) DEFAULT NULL,
  `kelas` varchar(25) DEFAULT NULL,
  `diagnosa_awal` varchar(255) DEFAULT NULL,
  `cara_bayar` char(1) DEFAULT '',
  `keterangan_bayar` varchar(255) DEFAULT NULL,
  `cara_diterima` char(1) DEFAULT NULL,
  `cara_masuk` char(1) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_pindah` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `lama_rawat` int(2) DEFAULT NULL,
  `penyebab_cidera` varchar(25) DEFAULT NULL,
  `operasi` varchar(40) DEFAULT NULL,
  `gol_operasi` varchar(30) DEFAULT NULL,
  `tgl_operasi` date DEFAULT NULL,
  `kode_idc` varchar(20) DEFAULT NULL,
  `infeksi` varchar(30) DEFAULT NULL,
  `penyebab_infeksi` varchar(30) DEFAULT NULL,
  `imunisasi` varchar(30) DEFAULT NULL,
  `keadaan_keluar` char(1) DEFAULT NULL,
  `cara_keluar` char(1) DEFAULT NULL,
  `transfusi` varchar(30) DEFAULT NULL,
  `dokter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_reg` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
