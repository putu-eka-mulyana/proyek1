-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2019 at 09:52 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gajih`
--

CREATE TABLE `gajih` (
  `id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `gajih_pokok` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'guru ipa'),
(2, 'guru ips'),
(3, 'guru matematika'),
(4, 'asas'),
(5, 'asa'),
(6, 'ewss'),
(7, 'sasa'),
(8, 'dfdff'),
(9, 'zzz'),
(13, 'guru olahraga'),
(14, 'guru agama'),
(15, 'guru agama'),
(16, 'tetst'),
(17, 'tetst'),
(18, 'tetst'),
(19, 'asas'),
(20, 'sa'),
(21, ''),
(22, 'as'),
(23, ''),
(24, 'sas'),
(25, 'test3'),
(26, 'asasa'),
(27, 'rrr'),
(28, 'rrrr'),
(29, 'ttt'),
(30, ''),
(31, 'dssds'),
(32, 'fdfd'),
(33, 'sas'),
(34, 'asa'),
(35, 'sas'),
(36, 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status_pernikahan` varchar(10) NOT NULL,
  `status kerja` varchar(10) NOT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `tanggal_masuk`, `status_pernikahan`, `status kerja`, `jabatan_id`) VALUES
(1, '3232', 'sfdsf', '2019-06-13', 'laki', 'islam', 'sasas', 'asasa', '2019-06-19', 'asas', 'asas', 2),
(2, '12121', 'dsssss', '2019-06-27', 'laki-laki', 'islam', 'mataram', '2323232', '2019-06-27', 'belum kawi', 'tetap', 1),
(3, '2323', 'rud', '2019-06-11', 'Laki', 'islam', 'jl', '4454545', '2019-06-12', 'kawin', 'tetap', 15),
(4, '1222', 'siapa', '2019-06-14', 'perempuan', 'hindu', 'sdsds', '434343', '2019-06-01', 'kawin', 'sdsd', 14),
(5, '3232', 'sdsds', '2019-06-21', 'perempuan', 'islam', 'ewewe', '43434', '2019-06-18', 'kawin', 'wewew', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slip_gajih`
--

CREATE TABLE `slip_gajih` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_gajih` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `gajih_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gajih`
--
ALTER TABLE `gajih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan_id` (`jabatan_id`);

--
-- Indexes for table `slip_gajih`
--
ALTER TABLE `slip_gajih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gajih_id` (`gajih_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gajih`
--
ALTER TABLE `gajih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slip_gajih`
--
ALTER TABLE `slip_gajih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `gajih`
--
ALTER TABLE `gajih`
  ADD CONSTRAINT `gajih_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`);

--
-- Constraints for table `slip_gajih`
--
ALTER TABLE `slip_gajih`
  ADD CONSTRAINT `slip_gajih_ibfk_1` FOREIGN KEY (`gajih_id`) REFERENCES `gajih` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
