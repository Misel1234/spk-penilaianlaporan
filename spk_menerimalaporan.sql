-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_menerimalaporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Seksi TIK', 'usertik', 'usertik', 'Seksi TIK');

-- --------------------------------------------------------

--
-- Table structure for table `data_kasus_hukum`
--

CREATE TABLE `data_kasus_hukum` (
  `id_kasus_hukum` int(11) NOT NULL,
  `kasus` text NOT NULL,
  `alamat` text NOT NULL,
  `penyelidikan` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kasus_hukum`
--

INSERT INTO `data_kasus_hukum` (`id_kasus_hukum`, `kasus`, `alamat`, `penyelidikan`, `status`) VALUES
(1, 'Penipuan Call Center Bank Palsu', 'Kabupaten Minahasa', 'Ditangani', 'Berjalan Baik'),
(2, 'Penculikan Anak', 'Kabupaten Minahasa', 'Ditangani', 'Berjalan Baik'),
(3, 'Kasus Tabrak Lari (Seorang Pengendara Motor Meninggal Dunia)', 'Tompaso', 'Ditangani', 'Berjalan Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `seksi` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hadir` int(11) NOT NULL,
  `tidak_hadir` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id_kehadiran`, `seksi`, `nama`, `hadir`, `tidak_hadir`, `izin`, `sakit`) VALUES
(1, 'Seksi TIK', 'IPTU JAN ROBBY WONGKAR', 21, 1, 2, 0),
(3, 'Seksi TIK', 'RIDEL KELVIN KAAWOAN', 21, 2, 1, 0),
(4, 'Seksi TIK', 'MOHAMAD RIDEL MANOPPO', 20, 2, 2, 0),
(8, 'Seksi Propam', 'NOFRI VECKY TUMARAR', 21, 0, 2, 1),
(9, 'Seksi Hukum', 'I PUTU HARTAWAN KUSUMA', 20, 1, 1, 2),
(10, 'Seksi Umum', 'DJONNIE TUMENGKOL', 20, 2, 2, 0),
(11, 'Seksi Pengawas', 'ABDUL RAHMAN ABUBAKAR', 21, 2, 1, 0),
(12, 'Seksi Pengawas', 'HERIANTO', 20, 2, 1, 1),
(13, 'Seksi Pengawas', 'JUHARNON RIRI SUSANTO', 19, 3, 2, 0),
(14, 'Seksi Propam', 'HANNY SOUTH', 21, 2, 1, 0),
(15, 'Seksi Propam', 'ALEXANDER CHRISTIAN TALLE', 20, 3, 1, 0),
(16, 'Seksi Propam', 'AIDRISTOFEL SUMALU', 20, 2, 0, 2),
(17, 'Seksi Propam', 'MAT HADI', 20, 3, 1, 0),
(18, 'Seksi Propam', 'LERRY VALENTINO KUSEN', 19, 4, 0, 1),
(19, 'Seksi Propam', 'JOFRI F. TAKASABAR', 18, 3, 3, 0),
(20, 'Seksi Propam', 'RYAN ISKANDAR KODU', 21, 2, 1, 0),
(21, 'Seksi Propam', 'JOVEL JACLAIN MEA', 19, 3, 2, 0),
(22, 'Seksi Propam', 'SIKBER MAKATEMPUAGE', 19, 4, 1, 0),
(23, 'Seksi Hukum', 'OKTAVIANUS TANDE, SH', 21, 2, 1, 0),
(24, 'Seksi Hukum', 'ROCKYE POLII', 19, 2, 1, 2),
(25, 'Seksi Umum', 'BUDISTIRA D. WOWOR', 21, 0, 1, 2),
(26, 'Seksi Umum', 'PRISILIA MELENIA SEPANG', 20, 3, 1, 0),
(27, 'Seksi Umum', 'CHRISTY TRIWAHYUNI CANTIKA SUGIARTA', 20, 2, 2, 0),
(28, 'Seksi Umum', 'SIEN OLFINE KOROMPIS', 19, 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_aset`
--

CREATE TABLE `data_kriteria_aset` (
  `kondisi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_aset`
--

INSERT INTO `data_kriteria_aset` (`kondisi`, `kategori`) VALUES
('rusak ringan', 'perbaikan'),
('rusak berat', 'tidak perbaikan'),
('hilang ', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_barang`
--

CREATE TABLE `data_kriteria_barang` (
  `kondisi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_barang`
--

INSERT INTO `data_kriteria_barang` (`kondisi`, `status`, `kategori`) VALUES
('baik', 'diterima dan disimpan', 'aktif'),
('rusak ringan', 'diterima dan diperbaiki', 'aktif'),
('rusak berat', 'diterima dan dikembalikan', 'tidak aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_ht`
--

CREATE TABLE `data_kriteria_ht` (
  `kondisi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_ht`
--

INSERT INTO `data_kriteria_ht` (`kondisi`, `status`, `kategori`) VALUES
('rusak ringan', 'diterima dan diperbaiki', 'aktif'),
('rusak berat', 'diterima dan dikembalikan', 'tidak aktif'),
('baik', 'diterima dan disimpan', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_kasus`
--

CREATE TABLE `data_kriteria_kasus` (
  `penyelidikan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_kasus`
--

INSERT INTO `data_kriteria_kasus` (`penyelidikan`, `status`, `kategori`) VALUES
('ditangani', 'berjalan baik', 'terlakasana'),
('tidak ditangani', 'tidak berjalan baik', 'tidak terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_kecelakaan`
--

CREATE TABLE `data_kriteria_kecelakaan` (
  `penyelidikan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_kecelakaan`
--

INSERT INTO `data_kriteria_kecelakaan` (`penyelidikan`, `keterangan`, `kategori`) VALUES
('berjalan baik', 'kecelakaan ringan', 'terlaksana'),
('tidak berjalan baik', 'kecelakaan berat', 'tidak terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_tik`
--

CREATE TABLE `data_kriteria_tik` (
  `jumlah_kehadiran` text NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_tik`
--

INSERT INTO `data_kriteria_tik` (`jumlah_kehadiran`, `kategori`) VALUES
('20-26', 'baik'),
('14-19', 'kurang baik'),
('1-13', 'tidak baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria_vicon`
--

CREATE TABLE `data_kriteria_vicon` (
  `kondidi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria_vicon`
--

INSERT INTO `data_kriteria_vicon` (`kondidi`, `status`, `kategori`) VALUES
('berjalan', 'baik', 'terlaksana'),
('tidak berjalan', 'terkendala', 'tidak terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_loginhukum`
--

CREATE TABLE `data_loginhukum` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_loginhukum`
--

INSERT INTO `data_loginhukum` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Seksi HUKUM', 'userhuk', 'userhuk', 'Seksi Hukum');

-- --------------------------------------------------------

--
-- Table structure for table `data_loginpropam`
--

CREATE TABLE `data_loginpropam` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_loginpropam`
--

INSERT INTO `data_loginpropam` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Seksi PROPAM', 'userpropam', 'userpropam', 'Seksi PROPAM');

-- --------------------------------------------------------

--
-- Table structure for table `data_loginum`
--

CREATE TABLE `data_loginum` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_loginum`
--

INSERT INTO `data_loginum` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Seksi UMUM', 'userum', 'userum', 'Seksi UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `data_loginwas`
--

CREATE TABLE `data_loginwas` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_loginwas`
--

INSERT INTO `data_loginwas` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Seksi WAS', 'userwas', 'userwas', 'Seksi WAS');

-- --------------------------------------------------------

--
-- Table structure for table `data_monitoring`
--

CREATE TABLE `data_monitoring` (
  `id_monitoring` int(11) NOT NULL,
  `monitoring` varchar(100) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_monitoring`
--

INSERT INTO `data_monitoring` (`id_monitoring`, `monitoring`, `nama`, `c1`, `status`) VALUES
(6, 'Vicon', 'Rapat Optimalisasi Program Polisi RW', 'Berjalan', 'Baik'),
(7, 'Vicon', 'Latihan Peningkatan Kemampuan Bhabinkamtibmas Tahun 2023', 'Berjalan', 'Baik'),
(180, 'Vicon', 'Webinar Peningkatan Kemampuan Bhabinkamtibmas Tahun 2023', 'Berjalan', 'Baik'),
(181, 'Vicon', 'Peningkatan Kemampuan Personel Bhabinkamtibmas Tingkat Mabes T.A 2023 Gelombang 2', 'Berjalan', 'Baik'),
(182, 'Vicon', 'Sosialisasi Naskah Kerja Sama Teknis (Perjanjian Kerja Sama Antara PT Perkebunan Nusantara III Persero Dengan Kepolisian Negara RI)', 'Tidak Berjalan', 'Terkendala '),
(183, 'Vicon', 'Peningkatan Kemampuan Personel  Bhabinkamtibmas Tingkat Mabes T.A 2023 Gelombang 3', 'Berjalan', 'Baik'),
(184, 'Vicon', 'ANEV DIT Reskrimsus Polda Sulut Dan Jajaran', 'Berjalan', 'Baik'),
(185, 'Vicon', 'Rakernis DIV TIK Polri TA 2023', 'Berjalan', 'Baik'),
(186, 'Vicon', 'ANEV GK Bulanan Bulan Januari Dan Februari Tahun 2023', 'Berjalan', 'Baik'),
(187, 'Vicon', 'ANEV Direktorat Dan Jajaran Februari 2023', 'Berjalan', 'Baik'),
(188, 'Vicon', 'Audit Kinerja Tahap I TA. 2023 Aspek Perencanaan Dan Pengorganisasion', 'Berjalan', 'Baik'),
(189, 'Vicon', 'Rapat Kerja Teknis Fungsi Reskrim Tahun Anggaran 2023 Dengan Tema : PENYIDIK POLRI YANG PRESISI SIAP MENGAWAL PEMILU 2024 DAN MENDUKUNG KEBIJAKAN EKONOMI NASIONAL', 'Berjalan', 'Baik'),
(190, 'Vicon', 'Rakernis Fungsi LaluLintas Tahun 2023 Hari I', 'Berjalan', 'Baik'),
(191, 'Vicon', 'Rakernis SDM Polri TA 2023', 'Berjalan', 'Baik'),
(192, 'Vicon', 'Rapat ANEV Dumas Terkait Penyelesaian Penanganan Dumas Yang Ditangani Oleh Satfung Internal Polda Sulut & Jajaran', 'Berjalan', 'Baik'),
(193, 'Vicon', 'Pelatihan Jurnalistik Bhabinkamtibmas  ', 'Berjalan', 'Baik'),
(194, 'Vicon', 'Dialog Penguatan Internal Polri Guna Pemantapan Komunikasi Publik Menuju Polri Yang PRESISI (Kegiatan 1)', 'Berjalan', 'Baik'),
(195, 'Vicon', 'Arahan DIR Binmas Polda Sulut Dengan Para Kasat Binmas Polres / TA Jajaran Polda Sulut', 'Berjalan', 'Baik'),
(196, 'Vicon', 'Penekanan Terkait Aplikasi Si SDM', 'Berjalan', 'Baik'),
(197, 'Vicon', 'Rakor Lintas Sektoral Bidang Operasional Tahun 2023 (Polres)', 'Berjalan', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_monitor_ht`
--

CREATE TABLE `data_monitor_ht` (
  `id_alat_ht` int(11) NOT NULL,
  `nama_alat_ht` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_monitor_ht`
--

INSERT INTO `data_monitor_ht` (`id_alat_ht`, `nama_alat_ht`, `bidang`, `c1`, `status`) VALUES
(1, 'C001', 'KAPOLRES', 'Rusak Ringan', 'Diterima dan Dikembalikan'),
(2, 'C026', 'R. KASIUM', 'Baik', 'Diterima dan Disimpan'),
(3, 'C101', 'AJUDAN KAPOLRES', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(4, 'A078', 'ADC KAPOLRES', 'Baik', 'Diterima dan Disimpan'),
(5, 'MIN 8', 'ADC KAPOLRES', 'Baik', 'Diterima dan Disimpan'),
(6, 'C002', 'WAKAPOLRES', 'Baik', 'Diterima dan Disimpan'),
(7, 'MIN 20 ', 'AJUDAN IBU', 'Baik', 'Diterima dan Disimpan'),
(8, 'MIN 51', 'SOPIR WAKAPOLRES', 'Baik', 'Diterima dan Disimpan'),
(9, 'C001', 'MOBILE', 'Baik', 'Diterima dan Disimpan'),
(10, 'D301', 'MOBILE KAPOLRES', 'Baik', 'Diterima dan Disimpan'),
(11, 'D302', 'MOBIL WAKAPOLRES', 'Rusak Berat', 'Diterima dan Dikembalikan'),
(12, 'C003', 'KABAG. OPS', 'Baik', 'Diterima dan Disimpan'),
(13, 'C005', 'KABAG. SUMDA', 'Baik', 'Diterima dan Disimpan'),
(14, 'C053', 'PAUR KESEHATAN', 'Baik', 'Diterima dan Disimpan'),
(15, 'A074', 'EDY SURYANTO', 'Baik', 'Diterima dan Disimpan'),
(16, 'A097', 'NUR SITI SEMANG', 'Baik', 'Diterima dan Disimpan'),
(17, 'A055', 'KABAG REN', 'Baik', 'Diterima dan Disimpan'),
(18, 'C042', 'MACHMUDIN', 'Baik', 'Diterima dan Disimpan'),
(19, 'MIN 16', 'MATHEOS M', 'Baik', 'Diterima dan Disimpan'),
(20, 'A064', 'ANGGOTA BAG REN', 'Baik', 'Diterima dan Disimpan'),
(21, 'A094', 'KABAG LOG', 'Baik', 'Diterima dan Disimpan'),
(22, 'C006', 'KASAT INTELKAM', 'Baik', 'Diterima dan Disimpan'),
(23, 'C061', 'KBO INTELKAM', 'Baik', 'Diterima dan Disimpan'),
(24, 'C062', 'KANIT 1', 'Baik', 'Diterima dan Disimpan'),
(25, 'C063', 'KANIT 2', 'Baik', 'Diterima dan Disimpan'),
(26, 'C064', 'KANIT 3', 'Baik', 'Diterima dan Disimpan'),
(27, 'C065', 'KANIT 4', 'Baik', 'Diterima dan Disimpan'),
(28, 'C066', 'KANIT 5', 'Baik', 'Diterima dan Disimpan'),
(29, 'C067', 'KANIT 6', 'Baik', 'Diterima dan Disimpan'),
(30, 'C610', 'PIKET INTELKAM', 'Baik', 'Diterima dan Disimpan'),
(31, 'C007', 'KASAT RESKRIM', 'Baik', 'Diterima dan Disimpan'),
(32, 'C071', 'KBO RESKRIM', 'Baik', 'Diterima dan Disimpan'),
(33, 'C072', 'KANIT 1', 'Baik', 'Diterima dan Disimpan'),
(34, 'C073', 'KANIT 2/afdal', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(35, 'C074', 'KANIT 3', 'Baik', 'Diterima dan Disimpan'),
(36, '52/7.7', 'KANIT BUSER', 'Baik', 'Diterima dan Disimpan'),
(37, 'CO76', 'KAUR IDEN', 'Baik', 'Diterima dan Disimpan'),
(38, 'C710', 'PIKET RESKRIM', 'Baik', 'Diterima dan Disimpan'),
(39, 'C711', 'HERRY UMBOH', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(40, 'A084', 'YANTI WONGKAR', 'Baik', 'Diterima dan Disimpan'),
(41, 'A087', 'BILLY MALONTA', 'Baik', 'Diterima dan Disimpan'),
(42, '58/7.7.1', 'SAT RESKRIM', 'Baik', 'Diterima dan Disimpan'),
(43, '72/7.7.2', 'STONY BUSER', 'Baik', 'Diterima dan Disimpan'),
(44, 'A089', 'JULIANA ORAILE', 'Baik', 'Diterima dan Disimpan'),
(45, 'A085', 'KASAT NARKOBA', 'Baik', 'Diterima dan Disimpan'),
(46, 'C081', 'KBO NARKOBA', 'Baik', 'Diterima dan Disimpan'),
(47, 'MIN 53', 'KANIT 1', 'Baik', 'Diterima dan Disimpan'),
(48, 'MIN 54', 'KANIT 2', 'Baik', 'Diterima dan Disimpan'),
(49, 'A098', 'PIKET NARKOBA', 'Baik', 'Diterima dan Disimpan'),
(50, 'C009 ', 'KASAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(51, 'C111', 'MOBILE KUDA', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(52, 'C110', 'MIN LANTAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(53, 'C091', 'LANTAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(54, 'C093', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(55, 'C094', 'KANIT LAKA', 'Baik', 'Diterima dan Disimpan'),
(56, 'MIN 18', 'LANTAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(57, 'MIN 9', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(58, 'MIN 1', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(59, 'MIN 4', 'LANTAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(60, 'MIN 5', 'LANTAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(61, 'MIN 6', 'HILANG / PENGHAPUSAN', 'Baik', 'Diterima dan Disimpan'),
(62, 'MIN 7/8', 'LANTAS KANIT', 'Baik', 'Diterima dan Disimpan'),
(63, 'MIN 10', 'LANTAS BAUR BPKB', 'Baik', 'Diterima dan Disimpan'),
(64, 'MIN 11', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(65, 'MIN 12', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(66, 'MIN 13', 'LANTAS KANIT LAKA', 'Baik', 'Diterima dan Disimpan'),
(67, 'MIN 14', 'KBO LANTAS', 'Baik', 'Diterima dan Disimpan'),
(68, 'MIN 15', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(69, 'MIN 19 ', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(70, 'MIN 20', 'LANTAS', 'Baik', 'Diterima dan Disimpan'),
(71, 'MIN 21', 'MOBIL LANTAS', 'Baik', 'Diterima dan Disimpan'),
(72, 'MIN 33', 'LTS YAFRI  P MALEKE', 'Baik', 'Diterima dan Disimpan'),
(73, 'MIN 34', 'LTS HENCE LONDA', 'Baik', 'Diterima dan Disimpan'),
(74, 'A057', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(75, 'A059', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(76, 'A060', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(77, 'A061', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(78, 'A063', 'SAT LANTAS BPKB', 'Baik', 'Diterima dan Disimpan'),
(79, 'A064', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(80, 'A065', 'SAT LANTAS/SIM', 'Baik', 'Diterima dan Disimpan'),
(81, 'A066', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(82, 'A067', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(83, 'A073', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(84, 'A079', 'SAT LANTAS/ dik', 'Baik', 'Diterima dan Disimpan'),
(85, 'A090', 'SAT LANTAS STNK', 'Baik', 'Diterima dan Disimpan'),
(86, 'A095', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(87, 'D401', 'MOBILE KASAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(88, 'A083', 'SAT LANTAS', 'Baik', 'Diterima dan Disimpan'),
(89, 'A091', 'KASAT BIMAS', 'Baik', 'Diterima dan Disimpan'),
(90, '800C', 'MOBILE KASAT', 'Baik', 'Diterima dan Disimpan'),
(91, '900C ', 'MOBILE PENYULUHAN', 'Baik', 'Diterima dan Disimpan'),
(92, 'A071', 'B ELIAS', 'Baik', 'Diterima dan Disimpan'),
(93, 'A099', 'KASAT BINMAS', 'Baik', 'Diterima dan Disimpan'),
(94, 'C008', 'KASAT SABHARA', 'Baik', 'Diterima dan Disimpan'),
(95, 'C801', 'MOBILE KASAT', 'Baik', 'Diterima dan Disimpan'),
(96, '26CC', 'TRUK DALMAS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(97, '20CC', 'WATER CANON', 'Baik', 'Diterima dan Disimpan'),
(98, 'C081', 'KBO SHABARA', 'Baik', 'Diterima dan Disimpan'),
(99, 'C083', 'DANRU C', 'Baik', 'Diterima dan Disimpan'),
(100, 'C084', 'KANIT DALMAS 2', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(101, 'C085', 'KANIT RAYON 1', 'Baik', 'Diterima dan Disimpan'),
(102, 'C086', 'KANIT RAYON 2', 'Baik', 'Diterima dan Disimpan'),
(103, 'C087', 'KANIT RAYON 3', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(104, 'MIN 2', 'BANK BRI', 'Baik', 'Diterima dan Disimpan'),
(105, 'MIN 43', 'PIKET 810', 'Baik', 'Diterima dan Disimpan'),
(106, 'MIN 42', 'DANRU', 'Baik', 'Diterima dan Disimpan'),
(107, 'C010', 'KASAT TAHTI', 'Baik', 'Diterima dan Disimpan'),
(108, 'C031', 'PIKET TAHANAN', 'Baik', 'Diterima dan Disimpan'),
(109, 'C024', 'KASI PROPAM', 'Baik', 'Diterima dan Disimpan'),
(110, '2410', 'PIKET PROPAM', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(111, 'A345', 'HANNY SOUTH', 'Baik', 'Diterima dan Disimpan'),
(112, 'A056', 'YONATAN', 'Baik', 'Diterima dan Disimpan'),
(113, 'A085', 'SURYADI - 2004', 'Baik', 'Diterima dan Disimpan'),
(114, 'A098', 'JACK MEA', 'Baik', 'Diterima dan Disimpan'),
(115, 'MIN 17', 'KASI KEU', 'Baik', 'Diterima dan Disimpan'),
(116, 'C252', 'KASUBSI AKUN', 'Baik', 'Diterima dan Disimpan'),
(117, 'C025', 'KASI WAS', 'Baik', 'Diterima dan Disimpan'),
(118, 'C026', 'KASI HUMAS', 'Baik', 'Diterima dan Disimpan'),
(119, 'A100', 'KASI HUKUM', 'Baik', 'Diterima dan Disimpan'),
(120, 'MIN 67', 'KA SPKT', 'Baik', 'Diterima dan Disimpan'),
(121, 'MIN 87', 'BASE STATION', 'Baik', 'Diterima dan Disimpan'),
(122, 'MIN 88', 'BASE STATION SPKT', 'Baik', 'Diterima dan Disimpan'),
(123, ' MIN 45', 'KANIT 1', 'Baik', 'Diterima dan Disimpan'),
(124, 'MIN 46', 'KANIT 2', 'Baik', 'Diterima dan Disimpan'),
(125, 'MIN 47', 'KANIT 3', 'Baik', 'Diterima dan Disimpan'),
(126, 'A080', 'AJU BUPATI', 'Baik', 'Diterima dan Disimpan'),
(127, 'A092', 'AJU. WA.BUPATI1', 'Baik', 'Diterima dan Disimpan'),
(128, 'A070', 'AJU. WA.BUPATI 2', 'Baik', 'Diterima dan Disimpan'),
(129, 'C022', 'KASI TIPOL', 'Baik', 'Diterima dan Disimpan'),
(130, 'C222', 'TONI MARAMIS', 'Baik', 'Diterima dan Disimpan'),
(131, 'A083', 'ANGGOTA TIK', 'Baik', 'Diterima dan Disimpan'),
(132, 'TRC493', 'LEMARI', 'Baik', 'Diterima dan Disimpan'),
(133, 'C232', 'MOBILE', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(134, 'TRC494', 'LEMARI', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(135, 'TRC495', 'LEMARI', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(136, 'A069', 'KAPOLSEK TONDANO', 'Baik', 'Diterima dan Disimpan'),
(137, 'C251', 'PIKET NARKOBA', 'Baik', 'Diterima dan Disimpan'),
(138, 'A062', 'KAPOLSEK TONDANO', 'Baik', 'Diterima dan Disimpan'),
(139, 'MIN 23', 'TONI KODU', 'Baik', 'Diterima dan Disimpan'),
(140, 'MIN 37', 'POLSEK TONDANO', 'Baik', 'Diterima dan Disimpan'),
(141, 'MIN 38', 'POLSEK TONDANO', 'Baik', 'Diterima dan Disimpan'),
(142, 'MIN 39', 'POSEK TONDANO', 'Baik', 'Diterima dan Disimpan'),
(143, 'MIN 60 ', 'BASE STATION POLSEK', 'Baik', 'Diterima dan Disimpan'),
(144, 'A075', 'DENNY KOSAKOY', 'Baik', 'Diterima dan Disimpan'),
(145, 'A077', 'STEVEN RUMATE', 'Baik', 'Diterima dan Disimpan'),
(146, 'A096', 'J MANTIRI', 'Baik', 'Diterima dan Disimpan'),
(147, 'A093', 'KA. REMBOKEN', 'Baik', 'Diterima dan Disimpan'),
(148, 'MIN 48', 'POLSEK TOULIMAMBOT', 'Baik', 'Diterima dan Disimpan'),
(149, 'MIN 49', 'POLSEK TOULIMAMBOT', 'Baik', 'Diterima dan Disimpan'),
(150, 'MIN 50', 'POLSEK TOULIMAMBOT', 'Baik', 'Diterima dan Disimpan'),
(151, '2009', 'BASE STATION TLMBT', 'Baik', 'Diterima dan Disimpan'),
(152, 'MIN 40', 'KANIT RES', 'Baik', 'Diterima dan Disimpan'),
(153, 'MIN 41', 'POLSEK REMBOKEN', 'Baik', 'Diterima dan Disimpan'),
(154, '2013', 'BASE STATION REMBOKEN', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(155, 'KC4023', 'POLSEK REMBOKEN', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(156, 'A345', 'KA. ERIS', 'Baik', 'Diterima dan Disimpan'),
(157, 'MIN 34', 'POLSEK ERIS', 'Baik', 'Diterima dan Disimpan'),
(158, 'MIN 35', 'POLSEK ERIS', 'Baik', 'Diterima dan Disimpan'),
(159, 'MIN 36', 'POLSEK ERIS', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(160, 'MIN 20', 'KA. KOMBI', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(161, 'MIN 21', 'POLSEK KOMBI', 'Baik', 'Diterima dan Disimpan'),
(162, 'MIN 22', 'POLSEK KOMBI', 'Baik', 'Diterima dan Disimpan'),
(163, 'MIN 23', 'BASE STATION KOMBI', 'Baik', 'Diterima dan Disimpan'),
(164, 'KC4023', 'POLSEK KOMBI', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(165, 'MIN 43', 'KA. LENTIM', 'Baik', 'Diterima dan Disimpan'),
(166, 'MIN 44', 'POLSEK LEMTIM', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(167, 'MIN 45', 'POLSEK LEMTIM', 'Baik', 'Diterima dan Disimpan'),
(168, 'MIN 46', 'POLSEK LEMTIM', 'Baik', 'Diterima dan Disimpan'),
(169, 'MIN 47', 'BASE STATION LEMTIM', 'Baik', 'Diterima dan Disimpan'),
(170, 'MIN 23', 'KA. KAKAS', 'Baik', 'Diterima dan Disimpan'),
(171, 'MIN 24', 'WAKA POLSEK KAKAS', 'Baik', 'Diterima dan Disimpan'),
(172, 'MIN 25', 'POLSEK KAKAS', 'Baik', 'Diterima dan Disimpan'),
(173, '200C ', 'MOBILE KAKAS', 'Baik', 'Diterima dan Disimpan'),
(174, '201C', 'BASE STATION KAKAS', 'Baik', 'Diterima dan Disimpan'),
(175, 'MIN 22', 'KA. LANGOWAN', 'Baik', 'Diterima dan Disimpan'),
(176, 'MIN 26', 'POLSEK LANGOWAN', 'Baik', 'Diterima dan Disimpan'),
(177, 'MIN 27', 'POLSEK LANGOWAN', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(178, '2005', 'MOBILE SEK LANGOWAN', 'Baik', 'Diterima dan Disimpan'),
(179, '2002', 'BASE STATION LANGOWAN', 'Baik', 'Diterima dan Disimpan'),
(180, '2003', 'POLSEK LANGOWAN', 'Rusak Ringan', 'Diterima dan Diperbaiki'),
(181, 'MIN 30', 'LANGOWAN BARAT', 'Baik', 'Diterima dan Disimpan'),
(182, 'MIN 28', 'POLSEK LABAR', 'Baik', 'Diterima dan Disimpan'),
(183, 'MIN 29', 'POLSEK LABAR', 'Baik', 'Diterima dan Disimpan'),
(184, '3001', 'BASE STATION LABAR', 'Baik', 'Diterima dan Disimpan'),
(185, 'MIN 31', 'KA. TOMPASO', 'Baik', 'Diterima dan Disimpan'),
(186, 'MIN 32', 'POLSEK TPS', 'Baik', 'Diterima dan Disimpan'),
(187, 'MIN 47', 'POLSEK TPS', 'Baik', 'Diterima dan Disimpan'),
(188, '2014', 'BASE STATION TPS', 'Baik', 'Diterima dan Disimpan'),
(189, 'MIN 68', 'POLSEK TPS', 'Baik', 'Diterima dan Disimpan'),
(190, 'MIN 40', 'KA. KAWANGKOAN', 'Baik', 'Diterima dan Disimpan'),
(191, 'MIN 30', 'POLSEK KAWANGKOAN', 'Baik', 'Diterima dan Disimpan'),
(192, 'MIN 31', 'POLSEK KAWANGKOAN ', 'Baik', 'Diterima dan Disimpan'),
(193, '1096', 'MOBILE KAWANGKOAN', 'Baik', 'Diterima dan Disimpan'),
(194, '2015', 'BASE STATION KAWANGKOAN', 'Baik', 'Diterima dan Disimpan');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengawasan`
--

CREATE TABLE `data_pengawasan` (
  `id_pengawasan` int(11) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL,
  `evaluasi_kinerja` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengawasan`
--

INSERT INTO `data_pengawasan` (`id_pengawasan`, `nama_bidang`, `evaluasi_kinerja`, `keterangan`) VALUES
(3, 'BAG OPS', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(7, 'BAG REN', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(8, 'BAG SDM', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(9, 'BAG LOG', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(10, 'SEKSI PENGAWASAN', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(11, 'SEKSI TIK ', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(12, 'SEKSI PROPAM', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(13, 'SEKSI HUKUM ', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(14, 'SEKSI UMUM', 'Terkendala', 'Pada Saat Rapat ANEV, Laporan Kinerja Yang Dilaporkan Kurang Lengkap'),
(15, 'SPKT ', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(16, 'SAT INTELKAM ', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(17, 'SAT RESKRIM', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(18, 'SATRES NARKOBA', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(19, 'SAT BINMAS', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(20, 'SAT SAMAPTA', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(21, 'SAT LANTAS', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(22, 'SAT TAHTI', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(23, 'POLSEK TONDANO', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(24, 'POLSEK ERIS ', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(25, 'POLSEK KOMBI', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(26, 'POLSEK KAKAS', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(27, 'POLSEK LANGOWAN', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(28, 'POLSEK KAWANGKOAN', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(29, 'POLSEK REMBOKEN', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(30, 'POLSEK TOULIMAMBOT', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(31, 'POLSEK LEMBEAN TIMUR', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(32, 'POLSEK TOMPASO', 'Tidak Ada Kendala', 'Tidak Ada Masalah'),
(33, 'POLSEK LANGOWAN BARAT', 'Tidak Ada Kendala', 'Tidak Ada Masalah');

-- --------------------------------------------------------

--
-- Table structure for table `data_propam_kecelakaan`
--

CREATE TABLE `data_propam_kecelakaan` (
  `id_propam_kecelakaan` int(11) NOT NULL,
  `nama_anggota` text NOT NULL,
  `penyelidikan` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_propam_kecelakaan`
--

INSERT INTO `data_propam_kecelakaan` (`id_propam_kecelakaan`, `nama_anggota`, `penyelidikan`, `lokasi`, `keterangan`) VALUES
(1, 'Rombongan WKI GMIM Kanaan Winnet Bitung', 'Berjalan Baik', 'Jalan Raya Sonder', 'Kecelakaan Berat'),
(2, 'Mobil Xenia Yang Ditumpangi Sekelompok Anak Mudah', 'Berjalan Baik', 'Kakas, Minahasa', 'Kecelakaan Berat'),
(4, 'Penyebab Akibat Jalan Yang Putus', 'Berjalan Baik', 'Kamanga, Tompaso', 'Kecelakaan Berat');

-- --------------------------------------------------------

--
-- Table structure for table `data_propam_kehilangan`
--

CREATE TABLE `data_propam_kehilangan` (
  `id_propam_kehilangan` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_propam_kehilangan`
--

INSERT INTO `data_propam_kehilangan` (`id_propam_kehilangan`, `nama_barang`, `kondisi`, `bidang`, `jumlah_barang`, `keterangan`) VALUES
(1, 'Komputer', 'Rusak Ringan', 'Seksi TIK', 1, 'Perbaikan'),
(2, 'Catatan Investigasi', 'Hilang', 'SAT Lantas', 1, 'Tidak Ada'),
(3, 'Senjata', 'Rusak Berat', 'SAT Reskrim', 1, 'Tidak Perbaikan'),
(5, 'Kendaraan (Motor)', 'Rusak Ringan', 'SAT Lantas', 1, 'Perbaikan'),
(6, 'Alat HT', 'Rusak Ringan', 'Mobil Wakapolres', 1, 'Perbaikan'),
(7, 'Alat HT', 'Rusak Ringan', 'Kanit 2/afdal', 1, 'Perbaikan'),
(8, 'Alat HT', 'Rusak Ringan', 'SAT Binmas', 1, 'Perbaikan'),
(9, 'Alat HT', 'Rusak Ringan', 'Mobil Kuda', 1, 'Perbaikan'),
(10, 'Alat HT', 'Rusak Ringan', 'MIN Lantas', 1, 'Perbaikan'),
(11, 'Alat HT', 'Rusak Ringan', 'Lantas', 1, 'Perbaikan'),
(12, 'Alat HT', 'Rusak Ringan', 'Truk Dalmas', 1, 'Perbaikan'),
(13, 'Alat HT', 'Rusak Ringan', 'Kanit Dalmas 2', 1, 'Perbaikan'),
(14, 'Alat HT', 'Rusak Ringan', 'Kanit Rayon 3', 1, 'Perbaikan'),
(15, 'Alat HT', 'Rusak Ringan', 'Piket Propam', 1, 'Perbaikan'),
(16, 'Alat HT', 'Rusak Ringan', 'Base Station Remboken', 1, 'Perbaikan'),
(17, 'Alat HT', 'Rusak Ringan', 'Polsek Remboken', 1, 'Perbaikan'),
(18, 'Alat HT', 'Rusak Ringan', 'Polsek Eris', 1, 'Perbaikan'),
(19, 'Alat HT', 'Rusak Ringan', 'KA. Kombi', 1, 'Perbaikan'),
(20, 'Alat HT', 'Rusak Ringan', 'Polsek Kombi', 1, 'Perbaikan'),
(21, 'Alat HT', 'Rusak Ringan', 'Polsek Lemtim', 1, 'Perbaikan'),
(22, 'Alat HT', 'Rusak Ringan', 'Polsek Langowan ', 2, 'Perbaikan');

-- --------------------------------------------------------

--
-- Table structure for table `data_training`
--

CREATE TABLE `data_training` (
  `id_training` int(11) NOT NULL,
  `monitoring` varchar(100) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_training`
--

INSERT INTO `data_training` (`id_training`, `monitoring`, `c1`, `keterangan`) VALUES
(1, 'Alat HT', 'Rusak Berat', 'Tidak Aktif'),
(2, 'Alat HT', 'Rusak Ringan', 'Aktif'),
(3, 'Alat HT', 'Baik', 'Aktif'),
(5, 'Vicon', 'Tidak Berjalan', 'Tidak Terlaksana'),
(6, 'Vicon', 'Berjalan', 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_training_kasus_hukum`
--

CREATE TABLE `data_training_kasus_hukum` (
  `id_training_kasus_hukum` int(11) NOT NULL,
  `c1` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_training_kasus_hukum`
--

INSERT INTO `data_training_kasus_hukum` (`id_training_kasus_hukum`, `c1`, `keterangan`) VALUES
(1, 'Ditangani', 'Terlaksana'),
(2, 'Tidak Ditangani', 'Tidak Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_training_pengawasan`
--

CREATE TABLE `data_training_pengawasan` (
  `id_training_pegawasan` int(11) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_training_pengawasan`
--

INSERT INTO `data_training_pengawasan` (`id_training_pegawasan`, `c1`, `keterangan`) VALUES
(1, 'Tidak Ada Kendala', 'Baik'),
(2, 'Terkendala', 'Tidak Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_training_propam`
--

CREATE TABLE `data_training_propam` (
  `id_training_propam` int(11) NOT NULL,
  `laporan` text NOT NULL,
  `c1` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_training_propam`
--

INSERT INTO `data_training_propam` (`id_training_propam`, `laporan`, `c1`, `keterangan`) VALUES
(1, 'Kehilangan', 'Rusak Ringan', 'Perbaikan'),
(2, 'Kehilangan', 'Hilang', 'Tidak Ada'),
(3, 'Kehilangan', 'Rusak Berat', 'Tidak Perbaikan'),
(4, 'Kecelakaan', 'Berjalan Baik', 'Terlaksana'),
(5, 'Kecelakaan', 'Tidak Berjalan Baik', 'Tidak Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `data_training_umum`
--

CREATE TABLE `data_training_umum` (
  `id_training_umum` int(11) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_training_umum`
--

INSERT INTO `data_training_umum` (`id_training_umum`, `c1`, `keterangan`) VALUES
(1, 'Baik', 'Aktif'),
(2, 'Rusak Ringan', 'Aktif'),
(3, 'Rusak Berat', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_umum`
--

CREATE TABLE `data_umum` (
  `id_umum` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_umum`
--

INSERT INTO `data_umum` (`id_umum`, `nama_barang`, `kondisi`, `jumlah_barang`, `status`) VALUES
(1, 'Kendaraan (Motor)', 'Baik', 1, 'Diterima dan Disimpan'),
(2, 'Peralatan (Komputer)', 'Baik', 2, 'Diterima dan Disimpan'),
(3, 'Peralatan (Alat HT)', 'Baik', 8, 'Diterima dan Disimpan'),
(5, 'Peralatan (Alat HT)', 'Rusak Ringan', 2, 'Diterima dan Diperbaiki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehadiran`
--

CREATE TABLE `tbl_kehadiran` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `hadir` varchar(20) DEFAULT NULL,
  `tidak hadir` varchar(20) DEFAULT NULL,
  `izin` varchar(20) DEFAULT NULL,
  `sakit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id`, `nama`, `hadir`, `tidak hadir`, `izin`, `sakit`) VALUES
(1, 'robby wongkar', '6', '3', '1', '2'),
(2, 'ridel senior', '6', '2', '3', '1'),
(3, 'ridel junior', '6', '2', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `training_kehadiran`
--

CREATE TABLE `training_kehadiran` (
  `id_training_kehadiran` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `tidak_hadir` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_kehadiran`
--

INSERT INTO `training_kehadiran` (`id_training_kehadiran`, `hadir`, `tidak_hadir`, `izin`, `sakit`, `keterangan`) VALUES
(1, 20, 2, 1, 0, 'Baik'),
(2, 18, 2, 2, 1, 'Kurang Baik'),
(3, 17, 3, 3, 0, 'Tidak Baik'),
(4, 16, 4, 2, 1, 'Kurang Baik'),
(5, 15, 5, 2, 1, 'Tidak Baik'),
(6, 20, 1, 2, 0, 'Baik'),
(7, 15, 2, 3, 1, 'Kurang Baik'),
(8, 10, 10, 2, 1, 'Tidak Baik'),
(9, 15, 4, 1, 3, 'Kurang Baik'),
(10, 20, 2, 1, 0, 'Baik'),
(11, 18, 2, 2, 1, 'Kurang Baik'),
(12, 17, 3, 3, 0, 'Tidak Baik'),
(13, 16, 4, 2, 1, 'Kurang Baik'),
(14, 15, 5, 2, 1, 'Tidak Baik'),
(15, 20, 1, 2, 0, 'Baik'),
(16, 15, 2, 3, 1, 'Kurang Baik'),
(17, 10, 10, 2, 1, 'Tidak Baik'),
(18, 15, 4, 1, 3, 'Kurang Baik'),
(19, 19, 0, 0, 4, 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_kasus_hukum`
--
ALTER TABLE `data_kasus_hukum`
  ADD PRIMARY KEY (`id_kasus_hukum`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `data_monitoring`
--
ALTER TABLE `data_monitoring`
  ADD PRIMARY KEY (`id_monitoring`);

--
-- Indexes for table `data_monitor_ht`
--
ALTER TABLE `data_monitor_ht`
  ADD PRIMARY KEY (`id_alat_ht`);

--
-- Indexes for table `data_pengawasan`
--
ALTER TABLE `data_pengawasan`
  ADD PRIMARY KEY (`id_pengawasan`);

--
-- Indexes for table `data_propam_kecelakaan`
--
ALTER TABLE `data_propam_kecelakaan`
  ADD PRIMARY KEY (`id_propam_kecelakaan`);

--
-- Indexes for table `data_propam_kehilangan`
--
ALTER TABLE `data_propam_kehilangan`
  ADD PRIMARY KEY (`id_propam_kehilangan`);

--
-- Indexes for table `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `data_training_kasus_hukum`
--
ALTER TABLE `data_training_kasus_hukum`
  ADD PRIMARY KEY (`id_training_kasus_hukum`);

--
-- Indexes for table `data_training_pengawasan`
--
ALTER TABLE `data_training_pengawasan`
  ADD PRIMARY KEY (`id_training_pegawasan`);

--
-- Indexes for table `data_training_propam`
--
ALTER TABLE `data_training_propam`
  ADD PRIMARY KEY (`id_training_propam`);

--
-- Indexes for table `data_training_umum`
--
ALTER TABLE `data_training_umum`
  ADD PRIMARY KEY (`id_training_umum`);

--
-- Indexes for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indexes for table `training_kehadiran`
--
ALTER TABLE `training_kehadiran`
  ADD PRIMARY KEY (`id_training_kehadiran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_kasus_hukum`
--
ALTER TABLE `data_kasus_hukum`
  MODIFY `id_kasus_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_monitoring`
--
ALTER TABLE `data_monitoring`
  MODIFY `id_monitoring` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `data_monitor_ht`
--
ALTER TABLE `data_monitor_ht`
  MODIFY `id_alat_ht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `data_pengawasan`
--
ALTER TABLE `data_pengawasan`
  MODIFY `id_pengawasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `data_propam_kecelakaan`
--
ALTER TABLE `data_propam_kecelakaan`
  MODIFY `id_propam_kecelakaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_propam_kehilangan`
--
ALTER TABLE `data_propam_kehilangan`
  MODIFY `id_propam_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_training_kasus_hukum`
--
ALTER TABLE `data_training_kasus_hukum`
  MODIFY `id_training_kasus_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_training_pengawasan`
--
ALTER TABLE `data_training_pengawasan`
  MODIFY `id_training_pegawasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_training_propam`
--
ALTER TABLE `data_training_propam`
  MODIFY `id_training_propam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_training_umum`
--
ALTER TABLE `data_training_umum`
  MODIFY `id_training_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_umum`
--
ALTER TABLE `data_umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_kehadiran`
--
ALTER TABLE `training_kehadiran`
  MODIFY `id_training_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
