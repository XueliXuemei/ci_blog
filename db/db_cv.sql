-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2024 pada 21.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `isi_halaman`, `gambar`) VALUES
(29, 'Jasa Web Programing', '', ''),
(30, 'Toko Online', '<p>Aplikasi Android adalah program perangkat lunak yang dirancang untuk berjalan pada sistem operasi Android. Android sendiri adalah sistem operasi berbasis Linux yang terutama digunakan pada perangkat seluler seperti smartphone dan tablet. Berikut ini adalah penjelasan lebih detail mengenai aplikasi Android:</p>\r\n\r\n<p><strong>&nbsp;Pengertian Aplikasi Android</strong><br />\r\nAplikasi Android adalah perangkat lunak yang dapat diunduh dan diinstal pada perangkat yang menjalankan sistem operasi Android. Aplikasi ini dapat melakukan berbagai fungsi mulai dari komunikasi, hiburan, produktivitas, hingga edukasi.</p>\r\n\r\n<p><strong>&nbsp;Karakteristik Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Dikembangkan dengan Android SDK : Aplikasi Android biasanya dikembangkan menggunakan Android Software Development Kit (SDK), yang menyediakan alat dan API yang diperlukan untuk membangun aplikasi.</li>\r\n	<li>Ditulis dalam Bahasa Pemrograman Java atau Kotlin : Meskipun aplikasi Android dapat dikembangkan menggunakan berbagai bahasa pemrograman, Java dan Kotlin adalah yang paling umum.</li>\r\n	<li>Distribusi melalui Google Play Store : Sebagian besar aplikasi Android didistribusikan melalui Google Play Store, meskipun ada juga yang didistribusikan melalui toko aplikasi pihak ketiga atau langsung dari situs web pengembang.</li>\r\n	<li>Desain Responsif : Aplikasi Android biasanya dirancang agar dapat berfungsi pada berbagai ukuran layar dan jenis perangkat, dari smartphone kecil hingga tablet besar.</li>\r\n</ol>\r\n\r\n<p><strong>jenis-jenis Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Aplikasi Native : Aplikasi yang dikembangkan khusus untuk Android menggunakan Android SDK dan berjalan langsung di perangkat dengan performa optimal.</li>\r\n	<li>Aplikasi Web : Aplikasi yang pada dasarnya adalah situs web yang diakses melalui browser di perangkat Android. Beberapa di antaranya bisa dibungkus dalam bentuk aplikasi menggunakan teknologi seperti PWA (Progressive Web Apps).</li>\r\n	<li>Aplikasi Hybrid : Aplikasi yang menggunakan kombinasi teknologi web (HTML, CSS, JavaScript) dan teknologi native. Aplikasi ini biasanya dibangun menggunakan framework seperti React Native atau Flutter.</li>\r\n</ol>\r\n\r\n<p><strong>Contoh Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>WhatsApp : Aplikasi pesan instan yang memungkinkan pengguna mengirim pesan teks, gambar, video, dan melakukan panggilan suara atau video.</li>\r\n	<li>Spotify&nbsp;&nbsp;Aplikasi streaming musik yang memungkinkan pengguna mendengarkan berbagai macam lagu dan podcast.</li>\r\n	<li>Google Maps : Aplikasi navigasi yang menyediakan peta, petunjuk arah, dan informasi lalu lintas secara real-time.</li>\r\n</ol>\r\n\r\n<p><strong>Manfaat dan Kelebihan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Aksesibilitas yang Luas : Karena Android adalah sistem operasi yang paling banyak digunakan di dunia, aplikasi Android dapat menjangkau pengguna yang sangat luas.</li>\r\n	<li>Kustomisasi dan Fleksibilitas : Android memungkinkan tingkat kustomisasi yang tinggi, baik bagi pengguna maupun pengembang.</li>\r\n	<li>Komunitas Pengembang yang Besar : Dengan komunitas pengembang yang besar, ada banyak sumber daya, dokumentasi, dan forum yang tersedia untuk mendukung pengembangan aplikasi.</li>\r\n</ol>\r\n\r\n<p><strong>Tantangan dalam Pengembangan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Fragmentasi Perangkat : Beragamnya perangkat Android dengan spesifikasi yang berbeda-beda dapat menyulitkan pengembangan dan pengujian aplikasi.</li>\r\n	<li>Keamanan : Aplikasi Android rentan terhadap ancaman keamanan dan malware, sehingga pengembang harus selalu memperhatikan aspek keamanan dalam setiap tahap pengembangan.</li>\r\n</ol>\r\n\r\n<p>Dengan pemahaman ini, Anda bisa lebih menghargai kompleksitas dan kemampuan yang ditawarkan oleh aplikasi Android dalam kehidupan sehari-hari.</p>\r\n', ''),
(31, 'Aplikasi Android', '<p>Aplikasi Android adalah program perangkat lunak yang dirancang untuk berjalan pada sistem operasi Android. Android sendiri adalah sistem operasi berbasis Linux yang terutama digunakan pada perangkat seluler seperti smartphone dan tablet. Berikut ini adalah penjelasan lebih detail mengenai aplikasi Android:</p>\r\n\r\n<p><strong>&nbsp;Pengertian Aplikasi Android</strong><br />\r\nAplikasi Android adalah perangkat lunak yang dapat diunduh dan diinstal pada perangkat yang menjalankan sistem operasi Android. Aplikasi ini dapat melakukan berbagai fungsi mulai dari komunikasi, hiburan, produktivitas, hingga edukasi.</p>\r\n\r\n<p><strong>&nbsp;Karakteristik Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Dikembangkan dengan Android SDK : Aplikasi Android biasanya dikembangkan menggunakan Android Software Development Kit (SDK), yang menyediakan alat dan API yang diperlukan untuk membangun aplikasi.</li>\r\n	<li>Ditulis dalam Bahasa Pemrograman Java atau Kotlin : Meskipun aplikasi Android dapat dikembangkan menggunakan berbagai bahasa pemrograman, Java dan Kotlin adalah yang paling umum.</li>\r\n	<li>Distribusi melalui Google Play Store : Sebagian besar aplikasi Android didistribusikan melalui Google Play Store, meskipun ada juga yang didistribusikan melalui toko aplikasi pihak ketiga atau langsung dari situs web pengembang.</li>\r\n	<li>Desain Responsif : Aplikasi Android biasanya dirancang agar dapat berfungsi pada berbagai ukuran layar dan jenis perangkat, dari smartphone kecil hingga tablet besar.</li>\r\n</ol>\r\n\r\n<p><strong>jenis-jenis Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Aplikasi Native : Aplikasi yang dikembangkan khusus untuk Android menggunakan Android SDK dan berjalan langsung di perangkat dengan performa optimal.</li>\r\n	<li>Aplikasi Web : Aplikasi yang pada dasarnya adalah situs web yang diakses melalui browser di perangkat Android. Beberapa di antaranya bisa dibungkus dalam bentuk aplikasi menggunakan teknologi seperti PWA (Progressive Web Apps).</li>\r\n	<li>Aplikasi Hybrid : Aplikasi yang menggunakan kombinasi teknologi web (HTML, CSS, JavaScript) dan teknologi native. Aplikasi ini biasanya dibangun menggunakan framework seperti React Native atau Flutter.</li>\r\n</ol>\r\n\r\n<p><strong>Contoh Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>WhatsApp : Aplikasi pesan instan yang memungkinkan pengguna mengirim pesan teks, gambar, video, dan melakukan panggilan suara atau video.</li>\r\n	<li>Spotify&nbsp;&nbsp;Aplikasi streaming musik yang memungkinkan pengguna mendengarkan berbagai macam lagu dan podcast.</li>\r\n	<li>Google Maps : Aplikasi navigasi yang menyediakan peta, petunjuk arah, dan informasi lalu lintas secara real-time.</li>\r\n</ol>\r\n\r\n<p><strong>Manfaat dan Kelebihan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Aksesibilitas yang Luas : Karena Android adalah sistem operasi yang paling banyak digunakan di dunia, aplikasi Android dapat menjangkau pengguna yang sangat luas.</li>\r\n	<li>Kustomisasi dan Fleksibilitas : Android memungkinkan tingkat kustomisasi yang tinggi, baik bagi pengguna maupun pengembang.</li>\r\n	<li>Komunitas Pengembang yang Besar : Dengan komunitas pengembang yang besar, ada banyak sumber daya, dokumentasi, dan forum yang tersedia untuk mendukung pengembangan aplikasi.</li>\r\n</ol>\r\n\r\n<p><strong>Tantangan dalam Pengembangan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li>Fragmentasi Perangkat : Beragamnya perangkat Android dengan spesifikasi yang berbeda-beda dapat menyulitkan pengembangan dan pengujian aplikasi.</li>\r\n	<li>Keamanan : Aplikasi Android rentan terhadap ancaman keamanan dan malware, sehingga pengembang harus selalu memperhatikan aspek keamanan dalam setiap tahap pengembangan.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Dengan pemahaman ini, Anda bisa lebih menghargai kompleksitas dan kemampuan yang ditawarkan oleh aplikasi Android dalam kehidupan sehari-hari.</p>\r\n', 'afa6bcc13d9f6fdc01bb20ffbedd6369.jpg'),
(32, 'IT', '<p style=\"text-align:justify\">Aplikasi Android adalah program perangkat lunak yang dirancang untuk berjalan pada sistem operasi Android. Android sendiri adalah sistem operasi berbasis Linux yang terutama digunakan pada perangkat seluler seperti smartphone dan tablet. Berikut ini adalah penjelasan lebih detail mengenai aplikasi Android:</p>\r\n\r\n<p style=\"text-align:justify\"><strong>&nbsp;Pengertian Aplikasi Android</strong><br />\r\nAplikasi Android adalah perangkat lunak yang dapat diunduh dan diinstal pada perangkat yang menjalankan sistem operasi Android. Aplikasi ini dapat melakukan berbagai fungsi mulai dari komunikasi, hiburan, produktivitas, hingga edukasi.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>&nbsp;Karakteristik Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Dikembangkan dengan Android SDK : Aplikasi Android biasanya dikembangkan menggunakan Android Software Development Kit (SDK), yang menyediakan alat dan API yang diperlukan untuk membangun aplikasi.</li>\r\n	<li style=\"text-align: justify;\">Ditulis dalam Bahasa Pemrograman Java atau Kotlin : Meskipun aplikasi Android dapat dikembangkan menggunakan berbagai bahasa pemrograman, Java dan Kotlin adalah yang paling umum.</li>\r\n	<li style=\"text-align: justify;\">Distribusi melalui Google Play Store : Sebagian besar aplikasi Android didistribusikan melalui Google Play Store, meskipun ada juga yang didistribusikan melalui toko aplikasi pihak ketiga atau langsung dari situs web pengembang.</li>\r\n	<li style=\"text-align: justify;\">Desain Responsif : Aplikasi Android biasanya dirancang agar dapat berfungsi pada berbagai ukuran layar dan jenis perangkat, dari smartphone kecil hingga tablet besar.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>jenis-jenis Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Aplikasi Native : Aplikasi yang dikembangkan khusus untuk Android menggunakan Android SDK dan berjalan langsung di perangkat dengan performa optimal.</li>\r\n	<li style=\"text-align: justify;\">Aplikasi Web : Aplikasi yang pada dasarnya adalah situs web yang diakses melalui browser di perangkat Android. Beberapa di antaranya bisa dibungkus dalam bentuk aplikasi menggunakan teknologi seperti PWA (Progressive Web Apps).</li>\r\n	<li style=\"text-align: justify;\">Aplikasi Hybrid : Aplikasi yang menggunakan kombinasi teknologi web (HTML, CSS, JavaScript) dan teknologi native. Aplikasi ini biasanya dibangun menggunakan framework seperti React Native atau Flutter.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Contoh Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">WhatsApp : Aplikasi pesan instan yang memungkinkan pengguna mengirim pesan teks, gambar, video, dan melakukan panggilan suara atau video.</li>\r\n	<li style=\"text-align: justify;\">Spotify&nbsp;&nbsp;Aplikasi streaming musik yang memungkinkan pengguna mendengarkan berbagai macam lagu dan podcast.</li>\r\n	<li style=\"text-align: justify;\">Google Maps : Aplikasi navigasi yang menyediakan peta, petunjuk arah, dan informasi lalu lintas secara real-time.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Manfaat dan Kelebihan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Aksesibilitas yang Luas : Karena Android adalah sistem operasi yang paling banyak digunakan di dunia, aplikasi Android dapat menjangkau pengguna yang sangat luas.</li>\r\n	<li style=\"text-align: justify;\">Kustomisasi dan Fleksibilitas : Android memungkinkan tingkat kustomisasi yang tinggi, baik bagi pengguna maupun pengembang.</li>\r\n	<li style=\"text-align: justify;\">Komunitas Pengembang yang Besar : Dengan komunitas pengembang yang besar, ada banyak sumber daya, dokumentasi, dan forum yang tersedia untuk mendukung pengembangan aplikasi.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><strong>Tantangan dalam Pengembangan Aplikasi Android</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\">Fragmentasi Perangkat : Beragamnya perangkat Android dengan spesifikasi yang berbeda-beda dapat menyulitkan pengembangan dan pengujian aplikasi.</li>\r\n	<li style=\"text-align: justify;\">Keamanan : Aplikasi Android rentan terhadap ancaman keamanan dan malware, sehingga pengembang harus selalu memperhatikan aspek keamanan dalam setiap tahap pengembangan.</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Dengan pemahaman ini, Anda bisa lebih menghargai kompleksitas dan kemampuan yang ditawarkan oleh aplikasi Android dalam kehidupan sehari-hari.</p>\r\n', ''),
(26, 'The My Projects', '<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<p>testing blog codeignither 3&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"height:100px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><em><span style=\"font-family:Georgia,\"><span style=\"font-size:small\"><strong>&nbsp;</strong></span></span></em></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '0e0e33b09ade947436bc2f02e4baab26.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `alamat_website` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `alamat_website`, `meta_deskripsi`, `meta_keyword`, `favicon`) VALUES
(1, 'The My Projects', '', 'Kerja Keras, Kerja Cerdas, Kerja Tuntas dan Kerja Ikhlas', '', 'Dandi_Ripaldo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(3) NOT NULL,
  `title` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `title`, `gambar`) VALUES
(6, '', 'b.png'),
(7, '', 'SLIDE1.png'),
(8, '', 'SLIDE3.png'),
(9, '', 'SLIDE_4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(5, 'asep ngoding karo mamang gondes ', '2020-05-31 07:49:50', 'gak tau males ', '2020-07-01', '2020-07-01', 'Rest Area Gisting', '10.00-12.00 Wib', 'Administrator', 'Administrator1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'tes', '2024-05-19 16:44:31', 1, 'Administrator1', 0, 'ff57b5c39a470e8635d274fa25c50d70.png'),
(2, 'tes1', '2024-05-19 16:44:42', 1, 'Administrator1', 0, '85bcb6d101c13e9d94dc99754963c5dc.png'),
(3, 'tes3', '2024-05-19 16:44:56', 1, 'Administrator1', -3, 'f7b2ebc746cf0c93b6d3da9f74c1274d.png'),
(4, 'tes4', '2024-05-19 16:45:05', 1, 'Administrator1', -7, 'de99dc72c53672d22146ededc8cf7890.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(19, 'Kelengkapan UKS', '2020-02-17 06:05:57', '031b94bdd5224d8a58d9b97b1c3da31b.jpg', 5, 1, 'Administrator'),
(20, 'Kelengkapan P3K UKS', '2020-02-17 06:07:25', 'aa0886d41ee887e62452caf97018545d.jpg', 5, 1, 'Administrator'),
(38, 'asep ngoding', '2024-05-19 19:32:51', '5e7aa7043e2e6d1c1c2b9ff7e9bddfce.png', 1, 1, 'Administrator1'),
(39, 'kobo kanaeru ngoding', '2024-05-19 19:33:04', '7ae5ca39d485b985b7c63728f925ac6c.png', 1, 1, 'Administrator1'),
(40, 'tes 1', '2024-05-19 19:33:31', '4174e91af7c27a230e6e4f6b63115273.png', 1, 1, 'Administrator1'),
(41, 'testing artikel', '2024-05-19 19:34:00', 'd148c04084365054df11d8ae05d82911.png', 1, 1, 'Administrator1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-21 03:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 07:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 13:51:07', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Meta 4', '2024-02-28 04:18:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1),
(4, 'dvsdvdv', 'ajjariewfz@gmail.com', ' dasdsadasdasdasdsadasdasdasdasdasdasdasdas', '2020-04-15 23:14:28', '1', 30, 0),
(5, 'Administrator1', '', 'ok<br />\r\n', '2020-04-15 23:29:56', '1', 30, 4),
(6, 'makan', 'ajjarief@gmail.com', ' sdasdasdasd', '2020-04-16 01:47:39', '0', 30, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(3, 'gue', 'L', 'gue', '202cb962ac59075b964b07152d234b70', 'gue@gmail.com', '0821111111', 1, '1', '2024-05-19 19:43:38', '831c1ab46077f4eca34301ea510fc376.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(0, '2020-04-02 14:27:33', '::1', 'Chrome'),
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-02-15 01:00:47', '::1', 'Chrome'),
(932, '2020-02-17 04:04:59', '::1', 'Chrome'),
(933, '2020-04-03 02:12:01', '::1', 'Chrome'),
(934, '2020-04-03 17:42:45', '::1', 'Chrome'),
(935, '2020-04-06 18:50:04', '::1', 'Firefox'),
(936, '2020-04-11 04:13:53', '::1', 'Chrome'),
(937, '2020-04-12 03:10:11', '::1', 'Chrome'),
(938, '2020-04-13 01:42:49', '::1', 'Chrome'),
(939, '2020-04-15 17:42:53', '::1', 'Firefox'),
(940, '2020-04-18 08:13:14', '::1', 'Chrome'),
(941, '2020-04-24 17:33:10', '::1', 'Chrome'),
(942, '2020-04-26 16:07:01', '::1', 'Chrome'),
(943, '2020-05-31 07:46:22', '::1', 'Firefox'),
(944, '2020-06-08 16:21:01', '::1', 'Firefox'),
(945, '2020-06-08 18:48:50', '::1', 'Firefox'),
(946, '2020-06-10 03:04:26', '::1', 'Firefox'),
(947, '2020-06-18 10:02:13', '::1', 'Firefox'),
(948, '2020-06-19 18:45:48', '::1', 'Firefox'),
(949, '2021-03-08 05:29:37', '127.0.0.1', 'Firefox'),
(950, '2024-02-27 18:05:53', '127.0.0.1', 'Firefox'),
(951, '2024-02-27 18:07:39', '::1', 'Chrome'),
(952, '2024-05-19 14:02:37', '::1', 'Chrome'),
(953, '2024-05-19 18:02:58', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(100) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(6, 'asep ngoding', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '2024-05-19 19:38:22', 1, 'Meta 4', 0, 'berita-asep-ngoding.png', 1, 'Administrator1', 0, 'asep-ngoding'),
(7, 'kobo kanaeru ngoding', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>\r\n', '2024-05-19 19:38:48', 1, 'Meta 4', 0, 'berita-kobo-kanaeru-ngoding.png', 1, 'Administrator1', 0, 'kobo-kanaeru-ngoding'),
(8, 'gondes menang tournament eMLe', '', '2024-05-19 19:39:46', 1, 'Meta 4', 0, 'berita-gondes-menang-tournament-emle.png', 1, 'Administrator1', 0, 'gondes-menang-tournament-emle');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=954;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
