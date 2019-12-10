-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 06.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paten`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `arsip_id` bigint(20) UNSIGNED DEFAULT NULL,
  `asalsurat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglterima` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perihal` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tindaklanjut` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglselesai` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglarsip` date DEFAULT NULL,
  `ket` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `tempat` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllhr` date NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotopbb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketproses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hasil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispensasi`
--

CREATE TABLE `dispensasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kua` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `tempat` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllhr` date NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wn` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerja` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `namacln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nikcln` bigint(20) DEFAULT NULL,
  `tempatcln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllhrcln` date NOT NULL,
  `jkcln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wncln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjacln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agamacln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuscln` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binti` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatcln` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahancln` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontakcln` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuakad` date NOT NULL,
  `tempatakad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotokua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotopbb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoclnsu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoclnis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketproses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijins`
--

CREATE TABLE `ijins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ijins`
--

INSERT INTO `ijins` (`id`, `nama`, `controller`, `created_at`, `updated_at`) VALUES
(1, 'IUMK', 'iumk', '2019-12-10 05:34:02', '2019-12-10 05:34:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iumk`
--

CREATE TABLE `iumk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `naper` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatusaha` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusbangunan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatusaha` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotosku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotopbb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotodiri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketproses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapors`
--

CREATE TABLE `lapors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` text COLLATE utf8mb4_unicode_ci,
  `aparat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lapors`
--

INSERT INTO `lapors` (`id`, `name`, `alamat`, `kontak`, `pesan`, `tindakan`, `aparat`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Masyarakat', 'jalan Apel Kelurahan Huangobotu', '08123456789', 'pengurusan surat Lama', 'Cek dan Beri penjelasan printer rusak', 'Sekcam', 'Selesai', '2019-12-10 05:34:02', '2019-12-10 05:34:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `layanan`, `kategori`, `biaya`, `waktu`, `syarat`, `ket`) VALUES
(1, 'IUMK', 'Perijinan', 'Gratis', '30 Menit Setelah Berkas Lengkap', 'KTP,\r\n                         SKU kelurahan,\r\n                         Pas Photo 4X6 Warna,\r\n                         Mengisi Formulir,\r\n                         Bukti Pelunasan PBB.    ', ''),
(2, 'Dispensasi Nikah', 'Non Perijinan', 'Gratis', '20 Menit Setelah Berkas Lengkap', 'Permohonan KUA\r\n                         Bukti Pelunasan PBB    ', ''),
(3, 'Surat Keterangan', 'Non Perijinan', 'Gratis', '15 Menit Setelah Berkas Lengkap', 'KTP\r\n                         Bukti Pelunasan PBB    ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_25_074736_create_ijins_table', 1),
(5, '2019_10_25_080608_create_nonijins_table', 1),
(6, '2019_10_25_082654_create_permission_tables', 1),
(7, '2019_10_27_015618_create_lapors_table', 1),
(8, '2019_11_08_085411_create_services_table', 1),
(9, '2019_11_10_053854_create_proses_surat_table', 1),
(10, '2019_11_10_223511_create_iumk_table', 1),
(11, '2019_11_15_220206_create_layanan_table', 1),
(12, '2019_11_16_070032_create_pejabat_table', 1),
(13, '2019_11_16_210400_create_suket_table', 1),
(14, '2019_11_19_125545_add_ketjabatan_on_pejabat_table', 1),
(15, '2019_11_23_161915_create_dispensasi_table', 1),
(16, '2019_11_25_194517_create_daftar_table', 1),
(17, '2019_11_26_090337_create_suratmasuk_table', 1),
(18, '2019_11_26_201439_create_arsip_table', 1),
(19, '2019_11_28_054814_create_suratkeluar_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nonijins`
--

CREATE TABLE `nonijins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nonijins`
--

INSERT INTO `nonijins` (`id`, `nama`, `controller`, `created_at`, `updated_at`) VALUES
(1, 'Dispensasi Nikah', 'nikah', '2019-12-10 05:34:02', '2019-12-10 05:34:02'),
(2, 'Surat Keterangan', 'suket', '2019-12-10 05:34:02', '2019-12-10 05:34:02'),
(3, 'Domisili Perusahaan', 'domisili', '2019-12-10 05:34:02', '2019-12-10 05:34:02'),
(4, 'Surat Keterangan Tidak Mampu', 'sktm', '2019-12-10 05:34:02', '2019-12-10 05:34:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketjabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id`, `nama`, `jabatan`, `ketjabatan`, `nip`, `created_at`, `updated_at`) VALUES
(1, 'Sriyanti Ano, SP, M.Si', 'Camat Dungingi', NULL, '19690908 199203 2 011', '2019-12-10 05:34:02', '2019-12-10 05:34:02'),
(2, 'Ramli A. Taliki, SSTP', 'a.n. Camat Dungingi', 'Sekretaris Kecamatan', '19840813 200312 1 002', '2019-12-10 05:34:02', '2019-12-10 05:34:02'),
(3, 'Hj. Harni Mahmud, S.AP', 'a.n. Camat Dungingi', 'Kepala Seksi Pemerintahan', '19671121 200701 2 013', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(4, 'Agumiaty Sulila, SP, M.Si', 'a.n. Camat Dungingi', 'Kepala Seksi PMK', '19670805 200003 2 004', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(5, 'Syamsudin Abdullah, S.IP', 'a.n. Camat Dungingi', 'Kepala Seksi Ekbang', '19760213 200103 1 001', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(6, 'Jasdy Biga, SE', 'a.n. Camat Dungingi', 'Kepala Seksi Trantibum', '19660526 201001 1 001', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(7, 'Jeaneth M. Djafar, SE', 'a.n. Camat Dungingi', 'Kasubag KUK', '19770106 200604 2 015', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(8, 'Marlin Bobihu, SE', 'a.n. Camat Dungingi', 'Kasubag Program', '19750107 199402 2 001', '2019-12-10 05:34:03', '2019-12-10 05:34:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'delete', 'web', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(2, 'edit', 'web', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(3, 'create', 'web', '2019-12-10 05:34:03', '2019-12-10 05:34:03'),
(4, 'show', 'web', '2019-12-10 05:34:04', '2019-12-10 05:34:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_surat`
--

CREATE TABLE `proses_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proses_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglajuan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finish_at` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-12-10 05:33:58', '2019-12-10 05:33:58'),
(2, 'adminkec', 'web', '2019-12-10 05:33:58', '2019-12-10 05:33:58'),
(3, 'paten', 'web', '2019-12-10 05:33:58', '2019-12-10 05:33:58'),
(4, 'umum', 'web', '2019-12-10 05:33:58', '2019-12-10 05:33:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `ttl` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naper` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bentuk` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giatusaha` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatusaha` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modal` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusnikah` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bin` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `istri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttlistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jkistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negaraistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerjaistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binti` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agamaistri` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keperluan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusbangunan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fungsibangunan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahkaryawan` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggungjawab` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci,
  `nokua` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotosku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotopbb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotodiri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suket`
--

CREATE TABLE `suket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `tempat` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllhr` date NOT NULL,
  `jk` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotopbb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketproses` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hasil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglsurat` date NOT NULL,
  `perihal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isisingkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuansurat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengirim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotosurat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglkirim` date DEFAULT NULL,
  `petugas` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `penerima` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nosurat` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglsurat` date NOT NULL,
  `perihal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `asalsurat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglterima` date NOT NULL,
  `fotosurat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposisicamat` text COLLATE utf8mb4_unicode_ci,
  `disposisisek` text COLLATE utf8mb4_unicode_ci,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tindaklanjut` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `roles_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@paten.com', 1, '2019-12-10 05:33:59', '$2y$10$ES/yJMNm1031hzuAyYJSyuxzlfXd8j.7QfloIO5YgMOWHcCAV.lFK', NULL, '2019-12-10 05:33:59', '2019-12-10 05:33:59'),
(2, 'Admin Paten', 'paten@paten.com', 2, '2019-12-10 05:34:01', '$2y$10$DAxQ4H0S6cp5lCC.H9Y.9.PLP7xT9Sqo/ie0snmPLg1dRu11i1iXG', NULL, '2019-12-10 05:34:01', '2019-12-10 05:34:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dispensasi`
--
ALTER TABLE `dispensasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ijins`
--
ALTER TABLE `ijins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iumk`
--
ALTER TABLE `iumk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lapors`
--
ALTER TABLE `lapors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `nonijins`
--
ALTER TABLE `nonijins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proses_surat`
--
ALTER TABLE `proses_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suket`
--
ALTER TABLE `suket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dispensasi`
--
ALTER TABLE `dispensasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ijins`
--
ALTER TABLE `ijins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `iumk`
--
ALTER TABLE `iumk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lapors`
--
ALTER TABLE `lapors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `nonijins`
--
ALTER TABLE `nonijins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `proses_surat`
--
ALTER TABLE `proses_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suket`
--
ALTER TABLE `suket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
