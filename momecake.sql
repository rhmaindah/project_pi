-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 01:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `buyer` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`buyer`, `date`, `product`, `qty`, `price`) VALUES
('yuayua', '2018-07-29', 'Kue Kastengel', 1, 60000),
('yuayua', '2018-07-29', 'Kue Nastar', 1, 55000),
('yuayua', '2018-07-29', 'Kue Kastengel', 1, 60000),
('yuayua', '2018-07-29', 'Kue Nastar', 1, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`full_name`, `email`, `subject`, `message`) VALUES
('tes', 'tes@gmail.com', 'tes', 'testes'),
('yua', 'yua@gmail.com', 'yua', 'yua'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('yua', 'yua@gmail.com', 'yua', 'yua'),
('yua', '', 'asd', 'asd'),
('asd', 'asd@gmail.com', 'asdas', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `summary`, `price`, `image`) VALUES
(1, 'Kue Bolu Kopi', 'Kue ini dipadukan dengan buah strawberry yang memiliki cita rasa yang khas dari negeri Amerika yang diberi krim, serta ditaburi buah strawberry yang membuat rasa ini semakin lezat.', 45000, 'kopi.jpg'),
(2, 'Kue Bolu Tape', 'Kue ini merupakan kue berbahan dasar tape yang khas dicampur dengan manisnya kue bolu membuat kue cocok untuk menjadi teman minum teh di sore hari.', 45000, 'mix.jpg'),
(3, 'Kue Bolu Mix Cokelat', 'Kue ini merupakan kue yang memiliki dua rasa yaitu rasa original bolu dan rasa cokelat. Bagi yang tidak terlalu suka manis dapat mencoba kue bolu yang satu ini.', 45000, 'mix.jpg'),
(4, 'Kue Bolu Cokelat', 'Kue yang memiliki varian yang banyak digunakan sebagai bahan dasar kue yaitu cokelat. Perpaduan rasa cokelat yang manis dengan bolu yang lembut membuat kue ini sangat disukai.', 45000, 'cokelat2.jpg'),
(5, 'Kue Bolu Ketan', 'Untuk kue bolu ini merupakan kue yang berbahan dasar yaitu ketan hitam. Kue bolu ini memiliki ciri khas yaitu warna nya yang hitam, walaupun warna nya kurang menarik namun rasa bolu ini sangat enak dan lembut.', 45000, 'ketann.jpg'),
(6, 'Kue Bolu Pisang', 'Kue yang berbahan dasar pisang ini merupakan kue yang cocok dijadikan cemilan dengan rasa khas dari pisang itu sendiri dan rasa dari kue bolu.', 45000, 'pisang2.jpg'),
(7, 'Tiramisu Cake', 'Kue yang berasal dari negara Italia dengan taburan bubuk kakao diatas nya yang memiliki tekstur yang sangat lembut dan halus. Perpaduan antara rasa kopi dan keju membuat kue ini banyak disukai oleh kalangan masyarakat.', 70000, 'tiramisu2.jpg'),
(8, 'Blackforest Cake', 'Kue ini adalah jenis kue khas Jerman yang terbuat dari bolu coklat yang dilapisi krim, serutan coklat dan buah cherry yang membuat tampilan kue ini menarik dan rasanya yang enak.', 70000, 'bf2.jpg'),
(9, 'Strawberry Cake', 'Kue ini dipadukan dengan buah strawberry yang memiliki cita rasa yang khas dari negeri Amerika yang diberi krim, serta ditaburi buah strawberry yang membuat rasa ini semakin lezat.', 70000, 'strawberry2.jpg'),
(10, 'Kue Sagu Keju', 'Kue Sagu Keju ini merupakan kue yang berbahan dasar keju yang ketika dimakan keju nya meleleh di mulut. Bagi penyuka keju, wajib banget coba kue yang satu ini', 50000, 'lidah.jpg'),
(11, 'Kue Putri Salju', 'Sesuai dengan namanya, kue ini mirip dengan salju-salju yang biasanya terdapat di negara subtropis. Ya! Kue ini berbahan dasar kacang tanah ataupun kacang mede yang berkualitas dan diberikan topping gula halus sehingga diberi nama Kue Putri Salju.', 55000, 'salju.jpg'),
(12, 'Kue Nastar', 'Lebaran tanpa kue yang satu ini, rasanya seperti ada yang kurang. Ya! kue nastar ini merupakan kue yang harus ada di setiap lebaran, kue ini dibungkus dengan selai nanas pilihan di dalamnya. Untuk yang menyukai keju, bisa ditambahkan keju sebagai toppingn', 55000, 'nastar.jpg'),
(13, 'Kue Lidah Kucing', 'Kue Lidah Kucing ini merupakan kue yang mirip dengan lidah kucing berbentuk panjang dan tipis. Kue yang berbahan dasar putih telur ini sangat cocok dijadikan cemilan, karena bentuknya yang tipis kue ini sangat renyah dan meleleh ketika dimakan.', 55000, 'lidah.jpg'),
(14, 'Kue Kastengel', 'Kue Keju atau biasa disebut dengan Kue Kastangel, kue ini merupakan kue yang berbahan dasar keju dan ditaburi lagi dengan topping keju sehingga membuat para penyuka keju wajib untuk mencoba kue yang satu ini. Untuk kejunya, momecake menggunakan Keju Kraft', 60000, 'keju.jpg'),
(15, 'Kue Cokelat', 'Kue coklat merupakan salah satu kue terfavorit sepanjang lebaran. Sesuai dengan namanya, kue ini berbahan dasar coklat dan ditaburi dengan chocochip yang sangat berkualitas sehingga membuat rasa coklatnya semakin enak. Untuk penyuka coklat wajib banget co', 55000, 'coklat.jpg'),
(16, 'kopi', 'kopi terbaik', 20000, 'kopi cuk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `address`, `no_tlp`) VALUES
(1, 'Rahma Indah', 'admin', 'rhmaindah13@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'bogor', '082256784918'),
(2, 'Indah', 'rhmaindah', 'indah123@gmail.com', 'rhma13', '', ''),
(3, 'ghina', 'ghngnr', 'gege01@gmail.com', '$2y$10$sT9ofU.vLEHtXPkjUY5BTOBlEB4e8SXRTqZQmFk5wurjlUNhYrGuu', 'bogor', '081867890872'),
(4, 'bondan', 'bo123', 'bon123@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', 'jakarta', '089812722879'),
(5, 'indah', 'indah12', 'indah@yahoo.com', 'c3ec0f7b054e729c5a716c8125839829', 'jakarta', '08987719822'),
(6, 'yuayua', 'yua', 'yua@gmail.com', '528cb1d9d2d7556c3ba562932cf830eb', 'yua street', '082917878898');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
