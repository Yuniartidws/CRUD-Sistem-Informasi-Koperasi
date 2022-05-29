-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 18.01
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nik` bigint(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(9) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pekerjaan` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET utf16 DEFAULT NULL,
  `no_hp` char(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `simpan` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  `pinjaman` varchar(16) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_user`, `username`, `password`, `nama`, `nik`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `no_hp`, `simpan`, `pinjaman`) VALUES
(1, 'member1', 'member1', 'Tasya Farasya', 3275076601211284, '1993-12-23', 'Perempuan', 'Guru', 'Jl. Cikeuting RT 02 RW 09', '081288202918', '120000', '200000'),
(2, 'member2', 'member2', 'Ayana', 3275070001211222, '1998-06-05', 'Perempuan', 'Wirausaha', 'Jl. Cikeuting RT 02 RW 07', '085881877615', '220000', ''),
(3, 'member3', 'member3', 'Jinan', 32750700012112333, '1994-02-07', 'Laki-Laki', 'Wirausaha', 'Perumahan Kota Wisata Blok A 12', '081388202912', '220000', ''),
(4, 'member4', 'member4', 'Rendi', 32643700012112342, '1990-05-03', 'Laki-Laki', 'Wirausaha', 'Perumahan Griya Alam Sentosa RT 02 RW 07', '083812849321', '220000', ''),
(5, 'member5', 'member5', 'Shofi', 31643700018622342, '1993-04-12', 'Perempuan', 'Karyawan Swasta', 'Perumahan Griya Alam Sentosa RT 03 RW 07', '089512849387', '220000', ''),
(6, 'member6', 'member6', 'Eka', 32743700018622921, '1992-04-18', 'Perempuan', 'Karyawan Swasta', 'Perumahan Griya Alam Sentosa RT 02 RW 07', '081212849311', '220000', ''),
(7, 'member7', 'member7', 'Aska', 32743722218622342, '1994-05-01', 'Laki-Laki', 'Karyawan Swasta', 'Perumahan Griya Alam Sentosa RT 03 RW 07', '085512849387', '165000', ''),
(8, 'member8', 'member8', 'Hanbin', 32694332118622325, '1997-10-22', 'Laki-Laki', 'Wirausaha', 'Perumahan Kota Wisata Cluster Blok B 01', '081233599311', '220000', ''),
(9, 'member9', 'member9', 'Chanwoo', 32750760611113211, '1993-01-22', 'Laki-Laki', 'Wirausaha', 'Perum Kota Wisata Blok AA 1', '08127653215', '220000', NULL),
(10, 'member10', 'member10', 'Bobby', 32694334328622325, '1997-12-21', 'Laki-Laki', 'Wirausaha', 'Perum Kota Wisata Blok C 02', '085881899012', '220000', NULL),
(11, 'member11', 'member11', 'June', 32745334328622325, '1997-03-31', 'Laki-Laki', 'Wirausaha', 'Perum Kota Wisata Blok C 04', '085991899022', '220000', NULL),
(12, 'member12', 'member12', 'Annisa Shofia', 3275076066321874, '1997-11-27', 'Perempuan', 'Guru', 'Perum Griya Alam Sentosa', '081265073426', '165000', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE IF NOT EXISTS `koperasi` (
  `id_user` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `simpanan` int(20) NOT NULL,
  `pinjaman` int(20) NOT NULL,
  `ambil_simpanan` int(20) NOT NULL,
  `bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koperasi`
--

INSERT INTO `koperasi` (`id_user`, `username`, `nama`, `tgl`, `simpanan`, `pinjaman`, `ambil_simpanan`, `bayar`) VALUES
('1', 'member1', 'Tasya Farasya', '2021-03-04', 50000, 0, 0, 0),
('1', 'member1', 'Tasya Farasya', '2021-04-04', 50000, 0, 0, 0),
('1', 'member1', 'Tasya Farasya', '2021-05-04', 50000, 0, 0, 0),
('1', 'member1', 'Tasya Farasya', '2021-06-04', 50000, 0, 0, 0),
('2', 'member2', 'Ayana', '2021-03-04', 50000, 0, 0, 0),
('2', 'member2', 'Ayana', '2021-04-04', 50000, 0, 0, 0),
('2', 'member2', 'Ayana', '2021-05-04', 50000, 0, 0, 0),
('2', 'member2', 'Ayana', '2021-06-04', 50000, 0, 0, 0),
('3', 'member3', 'Jinan', '2021-04-04', 50000, 0, 0, 0),
('3', 'member3', 'Jinan', '2021-03-04', 50000, 0, 0, 0),
('3', 'member3', 'Jinan', '2021-05-04', 50000, 0, 0, 0),
('4', 'member4', 'Rendi', '2021-03-04', 50000, 0, 0, 0),
('4', 'member4', 'Rendi', '2021-04-04', 50000, 0, 0, 0),
('4', 'member4', 'Rendi', '2021-05-04', 50000, 0, 0, 0),
('4', 'member4', 'Rendi', '2021-06-04', 50000, 0, 0, 0),
('5', 'member5', 'Shofi', '2021-03-04', 50000, 0, 0, 0),
('5', 'member5', 'Shofi', '2021-04-04', 50000, 0, 0, 0),
('5', 'member5', 'Shofi', '2021-05-04', 50000, 0, 0, 0),
('5', 'member5', 'Shofi', '2021-06-04', 50000, 0, 0, 0),
('6', 'member6', 'Eka', '2021-03-04', 50000, 0, 0, 0),
('6', 'member6', 'Eka', '2021-04-04', 50000, 0, 0, 0),
('6', 'member6', 'Eka', '2021-05-04', 50000, 0, 0, 0),
('6', 'member6', 'Eka', '2021-06-04', 50000, 0, 0, 0),
('7', 'member7', 'Aska', '2021-03-04', 50000, 0, 0, 0),
('7', 'member7', 'Aska', '2021-04-04', 50000, 0, 0, 0),
('7', 'member7', 'Aska', '2021-05-04', 50000, 0, 0, 0),
('8', 'member8', 'Hanbin', '2021-03-04', 50000, 0, 0, 0),
('8', 'member8', 'Hanbin', '2021-04-04', 50000, 0, 0, 0),
('8', 'member8', 'Hanbin', '2021-05-04', 50000, 0, 0, 0),
('8', 'member8', 'Hanbin', '2021-06-04', 50000, 0, 0, 0),
('9', 'member9', 'Chanwoo', '2021-03-04', 50000, 0, 0, 0),
('9', 'member9', 'Chanwoo', '2021-04-04', 50000, 0, 0, 0),
('9', 'member9', 'Chanwoo', '2021-05-04', 50000, 0, 0, 0),
('9', 'member9', 'Chanwoo', '2021-06-04', 50000, 0, 0, 0),
('10', 'member10', 'Bobby', '2021-03-04', 50000, 0, 0, 0),
('10', 'member10', 'Bobby', '2021-04-04', 50000, 0, 0, 0),
('10', 'member10', 'Bobby', '2021-05-04', 50000, 0, 0, 0),
('10', 'member10', 'Bobby', '2021-06-04', 50000, 0, 0, 0),
('11', 'member11', 'June', '2021-03-04', 50000, 0, 0, 0),
('11', 'member11', 'June', '2021-04-04', 50000, 0, 0, 0),
('11', 'member11', 'June', '2021-05-04', 50000, 0, 0, 0),
('11', 'member11', 'June', '2021-06-04', 50000, 0, 0, 0),
('12', 'member12', 'Annisa Shofia', '2021-03-04', 50000, 0, 0, 0),
('12', 'member12', 'Annisa Shofia', '2021-04-04', 50000, 0, 0, 0),
('12', 'member12', 'Annisa Shofia', '2021-05-04', 50000, 0, 0, 0),
('3', 'member3', 'Jinan', '2021-06-04', 50000, 0, 0, 0),
('1', 'member1', 'Tasya Farasya', '2021-06-06', 0, 0, 100000, 0),
('1', 'member1', 'Tasya Farasya', '2021-06-06', 0, 500000, 0, 0),
('1', 'member1', 'Tasya Farasya', '2021-06-29', 0, 0, 0, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hak_akses` varchar(8) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`, `hak_akses`) VALUES
('', 'dsda', 'addadaa', 'adadad', 'Member'),
('ID001', 'admin', 'admin', 'Admin', 'Admin'),
('ID0010', 'member9', 'member9', 'Hanbin', 'Member'),
('ID0011', 'member10', 'member10', 'June', 'Member'),
('ID002', 'member1', 'member1', 'Tasya A', 'Member'),
('ID003', 'member2', 'member2', 'Ayana', 'Member'),
('ID004', 'member3', 'member3', 'Jinan', 'Member'),
('ID005', 'member4', 'member4', 'Rendi', 'Member'),
('ID006', 'member5', 'member5', 'Shofi', 'Member'),
('ID007', 'member6', 'member6', 'Eka', 'Member'),
('ID008', 'member7', 'member7', 'Aska', 'Member'),
('ID009', 'member8', 'member8', 'Clara', 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_peg` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1109 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nama`, `ttl`, `alamat`) VALUES
(1101, 'Yuniarti Dewi', '2000-06-05', 'Jl. Pangkalan 8 Cikeuting RT 02 RW 07'),
(1102, 'Desy', '1993-12-23', 'Griya Alam Sentosa'),
(1103, 'Shafa', '1996-04-02', 'Griya Alam Sentosa'),
(1104, 'Riestania', '1998-01-26', 'Perumahan Kota Wisata Blok A 1 No. 10'),
(1105, 'Ranti', '1995-06-05', 'Perum Kota Wisata Blok BB 1'),
(1107, 'Tia', '1998-06-03', 'Perum Taman Rahayu'),
(1108, 'Larissa', '1997-06-05', 'Perum Taman Rahayu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
