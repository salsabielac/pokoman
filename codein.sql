-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11 Jul 2017 pada 03.13
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codein`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_user`
--

CREATE TABLE `c_user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `c_user`
--

INSERT INTO `c_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'ivan', '2c42e5cf1cdbafea04ed267018ef1511'),
(3, 'ivan', '2c42e5cf1cdbafea04ed267018ef1511'),
(4, 'ivan', '2c42e5cf1cdbafea04ed267018ef1511'),
(5, 'abel', '4a8a08f09d37b73795649038408b5f33'),
(6, 'cabela', '202cb962ac59075b964b07152d234b70'),
(7, 'cabela', '202cb962ac59075b964b07152d234b70'),
(8, 'ely', '487f3ba54ebe6bd564f333870902437d'),
(9, 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(10, 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(12, 'salsabielac', '202cb962ac59075b964b07152d234b70'),
(13, 'cabel', '64a748ffccd9e8bd885752bd28f005c9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE `ekstra` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telephone` int(15) NOT NULL,
  `class` varchar(5) NOT NULL,
  `ekstra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id`, `name`, `address`, `email`, `username`, `password`, `telephone`, `class`, `ekstra`) VALUES
(16, 'salsabiela cahyahaq', 'Jalan Tanjung Raya 28', 'salsabiela_c@yahoo.com', '', '', 2147483647, '2F', 'basket'),
(17, 'devira', 'tanjung raya', 'devirarn@gmail.com', '', '', 8888888, '2f', 'band'),
(18, 'ely', 'tanjung raya', 'elys@gmail.com', '', '', 88888888, '2f', 'band'),
(19, 'q', 'q', 'q@ww', '', '', 2147483647, '2F', 'band');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(30, 'i1.jpg'),
(32, 'uluwatu2.jpg'),
(36, 'lombok2.jpg'),
(37, 'lombok.jpg'),
(42, 'exel_1.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `photo`) VALUES
(4, '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktm`
--

CREATE TABLE `ktm` (
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktm`
--

INSERT INTO `ktm` (`nama`, `nim`, `ttl`, `jurusan`, `alamat`, `id`) VALUES
('Salsabiela Cahyahaq', 1541180066, 'Madiun, 8 September 1996', 'Teknik Informatika', 'Jalan Tanjung Raya', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tanggal`, `alamat`, `foto`) VALUES
(1, 'Salsabiela Cahyahaq', 1541180066, '1996-09-08', 'Madiun, Jawa Timur', 'IMG201607070838382.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstra`
--

CREATE TABLE `tb_ekstra` (
  `id_ekskul` int(100) NOT NULL,
  `fk_siswa` int(100) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ekstra`
--

INSERT INTO `tb_ekstra` (`id_ekskul`, `fk_siswa`, `nama_ekskul`) VALUES
(1, 2, 'voli'),
(2, 1, 'makankrupuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(50) NOT NULL,
  `n_kegiatan` varchar(100) NOT NULL,
  `d_kegiatan` text NOT NULL,
  `img_kegi` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `n_kegiatan`, `d_kegiatan`, `img_kegi`, `tgl`) VALUES
(1, 'Ngetes', 'Saja', '15941465_1525490917481021_7898886090675631499_n.jpg', '2017-07-11'),
(4, 'Pokoman', 'Pokoman Apps', 'IMG_9626.JPG', '2017-07-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(100) NOT NULL,
  `nis` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `telp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `password`, `fullname`, `email`, `address`, `kelas`, `telp`) VALUES
(1, 1234, '81dc9bdb52d04dc20036dbd8313ed055', 'Ivan Fadila Putra', 'i.fadilaputra@gmail.com', 'LUL', '2f', 2147483647),
(2, 1, 'c4ca4238a0b923820dcc509a6f75849b', 'Salsabiela Cahyahaq', 'i.ganteng@gmail.com', 'a', '2f', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'abel', 'a6cd39ee5b1d8276f6bc716b3f7881'),
(4, 'tes', '28b662d883b6d76fd96e4ddc5e9ba7'),
(10, 'a', '0cc175b9c0f1b6a831c399e2697726');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `plans` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `address`, `email`, `telephone`, `destination`, `plans`) VALUES
(1, 'salsabiela cahyahaq', 'madiun', 'salsabiela_c@yahoo.com', 2147483647, 'ubud', 'KNLAKhsIOha'),
(5, 'devira', 'madiun', 'kakkakkakakakakk', 928767, 'lombok', 'kjdhfsk'),
(8, 'Ely Susilorini', 'Madiun', 'elys@gmail.com', 2147483647, 'ubud', 'saya ingin wisata'),
(9, 'ara', 'Malang', 'lalala', 9876, 'Lombok', 'Lalalalla'),
(10, 'Cabela', 'Madiun', 'salsabiela@gmail.com', 81222222, 'Ubud', 'Liburan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_user`
--
ALTER TABLE `c_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm`
--
ALTER TABLE `ktm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  ADD PRIMARY KEY (`id_ekskul`),
  ADD KEY `fk_siswa` (`fk_siswa`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_user`
--
ALTER TABLE `c_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ktm`
--
ALTER TABLE `ktm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  MODIFY `id_ekskul` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  ADD CONSTRAINT `tb_ekstra_ibfk_1` FOREIGN KEY (`fk_siswa`) REFERENCES `tb_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
