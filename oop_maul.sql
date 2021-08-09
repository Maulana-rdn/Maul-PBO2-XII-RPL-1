-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2021 pada 05.31
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_maul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jns_kel` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` char(1) NOT NULL,
  `mulai_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jns_kel`, `tgl_lahir`, `status`, `mulai_kerja`) VALUES
(12345678, 'Dede Hartono', 'L', '1987-07-25', 'M', '2016-07-25'),
(87654321, 'Alfian Hidayat', 'L', '1986-07-25', 'M', '2008-07-25'),
(112345678, 'Ahmad Sudarajat', 'L', '1983-07-07', 'M', '2003-07-09'),
(122345678, 'Irfan Maulana', 'L', '1991-07-23', 'M', '2018-07-13'),
(33345678, 'Teguh Maulana', 'L', '1980-03-03', 'M', '2001-06-08'),
(22345678, 'Dedi Kurnia', 'L', '1982-05-05', 'M', '2001-03-10'),
(55345678, 'Saepudin', 'L', '1997-03-16', 'B', '2012-04-14'),
(62345678, 'Deni Pangale', 'L', '1989-12-24', 'B', '2011-09-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
