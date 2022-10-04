-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandi_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `image`, `stock`, `harga`) VALUES
('amps-001', 'Bad Cat UNLEASH V1', 'Bad-Cat-UNLEASH-V1-600x600.jpg', 200, 6990000),
('amps-002', 'Bad Cat Hot Cat 30 30w head', 'Bad-Cat-Hot-Cat-30.jpg', 200, 49883000),
('amps-003', 'Bad Cat, Bob Cat 20W Combo 112 with Reverb', 'Bad-Cat-Bob-Cat20W-600x600.jpg', 200, 26666000),
('amps-004', 'Diezel Guitar Cabinet V412F', 'Diezel-V412F-2-600x600.jpg', 200, 27903000),
('amps-005', 'Egnater Tourmaster 412B', 'Egnater-Tourmaster412B-600x600.jpg', 200, 15998000),
('amps-006', 'Egnater Tourmaster 4100', 'Egnater-Tourmaster-4100.jpg', 200, 25522000),
('gitar-001', 'G&L Tribute ASAT Classic Bluesboy Semi-Hollow Blonde', 'GL-Tribute-ASAT-Classic-Bluesboy-Semi-Hollow-Blonde-.jpg', 200, 7750000),
('gitar-002', 'G&L Tribute ASAT Classic Bluesboy 3Tone Sunburst', 'GL-Tribute-ASAT-Classic-Bluesboy-3Tone-Sunburst.jpg', 200, 7219000),
('gitar-003', 'G&L Tribute Legacy 3Tone Sunburst', 'GL-Tribute-Legacy-3-Tone-Sunburst.jpg', 200, 7043000),
('gitar-004', 'Dean Dimbag Dime O Flage Floyd ML', 'Dean-Dimbag-Dime-O-Flage-Floyd-ML-600x600.jpg', 200, 4946000),
('gitar-005', 'Dean Michael Schenker Retro', 'Dean-Michael-Schenker-Retro.jpg', 200, 5007000),
('gitar-006', 'Dean Razorback Dimebag Floyd – Lightning w/c', 'Razorback-Dimebag-Floyd-Lightning-wc.jpg', 200, 7073000),
('mic-001', 'MXL V177', 'MXLV177.jpg', 200, 5064000),
('mic-002', 'MXL 2006', 'MXL-2006-3.jpg', 200, 2327000),
('mic-003', 'MXL 550/551R', 'MXL-550-1.jpg', 200, 2143000),
('mic-004', 'MXL Acoustica MVS', 'MXL-Acoustica-MVS.jpg', 200, 2898000),
('mic-005', 'MXL CR89', 'MXLCR89.jpg', 200, 6024000),
('mic-006', 'MXL CR77', 'MXL-CR77-3-600x600.jpg', 200, 3296000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'test', '1234'),
(3, 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
