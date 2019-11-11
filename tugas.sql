-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 04:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nmmahasiswa` varchar(125) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id`, `nim`, `nmmahasiswa`, `jk`, `alamat`, `nohp`) VALUES
(1, '161240000562', 'Catur Juliaming Rizqi Putra', 'Laki-laki', 'Pengkol', '0812256416499'),
(2, '161240000523', 'Ananda Rizqi Winantasya', 'Perempuan', 'mlonggo', '089745123456'),
(3, '161240000533', 'Hikam Ihsanilah', 'Laki-Laki', 'Kauman', '085641522544'),
(4, '161240000551', 'retno Nur Cahyanti', 'Perempuan', 'Demaan', '089655455122'),
(5, '161240000589', 'Desi Ambarwati', 'Perempuan', 'Bangsri', '082547914563333');

--
-- Triggers `datamahasiswa`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_UPDATE` BEFORE UPDATE ON `datamahasiswa` FOR EACH ROW BEGIN
	INSERT INTO log
    SET id = OLD.id,
    nim = OLD.nim,
    nohp_lama = OLD.nohp,
    nohp_baru = new.nohp,
    tgl_diubah = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `hasiledit`
-- (See below for the actual view)
--
CREATE TABLE `hasiledit` (
`id` int(15)
,`nim` varchar(25)
,`nohp_lama` varchar(25)
,`nohp_baru` varchar(25)
,`tgl_diubah` date
);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(15) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nohp_lama` varchar(25) NOT NULL,
  `nohp_baru` varchar(25) NOT NULL,
  `tgl_diubah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `nim`, `nohp_lama`, `nohp_baru`, `tgl_diubah`) VALUES
(0, '161240000562', '081225641642', '081225641647', '2019-11-08'),
(0, '161240000562', '081225641647', '081225641649', '2019-11-08'),
(0, '161240000562', '081225641649', '081225641647', '2019-11-10'),
(0, '161240000562', '081225641647', '0812256416499', '2019-11-10'),
(6, 'tes', '081225641649', '0812256416411111', '2019-11-10'),
(7, 'tes', '123', '1234567', '2019-11-10'),
(5, '161240000589', '08254791456', '082547914563333', '2019-11-10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tblmhs`
-- (See below for the actual view)
--
CREATE TABLE `tblmhs` (
`id` int(10)
,`nim` varchar(25)
,`nmmahasiswa` varchar(125)
,`jk` varchar(10)
,`alamat` varchar(100)
,`nohp` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `hasiledit`
--
DROP TABLE IF EXISTS `hasiledit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasiledit`  AS  (select `log`.`id` AS `id`,`log`.`nim` AS `nim`,`log`.`nohp_lama` AS `nohp_lama`,`log`.`nohp_baru` AS `nohp_baru`,`log`.`tgl_diubah` AS `tgl_diubah` from `log`) ;

-- --------------------------------------------------------

--
-- Structure for view `tblmhs`
--
DROP TABLE IF EXISTS `tblmhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tblmhs`  AS  (select `datamahasiswa`.`id` AS `id`,`datamahasiswa`.`nim` AS `nim`,`datamahasiswa`.`nmmahasiswa` AS `nmmahasiswa`,`datamahasiswa`.`jk` AS `jk`,`datamahasiswa`.`alamat` AS `alamat`,`datamahasiswa`.`nohp` AS `nohp` from `datamahasiswa`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
