-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 07:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemparkiritb`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `nama`, `kapasitas`) VALUES
(1, 'Zona 1', 500),
(2, 'Zona 2', 500),
(3, 'Zona 3', 450),
(4, 'Zona 4', 350),
(5, 'Zona 5', 200),
(6, 'Zona 6', 200),
(7, 'Zona 7', 450),
(8, 'Zona 8', 500),
(9, 'Parkir Mahasiswa', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `datapelanggaran`
--

CREATE TABLE `datapelanggaran` (
  `id` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `barcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapelanggaran`
--

INSERT INTO `datapelanggaran` (`id`, `id_jenis`, `barcode`) VALUES
(1, 1, '44257927754549653094'),
(2, 2, '98967829257701624600');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `id_area` int(11) NOT NULL,
  `noplat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `nohp`, `id_area`, `noplat`) VALUES
('12314', 'Sulis', '0835029020', 2, 'B6547TRF'),
('12345', 'Dr. Jamil', '0817236454', 1, 'D123ABC'),
('12346', 'Ir. Bermawi', '0896634323', 2, 'D123ABD'),
('12347', 'Prof. Iskandar', '0815234909', 3, 'D123ABF'),
('12348', 'Ir. Anas', '0841033676', 4, 'D123ABG'),
('12349', 'Dr. Nara', '0840032909', 5, 'D435ABC'),
('13410', 'Prof. Ir. Susi', '0839032121', 6, 'D987ABC'),
('13411', 'Luki', '0838031353', 7, 'D876ABD'),
('13412', 'Amar', '0837030575', 8, 'F6781BG'),
('13413', 'Indah', '0836029808', 1, 'B7864GT'),
('23455', 'Neta', '0834028252', 3, 'D7658RFD'),
('23457', 'Ir. Mungkar', '0833027474', 4, 'D2341RFS'),
('23459', 'Dr. Nakir', '0832026707', 5, 'D123RFS'),
('34569', 'Prof. Ridwan', '0836029808', 6, 'D9012RFS'),
('45691', 'Intan', '0832026700', 7, 'D1230RFS');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `noplat` varchar(10) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`noplat`, `merk`, `jenis`, `warna`, `kelas`) VALUES
('B0972THY', 'March', 'Mobil', 'Silver', 'Tamu'),
('B1997HUT', 'Mio', 'Motor', 'Hitam', 'Mahasiswa'),
('B1998ABC', 'Honda Jazz', 'Mobil', 'Hitam', 'Mahasiswa'),
('B2409RFS', 'Toyota Etios', 'Mobil', 'Silver', 'Tamu'),
('B2679RFS', 'Honda Beat', 'Motor', 'Hijau', 'Umum'),
('B6547TRF', 'Daihatsu Xenia', 'Mobil', 'Putih', 'Staff Dosen'),
('B7864GT', 'Avanza', 'Mobil', 'Silver', 'Staff Dosen'),
('B7891RFS', 'Daihatsu Xenia', 'Motor', 'Biru', 'Umum'),
('B8210YRS', 'Yamaha Mio', 'Mobil', 'Silver', 'Tamu'),
('B8709QTX', 'Toyota Fortuner', 'Mobil', 'Silver', 'Tamu'),
('B9876RTF', 'Honda Beat', 'Motor', 'Merah', 'Umum'),
('BG1230ITR', 'Honda Jazz', 'Mobil', 'Silver', 'Umum'),
('D1189FLO', 'Daihatsu Xenia', 'Mobil', 'Silver', 'Umum'),
('D1230RFS', 'Mitsubishi Outlander', 'Mobil', 'Silver', 'Staff Dosen'),
('D1231GUY', 'Agya', 'Mobil', 'Hitam', 'Mahasiswa'),
('D1234ART', 'Daihatsu Ayla', 'Mobil', 'Biru', 'Mahasiswa'),
('D123ABC', 'Avanza', 'Mobil', 'Hitam', 'Staff Dosen'),
('D123ABD', 'Agya', 'Mobil', 'Putih', 'Staff Dosen'),
('D123ABF', 'Toyota Camry', 'Mobil', 'Silver', 'Staff Dosen'),
('D123ABG', 'March', 'Mobil', 'Putih', 'Staff Dosen'),
('D123AFR', 'March', 'Mobil', 'Putih', 'Mahasiswa'),
('D123RFS', 'Toyota Yaris', 'Mobil', 'Putih', 'Staff Dosen'),
('D123RTS', 'Honda Beat', 'Motor', 'Merah', 'Mahasiswa'),
('D1289JES', 'Avanza', 'Mobil', 'Silver', 'Umum'),
('D156ITZ', 'Honda Revo', 'Motor', 'Biru', 'Mahasiswa'),
('D1897ABU', 'Daihatsu Ayla', 'Mobil', 'Silver', 'Umum'),
('D1956TYU', 'Yamaha Mio', 'Motor', 'Biru', 'Umum'),
('D2341RFS', 'Honda Jazz', 'Mobil', 'Silver', 'Staff Dosen'),
('D2769QUV', 'Nissan Grand Livina', 'Mobil', 'Silver', 'Tamu'),
('D435ABC', 'Brio', 'Mobil', 'Putih', 'Staff Dosen'),
('D4597ABH', 'Nissan Juke', 'Mobil', 'Silver', 'Tamu'),
('D678YUT', 'Karimun Wagon', 'Mobil', 'Hitam', 'Mahasiswa'),
('D7096RFS', 'Mazda CX-3', 'Mobil', 'Putih', 'Tamu'),
('D7209DBJ', 'Daihatsu Xenia', 'Mobil', 'Silver', 'Tamu'),
('D755OIP', 'Brio', 'Mobil', 'Putih', 'Mahasiswa'),
('D7658RFD', 'Mobilio', 'Mobil', 'Putih', 'Staff Dosen'),
('D769RFT', 'Toyota Rush', 'Mobil', 'Hitam', 'Tamu'),
('D8712ITC', 'Xenia', 'Mobil', 'Silver', 'Mahasiswa'),
('D876ABD', 'Daihatsu Ayla', 'Mobil', 'Putih', 'Staff Dosen'),
('D9012RFS', 'Honda CR-V', 'Mobil', 'Putih', 'Staff Dosen'),
('D904PRF', 'Datsu Go+ ', 'Mobil', 'Hitam', 'Mahasiswa'),
('D9214RTF', 'Datsu Go+ ', 'Mobil', 'Silver', 'Tamu'),
('D986QRS', 'Mobilio', 'Mobil', 'Hitam', 'Mahasiswa'),
('D9876UYT', 'Honda Vario', 'Motor', 'Merah', 'Mahasiswa'),
('D987ABC', 'Datsu Go+ ', 'Mobil', 'Silver', 'Staff Dosen'),
('F6781BG', 'Karimun Wagon', 'Mobil', 'Putih', 'Staff Dosen'),
('F8926UTR', 'Mobilio', 'Mobil', 'Silver', 'Umum'),
('Z7892YT', 'Honda Supra GTR ', 'Motor', 'Biru', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `logparkir`
--

CREATE TABLE `logparkir` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_area` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `noplat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `nohp`, `noplat`) VALUES
('12613098', 'Huki', '0835029025', 'D156ITZ'),
('12815098', 'Nurmala', '0834028250', 'D986QRS'),
('13013101', 'Gideon', '0838031350', 'D1234ART'),
('13112091', 'Panji', '0832026700', 'B1997HUT'),
('13114006', 'Gion', '0839032125', 'D904PRF'),
('13314002', 'Darius', '0896634324', 'D1231GUY'),
('13413098', 'Jansen', '0837030575', 'D678YUT'),
('13414001', 'James', '0817236451', 'D123RTS'),
('13415056', 'Rizky', '0833027475', 'B1998ABC'),
('13514003', 'Dora', '0815234901', 'D8712ITC'),
('16213098', 'Kristen', '0836029800', 'D9876UYT'),
('16514005', 'Elritta', '0840032900', 'D755OIP'),
('16714004', 'Efraim', '0841033675', 'D123AFR');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `jenis`, `tarif`) VALUES
(1, 'Menginap', 20000),
(2, 'Parkir Sembrono', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_area` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `id_area` int(11) NOT NULL,
  `noplat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nohp`, `id_area`, `noplat`) VALUES
('161492969465538', '0835029025', 2, 'D9214RTF'),
('178871229781944', '0836029800', 1, 'B8210YRS'),
('196249490098350', '0837030575', 8, 'B0972THY'),
('213627750414756', '0838031350', 7, 'B2409RFS'),
('231006010731162', '0839032125', 6, 'B8709QTX'),
('248384271047568', '0840032900', 5, 'D2769QUV'),
('265762531363974', '0841033675', 4, 'D7209DBJ'),
('283140791680380', '0815234901', 3, 'D4597ABH'),
('300519051996786', '0896634324', 2, 'D769RFT'),
('317897312313192', '0817236451', 1, 'D7096RFS');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `barcode` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`barcode`, `tanggal`, `kelas`, `total`) VALUES
('09220776921157890196', '2017-05-05', 'Mahasiswa', 0),
('10049815286373985107', '2017-05-05', 'Umum', 0),
('44257927754549653094', '2017-05-04', 'Mahasiswa', 29000),
('57853343060356430875', '2017-05-05', 'Tamu', 0),
('98967829257701624600', '2017-05-05', 'Staff Dosen', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_dosen`
--

CREATE TABLE `transaksi_dosen` (
  `id` int(11) NOT NULL,
  `barcode` varchar(25) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_dosen`
--

INSERT INTO `transaksi_dosen` (`id`, `barcode`, `nip`, `jam_masuk`, `jam_keluar`) VALUES
(1, '98967829257701624600', '12345', '22:56:35', '23:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_mahasiswa`
--

CREATE TABLE `transaksi_mahasiswa` (
  `id` int(11) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_mahasiswa`
--

INSERT INTO `transaksi_mahasiswa` (`id`, `barcode`, `nim`, `jam_masuk`, `jam_keluar`) VALUES
(1, '44257927754549653094', '12815098', '23:02:00', '22:31:08'),
(2, '09220776921157890196', '13114006', '22:33:09', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_tamu`
--

CREATE TABLE `transaksi_tamu` (
  `id` int(11) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `id_pengenal` varchar(30) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_tamu`
--

INSERT INTO `transaksi_tamu` (`id`, `barcode`, `id_pengenal`, `jam_masuk`, `jam_keluar`) VALUES
(1, '57853343060356430875', '161492969465538', '22:53:43', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_umum`
--

CREATE TABLE `transaksi_umum` (
  `id` int(11) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `id_umum` int(11) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_umum`
--

INSERT INTO `transaksi_umum` (`id`, `barcode`, `id_umum`, `jam_masuk`, `jam_keluar`) VALUES
(4, '10049815286373985107', 1, '23:10:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id` int(11) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `noplat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id`, `nohp`, `noplat`) VALUES
(1, '0896634324', 'D1897ABU'),
(2, '0815234901', 'D1956TYU'),
(3, '0841033675', 'D1289JES'),
(4, '0840032900', 'D1189FLO'),
(5, '0839032125', 'F8926UTR'),
(6, '0838031350', 'BG1230ITR'),
(7, '0837030575', 'Z7892YT'),
(8, '0836029800', 'B9876RTF'),
(9, '0835029025', 'B2679RFS'),
(10, '0834028250', 'B7891RFS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapelanggaran`
--
ALTER TABLE `datapelanggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `noplat` (`noplat`),
  ADD KEY `id_area` (`id_area`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`noplat`);

--
-- Indexes for table `logparkir`
--
ALTER TABLE `logparkir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `noplat` (`noplat`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `noplat` (`noplat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `transaksi_dosen`
--
ALTER TABLE `transaksi_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_2` (`barcode`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `transaksi_mahasiswa`
--
ALTER TABLE `transaksi_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_2` (`barcode`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `transaksi_tamu`
--
ALTER TABLE `transaksi_tamu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_2` (`barcode`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `id_pengenal` (`id_pengenal`);

--
-- Indexes for table `transaksi_umum`
--
ALTER TABLE `transaksi_umum`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_2` (`barcode`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `id_umum` (`id_umum`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noplat` (`noplat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `datapelanggaran`
--
ALTER TABLE `datapelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logparkir`
--
ALTER TABLE `logparkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_dosen`
--
ALTER TABLE `transaksi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi_mahasiswa`
--
ALTER TABLE `transaksi_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi_tamu`
--
ALTER TABLE `transaksi_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi_umum`
--
ALTER TABLE `transaksi_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapelanggaran`
--
ALTER TABLE `datapelanggaran`
  ADD CONSTRAINT `datapelanggaran_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `pelanggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datapelanggaran_ibfk_2` FOREIGN KEY (`barcode`) REFERENCES `transaksi` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logparkir`
--
ALTER TABLE `logparkir`
  ADD CONSTRAINT `logparkir_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `tamu_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tamu_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_dosen`
--
ALTER TABLE `transaksi_dosen`
  ADD CONSTRAINT `transaksi_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_dosen_ibfk_2` FOREIGN KEY (`barcode`) REFERENCES `transaksi` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_mahasiswa`
--
ALTER TABLE `transaksi_mahasiswa`
  ADD CONSTRAINT `transaksi_mahasiswa_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `transaksi` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_mahasiswa_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_tamu`
--
ALTER TABLE `transaksi_tamu`
  ADD CONSTRAINT `transaksi_tamu_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `transaksi` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_tamu_ibfk_2` FOREIGN KEY (`id_pengenal`) REFERENCES `tamu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_umum`
--
ALTER TABLE `transaksi_umum`
  ADD CONSTRAINT `transaksi_umum_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `transaksi` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_umum_ibfk_2` FOREIGN KEY (`id_umum`) REFERENCES `umum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umum`
--
ALTER TABLE `umum`
  ADD CONSTRAINT `umum_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
