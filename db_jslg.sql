-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2019 pada 03.22
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jslg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_alumni`
--

CREATE TABLE `ms_alumni` (
  `id_alumni` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `nama_alumni` varchar(255) NOT NULL,
  `angkatan_alumni` varchar(4) NOT NULL,
  `instansi_alumni` varchar(255) NOT NULL,
  `foto_alumni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_batch`
--

CREATE TABLE `ms_batch` (
  `id_batch` int(11) NOT NULL,
  `nama_batch` varchar(255) NOT NULL,
  `id_diklat` int(11) NOT NULL,
  `deskripsi_batch` varchar(255) NOT NULL,
  `upl_csv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_diklat`
--

CREATE TABLE `ms_diklat` (
  `id_diklat` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_penyelenggara` int(11) NOT NULL,
  `id_narasumber` int(11) NOT NULL,
  `nama_diklat` varchar(255) NOT NULL,
  `tanggal_diklat` datetime NOT NULL,
  `id_silabus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_kategori_produk`
--

CREATE TABLE `ms_kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `nama_kategori_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_kategori_produk`
--

INSERT INTO `ms_kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`) VALUES
(1, 'tes2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_narasumber`
--

CREATE TABLE `ms_narasumber` (
  `id_narasumber` int(11) NOT NULL,
  `nama_narasumber` varchar(255) NOT NULL,
  `nik_narasumber` int(16) NOT NULL,
  `npwp_narasumber` int(20) NOT NULL,
  `tempat_lahir_narasumber` varchar(60) NOT NULL,
  `tanggal_lahir_narasumber` date NOT NULL,
  `jenis_kelamin_narasumber` enum('L','P') NOT NULL,
  `alamat_narasumber` text NOT NULL,
  `email_narasumber` varchar(255) NOT NULL,
  `keahlian_narasumber` text NOT NULL,
  `portofolio_narasumber` varchar(255) NOT NULL,
  `pendidikan_s1_narasumber` varchar(150) NOT NULL,
  `pendidikan_s2_narasumber` varchar(150) NOT NULL,
  `pendidikan_s3_narasumber` varchar(150) NOT NULL,
  `status_verifikasi_narasumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_penyelenggara`
--

CREATE TABLE `ms_penyelenggara` (
  `id_penyelenggara` int(11) NOT NULL,
  `nama_penyelenggara` varchar(255) NOT NULL,
  `email_penyelenggara` varchar(255) NOT NULL,
  `telp_penyelenggara` varchar(20) NOT NULL,
  `bidang_usaha_penyelenggara` varchar(255) NOT NULL,
  `deskripsi_penyelenggara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_permohonan_narasumber`
--

CREATE TABLE `ms_permohonan_narasumber` (
  `id_permohonan_ns` int(11) NOT NULL,
  `id_narasumber` int(11) NOT NULL,
  `file_permohonan` varchar(255) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `status_permohonan` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_peserta`
--

CREATE TABLE `ms_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_diklat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik_peserta` int(16) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `tempat_lahir_peserta` varchar(60) NOT NULL,
  `tanggal_lahir_peserta` date NOT NULL,
  `jenis_kelamin_peserta` enum('L','P') NOT NULL,
  `alamat_peserta` text NOT NULL,
  `email_peserta` varchar(255) NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `jabatan_peserta` varchar(255) NOT NULL,
  `pendidikan_peserta` varchar(255) NOT NULL,
  `telp_peserta` varchar(20) NOT NULL,
  `status_alumni_peserta` enum('Yes','No','InTraining') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_produk`
--

CREATE TABLE `ms_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `img_produk` varchar(255) NOT NULL,
  `harga_diskon` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_produk`
--

INSERT INTO `ms_produk` (`id_produk`, `id_kategori_produk`, `nama_produk`, `img_produk`, `harga_diskon`) VALUES
(2, 1, 'ug', 'vy', '500000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_sertificate`
--

CREATE TABLE `ms_sertificate` (
  `id_sertificate` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `template_sertificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_silabus`
--

CREATE TABLE `ms_silabus` (
  `id_silabus` int(11) NOT NULL,
  `id_narasumber` int(11) NOT NULL,
  `nama_silabus` varchar(255) NOT NULL,
  `file_materi_silabus` varchar(255) NOT NULL,
  `id_quiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_tempat`
--

CREATE TABLE `ms_tempat` (
  `id_tempat` int(11) NOT NULL,
  `id_diklat` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `lokasi_maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_user`
--

CREATE TABLE `ms_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('super_admin','narasumber','peserta') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_alumni`
--
ALTER TABLE `ms_alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `id_batch` (`id_batch`);

--
-- Indexes for table `ms_batch`
--
ALTER TABLE `ms_batch`
  ADD PRIMARY KEY (`id_batch`),
  ADD KEY `id_diklat` (`id_diklat`);

--
-- Indexes for table `ms_diklat`
--
ALTER TABLE `ms_diklat`
  ADD PRIMARY KEY (`id_diklat`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_penyelenggara` (`id_penyelenggara`),
  ADD KEY `id_narasumber` (`id_narasumber`),
  ADD KEY `id_silabus` (`id_silabus`);

--
-- Indexes for table `ms_kategori_produk`
--
ALTER TABLE `ms_kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `ms_narasumber`
--
ALTER TABLE `ms_narasumber`
  ADD PRIMARY KEY (`id_narasumber`);

--
-- Indexes for table `ms_penyelenggara`
--
ALTER TABLE `ms_penyelenggara`
  ADD PRIMARY KEY (`id_penyelenggara`);

--
-- Indexes for table `ms_permohonan_narasumber`
--
ALTER TABLE `ms_permohonan_narasumber`
  ADD PRIMARY KEY (`id_permohonan_ns`),
  ADD KEY `id_narasumber` (`id_narasumber`);

--
-- Indexes for table `ms_peserta`
--
ALTER TABLE `ms_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_diklat` (`id_diklat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ms_produk`
--
ALTER TABLE `ms_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori_produk` (`id_kategori_produk`);

--
-- Indexes for table `ms_sertificate`
--
ALTER TABLE `ms_sertificate`
  ADD PRIMARY KEY (`id_sertificate`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `ms_silabus`
--
ALTER TABLE `ms_silabus`
  ADD PRIMARY KEY (`id_silabus`);

--
-- Indexes for table `ms_tempat`
--
ALTER TABLE `ms_tempat`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `id_diklat` (`id_diklat`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_alumni`
--
ALTER TABLE `ms_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_batch`
--
ALTER TABLE `ms_batch`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_diklat`
--
ALTER TABLE `ms_diklat`
  MODIFY `id_diklat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_kategori_produk`
--
ALTER TABLE `ms_kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ms_narasumber`
--
ALTER TABLE `ms_narasumber`
  MODIFY `id_narasumber` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_penyelenggara`
--
ALTER TABLE `ms_penyelenggara`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_permohonan_narasumber`
--
ALTER TABLE `ms_permohonan_narasumber`
  MODIFY `id_permohonan_ns` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_peserta`
--
ALTER TABLE `ms_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_produk`
--
ALTER TABLE `ms_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ms_sertificate`
--
ALTER TABLE `ms_sertificate`
  MODIFY `id_sertificate` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_silabus`
--
ALTER TABLE `ms_silabus`
  MODIFY `id_silabus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_tempat`
--
ALTER TABLE `ms_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ms_alumni`
--
ALTER TABLE `ms_alumni`
  ADD CONSTRAINT `ms_alumni_ibfk_1` FOREIGN KEY (`id_batch`) REFERENCES `ms_batch` (`id_batch`);

--
-- Ketidakleluasaan untuk tabel `ms_batch`
--
ALTER TABLE `ms_batch`
  ADD CONSTRAINT `ms_batch_ibfk_1` FOREIGN KEY (`id_diklat`) REFERENCES `ms_diklat` (`id_diklat`);

--
-- Ketidakleluasaan untuk tabel `ms_diklat`
--
ALTER TABLE `ms_diklat`
  ADD CONSTRAINT `ms_diklat_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ms_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_diklat_ibfk_2` FOREIGN KEY (`id_penyelenggara`) REFERENCES `ms_penyelenggara` (`id_penyelenggara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_diklat_ibfk_3` FOREIGN KEY (`id_narasumber`) REFERENCES `ms_narasumber` (`id_narasumber`),
  ADD CONSTRAINT `ms_diklat_ibfk_4` FOREIGN KEY (`id_silabus`) REFERENCES `ms_silabus` (`id_silabus`);

--
-- Ketidakleluasaan untuk tabel `ms_permohonan_narasumber`
--
ALTER TABLE `ms_permohonan_narasumber`
  ADD CONSTRAINT `ms_permohonan_narasumber_ibfk_1` FOREIGN KEY (`id_narasumber`) REFERENCES `ms_narasumber` (`id_narasumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ms_peserta`
--
ALTER TABLE `ms_peserta`
  ADD CONSTRAINT `ms_peserta_ibfk_1` FOREIGN KEY (`id_diklat`) REFERENCES `ms_diklat` (`id_diklat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_peserta_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `ms_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ms_produk`
--
ALTER TABLE `ms_produk`
  ADD CONSTRAINT `ms_produk_ibfk_1` FOREIGN KEY (`id_kategori_produk`) REFERENCES `ms_kategori_produk` (`id_kategori_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ms_sertificate`
--
ALTER TABLE `ms_sertificate`
  ADD CONSTRAINT `ms_sertificate_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `ms_peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ms_tempat`
--
ALTER TABLE `ms_tempat`
  ADD CONSTRAINT `ms_tempat_ibfk_1` FOREIGN KEY (`id_diklat`) REFERENCES `ms_diklat` (`id_diklat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
