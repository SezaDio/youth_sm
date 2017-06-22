-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 09:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telfon` varchar(12) NOT NULL,
  `status_admin` varchar(100) NOT NULL,
  `path_foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_admin`, `email`, `telfon`, `status_admin`, `path_foto`, `password`) VALUES
(2, 'adminNews', 'Admin Update yang sering banget Update', 'adminupdate@gmail.com', '08237421', 'Admin News', 'file_1497151219.jpg', '0b6ba87d169e7d34dd229f9d9b4462db');

-- --------------------------------------------------------

--
-- Table structure for table `coming`
--

CREATE TABLE `coming` (
  `id_coming` int(4) NOT NULL,
  `nama_coming` varchar(100) NOT NULL,
  `deskripsi_coming` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `path_gambar` varchar(100) NOT NULL,
  `kategori_coming` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `nama_coming`, `deskripsi_coming`, `posted_by`, `tanggal_posting`, `status`, `path_gambar`, `kategori_coming`) VALUES
(3, 'Lomba Mewarnai', 'Lomba mewarnai anak sd dan tk', 'azies', '2017-05-30 00:13:31', 1, '', ''),
(9, 'Gathering Komunitas R024', 'Semarang, 23 Juni 2017																									', '', '2017-06-05 00:49:57', 1, 'file_1496321782.jpg', 'Coming Soon Komunitas'),
(10, 'asdsa', '<p>asdasd</p>\r\n', '', '2017-06-05 19:42:31', 1, 'file_1496709751.jpg', 'Coming Soon Teknologi'),
(11, 'dasfsadsa', '<p>asdasfsa</p>\r\n', '', '2017-06-10 21:24:53', 1, 'file_1497147893.JPG', 'Coming Soon Sains'),
(12, 'asdsadsa', '<p>adasdsadsa</p>\r\n', '', '2017-06-13 00:48:12', 1, 'file_1497332892.jpg', 'Coming Soon Sejarah'),
(13, 'asdasds', '<p>asdsadsad</p>\r\n', '', '2017-06-13 00:56:17', 1, 'file_1497333377.jpg', 'Coming Soon Teknologi'),
(14, 'asdsds', '<p>adsadsa</p>\r\n', '', '2017-06-13 00:59:04', 1, 'file_1497333544.jpg', 'Coming Soon Sejarah'),
(15, 'asssad', '<p>asdsadsa</p>\r\n', '', '2017-06-13 01:03:26', 1, 'file_1497333806.jpg', 'Coming Soon Teknologi'),
(16, 'asdsads', '<p>asdasdsad</p>\r\n', '', '2017-06-13 01:04:33', 1, 'file_1497333873.jpg', 'Coming Soon Politik'),
(17, 'asdasd', '<p>asdasdas</p>\r\n', '', '2017-06-14 22:24:45', 1, 'file_1497497085.jpg', 'Coming Soon Teknologi'),
(18, 'xdgfc', '<p>njk</p>\r\n', '', '2017-06-14 22:27:00', 1, 'file_1497497220.jpg', 'Coming Soon Politik'),
(19, 'Anforcom 2017', '<p>asdsadsads</p>\r\n', '', '2017-06-19 01:33:38', 1, 'file_1497854018.jpg', 'Coming Soon Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `poin` int(5) NOT NULL,
  `path_foto` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `nama_member`, `email`, `password`, `date_join`, `poin`, `path_foto`, `status`) VALUES
(1, 'azies', 'abdul azies kurniawan', 'aziesandro@ymail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-11 03:22:52', 0, 'file_1497147134.jpg', 1),
(3, 'member3', 'member yang suka menulis', 'member3@gmail.com', '6f74c9c1948291274346a3278d4d8104', '2017-06-11 02:17:20', 0, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(10) NOT NULL,
  `waktu_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_news` varchar(100) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `kategori_news` varchar(50) NOT NULL,
  `isi_news` text NOT NULL,
  `gambar_news` varchar(50) NOT NULL,
  `hits` int(20) NOT NULL,
  `suka` int(20) NOT NULL,
  `jenis_news` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `waktu_posting`, `judul_news`, `posted_by`, `kategori_news`, `isi_news`, `gambar_news`, `hits`, `suka`, `jenis_news`, `status`) VALUES
(1, '2017-06-20 01:11:30', 'Kecelakaan Truk di KM 31 Tol JORR arah Pondok Pasar Rebo', 'Admin', 'Teknologi', '<p><strong>Jakarta</strong>&nbsp;- Kecelakaan lalu lintas melibatkan dua truk terjadi di ruas tol Jakarta Outer Ring Road (JORR) Kampung Rambutan arah Pasar Rebo, Selasa (20/6/2017) pagi. Peristiwa ini sempat membuat kemacetan hingga kecepatan laju kendaraan 0 km per jam.<br />\r\n<br />\r\n&quot;Saya tadi jam 06.07 WIB lewat Tol JORR, tepatnya di KM 31 arah dari Bekasi ke Pondok Indah, lihat ada dua truk kecelakaan. Itu tempatnya setelah masuk Tol Kampung Rambutan sebelum Tol Pasar Rebo,&quot; kata pengendara bernama Rikh Briliantino Arbi kepada detikcom.<br />\r\n<br />\r\n&quot;Sempat stuck karena keceptan saya sampai 0 kilometer perjam,&quot; sambung dia.</p>\r\n\r\n<p><br />\r\nRikh mengirimkan foto penampakan kecelakaan tersebut melalui pasangmata.com. Terlihat dua truk berwarna kuning berhenti di nahu jalan dan satu lagi di lajur paling kiri jalan. Menurut Rikh, belum ada petugas yang mengevakuasi truk saat dirinya mengabadikan peristiwa itu dengan ponselnya.<br />\r\n<br />\r\n&quot;(Lokasi kejadian, red) Kira-kira 3 sampai 4 kilo setelah pintu Tol Kampung Rambutan. Dia (truk, red) menutup bahu jalan, agak dikit kena ruas jalan sebelah kiri,&quot; ujar Rikh.<br />\r\n<br />\r\nDihubungi terpisah, Petugas Call Center Jasa Marga, Linda, menyampaikan evakuasi terhadap truk sudah dilakukan, &quot;Sudah selesai peanganannya.&quot;&nbsp;<br />\r\n<strong>(aud/dnu)</strong></p>\r\n', 'file_1497921089.jpg', 0, 0, 6, 1),
(2, '2017-06-20 01:14:27', 'Lucu, Museum Ini Punya Miniatur Kereta yang Bisa Dinaiki', 'Admin', 'Rekomendasi', '<p>&nbsp;</p>\r\n\r\n<p><strong>Kaohsiung</strong>&nbsp;- Sebuah museum kereta di Kota Kaohsiung, Taiwan memberi pengalaman menarik bagi para pengunjungnya. Mereka yang datang bisa menaiki miniatur kereta kecil. Lucu!<br />\r\n<br />\r\ndetikTravel berkesempatan melancong ke kota kedua Taiwan itu beberapa waktu lalu. Namanya Hamasen Railway Cultural Park. Pada awalnya lokasi ini adalah Stasiun Pelabuhan Kaohsiung.<br />\r\n<br />\r\nDikumpulkan dari informasi yang tersedia di lokasi, inilah stasiun kereta api pertama di Kota Kaohsiung. Lalu pada saat ini telah diubah menjadi Takao Railway Museum.<br />\r\n<br />\r\nKawasan ini ada di Hamasen, yang terdiri dari museum, taman, hingga pusat oleh-oleh. Kereta api di sana pun masih ada dan dipelihara secara baik. Dapat dikatakan pula bahwa, inilah satu-satunya museum kereta api yang sekaligus ada stasiunnya yang jalur kereta apinya masih aktif.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Lucu, Museum Ini Punya Miniatur Kereta yang Bisa Dinaiki\" src=\"https://images.detik.com/community/media/visual/2017/06/19/bc5260d1-851f-4f8e-91c0-6fb48461823e.jpg?a=1\" />Takao Railway Museum Kaohsiung (Masaul/detikTravel)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<br />\r\nDi belakang Museum Takao ada juga ruang hijau yang luas. Para pengunjung yang datang dapat bermain layang-layang maupun sekadar foto. Berbagai instalasi berbahan logam, seperti koper, terompet, dan roket ada di kawasan taman ini.<br />\r\n<br />\r\nKawasan ini merupakan perluasan dari Pier-2 Art Center yang penuh dengan instalasi seni yang lucu-lucu. Maka dari itu, kawasan ini menjadi favorit penduduk lokal maupun turis asing.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Lucu, Museum Ini Punya Miniatur Kereta yang Bisa Dinaiki\" src=\"https://images.detik.com/community/media/visual/2017/06/19/43eca94f-33c0-46c5-82b9-2f5915710148_169.jpg?w=620\" />Para penjual layang-layang di sekitar Museum Kereta Kaohsiung (Masaul/detikTravel)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nMengenal Takao Museum, yakni stasiun kereta Pelabuhan Kaohsiung dibangun pada masa Jepang. Pada tahun 2003, bangunan stasiun diklasifikasikan sebagai bangunan bersejarah oleh pemerintah Kota Kaohsiung. Pada tanggal 9 November 2008, kereta terakhir ditarik keluar dari stasiun pada pukul 05.30 malam.<br />\r\n<br />\r\nBegitu stasiun ditutup, pemerintah mengambil alih gedung stasiun. Pada tanggal 24 Oktober 2010, pemerintah memberi izin kepada Railway Culture Society untuk membuka Museum Kereta Api Takao.<br />\r\n<br />\r\nKembali ke miniatur kereta ini terletak di Hamasen Railway Cultural Park. Mulai dari anak kecil hingga orang tua tak ketinggalan menaiki kereta mini yang berkeliling bangunan bekas penyimpanan gerbong kereta itu.<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Lucu, Museum Ini Punya Miniatur Kereta yang Bisa Dinaiki\" src=\"https://images.detik.com/community/media/visual/2017/06/19/5c10f8d8-9976-42ec-a10d-9c231c9f2a2a_169.jpg?w=620\" />Naik kereta miniatur di Museum Kaosiung (Masaul/detikTravel)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Lucu, Museum Ini Punya Miniatur Kereta yang Bisa Dinaiki\" src=\"https://images.detik.com/community/media/visual/2017/06/19/d3c88845-bf56-478f-b733-e0ed4cd818be_169.jpg?w=620\" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'file_1497921265.JPG', 0, 0, 3, 1),
(7, '2017-06-20 01:35:33', 'Parah, Patung Putri Duyung Ikonnya Denmark Disiram Cat!', 'Admin', 'Teknologi', '<p>&nbsp;</p>\r\n\r\n<p><strong>Kopenhagen</strong>&nbsp;- Patung putri duyung yang jadi ikonnya Denmark, jadi korban tindakan vandalisme. Patung ini disiram cat berwarna biru putih. Parah banget!<br />\r\n<br />\r\nKalau Jakarta punya Patung &#39;Selamat Datang&#39;, maka di Kota Kopenhagen, Denmark patung paling terkenal yang jadi ikon ibu kota Denmark adalah patung mermaid, alias putri duyung. Patung ini sudah menjadi legenda dunia, dan jadi daya tarik wisata Kota Kopenhagen.<br />\r\n<br />\r\nNamun sayang, patung yang jadi buruan para wisatawan ini jadi korban tindakan vandalisme yang dilakukan tangan-tangan jahil yang tidak bertanggung jawab. Padahal, patung yang terinpirasi dari kisah dongeng Hans Cristian Andersen ini begitu populer di mata turis.<br />\r\n<br />\r\nDitelusuri detikTravel dari beberapa sumber, Senin (19/6/2017), patung ini disiram cat berwarna putih biru di sepanjang badan patung. Tindakan vandalisme ini ditemukan petugas pada Rabu (14/6) pekan lalu.<br />\r\n<br />\r\nTak hanya itu, patung ini juga ditulisi &#39;Free Abdulle&#39; di bagian pondasi depan patung. Rupanya ini merujuk pada Abdulle Ahmed, pengungsi asal Somalia yang ditahan di Denmark sejak tahun 2001.<br />\r\n<br />\r\nPetugas langsung bertindak cepat dengan membersihkan cat berwarna biru putih yang menempel di badan patung. Rupanya ini bukan kali pertama patung putri duyung Denmark di vandalisme.<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Petugas membersihkan cat yang menempel di patung (KobenhavnsPoliti/Twitter)\" src=\"https://s19.postimg.org/uxp0mvr1v/patung1.png\" />Petugas membersihkan cat yang menempel di patung (KobenhavnsPoliti/Twitter)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<br />\r\nSudah 2 kali tindak vandalisme dilakukan kepada patung Putri Duyung hanya dalam tempo waktu 2 minggu ini. Sebelumnya, pada Rabu (30/5) patung yang dibangun sejak tahun 1913, juga mengalami tindakan vandalisme serupa. Waktu itu, patung mermaid juga disiram oleh cat. Tapi bukan dengan warna putih biru, tapi dengan warna merah.<br />\r\n<br />\r\nPatung mermaid ini memang jadi sasaran empuk tindakan vandalisme. Tak hanya disiram cat, patung putri duyung juga pernah digulingkan dari batu pondasinya, sampai pernah juga kepalanya dipenggal.<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Patung putri duyung pernah juga disiram cat warna merah (KobenhavnsPoliti/Twitter)\" src=\"https://s19.postimg.org/rct53nmib/duyung2.png\" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'file_1497922344.JPG', 0, 0, 2, 1),
(8, '2017-06-20 01:35:41', 'Cuma di Thailand, Bisa Bergelantungan Bebas Seperti Hanoman', 'Admin', 'Komunitas', '<p><strong>Kathu</strong>&nbsp;- Tokoh Dewa Kera Hanoman digambarkan begitu lincah. Nah, traveler bisa coba bergelantungan bebas layaknya Hanoman di wahana rekreasi Thailand.<br />\r\n<br />\r\nJika kita mendengar kata Hanoman, yang terbayang adalah sosok monyet bukan? Sensasi inilah yang bisa traveler nikmati di Wahana Flying Hanuman.<br />\r\n<br />\r\nDiintip detikTravel pada situs resminya, Senin (19/6/2017) Wahana Flying Hanuman terletak di Soi Namtok Kathu, Jalan Wichitsongkram, Kathu, Thailand. Lokasinya berdekatan dengan Air Terjun Kathu. Jika berangkat dari Kota Bangkok, kira-kira memakan waktu 11 jam dengan mobil dan sekitar 1 jam dengan pesawat dari Bandara Internasional Phuket.<br />\r\n<br />\r\nAdapun sensasi yang ditawarkan oleh Flying Hanuman adalah menikmati keindahan hutan sambil bergelantungan seperti Hanoman. Ya, wahana ini berupa flying fox di atas hijaunya Hutan Kathu.<br />\r\n<br />\r\nNamun berbeda dengan wahana Jangan flying fox yang hanya memiliki satu pemberhentian. Di Flying Hanuman, terdapat 28 platform berbeda yang tersebar fi hutan lebat seluas 8 hektar!<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Tangga spiral yang akan kita lewati menuju platform flying fox (Flying Hanoman)\" src=\"https://images.detik.com/community/media/visual/2017/06/19/0ed464ab-97b2-424d-a475-c25cd1f5408d_169.jpg?w=620\" />Tangga spiral yang akan kita lewati menuju platform flying fox (Flying Hanoman)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nLokasi dari Flying Hanuman merupakan hutan ekologis yang memiliki berbagai jenis pepohonan dan hewan kecil di dalamnya. Namun dipastikan, bahwa wahana itu tidak akan merusak pepohonan dan mengganggu ekosistem. Wahana ini sangat aman dan berkonsep kekeluargaan.<br />\r\n<br />\r\nUntuk menikmati wahana ini, traveler bisa memilih paket-paket petualangan yag disedian. Harga paket wisata dimulai dari 2.300 Baht (Rp 900.000) sampai 3.490 Baht (Rp 1.367.000) per orang. Ada batasan umur di sini, anak-anak di bawah 4 tahun tidak boleh diizinkan mencoba.<br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Nikmati ketinggian flying fox dari ketinggian di tengah hijaunya hutan )Flying Hanoman)\" src=\"https://images.detik.com/community/media/visual/2017/06/19/b1840e3f-cde9-4232-bf19-1201346ccb13_169.jpg?w=620\" />Nikmati ketinggian flying fox dari ketinggian di tengah hijaunya hutan (Flying Hanoman)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nPetualangan traveler nanti akan dipandu oleh instruktur profesional, perlengkapan wahana berstandar internasional dan juga pastinya sensasi yang tidak akan pernah traveler lupakan.<br />\r\n<br />\r\nTraveler akan menikmati petualangan terbang dari ketinggian 40 Meter sambil menikmati hijaunya hutan, berjalan di jembatan layang dan menaiki tangga spiral yang tersebar di 28 platform.&nbsp;<br />\r\n<br />\r\nWahana ini buka setiap hari, dari pukul 08.00 pagi sampai jam 05.00 sore waktu setempat. Jadi kapan pun bisa datang ke sini. Selamat berpetualang ya!</p>\r\n', 'file_1497922513.JPG', 0, 0, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pepak`
--

CREATE TABLE `pepak` (
  `id_pepak` int(4) NOT NULL,
  `jawa` varchar(20) NOT NULL,
  `indonesia` varchar(20) NOT NULL,
  `deskripsi_jawa` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pepak`
--

INSERT INTO `pepak` (`id_pepak`, `jawa`, `indonesia`, `deskripsi_jawa`, `status`) VALUES
(1, 'Tindak', 'Pergi', 'dads', 1),
(3, 'Mangan', 'Makan', '<p>Mangan dalam bahasa Indonesia adalah Makan, kata mangan biasa digunakan dalam percakapan antara personal yang berusia. Misal antar teman</p>\r\n', 1),
(4, 'Turu', 'Tidur', 'Turu adalah tidur', 2),
(5, 'Karepmu', 'Terserah', 'Karepmu adalah terserah', 1),
(6, 'Tumbas', 'Beli', 'Tumbas adalah beli', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` bigint(200) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `path_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id_produk`, `nama_produk`, `jenis_produk`, `deskripsi_produk`, `harga_produk`, `posted_by`, `phone_number`, `tanggal_posting`, `status`, `path_gambar`) VALUES
(8, 'Celana Panjang', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 06:47:58', 1, ''),
(9, 'Sarung', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-06-19 06:50:47', 1, 'sarung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(3) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path_gambar` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul_slider`, `deskripsi`, `tanggal_posting`, `path_gambar`, `status`) VALUES
(13, 'Slider 1', '<p>Slider 1</p>\r\n', '2017-06-15 01:46:09', 'file_1497509169.jpg', 1),
(14, 'Slider 2', '<p>Slider 2</p>\r\n', '2017-06-15 07:15:11', 'file_1497509322.jpg', 2),
(15, 'Slider 3', '<p>Slider 3</p>\r\n', '2017-06-15 01:49:02', 'file_1497509342.jpg', 1),
(16, 'Slider 4', '<p>Slider 4</p>\r\n', '2017-06-15 01:49:30', 'file_1497509370.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'administrator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wow`
--

CREATE TABLE `wow` (
  `id_wow` int(4) NOT NULL,
  `judul_wow` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` date NOT NULL,
  `kategori_wow` varchar(100) NOT NULL,
  `path_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wow`
--

INSERT INTO `wow` (`id_wow`, `judul_wow`, `deskripsi`, `tanggal_posting`, `kategori_wow`, `path_gambar`) VALUES
(3, 'Wow tes 2', '														\r\n	bla bla												', '2017-05-27', 'Wow Sejarah', '1212'),
(5, 'wow tes 3', 'asdasdsa														\r\n													', '2017-05-27', 'Wow Fiksi', '1212'),
(8, 'Kuku Ternyata Bisa Tumbuh Sendiri', '														\r\n						Wew							', '2017-05-27', 'Wow Sains', '1212'),
(9, 'Sejarah manusian', '														\r\n											sdfasdasds		', '2017-05-27', 'Wow Sejarah', '1212'),
(12, 'Kisah pohon asam serta asal nama Semarang', '<p>Ada satu tumbuhan yang tumbuhnya jarang (Dalam bahasa Jawa disebut Arang), yakni pohon asam, atau dalam bahasa jawa disebut asem. Tumbuhan ini kemudian mendapat julukan Asemarang. Seiring berjalannya waktu, nama Asemarang pun berubah menjadi Semarang.</p>\r\n', '2017-06-21', 'Wow Sejarah', 'file_1498049717.jpg'),
(15, 'Pelabuhan Pragota yang kini menjadi Bergota', '<p>Pada abad ke-VIII, Semarang menjadi pelabuhan utama Kerajaan Mataram Kuno yang disebut dengan nama Pragota.&nbsp;</p>\r\n', '2017-06-21', 'Wow Sejarah', 'file_1498050427.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `coming`
--
ALTER TABLE `coming`
  ADD PRIMARY KEY (`id_coming`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `pepak`
--
ALTER TABLE `pepak`
  ADD PRIMARY KEY (`id_pepak`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wow`
--
ALTER TABLE `wow`
  ADD PRIMARY KEY (`id_wow`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coming`
--
ALTER TABLE `coming`
  MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pepak`
--
ALTER TABLE `pepak`
  MODIFY `id_pepak` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wow`
--
ALTER TABLE `wow`
  MODIFY `id_wow` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
