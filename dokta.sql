-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2018 pada 15.24
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nipus` varchar(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nipus`, `nama`, `email`, `alamat`) VALUES
('09021181520025', 'Pipit Kurniasari', 'pipit kurnia sari', 'jln blitanf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_ilmu`
--

CREATE TABLE `bidang_ilmu` (
  `idBidangIlmu` varchar(11) NOT NULL,
  `namaBidangIlmu` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang_ilmu`
--

INSERT INTO `bidang_ilmu` (`idBidangIlmu`, `namaBidangIlmu`, `deskripsi`) VALUES
('B001', 'Kecerdasan Buatan', 'Kecerdasan buatan'),
('B002', 'Basis Data', 'Basis Data'),
('B003', 'Jaringan Komputer', 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `email`, `alamat`) VALUES
('09000', 'Sari Rahman', 'sari@gmail.com', 'Jl. Padang Selasa No. 1926'),
('0902334', 'Sulasih Rahman', 'sulasih@gmail.com', 'jl. Mawar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `angkatan` int(4) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `noHp` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `angkatan`, `email`, `noHp`) VALUES
('09021181520023', 'Achi Aprilia A', 'Teknik Informatika', 2015, 'achiaprilia.aa@gmail.com', '085866878989'),
('09021181520026', 'Apoli', 'Teknik Informatika', 2015, 'apoli@gmail.com', '089666878989'),
('09021181520027', 'Insyirah', 'Teknik Informatika', 2014, 'insyirah@gmail.com', '081368329199'),
('09021181520028', 'Daffa', 'Teknik Informatika', 2015, 'daffa@gmail.com', '081966878989'),
('09021181520029', 'Ilham', 'Teknik Informatika', 2013, 'daffa@gmail.com', '089762785897'),
('09101002001', 'Ahmed Emir Rosyadi', 'Teknik Informatika', 2010, 'ahmed@gmail.com', '081368489889'),
('09101002025', 'Abdullah Azzam', 'Teknik Informatika', 2010, 'abdullah@gmail.com', '089666878980'),
('09101002038', 'Muhammad Malian Zikri', 'Teknik Informatika', 2010, 'malian@gmail.com', '082266878980'),
('09101002051', 'Akhirudini', 'Teknik Informatika', 2010, 'akhi@gmail.com', '082233445566'),
('09101002069', 'Ardinta Aprianda', 'Teknik Informatika', 2010, 'ardinta@gmail.com', '081377660023'),
('09111002020', 'Ade Kurniawan', 'Teknik Informatika', 2011, 'ade@gmail.com', '081309871234'),
('09111002022', 'Achmaf Febrian', 'Teknik Informatika', 2011, 'febrian@gmail.com', '085398765431'),
('09111002035', 'Adhithya Anugrah', 'Teknik Informatika', 2011, 'nugrah@gmail.com', '087634563456'),
('09111002055', 'Alfonso Sitompul', 'Teknik Informatika', 2011, 'alfonso@gmail.com', '081278098700'),
('09121002003', 'Adi Nugroho', 'Teknik Informatika', 2012, 'adi@gmail.com', '089765431234'),
('09121002004', 'Ahmad Ziki Rafsanjani', 'Teknik Informatika', 2012, 'ziki@gmail.com', '089634561234'),
('09121002015', 'Abson Hadi', 'Teknik Informatika', 2012, 'hadi@gmail.com', '081234567890'),
('09121002027', 'Agus Mistiawan', 'Teknik Informatika', 2012, 'mistiawan@gmail.com', '089765431244'),
('09121002034', 'Aditya Asmara', 'Teknik Informatika', 2012, 'asmara@gmail.com', '082287653456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `idSubjek` varchar(11) NOT NULL,
  `idBidangIlmu` varchar(11) NOT NULL,
  `namaSubjek` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subjek`
--

INSERT INTO `subjek` (`idSubjek`, `idBidangIlmu`, `namaSubjek`, `deskripsi`) VALUES
('S001', 'B001', 'Pemrosesan Bahasa Alami', 'PBA'),
('S0010', 'B001', 'Data Minng', 'DM'),
('S0011', 'B001', 'Steganografi', 'ste'),
('S0012', 'B003', 'Topik Jarkom A', 'TJA'),
('S0013', 'B003', 'Topik Jarkom B', 'TJB'),
('S0014', 'B003', 'Topik Jarkom C', 'TJC'),
('S0015', 'B003', 'Topik Jarkom D', 'TJD'),
('S0016', 'B002', 'Topik Basis Data A', 'TBDA'),
('S0017', 'B002', 'Topik Basis Data B', 'TBDB'),
('S0018', 'B002', 'Topik Basis Data C', 'TBDAC'),
('S0019', 'B002', 'Topik Basis Data D', 'TBDD'),
('S002', 'B001', 'Jaringan Syaraf Tiruan', 'JST'),
('S003', 'B001', 'Sistem Pakar', 'SP'),
('S004', 'B001', 'Temu Kembali Informasi', 'TKI'),
('S005', 'B001', 'Logika Samar', 'LS'),
('S006', 'B001', 'Sistem Pendukung Keputusan', 'SPK'),
('S007', 'B002', 'Data Warehouse', 'DW'),
('S008', 'B002', 'Data Mart', 'DM'),
('S009', 'B003', 'Manajemen Jaringan Komputer', 'MJK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanda_terima_ta`
--

CREATE TABLE `tanda_terima_ta` (
  `nim` varchar(15) NOT NULL,
  `nipus` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanda_terima_ta`
--

INSERT INTO `tanda_terima_ta` (`nim`, `nipus`, `tanggal`, `nama`) VALUES
('09021281520103', '09021181520025', '2018-12-12', 'Lifya Fitriani'),
('09021281520105', '09021181520025', '2018-12-12', 'Tri Kurnia Sari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `nim` varchar(15) NOT NULL,
  `idSubjek` varchar(11) DEFAULT NULL,
  `judul` varchar(300) DEFAULT NULL,
  `tahun` smallint(4) DEFAULT NULL,
  `dosenPembimbing1` varchar(15) DEFAULT NULL,
  `dosenPembimbing2` varchar(15) DEFAULT NULL,
  `abstrak` text,
  `status` enum('rejected','confirmed','none','delivered') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`nim`, `idSubjek`, `judul`, `tahun`, `dosenPembimbing1`, `dosenPembimbing2`, `abstrak`, `status`) VALUES
('09021181520023', 'S001', 'Pengaruh Part Of Speech Tagging\r\nTerhadap Algoritma Multinomial Naïve Bayes Dalam Analisis Sentimen', 2014, NULL, '0902334', 'Twitter sebagai salah satu media sosial sering digunakan oleh peneliti sebagai objek riset untuk melakukan analisis sentimen. Dalam risetnya, peneliti memanfaatkan kemudahan dalam pengaksesan twitter karena twitter telah menyediakan Application Programming Interface (API) untuk mengambil data kicauan yang dibutuhkan peneliti. Teks pada jejaring sosial twitter merupakan teks kalimat yang tidak bersih, karena mengandung banyak item non-standar, pola sintaksis dan komponen non-teks seperti emoticon dan, emoji. Hal tersebut dapat terjadi karena kesalahan yang tidak sengaja, kreativitas penggunaan bahasa dan otografi, bahasa sehari-hari yang bervariasi, dan faktor lainnya, ', 'delivered'),
('09021181520026', 'S0010', 'Penerapan Metode Kombinasi Algoritma\r\nGenetika dan Tabu Search dalam Optimasi\r\nAlokasi Kapal Peti Kemas\r\n(Studi Kasus : PT. XYZ)', 2014, NULL, '0902334', 'Perkembangan perdagangan global menyebabkan\r\npenggunaan jasa transportasi menjadi bagian yang sangat\r\npenting dalam pendistribusian barang. Salah satunya yaitu jasa\r\ntransportasi laut atau jasa pelayaran. Dengan terus\r\nberkembangnya jasa pelayaran, maka perlu adanya\r\nperencanaan dan keputusan-keputusan yang tepat dalam\r\npengalokasian kapal yang akan digunakan dalam proses\r\npengiriman barang. Oleh karena itu dalam penelitian ini akan\r\ndilakukan optimalisasi alokasi kapal pada PT.XYZ dengan\r\ntujuan memaksimalkan profit dan memaksimalkan kapasitas\r\nmenggunakan metode kombinasi algoritma genrtika dan tabu\r\nsearch. Penggunaan metode kombinasi algoritma genetika dan\r\ntabu search pada pengalokasian kapal bertujuan untuk\r\nmenemukan solusi yang optimum dalam mengalokasikan kapal.\r\nBerdasarkan perbandingan antara metode algortima genetika\r\n(GA) dan metode kombinasi algoritma genetika dan tabu search\r\n(GA-TS), diperoleh hasil profit dan muatan yang lebih optimal\r\nketika menggunakan metode GA-TS dengan peningkatan profit\r\nsebesar 69% dan peningkatan load factor sebesar 14%.\r\nPeningkatan profit dan load factor juga ditunjukkan ketika\r\ndilakukan perbandingan antara kondisi pada perusahaan\r\nsebelum menerapkan GA-TS dan sesudah menerapkan GA-TS.\r\nMetode GA-TS memiliki profit dengan peningkatan lebih dari\r\n100% dan peningkatan load factor sebesar 38% dibanding pada\r\nkondisi perusahaan. Sehingga berdasarkan hal ini, implementasi\r\nalgoritma genetika dan tabu search dapat menjadi solusi bagi\r\nperusahaan dan membantu peru', 'delivered'),
('09021181520028', 'S003', 'Sistem Pakar Diagnosa Penyakit Bayi Dan Balita Berbasis Android Dengan Menggunakan Algoritma Depth First Search', 2014, NULL, '0902334', 'It is a must for children (infants and toddlers) to get more attention due to their health because their body’s protections are not yet strong. This makes them susceptible for germs, bacteria, and viruses attacks. Those attacks cause disease. This disease symptom could appear all of sudden to the children. It makes their parents afraid, especially for those who have less sensitiveness for the symptom. For this reason, I make an application based on android smartphone expert system to provide information on type of disease, treatment, and prevention based on the symptoms given. This application uses forward chaining and backward chaining inference engine to make conclusion, and Depth First Search algorithms for searching the method. The result shows that this application could help parents in giving some information about common diseases attacked to infants and toddlers. This application facilitates them in delivering information which can be accessed anywhere as first aid for infants and toddlers who indicated disease.', 'confirmed'),
('09021181520029', 'S004', 'Sistem Temu Kembali Informasi Pada Dokumen Dengan Metode Vector Space Model', 2013, '0902334', NULL, 'Informasi saat ini sangat mudah didapatkan dengan memanfaatkan fasilitas internet dimanapun dan\r\nkapanpun. Di sisi lain informasi yang didapat dari search engine merupakan semua hal yang berkaitan\r\ndengan kata kunci yang dicari. Hal ini menyebabkan pengguna terpaksa menyaring untuk mendapatkan\r\ndokumen yang relevan. Oleh karena itu diperlukan cara untuk mengelompokkan banyaknya informasi\r\nyang tersedia, yang dibutuhkan pengguna sehingga memudahkan pengguna untuk mendapatkan\r\ndokumen yang diinginkan. Pada penelitian ini diusulkan suatu solusi dari permasalahan tersebut\r\ndengan mengembangkan metode ilmu pencarian yang dikenal dengan temu-kembali informasi\r\n(information retrieval) dan metode Vector Space Model (VSM). Pada metode Vector Space Model\r\n(VSM) beberapa dokumen online akan diindeks dan diurutkan berdasarkan bobot dari kata pencarian\r\nyang terdapat di dalam dokumen online tersebut. Salah satu algoritma pembobotannya adalah\r\nalgoritma tf-idf yang dipengaruhi oleh frekuensi kemuncu', 'delivered'),
('09101002001', 'S0010', 'Perbandingan Algoritma Klasifikasi Naive Bayes, Nearest\r\nNeighbour, dan Decision Tree pada Studi Kasus\r\nPengambilan Keputusan Pemilihan Pola Pakaian', 2016, '0902334', NULL, 'Data mining is a process of analysis of the large data set in the database so that the\r\ninformation obtained will be used for the next stage. One technique commonly used data mining is\r\nthe technique of classification. Classification is an engineering modeling of the data that has not\r\nbeen classified, to be used to classify new data. Classification included into any type of supervised\r\nlearning, meaning that it takes the training data to build a model of classification. There are five\r\ncategories of classification that is statistically based, distance-based, based on the decision tree,\r\nneural network-based and rule-based. Each category has many options classification algorithms,\r\nsome algorithms are frequently used algorithms Naive Bayes, nearest neighbor and decision tree.\r\nIn this study will be a comparison of the three algorithms on case studies of electoral decision\r\nmaking clothing patterns. The comparison showed that the decision tree method has the highest\r\nlevel of accuracy than Naive Bayes algorithm and nearest neighbor, reaching 75.6%. Decision tree\r\nalgorithm used is J48 with pruned algorithm tha', 'confirmed'),
('09101002025', 'S0011', 'Kombinasi Algoritma One Time Pad Dan Chaotic Sequence Dalam Optimasi Enkripsi Gambar', 2017, NULL, '0902334', 'Pada makalah ini, kriptografi dipilih sebagai teknik untuk mengamankan data, khusunya data gambar. Teknik kriptografi mempunyai kelebihan yaitu menyamarkan pesan yang termuat pada media tertentu, sehingga orang lain akan mengetahui pada media tersebut terdapat suatu pesan rahasia. algoritma yang terpilih untuk melakukan proses enkripsi dan dekripsi yaitu One Time Pad (OTP). Algoritma tersebut kuat dan aman apabila memenuhi kriteria pengoerasian, salah satunya yaitu mengacak kunci yang akan digunakan secara random dan tidak menggunakan kunci tersebut untuk operasi lain. Hal ini tentu menyulitkan ketika panjang kunci yang dimaksud harus sama panjang dengan data induk yang akan dienkripsi, sehingga perlu adanya suatu algoritma lain yang dapat membantu mengacak kunci. Dalam makalah ini dipilih Chaotic Sequeces Generator. Hasil eksperimen telah menunjukkan bahwa penggunakan OTP saja dinilai kurang efisien, sedangkan hasil eksperimen pada enkripsi dan dekripsi gambar menggunakan OTP-Chaotic Sequences mempunyai nilai PSNR lebih tinggi dibanding dengan OTP yang telah dilakukan oleh paper pembanding. Sedangkan lama waktu proses hampir sama antara OTP dengan OTP-Chaotic Squences. Nilai PSNR tertinggi yang dihasilkan melalui algoritma OTP pada paper pembanding yaitu 8,9 dB pada gambar peppers.bmp, sedangkan algoritma kombinasi yang telah dilakukan dengan OTP-Chaotic Sequences yaitu 8,4 dB. Sedangkan pada gambar lena.bmp, pada paper pembanding diketahui nilai PSNR yang didapat yaitu 9,26 dB, sedangkan pada eksperimen dengan kombinasi OTP-Chaotic Sequences yaitu 9,2 dB. Pada eksperimen tersebut, gambar yang telah di uji coba sebanyak 5 gambar grayscale berukuran 256x256 piksel.', 'confirmed'),
('09101002038', 'S001', 'Pengelompokan Kicauan Pada Media Sosial Twitter Menggunakan Metode K-Means', 2015, NULL, '0902334', 'Media sosial merupakan kelompok aplikasi berbasis internet yang dibangun di atas dasar ideologi dan teknologi web 2.0, dan yang memungkinkan penciptaan juga pertukaran user-generated content (Kaplan, 2010). Pada zaman sekarang terdapat banyak sekali media sosial, salah satunya adalah twitter. Twitter tidak hanya digunakan untuk membaca kicauan (tweet)  tetapi twitter juga digunakan untuk memosting kicauan (tweet) melalui antarmuka situs web, pesan singkat (SMS) atau melalui berbagai aplikasi untuk perangkat seluler. Twitter sering dimanfaatkan oleh beberapa perusahaan untuk melihat review pengguna terhadap produk yang mereka produksi. Review produk ini dilihat menggunakan jasa bot twitter. Bot twitter ini juga dipakai sebagai media komunikasi, yaitu untuk membalas kicauan pengguna produk secara otomatis.', 'confirmed'),
('09101002051', 'S003', 'Identifikasi Gaya Belajar Mahasiswa Menggunakan Metode Rule Based Reasoning', 2015, NULL, '0902334', 'Setiap mahasiswa mempunyai gaya belajar yang berbeda-beda. Para pendidik seharusnya\r\nmengetahui gaya belajar mahasiswa mereka sehingga mampu memilih metode pengajaran maka\r\nhasil yang didapat lebih optimal. Seorang mahasiswa juga harus mengetahui gaya belajar mereka\r\nsendiri dan mampu memilih metode atau cara belajar yang sesuai dengan karakter mereka.\r\nMahasiswa akan belajar jika materi yang disampaikan menarik dan mereka menganggap penting\r\nmateri tersebut. Visual-Auditorik-Membaca/menulis-Kinestetik (VARK). Metode VARK dibuat\r\nmenjadi sebuah kuesioner yang telah secara khusus dikembangkan oleh Neil Fleming dalam konteks\r\nmodalitas dan strategi gaya belajar. Beberapa tahun terakhir VARK telah digunakan dibeberapa negara\r\nuntuk menilai preferensi gaya belajar mahasiswa atau mahasiswi. Oleh karena itu, pembuatan aplikasi\r\nini dirancang untuk membuat sistem pakar identifikasi gaya belajar yang bertujuan untuk mendapatkan\r\nhasil belajar yang efektif dan efisien pada sebuah siklus pembelajaran ', 'confirmed'),
('09101002069', 'S001', 'Peringkasan Teks Bahas Indonesia Menggunakan Metode Latent S', 2015, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09111002020', 'S0014', 'Rancang bangun monitoring XXX pada mikrokomputer YYY', 2017, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09111002022', 'S0015', 'Analisa performansi protokol XXX pada mikrokomputer YYY', 2016, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09111002035', 'S0012', ' Analisa metode penempatan node sensor menggunakan algoritma Particle Swarm Optimization (PSO)', 2018, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09111002055', 'S0013', 'Rancang Bangun Perangkat Lunak IoT Gateway dari Field ke Cloud Berbasis Protokol Komunikasi XXX ', 2017, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09121002003', 'S0017', 'Implementasi Basis Data Terdistribusi dengan Metode Hetoregenous Distributed Database System Pada Sistem Informasi Barang Redshit Distro', 2018, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed'),
('09121002015', 'S0016', 'Analisa Perbandingan Unjuk Kerja Sistem Basis Data XXX dan XXX untuk Penyimpanan Data Sensor IoT', 2012, NULL, '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'confirmed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('Mahasiswa','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('09021181520023', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520025', 'acdcf7dcd6b989d4280a2d3a2b2cc908', 'Admin'),
('09021181520026', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520027', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520028', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520029', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520039', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021281520103', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09101002001', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09101002025', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09101002038', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09101002051', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09101002069', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09111002001', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09111002020', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09111002022', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09111002035', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09111002055', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09121002003', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09121002004', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09121002015', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09121002027', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa'),
('09121002034', 'e10adc3949ba59abbe56e057f20f883e', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nipus`);

--
-- Indexes for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  ADD PRIMARY KEY (`idBidangIlmu`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`idSubjek`),
  ADD KEY `idBidangIlmu` (`idBidangIlmu`);

--
-- Indexes for table `tanda_terima_ta`
--
ALTER TABLE `tanda_terima_ta`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nipus` (`nipus`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `dosenPembimbing1` (`dosenPembimbing1`),
  ADD KEY `dosenPembimbing2` (`dosenPembimbing2`),
  ADD KEY `idSubjek` (`idSubjek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subjek`
--
ALTER TABLE `subjek`
  ADD CONSTRAINT `subjek_ibfk_1` FOREIGN KEY (`idBidangIlmu`) REFERENCES `bidang_ilmu` (`idBidangIlmu`);

--
-- Ketidakleluasaan untuk tabel `tanda_terima_ta`
--
ALTER TABLE `tanda_terima_ta`
  ADD CONSTRAINT `tanda_terima_ta_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `admin` (`nipus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `dosen_pembimbing1` FOREIGN KEY (`dosenPembimbing1`) REFERENCES `dosen` (`nip`) ON DELETE SET NULL,
  ADD CONSTRAINT `dosen_pembimbing2` FOREIGN KEY (`dosenPembimbing2`) REFERENCES `dosen` (`nip`) ON DELETE SET NULL,
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`idSubjek`) REFERENCES `subjek` (`idSubjek`),
  ADD CONSTRAINT `tugas_akhir_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
