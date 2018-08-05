-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 02:00 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momecake`
--
CREATE DATABASE IF NOT EXISTS `momecake` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `momecake`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_transaksi` char(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_transaksi`, `username`, `buyer`, `date`, `product`, `qty`, `price`) VALUES
('TR20180804021508', 'bo123', 'bondan', '2018-08-04', 'Kue Bolu Tape', 1, 45000),
('TR20180804021508', 'bo123', 'bondan', '2018-08-04', 'Kue Bolu Pisang', 1, 45000),
('TR20180804021508', 'bo123', 'bondan', '2018-08-04', 'Kue Bolu Ketan', 1, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `summary`, `price`, `image`) VALUES
(1, 'Kue Bolu Kopi', 'Kue ini terbuat dari kopi pilihan yang berkualitas. Tidak hanya minuman nya yang menyegarkan, kue ini membuat semangat menjalankan kegiatan. Bagi pecinta kopi, wajib untuk coba kue ini.', 45000, 'kopi.jpg'),
(2, 'Kue Bolu Tape', 'Kue ini merupakan kue berbahan dasar tape yang khas dicampur dengan manisnya kue bolu membuat kue cocok untuk menjadi teman minum teh di sore hari.', 45000, 'tape1.jpg'),
(3, 'Kue Bolu Mix Cokelat', 'Kue ini merupakan kue yang memiliki dua rasa yaitu rasa original bolu dan rasa cokelat. Bagi yang tidak terlalu suka manis dapat mencoba kue bolu yang satu ini.', 45000, 'mix.jpg'),
(4, 'Kue Bolu Cokelat', 'Kue yang memiliki varian yang banyak digunakan sebagai bahan dasar kue yaitu cokelat. Perpaduan rasa cokelat yang manis dengan bolu yang lembut membuat kue ini sangat disukai.', 45000, 'cokelat2.jpg'),
(5, 'Kue Bolu Ketan', 'Untuk kue bolu ini merupakan kue yang berbahan dasar yaitu ketan hitam. Kue bolu ini memiliki ciri khas yaitu warna nya yang hitam, walaupun warna nya kurang menarik namun rasa bolu ini sangat enak dan lembut.', 45000, 'ketann.jpg'),
(6, 'Kue Bolu Pisang', 'Kue yang berbahan dasar pisang ini merupakan kue yang cocok dijadikan cemilan dengan rasa khas dari pisang itu sendiri dan rasa dari kue bolu.', 45000, 'pisang2.jpg'),
(7, 'Tiramisu Cake', 'Kue yang berasal dari negara Italia dengan taburan bubuk kakao diatas nya yang memiliki tekstur yang sangat lembut dan halus. Perpaduan antara rasa kopi dan keju membuat kue ini banyak disukai oleh kalangan masyarakat.', 70000, 'tiramisu2.jpg'),
(8, 'Blackforest Cake', 'Kue ini adalah jenis kue khas Jerman yang terbuat dari bolu coklat yang dilapisi krim, serutan coklat dan buah cherry yang membuat tampilan kue ini menarik dan rasanya yang enak.', 70000, 'bf2.jpg'),
(9, 'Strawberry Cake', 'Kue ini dipadukan dengan buah strawberry yang memiliki cita rasa yang khas dari negeri Amerika yang diberi krim, serta ditaburi buah strawberry yang membuat rasa ini semakin lezat.', 70000, 'strawberry2.jpg'),
(10, 'Kue Sagu Keju', 'Kue Sagu Keju ini merupakan kue yang berbahan dasar keju dan sagu yang ketika dimakan keju nya meleleh di mulut. Tekstur nya yang sangat lembut membuat tidak bisa berhenti memakan kue ini.', 50000, 'sagu.jpg'),
(11, 'Kue Putri Salju', 'Sesuai dengan namanya, kue ini mirip dengan salju-salju yang biasanya terdapat di negara subtropis. Ya! Kue ini berbahan dasar kacang tanah ataupun kacang mede yang berkualitas dan diberikan topping gula halus sehingga diberi nama Kue Putri Salju.', 55000, 'salju.jpg'),
(12, 'Kue Nastar', 'Lebaran tanpa kue yang satu ini, rasanya seperti ada yang kurang. Ya! kue nastar ini merupakan kue yang harus ada di setiap lebaran, kue ini dibungkus dengan selai nanas pilihan di dalamnya. Untuk yang menyukai keju, bisa ditambahkan keju sebagai toppingn', 55000, 'nastar.jpg'),
(13, 'Kue Lidah Kucing', 'Kue Lidah Kucing ini merupakan kue yang mirip dengan lidah kucing berbentuk panjang dan tipis. Kue yang berbahan dasar putih telur ini sangat cocok dijadikan cemilan, karena bentuknya yang tipis kue ini sangat renyah dan meleleh ketika dimakan.', 55000, 'lidah.jpg'),
(14, 'Kue Kastengel', 'Kue Keju atau biasa disebut dengan Kue Kastangel, kue ini merupakan kue yang berbahan dasar keju dan ditaburi lagi dengan topping keju sehingga membuat para penyuka keju wajib untuk mencoba kue yang satu ini. Untuk kejunya, momecake menggunakan Keju Kraft', 60000, 'keju.jpg'),
(15, 'Kue Cokelat', 'Kue coklat merupakan salah satu kue terfavorit sepanjang lebaran. Sesuai dengan namanya, kue ini berbahan dasar coklat dan ditaburi dengan chocochip yang sangat berkualitas sehingga membuat rasa coklatnya semakin enak. Untuk penyuka coklat wajib banget co', 55000, 'coklat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `address`, `no_tlp`) VALUES
(1, 'Rahma Indah', 'admin', 'rhmaindah13@gmail.com', 'admin', '', ''),
(2, 'Indah', 'rhmaindah', 'indah123@gmail.com', 'rhma13', '', ''),
(3, 'ghina', 'ghngnr', 'gege01@gmail.com', '$2y$10$sT9ofU.vLEHtXPkjUY5BTOBlEB4e8SXRTqZQmFk5wurjlUNhYrGuu', 'bogor', '081867890872'),
(4, 'bondan', 'bo123', 'bon123@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', 'jakarta', '089812722879'),
(5, 'indah', 'indah12', 'indah@yahoo.com', 'c3ec0f7b054e729c5a716c8125839829', 'jakarta', '08987719822'),
(6, 'Rahma Indah Safitri', 'rhma13IS', 'rhmaindah13@gmail.com', '0192023a7bbd73250516f069df18b500', 'jakarta', '081807222067'),
(7, 'ghina', 'ghngnr', 'gege01@gmail.com', '202cb962ac59075b964b07152d234b70', 'bogor', '087897623321'),
(8, 'Firman Budi Safrizal', 'frmnjn', 'firmanbudis@gmail.com', 'dea56e47f1c62c30b83b70eb281a6c39', 'Komplek Polri Nagrak Blok D94', '082210026772'),
(9, '123', '123', '123@123.com', '202cb962ac59075b964b07152d234b70', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
