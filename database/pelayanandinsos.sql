-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 02:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanandinsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bansos`
--

CREATE TABLE `bansos` (
  `id_penerima` int(11) NOT NULL,
  `kk_penerima` bigint(16) NOT NULL,
  `nik_penerima` bigint(16) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `bpnt` varchar(100) NOT NULL,
  `bst` varchar(100) NOT NULL,
  `pkh` varchar(100) NOT NULL,
  `pbi` varchar(100) NOT NULL,
  `bpnt_ppkm` varchar(100) NOT NULL,
  `ket_meninggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `akte` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lks`
--

CREATE TABLE `lks` (
  `id_lks` int(11) NOT NULL,
  `nama_lks` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_pengurus` varchar(80) NOT NULL,
  `tgl_no` varchar(50) NOT NULL,
  `registrasi` varchar(50) NOT NULL,
  `tipe_lks` varchar(5) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `jml_pekerja` varchar(3) NOT NULL,
  `dlm_p` varchar(5) NOT NULL,
  `dlm_l` varchar(5) NOT NULL,
  `non_p` varchar(5) NOT NULL,
  `non_l` varchar(5) NOT NULL,
  `jml_p` varchar(11) NOT NULL,
  `jml_l` varchar(11) NOT NULL,
  `jml_tot` varchar(11) NOT NULL,
  `berdiri` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lks`
--

INSERT INTO `lks` (`id_lks`, `nama_lks`, `alamat`, `nama_pengurus`, `tgl_no`, `registrasi`, `tipe_lks`, `kegiatan`, `jml_pekerja`, `dlm_p`, `dlm_l`, `non_p`, `non_l`, `jml_p`, `jml_l`, `jml_tot`, `berdiri`) VALUES
(12, 'Panti Asuhan Aisyiyah', 'Prambatan Kidul Kaliwungu Kudus', 'Hj.Zahroh Chasanah', '24 September 2022  No.460/7-TDLKSA/IX/2019', 'Tanggal 01 Juli 2016 No.AHU.um.01.01-637 ', 'B', 'Pengasuhan anak dalam panti', '-', '37', '-', '22', '22', '59', '22', '81', '1993/Kabupaten'),
(13, 'YAYASAN FKDK', 'Ds. Tenggeles Mejobo Kudus', 'RISMAWAN', '4 MEI 2018, 460/24-TDLKS/V/2018', 'AHU-0043056.AH.01.04.TAHUN 2016', 'B', 'Disabilitas', '-', '-', '-', '-', '63', '0', '63', '63', '2014 / Kabupaten'),
(14, 'Jalma Sehat ', 'Ds. Bulung Jekulo Kudus', 'Heru sutiyono', '15 oktober 2014', 'AHU-08110.50.10.2014', 'B', 'Panti rehab ODGJ', '12', '12', '85', '0', '0', '12', '85', '97', 'Kabupaten Kudus'),
(15, 'TAS Muslimat NU', ' Ds. Garung Lor Kaliwungu Kudus', 'Hj .RUSYDAH', '460/07/TDLKSA/IV/2021', 'AHU-SS.AH.05 Tahun 2015', 'B', 'Pengasuhan anak non -panti', '-', '0', '0', '66', '76', '66', '76', '0', 'Kabupaten Kudus'),
(16, 'Pertuni (Persatuan Tuna Netra Indonesia)', 'Ds. Panjang Bae Kudus', 'Ahmad Fauzi', '27/09/2021, 460/11-TDLKSA/VIII/2021', 'AHU-0068905.AH.01.07.TAHUN 2016', 'B', 'Disabilitas Netra', '', '', '', '11', '18', '11', '18', '29', 'Kabupaten Kudus'),
(17, 'TAS Putri Cempa', 'Jl.Raya Kudus - Pati KM.14 Desa Gondoharum Rt.9 RW.3 Jekulo Kudus ', 'Hepy Nugraheni', '24 Agustus 2017', 'AHU-1010.AH.01.04.thn 2014', 'B', 'Pengasuhan anak non -panti', '8', '0', '0', '46', '40', '46', '40', '86', 'Kabupaten Kudus'),
(18, 'TAS AISYIYAH 1 KUDUS', 'Jl. KH. Noor Hadi No.03 t.01 Rw.01 Demangan Kota Kudus', 'Hj. Fajar Sri Utami, S.Pd M.Pd', '24/08/2021 / 460/14/TDLKSA/VIII/2021', 'AHU-88.AH.0107.2010', 'B', 'Pengasuhan anak non -panti', '5', '11', '9', '-', '-', '-', '-', '20', 'Kabupaten Kudus'),
(19, 'TAS Raudlotul Mu\'minin', ' Desa Hadipolo 134 Rt 5 Rw 3 kec jekulo Kab Kudus / Yayasan Raudlotul Mu\'minin', 'Ali Asfuri, S.Pd, M.Pd', 'NO: 460/10-TDLKSA/XII/2019', 'NO : AHU-4957.AH.01.04. Tahun 2012', 'B', 'Pengasuhan anak non -panti', '6', '4', '3', '35', '40', '39', '43', '82', 'Kabupaten Kudus'),
(20, 'LKSA Tunas Muria', 'Jl. Kudus -  Jepara KM. 5 Desa Kedungdowo RT. 006/ RW. 001 Kec. Kaliwungu Kab. Kudus / Rukun Gawe Santosa', 'Khoirul Anwar, S.Pd.', '460/21-TD LKSA/IX/2018', 'AHU-5211.AH.01.04. Tahun 2010', 'B', 'Pengasuhan anak dalam panti', '2', '31', '14', '-', '-', '31', '14', '45', '2013 / Kab Kudus'),
(21, 'PPDI (Perkumpulan Penyandang Disabilitas Indonesia)', 'Ds. Kedungdowo Rt 05 / 03 Kaliwungu Kudus', 'Agus Salim', '30-01-2017 /  No: 39', 'AHU-0004211.AH,01.07. tahun2017', 'C', 'Disabilitas', '-', '', '', '', '', '', '', '56', '2019 / Kab Kudus'),
(22, 'ATTARBIYATUL ISLAMIYYAH', 'Ds. Jurang Gebog Kudus ', 'INDAH KAMALIA', '460/16/TDLKSA/VIII/2021', 'AHY-814.AH.02.01', 'C', 'Pengasuhan anak non -panti', '5', '5', '0', '0', '0', '5', '0', '5', 'Kabupaten Kudus'),
(23, 'LKSA AINUL YAQIN', 'Ds. Bulung Jekulo Kudus', 'SHOLAHUDDIN AL HASYIMI, MA', '1051.SA-LKS.C/2021', 'AHU- 0003591.AH.01.04.Tahun 2019', 'B', 'Pengasuhan anak dalam panti', '-', '30', '36', '', '', '30', '36', '66', 'Kabupaten Kudus'),
(24, 'ITMI (Ikatan Tuna Netra Muslim Indonesia)', 'Ds. Tenggeles Mejobo Kudus', 'ULIN NUHA', '12 APRIL 2021 / 460/05/TDLKS/IV/2021', 'C-75.HT.01.03.TH.2007', 'B', 'Disabilitas Netra', '-', '0', '0', '0', '0', '11', '26', '37', 'Kabupaten Kudus'),
(25, 'Kalimosodo', 'Dau Hadipolo RT 06 RW 004 Jekulo Kudus', 'Soetrisno', '10/10/2020', 'AHU-0008763.AH.01.07. TH 2020', 'B', 'Pengasuhan anak dalam panti', '15', '41', '42', '0', '0', '41', '42', '83', '2008 / Kab. Kudus'),
(26, 'HWDI (Himpunan Wanita Disabilitas Indonesia)', 'Ds. Nganguk Kota Kudus', 'Indriyanti', 'Belum terdaftar di Dinsos', 'SURJADI JASIN, SH NO. 214 TAHUN 2004', 'C', 'Disabilitas', '-', '', '', '35', '', '35', '', '35', 'Kabupaten Kudus'),
(27, 'TAS \'AISYIYAH AL ISLAM', 'Ds. Karangmalang Gebog Kudus / Yayasan Aisyiyah', 'Noor Sulichah, S.P', '24-Agust-21 / 460/13/TDLKSA/VIII/2021', 'NOMOR AHU-88.AH.01.07.TAHUN 2010', 'B', 'Pengasuhan anak non -panti', '-', '0', '0', '24', '38', '24', '38', '62', 'TPA AISYIYAH AL ISLAM'),
(28, 'DARUSSALAMAH', 'DS.JURANG RT 005/ 003 GEBOG KUDUS', 'JULAL UMAM', '12 April 2021 - 460/ 04/ TDLKSA/ IV/ 2021', 'AHU-1679.AH.01.04 TAHUN 2011', 'B', 'Pengasuhan anak dalam panti', '14', '14', '16', '102', '104', '116', '120', '236', 'Kabupaten Kudus'),
(29, 'Nurul Jannah', 'Jl. Pramuka No. 23 Desa Kramat 02/02 Kota Kudus / Yayasan Chodijah Al Djufri', 'Dzikrul Wafa Al Hafidz, S.Pd', '13/07/2005', 'Nomor C - 1093. HT. 01. 02. TH 2005', 'B', 'Pengasuhan anak dalam panti', '-', '16', '16', '-', '-', '16', '16', '32', '20 Juni 2005 / Kab. Kudus'),
(30, 'DARUL MUNTAMAH', 'Ds. Cendono Dawe Kudus', 'H.M. JAMASRI, S.Pd.', '460/12-TDLKSA/I/2018', 'LIANTY ACHWAS, SH. / NOMOR 21 TAHUN 2007', 'B', 'Pengasuhan anak dalam panti', '-', '15', '15', '15', '15', '15', '15', '30', 'Kabupaten Kudus'),
(31, 'DZIKRUL HIKMAH', 'Ds. Gondoharum Jekulo Kudus', 'Ilham Wahyudi, S.Pd.', '460/3.TDLKSA/III/2019', 'SARI NITIYUDO, SH. / NOMOR 15 TAHUN 2012', 'B', 'Pengasuhan anak dalam panti', '-', '6', '28', '', '', '6', '28', '34', 'Kabupaten Kudus'),
(32, 'AL-AQSHO', 'Bakalan Krapyak Kaliwungu Kudus', 'MUJIB, S. Ag', '460/09-TDLKSA/XII/2017', 'SULCHAN ABDUL MALIK, SH. / NOMOR 42 TAHUN 2007', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '', '21', '21', 'Kabupaten Kudus'),
(33, 'DARUL HADLONAH', ' Ds. Wergu Kota Kudus', 'Chumaidah Chamim, S.Pd.I', '460/16-tdlksa/v/2018', 'Paiman, SH No. 23 Mei 2011', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '', '', '37', 'Kabupaten Kudus'),
(34, 'MUHAMMADIYAH SAMSAH', 'Ds. Singocandi Kota Kudus', 'H. Muhammad Sugiyanto, SH', '460/12.TDLKSA/XI/209', 'Patrialis Akbar, SH, MH AHU-88.AH.01.07 2010', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '40', '9', '49', 'Kabupaten Kudus'),
(35, 'BUDI LUHUR', 'Ds. Jekulo Kec. Jekulo Kudus', 'Hj. Wiwik Purwati, S.Pd', '460/05-TDLKSA/VII/2017', 'Suryanto, SH.M.Kn 12-8-2011 No: 22', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '', '', '57', 'Kabupaten Kudus'),
(36, 'MELATI', 'Kel. Purowsari Kec. Kota Kudus', 'H. Drs. MALCHAN', '460/1.TDLKSA/I/2019', 'KEMENKUMHAM NO. C_2825_HT.01.02 TAHUN 2007', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '', '', '37', 'Kabupaten Kudus'),
(37, 'YPALB Sunan Muria', 'Ds. Cendono Dawe Kudus', 'Hj. Muntamah, A.Ma.Pd', '\'460/20.TDLKSA/VII/2018', 'H. Paiman No 40 Th 2014', 'B', 'Pengasuhan anak dalam panti', '-', '', '', '', '', '', '', '31', 'Kabupaten Kudus'),
(38, 'TAS MUSLIMAT NU \"TAMAN CERIA\"', 'Ds. Besito Gebog Kudus', 'Dra. RUSLIN', '460/14.TDLKSA/IV/2018', 'AFANDI, SH., M.Kn. / Nomor 04 Tahun 2015', 'B', 'Pengasuhan anak non -panti', '-', '', '', '', '', '31', '20', '51', 'Kabupaten Kudus'),
(39, 'TAS UMMUR RODHO\'AH', 'Ds. Pasuruhan Kidul Jati Kudus', 'Hj. ARNAJUN, S.Pd', '900/404/2016', 'ADHI YULISTIANTO, SH., M.Kn. / Nomor 230 Tahun 201', 'B', 'Pengasuhan anak non -panti', '-', '', '', '', '', '29', '35', '64', 'Kabupaten Kudus'),
(40, 'WISMA LANSIA \'AISYIYAH', 'Kel. Purwosari Kec. Kota Kudus', 'HJ KHOLIDAH', '460/2.TDLKS/III/2019', 'Nukman Muhammad, SH.MM NOMOR C2-HT.01.03.A.165 Tah', 'B', 'Pengasuhan lansia', '-', '3', '', '', '', '3', '', '3', 'Kabupaten Kudus'),
(41, 'KELOMPOK DUKUNGAN SEBAYA (KDS) \"KASIH\"', 'Ds. Megawon Jati Kudus', 'ENI MARDIYANTI, SH', '460/22.TDLKSA/XI/2018', 'H. PAIMAN, SH, MH ', 'B', 'Rehab ODHA', '-', '', '', '', '', '25', '30', '55', 'Kabupaten Kudus');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduanbpnt`
--

CREATE TABLE `pengaduanbpnt` (
  `id_pengaduanbpnt` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pengaduan` varchar(300) NOT NULL,
  `ktp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduanpkh`
--

CREATE TABLE `pengaduanpkh` (
  `id_pengaduanpkh` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `surat_rawat` varchar(200) NOT NULL,
  `rumah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `surat_rawat` varchar(200) NOT NULL,
  `depan` varchar(200) NOT NULL,
  `tamu` varchar(500) NOT NULL,
  `kamar` varchar(500) NOT NULL,
  `dapur` varchar(500) NOT NULL,
  `wc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengusulan`
--

CREATE TABLE `pengusulan` (
  `id_pengusulan` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `depan` varchar(200) NOT NULL,
  `tamu` varchar(200) NOT NULL,
  `kamar` varchar(200) NOT NULL,
  `dapur` varchar(200) NOT NULL,
  `wc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peralihan`
--

CREATE TABLE `peralihan` (
  `id_peralihan` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `surat_rawat` varchar(200) NOT NULL,
  `depan` varchar(200) NOT NULL,
  `tamu` varchar(200) NOT NULL,
  `kamar` varchar(200) NOT NULL,
  `dapur` varchar(200) NOT NULL,
  `wc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reaktifasi`
--

CREATE TABLE `reaktifasi` (
  `id_reaktifasi` int(11) NOT NULL,
  `nama_pengaju` varchar(50) NOT NULL,
  `nik_pengaju` bigint(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `sktm` varchar(200) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `surat_rawat` varchar(200) NOT NULL,
  `rumah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(6, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Adhin Nafa Rizal Fikri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bansos`
--
ALTER TABLE `bansos`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `lks`
--
ALTER TABLE `lks`
  ADD PRIMARY KEY (`id_lks`);

--
-- Indexes for table `pengaduanbpnt`
--
ALTER TABLE `pengaduanbpnt`
  ADD PRIMARY KEY (`id_pengaduanbpnt`);

--
-- Indexes for table `pengaduanpkh`
--
ALTER TABLE `pengaduanpkh`
  ADD PRIMARY KEY (`id_pengaduanpkh`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengusulan`
--
ALTER TABLE `pengusulan`
  ADD PRIMARY KEY (`id_pengusulan`);

--
-- Indexes for table `peralihan`
--
ALTER TABLE `peralihan`
  ADD PRIMARY KEY (`id_peralihan`);

--
-- Indexes for table `reaktifasi`
--
ALTER TABLE `reaktifasi`
  ADD PRIMARY KEY (`id_reaktifasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bansos`
--
ALTER TABLE `bansos`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lks`
--
ALTER TABLE `lks`
  MODIFY `id_lks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pengaduanbpnt`
--
ALTER TABLE `pengaduanbpnt`
  MODIFY `id_pengaduanbpnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengaduanpkh`
--
ALTER TABLE `pengaduanpkh`
  MODIFY `id_pengaduanpkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengusulan`
--
ALTER TABLE `pengusulan`
  MODIFY `id_pengusulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peralihan`
--
ALTER TABLE `peralihan`
  MODIFY `id_peralihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reaktifasi`
--
ALTER TABLE `reaktifasi`
  MODIFY `id_reaktifasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
