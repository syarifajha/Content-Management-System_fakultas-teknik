-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jul 2024 pada 04.28
-- Versi server: 10.6.18-MariaDB
-- Versi PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipdok_db_cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nm_user` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nm_user`, `username`, `password`, `level`) VALUES
(1, 'Taruna Karya 1', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `detail`, `tentang`, `tgl`, `foto`) VALUES
(1, 'Kegiatan Kebudayaan ', 'jj', 'k', '2024-06-26', 'logo.png'),
(2, 'Pekan Mahasiswaa', 'Pekan Mahasiswa', 'Pekan Mahasiswa', '2024-06-23', '1.png'),
(4, 'Dengan mengusung desa harmonis, kami siap menjadi yang terdepan.', 'll', 'll', '2024-08-08', 'WhatsApp-Image-2023-11-21-at-06.59.15-1-850x560.jpeg'),
(5, 'Pesantren', 'll', 'l', '2024-07-18', '6681caf916280.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `ket`, `foto`) VALUES
(27, 'Umpo', '1567852354-haedar.jpg'),
(28, 'rektor', '1714619394-SNY09627a.jpg'),
(29, 'masta', 'C0019.MP4_snapshot_00.13.846.jpg'),
(30, 'm', '1525890003-IMG-20180510-WA0008.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_jurusan`
--

CREATE TABLE `galeri_jurusan` (
  `id` int(100) NOT NULL,
  `ket_jur` varchar(100) NOT NULL,
  `foto_jur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `galeri_jurusan`
--

INSERT INTO `galeri_jurusan` (`id`, `ket_jur`, `foto_jur`) VALUES
(18, '9', '9.png'),
(19, '1', 'V2.png'),
(20, '3', 'V3.png'),
(21, '4', 'V4.png'),
(22, '5', 'V5.png'),
(23, '6', 'V6.png'),
(24, '7', 'V7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `mapel`, `jabatan`, `email`, `foto`) VALUES
(28, 'Dr. Arief Rahman Yusuf, M.Pd', 'Sistem Otomasi', 'Dosen', 'ariefrahman@gmail.com', 'dr.arief.jpg'),
(29, 'Fauzan Masykur, ST, M.Kom', 'Jaringan Komputer', 'Dosen', 'a@yahoo.com', 'LLLL-226x300.jpg'),
(30, 'Dr. Ir. Aliyadi, MM, M.Kom', 'Organisasi Komputer', 'Dosen', 'admin@binaikhwani.sch.id', 'KLJ-225x300.jpg'),
(31, 'Sugianti, S. SI., M.Kom', 'Matematika Diskret', 'Dosen', 'admin@yahoo.com', 'LJJL-225x300.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(5) NOT NULL,
  `jadwal` text NOT NULL,
  `syarat` text NOT NULL,
  `tempat` text NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `jadwal`, `syarat`, `tempat`, `biaya`, `kontak`) VALUES
(1, 'Pendaftaran 20 November 2022 (Gelombang 1) </br>\r\nPendaftaran 1 Januari 2023 (Gelombang 2) </br>\r\nPendaftaran 1 Maret 2023 (Gelombang 3) </br>\r\nPendaftaran 1 Mei 2023 (Gelombang 4) </br>', 'Foto Copy KK (Kartu Keluarga)</br>\r\nFoto Copy KIP (Kartu Indonesia Pintar)</br>\r\nFoto 4x6 Background Merah (2 Pcs)</br>\r\nFoto Copy Akta </br>\r\nFoto Copy Transkrip Nilai Legalisir (2 Pcs)</br>\r\nFoto Copy Ijazah Legalisir (2 Pcs)</br>', 'Jl. Budi Utomo No.10, Ronowijayan, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63471', '300.0000', '<b>0857-7502-0604</b>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moto`
--

CREATE TABLE `moto` (
  `id` int(4) NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `moto`
--

INSERT INTO `moto` (`id`, `moto`) VALUES
(1, 'Terampil dan Siap Bekerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `keterampilan_khusus` varchar(100) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `status_keikutsertaan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_mahasiswa`, `nim`, `nomor_hp`, `alamat`, `program_studi`, `kelas`, `keterampilan_khusus`, `ukuran`, `status_keikutsertaan`, `created_at`) VALUES
(7, 'Yusron Wirawan', '20533272', '082114375687', 'Jalan Raya Majapahit NO. 79 Ponorogo', 'Teknik Elektro', 'Reguler', 'baca_tulis', 's', 'regulerrrr', '2024-06-30 14:18:26'),
(9, 'Yusron Wirawan', '20533295', '082114375687', 'Jalan Raya Majapahit NO. 79 Ponorogo', 'Teknik Informatika', 'Reguler', 'adzan', 'l', 'konversi', '2024-06-30 21:06:32'),
(10, 'Yusron Wirawan', '20533388', '082114375687', 'Jalan Raya Majapahit NO. 79 Ponorogo', 'Teknik Mesin', 'Reguler', 'adzan', 'm', 'reguler', '2024-06-30 21:18:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` enum('Pria','Wanita') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Konghuch','Budha') NOT NULL,
  `nm_ayah` varchar(255) NOT NULL,
  `nm_ibu` varchar(255) NOT NULL,
  `job_ayah` varchar(255) NOT NULL,
  `kampung` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `asal_sklh` varchar(255) NOT NULL,
  `jurusan` enum('Teknik Mesin','Teknik Pengelasan','Desain Grafis') NOT NULL,
  `no_siswa` varchar(255) NOT NULL,
  `no_ortu` varchar(255) NOT NULL,
  `tau_smk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ppdb`
--

INSERT INTO `ppdb` (`id`, `nama_siswa`, `tempat`, `tgl_lahir`, `jenis_kel`, `agama`, `nm_ayah`, `nm_ibu`, `job_ayah`, `kampung`, `rtrw`, `desa`, `kecamatan`, `kabupaten`, `asal_sklh`, `jurusan`, `no_siswa`, `no_ortu`, `tau_smk`) VALUES
(9, 'Sri Meilani', 'Jakartalll', '2007-05-03', 'Wanita', 'Islam', 'Latief', 'Erni', 'Ketua RW', 'Perum Karawang Indah', '10/13', 'Karawang Kulon', 'Karawang Barat', 'Karawang', 'SMP 1 Karawang', 'Desain Grafis', '081388671983', '081294329345', 'Instagram'),
(10, 'Farel Azizan Gandaralllll', 'Karawang', '2007-02-10', 'Pria', 'Islam', 'Eka', 'Sintia', 'Wiraswasta', 'kcp', '01/01', 'Karawang Kulon', 'Karawang Barat', 'Karawang', 'SMP 1 Karawang', 'Teknik Mesin', '089878486464', '001265987845', 'Brosur'),
(11, 'Arletha Azizah Gandara', 'Karawang', '2009-06-10', 'Wanita', 'Islam', 'Eka', 'Sintia', 'Wiraswasta', 'Bendungan', '10/13', 'Printer', 'Karawang Barat', 'Karawang', 'SMP 1 Karawang', 'Teknik Pengelasan', '09878948789', '0547895412', 'Brosur'),
(12, 'Gebby  Dwi Puteri', 'Karawang', '2000-05-31', 'Wanita', 'Islam', 'Pono', 'Ina', 'Polisi', 'Cikampak', '01/09', 'Cikampek', 'Cikampek', 'Karawang', 'SMA 2 Cikampek', 'Teknik Pengelasan', '087898687841', '087745879863', 'Instagram'),
(13, 'Antonly', 'Jakarta', '2006-08-07', 'Pria', 'Kristen', 'Jono', 'Andini', 'Dokter', 'KCP', '01/09', 'Ramayana', 'Karawang', 'Karawang', 'Techno', 'Teknik Mesin', '98763634511', '087898998546', 'Jono'),
(14, 'Rizky Gusti Ananda', 'Karawang', '1996-03-06', 'Pria', 'Islam', 'Gunasah', 'Susilawati', 'Kantor', 'Guro 3', '17/12', 'Guro 3', 'Karawang Barat', 'Karawang', 'SMP 1 Karawang', 'Teknik Mesin', '087898687898', '081298684578', 'Instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `prestasi`, `detail`, `tgl`, `foto`) VALUES
(2, 'Silat', 'silat', '2024-07-05', '6681b5f786da1.jpg'),
(3, 'Silat', 'test', '2024-07-12', '6681b82d952c1.jpg'),
(5, 'tet', 'tet', '2024-07-06', '6681bf95023af.jpeg'),
(6, 'test', 'tet', '2024-07-04', '6681c5ba6187d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(5) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `profil`) VALUES
(1, 'Sejarah Universitas Muhammadiyah Ponorogo Secara embrional universitas muhammadiyah ponorogo berdiri sejak tahun 1960, dengan diawali berdirinya fakultas tarbiyah Jurusan Pendidikan agama Islam Institut Agama Islam Muhammadiyah Ponorogo. Yang berinduk ke surakarta. Kemudian berdasarkan SK Menteri Agama RI Nomor 86 Tanggal 15 Agustus 1978, Jurusan dimaksudka mendapatkan status diakui.\r\n\r\nPada tahun 1975 menyusul kemudian berdiri Fakultas Ilmu Sosialdan Ilmu Politik (FISIP) Jurusan Ilmu Kesejahteraan Sosial (S1). Tahun 1978 dibuka lagi Fakultas Keguruan dan Ilmu Pendidikan (FKIP) Jurusan PMP dan KN (S1) dan Pendidikan Matematikan (S1), yang mana keduanya berstatus sebagai cabang dati Universitas Muhammadiyah Malang. Kemudiansejak tahun akademik 1982 / 1983 yang ditandai dengan keluarnya ketentuan pasing out bagi fakultas-fakultas cabang, maka tokoh-tokoh Muhammadiyah Daerah Ponorogo yang didukung oleh segenap eksponen pendidikan yang ada merintis berdirinya Universitas Muhammadiyah Ponorogo secara mandiri dengan menambah dua fakultas baru yaitu Fakultas Ekonomi dan Fakultas Teknik.\r\n\r\nSaat ini Universitas Muhammadiyah Ponorogo telah memiliki 7 Fakultas dengan 21 Program Studi yang terdiri dari: 3 program studi diploma III, 16program studi Srata S1, 1 program profesi, dan 1 program Pasca Sarjana. Keseluruhan aktivitas akademik maupun non akademik di kampus Universitas Muhammadiyah Ponorogo dibingkai dalam Catur Dharma Perguruan Tinggi yang mencakup Pendidikan dan Pengajaran, Penelitian, dan Pengabdian pada Masyarakat.\r\n\r\nKegiatan pendidikan dan pengajaran di Universitas Muhammadiyah Ponorogo dilaksanakan dengan sistem kredit semester (SKS). Dalam sistem ini kegiatan akademik mahasiswa diukur dengan satuan kredit semester (SKS). Sistem ini memungkinkan mahasiswa untuk menyusun program akademiknya sesuai dengan kecakapan, bakat, minat dan kemampuan yang dibagi dalam 8 (delapan) semester.\r\n\r\nKurikulum yang dikembangkan di Universitas Muhammadiyah Ponorogo mengacu pada KKNI (Kualifikasi Kompetensi Nasional Indonesia) berorientasi pada dasar serta tujuan pendidikan di Universitas,terkait keahlian ataupun sikap yang diharapkan dimiliki mahasiswa setelah menyelesaikan studinya yaitu kemandirian dan kewirausahaan.\r\n\r\nPengelolaan pendidikan dan pengajaran dalam sistem kredit dikembalikan dalam sistem informasi akademik yang berbasis IT. Guna mendukung kelancaran pengelolaan pendidikan dan pengajaran serta untuk memenuhi kebutuhan masyarakat mengenai informasi kegiatan di Fakultas Teknik Universitas Muhammadiyah Ponorogo, selengkapnya dapat diakses melalui website teknik.umpo.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proli`
--

CREATE TABLE `proli` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `proli`
--

INSERT INTO `proli` (`id`, `nama`, `detail`) VALUES
(1, 'Teknik Mesin', 'Teknik Mesin adalah jurusan yang mengarahkan mahasiswa untuk bekerja di perindustrian'),
(2, 'Teknik Informatika', 'Teknik Informatika adalah jurusan yang mengarahkan mahasiswa untuk lebih mendalami tentang TIK\r\n'),
(3, 'Teknik Elektro', 'Teknik Elektro adalah Jurusan yang mengarahkan mahasiswa untuk terbaisa mendesain menggunakan komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strategi`
--

CREATE TABLE `strategi` (
  `id` int(5) NOT NULL,
  `strategi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `strategi`
--

INSERT INTO `strategi` (`id`, `strategi`) VALUES
(1, 'Mendidik anak menjadi teladan yang baik'),
(2, 'Mendidik sesuai perkembangan anak'),
(3, 'Mendidik yang tidak monoton');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`id`, `nama`, `testi`) VALUES
(1, 'Syarif Hidayatullah', 'Fakultasnya bagus dan akan berkembang !'),
(2, 'Adimas Ambang', 'Prodi yang berkembang pesat !'),
(3, 'Anis Sulistyowati', 'Pengajarnya yang handal !'),
(4, 'Nopka Immanadi', 'Alat Praktik Yang Lengkap !');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(5) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id`, `tujuan`) VALUES
(1, 'Menghasilkan lulusan yang profesional di bidangnya, trampil, mandiri, dan berjiwa islami sehingga memiliki keunggulan dan kemampuan daya saing baik nasional maupun internasional'),
(2, 'Menghasilkan penelitian-penelitian bermutu untuk mendukung pengembangan IPTEK serta mampu menjadi pusat pengembangan aplikasi IPTEK baik skala nasional maupun internasional'),
(3, 'Menghasilkan teknologi tepat guna yang mudah diaplikasikan untuk memecahkan problem kerekayasaan sebagai wujud pengabdian kepada masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(5) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(1, 'Menjadi Fakultas yang Unggul dan Berdaya Saing dalam Penguasaan IPTEK di Tingkat Nasional serta Berjiwa Islami pada Tahun 2036.', 'Menyelenggarakan pendidikan yang baik (excellent) dalam bidang IPTEK, untuk menghasilkan lulusan dengan standar moral islami dan integritas yang baik, kreatif, inovatif, mandiri sehingga memiliki keunggulan dan kemampuan daya saing nasional;\r\nMelaksanakan penelitian dan senantiasa berperan secara aktif dalam pengembangan IPTEK secara nasional serta membangun kerja sama yang saling menguntungkan dalam bidang penelitian dan pelatihan guna meningkatkan kompetensi dan profesionalisme lulusan;\r\nMelaksanakan pengabdian kepada masyarakat sebagai upaya membantu meningkatkan perekonomian masyarakat melalui penerapan IPTEK;\r\nMenyelenggarakan kerjasama yang kuat, terpercaya, dan berkesinambungan dengan stakeholder sehingga saling menguntungkan dan dapat dipertanggungjawabkan.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_jurusan`
--
ALTER TABLE `galeri_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proli`
--
ALTER TABLE `proli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `strategi`
--
ALTER TABLE `strategi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `galeri_jurusan`
--
ALTER TABLE `galeri_jurusan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `proli`
--
ALTER TABLE `proli`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `strategi`
--
ALTER TABLE `strategi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
