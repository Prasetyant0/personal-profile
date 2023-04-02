-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2023 pada 16.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `about`, `foto`, `nama`, `pekerjaan`) VALUES
(21, 'Hallo saya Prasetyanto Tri Prabowo biasa dipanggil Bowo atau Pras. Saya adalah seorang junior web developer yang sedang mempelajari berbagai bahasa pemrograman seperti PHP, Javascript, dan lain-lain. Saya percaya bahwa keahlian ini sangat penting di era digital saat ini, dan dapat membuka banyak peluang karir di masa depan. Saat belajar pemrograman web, saya merasa sangat senang ketika berhasil membuat halaman web sederhana yang dapat diakses oleh semua orang. Hal ini memotivasi saya untuk terus belajar dan memperbaiki keterampilan pemrograman web.', '6422802d73bdf.jfif', 'Prasetyanto Tri Prabowoo', 'Pelajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `achivement`
--

CREATE TABLE `achivement` (
  `id_achivement` int(11) NOT NULL,
  `achivement` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `achivement`
--

INSERT INTO `achivement` (`id_achivement`, `achivement`, `foto`) VALUES
(1, 'Juara 1 hiking rally Man Darussalam', '64188cfae76e0.jfif'),
(3, 'Juara 3 Pidato Bahasa Arab Antar Sekolah', '641aaa09a45f2.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biography`
--

CREATE TABLE `biography` (
  `id_bio` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biography`
--

INSERT INTO `biography` (`id_bio`, `nama`, `email`, `address`, `phone`, `title`, `deskripsi`, `foto`, `tanggal_lahir`) VALUES
(1, 'Prasetyanto Tri Prabowo', 'Prasetyantotp@gmail.com', 'Margasari, RT.08/RW.05, Bojongkantong, Kec. Langensari, Kota Banjar, Jawa Barat 46325', '6285861526198', 'Pelajar', 'Perkenalkan, nama saya Prasetyanto Tri Prabowo. Saya sekarang masih berusia 16 tahun dan saya bersekolah di SMK Negeri 3 Banjar kelas 11 di jurusan RPL (rekayasa perangkat lunak). Sebelum masuk SMK saya menempuh pendidikan di Madrasah Tsanawiyah Negeri 2 Banjar selama tiga tahun dan kemudian melanjutkan ke Sekolah Menengah Kejuruan (SMK) di jurusan Rekayasa Perangkat Lunak. Saya sangat tertarik dalam bidang komputer khususnya di bidang web development dan berencana untuk mengembangkan keterampilan saya dalam bidang ini untuk mencapai tujuan karir saya di masa depan. Saya berusaha untuk memanfaatkan waktu saya di SMK untuk belajar sebanyak mungkin dan berpartisipasi dalam berbagai kegiatan sekolah untuk mengembangkan diri. Saya yakin bahwa dengan belajar keras dan mengembangkan keterampilan yang diperlukan, saya dapat mencapai tujuan saya di masa depan. Saya sekarang sedang menjalani PKL (praktek kerja lapangan) di PT.Lauwba Techno Indonesia yang bertempat di Yogyakarta.', '64186ff3a0b25.jpg', '2006-06-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `blog` varchar(225) NOT NULL,
  `sub` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `blog`, `sub`, `deskripsi`, `foto`, `tanggal_post`) VALUES
(3, 'Memahami PHP', 'Apa Itu PHP? Apa saja keunggulan bahasa pemrograman PHP? Library dan Framework apa saja yang dimiliki PHP?', '<h4 style=\"text-align: justify; line-height: 1.5;\">Apa Itu PHP? Apa saja keunggulan bahasa pemrograman PHP? Library dan Framework apa saja yang dimiliki PHP?</h4>\r\n<div style=\"text-align: justify; line-height: 1.5;\">\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p>PHP merupakan bahasa pemrograman sumber terbuka yang digunakan untuk mengembangkan aplikasi web dinamis. PHP biasanya dijalankan pada server web dan digunakan untuk menghasilkan konten dinamis pada halaman web. Bahasa pemrograman ini sangat populer di antara pengembang web karena mudah dipelajari dan digunakan, serta memiliki banyak fitur dan kemampuan yang sangat bermanfaat.</p>\r\n<p>Salah satu keunggulan utama dari PHP adalah kemampuannya untuk berintegrasi dengan berbagai jenis database, termasuk MySQL, PostgreSQL, dan Oracle. Dengan fitur ini, PHP memungkinkan pengembang web untuk membuat aplikasi yang dapat mengakses dan mengelola data dari berbagai sumber. Selain itu, PHP juga mendukung berbagai jenis protokol seperti HTTP, SMTP, dan FTP, sehingga memungkinkan aplikasi web untuk berkomunikasi dengan server dan layanan lain secara efisien.</p>\r\n<p>PHP memiliki banyak library dan framework yang sangat membantu dalam pengembangan aplikasi web. Beberapa framework terkenal yang menggunakan PHP sebagai basisnya antara lain Laravel, CodeIgniter, dan Symfony. Framework-framework ini menyediakan kerangka kerja dan struktur untuk pengembangan aplikasi web yang dapat mempercepat proses pengembangan dan meningkatkan kualitas kode. Selain itu, PHP juga memiliki banyak library standar seperti libxml, gd, dan zip, yang memudahkan pengembang untuk memanipulasi dan memproses data dengan cepat dan efisien.</p>\r\n<p>Secara keseluruhan, PHP adalah bahasa pemrograman yang sangat kuat dan fleksibel, dan cocok untuk berbagai jenis proyek pengembangan aplikasi web. Dengan dukungan komunitas yang besar dan terus berkembang, PHP terus menjadi bahasa pemrograman yang populer dan diminati oleh pengembang web di seluruh dunia.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p style=\"text-align: justify; line-height: 1.5;\">&nbsp;</p>', '6419e4cc03a72.jfif', '2023-03-16'),
(4, 'Mengenal Fullstack Developer', 'Apa itu Fullstack Developer? Bagaimana cara menjadi Fullstack Developer? Apa saja yang harus di persiapkan jika kita ingin menjadi Fullstack Developer?', '<h4 style=\"text-align: justify; line-height: 1.5;\">Apa itu Fullstack Developer? Bagaimana cara menjadi Fullstack Developer? Apa saja yang harus di persiapkan jika kita ingin menjadi Fullstack Developer?</h4>\r\n<div>\r\n<div style=\"text-align: justify; line-height: 1.5;\">\r\n<p style=\"text-align: justify; line-height: 1.5;\">Fullstack developer adalah seorang profesional yang memiliki keahlian dalam pengembangan aplikasi web dari sisi front-end hingga back-end. Mereka memiliki pemahaman yang luas mengenai teknologi web seperti HTML, CSS, JavaScript, server-side scripting, database, dan infrastruktur web. Fullstack developer juga mengerti prinsip-prinsip pengembangan aplikasi seperti arsitektur, desain dan pengujian, serta mampu mengaplikasikan metodologi pengembangan seperti Agile dan Scrum.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Keterampilan-keterampilan yang dimiliki oleh fullstack developer memungkinkan mereka untuk membuat aplikasi web yang kompleks dan interaktif dari awal hingga akhir. Mereka dapat membuat halaman web yang menarik dan interaktif, mengelola server dan database, mengintegrasikan berbagai layanan web, dan menyiapkan aplikasi untuk deployment ke lingkungan produksi.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Keuntungan dari memiliki seorang fullstack developer adalah kemampuannya untuk mengembangkan aplikasi web secara holistik, yang mempercepat waktu pengembangan, mengurangi biaya, dan memudahkan pengelolaan aplikasi. Selain itu, fullstack developer dapat menjadi penghubung antara front-end dan back-end tim pengembang, sehingga memastikan kesesuaian dan konsistensi aplikasi secara keseluruhan.</p>\r\n<p>Untuk menjadi seorang Fullstack Developer, ada beberapa keterampilan yang harus dimiliki, seperti pemahaman tentang bahasa pemrograman, kerangka kerja (framework), pengalaman dalam pengembangan aplikasi web, dan kemampuan untuk bekerja dengan basis data. Selain itu, seorang Fullstack Developer juga harus mampu beradaptasi dengan perubahan teknologi dan tren pasar.</p>\r\n<p>Untuk mempersiapkan diri menjadi seorang Fullstack Developer, seseorang harus memulai dengan mempelajari dasar-dasar bahasa pemrograman seperti HTML, CSS, dan JavaScript. Kemudian, memahami konsep back-end dan database seperti PHP, Python, NodeJS, dan SQL. Setelah memahami dasar-dasar pemrograman, seseorang dapat memperdalam pengetahuan dan keterampilannya dengan mempelajari kerangka kerja populer seperti Laravel, React, dan Angular.</p>\r\n</div>\r\n<div style=\"text-align: justify; line-height: 1.5;\">&nbsp;</div>\r\n</div>', '6419d65ad2b3a.jpg', '2023-03-21'),
(5, 'Mengenal Laravel Framework PHP', 'Apa itu Laravel? Mengapa Laravel sekarang begitu populer? Apa saja yang harus kita siapkan sebelum memulai coding menggunakan Laravel?', '<h4 style=\"text-align: justify; line-height: 1.5;\">Apa itu Laravel? Mengapa Laravel sekarang begitu populer? Apa saja yang harus kita siapkan sebelum memulai coding menggunakan Laravel?</h4>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Laravel adalah sebuah framework web open-source yang dibangun dengan bahasa pemrograman PHP dan dirancang untuk memudahkan proses pengembangan aplikasi web. Dikembangkan pertama kali oleh Taylor Otwell pada tahun 2011, Laravel kini menjadi salah satu framework paling populer di dunia, digunakan oleh ribuan pengembang di seluruh dunia untuk membangun aplikasi web yang efisien dan terstruktur.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Keunggulan Laravel yang membuatnya begitu populer antara lain adalah arsitektur MVC (Model-View-Controller) yang fleksibel, sistem routing yang mudah digunakan, fitur-fitur bawaan seperti autentikasi, caching, dan validasi form, serta komunitas pengguna yang besar dan aktif. Selain itu, Laravel juga menggunakan bahasa pemrograman PHP yang populer dan mudah dipelajari, sehingga menjadi pilihan yang tepat bagi pengembang web pemula maupun yang sudah berpengalaman.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Namun, sebelum memulai coding dengan Laravel, ada beberapa hal yang harus dipersiapkan terlebih dahulu. Pertama, pastikan bahwa Anda sudah memahami dasar-dasar pemrograman web seperti HTML, CSS, dan JavaScript. Selain itu, Anda juga perlu menguasai bahasa pemrograman PHP serta konsep-konsep dasar seperti array, loop, dan fungsi.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Selanjutnya, pastikan bahwa Anda sudah menginstal Laravel dan mengatur lingkungan pengembangan Anda dengan benar. Anda juga perlu memahami struktur direktori Laravel, menguasai penggunaan terminal atau command prompt, dan mempelajari konsep-konsep dasar seperti routing, controller, dan view.</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">Dengan persiapan yang matang dan pengetahuan yang cukup, Anda dapat memulai pengembangan aplikasi web dengan Laravel dan memanfaatkan semua keunggulannya untuk membangun aplikasi yang efisien dan terstruktur.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '6419e473be69a.jfif', '2023-03-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `iframe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `address`, `phone`, `email`, `instagram`, `iframe`) VALUES
(1, 'Margasari, RT.08/RW.05, Bojongkantong, Kec. Langensari, Kota Banjar, Jawa Barat 46325', '6285861526198', 'Prasetyantotp@gmail.com', 'prasty_08', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253225.74006501382!2d108.47435350531742!3d-7.392814130943811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6589d51f17752f%3A0x3c2cc2f9d5ee991f!2sRumah%20Bowo!5e0!3m2!1sid!2sid!4v1679216781560!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" class=\"mapembed\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `education` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `education`, `deskripsi`, `foto`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'MTsN 2 Kota Banjar', 'Madrasah Tsanawiyah adalah satuan pendidikan formal dalam binaan Menteri Agama yang menyelenggarakan pendidikan umum dan kejuruan dengan kekhasan agama Islam. MTsN 2 Kota Banjar terletak di Bojongkantong, Kec. Langensari, Kota Banjar, Jawa Barat.', '641879eba0867.png', 2018, 2021),
(3, 'SMK Negeri 3 Banjar ', 'SMK Negeri 3 Banjar,  merupakan salah satu dari 4 SMK Negeri di Kota Banjar. Terletak di jalan Julaeni, Langensari Kota Banjar, dan juga termasuk sekolah favorit,  dan menjadi icon pendidikan di Kota Banjar. Program studi di SMK Negeri 3 Banjar ada 6', '64187f74d3574.png', 2021, 2024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id_experience`, `experience`, `deskripsi`, `foto`) VALUES
(1, 'Ketua Osis', 'Saya pernah menjadi ketua osis di MTsN 2 Kota Banjar selama kurang lebih 2 tahun. Ini adalah pengalaman pertama saya menjadi pemimpin osis di MTsN 2 Kota Banjar.', '6418aa5b1a3e2.png'),
(3, 'Hiking Rally', 'Saya pernah mengikuti lomba hiking rally di beberapa kota bahkan pernah sampai ke tingkat kabupaten/kota. Saat lomba hiking rally di MAN Darussalam saya mendapatkan juara 1. ', '64194dc29ed4c.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobby`
--

CREATE TABLE `hobby` (
  `id_hobby` int(11) NOT NULL,
  `hobby` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hobby`
--

INSERT INTO `hobby` (`id_hobby`, `hobby`, `deskripsi`, `foto`) VALUES
(1, 'Mancing', 'Mancing adalah kegiatan yang paling saya sukai dan mancing adalah hobby yang paling sering saya lakukan karena dari kegiatan mancing saya tau arti sabar menunggu sesuatu yang belum pasti.', '641334e77daaa.jfif'),
(3, 'Membaca Buku Filsafat', 'Membaca buku-buku filsafat adalah hobby saya karena filsafat membantu saya untuk bisa berpikir lebih kritis.', '6422eca379754.jpg'),
(4, 'Futsal', 'Saya suka bermain futsal dengan teman sekelas, saya sering bermain futsal di sore hari kadang juga di malam hari saat weekend.', '641b0d6dc536b.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `namapang` varchar(225) NOT NULL,
  `profesi` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `drive` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `nama`, `namapang`, `profesi`, `foto`, `drive`) VALUES
(5, 'Prasetyanto Tri Prabowo', 'Pras', 'Fullstack Developer', '6417d72527d13.jpg', 'https://drive.google.com/file/d/1YMeZZbZ6UfJTkwJUVwkM04AToZ5eKZFj/view?usp=share_link');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'prasetyanto', 'Bowo080606*#*#.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `muka`
--

CREATE TABLE `muka` (
  `id_muka` int(11) NOT NULL,
  `mukaku` varchar(50) NOT NULL,
  `jeneng` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `muka`
--

INSERT INTO `muka` (`id_muka`, `mukaku`, `jeneng`) VALUES
(1, '6423c1de6d130.jpg', 'Prasetyanto Tri Prabowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `project` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `project`, `deskripsi`, `foto`) VALUES
(1, 'Catatan Perjalanan', 'Website catatan perjalanan yang di buat dengan framework laravel 8, yang tujuannya untuk mencatat perjalanan yang akan di lakukan atau mencetak surat dispensasi.', '6423c309be778.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `skill` varchar(225) NOT NULL,
  `persen` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `skill`, `persen`, `foto`) VALUES
(1, 'PHP', 70, '6417bac2be84e.png'),
(3, 'Javascript', 50, '6417b86156c8b.png'),
(4, 'HTML', 95, '6417b86ed2562.png'),
(5, 'CSS', 65, '6416855a05a91.png'),
(6, 'Python', 30, '641686297f7ad.png'),
(7, 'Laravel', 52, '6417bad45e411.png'),
(8, 'Bootstrap', 85, '6417baf8c3850.png'),
(9, 'Tailwind ', 56, '6417bb1e0d6a1.png'),
(10, 'NodeJS', 38, '641687e36eaba.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `title` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `nama`, `title`, `deskripsi`, `foto`) VALUES
(1, 'Dika Cahya Nugraha', 'Pelajar', 'Terimakasih bowo sudah membantu saya dalam menyelesaikan project peduli diri yang kemarin.', '641ba7b56ed39.jpg'),
(2, 'Teguh Tri Widodo', 'Pelajar', 'Wihhh kamu keren wo. Terimakasih ya sudah membimbing saya untuk mempelajari php dasar.', '641bab237ef92.jpg'),
(3, 'Novan Sahar', 'Pelajar', 'Maturnuwun wo kemaren sudah benerin office saya yang trial. Besok kalo kamu pulang aku traktir makan dehh.', '641babd5d094e.jpg'),
(4, 'Geo Prima Jovi', 'Pelajar', 'Mantap wo, lanjutkan untuk membantu teman yang sedang mengalami banyak error di project nya.', '641bae439dbf9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `achivement`
--
ALTER TABLE `achivement`
  ADD PRIMARY KEY (`id_achivement`);

--
-- Indeks untuk tabel `biography`
--
ALTER TABLE `biography`
  ADD PRIMARY KEY (`id_bio`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Indeks untuk tabel `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id_hobby`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `muka`
--
ALTER TABLE `muka`
  ADD PRIMARY KEY (`id_muka`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `achivement`
--
ALTER TABLE `achivement`
  MODIFY `id_achivement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `biography`
--
ALTER TABLE `biography`
  MODIFY `id_bio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id_hobby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `muka`
--
ALTER TABLE `muka`
  MODIFY `id_muka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
