-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `kategoriKODE` char(10) NOT NULL,
  `lokasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `kategoriKODE`, `lokasiKODE`) VALUES
('D101', 'Sentosa Island, Singapore', 'K103', 'L101'),
('D102', 'Jatim Park 2, Kota Batu', 'K102', 'L102'),
('D103', 'Time Square Causeway Bay, Hong Kong', 'K104', 'L103'),
('D104', 'Kuil Shinto, Jepang', 'K101', 'L104'),
('D105', 'Rio de Janeiro - RJ, Brasil', 'K101', 'L105'),
('K101', 'Marcel', 'marcelw121', 'sang');

-- --------------------------------------------------------

--
-- Table structure for table `destinasib`
--

CREATE TABLE `destinasib` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `destinasiKET` text NOT NULL,
  `destinasiFOTO` char(120) NOT NULL,
  `kategoriKODE` char(10) NOT NULL,
  `lokasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasib`
--

INSERT INTO `destinasib` (`destinasiKODE`, `destinasiNAMA`, `destinasiKET`, `destinasiFOTO`, `kategoriKODE`, `lokasiKODE`) VALUES
('D101', 'Sentosa Island, Singapore', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'sentosa-island_carousel1_1670x940.jpg', 'K103', 'L101'),
('D102', 'Jatim Park 2, Kota Batu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'jatim-park.jpg', 'K102', 'L102'),
('D103', 'Time Square Causeway Bay, Hong Kong', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'a0ebb923-c34e-4521-ac41-2bda1e3085d8.jpg', 'K104', 'L103'),
('D104', 'Kuil Shinto, Jepang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Bangunan-utama-Kuil-Nikko-Toshogu.jpg', 'K101', 'L104'),
('D105', 'Rio de Janeiro - RJ, Brasil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Christ-the-Redeemer-Rio-de-Janeiro-Brazil.jpg', 'K101', 'L105');

-- --------------------------------------------------------

--
-- Table structure for table `destinasib2`
--

CREATE TABLE `destinasib2` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `destinasiKET` text NOT NULL,
  `destinasiFOTO` char(120) NOT NULL,
  `kategoriKODE` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasib2`
--

INSERT INTO `destinasib2` (`destinasiKODE`, `destinasiNAMA`, `destinasiKET`, `destinasiFOTO`, `kategoriKODE`) VALUES
('D101', 'Sentosa Island, Singapore', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'sentosa-island_carousel1_1670x940.jpg', 'K103'),
('D102', 'Jatim Park 2, Kota Batu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'jatim-park.jpg', 'K102'),
('D103', 'Time Square Causeway Bay, Hong Kong', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'a0ebb923-c34e-4521-ac41-2bda1e3085d8.jpg', 'K104'),
('D104', 'Kuil Shinto, Jepang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Bangunan-utama-Kuil-Nikko-Toshogu.jpg', 'K101'),
('D105', 'Rio de Janeiro - RJ, Brasil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Christ-the-Redeemer-Rio-de-Janeiro-Brazil.jpg', 'K101');

-- --------------------------------------------------------

--
-- Table structure for table `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotodestinasiNAMA` char(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fotodestinasiFILE` char(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `destinasiKODE` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('F101', 'Sentosa Island', 'sentosa-island_carousel1_1670x940.jpg', 'D101'),
('F102', 'Jatim Park 2', 'jatim-park.jpg', 'D102'),
('F103', 'Time Square', 'a0ebb923-c34e-4521-ac41-2bda1e3085d8.jpg', 'D103'),
('F104', 'Kuil Shinto', 'Bangunan-utama-Kuil-Nikko-Toshogu.jpg', 'D104'),
('F105', 'Christ the Redeemer', 'Christ-the-Redeemer-Rio-de-Janeiro-Brazil.jpg', 'D105');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelKODE` char(4) NOT NULL,
  `hotelNAMA` char(120) NOT NULL,
  `hotelFOTO` char(120) NOT NULL,
  `lokasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelKODE`, `hotelNAMA`, `hotelFOTO`, `lokasiKODE`) VALUES
('H101', 'Shangri-La Rasa Sentosa', '444160344.jpg', 'L101'),
('H102', 'Golden Tulip', '427286326.jpg', 'L102'),
('H103', 'Crowne Plaza', '243070228.jpg', 'L103'),
('H104', 'Shinagawa Prince Hotel', '452647028.jpg', 'L104');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `kategoriberitaKODE` char(4) NOT NULL,
  `kategoriberitaNAMA` varchar(60) NOT NULL,
  `kategoriberitaKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriberita`
--

INSERT INTO `kategoriberita` (`kategoriberitaKODE`, `kategoriberitaNAMA`, `kategoriberitaKET`) VALUES
('B001', '5 Hotel Tempat Terbaik', 'Rekomendasi Tempat'),
('B002', '5 Hotel Rekomendasi Terbaik', 'Rekomendasi Hotel'),
('B003', '5 Tempat Makan Enak', 'Rekomendasi Tempat Makan');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` char(25) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFERENCE`) VALUES
('K101', 'Sejarah', 'Tempat Sejarah', 'SE'),
('K102', 'Hiburan', 'Tempat Hiburan ', 'HI'),
('K103', 'Rekreasi', 'Tempat Rekreasi', 'RE'),
('K104', 'Belanja', 'Tempat Belanja', 'BE');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `komenID` varchar(120) NOT NULL,
  `komenNAMA` varchar(120) NOT NULL,
  `komenEMAIL` varchar(120) NOT NULL,
  `komenKET` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`komenID`, `komenNAMA`, `komenEMAIL`, `komenKET`) VALUES
('K101', 'Marcel', 'Marcelw112@gmail.com', 'Webnya sudah lumayan bagus'),
('K102', 'Adri', 'adrianusgods@mail.com', 'Keren'),
('K103', 'Ferdi', 'ferdigacor@gmail.com', 'Mantap BOSS'),
('K104', 'Wilson', 'wilson@yahoo.com', 'WOWW LMFAO'),
('K105', 'vincent', 'vin@gmail.com', 'webnya sudah cukup baik tingkatkan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `marcellino`
--

CREATE TABLE `marcellino` (
  `berita0021` char(11) NOT NULL,
  `beritaMARCELL` varchar(255) NOT NULL,
  `kategoriberita0021` char(4) NOT NULL,
  `event0021` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marcellino`
--

INSERT INTO `marcellino` (`berita0021`, `beritaMARCELL`, `kategoriberita0021`, `event0021`) VALUES
('0021', 'Mar', 'Mar', 'Event Nim'),
('0022', 'Mars', 'Mars', 'Event Nim'),
('0023', 'Mars', 'Mars', 'Event Nim'),
('0024', 'Marss', 'Mars', 'Event Nim');

-- --------------------------------------------------------

--
-- Table structure for table `marcellinofw`
--

CREATE TABLE `marcellinofw` (
  `marcelID` varchar(4) NOT NULL,
  `marcelKOTA` varchar(250) NOT NULL,
  `destinasiKODE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marcellinofw`
--

INSERT INTO `marcellinofw` (`marcelID`, `marcelKOTA`, `destinasiKODE`) VALUES
('N101', 'Sentosa', 'D101'),
('N102', 'Batu', 'D102'),
('N103', 'Causeway Bay', 'D103'),
('N104', 'Tokyo', 'D104'),
('N105', 'Rio Janeiro', 'D105');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieKODE` char(4) NOT NULL,
  `movieNAMA` char(120) NOT NULL,
  `movieFILE` char(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieKODE`, `movieNAMA`, `movieFILE`) VALUES
('F101', 'OPPENHEIMER', 'opie.jpg'),
('F102', 'SHUTTER ISLAND', 'shutter.jfif'),
('F103', 'INCEPTION', 'INCEPTION.jfif'),
('F104', 'BLADE RUNNER 2049', 'VR24.jfif'),
('F105', 'AVENGERS : INFINITY WAR', 'iw.jfif'),
('F106', 'KNIVES OUT', 'kout.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oleh2`
--

CREATE TABLE `oleh2` (
  `olehKODE` char(4) NOT NULL,
  `olehNAMA` varchar(60) NOT NULL,
  `olehFOTO` char(120) NOT NULL,
  `lokasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oleh2`
--

INSERT INTO `oleh2` (`olehKODE`, `olehNAMA`, `olehFOTO`, `lokasiKODE`) VALUES
('O101', 'Rock Shop - Hard Rock Cafe', 'Screenshot 2023-11-27 230742.png', 'L101'),
('O102', 'Brawijaya Istana Oleh-Oleh', 'Pusat-Oleh-oleh-Brawijaya-Batu-Malang.jpg', 'L102'),
('O103', 'Pacific Place', 'Luxstate+-+Real+Estate+-+Retail+-+Hong+Kong+-+Admiralty+-+Pacific+Place+太古廣場+(4).jpg', 'L103'),
('O104', 'Don Quijote', 'Screenshot 2023-11-27 232235.png', 'L104'),
('O105', 'Eataly Sao Paulo', 'eataly-festival-del-vino.jpg', 'L105');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `restoranKODE` char(5) NOT NULL,
  `restoranNAMA` varchar(60) NOT NULL,
  `lokasiKODE` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`restoranKODE`, `restoranNAMA`, `lokasiKODE`) VALUES
('R102', 'REMPAH - Warung Khas Batu', 'L102'),
('R103', 'Greenhouse', 'L103'),
('R104', 'Setouchi Grill Zipang', 'L104'),
('R105', 'Domenica Pizzaria Artesanal', 'L105');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `lokasiKODE` char(11) NOT NULL,
  `lokasiNAMA` char(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`lokasiKODE`, `lokasiNAMA`) VALUES
('L101', 'Singapore'),
('L102', 'Kota Batu'),
('L103', 'Hong Kong'),
('L104', 'Jepang'),
('L105', 'Brazil');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAMA` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAMA`, `userEMAIL`, `userPASS`) VALUES
('US02', 'Marcel', 'marcel@mail.com', '891493be2d739806464d80e98d3241bc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `destinasib`
--
ALTER TABLE `destinasib`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `destinasib2`
--
ALTER TABLE `destinasib2`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelKODE`);

--
-- Indexes for table `kategoriberita`
--
ALTER TABLE `kategoriberita`
  ADD PRIMARY KEY (`kategoriberitaKODE`);

--
-- Indexes for table `kategoriwisata`
--
ALTER TABLE `kategoriwisata`
  ADD PRIMARY KEY (`kategoriKODE`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`komenID`);

--
-- Indexes for table `marcellino`
--
ALTER TABLE `marcellino`
  ADD PRIMARY KEY (`berita0021`);

--
-- Indexes for table `marcellinofw`
--
ALTER TABLE `marcellinofw`
  ADD PRIMARY KEY (`marcelID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieKODE`);

--
-- Indexes for table `oleh2`
--
ALTER TABLE `oleh2`
  ADD PRIMARY KEY (`olehKODE`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`restoranKODE`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`lokasiKODE`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
