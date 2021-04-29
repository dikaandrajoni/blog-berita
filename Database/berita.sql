-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 06:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `tgl_posting`) VALUES
(5, 1, 1, 'Amazon Ungkap Rekor Baru Serangan DDoS', 'PutraMinang News - Amazon dikabarkan berhasil menangkal serangan siber berjenis DDoS (distributed denial-of-service) terbesar di dunia. Setidaknya begitu menurut laporan terbaru yang dirilis Amazon terkait beragam ancaman yang ditangkal oleh sistem keamanan siber perusahaan, AWS Shield, pada kuartal pertama (Q1) 2020. Berdasarkan laporan tersebut, Amazon mengungkap bahwa perusahaan berhasil menepis \"rekor baru\" serangan DDoS sebesar 2,3 terabit per detik (Tbps) pada minggu ketiga Februari lalu. Akibat serangan tersebut, Amazon bahkan sempat menjadikan tiga hari di dalam minggu tersebut sebagai \"hari darurat\". Jika dibandingkan serangan DDoS yang pernah terjadi sebelumnya, serangan yang dialami Amazon tersebut terbilang jauh lebih tinggi. Sebagaimana dilansir TheVerge, rekor serangan siber terbesar terjadi pada 2018 lalu, di mana platform keamanan NetScout Arbor \"hanya\" menangkal sekitar 1,7 Tbps serangan DDoS. Sekitar satu bulan sebelumnya, platform coding GitHub mengaku bahwa situsnya menerima trafik sebesar 1,35 Tbps dari serangan DDoS. \r\n\r\nAmazon sendiri mengaku belum pernah menerima serangan DDoS dengan jumlah sederas itu. Bahkan, terhitung sejak Q2 2018 hingga Q4 2019, serangan DDoS yang ditangkis AWS Shiled disebut tak kurang dari 1 Tbps. Meski tercatat paling besar, tidak disebutkan siapa pelaku di balik serangan DDoS tersebut, berikut situs atau platform pengguna AWS mana yang dijadikan sasaran oleh para peretas (hacker). Yang jelas, metode serangan DDoS yang paling banyak dipakai adalah \"CLDAP reflection\". \r\n\r\nSebagai informasi, DDoS merupakan serangan paket data dalam jumlah besar ke server. Masifnya jumlah paket data yang diterima dalam waktu bersamaan bisa mengakibatkan server melambat, bahkan tumbang. Adapun CLDAP reflection sendiri merupakan metode DDoS yang memanfaatkan server pihak ketiga (third-party) untuk melipatgandakan jumlah data yang dikirim ke alamat IP korban. Data yang dilipatgandakan itu bisa berkisar 56 hingga 70 kali lipat dari besar data aslinya, sebagaimana dihimpun KompasTekno dari ZDNet, Sabtu (20/6/2020).\r\n\r\n', '7778955ec746d5589a1.jpg', '2020-06-24 02:59:54'),
(6, 1, 1, 'Zoom Bawa Fitur Perlindungan Keamanan untuk Pengguna Gratis', 'PutraMinang News - Pada awal bulan Juni ini, Zoom mengatakan bahwa hanya pelanggan berbayar yang akan mendapatkan fitur keamanan enkripsi end-to-end. Namun, Zoom kini berubah pikiran. Melalui blog resminya, CEO Zoom, Eric S. Yuan mengatakan bahwa fitur keamanan tersebut juga akan diberikan kepada semua pengguna, termasuk pengguna Zoom gratis. \" Enkripsi end-to-end ini menjadi fitur tambahan yang kami tawarkan untuk semua pengguna Zoom di seluruh dunia baik yang gratis maupun berbayar,\" kata Yuan.\r\n\r\nFitur keamanan ini akan mulai diujicoba untuk semua pengguna Zoom pada awal bulan Juli mendatang.\r\nNamun, perlu diingat, fitur keamanan enkripsi end-to-end harus diaktifkan secara manual oleh pengguna. Pengguna yang bertindak sebagai host dalam konferensi video, akan dapat mengaktifkan atau menonaktifkan fitur keamanan tersebut pada setiap rapat yang telah dilakukan. Sebab, enkripsi end-to-end ini akan membatasi sejumlah fitur dan fungsi saat konferensi video berlangsung. Selain itu, untuk memastikan bahwa fitur keamanan ini tidak disalahgunakan, Zoom akan mewajibkan pengguna untuk melakukan verifikasi identitas. Salah satunya dengan menggunakan nomor ponsel. Dengan enkripsi ini, Zoom mengklaim bahwa privasi pengguna akan semakin terjaga ketika melakukan konferensi video. Dihimpun PutraMinang News dari Pocket Now, Kamis (18/6/2020) awalnya, rencana Zoom yang menghadirkan fitur keamanan hanya untuk pengguna berbayar mendapat protes dari para pengguna. \r\n\r\nMelalui Twitter, para pengguna Zoom mengkritisi kebijakan tersebut. Para pengguna menganggap Zoom \"pilih kasih\" dalam menerapkan fitur keamanan ini. Konsultan keamanan Zoom, Alex Stamos kemudian memberikan penjelasan mengenai kebijakan perusahaannya. Stamos menyebut bahwa saat ini Zoom kesulitan menyeimbangkan cara untuk meningkatkan privasi sekaligus mengurangi penyalahgunaan produknya Penyalahgunaan yang dimaksud mengacu pada beberapa tindakan ilegal yang terjadi pada aplikasi Zoom beberapa waktu lalu, seperti ujaran kebencian dan konten eksploitatif anak.\r\n\r\n', '1065865ec1df079339d.jpg', '2020-06-24 03:06:22'),
(7, 2, 1, 'Klasemen Liga Spanyol: Barcelona Gusur Madrid', 'Barcelona - Barcelona menggusur Real Madrid dari puncak klasemen Liga Spanyol. Hal tersebut membuat perebutan posisi teratas LaLiga semakin sengit.\r\nBarcelona berhasil menang tipis 1-0 atas Atheltic Bilbao di Camp Nou, Rabu (24/6/2020) dini hari WIB. Gol tunggal anak asuhan Quique Setien diciptakan oleh Ivan Rakitic.\r\n\r\nTambahan tiga angka membuat Blaugrana kini mengumpulkan 68 poin. Mereka berhasil menggusur Real Madrid dari puncak klasemen dengan keunggulan tiga angka.\r\n\r\nLos Blancos sendiri belum memainkan laga pekan ke-31 mereka. Pasukan Zinedine Zidane baru akan berlaga, Kamis (25/6/2020) dini hari WIB dengan menghadapi Real Mallorca di Estadio Alfredo Di Stefano.\r\n\r\nSementara rival sekota Madrid, Atletico Madrid mampu merangsek ke peringkat ketiga dengan 55 angka. Mereka menyalip posisi Sevilla, usai menang 1-0 atas tuan rumah Levante di Estadio Camilo Cano.\r\n\r\nSevilla harus merelakan posisinya dikangkangi oleh Atletico karena hanya mampu bermain imbang 2-2 dengan Villarreal, Selasa (23/6/2020) dini hari WIB. Tim asal Andalusia tersebut kini di posisi keempat dengan raihan 53 poin.\r\n\r\n', '5781726ae543da-dd12-4b99-8a88-ecef508db77c_169.jpg', '2020-06-24 03:21:45'),
(8, 5, 1, 'Cerita Akhir Pekan: Beragam Metode Belajar di Rumah yang Efektif di Berbagai Negara', 'Pandemi corona Covid-19 yang terjadi di dunia membuat berbagai negara membuat kebijakan baru tentang pendidikan. Pembelajaran yang biasanya dilakukan secara tatap muka secara langsung antara guru dan siswa, berubah menjadi belajar di rumah.\r\n\r\nKebijakan belajar di rumah dilaksanakan di berbagai belahan dunia, termasuk Indonesia. Hal itu dilakukan untuk menghambat penyebaran virus corona Covid-19.\r\n\r\nPandemi tak menyurutkan langkah negara-negara untuk mencerdaskan warganya. Berbagai upaya dilakukan agar transfer pengetahuan antara guru dan murid tetap berlangsung.\r\n\r\nAktivitas belajar di rumah dalam masa pandemi mengandalkan kekuatan teknologi dan telekomunikasi, yaitu internet. Belajar dari rumah dilakukan lewat daring (dalam jaringan) atau online.\r\n\r\nBerbagai metode belajar berbasiskan teknologi dan telekomunikasi itu pun dilakukan. Ragam sarana belajar menjadi kian dikenal publik dan anak-anak.\r\n\r\nBeberapa di antaranya Zoom, Google Form, Google Class Room, WhatsApp, Instagram, televisi. Semua itu digunakan untuk bisa saling berkomunikasi antara guru dan murid. \r\n', '524850002886100_1584664090-presentation-341444-01.jpg', '2020-06-24 03:29:26'),
(9, 2, 1, 'Pelatih PSS Sleman Berencana Kumpulkan Pemain Secara Bertahap', 'Sleman - PSSI berencana melanjutkan Shopee Liga 1 2020 pada September atau Oktober mendatang. Tim kontestan liga pun mulai bersiap dengan mengumpulkan pemain.\r\n\r\nPelatih PSS Sleman, Dejan Antonic mengaku punya cara tersendiri untuk mengumpulkan tim. Dia sadar dengan kondisi pandemi Corona ini tidak mungkin langsung mengumpulkan tim secara bersamaan.\r\n\r\nDejan akan mengedepankan protokol kesehatan dengan tak mengundang pemain kembali ke Sleman secara bersamaan.\r\n\r\n\"Kita akan lakukan step by step untuk mengumpulkan pemain,\" kata Dejan, Selasa (23/6/2020).\r\n\r\nPara pemain Suoer Elang Jawa nantinya akan datang dengan sistem kelompok. Setiap kelompok berisi delapan pemain.\r\n\r\n\"Jadi kelompok pertama delapan orang dan seterusnya sampai lengkap,\" terangnya.\r\n\r\nPelatih asal Serbia itu juga memantau kondisi kesehatan pemain. Dia tidak ingin ada yang membawa virus Corona. Untuk itu, setiap pemain yang datang diwajibkan untuk tes.\r\n\r\n\"Setiap kelompok yang datang wajib tes kesehatan,\" ungkap mantan pelatih Madura United itu.\r\n', '78306901868503-d78e-44b5-aac1-d881e115281c.jpg', '2020-06-24 03:44:26'),
(10, 2, 1, 'Shopee Liga 1 2020 Lanjut Oktober, Akan seperti Liga di Eropa', 'Lanjutan Shopee Liga 1 2020 bakal bergulir dari bulan Oktober 2020. Dengan jadwal rampung Februari 2021, kompetisi akan berjalan lintas tahun seperti di Eropa.\r\nPT Liga Indonesia Baru (LIB) selaku operator kompetisi mengaku hal itu tak bisa dihindari. Idealnya kompetisi berlangsung dalam satu tahun dengan batas waktu hingga akhir tahun.\r\n\r\n\"Iya lintas tahun, jadi nanti kami akan mengikuti (kompetisi) di Eropa. Rencananya kompetisi akan selesai pada Februari (2021). Berarti sekitar lima bulan, dari Oktober sampai Februari,\" kata Direktur Operasional PT LIB Sudjarno kepada wartawan.\r\n\r\nPT LIB berencana juga akan menerapkan format kompetisi yang sama pada musim-musim selanjutnya. Jadi, kompetisi musim 2021 juga akan menerapkan format serupa.\r\n\r\nNamun, khusus untuk musim selanjutnya akan dibahas dahulu di Kongres Tahunan PSSI. Khusus musim 2020 adalah kasus berbeda karena pandemi virus corona.\r\n\r\n\"Nanti konsekuensinya untuk kompetisi 2021 nanti menjadi 2021/2022. Tapi harus disahkan di Kongres PSSI karena kan musim kompetisinya amanat kongres itu. Jadi kalau misalnya lintas tahun, berarti kan harus melalui kongres juga\" ujar Sudjarno.\r\n\r\n\"Regulasinya juga akan dibuat dan berbeda dibanding waktu normal. Apalagi kan misalnya paralel nih, kompetisi berjalan, timnas juga berjalan, kan gitu,\" ucapnya.\r\n\r\nFormat kompetisi domestik di Asia lazim diselenggarakan dalam satu tahun. Hal itu tak terlepas dari kejuaraan antar klub Asia seperti Liga Champions Asia (LCA) dan Piala AFC yang juga berlangsung dalam satu tahun di penanggalan kalender.\r\nLCA dan Piala AFC biasanya sudah dimulai sejak Bulan Januari untuk babak kualifikasinya, dengan babak utamanya pada Bulan Februari. Artinya, kompetisi domestik sudah harus selesai pada akhir tahun untuk penentuan perwakilan di dua ajang tersebut.\r\n\r\nDari pengamatan detikSport, hanya Australia dari anggota AFC yang punya kompetisi domestik dengan format lintas tahun seperti di Eropa. Karena itu pula mereka punya cara yang berbeda dalam menentukan klub perwakilannya di LCA.\r\n\r\nContohnya Perth Glory, Sydney FC, dan Melbourne Victory menjadi wakil Australia di LCA musim 2020 berkat hasil yang mereka dapatkan di A-League musim 2018/19. Tiga klub Australia itu mewakili Negeri Kangguru berdasarkan hasil di dua musim kompetisi domestik sebelumnya.\r\n\r\n', '694761acb2ad0c-26c0-4042-9251-46205098df59_169.jpg', '2020-06-24 03:46:27'),
(11, 3, 1, 'Kolaborasi dengan BMW, Apple Perkenalkan Kunci Digital iPhone', 'PutraMinang News - Karena pengemudi tidak lagi diharuskan memiliki kunci fisik, ini memungkinkan pemilik untuk dengan mudah berbagi mobil mereka dengan teman dan keluarga. BMW mengatakan hingga lima orang dapat diberikan akses dan pemilik akan dapat membatasi tenaga kuda mobil mereka, kecepatan tertinggi dan pengaturan volume radio maksimum - antara lain.\r\n\r\nKunci digital menjanjikan keamanan dan berfungsi hingga lima jam setelah iPhone dimatikan karena baterai lemah. BMW juga akan menawarkan berbagai dukungan karena model â€œ1, 2, 3, 4, 5, 6, 8, X5, X6, X7, X5M, X6M dan Z4â€ yang diproduksi setelah 1 Juli 2020 akan mendukung kunci digital dalam 45 negara. Tentu saja, Anda juga akan memerlukan perangkat Apple yang relatif baru termasuk iPhone XR, iPhone XS atau yang lebih baru. Kunci digital juga dapat digunakan pada Apple Watch Series 5 atau lebih baru.\r\n\r\nApple juga mengkonfirmasi bahwa mereka sedang bekerja pada kunci digital generasi berikutnya yang menggunakan teknologi Ultra Wideband untuk \"kesadaran spasial yang disampaikan melalui chip U1.\" Kedengarannya tidak terlalu menarik, tetapi itu akan memungkinkan orang untuk membuka kunci mobil mereka tanpa terlebih dahulu melepas iPhone mereka dari saku atau tas. Ini akan tersedia tahun depan dan kami kemungkinan akan mendengar lebih banyak tentang peluncurannya lebih dekat.\r\n\r\nDalam berita lain, BMW dan Apple mengumumkan \"rute cerdas\" untuk kendaraan listrik menggunakan Apple Maps. Pengemudi dapat menggunakan Apple CarPlay untuk memilih tujuan dan Apple Maps kemudian akan \"memilih rute optimal berdasarkan jangkauan listrik dan lokasi stasiun pengisian di sepanjang jalan.\" Fitur baru akan diluncurkan pada BMW i4 mendatang yang tiba tahun depan.', '805747Apple-BMW-Digital-Key-1024x555.jpg', '2020-06-24 03:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Teknologi', 'Perkembangan Teknologi di  didunia sangat pesat saat ini.'),
(2, 'Olahraga', 'Berita Olahraga terupdate'),
(3, 'Otomotif', 'Berita otomotif masa kini'),
(4, 'Politik', 'Berita politik'),
(5, 'Pendidikan', 'Informasi Seputar pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_komentar` tinytext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi_komentar`, `date_created`) VALUES
(13, 8, 'Dika', 'dikaandrajoni3@gmail.com', 'Berita yang sangat menginspirasi sekali buat anak-anak.', '2020-06-24 03:38:51'),
(15, 11, 'Dayat', 'dayat@gmail.com', 'Ini fitur mantap sekali.', '2020-06-24 03:59:55'),
(16, 11, 'Dika', 'dikaandrajoni3@gmail.com', 'Berita otomotif terupdate.', '2020-06-24 04:02:57'),
(17, 7, 'Alex', 'alex@gmail.com', 'Mantap Barcelona', '2020-06-24 04:05:27'),
(18, 9, 'Ridho', 'ridho@gmail.com', 'Test test', '2020-06-24 04:06:31'),
(19, 10, 'Putra', 'antoni@gmail.com', 'Indonesia!!!!', '2020-06-24 04:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'dikaandrajoni', 'e9ce15bcebcedde2cb3cf9fe8f84fc0c', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
