-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21 Jun 2019 pada 22.29
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `pegawai_id`, `tanggal`, `keterangan`) VALUES
(1, 3, '2019-06-20 22:35:47', 'hadir'),
(2, 2, '2019-06-20 22:37:59', 'hadir'),
(3, 2, '2019-06-20 22:38:38', 'hadir'),
(4, 7, '2019-06-20 22:39:28', 'hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'yuyun', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gajih`
--

CREATE TABLE `gajih` (
  `id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `gajih_pokok` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gajih`
--

INSERT INTO `gajih` (`id`, `pegawai_id`, `tanggal_pengambilan`, `gajih_pokok`, `tunjangan`) VALUES
(1, 2, '2019-06-20', 5000, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'guru ipa'),
(2, 'guru ips'),
(3, 'guru matematika'),
(4, 'ipa'),
(6, 'ewss'),
(7, 'sasa'),
(8, 'dfdff'),
(13, 'guru olahraga'),
(14, 'guru agama'),
(15, 'guru agama'),
(17, 'tetst'),
(18, 'tetst'),
(19, 'asas'),
(20, 'sa'),
(24, 'sas'),
(25, 'test3'),
(26, 'asasa'),
(27, 'rrr'),
(28, 'rrrr'),
(31, 'dssds'),
(32, 'fdfd'),
(33, 'sas'),
(35, 'sas'),
(36, 'asas'),
(37, 'tets'),
(38, 'sas'),
(39, 'sasa'),
(40, 'sds'),
(41, 'asas'),
(42, 'asas'),
(43, 'asas'),
(44, 'sasa'),
(45, 'sas'),
(46, 'sas'),
(47, 'asa 123'),
(49, 'sdsd'),
(50, 'sasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
  `status_kerja` varchar(10) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `gajih_pokok` int(11) NOT NULL,
  `tanggal_gajian` date NOT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `tanggal_masuk`, `status_pernikahan`, `status_kerja`, `tunjangan`, `gajih_pokok`, `tanggal_gajian`, `jabatan_id`) VALUES
(2, '12121', 'dede', '2019-06-27', 'laki-laki', 'islam', 'mataram', '2323232', '2019-06-27', 'belum kawi', 'tetap', 50000, 60000, '2019-06-11', 1),
(3, '2323', 'rud', '2019-06-11', 'perempuan', 'islam', 'jl                                                        ', '4454545', '2019-06-12', 'kawin', 'tetap', 40000, 49999, '2019-06-19', 1),
(4, '1222', 'siapa', '2019-06-14', 'perempuan', 'hindu', 'sdsds', '434343', '2019-06-01', 'kawin', 'sdsd', 2000, 2000, '2019-06-11', 14),
(5, '3232s', 'mas', '2019-06-21', 'laki-laki', 'islam', 'js ewewe', '43434s', '2019-06-18', 'kawin', 'wewew', 20000, 20000, '2019-06-20', 1),
(6, '434', 'ewew', '2019-06-18', 'perempuan', 'islam', 'sasas', 'wewewe', '2019-06-27', 'belum kawi', 'dsds', 10000, 20000, '2019-06-18', 3),
(7, '12121', 'azmi', '2019-06-10', 'perempuan', 'islam', 'dsdsd                                                                                                                                            ', 'sds', '2019-06-14', 'kawin', 'sdsd', 10000, 100, '2019-06-04', 1),
(8, '545454545', 'azzmi', '2019-06-14', 'perempuan', 'islam', 'jjj', '08889888', '2019-04-21', 'kawin', 't', 60, 60, '2019-06-21', 1),
(10, '99999999', 'azba', '2019-06-22', 'perempuan', 'islam', 'jl.xxxx                                                        ', '09900090990', '2019-04-22', 'kawin', 'Tetap', 600000, 400000, '2019-06-29', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slip_gajih`
--

CREATE TABLE `slip_gajih` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_gajih` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slip_gajih`
--

INSERT INTO `slip_gajih` (`id`, `tanggal`, `total_gajih`, `potongan`, `pegawai_id`) VALUES
(8, '2019-06-21 16:49:18', 110000, 1000, 2);

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
  ADD KEY `gajih_id` (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gajih`
--
ALTER TABLE `gajih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slip_gajih`
--
ALTER TABLE `slip_gajih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `slip_gajih`
--
ALTER TABLE `slip_gajih`
  ADD CONSTRAINT `slip_gajih_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
