-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 13.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catatan_pasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(30) DEFAULT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`) VALUES
(1, 'Hanagki Takemichi', '3567499227292', 'Laki-laki', 'Surabaya', '2000-07-11', 'Jl. Gunung Anyar', '897645272'),
(2, 'Uzumaki Naruto', '325642657656', 'Laki-laki', 'Konoha', '2000-02-02', 'Ds. Pohon', '896757678'),
(3, 'Salsa', '312347583778', 'Perempuan', 'Bojonegoro', '1999-10-11', 'dsn. bojonegoro', '0876545676');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(3) NOT NULL,
  `nama_pegawai` varchar(30) DEFAULT NULL,
  `nip` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `password`) VALUES
(1, 'Namanya Admin', '12345', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psn_keluar`
--

CREATE TABLE `psn_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kondisi_keluar` enum('Sembuh','Belum Sembuh','Meninggal Dunia') NOT NULL,
  `status_keluar` enum('Dipulangkan','Pulang Paksa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `psn_keluar`
--

INSERT INTO `psn_keluar` (`id_keluar`, `id_pasien`, `tgl_keluar`, `kondisi_keluar`, `status_keluar`) VALUES
(1, 1, '2021-06-30', 'Sembuh', 'Dipulangkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psn_masuk`
--

CREATE TABLE `psn_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `diagnosa` varchar(20) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `psn_masuk`
--

INSERT INTO `psn_masuk` (`id_masuk`, `id_pasien`, `id_ruangan`, `tgl_masuk`, `diagnosa`, `status`) VALUES
(1, 1, 13, '2021-06-20', 'Sesak Nafas', 'off'),
(4, 2, 23, '2021-05-26', 'Kritis', 'on'),
(5, 3, 15, '2021-05-17', 'Tipes', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `no_ruangan` varchar(10) NOT NULL,
  `status` enum('Diisi','Kosong') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `no_ruangan`, `status`) VALUES
(1, 'IRNA 01', 'Kosong'),
(2, 'IRNA 02', 'Kosong'),
(3, 'IRNA 03', 'Kosong'),
(4, 'IRNA 04', 'Kosong'),
(5, 'IRNA 05', 'Kosong'),
(6, 'IRNA 06', 'Kosong'),
(7, 'IRNA 07', 'Kosong'),
(8, 'IRNA 08', 'Kosong'),
(9, 'IRNA 09', 'Kosong'),
(10, 'IRNA 10', 'Kosong'),
(11, 'IRNA 11', 'Kosong'),
(12, 'IRNA 12', 'Kosong'),
(13, 'IGD 01', 'Kosong'),
(14, 'IGD 02', 'Kosong'),
(15, 'IGD 03', 'Diisi'),
(16, 'IGD 04', 'Kosong'),
(17, 'IGD 05', 'Kosong'),
(18, 'IGD 06', 'Kosong'),
(19, 'IGD 07', 'Kosong'),
(20, 'IGD 08', 'Kosong'),
(21, 'IGD 09', 'Kosong'),
(22, 'IGD 10', 'Kosong'),
(23, 'UGD 01', 'Diisi'),
(24, 'UGD 02', 'Kosong'),
(25, 'UGD 03', 'Kosong'),
(26, 'UGD 04', 'Kosong'),
(27, 'UGD 05', 'Kosong'),
(28, 'UGD 06', 'Kosong'),
(29, 'UGD 07', 'Kosong'),
(30, 'UGD 08', 'Kosong');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `psn_keluar`
--
ALTER TABLE `psn_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pasien_2` (`id_pasien`);

--
-- Indeks untuk tabel `psn_masuk`
--
ALTER TABLE `psn_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pasien_2` (`id_pasien`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `psn_keluar`
--
ALTER TABLE `psn_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `psn_masuk`
--
ALTER TABLE `psn_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `psn_keluar`
--
ALTER TABLE `psn_keluar`
  ADD CONSTRAINT `psn_keluar_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel `psn_masuk`
--
ALTER TABLE `psn_masuk`
  ADD CONSTRAINT `psn_masuk_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `psn_masuk_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
