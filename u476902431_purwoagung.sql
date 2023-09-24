-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2023 at 01:51 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u476902431_purwoagung`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama_artikel` varchar(1000) NOT NULL,
  `nama_penulis` varchar(1000) NOT NULL,
  `tanggal_penulisan` date NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama_artikel`, `nama_penulis`, `tanggal_penulisan`, `foto`, `deskripsi`) VALUES
(6, 'hidup masih panjang semangat gass', 'wkwkwkwkwk', '2023-09-23', '../image/Ybgkatk9Vr.jpg', 'DSFASGNNADFKNGAJDFNKGJNKJNADFGJKAFG\r\n\r\n\r\n\r\nhaloooo'),
(8, 'seuatu hari di gunung merbabu', 'Steven', '2023-09-23', '../image/i96EEkcprg.png', 'haha hihi haha hihi'),
(9, 'asdafafasd', 'budi', '2023-09-23', '../image/d5j9BqlvyL.png', 'asdliiuaslfalks a JB K r\r\nWWE Kjk ek;jER \r\ne ;JJ ReG'),
(10, 'PPPPPPPPPPPPPPPPPPPPPPPPPPP', 'askjsndfk', '2023-09-23', '../image/nWD32J87Xm.png', 'slkdfla sjdfak gaskjldfnalkjsngjka sldjk sdj falksndgja sd klksndfa sdfkj sdfa'),
(12, 'naik-naik ke puncak gunung', 'kevin', '2023-09-23', '../image/EI0mRyauUv.png', 'qwertyuiop\r\nasdfasknkjv jav\r\nFj  wefjknKJFkdsnfk dskjdfkjqnkejnfnsd\r\nfdfkajasdfgajknfwofnskdnf&#039;SJJDFS FSFD\r\nFSKJDNF'),
(13, 'Persiapan Lomba Kompetisi Festival KIM Tingkat Provinsi Jatim', 'Hikmatul Hakimah', '2023-09-24', '../image/TKm6Ce5FT9.jpg', 'Dukungan dari Kominfo dan dukungan dari Pak Lurah Purwantoro untuk ikut berpartisipasi lomba. Disini KIM Purwoagung memilih tema peternakan karena di wilayah Sanan terdapat peternakan sapi yang ada di pusat kota atau di tengah pemukiman warga, yang mana terdapat usaha 500+ lebih UMKM Tempe dan limbah dari tempe dimanfaatkan untuk pakan ternak. Sedangkan kotorannya bisa dipergunakan menjadi Biogas dan pupuk.\r\n\r\nUntuk lomba ini akan dilaksanakan pada awal hingga akhir September. Tujuannya untuk memperkenalkan KIM sebagai mitra strategis pemerintah dalam melakukan komunikasi publik kepada masyarakat. Menumbuhkan semangat berinovasi, berkompetisi, dan kolaborasi, antar KIM diseluruh Indonesia. Lomba ini diikuti oleh perwakilan KIM dari 38 Kabupaten / Kota yang berbasis di bidang usaha mikro, kecil dan menengah (UMKM), Pariwisata, dan Pertanian.\r\n\r\nLomba ini dilaksanakan oleh Kominfo Jatim'),
(14, 'Verifikasi Proiklim', 'Hikmatul Hakimah', '2023-09-24', '../image/G4N3ZddtX4.jpg', 'Penilaian Proiklim RW.19 dan RW.05 Kelurahan Purwantoro melalui zoom meeting dengan Tim Kementerian Lingkungan Hidup Pada Selasa-Rabu, 14-15 Agustus 2023 di Dinas Lingkungan Hidup Kota Malang berjalan aman dan lancar\r\n\r\ndimana Kampung Wonosari Go Green terkenal dengan kegotongroyongannya dalam penghijauan dan menjadikan Kampung Edukasi.\r\n\r\nKampung Wonosari banyak mendapatkan penghargaan mulai tingkat Kota hingga Provinsi. '),
(15, 'Donor Darah Kolaborasi KIM dengan Kelsi', 'Hikmatul Hakimah', '2023-09-24', '../image/KEFnhizOU7.jpg', 'Salam Sehat, Program Peduli Kemanusiaan KELSI (Kelurahan Siaga) Purwantoro melalui Gerakan Donor Darah di RW.05 Kelurahan Purwantoro Pada Minggu, 13 Agustus 2023 acara tersebut dihadiri oleh Bu Camat, Lurah, Babinsa, Babhimas, Keltang, Kelsi, Pokja Sehat dan kader Puskesmas berjalan aman dan lancar');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_event`
--

CREATE TABLE `foto_event` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto_event`
--

INSERT INTO `foto_event` (`id`, `id_event`, `foto`) VALUES
(1, 3, '../image/z6JW2Jl6Oo.jpg'),
(3, 3, '../image/bpM8sDoQh1.jpg'),
(4, 1, '../image/3C1GQWlDdz.png'),
(5, 3, '../image/IIfK3zrVsP.png');

-- --------------------------------------------------------

--
-- Table structure for table `limbah`
--

CREATE TABLE `limbah` (
  `id` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `limbah`
--

INSERT INTO `limbah` (`id`, `id_penjual`, `kategori`, `foto`) VALUES
(6, 41, 'padat-dan-cair', 'image/4uMiHdoBff.jpeg'),
(7, 41, 'cair', 'image/L0xtmlJmK8.jpeg'),
(8, 41, 'padat', 'image/HKfdRmcY8Q.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `list_event`
--

CREATE TABLE `list_event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_event`
--

INSERT INTO `list_event` (`id`, `nama_event`, `start_date`, `end_date`, `deskripsi`, `foto`) VALUES
(1, 'nama event', '2023-09-22', '2023-09-23', 'inskjkjnfjd fans dfs fd s df \r\nf \r\nD Fskkdjf k F\r\nd fDKK Fkh  $#^$&%*#^%3', ''),
(2, 'nama event', '2023-09-22', '2023-09-23', '', ''),
(3, 'sosialisasi pembuatan web di PKK', '2023-09-23', '2023-09-24', '', '../image/OiWmC8ginL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(15) NOT NULL,
  `nama_penjual` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `nama_penjual`, `nama_toko`, `no_hp`, `email`, `password`) VALUES
(40, 'budi', 'budi jaya', '89686757322', 'halo@gmail.com', '$2y$10$W2XZ0UyQPvnwgHDMPFLU9.iLIZzyWv/dvrDMxEoHZSR87tDVQG1du'),
(41, 'jen', 'petraesian', '8123456789', 'tipeen995@gmail.com', '$2y$10$oDh7cywlEO39B24ExwCWAOWOa.fl5optdL.L0BayTAIJfJf3D1pg2');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_event`
--

CREATE TABLE `peserta_event` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta_event`
--

INSERT INTO `peserta_event` (`id`, `id_event`, `nama`, `no_telp`, `email`) VALUES
(2, 3, 'alloy', '089686757322', 'akjbfs@gmail.com'),
(3, 3, 'alloy2', '089686757322', 'akjbfs@gmail.com'),
(4, 3, 'alloy3', '089686757322', 'akjbfs@gmail.com'),
(5, 3, 'alloy4', '089686757322', 'akjbfs@gmail.com'),
(6, 3, 'alloy5', '089686757322', 'akjbfs@gmail.com'),
(7, 3, 'alloy6', '089686757322', 'akjbfs@gmail.com'),
(8, 3, 'Alloysius Steven Hartoyo', '089686757322', 'tipeen995@gmail.com'),
(9, 3, 'Alloysius Steven Hartoyo', '089686757322', 'c14210265@john.petra.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `merek` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_penjual`, `nama`, `merek`, `deskripsi`, `foto`) VALUES
(1, 41, 'Keripik Tempe', 'fajamass', 'Keripik unik dari tempe. Memiliki rasa yang gurih', 'image/Nj8p7dXzLS.jpeg'),
(2, 41, 'Tempe Cokelat', 'fajarmass', 'Keripik unik dari tempe. Memiliki rasa cokelat', 'image/bkDnzaQNHI.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `no_telepon`, `email`, `password`) VALUES
(2, 'alloysius steven hartoyo', 2147483647, 'tipeen995@gmail.com', '$2y$10$0M5jnvdp6AMgR2mo0xDGMeMOn5f8RSx6c7S/hm5wGSgAQefSE7InC'),
(3, 'birdmaster30', 2147483647, 'c14210265@john.petra.ac.id', '$2y$10$tJOxls6l0vzhgaOWHyXKluOFf2igjY6FzmaED7YT.v9srPfhWIjpq');

-- --------------------------------------------------------

--
-- Table structure for table `varian`
--

CREATE TABLE `varian` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `varian`
--

INSERT INTO `varian` (`id`, `nama`, `foto`) VALUES
(6, 'Brownies Tempe', '../image/fCilgFE8kS.jpeg'),
(7, 'Burger Tempe', '../image/2EBAkZzrdG.jpeg'),
(8, 'Kue Kering Tempe', '../image/VbI3KuQ3bz.jpeg'),
(9, 'Macaroon Tempe', '../image/WB601rWVyd.jpeg'),
(10, 'Pudding Tempe', '../image/K9mms8eWwo.jpeg'),
(11, 'Risol Tempe', '../image/VTX9Ax7z84.jpeg'),
(12, 'Steak', '../image/xGBKBTUkYu.jpeg'),
(13, 'Stick Tempe', '../image/kWFpS9rG4Q.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_event`
--
ALTER TABLE `foto_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `limbah`
--
ALTER TABLE `limbah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_event`
--
ALTER TABLE `list_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_event`
--
ALTER TABLE `peserta_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varian`
--
ALTER TABLE `varian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `foto_event`
--
ALTER TABLE `foto_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `limbah`
--
ALTER TABLE `limbah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `list_event`
--
ALTER TABLE `list_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `peserta_event`
--
ALTER TABLE `peserta_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varian`
--
ALTER TABLE `varian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto_event`
--
ALTER TABLE `foto_event`
  ADD CONSTRAINT `foto_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `list_event` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peserta_event`
--
ALTER TABLE `peserta_event`
  ADD CONSTRAINT `peserta_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `list_event` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
