-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 09:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `kondisi` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok`, `kondisi`, `jenis`, `keterangan`, `tgl_masuk`) VALUES
(7, 'a', 0, 'a', 'a', 'a', '2021-04-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `barang` varchar(225) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prasarana`
--

CREATE TABLE `tb_prasarana` (
  `id_prasarana` int(11) NOT NULL,
  `ruangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prasarana`
--

INSERT INTO `tb_prasarana` (`id_prasarana`, `ruangan`, `keterangan`) VALUES
(1, 'xi', ''),
(2, 'xi', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `no_barang` varchar(225) NOT NULL,
  `tempat_asal` varchar(225) NOT NULL,
  `tempat_tujuan` varchar(250) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarana`
--

CREATE TABLE `tb_sarana` (
  `id_sarana` int(11) NOT NULL,
  `nama_sarana` varchar(250) NOT NULL,
  `kelompok_srn` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `ruangan` varchar(250) NOT NULL,
  `no_inventaris` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `kelayakan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sarana`
--

INSERT INTO `tb_sarana` (`id_sarana`, `nama_sarana`, `kelompok_srn`, `keterangan`, `ruangan`, `no_inventaris`, `jumlah`, `kelayakan`) VALUES
(4, '', 'mejakursi', 'meja', '', '3567', '12', ''),
(7, 'layak', 'mejakursi', 'taplak meja ukuran ', '', '12', '12', ''),
(8, 'layak', 'komputer', 'a', '', '4567', '1', ''),
(9, 'tidak_layak', 'komputer', 'b', 'xi', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `nis` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'viona', 'vionarulita', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prasarana`
--
ALTER TABLE `tb_prasarana`
  ADD PRIMARY KEY (`id_prasarana`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prasarana`
--
ALTER TABLE `tb_prasarana`
  MODIFY `id_prasarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
