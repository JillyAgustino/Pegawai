-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 06.37
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pegawai`
--
CREATE DATABASE IF NOT EXISTS `pegawai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pegawai`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_kantor`
--

CREATE TABLE IF NOT EXISTS `pegawai_kantor` (
  `NIP` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(35) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai_kantor`
--

INSERT INTO `pegawai_kantor` (`NIP`, `Nama`, `Jabatan`, `Jenis_kelamin`, `Alamat`) VALUES
(167537, 'Yunnus', 'Sekertaris 5', 'Laki-Laki', 'Gubug'),
(192762, 'Agusti', 'Kepala Kantor', 'Laki-Laki', 'Tinanding'),
(192763, 'Wulan Sus', 'Sekertaris', 'Perempuan', 'Semarang'),
(390202, 'Budi Seyto', 'Seksi', 'Laki-Laki', 'Kudus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
