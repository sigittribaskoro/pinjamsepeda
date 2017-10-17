-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 05:30 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `jenis_sepeda` varchar(500) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `ringkasan` text NOT NULL,
  `isi` text NOT NULL,
  `status_sepeda` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id_sepeda`, `jenis_sepeda`, `slug`, `ringkasan`, `isi`, `status_sepeda`, `id_user`, `tanggal_pinjam`) VALUES
(2, 'Sepeda BMX', 'sepeda-bmx', '<p>Pertama kali muncul pada awal tahun 1970-an&nbsp; ketika anak-anak di daerah California selatan ini memulai membalap sepeda mereka di lintasan tanah, terinspirasi dari bintang motocros pada saat itu. Ukuran dan ketersediaan model design oleh Schwin yang dinamai Schwin Sting Ray membuatnya dijadikan pilihan sepeda yang sesuai, hanya karena didesain mudah untuk dipakai dan keseuaian penampilan dan kemampuan sebagai Sepeda BMX. Lomba BMX sangat fenomenal pada pertengahan tahun 1970.</p>', '<p>Pertama kali muncul pada awal tahun 1970-an&nbsp; ketika anak-anak di daerah California selatan ini memulai membalap sepeda mereka di lintasan tanah, terinspirasi dari bintang motocros pada saat itu. Ukuran dan ketersediaan model design oleh Schwin yang dinamai Schwin Sting Ray membuatnya dijadikan pilihan sepeda yang sesuai, hanya karena didesain mudah untuk dipakai dan keseuaian penampilan dan kemampuan sebagai Sepeda BMX. Lomba BMX sangat fenomenal pada pertengahan tahun 1970. Saat itu masih mengadopsi lomba offroad (lintasan tanah). Pada pertengahan dekade, olahraga ini mulai dikenal dan banyak produsen yang tertarik untuk mulai memproduksinya.&nbsp; George E. Esser yang mendanai National Bicycle League sebagai organisasi non-profit sepeda. Sebelum dia mempersiapkan NBL, George dan istrinya, Mary, mengadakan perlombaan dengan American Motocross Association. Dua putra mereka, Greg dan Brain, membalap sepeda motor, tetapi juga menikmati membalap BMX. Adalah kedua anak mereka yang menginspirasinya bahwa pada saat itu belum ada organisasi BMX, itu membuat George untuk memulai NBL di Florida. <br /><br />&nbsp;<br /><br />Pada tahun 1977, American Bicycle Association (ABA) merupakan badan organisasi nasional yang bertugas untuk menumbuhkan olahraga tersebut. Pada April 1981, Federasi BMX International didirikan, Kejuaraan Dunia pertama diselenggarakan pada tahun 1982. Sejak January 1993, BMX berintegrasi menjadi Union Cycliste Internationale.<br /><br />BMX Freestyle adalah ajang kompetisi tahunan di Summer X Games Extreme dan Etnies, diselenggarakan besar-besaran di dua negara bagian Amerika Serikat. Popularitas olahraga tersebut kini meningkat mengacu dari kemudahan dan ketersediaan tempat dan trik dari olahraga terseut yang cukup menarik.<br /><br />&nbsp;<br /><br />Pada tahun 2003, the Komite Olimpiade International menetapkan BMX sebagai ''olahraga Olimpiade'' pada tahun 2008 di Beijing, China. Adalah Maris Stromberg (pemuda dari Latvia) dan Anne-Caroline Chausson (gadis asal Perancis) telah dinobatkan sebagai Juara Olimpiade pertama.</p>', 'Tidak Tersedia', 1, '2016-10-17 15:24:53'),
(3, 'Sepeda onthel', 'sepeda-onthel', '<p>Sepeda Onthel atau juga disebut sebagai sepeda unta, sepeda kebo, atau pit pancal adalah sepeda standar dengan ban ukuran 28 inchi yang biasa digunakan oleh masyarakat perkotaan sampai tahun 1970-an. Sepeda onthel mengacu pada sepeda desain Belanda yang bercirikan posisi duduk tegak dan memiliki reputasi yang sangat kuat dan berkualitas tinggi. Karakteristik adalah rumah rantai tertutup. Dengan gigi yang tidak bisa diubah dan biasanya terdapat dinamo di bagian roda depan untuk menyalakan lampu. Sepeda ini juga dilengkapi Rem drum untuk pengereman.</p>', '<p>Sepeda Onthel atau juga disebut sebagai sepeda unta, sepeda kebo, atau pit pancal adalah sepeda standar dengan ban ukuran 28 inchi yang biasa digunakan oleh masyarakat perkotaan sampai tahun 1970-an. Sepeda onthel mengacu pada sepeda desain Belanda yang bercirikan posisi duduk tegak dan memiliki reputasi yang sangat kuat dan berkualitas tinggi. Karakteristik adalah rumah rantai tertutup. Dengan gigi yang tidak bisa diubah dan biasanya terdapat dinamo di bagian roda depan untuk menyalakan lampu. Sepeda ini juga dilengkapi Rem drum untuk pengereman.<br /><br />Berbagai macam merek sepeda onthel dari berbagai negara beredar di pasar Indonesia. Pada segmen premium terdapat misalnya merek Fongers, Gazelle dan Sunbeam. Kemudian pada segmen dibawahnya diisi oleh beberapa merek terkenal antara lain seperti Simplex, Burgers, Raleigh, Humber, Rudge, Batavus, Phillips dan NSU.<br />Sejarah<br /><br />Sepeda Onthel ini mulai banyak digunakan pada zaman Hindia Belanda . Kemudian pada tahun 1970-an keberadaan sepeda onthel mulai digeser oleh sepeda jengki yang berukuran lebih kompak baik dari ukuran tinggi maupun panjangnya dan tidak dibedakan desainnya untuk pengendara pria atau wanita. Waktu itu sepeda jengki yang cukup populer adalah merek Phoenix dari China. Selanjutnya, Sepeda jengki pada tahun 1980-an juga mulai tergeser oleh sepeda MTB sampai sekarang.<br /><br />Sepeda Onthel kemudian pada tahun 1970-an secara perlahan lebih banyak digunakan oleh masyarakat pedesaan dibanding diperkotaan. Namun pada akhirnya karena usia dan kelangkaan, sepeda onthel telah berubah menjadi barang antik dan unik. Mulailah situasi berbalik, sepeda onthel yang dulunya terbuang, sekarang pada tahun 2000-an justru diburu kembali oleh semua kalangan mulai dari pelajar, mahasiswa sampai pejabat. Orang Jawa mengatakan inilah "wolak-waliking zaman". Keranjingan masyarakat terhadap sepeda onthel adalah tepat bersamaan dengan berkembangnya ancaman global warming.<br /><br />Kini banyak klub-klub dan komunitas sepeda kuno dari berbagai daerah di Indonesia, tersebar dari Sabang hingga Merauke yang jumlahnya ratusan komunitas, itupun hanya yang sempat terpantau dan terdaftar, belum lagi masih banyak yang tidak terdaftar atau ikut organisasi dibawah naungan KOSTI (Komunitas Sepeda Tua Indonesia).</p>', 'Tersedia', 1, '2016-10-17 15:20:25'),
(4, 'Sepeda Gunung', 'sepeda-gunung', '<p>Sepeda gunung (Inggris: All Terrain Bike /ATB atau Mountain Bike /MTB) adalah sepeda yang digunakan dalam medan yang berat. Pertama kali diperkenalkan pada tahun 1970, oleh pengguna sepeda di perbukitan San Fransisco. Ketika pertama kali dipamerkan pada New York Bike Show pada tahun 1981, penemu sepeda gunung mengatakan bahwa sepeda jenis ini tidak akan pernah populer.</p>', '<p>Sepeda gunung (Inggris: All Terrain Bike /ATB atau Mountain Bike /MTB) adalah sepeda yang digunakan dalam medan yang berat. Pertama kali diperkenalkan pada tahun 1970, oleh pengguna sepeda di perbukitan San Fransisco. Ketika pertama kali dipamerkan pada New York Bike Show pada tahun 1981, penemu sepeda gunung mengatakan bahwa sepeda jenis ini tidak akan pernah populer. Kenyataannya 80% sepeda yang terjual di Amerika Serikat adalah jenis ini. Sepeda gunung adalah jenis sepeda yang pertama kali dinaiki sampai ke puncak gunung Kilimanjaro, titik tertinggi di benua Afrika, 5.895 m.<br /><br />Sejak saat itu dunia mengenal sepeda gunung ini. Ciri-cirinya adalah ringan, bentuk kerangka yang terbuat dari baja, aluminium dan yang terbaru menggunakan bahan komposit serat karbon (carbon fiber reinforced plastic) dan menggunakan shock breaker (peredam goncangan). Sedangkan ban yang dipakai adalah yang memiliki kemampuan untuk mencengkeram tanah dengan kuat. Sepeda gunung memiliki 18-30 gear pindah yang berguna untuk mengatur kecepatan dan kenyamanan dalam mengayuh pedalnya. Sepeda gunung dengan 30 gear berarti memiliki crankset depan dengan 3 piringan dan cassette sprocket dengan 10 piringan, sehingga 3x10=30 tingkat kecepatan yang berbeda.</p>', 'Tersedia', 1, '2016-10-17 15:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'admin'),
(2, 'admin2', 'admin2@email.com', 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id_sepeda`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
