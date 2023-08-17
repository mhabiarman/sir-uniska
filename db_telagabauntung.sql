-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 06:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telagabauntung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(4) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `telepon`, `username`, `nama_lengkap`, `password`, `alamat`, `created`, `modified`) VALUES
(2, '087709267514', 'admin', 'Putri Indah', 'admin', 'Binuang', '2021-01-13 21:13:16', '2021-08-23 03:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(4) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `keterangan`, `deskripsi`, `gambar`, `created`, `modified`) VALUES
(2, 'Jalan Santai', '<h3 Style=\"font-size: 17px; Font-stretch: Normal; Line-height: 1.32; Letter-spacing: -0.3px; Margin-top: 32px; Margin-bottom: 0px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><strong>Manfaat Jalan Santai Untuk Kesehatan</strong></h3><p Style=\"font-size: 16px; Margin: 10px 0px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><br></p>', '<h3 Style=\"font-size: 17px; Font-stretch: Normal; Line-height: 1.32; Letter-spacing: -0.3px; Margin-top: 32px; Margin-bottom: 0px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><p Style=\"margin: 10px 0px; Letter-spacing: Normal; Font-size: 16px;\">Agar Tubuh Tetap Bugar Dan Sehat, Anda Perlu Rutin Berolahraga Selama Kurang Lebih 30 Menit Setiap Hari Atau Setidaknya 3–4 Kali Seminggu. Jenis Olahraga Yang Anda Pilih Pun Bisa Beragam, Termasuk Jalan Santai.</p><p Style=\"margin: 10px 0px; Letter-spacing: Normal; Font-size: 16px;\">Selain Praktis Dan Mudah Dilakukan, Ada Banyak Manfaat Jalan Santai Yang Bisa Anda Peroleh Jika Rutin Melakukannya, Antara Lain:</p></h3><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">1. Menurunkan Berat Badan</span></h4><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">2. Menjaga Kesehatan Jantung</span></h4><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">3. Mencegah Diabetes</span></h4><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">4. Meningkatkan Kekuatan Tulang Dan Otot</span></h4><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">5. Menjaga Daya Tahan Tubuh</span></h4><h4 Style=\"margin-top: 32px; Margin-bottom: 0px; Line-height: 1.32; Font-size: 17px; Text-align: Justify; Font-stretch: Normal; Letter-spacing: -0.3px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><span Style=\"font-weight: Bolder;\">6. Mengurangi Stres</span></h4><h3 Style=\"font-size: 17px; Font-stretch: Normal; Line-height: 1.32; Letter-spacing: -0.3px; Margin-top: 32px; Margin-bottom: 0px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\"><strong>Tips Jalan Santai Dengan Nyaman</strong></h3><p Style=\"font-size: 16px; Margin: 10px 0px; Color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif;\">Berbagai Manfaat Jalan Santai Di Atas Hanya Bisa Anda Peroleh Jika Dilakukan Secara Rutin.&nbsp;<em>Nah</em>, Berikut Ini Adalah Beberapa Tips Jalan Santai Dengan Nyaman:</p><ul Style=\"color: Rgb(59, 55, 56); Font-family: LatoWeb, Sans-serif; Font-size: 16px;\"><li>Gunakan&nbsp;<a Href=\"https://www.alodokter.com/cermat-memilih-sepatu-olahraga-yang-tepat\" Target=\"_blank\" Style=\"color: Rgb(53, 112, 210);\">sepatu Olahraga</a>&nbsp;yang Pas Dan Nyaman Di Kaki.</li><li>Kenakan Pakaian Yang Dapat Menyerap Keringat Dengan Baik.</li><li>Bawalah Selalu Botol Berisi Air Minum Dan Minum Air Putih Secukupnya Guna Mencegah Dehidrasi.</li><li>Lakukan Pemanasan Sebelum Berjalan Santai Dan Akhiri Dengan Pendinginan.</li><li>Pilihlah Rute Jalan Santai Yang Aman Dan Asri.<img Src=\"data:image/jpeg;base64,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\" Data-filename=\"th (4).jpg\" Style=\"width: 187.986px;\"></li></ul>', '1629634267357.jpg', '2021-08-22 05:11:07', '2021-08-22 05:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(4) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `created`, `modified`) VALUES
(1, 'Sekertaris Camat', '2021-08-20 01:29:29', '2021-08-20 01:29:29'),
(2, 'Staf Marketing', '2021-08-20 01:29:55', '2021-08-20 01:29:55'),
(3, 'Staf Kebersihan', '2021-08-20 01:30:17', '2021-08-20 01:30:17'),
(4, 'Staf Keamanan', '2021-08-20 03:55:24', '2021-08-20 03:55:24'),
(6, 'Staf Kemasyarakatan', '2021-08-22 05:00:05', '2021-08-22 05:00:05'),
(7, 'Staf Sosial', '2021-08-22 05:00:18', '2021-08-22 05:00:18'),
(8, 'Staf Kepegawaian', '2021-08-22 05:02:28', '2021-08-22 05:02:28'),
(9, 'Staf Pemerintahan', '2021-08-22 05:04:23', '2021-08-22 05:04:23'),
(10, 'Camat', '2021-08-22 05:04:45', '2021-08-22 05:04:45'),
(11, 'Staf Keuangan', '2021-08-22 05:05:14', '2021-08-22 05:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kependudukan`
--

CREATE TABLE `tb_kependudukan` (
  `id_kependudukan` int(4) NOT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nomor_kk` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') NOT NULL DEFAULT 'Laki - Laki',
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') NOT NULL DEFAULT 'Islam',
  `pendidikan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `hubungan` varchar(25) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `nomor_passpor` varchar(20) DEFAULT NULL,
  `nomor_kitap` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') NOT NULL DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `fk_berita` int(4) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(4) NOT NULL,
  `fk_jabatan` int(4) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT 'Laki - Laki',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `fk_jabatan`, `telepon`, `nama_pegawai`, `tanggal_lahir`, `jenis_kelamin`, `created`, `modified`) VALUES
(1, 1, '087898763456', 'Joni Iskandar', '1995-07-12', 'Laki - Laki', '2021-08-20 04:46:30', '2021-08-20 04:46:30'),
(2, 2, '087812340987', 'Rudi Tabuti', '1992-12-12', 'Laki - Laki', '2021-08-22 04:59:34', '2021-08-22 04:59:34'),
(3, 7, '087812345555', 'Nurul Aidil', '1999-06-02', 'Perempuan', '2021-08-23 03:30:52', '2021-08-23 03:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `id_pemohon` int(4) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') NOT NULL DEFAULT 'Laki - Laki',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`id_pemohon`, `nik`, `username`, `telepon`, `password`, `nama_lengkap`, `pekerjaan`, `tempat_lahir`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `created`, `modified`) VALUES
(1, '6303182802990001', '6303182802990001', '081352699234', '6303182802990001', 'Yasinta Ayu Dya', 'Guru', 'Loktanah', 'Jl.loktanah', '1999-02-28', 'Perempuan', '2021-08-18 07:09:15', '2021-08-27 22:50:47'),
(2, '6303182702990001', '6303182702990001', '081345678976', '6303182702990001', 'Putri Indah Febrianti', 'Mahasiswa', 'Loktanah', 'Jl. Loktanah Rt 02', '1999-02-27', 'Laki - Laki', '2021-08-18 07:41:48', '2021-08-28 05:00:46'),
(3, '6303182202990001', '6303182202990001', '081352699999', '6303182202990001', 'Eva Liana Febrianti', 'Ibu Rumah Tangga', 'Batu Hapu', 'Jl. Loktanah Rt 02', '1999-02-22', 'Perempuan', '2021-08-20 03:58:40', '2021-08-28 04:41:55'),
(4, '6303180808980001', '6303180808980001', '087898761234', '6303180808980001', 'Ayu Utami Juana', 'Ibu Rumah Tangga', 'Banjar', 'Jl. Rampah Rt 02 Rw 09 Kec. Telaga Bauntung Kab. BANJAR', '1998-08-08', 'Perempuan', '2021-08-20 04:12:02', '2021-08-28 00:32:08'),
(5, '6303180707970001', '6303180707970001', '087812345672', '6303180707970001', 'Sri Andriani', 'Mahasiswa', 'Karangan Putih', 'Jl. Serawi Tengah Binuang', '1997-07-07', 'Perempuan', '2021-08-20 04:37:03', '2021-08-20 04:37:03'),
(6, '6303180505950001', '6303180505950001', '081234876511', '6303180505950001', 'Cika Febrianti', 'Swasta', 'Binuang', 'Jl. Serawi', '1995-05-05', 'Perempuan', '2021-08-22 04:05:19', '2021-08-22 04:10:58'),
(7, '6303181101990001', '6303181101990001', '081250828443', '6303181101990001', 'William Dhosen', 'Swasta', 'Binuang', 'Jl. Binuang', '2020-01-11', 'Laki - Laki', '2021-08-23 06:47:39', '2021-08-28 07:15:57'),
(8, '6303180510650001', '6303180510650001', '081256459999', '6303180510650001', 'Siti Fatimah', 'Swasta', 'Binuang', 'Jl. Binuang', '1965-10-05', 'Perempuan', '2021-08-25 15:51:07', '2021-08-25 15:51:07'),
(9, '6303182002690001', '6303182002690001', '081348829818', '6303182002690001', 'Muhammad William', 'Swasta', 'Malang', 'Jl. Lok Tanah', '1969-02-20', 'Laki - Laki', '2021-08-25 16:29:16', '2021-08-27 21:52:00'),
(10, '6303181212920001', '6303181212920001', '081213001200', '6303181212920001', 'Puji Astuti', 'Swasta', 'Tanjung', 'Jl. Telaga Baru', '1992-12-12', 'Perempuan', '2021-08-25 17:02:51', '2021-08-27 21:52:43'),
(11, '6303181303930001', '6303181303930001', '087899995555', '6303181303930001', 'Cika Jesica', 'Swasta', 'Malang', 'Jl. Rampah Rt. 02 Rw 01', '1993-03-13', 'Perempuan', '2021-08-25 19:21:06', '2021-08-27 21:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_imb`
--

CREATE TABLE `tb_surat_imb` (
  `id_surat_imb` int(11) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat_asal` text DEFAULT NULL,
  `alamat_imb` text DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `luas` int(11) DEFAULT NULL,
  `fungsi` varchar(100) DEFAULT NULL,
  `status_tanah` varchar(100) DEFAULT NULL,
  `sebelah_utara` varchar(100) DEFAULT NULL,
  `sebelah_timur` varchar(100) DEFAULT NULL,
  `sebelah_selatan` varchar(100) DEFAULT NULL,
  `sebelah_barat` varchar(100) DEFAULT NULL,
  `fc_ktp` text DEFAULT NULL,
  `fc_pbb` text DEFAULT NULL,
  `fc_sppt` text DEFAULT NULL,
  `fc_tanah` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `c4` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `k4` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_imb`
--

INSERT INTO `tb_surat_imb` (`id_surat_imb`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `pekerjaan`, `alamat_asal`, `alamat_imb`, `desa`, `luas`, `fungsi`, `status_tanah`, `sebelah_utara`, `sebelah_timur`, `sebelah_selatan`, `sebelah_barat`, `fc_ktp`, `fc_pbb`, `fc_sppt`, `fc_tanah`, `c1`, `c2`, `c3`, `c4`, `k1`, `k2`, `k3`, `k4`, `status`, `alasan`, `created`, `modified`) VALUES
(7, 1, '007/IMB/TELAGABAUNTUNG/VIII/2021', 'Yasinta Ayu Dya', '6303182802990001', 'Guru', 'Jl.loktanah', 'Jl. Loktanah Rt 02 Rw 01', 'Lok Tanah', 80, 'Berdagang', 'Tanah Sawah', 'Jenni Alika', 'Diana Agustina', 'Adinda Rahayu', 'Joko Wahono', '1630135212560_ktp.jfif', '1630135212560_kartu_keluarga.jpg', '1630135212560_surat_rt.jpg', '1630135212560_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:20:12', '2021-08-28 06:04:45'),
(8, 3, '008/IMB/TELAGABAUNTUNG/VIII/2021', 'Eva Liana Febrianti', '6303182202990001', 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02', 'Jl. Loktanah Rt 02', 'Lok Tanah', 60, 'Berjualan', 'Tanah Pekarangan', 'Weni Angraini', 'Dina Agustina', 'Diana Denika', 'Susila Wati', '1630151756373_ktp.jfif', '1630151756373_kartu_keluarga.jpg', '1630151756373_surat_rt.jpg', '1630151756373_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:55:56', '2021-08-28 06:04:25'),
(9, 2, '009/IMB/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Mahasiswa', 'Jl. Loktanah Rt 02', 'Jl. Loktanah Rt 02', 'Lok Tanah', 80, 'Berjualan', 'Tanah Sawah', 'Anjani Sesika', 'Didi Sudino', 'Susi Sulisna', 'Mega Wati ', '1630153029068_ktp.jfif', '1630153029068_kartu_keluarga.jpg', '1630153029068_surat_rt.jpg', '1630153029068_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:17:09', '2021-08-28 06:04:11'),
(10, 2, '010/IMB/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Mahasiswa', 'Jl. Loktanah Rt 02', 'Jl. Lok Tanah', 'Lok Tanah', 800, 'Serba Guna', 'Tanah Sawah', 'Fitria Anita', 'Jenika Eriya', 'Riska Serena', 'Ahmat Fadillah', '1630153544342_ktp.jfif', '1630153544342_kartu_keluarga.jpg', '1630153544342_surat_rt.webp', '1630153544343_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:25:44', '2021-08-28 06:04:00'),
(11, 10, '011/IMB/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Swasta', 'Jl. Telaga Baru', 'Jl. Telaga Baru ', 'Telaga Baru', 500, 'Gedung Batminton', 'Tanah Sawah', 'Melda Anngelina', 'Diana Sika Dena', 'Ahmad Fadillah', 'Ayuna Serena', '1630161723239_ktp.jfif', '1630161723239_kartu_keluarga.jpg', '1630161723239_surat_rt.jfif', '1630161723239_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:42:03', '2021-08-28 08:47:09'),
(12, 10, '012/IMB/TELAGABAUNTUNG/VIII/2021', 'Aydina Verika', '6303181109920001', 'Swasta', 'Jl. Telaga Baru', 'Jl. Telaga Baru', 'Telaga Baru', 600, 'Gedung Volly', 'Tanah Pekarangan', 'Febi Rosmalina', 'Dika Eni Wahyudi', 'Adeka Sesano', 'Doni Arsad', '1630161927936_ktp.jfif', '1630161927936_kartu_keluarga.jpg', '1630161927936_surat_rt.jfif', '1630161927936_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:45:27', '2021-08-28 08:47:01'),
(13, 11, '013/IMB/TELAGABAUNTUNG/VIII/2021', 'Cika Jesica', '6303181303930001', 'Swasta', 'Jl. Rampah Rt. 02 Rw 01', 'Jl. Rampah Rt 02 Rw 03', 'Rampah', 600, 'Gedung Serba Guna', 'Sertifikat Hak Milik (SHM)', 'Arsad Muhammad', 'Ayunida Farida', 'Suseno Cahyo', 'Tias Ayu Nintias', '1630164685233_ktp.jfif', '1630164685249_kartu_keluarga.jpg', '1630164685249_surat_rt.jpeg', '1630164685249_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:31:25', '2021-08-28 08:46:51'),
(14, 11, '014/IMB/TELAGABAUNTUNG/VIII/2021', 'Cika Jesica', '6303181303930001', 'Swasta', 'Jl. Rampah Rt. 02 Rw 01', 'Jl. Rampah Rt. 02 Rw 01', 'Rampah', 600, 'Gedung Tenis Meja', 'Sertifikat Hak Milik (SHM)', 'Joko Santoso', 'Deni Hakiki', 'Eka Rahayu', 'Anggraini Diana', '1630164902666_ktp.jfif', '1630164902666_kartu_keluarga.jfif', '1630164902666_surat_rt.jpg', '1630164902667_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:35:02', '2021-08-28 08:46:43'),
(15, 2, '015/IMB/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Mahasiswa', 'Jl. Loktanah Rt 02', 'Jl. Loktanah Rt 02', 'Lok Tanah', 700, 'Gedung Olah Raga', 'Tanah Pekarangan', 'Muhammad Fikri', 'Riski Arjuna', 'Muhammad Amin', 'Susanti Ayda', '1630165299043_ktp.jfif', '1630165299043_kartu_keluarga.jfif', '1630165299043_surat_rt.jfif', '1630165299043_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:41:39', '2021-08-28 08:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_iumk`
--

CREATE TABLE `tb_surat_iumk` (
  `id_surat_iumk` int(11) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `bentuk_perusahan` varchar(100) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `kegiatan_usaha` varchar(50) DEFAULT NULL,
  `tempat_usaha` varchar(50) DEFAULT NULL,
  `alamat_iumk` text DEFAULT NULL,
  `jumlah_modal` int(11) DEFAULT NULL,
  `fc_ktp` text DEFAULT NULL,
  `fc_kk` text DEFAULT NULL,
  `fc_foto` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_iumk`
--

INSERT INTO `tb_surat_iumk` (`id_surat_iumk`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `alamat`, `telepon`, `nama_perusahaan`, `bentuk_perusahan`, `npwp`, `kegiatan_usaha`, `tempat_usaha`, `alamat_iumk`, `jumlah_modal`, `fc_ktp`, `fc_kk`, `fc_foto`, `c1`, `c2`, `c3`, `k1`, `k2`, `k3`, `status`, `alasan`, `created`, `modified`) VALUES
(7, 1, '001/IUMK/TELAGABAUNTUNG/VIII/2021', 'Yasinta Ayu Dya', '6303182802990001', 'Jl.loktanah', '081352699234', 'Berkat Bersama', 'Toko Sembako', '09245233342000', 'Berdagang', 'Rumah', 'Jl. Loktanah Rt 02 Rw 03', 1000000, '1630135553733_ktp.jfif', '1630135553733_kartu_keluarga.jfif', '1630135553733_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:25:53', '2021-08-28 06:07:02'),
(8, 2, '002/IUMK/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Jl. Loktanah Rt 02', '081345678976', 'Berkah Bersama', 'Cv', '199900991200', 'Berdagang Sembako', 'Rumah', 'Jl. Loktanah Rt. 02', 1000000, '1630153678087_ktp.jfif', '1630153678088_kartu_keluarga.jfif', '1630153678088_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:27:58', '2021-08-28 06:06:52'),
(9, 2, '003/IUMK/TELAGABAUNTUNG/VIII/2021', 'Angel Klisha Serina', '6303181902980001', 'Jl. Loktanah Rt 02', '087899993321', 'Jaya Abadi ', 'Cv', '1999342188339', 'Berdagang Obat', 'Toko', 'Jl. Lok Tanah Rt 03', 2000000, '1630153828691_ktp.jfif', '1630153828691_kartu_keluarga.jfif', '1630153828691_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:30:28', '2021-08-28 06:06:42'),
(10, 5, '004/IUMK/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Jl. Serawi Tengah Binuang', '087812345672', 'Air Minum', 'Cv', '12001100119900', 'Berjualan Air', 'Rumah', 'Jl. Loktanah', 1000000, '1630156727637_ktp.jfif', '1630156727638_kartu_keluarga.jfif', '1630156727638_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:18:47', '2021-08-28 06:43:10'),
(11, 10, '005/IUMK/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Jl. Telaga Baru', '081213001200', 'Berjaya Bersama', 'Cv', '125699087689', 'Berjualan Sembako', 'Toko', 'Jl. Telaga Baru', 1000000, '1630162152068_ktp.jfif', '1630162152068_kartu_keluarga.jfif', '1630162152068_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:49:12', '2021-08-28 08:11:18'),
(12, 10, '006/IUMK/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Jl. Telaga Baru', '081213001200', 'Mitra Abadi', 'Cv', '188999457778', 'Berdagang Sembako', 'Rumah', 'Jl. Telaga Baru', 1000000, '1630162276006_ktp.jfif', '1630162276006_kartu_keluarga.jfif', '1630162276006_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:51:16', '2021-08-28 08:11:02'),
(13, 11, '007/IUMK/TELAGABAUNTUNG/VIII/2021', 'Cika Jesica', '6303181303930001', 'Jl. Rampah Rt. 02 Rw 01', '087899995555', 'Maju Bersama', 'Cv', '18975590006555', 'Bengkel Motor', 'Toko', 'Jl. Rampah Rt. 02 Rw 01', 2000000, '1630162493086_ktp.jfif', '1630162493086_kartu_keluarga.jfif', '1630162493086_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:54:53', '2021-08-28 08:10:46'),
(14, 11, '008/IUMK/TELAGABAUNTUNG/VIII/2021', 'Cika Jesica', '6303181303930001', 'Jl. Rampah Rt. 02 Rw 01', '087899995555', 'Berkat Membangun', 'Cv', '1999966688800', 'Berjualan Sembako', 'Toko', 'Jl. Rampah Rt. 02 Rw 01', 2000000, '1630162620942_ktp.jfif', '1630162620942_kartu_keluarga.jfif', '1630162620942_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:57:00', '2021-08-28 08:10:31'),
(15, 11, '009/IUMK/TELAGABAUNTUNG/VIII/2021', 'Cika Jesica', '6303181303930001', 'Jl. Rampah Rt. 02 Rw 01', '087899995555', 'Bersama Maju', 'Cv', '199908880099', 'Berjualan Barang Bekas', 'Rumah', 'Jl. Rampah Rt. 02 Rw 01', 1000000, '1630163330355_ktp.jfif', '1630163330355_kartu_keluarga.jfif', '1630163330355_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:08:50', '2021-08-28 08:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kelahiran`
--

CREATE TABLE `tb_surat_kelahiran` (
  `id_surat_kelahiran` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama_bayi` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `hari` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pukul` time DEFAULT NULL,
  `tempat_kelahiran` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `umur_ibu` int(4) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `alamat_ibu` text DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `umur_ayah` int(4) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `alamat_ayah` text DEFAULT NULL,
  `nama_pelapor` varchar(100) DEFAULT NULL,
  `nik_pelapor` varchar(20) DEFAULT NULL,
  `umur_pelapor` int(4) DEFAULT NULL,
  `pekerjaan_pelapor` varchar(100) DEFAULT NULL,
  `alamat_pelapor` text DEFAULT NULL,
  `hubungan_pelapor` varchar(50) DEFAULT NULL,
  `fc_ktp_ayah` text DEFAULT NULL,
  `fc_ktp_ibu` text DEFAULT NULL,
  `fc_kartu_keluarga` text DEFAULT NULL,
  `fc_surat_nikah` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(4) DEFAULT 0,
  `c2` int(4) DEFAULT 0,
  `c3` int(4) DEFAULT 0,
  `c4` int(4) DEFAULT 0,
  `c5` int(4) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `k4` text DEFAULT NULL,
  `k5` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_kelahiran`
--

INSERT INTO `tb_surat_kelahiran` (`id_surat_kelahiran`, `fk_pemohon`, `nomor_surat`, `nama_bayi`, `jenis_kelamin`, `hari`, `tanggal`, `pukul`, `tempat_kelahiran`, `nama_ibu`, `nik_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `nama_ayah`, `nik_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nama_pelapor`, `nik_pelapor`, `umur_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `hubungan_pelapor`, `fc_ktp_ayah`, `fc_ktp_ibu`, `fc_kartu_keluarga`, `fc_surat_nikah`, `fc_surat_rt`, `c1`, `c2`, `c3`, `c4`, `c5`, `k1`, `k2`, `k3`, `k4`, `k5`, `status`, `alasan`, `created`, `modified`) VALUES
(13, 1, '001/SKK/TELAGABAUNTUNG/VIII/2021', 'Ray Sella Anggaini', 'Perempuan', 'Jumat', '2019-03-01', '09:00:00', 'Binuang', 'Eva Liana Kusuma', '6303182301980001', 23, 'Ibu Rumah Tangga', 'Jl. Transad Blok A Rt. 02 Rw. 02', 'Putra Adi Suhendra', '6303182506970001', 24, 'PNS', 'Jl. Transad Blok A Rt. 02 Rw. 02', 'Yasinta Ayu Dya', '6303182802990001', 22, 'Guru SD', 'Jl. Transad Blok A Rt 02 Rw 02', 'Tetangga Dekat', '1630134170408_ktp_ayah.jfif', '1630134170408_ktp_ibu.jfif', '1630134170408_kartu_keluarga.jpg', '1630134170409_surat_nikah.jpg', '1630134170409_surat_rt.jpg', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:02:50', '2021-08-28 05:58:33'),
(14, 1, '002/SKK/TELAGABAUNTUNG/VIII/2021', 'Santika Umaya', 'Perempuan', 'Senin', '2017-01-01', '09:45:00', 'Banjar', 'Rara Ayunda', '6303182002890001', 30, 'Ibu Rumah Tangga', 'Jl. Transad Blok A Rt 02 Rw 02', 'Mulyadi Putra', '6303180312800001', 35, 'Swasta', 'Jl. Transad Blok A Rt 02 Rw 02', 'Yasinta Ayu Dya', '6303182802990001', 22, 'Guru', 'Jl. Transad Blok A Rt 02 Rw 02', 'Tetangga Jauh', '1630134595142_ktp_ayah.jfif', '1630134595142_ktp_ibu.jfif', '1630134595142_kartu_keluarga.jfif', '1630134595142_surat_nikah.jpg', '1630134595142_surat_rt.webp', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:09:55', '2021-08-28 05:58:17'),
(15, 4, '003/SKK/TELAGABAUNTUNG/VIII/2021', 'Huda Danuari', 'Laki - Laki', 'Senin', '2002-06-02', '08:07:00', 'Banjar', 'Siti Aisyah', '6303180312980001', 23, 'ibu rumah Tangga', 'Jl. LokTanah Rt 02 Rw 01', 'Wijaya Putra', '6303180710980001', 23, 'Petani', 'Jl. Loktanah Rt02 Rw 03', 'Ayu Utami Juana', '6303180808980001', 23, 'Ibu Rumah Tangga', 'Jl. Rampah Rt 02 Rw 09 Kec. Telaga Bauntung Kab. BANJAR', 'Kakak Ipar ', '1630136534763_ktp_ayah.jfif', '1630136534763_ktp_ibu.jfif', '1630136534763_kartu_keluarga.jfif', '1630136534763_surat_nikah.jpg', '1630136534763_surat_rt.jpg', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:42:14', '2021-08-28 05:58:04'),
(16, 4, '004/SKK/TELAGABAUNTUNG/VIII/2021', 'Jeje Julio Seno', 'Laki - Laki', 'Minggu', '1999-11-07', '09:00:00', 'Banjar', 'Jumarni Yunisa', '6003130809950001', 27, 'IbuRumah Tangga', 'Jl, Telaga Baru', 'Angga Diano', '6303180612950001', 27, 'S0pir Truk', 'Jl, Telaga Baru', 'Ayu Utami Juana', '6303180808980001', 23, 'Ibu Rumah Tangga', 'Jl. Rampah Rt 02 Rw 09 Kec. Telaga Bauntung Kab. BANJAR', 'Kakak Kandung', '1630136827541_ktp_ayah.jfif', '1630136827541_ktp_ibu.jfif', '1630136827541_kartu_keluarga.jfif', '1630136827541_surat_nikah.jpg', '1630136827541_surat_rt.webp', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:47:07', '2021-08-28 05:57:50'),
(17, 4, '005/SKK/TELAGABAUNTUNG/VIII/2021', 'Muhammad Doni Wahyudi', 'Laki - Laki', 'Sabtu', '2018-09-01', '03:00:00', 'Lok Tanah', 'Dina Agustina', '6303180405850001', 36, 'Ibu Rumah Tangga', 'Jl. Loktanah', 'Joko Santoso ', '6303181309850001', 36, 'Swasta', 'Jl. Loktanah', 'Ayu Utami Juana', '6303180808980001', 23, 'Ibu Rumah Tangga', 'Jl. Rampah Rt 02 Rw 09 Kec. Telaga Bauntung Kab. BANJAR', 'Adik Kandung', '1630140653023_ktp_ayah.jfif', '1630140653023_ktp_ibu.jfif', '1630140653023_kartu_keluarga.jfif', '1630140653023_surat_nikah.jpg', '1630140653023_surat_rt.png', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 01:50:53', '2021-08-28 05:57:38'),
(18, 3, '006/SKK/TELAGABAUNTUNG/VIII/2021', 'Naya Suliana Rosma', 'Perempuan', 'Senin', '2021-08-02', '09:12:00', 'Banjar', 'Agustina Siska', '6303181309930001', 27, 'Ibu Rumah Tangga', 'Jl. Telaga Baru Rt 02 Rw 04', 'Alde Barak', '6303181304930001', 27, 'Swasta', 'Jl. Telaga Baru Rt 02 Rw 04', 'Eva Liana', '6303182202990001', 22, 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02', 'Tetangga', '1630150883015_ktp_ayah.jfif', '1630150883015_ktp_ibu.jfif', '1630150883015_kartu_keluarga.jfif', '1630150883015_surat_nikah.jpg', '1630150883015_surat_rt.jpg', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:41:23', '2021-08-28 05:56:42'),
(19, 5, '007/SKK/TELAGABAUNTUNG/VIII/2021', 'Dini Kusuma Febrianti', 'Perempuan', 'Selasa', '2021-08-24', '08:00:00', 'Telaga Baru', 'SIti ayna diana', '6303180302990001', 22, 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02', 'Deni Siana', '6303181803950001', 24, 'PNS', 'Jl. Jl. Loktanah Rt 02', 'Sri Andriani', '6303180707970001', 24, 'Mahasiswa', 'Jl. Serawi Tengah Binuang', 'Tetangga', '1630155036232_ktp_ayah.jfif', '1630155036232_ktp_ibu.jfif', '1630155036232_kartu_keluarga.jfif', '1630155036232_surat_nikah.jpg', '1630155036232_surat_rt.png', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:50:36', '2021-08-28 05:56:30'),
(20, 7, '008/SKK/TELAGABAUNTUNG/VIII/2021', 'Eka Wati  Yunita', 'Perempuan', 'Rabu', '1999-05-05', '11:14:00', 'Banjarbaru', 'Diana Adina Eka', '6303180712980001', 23, 'Ibu Rumah Tangga', 'Jl. Telaga Baru Rt 04 Rw 06', 'Adena Ajuna Dino', '630318091098', 23, 'Petani', 'Jl. Telaga Baru Rt 04 Rw 06', 'William Dhosen', '6303181101200001', 1, 'Swasta', 'Jl. Binuang', 'Tetangga', '1630160077050_ktp_ayah.jfif', '1630160077050_ktp_ibu.jfif', '1630160077050_kartu_keluarga.jfif', '1630160077050_surat_nikah.jpg', '1630160077050_surat_rt.webp', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:14:37', '2021-08-28 07:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kematian`
--

CREATE TABLE `tb_surat_kematian` (
  `id_surat_kematian` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `hari` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bertempat` varchar(50) DEFAULT NULL,
  `penyebab` text DEFAULT NULL,
  `nama_pelapor` varchar(100) DEFAULT NULL,
  `nik_pelapor` varchar(20) DEFAULT NULL,
  `tempat_lahir_pelapor` varchar(50) DEFAULT NULL,
  `tanggal_lahir_pelapor` date DEFAULT NULL,
  `pekerjaan_pelapor` varchar(100) DEFAULT NULL,
  `hubungan_pelapor` varchar(50) DEFAULT NULL,
  `fc_ktp_pelapor` text DEFAULT NULL,
  `fc_kartu_keluarga` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_kematian`
--

INSERT INTO `tb_surat_kematian` (`id_surat_kematian`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `hari`, `tanggal`, `bertempat`, `penyebab`, `nama_pelapor`, `nik_pelapor`, `tempat_lahir_pelapor`, `tanggal_lahir_pelapor`, `pekerjaan_pelapor`, `hubungan_pelapor`, `fc_ktp_pelapor`, `fc_kartu_keluarga`, `fc_surat_rt`, `c1`, `c2`, `c3`, `k1`, `k2`, `k3`, `status`, `alasan`, `created`, `modified`) VALUES
(7, 1, '001/SKK/TELAGABAUNTUNG/VIII/2021', 'Yusuf Susanto', '6303182006980001', 'Laki - Laki', 'Sungkai', '1998-06-20', 'Islam', 'Senin', '2021-08-22', 'Rumah', 'Bunuh Diri', 'Yasinta Ayu Dya', '6303182802990001', 'Loktanah', '1999-02-28', 'Guru', 'Tetangga', '1630134773970_ktp_pelapor.jfif', '1630134773970_kartu_keluarga.jfif', '1630134773970_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:12:53', '2021-08-28 05:59:13'),
(8, 5, '002/SKK/TELAGABAUNTUNG/VIII/2021', 'Riski Diaka', '6303180703990001', 'Laki - Laki', 'Rampah', '2021-11-28', 'Islam', 'Rabu', '2021-08-11', 'Rumah', 'Bunuh Diri', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Mahasiswa', 'Tetangga', '1630154191934_ktp_pelapor.jfif', '1630154191934_kartu_keluarga.jfif', '1630154191934_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:36:31', '2021-08-28 05:59:03'),
(9, 5, '003/SKK/TELAGABAUNTUNG/VIII/2021', 'Winarti Sisi', '6303183012990001', 'Perempuan', 'Binuang', '1999-12-30', 'Islam', 'Senin', '2021-08-09', 'Rumah', 'Kecelakaan', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Mahasiswa', 'Tetangga', '1630154434423_ktp_pelapor.jfif', '1630154434423_kartu_keluarga.jfif', '1630154434423_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:40:34', '2021-08-28 05:58:55'),
(10, 6, '004/SKK/TELAGABAUNTUNG/VIII/2021', 'Setiana Ajeng', '630318030999001', 'Laki - Laki', 'Binuang', '2021-02-02', 'Islam', 'Rabu', '2021-08-04', 'Rumah', 'Kecelakaan', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Swasta', 'Tetangga', '1630159002368_ktp_pelapor.jfif', '1630159002368_kartu_keluarga.jfif', '1630159002368_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:56:42', '2021-08-28 07:08:33'),
(11, 6, '005/SKK/TELAGABAUNTUNG/VIII/2021', 'Andini Susilawati', '6303180808980001', 'Perempuan', 'Banjar', '1998-08-08', 'Islam', 'Selasa', '2021-08-03', 'Rumah ', 'Serangan Jantung', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Swasta', 'Sepupu', '1630159173109_ktp_pelapor.jfif', '1630159173109_kartu_keluarga.jfif', '1630159173109_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:59:33', '2021-08-28 07:08:23'),
(12, 6, '006/SKK/TELAGABAUNTUNG/VIII/2021', 'Firman Utama', '603181004990001', 'Laki - Laki', 'Binuang', '1999-04-10', 'Islam', 'Jumat', '2021-08-20', 'Rumah', 'Kecelakaan', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Swasta', 'Adik Ipar', '1630159337392_ktp_pelapor.jfif', '1630159337392_kartu_keluarga.jfif', '1630159337392_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:02:17', '2021-08-28 07:08:15'),
(13, 6, '007/SKK/TELAGABAUNTUNG/VIII/2021', 'Sulisna Wati', '630318130698', 'Perempuan', 'Serawi Tengah', '1998-06-13', 'Islam', 'Senin', '2021-08-09', 'Rumah Sakit', 'Kecelakaan', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Swasta', 'Tetangga', '1630159474715_ktp_pelapor.jfif', '1630159474715_kartu_keluarga.jfif', '1630159474715_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:04:34', '2021-08-28 07:08:07'),
(14, 6, '008/SKK/TELAGABAUNTUNG/VIII/2021', 'Muhammad Gunawan', '6303180909980001', 'Laki - Laki', 'Binuang', '1998-09-09', 'Islam', 'Selasa', '2021-08-10', 'Rumah', 'Darah Tinggi', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Swasta', 'Tetangga', '1630159647081_ktp_pelapor.jfif', '1630159647081_kartu_keluarga.jfif', '1630159647081_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:07:27', '2021-08-28 07:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kependudukan`
--

CREATE TABLE `tb_surat_kependudukan` (
  `id_surat_kependudukan` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kepindahan`
--

CREATE TABLE `tb_surat_kepindahan` (
  `id_surat_kepindahan` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat_asal` text DEFAULT NULL,
  `alamat_tujuan` text DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `alasan_pindah` text DEFAULT NULL,
  `pengikut` int(4) DEFAULT NULL,
  `fc_ktp` text DEFAULT NULL,
  `fc_kartu_keluarga` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_kepindahan`
--

INSERT INTO `tb_surat_kepindahan` (`id_surat_kepindahan`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `pendidikan`, `status_perkawinan`, `pekerjaan`, `alamat_asal`, `alamat_tujuan`, `desa`, `kecamatan`, `kota`, `provinsi`, `alasan_pindah`, `pengikut`, `fc_ktp`, `fc_kartu_keluarga`, `fc_surat_rt`, `c1`, `c2`, `c3`, `k1`, `k2`, `k3`, `status`, `alasan`, `created`, `modified`) VALUES
(7, 1, '001/SKK/TELAGABAUNTUNG/VIII/2021', 'Yasinta Ayu Dya', '6303182802990001', 'Loktanah', '1999-02-28', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Cerai Hidup', 'Guru SD', 'Jl.loktanah', 'Jl. Transad Blok A Rt 02 Rw 03', 'Transad', 'Binuang', 'Binuang', 'Kalimantan Selatan', 'karna Pekerjaan', 2, '1630134929928_ktp.jfif', '1630134929928_kartu_keluarga.jfif', '1630134929928_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:15:29', '2021-08-28 06:02:19'),
(8, 1, '002/SKK/TELAGABAUNTUNG/VIII/2021', 'Siti Khalifah ', '6303182912990001', 'Loktanah', '1999-12-29', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Guru', 'Jl.loktanah', 'Jl. Transad Blok A Rt 02 Rw 02', 'Transad', 'Binuang', 'Binuang', 'Kalimantan Selatan ', 'Mengikuti Orang Tua', 1, '1630135058199_ktp.jfif', '1630135058199_kartu_keluarga.jpg', '1630135058199_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:17:38', '2021-08-28 06:02:09'),
(9, 3, '003/SKK/TELAGABAUNTUNG/VIII/2021', 'Eva Liana Febrianti', '6303182202990001', 'Batu Hapu', '1999-02-22', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Kawin', 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02', 'Jl. Batu hapu rt 02 rw 02', 'Batu hapu', 'Batu Hapu', 'Tapin', 'Kalimantan Selatan', 'Mengikuti Suami', 1, '1630151283810_ktp.jfif', '1630151283810_kartu_keluarga.jfif', '1630151283810_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:48:03', '2021-08-28 06:01:57'),
(10, 2, '004/SKK/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Loktanah', '1999-02-27', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Mahasiswa', 'Jl. Loktanah Rt 02', 'A yani Km. 89 Binuang', 'Binuang', 'Binuang', 'Tapin', 'Kalimantan Selatan', 'Mengikuti Orng tua', 1, '1630152823960_ktp.jfif', '1630152823960_kartu_keluarga.jfif', '1630152823960_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:13:43', '2021-08-28 06:01:47'),
(11, 5, '005/SKK/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Mahasiswa', 'Jl. Serawi Tengah Binuang', 'Jl. Rampah Rt. 01 Rt. 02', 'Rampah', 'Telaga Bauntung', 'Rampah', 'Kalimantan Selatan', 'Karna Pekerjaan', 3, '1630157163340_ktp.jfif', '1630157163340_kartu_keluarga.jfif', '1630157163340_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:26:03', '2021-08-28 07:24:45'),
(12, 5, '006/SKK/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Mahasiswa', 'Jl. Serawi Tengah Binuang', 'Jl. Serawi Dalam ', 'Serawi Dalam', 'Binuang', 'Binuang', 'Kalimantan Selatan', 'Jl. Serawi Dalam', 2, '1630157531325_ktp.jfif', '1630157531325_kartu_keluarga.jfif', '1630157531325_surat_rt.jpeg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:32:11', '2021-08-28 07:24:34'),
(13, 6, '007/SKK/TELAGABAUNTUNG/VIII/2021', 'Cika Febrianti', '6303180505950001', 'Binuang', '1995-05-05', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Swasta', 'Jl. Serawi', 'Jl. Serawi Tengah', 'Serawi', 'Binuang', 'Tapin', 'Kalimanta Selatan', 'Jl. Serawi Tengah', 1, '1630158754435_ktp.jfif', '1630158754435_kartu_keluarga.jfif', '1630158754435_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:52:34', '2021-08-28 07:24:24'),
(14, 10, '008/SKK/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Tanjung', '1992-12-12', 'Perempuan', 'Islam', 'Indonesia', 'SMA', 'Belum Kawin', 'Swasta', 'Jl. Telaga Baru', 'Jl. Telaga Baru Rt 03 Rw 04', 'Rantau Bujur', 'Telaga Bauntung', 'Rantau Bujur', 'Kalimantan Selatan', 'Jl. Rantau Bujur', 2, '1630161218344_ktp.jfif', '1630161218345_kartu_keluarga.jfif', '1630161218345_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:33:38', '2021-08-28 07:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kerumunan`
--

CREATE TABLE `tb_surat_kerumunan` (
  `id_surat_kerumunan` int(11) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_kerumunan` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kerumunan` varchar(100) DEFAULT NULL,
  `dalam_rangka` varchar(100) DEFAULT NULL,
  `fc_ktp` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_kerumunan`
--

INSERT INTO `tb_surat_kerumunan` (`id_surat_kerumunan`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat`, `tanggal_kerumunan`, `jam_mulai`, `jam_selesai`, `tempat_kerumunan`, `dalam_rangka`, `fc_ktp`, `fc_surat_rt`, `c1`, `c2`, `k1`, `k2`, `status`, `alasan`, `created`, `modified`) VALUES
(8, 1, '001/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Yasinta Ayu Dya', '6303182802990001', 'Loktanah', '1999-02-28', 'Perempuan', 'Islam', 'Indonesia', 'Guru', 'Jl.loktanah', '2021-08-02', '08:00:00', '12:45:00', 'Rumah Pak Rt', 'Pernikahan', '1630135708490_ktp.jfif', '1630135708490_surat_rt.webp', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 00:28:28', '2021-08-28 06:41:13'),
(9, 1, '002/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Pitri Yuliani', '6303182802990001', 'Loktanah', '1999-02-28', 'Perempuan', 'Islam', 'Indonesia', 'Swasta', 'Jl.loktanah', '2021-08-27', '08:00:00', '11:14:00', 'Rumah Sendiri', 'Syukuran', '1630135842378_ktp.jfif', '1630135842378_surat_rt.png', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 00:30:42', '2021-08-28 06:41:03'),
(10, 4, '003/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Ayu Utami Juana', '6303180808980001', 'Banjar', '1998-08-08', 'Perempuan', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Jl. Rampah Rt 02 Rw 09 Kec. Telaga Bauntung Kab. BANJAR', '2021-08-29', '09:00:00', '11:00:00', 'Gedung Serba Guna', 'Pernikahan', '1630149406966_ktp.jfif', '1630149406966_surat_rt.jpg', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 04:16:46', '2021-08-28 06:40:46'),
(11, 3, '004/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Eva Liana Febrianti', '6303182202990001', 'Batu Hapu', '1999-02-22', 'Perempuan', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02', '2021-08-27', '07:00:00', '12:00:00', 'Rumah Sendiri', 'Khitanan', '1630151051103_ktp.jfif', '1630151051103_surat_rt.webp', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 04:44:11', '2021-08-28 06:39:47'),
(12, 5, '005/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Serawi Tengah Binuang', '2021-08-07', '09:00:00', '01:00:00', 'Rumah Pak Rt', 'Pernikahan', '1630156333677_ktp.jfif', '1630156333712_surat_rt.webp', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 06:12:13', '2021-08-28 06:39:38'),
(13, 5, '006/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Serawi Tengah Binuang', '2021-08-06', '09:20:00', '10:19:00', 'Gedung Serba Guna', 'Pernikahan', '1630156839333_ktp.jpg', '1630156839334_surat_rt.png', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 06:20:39', '2021-08-28 06:39:22'),
(14, 10, '007/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Tanjung', '1992-12-12', 'Perempuan', 'Islam', 'Indonesia', 'Swasta', 'Jl. Telaga Baru', '2021-08-27', '09:30:00', '20:30:00', 'Rumah Sendiri', 'Pernikahan', '1630161325910_ktp.jfif', '1630161325910_surat_rt.png', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 07:35:25', '2021-08-28 08:54:40'),
(15, 10, '008/KERUMUNAN/TELAGABAUNTUNG/VIII/2021', 'Puji Astuti', '6303181212920001', 'Tanjung', '1992-12-12', 'Perempuan', 'Islam', 'Indonesia', 'Swasta', 'Jl. Telaga Baru', '2021-08-21', '11:40:00', '12:37:00', 'Toko Berkat Bersama', 'Ulang Tahun', '1630161419071_ktp.jfif', '1630161419071_surat_rt.png', 0, 0, NULL, NULL, 'Setuju', '-', '2021-08-28 07:36:59', '2021-08-28 08:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_ktp`
--

CREATE TABLE `tb_surat_ktp` (
  `id_surat_ktp` int(4) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `alamat` text DEFAULT NULL,
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `fc_ijazah_pendidikan` text DEFAULT NULL,
  `fc_akta_kelahiran` text DEFAULT NULL,
  `fc_kartu_keluarga` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `c4` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `k4` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_ktp`
--

INSERT INTO `tb_surat_ktp` (`id_surat_ktp`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `fc_ijazah_pendidikan`, `fc_akta_kelahiran`, `fc_kartu_keluarga`, `fc_surat_rt`, `c1`, `c2`, `c3`, `c4`, `k1`, `k2`, `k3`, `k4`, `status`, `alasan`, `created`, `modified`) VALUES
(11, 1, '001/SKK/TELAGABAUNTUNG/VIII/2021', 'May Nisa Febrian', '0', 'Binuang', '1999-01-01', 'Perempuan', 'Jl. Serawi Tengah Rt 02 Rw 03 ', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '1630130322492_ijazah_pendidikan.jpg', '1630130322492_akta_kelahiran.jpg', '1630130322492_kartu_keluarga.jfif', '1630130322492_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-27 22:58:42', '2021-08-28 06:03:33'),
(12, 1, '002/SKK/TELAGABAUNTUNG/VIII/2021', 'Alisa Dina Sela', '0', 'Binuang', '1999-01-02', 'Perempuan', 'Jl. Transad Blok A Rt 01 Rw 16', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '1630130561569_ijazah_pendidikan.jpg', '1630130561569_akta_kelahiran.jpg', '1630130561569_kartu_keluarga.jfif', '1630130561569_surat_rt.webp', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-27 23:02:41', '2021-08-28 06:03:23'),
(13, 1, '003/SKK/TELAGABAUNTUNG/VIII/2021', 'Lisna Watiani', '0', 'Jelamu', '1997-03-01', 'Perempuan', 'Jl. Rantau Bujur rt 04 rw 00', 'Islam', 'Kawin', 'Swasta', 'Indonesia', '1630131557079_ijazah_pendidikan.jpg', '1630131557079_akta_kelahiran.jpg', '1630131557079_kartu_keluarga.jfif', '1630131557079_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-27 23:19:17', '2021-08-28 06:03:13'),
(14, 4, '004/SKK/TELAGABAUNTUNG/VIII/2021', 'Rangga Putra Pratama', '0', 'Jawa Timur', '1996-01-17', 'Laki - Laki', 'Jl. Loktanah Rt 02 Rw 01', 'Islam', 'Kawin', 'Sopir Truk', 'Indonesia', '1630136103071_ijazah_pendidikan.jpg', '1630136103071_akta_kelahiran.jpg', '1630136103071_kartu_keluarga.jfif', '1630136103071_surat_rt.jpeg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:35:03', '2021-08-28 06:03:05'),
(15, 4, '005/SKK/TELAGABAUNTUNG/VIII/2021', 'Ana Sela Jesica', '0', 'Banjar', '1998-01-12', 'Perempuan', 'Jl. Loktanah Rt 02 Rw 01', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '1630136239916_ijazah_pendidikan.jpg', '1630136239916_akta_kelahiran.jpg', '1630136239916_kartu_keluarga.jfif', '1630136239916_surat_rt.png', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:37:19', '2021-08-28 06:02:56'),
(16, 3, '006/SKK/TELAGABAUNTUNG/VIII/2021', 'Jaya Kusuma Dian', '0', 'Banjar', '2000-07-05', 'Laki - Laki', 'Jl. Telaga Baru', 'Islam', 'Belum Kawin', 'Pelajar', 'Indonesia', '1630151571466_ijazah_pendidikan.jpg', '1630151571466_akta_kelahiran.jpg', '1630151571466_kartu_keluarga.jfif', '1630151571466_surat_rt.webp', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:52:51', '2021-08-28 06:02:48'),
(17, 5, '007/SKK/TELAGABAUNTUNG/VIII/2021', 'Kartika Putri', '0', 'Lok Tanah', '1990-01-24', 'Perempuan', 'Jl. Loktanah', 'Islam', 'Kawin', 'Swasta', 'Indonesia', '1630155280989_ijazah_pendidikan.jpg', '1630155280989_akta_kelahiran.jpg', '1630155280989_kartu_keluarga.jfif', '1630155280989_surat_rt.webp', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 05:54:40', '2021-08-28 06:02:37'),
(18, 6, '008/SKK/TELAGABAUNTUNG/VIII/2021', 'Yudi Ahmad', '0', 'Tungkap', '1998-07-28', 'Laki - Laki', 'Jl. Transad Blok Rt. 06 Rw 04', 'Islam', 'Belum Kawin', 'Swasta', 'Indonesia', '1630157792605_ijazah_pendidikan.jpg', '1630157792605_akta_kelahiran.jpg', '1630157792605_kartu_keluarga.jfif', '1630157792605_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:36:32', '2021-08-28 07:25:34'),
(19, 6, '009/SKK/TELAGABAUNTUNG/VIII/2021', 'Rika Setiana', '0', 'Banjar', '1999-02-03', 'Perempuan', 'Jl. Jaya abdi ', 'Islam', 'Belum Kawin', 'Swasta', 'Indonesia', '1630158479075_ijazah_pendidikan.jpg', '1630158479075_akta_kelahiran.jpg', '1630158479075_kartu_keluarga.jfif', '1630158479075_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:47:59', '2021-08-28 07:25:22'),
(20, 7, '010/SKK/TELAGABAUNTUNG/VIII/2021', 'Deni Hakiki Ahmad', '0', 'Binuang', '2000-02-20', 'Laki - Laki', 'Jl. Transad Blok H Rt 03 Rw. 04', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '1630160404341_ijazah_pendidikan.jpg', '1630160404341_akta_kelahiran.jpg', '1630160404341_kartu_keluarga.jfif', '1630160404341_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:20:04', '2021-08-28 07:25:11'),
(21, 7, '011/SKK/TELAGABAUNTUNG/VIII/2021', 'Ayunda Binaka Ana', '0', 'Transad', '1999-02-02', 'Perempuan', 'Jl. Transad Blok D Rt 04 Rw 05', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '1630160570979_ijazah_pendidikan.jpg', '1630160570979_akta_kelahiran.jpg', '1630160570979_kartu_keluarga.jfif', '1630160570979_surat_rt.jpg', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 07:22:50', '2021-08-28 07:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_skd`
--

CREATE TABLE `tb_surat_skd` (
  `id_surat_skd` int(11) NOT NULL,
  `fk_pemohon` int(4) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','Lainnya') DEFAULT 'Laki - Laki',
  `agama` enum('Islam','Hindu','Budha','Katolik','Kristen','Konghucu') DEFAULT 'Islam',
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat_domisili` text DEFAULT NULL,
  `fc_ktp` text DEFAULT NULL,
  `fc_kartu_keluarga` text DEFAULT NULL,
  `fc_surat_rt` text DEFAULT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `k1` text DEFAULT NULL,
  `k2` text DEFAULT NULL,
  `k3` text DEFAULT NULL,
  `status` enum('Proses','Revisi','Setuju','Tolak') DEFAULT 'Proses',
  `alasan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_skd`
--

INSERT INTO `tb_surat_skd` (`id_surat_skd`, `fk_pemohon`, `nomor_surat`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat_domisili`, `fc_ktp`, `fc_kartu_keluarga`, `fc_surat_rt`, `c1`, `c2`, `c3`, `k1`, `k2`, `k3`, `status`, `alasan`, `created`, `modified`) VALUES
(6, 1, '001/SKD/TELAGABAUNTUNG/VIII/2021', 'Yasinta Ayu Dya', '6303182802990001', 'Loktanah', '1999-02-28', 'Perempuan', 'Islam', 'Indonesia', 'Guru', 'Jl. Loktanah Rt 02 Rw 03', '1630135642652_ktp.jfif', '1630135642652_kartu_keluarga.jfif', '1630135642652_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 00:27:22', '2021-08-28 06:38:32'),
(7, 4, '002/SKD/TELAGABAUNTUNG/VIII/2021', 'Ayu Utami Juana', '6303180808980001', 'Banjar', '1998-08-08', 'Perempuan', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02 Rw 10', '1630148999671_ktp.jfif', '1630148999671_kartu_keluarga.jfif', '1630148999671_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:09:59', '2021-08-28 06:07:42'),
(8, 4, '003/SKD/TELAGABAUNTUNG/VIII/2021', 'Jenni Ayu Ningtias', '6303181203990001', 'Banjar', '1999-03-12', 'Perempuan', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Jl. Loktanah Rt 02 Rw 03', '1630149219381_ktp.jfif', '1630149219381_kartu_keluarga.jfif', '1630149219381_surat_rt.jpeg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:13:39', '2021-08-28 06:07:31'),
(9, 3, '004/SKD/TELAGABAUNTUNG/VIII/2021', 'Eva Liana Febrianti', '6303182202990001', 'Batu Hapu', '1999-02-22', 'Perempuan', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', 'Jl. Batu Hapu Rt 02 Rw 03', '1630151419611_ktp.jfif', '1630151419611_kartu_keluarga.jfif', '1630151419611_surat_rt.jpg', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 04:50:19', '2021-08-28 06:07:20'),
(10, 5, '005/SKD/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Tungkap ', '1630156436787_ktp.jfif', '1630156436787_kartu_keluarga.jfif', '1630156436787_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:13:56', '2021-08-28 06:38:18'),
(11, 5, '006/SKD/TELAGABAUNTUNG/VIII/2021', 'Sri Andriani', '6303180707970001', 'Karangan Putih', '1997-07-07', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Binuang', '1630156536395_ktp.jfif', '1630156536395_kartu_keluarga.jfif', '1630156536395_surat_rt.webp', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 06:15:36', '2021-08-28 06:38:03'),
(12, 2, '007/SKD/TELAGABAUNTUNG/VIII/2021', 'Putri Indah Febrianti', '6303182702990001', 'Loktanah', '1999-02-27', 'Laki - Laki', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Loktanah', '1630165724110_ktp.jfif', '1630165724110_kartu_keluarga.jfif', '1630165724110_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:48:44', '2021-08-28 08:55:12'),
(13, 2, '008/SKD/TELAGABAUNTUNG/VIII/2021', 'Alika Etana Damayanti', '6303182708940001', 'Loktanah', '1994-08-27', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Loktanah', '1630165835247_ktp.jfif', '1630165835247_kartu_keluarga.jfif', '1630165835247_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:50:35', '2021-08-28 08:55:04'),
(14, 2, '009/SKD/TELAGABAUNTUNG/VIII/2021', 'Nana Yulina Ana', '6303182712900001', 'Loktanah', '1990-12-27', 'Perempuan', 'Islam', 'Indonesia', 'Mahasiswa', 'Jl. Loktanah Rt 02 Rw 03', '1630166040086_ktp.jfif', '1630166040086_kartu_keluarga.jfif', '1630166040086_surat_rt.png', 0, 0, 0, NULL, NULL, NULL, 'Setuju', '-', '2021-08-28 08:54:00', '2021-08-28 08:54:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `telepon` (`telepon`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  ADD PRIMARY KEY (`id_kependudukan`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`) USING BTREE;

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK__tb_pemohon` (`fk_pemohon`),
  ADD KEY `FK_tb_komentar_tb_berita` (`fk_berita`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `telepon` (`telepon`),
  ADD KEY `FK_tb_pegawai_tb_jabatan` (`fk_jabatan`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`id_pemohon`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `telepon` (`telepon`);

--
-- Indexes for table `tb_surat_imb`
--
ALTER TABLE `tb_surat_imb`
  ADD PRIMARY KEY (`id_surat_imb`) USING BTREE,
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kepindahan_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_iumk`
--
ALTER TABLE `tb_surat_iumk`
  ADD PRIMARY KEY (`id_surat_iumk`) USING BTREE,
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kepindahan_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_kelahiran`
--
ALTER TABLE `tb_surat_kelahiran`
  ADD PRIMARY KEY (`id_surat_kelahiran`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kelahiran_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_kematian`
--
ALTER TABLE `tb_surat_kematian`
  ADD PRIMARY KEY (`id_surat_kematian`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kematian_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_kependudukan`
--
ALTER TABLE `tb_surat_kependudukan`
  ADD PRIMARY KEY (`id_surat_kependudukan`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kependudukan_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_kepindahan`
--
ALTER TABLE `tb_surat_kepindahan`
  ADD PRIMARY KEY (`id_surat_kepindahan`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kepindahan_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_kerumunan`
--
ALTER TABLE `tb_surat_kerumunan`
  ADD PRIMARY KEY (`id_surat_kerumunan`) USING BTREE,
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kepindahan_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_ktp`
--
ALTER TABLE `tb_surat_ktp`
  ADD PRIMARY KEY (`id_surat_ktp`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_ktp_tb_pemohon` (`fk_pemohon`);

--
-- Indexes for table `tb_surat_skd`
--
ALTER TABLE `tb_surat_skd`
  ADD PRIMARY KEY (`id_surat_skd`) USING BTREE,
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `FK_tb_surat_kepindahan_tb_pemohon` (`fk_pemohon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  MODIFY `id_kependudukan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  MODIFY `id_pemohon` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_surat_imb`
--
ALTER TABLE `tb_surat_imb`
  MODIFY `id_surat_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_surat_iumk`
--
ALTER TABLE `tb_surat_iumk`
  MODIFY `id_surat_iumk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_surat_kelahiran`
--
ALTER TABLE `tb_surat_kelahiran`
  MODIFY `id_surat_kelahiran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_surat_kematian`
--
ALTER TABLE `tb_surat_kematian`
  MODIFY `id_surat_kematian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_surat_kependudukan`
--
ALTER TABLE `tb_surat_kependudukan`
  MODIFY `id_surat_kependudukan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_surat_kepindahan`
--
ALTER TABLE `tb_surat_kepindahan`
  MODIFY `id_surat_kepindahan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_surat_kerumunan`
--
ALTER TABLE `tb_surat_kerumunan`
  MODIFY `id_surat_kerumunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_surat_ktp`
--
ALTER TABLE `tb_surat_ktp`
  MODIFY `id_surat_ktp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_surat_skd`
--
ALTER TABLE `tb_surat_skd`
  MODIFY `id_surat_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_komentar_ibfk_2` FOREIGN KEY (`fk_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`fk_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_imb`
--
ALTER TABLE `tb_surat_imb`
  ADD CONSTRAINT `tb_surat_imb_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_iumk`
--
ALTER TABLE `tb_surat_iumk`
  ADD CONSTRAINT `tb_surat_iumk_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_kelahiran`
--
ALTER TABLE `tb_surat_kelahiran`
  ADD CONSTRAINT `tb_surat_kelahiran_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_kematian`
--
ALTER TABLE `tb_surat_kematian`
  ADD CONSTRAINT `tb_surat_kematian_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_kependudukan`
--
ALTER TABLE `tb_surat_kependudukan`
  ADD CONSTRAINT `tb_surat_kependudukan_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_kepindahan`
--
ALTER TABLE `tb_surat_kepindahan`
  ADD CONSTRAINT `tb_surat_kepindahan_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_kerumunan`
--
ALTER TABLE `tb_surat_kerumunan`
  ADD CONSTRAINT `tb_surat_kerumunan_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_ktp`
--
ALTER TABLE `tb_surat_ktp`
  ADD CONSTRAINT `tb_surat_ktp_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_skd`
--
ALTER TABLE `tb_surat_skd`
  ADD CONSTRAINT `tb_surat_skd_ibfk_1` FOREIGN KEY (`fk_pemohon`) REFERENCES `tb_pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
