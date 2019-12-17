-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 04:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(4) NOT NULL,
  `Jenis` varchar(20) NOT NULL,
  `Judul` varchar(50) DEFAULT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `Jenis`, `Judul`, `Keterangan`) VALUES
(1, 'visi', NULL, 'Menjadikan Kudus Karya Inti Megah menjadi perusahaan yang unggul dalam bidangnya, Serta mampu bersaing secara global.'),
(2, 'misi', NULL, 'Mendapatkan prioritas di hati pelanggan dengan cara memberikan layanan yang maksimal yang bertanggung jawab, Inovatif, Kreatif, dan Profesional.'),
(3, 'misi', NULL, 'Selalu mengutamakan kualitas ketepatan waktu, serta harga yang kompetitif.'),
(4, 'misi', NULL, 'Menciptakan suasana yang harmonis dalam perusahaan dan menjalin hubungan yang harmonis dengan customer.'),
(5, 'misi', NULL, 'Memberikan kepuasan kepada pelanggan melalui penyelesaian proyek yang berkualitas tinggi, sesuai anggaran dan dalam waktu yang di sepakati. Besar biaya pengerjaan sangat relaif tergantung tipe atau luas dan spesifikasi material yang akan di gunakan, kami siap mewujudkan keinginan Bapak/Ibu sesuai dengan budget yang Bapak/Ibu sediakan.'),
(6, 'prinsip', 'PEKERJA', 'Dengan pekerja yang berpengalaman dan profesional, kami dapat memberikan pelayanan yang terbaik untuk anda.'),
(7, 'prinsip', 'KERJA SAMA', 'Dengan kerja sama yang tinggi, maka pembangunan yang dikerjakan dapat selesai dengan tepat waktu. '),
(8, 'prinsip', 'PELAYANAN', 'Kepuasan anda adalah prioritas bagi kami.'),
(9, 'prinsip', 'INTEGRITAS', 'Semua pekerja kami, mempunyai integritas yang sangat tinggi.'),
(10, 'prinsip', 'KUALITAS', 'Harga terjangkau dengan kualitas yang mampu bersaing secara global.'),
(11, 'prinsip', 'KETEKUNAN', 'Rata-rata, para pekerja kami sudah di tanami dengan sistem tekun.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(8) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'intimegah', 'intimegah4321');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(8) NOT NULL,
  `Nama_Gallery` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Urutan` int(8) DEFAULT NULL,
  `Tampil` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Nama_Gallery`, `Keterangan`, `Urutan`, `Tampil`) VALUES
(1, '1.jpg', 'Ini foto 1', 1, 'Y'),
(2, '2.jpg', 'Ini foto 2', 2, 'Y'),
(3, '3.jpg', 'Ini foto 3', 3, 'Y'),
(4, '4.jpg', 'Ini foto 4', 4, 'Y'),
(5, '5.jpg', 'Ini foto 5', 5, 'Y'),
(6, '6.jpg', 'Ini foto 6', 6, 'Y'),
(7, '7.jpg', 'Ini foto 7', 7, 'Y'),
(8, '8.jpg', 'Ini foto 8', 8, 'Y'),
(9, '9.jpg', 'Ini foto 9', 9, 'Y'),
(10, '10.jpg', 'Ini foto 10', NULL, 'N'),
(11, '11.jpg', 'Ini foto 11', NULL, 'N'),
(12, '12.jpg', 'Ini foto 12', NULL, 'N'),
(13, '13.jpg', 'Ini foto 13', NULL, 'N'),
(20, '14.jpg', 'Ini foto 14', NULL, 'N'),
(21, '15.jpg', 'Ini foto 15', NULL, 'N'),
(22, '16.jpg', 'Ini foto 16', NULL, 'N'),
(23, '17.jpg', 'Ini foto 17', NULL, 'N'),
(24, '18.jpg', 'Ini foto 18', NULL, 'N'),
(25, '19.jpg', 'Ini foto 19', NULL, 'N'),
(26, '20.jpg', 'Ini foto 20', NULL, 'N'),
(27, '21.jpg', 'Ini foto 21', NULL, 'N'),
(28, '22.jpg', 'Ini foto 22', NULL, 'N'),
(29, '23.jpg', 'Ini foto 23', NULL, 'N'),
(30, '24.jpg', 'Ini foto 24', NULL, 'N'),
(31, '25.jpg', 'Ini foto 25', NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `Id` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Recommended` char(1) NOT NULL DEFAULT 'N',
  `Keterangan` text NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`Id`, `Nama`, `Recommended`, `Keterangan`, `Gambar`) VALUES
(1, 'Jam A', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam1.jpg'),
(2, 'Jam B', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam2.jpg'),
(3, 'Jam C', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam3.jpg'),
(4, 'Jam D', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam4.jpg'),
(5, 'Jam E', 'Y', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam5.jpg'),
(6, 'Jam F', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam6.jpg'),
(7, 'Jam G', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam7.jpg'),
(8, 'Jam H', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam8.jpg'),
(9, 'Jam I', 'Y', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam9.jpg'),
(10, 'Jam J', 'N', 'Jam ini dibuat dengan bahan impor dengan kualitas terbaik', 'Jam10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `Id` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(255) NOT NULL,
  `Keterangan` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`Id`, `Nama`, `Email`, `Subjek`, `Keterangan`, `Tanggal`) VALUES
(1, 'Ferry', 'ferryyuno@gmail.com', 'Pembangunan rumah A', 'asdgshdj gsad asd cgayc acusa c yasyus sgduy dud uyas dgyuacgcyas cu c sagcugcyuas cua cyu gcyas gcyas cyas cias casco ascg asyc yiascac asu c cyua ca cyascyuag cuysa gca cas ciascgiusacuas cxbx ysx ysgbshwicasichsakcsa c yascysa cysgcac oashojdpasd c hsaohcacasashdsaf', '2019-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `Id` int(4) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Urutan` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`Id`, `Judul`, `Keterangan`, `Urutan`) VALUES
(1, 'Jasa Pembangunan', 'Kepuasan anda adalah prioritas kami.', 1),
(2, 'Produk', 'Berbagai macam barang yang di jual juga variatif.', 2),
(3, 'Konsultasi', 'Kami dapat memberikan solusi yang terbaik untuk pembangunan anda.', 3),
(4, 'Kelengkapan', 'Segala sesuatu mengenai pembangunan kami punya semuanya.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `Id` int(8) NOT NULL,
  `Jenis_Rumah` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Ukuran` varchar(20) NOT NULL,
  `Kamar` int(2) NOT NULL,
  `Kamar_Mandi` int(2) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Urutan` int(1) DEFAULT NULL,
  `Tampil` char(1) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`Id`, `Jenis_Rumah`, `Alamat`, `Ukuran`, `Kamar`, `Kamar_Mandi`, `Keterangan`, `Urutan`, `Tampil`, `Gambar`) VALUES
(1, 'Rumah A', 'cascjsjcas casocjsos', '4 x 9', 2, 3, 'Kepuasan anda adalah prioritas kami.', 2, 'Y', '1.jpg'),
(2, 'Rumah B', 'Harapan Indah, balalallaa baalallalala skskskks', '4 x 9', 2, 2, '2121212', 3, 'Y', '2.jpg'),
(3, 'Rumah C', 'Harapan Indah, balalallaa baalallalala skskskks', '4 x 9', 2, 2, 'sasjadkajlkdjskladjklas dsj dsa jdoisa jd sdoisadoi jsa da dsajdsadsja', 1, 'Y', '3.jpg'),
(4, 'Rumah D', 'Harapan Indah, balalallaa baalallalala skskskks', '4 x 9', 2, 2, 'sasjadkajlkdjskladjklas dsj dsa jdoisa jd sdoisadoi jsa da dsajdsadsja', 4, 'Y', '4.jpg'),
(5, 'Rumah E', 'Harapan Indah, balalallaa baalallalala skskskks', '4 x 9', 2, 2, 'sasjadkajlkdjskladjklas dsj dsa jdoisa jd sdoisadoi jsa da dsajdsadsja', NULL, 'N', '5.jpg'),
(7, 'Rumah F', 'Hajasjcasjc cshaiucha i cuhacui uisach uahcuisa', '4 x 3', 2, 3, 'caskcpcpc  cash cua ch cuia ci ic', NULL, 'N', '6.jpg'),
(8, 'Rumah G', 'dsahdsh hcuxc  us ha sahdd iiaoppp ajajjsksksk', '4 x 9', 5, 7, 'sasjadkajlkdjskladjklas dsj dsa jdoisa jd sdoisadoi jsa da dsajdsadsja', NULL, 'N', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rebana`
--

CREATE TABLE `rebana` (
  `Id` int(8) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL,
  `Gambar_1` varchar(255) DEFAULT NULL,
  `Gambar_2` varchar(255) DEFAULT NULL,
  `Gambar_3` varchar(255) DEFAULT NULL,
  `Gambar_4` varchar(255) DEFAULT NULL,
  `Gambar_5` varchar(255) DEFAULT NULL,
  `Gambar_6` varchar(255) DEFAULT NULL,
  `Gambar_7` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rebana`
--

INSERT INTO `rebana` (`Id`, `Nama_Barang`, `Keterangan`, `Gambar_1`, `Gambar_2`, `Gambar_3`, `Gambar_4`, `Gambar_5`, `Gambar_6`, `Gambar_7`) VALUES
(1, 'Rebana', 'Rebana ini dibuat dengan bahan tanah liat dengan kualitas terbaik dengan menggunakan bahan kulit yang sangat berkualitas.', 'rebana1.jpg', 'rebana5.jpg', 'rebana4.jpg', 'rebana6.jpg', 'rebana7.jpg', 'rebana8.jpg', 'rebana9.jpg'),
(3, 'Bedug', 'Bedug ini dibuat dengan bahan tanahliat yang kualitas terbaik dengan menggunakan bahan kulit yang sangat berkualitas.', 'rebana2.jpg', 'rebana10.jpg', 'rebana12.jpg', 'rebana15.jpg', 'rebana21.jpg', 'rebana22.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `Id` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Recommended` char(1) NOT NULL DEFAULT 'N',
  `Keterangan` text NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`Id`, `Nama`, `Recommended`, `Keterangan`, `Gambar`) VALUES
(1, 'Sepatu A', 'Y', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaikdengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu1.jpg'),
(2, 'Sepatu B', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu2.jpg'),
(3, 'Sepatu C', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu3.jpg'),
(4, 'Sepatu D', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu4.jpg'),
(5, 'Sepatu E', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu5.jpg'),
(6, 'Sepatu F', 'Y', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaikdengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu6.jpg'),
(7, 'Sepatu G', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu7.jpg'),
(8, 'Sepatu H', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu8.jpg'),
(9, 'Sepatu I', 'N', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu9.jpg'),
(10, 'Sepatu J', 'Y', 'Sepatu ini dibuat dengan bahan impor dengan kualitas terbaik\r\ndengan menggunakan bahan kulit yang sangat berkualitas.', 'sepatu10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `Id` int(2) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Keterangan` varchar(512) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`Id`, `Nama`, `Keterangan`, `Gambar`) VALUES
(1, 'Daffa Prayoga Purwanto', 'ndaskna casichsi  cascshac hasi hcusa hcgcsayd gsaudysad', '1.jpg'),
(2, 'Ferry', 'dasjdsjk hd sah cgcsaicgysai dhsadhsa icbcasiuchisach sa saudh ashdsia', '2.jpg'),
(3, 'Mike Wazowski', 'ndaskna casichsi  cascshac hasi hcusa hcgcsayd gsaudysad', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Urutan` (`Urutan`);

--
-- Indexes for table `rebana`
--
ALTER TABLE `rebana`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rebana`
--
ALTER TABLE `rebana`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
