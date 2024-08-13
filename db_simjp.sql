-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2023 at 08:26 AM
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
-- Database: `db_simjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `tgl`, `id_pegawai`, `ket`) VALUES
(12, '2023-03-02', 3, 'HADIR'),
(13, '2023-03-02', 1, 'HADIR'),
(14, '2023-03-02', 4, 'ALPHA'),
(15, '2023-03-01', 1, 'HADIR'),
(16, '2023-03-01', 3, 'HADIR'),
(17, '2023-03-01', 4, 'HADIR'),
(18, '2023-03-01', 5, 'HADIR'),
(19, '2023-03-01', 6, 'HADIR'),
(20, '2023-03-01', 7, 'HADIR'),
(21, '2023-03-01', 10, 'HADIR'),
(22, '2023-03-01', 11, 'HADIR'),
(23, '2023-03-03', 1, 'HADIR'),
(24, '2023-03-04', 1, 'TELAT'),
(25, '2023-03-06', 1, 'HADIR'),
(26, '2023-03-07', 1, 'HADIR'),
(27, '2023-03-08', 1, 'IZIN'),
(28, '2023-03-09', 1, 'HADIR'),
(29, '2023-03-10', 1, 'HADIR'),
(30, '2023-03-11', 1, 'HADIR'),
(31, '2023-03-13', 1, 'HADIR');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(20) NOT NULL,
  `berat` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `berat`, `harga`, `ket`) VALUES
(1, '1kg ', '50000', '-'),
(2, '5kg', '90000', '-'),
(3, '10kg', '120000', '-'),
(4, '15kg', '180000', '-'),
(5, '30kg', '200000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengiriman`
--

CREATE TABLE `detail_pengiriman` (
  `id` int(20) NOT NULL,
  `resi` int(20) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pengiriman`
--

INSERT INTO `detail_pengiriman` (`id`, `resi`, `lokasi`, `status`, `waktu`) VALUES
(1, 4, 'Banjarmasin', 'Proses Packing', '2023-03-02 10:23:35'),
(2, 4, 'Banjarbaru', 'Proses Pengantaran', '2023-03-02 10:23:35'),
(3, 4, 'Pelaihari', 'Telah Sampai ke Penerima', '2023-03-02 10:23:35'),
(4, 6, 'Banjarmasin', 'Proses Packing', '2023-03-02 10:23:35'),
(5, 4, 'test', 'test', '2023-03-02 10:24:34'),
(6, 4, 'test2', 'test2', '2023-03-02 10:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `gajih`
--

CREATE TABLE `gajih` (
  `id` int(20) NOT NULL,
  `pegawai` int(20) NOT NULL,
  `gaji` varchar(250) NOT NULL,
  `tunjangan` varchar(250) NOT NULL,
  `bonus` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gajih`
--

INSERT INTO `gajih` (`id`, `pegawai`, `gaji`, `tunjangan`, `bonus`, `total`, `ket`) VALUES
(1, 3, '9000000', '0', '0', '9000000', '-'),
(2, 1, '2500000', '100000', '0', '2600000', '-'),
(3, 4, '2800000', '0', '0', '2800000', '-'),
(4, 5, '1800000', '0', '0', '1800000', '-'),
(5, 6, '2000000', '0', '500000', '2500000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jarak`
--

CREATE TABLE `jarak` (
  `id` int(20) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jarak`
--

INSERT INTO `jarak` (`id`, `asal`, `tujuan`, `harga`, `ket`) VALUES
(1, 'Banjarmasin', 'Pelaihari', '50000', '-'),
(2, 'Banjarmasin', 'Kapuas', '100000', '-'),
(3, 'Banjarmasin', 'Palangkaraya', '120000', '-'),
(4, 'Banjarmasin', 'Banjarbaru', '50000', '-'),
(5, 'Banjarmasin', 'Barabai', '80000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gaji` varchar(250) NOT NULL,
  `no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `jabatan`, `tgl_lahir`, `jk`, `agama`, `alamat`, `email`, `gaji`, `no`) VALUES
(1, '00120319', 'Fajrin', 'Admin', '2022-06-01', 'Laki laki', 'Islam', 'Jln Pangeran Antasari', 'bryan@gmail.com', '3200000', '082251577493'),
(3, '00020418', 'Udin', 'kurir', '2022-05-30', 'Islam', 'Laki', 'Jln Belitung', 'aldi@gmail.com', '3200000', '082626262'),
(4, '00310216', 'Nazaruddin', 'Operasional', '2022-05-30', 'Islam', 'Laki', 'Jln Kayutangi', 'naz@gmail.com', '3200000', '08222121222'),
(5, '01129382', 'Siti Aminah', 'Operasional', '1996-06-04', 'Islam', 'Perempuan', 'Jln Belitung', 'siti@gmail.com', '3200000', '081342536627'),
(6, '01928398', 'Bella Sari', 'kurir', '1998-02-02', 'Islam', 'Perempuan', 'Jl Pangeran Antasari', 'bella@gmail.com', '3200000', '0822515226374'),
(7, '09283746', 'Zulkarnain', 'kurir', '1998-02-02', 'Islam', 'Laki laki', 'Jl Pangeran Antasari', 'zulkar@gmail.com', '3200000', '0822515226374'),
(10, '02938472', 'Bahrun', 'kurir', '2022-05-30', 'Islam', 'Laki', 'Jln Belitung', 'aldi@gmail.com', '3200000', '082626262'),
(11, '02938472', 'Harun', 'kurir', '2022-05-30', 'Islam', 'Laki', 'Jln Belitung', 'aldi@gmail.com', '3200000', '082626262');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(20) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `nik`, `alamat`, `kota`, `no`) VALUES
(1, 'Karyo', '032902839892', 'Jln Tungkap', 'Barabai', '082261522435'),
(2, 'Jailuddin', '923828398293', 'Jln Trikora', 'Banjarbaru', '08152438836'),
(3, 'Siti Fatimah', '364728374635', 'Jln Sungai Andai', 'Banjarmasin', '0837463354'),
(4, 'Hairuddin', '09120910921', 'Jln Sunga Andai', 'Banjarmasin', '0815263562532'),
(5, 'Khairunnisa', '2398923892', 'Jln Tungkap', 'Banjarmasin', '0872637463');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukkan`
--

CREATE TABLE `pemasukkan` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `bayar` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukkan`
--

INSERT INTO `pemasukkan` (`id`, `tgl`, `jumlah`, `bayar`, `ket`) VALUES
(1, '2023-02-17', '150000', 'transfer', '-'),
(2, '2023-02-15', '250000', 'transfer', 'Pengiriman Ke Kapuas'),
(3, '2023-02-18', '300000', 'cash', 'Pengiriman ke Palangkaraya'),
(4, '2023-02-10', '120000', 'cash', 'Pengiriman Ke Banjarbaru'),
(5, '2023-02-11', '150000', 'cash', 'Pengiriman Ke Banjarbaru');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `bayar` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tgl`, `jumlah`, `bayar`, `ket`) VALUES
(1, '2023-02-17', '150000', 'transfer', '-'),
(2, '2023-02-11', '230000', 'cash', 'Beli Kursi Kerja'),
(3, '2023-02-11', '100000', 'cash', 'Isi Bensin Pick Up'),
(4, '2023-02-12', '50000', 'cash', 'Tambal Ban Pick Up'),
(5, '2023-02-18', '100000', 'transfer', 'Ganti Oli Mesin Pick Up');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(20) NOT NULL,
  `resi` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `pengirim` int(20) NOT NULL,
  `no_pengirim` varchar(250) NOT NULL,
  `penerima` varchar(250) NOT NULL,
  `no_penerima` varchar(250) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `berat` varchar(250) NOT NULL,
  `jarak` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `kurir` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `resi`, `tanggal`, `pengirim`, `no_pengirim`, `penerima`, `no_penerima`, `tujuan`, `berat`, `jarak`, `total`, `kurir`) VALUES
(4, '1904577193', '2023-02-10', 1, '0811625366253', 'Haji', '083263524362', 'jln jskdj', '1kg - 5kg', 'Banjarmasin - Pelaihari', '100000', 3),
(5, '293829389', '2023-02-08', 4, '085536253362', 'Karyo', '08263265162', 'Jln Kayutangi', '1kg - 5kg', 'Banjarmasin - Pelaihari', '100000', 6),
(6, '2387695037', '2023-02-22', 3, '08134253362', 'Denis', '082281722263', 'Jln Belitung', '1kg - 5kg', 'Banjarmasin - Pelaihari', '150000', 3),
(7, '9564337801', '2023-02-22', 5, '08134253362', 'Sinta', '082281722263', 'Jln Pangeran', '10kg', 'Banjarmasin - Kapuas', '220000', 10),
(8, '5615705877', '2023-02-10', 2, '08134253362', 'Cecep', '082281722263', 'Jln Belitung', '30kg', 'Banjarmasin - Palangkaraya', '320000', 6),
(12, '1608667028', '2023-03-24', 4, '08134253362', 'Denis', '082281722263', 'Kapuas', '12', 'Banjarmasin - Kapuas', '1200000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_pegawai`, `username`, `password`, `level`) VALUES
(3, 5, 'aminah', '123', 'pegawai'),
(5, 3, 'udin', '123', 'kurir'),
(6, 4, 'nazar', '123', 'pegawai'),
(7, 1, 'admin', 'admin', 'admin'),
(8, 6, 'bella', '123', 'kurir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resi` (`resi`);

--
-- Indexes for table `gajih`
--
ALTER TABLE `gajih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai` (`pegawai`);

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengirim` (`pengirim`),
  ADD KEY `kurir` (`kurir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gajih`
--
ALTER TABLE `gajih`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  ADD CONSTRAINT `detail_pengiriman_ibfk_1` FOREIGN KEY (`resi`) REFERENCES `pengiriman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gajih`
--
ALTER TABLE `gajih`
  ADD CONSTRAINT `gajih_ibfk_1` FOREIGN KEY (`pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`pengirim`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`kurir`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
