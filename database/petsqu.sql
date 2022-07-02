-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 07:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsqu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_nama` varchar(55) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `admin_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_password`) VALUES
(1, 'petsqu', 'petsqu@gmail.com', '6c04142b7a532d43ffc127cf55bc9027');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(2) NOT NULL,
  `brand_nama` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_nama`) VALUES
(1, 'Royal Canin'),
(2, 'Whiskas'),
(3, 'Me-O'),
(4, 'Felibite');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(2) NOT NULL,
  `pelanggan_nama` varchar(55) NOT NULL,
  `pelanggan_email` varchar(55) NOT NULL,
  `pelanggan_phone` varchar(13) NOT NULL,
  `pelanggan_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_email`, `pelanggan_phone`, `pelanggan_password`) VALUES
(1, 'Lukman Nur Hakim', 'lukmanhkm@gmail.com', '087748333522', '667f236df65d9cc53e97f280a27734b9'),
(2, 'user1', 'user1@gmail.com', '0812345678901', '24c9e15e52afc47c225b757e7bee1f9d');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(2) NOT NULL,
  `produk_brand` int(2) NOT NULL,
  `produk_nama` varchar(55) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_berat` int(2) NOT NULL,
  `produk_deskripsi` longtext NOT NULL,
  `produk_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_brand`, `produk_nama`, `produk_harga`, `produk_berat`, `produk_deskripsi`, `produk_foto`) VALUES
(1, 1, 'Ultra Light', 150000, 1, 'The Royal Canin Ultra Light food has been specially formulated for all cats that are obese or in general just need to lose some weight. This formula food in 1kg pack will help you to reduce the calorie intake of your cats by 9% and hence prevent various health issues related to obesity.\r\n', '1336253044_produk-1.jpg'),
(2, 2, 'Junior Ocean Fish With Milk', 70000, 1, 'WHISKAS Junior 2-12 months, is well formulated for kittens aged 2-12 months. This product is also good for cats who are pregnant and breastfeeding:\r\n\r\n-100% contains complete and balanced nutrition with 41 essential nutrients.\r\n\r\n-Containing milk contained in the contents of a small bag, good for its growth period', '378677529_produk-2.jpg'),
(3, 2, ' Adult 7+ Senior Mackerel', 70000, 1, 'At 7 years old, your cats may not look or act much differently, but their nutritional needs have changed. For example, their digestive system is not as strong as it used to be, so their ability to absorb nutrients weaken. Help them transition to WHISKAS Adult 7+, specially formulated to postpone the effects of old age.', '1204488030_produk-3.jpg'),
(4, 3, 'Kitten Food Ocean Fish', 55000, 1, 'Me-O Cat food is formulated to meet or surpass the nutritional levels established by the US National Resarch Council (NRC) and the association of American Feed Control Officials (AAFCO) for cats.', '1960829997_produk-4.jpg'),
(6, 1, 'Hair & Skin Care', 290000, 2, 'Royal Canin Hair & Skin Dry Cat Food is an apt diet for cats which are having sensitive skin & poor coat condition. The balanced nutrition plays a significant role in skin cell renewal and supports healthy skin and coat. ', '1313983456_produk-5.jpg'),
(7, 4, 'Dry Cat Food', 25000, 1, 'Felibite diperkaya dengan omega 3 & 6 untuk pertumbuhan bulu kucing, Taurine sebagai pengelihatan mata yang tajam, Vit C untuk menjaga kekebalan tubuh, Yucca extract mecegah kotoran kucing agar tidak bau.\r\n', '2126292672_produk-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(2) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_pelanggan` int(2) NOT NULL,
  `transaksi_produk` int(2) NOT NULL,
  `transaksi_status` int(2) NOT NULL,
  `transaksi_alamat` varchar(255) DEFAULT NULL,
  `transaksi_kota` varchar(55) DEFAULT NULL,
  `transaksi_kodepos` varchar(6) DEFAULT NULL,
  `transaksi_jumlah` int(2) NOT NULL,
  `transaksi_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
