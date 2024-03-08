-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 03:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esg_ncsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` char(15) NOT NULL,
  `nrn_admin` char(150) NOT NULL,
  `sexo` enum('Mane','Feto') NOT NULL,
  `data_moris` date NOT NULL,
  `hela_fatin` varchar(100) NOT NULL,
  `no_tlp` char(15) NOT NULL,
  `img_admin` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nrn_admin`, `sexo`, `data_moris`, `hela_fatin`, `no_tlp`, `img_admin`, `username`, `password`, `level`) VALUES
('1', 'Adriana', 'Feto', '2024-02-25', 'Farol', '78595404', 'Screenshot 2023-08-10 101350.png', 'adriana', 'a01183854d7e784f0455d559f4327d55', 'admin'),
('2', 'Brito', 'Mane', '2024-02-26', 'Caicoli', '74553522', '65eb1e0476045png', 'brito', 'aca8698eac2050efa48cc339caad3989', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktividade`
--

CREATE TABLE `tb_aktividade` (
  `id_aktividade` char(15) NOT NULL,
  `nrn_aktividade` text NOT NULL,
  `id_admin` char(15) NOT NULL,
  `id_kat_aktividade` char(15) NOT NULL,
  `data_publika` text NOT NULL,
  `images` text NOT NULL,
  `obs_aktividade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_aktividade`
--

INSERT INTO `tb_aktividade` (`id_aktividade`, `nrn_aktividade`, `id_admin`, `id_kat_aktividade`, `data_publika`, `images`, `obs_aktividade`) VALUES
('1', 'Movimento Feto Foin sae Timor-Leste halo atividade Sosializasaun no introdusaun konaba Programa Aihan Diak ba Moris Diak ', '2', '1', '2024-03-20', '65e5fd53535abjpg', 'Programa nee hetan suporta fundus husi Embaisada Nova Zelandia no servisu hamutuk ho Rede Feto Timor-Leste no ninia membrus MOFFE Timor-Leste.  Objetivu husi programa Aihan Diak ba Moris Diak nee:  1)Atu tulun hadia nutrisaun familia no hasae rendementu Uma kain sira  2) Hasae produsaun agrikultura inan feto sira  3) Halo ligasaun entre Merkadu no toos nain no mos transportasaun ba produto sira. Iha atividade sosializasaun ida nee MOFFE-TL foku ba grupo feto 4 nebe indentifika ona hanesan benefisiariu direita ba programa nee mak hanesan : grupo Aikameli, grupo Matak, grupo Haburas no grupo Hailok.  MOFFE-TL mos halao sosializasaun no konsultasaun ba servisu agricultura iha nivel munisipiu, nomos autoridade iha Munisipiu Covalima.'),
('2', 'Movimentu Feto Foin Sae Timor Leste servisu hamutuk ho Fairtrade ANZ Australia halao sesaun ikus ho graduadu husi Feto Eskola ba Lideransa ', '2', '2', '2024-03-15', '65e5fd603380bjpg', 'Sesaun nee halao ho objetivu ; 1. Graduadu sira fahe sira nia esperiensia hanesan Ambassador, oinsa implementa sira nia planu iha komunidade. 2. Graduadu sira hakerek sira nia relatoriu konaba sira nia esperiensia, inklui resultadu sira 3. Hamutuk halo evaluasaun konaba programa Feto Eskola ba Lideransa no kompleta survey sesaun 4 nian. Atividade nebee halao durante loron 2 nee (16-17 Fevereiro 2023) fasilita husi Sra. Yasinta Lujina no ekipa MOFFE nomos apoiu husi Sr. Nestor Jossue da Conceicao (Reprezentante Fairtrade).');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_aktividade`
--

CREATE TABLE `tb_kat_aktividade` (
  `id_kat_aktividade` char(15) NOT NULL,
  `nrn_kat_aktividade` varchar(100) NOT NULL,
  `obs_kat_aktividade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kat_aktividade`
--

INSERT INTO `tb_kat_aktividade` (`id_kat_aktividade`, `nrn_kat_aktividade`, `obs_kat_aktividade`) VALUES
('1', 'Promosaun Sensibilizasaun', 'diak'),
('2', 'Formasaun Lideransa', 'diak'),
('3', 'Empoderamentu Ekonomika', 'diak'),
('4', 'Advokasia Politika', 'Diak Diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` char(15) NOT NULL,
  `nrn_profile` varchar(100) NOT NULL,
  `content_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nrn_profile`, `content_profile`) VALUES
('1', 'Historia', 'MOFFE Timor-Leste ka Movimentu Feto Foin Sae Timor-Leste hanesan Organizasaun nasional iha Timor-Leste ne’ebe servisu atu haforsa lideransa feto foin sae no organiza eduksaun no kapasitasaun ba labarik, foin sae no feto sira iha Timor-Leste. MOFFE Timor-Leste hari’I iha loron 29 de Maio 2010 hodi halibur labarik, foin sae no feto iha teritoriu tomak hodi suporta, haforsa, kordena no fasilita kapasitasaun ba sira.'),
('2', 'Vizaun', '	Sosiadade Timor-Leste moris iha demokrasia Igualidade no saudavel'),
('3', 'Misaun', '	Promove implemetasaun no protesaun direitu feto, labarik feto foinsa’e.                                                                  	Promove partisipasaun feto iha foti desizaun iha nivel suku, governu lokal no nasional.        	Kapasita feto liu husi trinamentu formasaun no sensibilizasaun.                  	Haforsa ekonomia familia liu husi produtu intergrade.'),
('4', 'Estrutura', 'Movimentu Feto Foin Sa’e Timor-Leste (MOFFE-TL)....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_aktividade`
--
ALTER TABLE `tb_aktividade`
  ADD PRIMARY KEY (`id_aktividade`),
  ADD KEY `id_kat_aktividade` (`id_kat_aktividade`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_kat_aktividade`
--
ALTER TABLE `tb_kat_aktividade`
  ADD PRIMARY KEY (`id_kat_aktividade`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
