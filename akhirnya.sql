-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Mar 2024 pada 13.57
-- Versi server: 5.7.33
-- Versi PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akhirnya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `foto`, `created_at`, `updated_at`) VALUES
('99419863-4c57-4abd-9727-60233f8f53db', 'Admin Konveksi', 'admin', '$2y$10$0qaTj2S3n3FWsceoLTEioOnPuo6L/G.nvOZ0jhVOcMk5bDSTsHCrK', 'app/data-admin/1685070085-nhmFx.png', '2023-05-26 17:06:33', '2023-05-26 17:06:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan_komentar`
--

CREATE TABLE `balasan_komentar` (
  `id` char(36) NOT NULL,
  `id_blog` char(36) NOT NULL,
  `id_komentar` char(36) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `send` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `balasan_komentar`
--

INSERT INTO `balasan_komentar` (`id`, `id_blog`, `id_komentar`, `nama_pengirim`, `text`, `send`, `created_at`, `updated_at`) VALUES
('99568807-409f-4496-a263-6d44d07120fd', '994a00e0-f6dd-4a5e-9250-19da143a43c5', '994ca375-5fb8-40dc-b3d4-fa1c64980e53', 'Admin Konveksi', '<p>Terima kasih atas saran dan masukannya</p>', 2, '2023-06-05 13:02:22', '2023-06-05 13:02:22'),
('99569177-6c90-46f6-a452-1c17969e1ac4', '994a00e0-f6dd-4a5e-9250-19da143a43c5', '99569077-6077-42de-8c8c-2ddaf33e0617', 'Admin Konveksi', '<p>Terimaksih</p>', 2, '2023-06-05 06:14:27', '2023-06-05 06:14:27'),
('9959b5f8-ef2d-43cd-8950-654f32362911', '994a00e0-f6dd-4a5e-9250-19da143a43c5', '9959b5bb-a7f8-4ba7-93ee-c31935f5b116', 'Admin Konveksi', '<p>iyaa</p>', 2, '2023-06-06 19:44:01', '2023-06-06 19:44:01'),
('9b8d50a3-7a77-49d8-918b-1f13e943e47e', '994a00e0-f6dd-4a5e-9250-19da143a43c5', '9b7d835d-4247-4d3c-9902-149489011e05', 'Admin Konveksi', '<p>xscea</p>', 2, '2024-03-12 23:47:35', '2024-03-12 23:47:35'),
('9b8d50ae-db2e-4fd3-b74f-b27f1e73cae0', '994a00e0-f6dd-4a5e-9250-19da143a43c5', '9b7d835d-4247-4d3c-9902-149489011e05', 'Admin Konveksi', '<p>cdcsd</p>', 2, '2024-03-12 23:47:43', '2024-03-12 23:47:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `nama_penulis`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
('994a00e0-f6dd-4a5e-9250-19da143a43c5', 'Ifan Rifaldi', 'Konveksi Pontianak', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'app/berita/1685431213-DLayJ.jpg', '2023-05-30 00:20:13', '2023-05-30 00:20:13'),
('994a3042-edfc-4c35-96c4-3c809f00c25c', 'Ifan', 'coba coba', '<p><u>gdutwudtjGS</u></p>', 'app/berita/1685587284-NRkVT.jpg', '2023-06-01 02:41:25', '2023-05-31 19:41:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` char(36) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `nama_penulis`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
('994a00e0-f6dd-4a5e-9250-19da143a43c5', 'Ifan Rifaldi', 'Konveksi Pontianak', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'app/berita/1685431213-DLayJ.jpg', '2023-05-30 00:20:13', '2023-05-30 00:20:13'),
('994a3042-edfc-4c35-96c4-3c809f00c25c', 'Ifan', 'coba coba', '<p><u>gdutwudtjGS</u></p>', 'app/berita/1685936972-Geo6U.jpg', '2023-06-05 03:49:32', '2023-06-04 20:49:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama`, `asal`, `keperluan`, `foto`, `created_at`, `updated_at`) VALUES
('9b7929d1-2315-4089-97c3-919d710e1771', 'ifan', 'psg', 'oke', NULL, '2024-03-02 23:22:29', '2024-03-02 23:22:29'),
('9b792a85-1253-4f7f-b192-987adc3c435c', 'ifan', 'psg', 'ewgw', NULL, '2024-03-02 23:24:27', '2024-03-02 23:24:27'),
('9b792a86-7d8c-40a9-84d6-a990c0b33f7c', 'ifan', 'psg', 'ewgw', NULL, '2024-03-02 23:24:28', '2024-03-02 23:24:28'),
('9b792aa8-dc4f-42d3-be26-0b5c3bc85c70', 'ifan', 'we', 'oke', NULL, '2024-03-02 23:24:50', '2024-03-02 23:24:50'),
('9b792ad1-c612-4a25-b6f1-e4e96d03c97f', 'ifab', 'psg', 'f', NULL, '2024-03-02 23:25:17', '2024-03-02 23:25:17'),
('9b792ad3-6ff6-40aa-8e04-720834f99244', 'ifab', 'psg', 'f', NULL, '2024-03-02 23:25:18', '2024-03-02 23:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` char(36) NOT NULL,
  `label` varchar(255) NOT NULL,
  `pemesan` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `label`, `pemesan`, `bahan`, `jumlah`, `foto`, `created_at`, `updated_at`) VALUES
('99516fe2-cf97-4382-8366-f215f3df140a', 'Kemeja PDL', 'PT. BGA', 'American Drill', 40, 'app/galeri/1685750485-ZWIhT.jpg', '2023-06-02 17:01:25', '2023-06-02 17:01:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_galeri`
--

CREATE TABLE `galeri_galeri` (
  `id` char(36) NOT NULL,
  `id_galeri` char(36) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_galeri`
--

INSERT INTO `galeri_galeri` (`id`, `id_galeri`, `foto`, `created_at`, `updated_at`) VALUES
('9950c769-a611-4e04-bc1e-ca7398e97d44', '9949b703-8d45-469e-8a73-27b4603413bc', 'app/galeri-galeri/1685722220-02QKM.jpg', '2023-06-02 09:10:20', '2023-06-02 09:10:20'),
('9950c783-977e-4505-a46b-31f9d5ef3b78', '9949b703-8d45-469e-8a73-27b4603413bc', 'app/galeri-galeri/1685722237-vLJCC.jpg', '2023-06-02 09:10:37', '2023-06-02 09:10:37'),
('9950c793-0a88-4dbe-a3a9-d2a7399c8ca9', '9950c394-f014-4283-b947-ada15f2f4751', 'app/galeri-galeri/1685722247-tIoEi.jpg', '2023-06-02 09:10:47', '2023-06-02 09:10:47'),
('9950c79a-ab51-4d4a-8ad1-8f4708539dcd', '9950c394-f014-4283-b947-ada15f2f4751', 'app/galeri-galeri/1685722252-1CnkY.jpg', '2023-06-02 09:10:52', '2023-06-02 09:10:52'),
('9950c7a2-4350-48b5-a420-fa9bfc99a9f3', '9950c394-f014-4283-b947-ada15f2f4751', 'app/galeri-galeri/1685722257-4u6rp.jpg', '2023-06-02 09:10:57', '2023-06-02 09:10:57'),
('99516d69-6301-42b9-aa18-a488af8ebbb6', '9949b703-8d45-469e-8a73-27b4603413bc', 'app/galeri-galeri/1685750070-to8v6.jpg', '2023-06-02 16:54:30', '2023-06-02 16:54:30'),
('99517008-fb00-41ea-877e-0d097db8ab87', '99516fe2-cf97-4382-8366-f215f3df140a', 'app/galeri-galeri/1685750510-gZWfz.jpg', '2023-06-02 17:01:50', '2023-06-02 17:01:50'),
('99517018-ec46-4f23-9871-18cf8dee0b07', '99516fe2-cf97-4382-8366-f215f3df140a', 'app/galeri-galeri/1685750520-eUqdL.jpg', '2023-06-02 17:02:00', '2023-06-02 17:02:00'),
('9951702a-ce72-4404-8ba7-7334e7f8412c', '99516fe2-cf97-4382-8366-f215f3df140a', 'app/galeri-galeri/1685750532-Bggq9.jpg', '2023-06-02 17:02:12', '2023-06-02 17:02:12'),
('99517045-5283-475c-8ec3-e24422aa68f5', '99516fe2-cf97-4382-8366-f215f3df140a', 'app/galeri-galeri/1685750549-51Lu1.jpg', '2023-06-02 17:02:29', '2023-06-02 17:02:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id` char(36) NOT NULL,
  `id_produk` char(36) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_produk`
--

INSERT INTO `galeri_produk` (`id`, `id_produk`, `foto`, `created_at`, `updated_at`) VALUES
('9943c42b-7f08-491b-92d2-407a8e83b223', '9945bf4e-6c91-47e3-b005-365aee72d74a', 'app/galeri-produk/1685163330-Dgvpe.jpg', '2023-05-31 14:51:23', '2023-05-31 14:51:23'),
('9943c436-2c22-417f-862c-b8ab96ceb4c9', '9945bf4e-6c91-47e3-b005-365aee72d74a', 'app/galeri-produk/1685163337-LKiDT.jpg', '2023-05-31 14:51:27', '2023-05-31 14:51:27'),
('9943c48b-460a-454c-8482-81a387e1bad7', '9945bf4e-6c91-47e3-b005-365aee72d74a', 'app/galeri-produk/1685163393-Py8Zb.jpg', '2023-05-31 14:51:30', '2023-05-31 14:51:30'),
('9943c49a-3cb5-4bd8-b128-b391582a10b7', '9945bf4e-6c91-47e3-b005-365aee72d74a', 'app/galeri-produk/1685163402-MJgzZ.jpg', '2023-05-31 14:51:32', '2023-05-31 14:51:32'),
('9943c4a3-5ec5-4a44-9fe6-49e749b9564d', '9945bf4e-6c91-47e3-b005-365aee72d74a', 'app/galeri-produk/1685163408-Cr1f7.jpg', '2023-05-31 14:51:35', '2023-05-31 14:51:35'),
('9953dc11-ae5f-46da-80a5-d43e20037dd0', '9953d651-f75d-4b31-9a52-81ddf110d7bc', 'app/galeri-produk/1685854534-IV0Ht.jpg', '2023-06-03 21:55:34', '2023-06-03 21:55:34'),
('9953dc1f-5a83-4969-95f3-8cd24d73a4b4', '9953d651-f75d-4b31-9a52-81ddf110d7bc', 'app/galeri-produk/1685854543-Oojog.jpg', '2023-06-03 21:55:43', '2023-06-03 21:55:43'),
('995432c4-959f-4ac7-9b3a-92758ee1534a', '99542dae-7b23-4856-bf0c-511104fb25de', 'app/galeri-produk/1685869080-6PZh5.jpg', '2023-06-04 01:58:00', '2023-06-04 01:58:00'),
('995432cf-c175-4832-8add-31af2252bea3', '99542dae-7b23-4856-bf0c-511104fb25de', 'app/galeri-produk/1685869087-zmPz6.jpg', '2023-06-04 01:58:07', '2023-06-04 01:58:07'),
('995432f2-97e3-48ec-a690-d909c581fa81', '99542dae-7b23-4856-bf0c-511104fb25de', 'app/galeri-produk/1685869110-w7xua.jpg', '2023-06-04 01:58:30', '2023-06-04 01:58:30'),
('99543308-6f3d-413d-9a8b-0cd2a3222331', '99542dae-7b23-4856-bf0c-511104fb25de', 'app/galeri-produk/1685869124-JoFPx.jpg', '2023-06-04 01:58:44', '2023-06-04 01:58:44'),
('995433c5-6589-4de2-85c5-dd4b014bebe8', '995420fb-79de-4af7-8ea2-389fa6c18ec5', 'app/galeri-produk/1685869248-mU7r6.jpg', '2023-06-04 02:00:48', '2023-06-04 02:00:48'),
('995433e3-e04c-476e-982d-3db4e85485fd', '995420fb-79de-4af7-8ea2-389fa6c18ec5', 'app/galeri-produk/1685869268-abe8w.jpg', '2023-06-04 02:01:08', '2023-06-04 02:01:08'),
('99543434-a027-45e6-aa53-6a57690967c3', '995420fb-79de-4af7-8ea2-389fa6c18ec5', 'app/galeri-produk/1685869321-5jBoK.jpg', '2023-06-04 02:02:01', '2023-06-04 02:02:01'),
('995434d0-76ea-4880-b5e4-eaf599e3e6c8', '9954292f-3c4f-4fc4-8296-5f181c31b92d', 'app/galeri-produk/1685869423-0sCYJ.jpg', '2023-06-04 02:03:43', '2023-06-04 02:03:43'),
('995434e1-d01d-41c7-9622-a5f37dc4cc57', '9954292f-3c4f-4fc4-8296-5f181c31b92d', 'app/galeri-produk/1685869435-NwVse.jpg', '2023-06-04 02:03:55', '2023-06-04 02:03:55'),
('995434f6-35a2-4330-b634-725c4d7cf150', '9954292f-3c4f-4fc4-8296-5f181c31b92d', 'app/galeri-produk/1685869448-2vlvH.jpg', '2023-06-04 02:04:08', '2023-06-04 02:04:08'),
('99543552-e25d-461f-bc37-6544aebcbd14', '99542eb9-bb21-42ff-b5f2-7583a1b4a8b3', 'app/galeri-produk/1685869509-hZLsF.jpg', '2023-06-04 02:05:09', '2023-06-04 02:05:09'),
('99543576-6452-4d77-8561-11bce8068062', '99542eb9-bb21-42ff-b5f2-7583a1b4a8b3', 'app/galeri-produk/1685869532-Kf2Um.jpg', '2023-06-04 02:05:32', '2023-06-04 02:05:32'),
('99543588-0fbc-4936-bae9-eb1c99e16ead', '99542eb9-bb21-42ff-b5f2-7583a1b4a8b3', 'app/galeri-produk/1685869544-6BmKc.jpg', '2023-06-04 02:05:44', '2023-06-04 02:05:44'),
('995435b8-5b55-4edd-900a-b212dd7ad9f1', '99542eb9-bb21-42ff-b5f2-7583a1b4a8b3', 'app/galeri-produk/1685869575-EGX72.jpg', '2023-06-04 02:06:15', '2023-06-04 02:06:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('9941b438-70dc-493f-8d6a-c61153af50b8', 'Kemeja', '2023-05-26 04:26:18', '2023-05-25 21:26:18'),
('9941b6b0-8c71-400a-b39f-537313e8506c', 'Kaos', '2023-05-25 21:26:09', '2023-05-25 21:26:09'),
('9941b6ce-10d9-4106-b95c-d515f97173bf', 'Jas / Almamater', '2023-06-04 08:27:34', '2023-06-04 01:27:34'),
('99542e64-1cdb-45f4-ba4c-12c6a2a071b3', 'Rompi', '2023-06-04 01:45:46', '2023-06-04 01:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` char(36) NOT NULL,
  `id_blog` char(36) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `send` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_blog`, `nama_pengirim`, `email_pengirim`, `text`, `send`, `created_at`, `updated_at`) VALUES
('994ca375-5fb8-40dc-b3d4-fa1c64980e53', '994a00e0-f6dd-4a5e-9250-19da143a43c5', 'Admin', 'admin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut accumsan est, at venenatis ligula. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam mollis malesuada condimentum. Pellentesque blandit pharetra nisl, in porttitor velit molestie fringilla. Donec nisl mauris, tempus vel lorem sit amet, tincidunt mollis dolor. Aliquam feugiat molestie pellentesque.\r\n\r\nNunc bibendum, urna in finibus euismod, nulla tortor sodales ipsum, eget aliquet magna lectus sit amet massa. Donec quis justo eu dui feugiat tincidunt et congue tellus. Donec mauris neque, luctus quis elit nec, auctor lobortis erat. Integer consequat ante vitae elit sodales condimentum. Nulla aliquet ultricies erat, eget elementum felis dapibus non. Duis feugiat dignissim neque vitae volutpat. Aenean ornare mauris quis diam lobortis, sed convallis odio sodales.', 1, '2023-05-31 07:46:29', '2023-05-31 07:46:29'),
('99569077-6077-42de-8c8c-2ddaf33e0617', '994a00e0-f6dd-4a5e-9250-19da143a43c5', 'Lola', 'lola@gmail.com', 'Blog yang sangat bagus', 1, '2023-06-05 06:11:39', '2023-06-05 06:11:39'),
('9959b5bb-a7f8-4ba7-93ee-c31935f5b116', '994a00e0-f6dd-4a5e-9250-19da143a43c5', 'ifan', 'ifan@gmail.com', 'haiii', 1, '2023-06-06 19:43:21', '2023-06-06 19:43:21'),
('9b7d835d-4247-4d3c-9902-149489011e05', '994a00e0-f6dd-4a5e-9250-19da143a43c5', 'ifan', 'ifandqw@gmail.com', 'cwecw', 1, '2024-03-05 03:16:11', '2024-03-05 03:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota_mitra` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `kota_mitra`, `logo`, `created_at`, `updated_at`) VALUES
('9954ae94-0766-43d0-9cf0-2703d5dbe077', 'Kreatif Pontianak', 'https://instagram.com/kreatif_____?igshid=MzRlODBiNWFlZA==', 'app/mitra/1685889852-Eg5aN.png', '2023-06-04 15:09:57', '2023-06-04 08:09:57'),
('9954aefe-29d3-469e-8857-ccc25bdd5780', 'Berkah Konveksi', 'https://instagram.com/berkah_konveksi05?igshid=NTc4MTIwNjQ2YQ==', 'app/mitra/1685889921-zbWn8.png', '2023-06-04 07:45:21', '2023-06-04 07:45:21'),
('9954af3e-5634-4227-83a7-ba834f8bdcd7', 'Rumah Konveksi Kalbar', 'https://instagram.com/rumah_konveksikalbar?igshid=NTc4MTIwNjQ2YQ==', 'app/mitra/1685889963-GYIa2.png', '2023-06-04 07:46:04', '2023-06-04 07:46:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_instansi`
--

CREATE TABLE `mutasi_instansi` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(36) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `sum` varchar(255) DEFAULT NULL,
  `spm` varchar(255) DEFAULT NULL,
  `spp` varchar(255) DEFAULT NULL,
  `spdi` varchar(255) DEFAULT NULL,
  `spstmtb` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `sk_pns` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skbt` varchar(255) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_instansi`
--

INSERT INTO `mutasi_instansi` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `asal`, `tujuan`, `sum`, `spm`, `spp`, `spdi`, `spstmtb`, `skjt`, `sk_pns`, `skp`, `skbt`, `alasan`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('9b82df72-6f59-4c34-9b3b-73af9fd34ccc', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'Lola Reghita', '3042021010', '+629512581105', 'jl. rahadi', '1709962490-neZYm.jpg', 'bkpsdm', 'lps', '1709988003-o2CAA.pdf', '1709988003-c35pM.pdf', '1709908229-GRwC6.pdf', '1709908229-xq4SC.pdf', '1709908229-FMmju.pdf', '1709908229-wLHEi.pdf', '1709908229-UlDlR.pdf', '1709908229-TH7XC.pdf', '1709908229-zCdP5.pdf', '1709908229-P5rCX.pdf', 'Diterima', 'mantap', '2024-03-08 07:30:29', '2024-03-09 05:40:03'),
('9b85c52d-7bc1-4062-9982-bab804f103b5', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'Joylah', '3042021010', '+629512581105', 'jl. rahadi', '1709988410-w5us5.jpg', 'bkpsdm', 'lps', '1709988410-KaAvN.pdf', '1709988410-l5Siz.pdf', '1709988410-i3uID.pdf', '1709988410-1aaSd.pdf', '1709988410-MSRRO.pdf', '1709988410-Ph58Y.pdf', '1709988410-jvQe7.pdf', '1709988410-r7RYa.pdf', '1709988410-rzmfy.pdf', '1709988410-70g4o.pdf', 'Diterima', 'Berkas sesuai', '2024-03-09 05:46:50', '2024-03-09 07:17:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_keluar_daerah`
--

CREATE TABLE `mutasi_keluar_daerah` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(36) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `sum` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `spp` varchar(255) DEFAULT NULL,
  `spdi` varchar(255) DEFAULT NULL,
  `spstmtb` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `sk_pns` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skbt` varchar(255) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_keluar_daerah`
--

INSERT INTO `mutasi_keluar_daerah` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `asal`, `tujuan`, `sum`, `sr`, `spp`, `spdi`, `spstmtb`, `skjt`, `sk_pns`, `skp`, `skbt`, `alasan`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('9b8733e9-23f1-4959-bead-5e4851eadab1', '99419863-4c57-4abd-9727-60233f8f53db', 'ifan', '3042021010', '089512581105', 'jl rahadi', '1710049938-zieP0.png', 'psg', 'lpse', '1710049938-DaGc9.pdf', '1710049938-zUV8E.pdf', '1710049938-nctI2.pdf', '1710049938-6cMvW.pdf', '1710049938-TXyvA.pdf', '1710049938-pki49.pdf', '1710049938-0ITt9.pdf', '1710049938-WjbH9.pdf', '1710049938-lUH6q.pdf', '1710049938-l468k.pdf', 'Diproses', 'Belum Di Verifikasi', '2024-03-09 22:52:18', '2024-03-09 22:52:18'),
('9b873828-390c-4b7d-9c7f-f87a5ce003e5', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'ifan', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710050650-rQrtm.png', 'psg', 'Kominfo', '1710050650-D5c9N.pdf', '1710050650-uOLaj.pdf', '1710050650-k6qUa.pdf', '1710050650-kms5m.pdf', '1710050650-mU67m.pdf', '1710050650-xOkc8.pdf', '1710050650-AsVdq.pdf', '1710050650-hAW9E.pdf', '1710050650-62BK5.pdf', '1710050650-eMPLp.pdf', 'Diterima', 'Berkas sesuai', '2024-03-09 23:04:10', '2024-03-09 23:04:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_masuk_daerah`
--

CREATE TABLE `mutasi_masuk_daerah` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(36) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `spp` varchar(255) DEFAULT NULL,
  `spdi` varchar(255) DEFAULT NULL,
  `spstmtb` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `sk_pns` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skbt` varchar(255) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_masuk_daerah`
--

INSERT INTO `mutasi_masuk_daerah` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `asal`, `tujuan`, `spp`, `spdi`, `spstmtb`, `skjt`, `sk_pns`, `skp`, `skbt`, `alasan`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('9b87294e-1867-46c4-887b-7f6c57e81608', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'ifan', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710048158-IwaZS.png', 'psg', 'Kominfo', '1710048158-Gx9Or.pdf', '1710048158-KqKec.pdf', '1710048158-KNv1k.pdf', '1710048158-QHrQI.pdf', '1710048158-QtA7r.pdf', '1710048158-VlyQj.pdf', '1710048158-x3Bfi.pdf', '1710048158-abB08.pdf', 'Diterima', 'sippp', '2024-03-09 22:22:38', '2024-03-09 22:23:43'),
('9b873a3c-3d24-402e-9e2d-3ed1428ccaba', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'ifan', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710050999-b9azF.png', 'psg', 'Kominfo', '1710050999-JeXBh.pdf', '1710050999-sxJ1u.pdf', '1710050999-q4vMM.pdf', '1710050999-xUzVF.pdf', '1710050999-wJlco.pdf', '1710050999-vlHh1.pdf', '1710050999-aK1nC.pdf', '1710050999-fTvSB.pdf', 'Diterima', 'sipppd', '2024-03-09 23:09:59', '2024-03-09 23:10:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_sekolah`
--

CREATE TABLE `mutasi_sekolah` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(36) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `sum` varchar(255) DEFAULT NULL,
  `spm` varchar(255) DEFAULT NULL,
  `rkdp` varchar(255) DEFAULT NULL,
  `spp` varchar(255) DEFAULT NULL,
  `spdi` varchar(255) DEFAULT NULL,
  `spstmtb` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `sk_pns` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skbt` varchar(255) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_sekolah`
--

INSERT INTO `mutasi_sekolah` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `asal`, `tujuan`, `sum`, `spm`, `rkdp`, `spp`, `spdi`, `spstmtb`, `skjt`, `sk_pns`, `skp`, `skbt`, `alasan`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('9b85eb83-6449-4328-9ed7-33e5bbf1ce68', '99419863-4c57-4abd-9727-60233f8f53db', 'Sutrisno', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1709994977-1RoK3.jpg', 'psgk', 'Kominfo', '1709994842-pWDvd.pdf', '1709994842-YuuaG.pdf', '1709994842-kCa97.pdf', '1709994842-HpQiw.pdf', '1709994842-mJJgX.pdf', '1709994842-obEyk.pdf', '1709994842-QGU3r.pdf', '1709994842-CRVBd.pdf', '1709994842-CiWz4.pdf', '1709994842-hSpDK.pdf', '1709994842-Jeq2S.pdf', 'Ditolak', 'Berkas tidak sesuai', '2024-03-09 07:34:02', '2024-03-09 08:13:45'),
('9b85f57a-d8ee-4d25-a082-3d3ac0c66158', '9b85cb14-9227-42db-8352-785016d603ec', 'olaalaaa', '3042021010', '+629512581105', 'jl. rahadi', '1709996514-zHljK.jpg', 'bkpsdm', 'lps', '1709996514-RxS4b.pdf', '1709996514-W6PbI.pdf', '1709996514-hX7W0.pdf', '1709996514-nxJIz.pdf', '1709996514-GxbLo.pdf', '1709996514-JS7pf.pdf', '1709996514-2XK6G.pdf', '1709996514-ZlGfO.pdf', '1709996514-RI3Yz.pdf', '1709996514-O5E1v.pdf', '1709996514-BR1pV.pdf', 'Diterima', 'Berkas tidak sesuai gggggg', '2024-03-09 08:01:54', '2024-03-09 08:13:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `email`, `foto`, `password`, `created_at`, `updated_at`) VALUES
('9b974935-2a3f-4b9b-94ad-6032f61c76b2', 'IFAN RIFALDI', '3042021010', 'Laki-laki', '089512581105', 'ifanrifaldi14@gmail.com', 'app/pegawai/1710740705-QZbJ5.jpg', '$2y$10$zPKLdG/qOguzCtIyoEJTGuHrAnkQUb7vUonrjj9rEksDecoOdmstK', '2024-03-17 22:45:05', '2024-03-17 22:45:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun_bujaduya`
--

CREATE TABLE `pensiun_bujaduya` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `spcp` varchar(255) DEFAULT NULL,
  `bpcp` varchar(255) DEFAULT NULL,
  `sppn` varchar(255) DEFAULT NULL,
  `skhd` varchar(255) DEFAULT NULL,
  `skcpns` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `drp` varchar(255) DEFAULT NULL,
  `berkala` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skc` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `an` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `ak` varchar(255) DEFAULT NULL,
  `akan` varchar(255) DEFAULT NULL,
  `skjd` varchar(255) DEFAULT NULL,
  `skms` varchar(255) DEFAULT NULL,
  `fpp` varchar(255) DEFAULT NULL,
  `rekening` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `taspen` varchar(255) DEFAULT NULL,
  `skbb` varchar(255) DEFAULT NULL,
  `skpt` varchar(255) DEFAULT NULL,
  `skmkp` varchar(255) DEFAULT NULL,
  `tpdh` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pensiun_bujaduya`
--

INSERT INTO `pensiun_bujaduya` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `spcp`, `bpcp`, `sppn`, `skhd`, `skcpns`, `skjt`, `drp`, `berkala`, `skp`, `skc`, `kk`, `an`, `ac`, `ak`, `akan`, `skjd`, `skms`, `fpp`, `rekening`, `npwp`, `ktp`, `taspen`, `skbb`, `skpt`, `skmkp`, `tpdh`, `status`, `pesan`, `keterangan`, `created_at`, `updated_at`) VALUES
('9b97210c-b27b-46b7-b295-3196d610125f', '99419863-4c57-4abd-9727-60233f8f53db', 'IFAN RIFALDI', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710733968-FM48g.jpeg', '1710733968-OsAJM.pdf', '1710733968-CMxQa.pdf', '1710733968-lMpZZ.pdf', '1710733968-LOipM.pdf', '1710733968-v59Qq.pdf', '1710733968-6qQLV.pdf', '1710733968-IXVxq.pdf', '1710733968-3lkx1.pdf', '1710733968-JTjPo.pdf', '1710733968-wXtgg.pdf', '1710733968-oRxZ5.pdf', '1710733968-qRHvT.pdf', '1710733968-pH3Ui.pdf', '1710733968-uusXJ.pdf', '1710733968-Gvrj7.pdf', '1710733968-HAS8w.pdf', '1710733968-67DAA.pdf', '1710733968-ZD5Yk.pdf', '1710733968-xJBnL.pdf', '1710733968-wA9kI.pdf', '1710733968-JJ4Dx.pdf', '1710733968-OTVKk.pdf', '1710733968-OY8PV.pdf', '1710733968-4YRED.pdf', '1710733968-9UmqI.pdf', '1710733968-2Lq7A.pdf', 'Ditolak', 'Berkas tidak sesuai', 'Pensiun Dini', '2024-03-17 20:52:48', '2024-03-17 21:04:56'),
('9b974f6f-f70f-48c1-bfd4-5ead1a9ec484', '9b974935-2a3f-4b9b-94ad-6032f61c76b2', 'Regita', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710741750-FZj0j.jpeg', '1710741751-ARY73.pdf', '1710741751-i5Rbe.pdf', '1710741751-oThuD.pdf', '1710741751-8dJJX.pdf', '1710741751-kkCNE.pdf', '1710741751-0PqSJ.pdf', '1710741751-lDSY6.pdf', '1710741751-XCZTY.pdf', '1710741751-YLopi.pdf', '1710741751-S6xfP.pdf', '1710741751-YZWXa.pdf', '1710741751-uNWRk.pdf', '1710741751-g3RMh.pdf', '1710741751-eRQsB.pdf', '1710741751-TiHCI.pdf', '1710741751-1ZEgI.pdf', '1710741751-1XGQn.pdf', '1710741751-7Dk1v.pdf', '1710741751-G4p7s.pdf', '1710741751-zP5aD.pdf', '1710741751-FeOXw.pdf', '1710741751-sdsBw.pdf', '1710741751-LtXu7.pdf', '1710741751-Ahgrr.pdf', '1710741751-OLtci.pdf', '1710741751-hVLvS.pdf', 'Diterima', 'Berkas sesuai', 'Pensiun Dini', '2024-03-17 23:02:31', '2024-03-17 23:05:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun_dizur`
--

CREATE TABLE `pensiun_dizur` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `spcp` varchar(255) DEFAULT NULL,
  `bpcp` varchar(255) DEFAULT NULL,
  `sppn` varchar(255) DEFAULT NULL,
  `skhd` varchar(255) DEFAULT NULL,
  `skcpns` varchar(255) DEFAULT NULL,
  `skjt` varchar(255) DEFAULT NULL,
  `drp` varchar(255) DEFAULT NULL,
  `berkala` varchar(255) DEFAULT NULL,
  `skp` varchar(255) DEFAULT NULL,
  `skc` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `an` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `ak` varchar(255) DEFAULT NULL,
  `akan` varchar(255) DEFAULT NULL,
  `skjd` varchar(255) DEFAULT NULL,
  `skms` varchar(255) DEFAULT NULL,
  `fpp` varchar(255) DEFAULT NULL,
  `rekening` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `taspen` varchar(255) DEFAULT NULL,
  `spbsp` varchar(255) DEFAULT NULL,
  `cps` varchar(255) DEFAULT NULL,
  `btdi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pensiun_dizur`
--

INSERT INTO `pensiun_dizur` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `spcp`, `bpcp`, `sppn`, `skhd`, `skcpns`, `skjt`, `drp`, `berkala`, `skp`, `skc`, `kk`, `an`, `ac`, `ak`, `akan`, `skjd`, `skms`, `fpp`, `rekening`, `npwp`, `ktp`, `taspen`, `spbsp`, `cps`, `btdi`, `status`, `pesan`, `keterangan`, `created_at`, `updated_at`) VALUES
('9b8d1e29-b37d-41d7-b9c4-eaae643f75bb', '99419863-4c57-4abd-9727-60233f8f53db', 'IFAN RIFALDI', '3042021010', '+629512581105', 'jl. rahadi', '1710303987-dEQXZ.jpg', '1710303987-NPjhl.pdf', '1710303987-oLkBS.pdf', NULL, '1710303987-SCWom.pdf', '1710303987-Gw11B.pdf', '1710303987-ca3T0.pdf', '1710303987-fTPpK.pdf', '1710303987-3V7n8.pdf', '1710303987-Pz1YM.pdf', '1710303987-2nDCU.pdf', '1710303987-BJ5oc.pdf', '1710303987-58upj.pdf', '1710303987-kFfBJ.pdf', '1710303987-KRcI6.pdf', '1710303987-55m1l.pdf', '1710303987-Tlzeb.pdf', '1710303987-GkNpg.pdf', NULL, NULL, NULL, NULL, NULL, '1710303987-Dpxfj.pdf', '1710303987-1RVQO.pdf', '1710303987-j7U6i.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Dini', '2024-03-12 21:26:27', '2024-03-12 21:26:27'),
('9b8d1fc6-efa2-47da-a6af-391a26997d53', '99419863-4c57-4abd-9727-60233f8f53db', 'IFAN RIFALDI', '3042021010', '+629512581105', 'jl. rahadi', '1710304258-SbK5c.png', '1710304258-hMiVy.pdf', '1710304258-HHY0x.pdf', '1710304258-roOOa.pdf', NULL, '1710304258-gX9BQ.pdf', '1710304258-kE7av.pdf', '1710304258-G7nxl.pdf', '1710304258-cOaSJ.pdf', '1710304258-hDQod.pdf', '1710304258-tUE0l.pdf', '1710304258-1ltxW.pdf', '1710304258-K1vxi.pdf', '1710304258-3tYhY.pdf', '1710304258-fNL0t.pdf', '1710304258-M9EAM.pdf', '1710304258-7xrTh.pdf', '1710304258-mxn3P.pdf', NULL, NULL, NULL, NULL, NULL, '1710304258-kgRpZ.pdf', '1710304258-1pCLu.pdf', '1710304258-qP5OX.pdf', 'Diterima', 'sipp', 'Pensiun Dini', '2024-03-12 21:30:58', '2024-03-17 19:53:00'),
('9b8d4ef0-bb73-45c5-88bb-4709572c46ef', '99419863-4c57-4abd-9727-60233f8f53db', 'Ifan Rifaldi', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710312170-qNEeN.png', '1710312170-D52oz.pdf', '1710312170-09MYn.pdf', '1710312170-7f5Tl.pdf', '1710312170-ERUKC.pdf', '1710312170-44vnF.pdf', '1710312170-LDKNk.pdf', '1710312170-kaBUZ.pdf', '1710312170-zYu8v.pdf', '1710312170-w7yVd.pdf', '1710312170-mYr4w.pdf', '1710312170-hjs87.pdf', '1710312170-Q00HU.pdf', '1710312170-amJAc.pdf', '1710312170-gAHUL.pdf', '1710312170-M0tgU.pdf', '1710312170-JRy63.pdf', '1710312170-O6KfM.pdf', '1710312170-2PHcN.pdf', '1710312170-XOByp.pdf', '1710312170-STijz.pdf', '1710312170-Ktr7X.pdf', '1710312170-sdcMo.pdf', '1710312170-NTHt0.pdf', '1710312170-yRfd7.pdf', '1710312170-6b2mE.pdf', 'Diterima', 'Berkas sesuai', 'Pensiun Dini', '2024-03-12 23:42:50', '2024-03-17 19:49:33'),
('9b9730f3-993f-403c-a2a3-22b168dbeede', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'lola', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710736636-57jhc.png', '1710736636-Mnx5a.pdf', '1710736636-eVsm1.pdf', '1710736636-XUXCA.pdf', '1710736636-ELAav.pdf', '1710736636-p3Owo.pdf', '1710736636-4lBlR.pdf', '1710736636-ZFZUW.pdf', '1710736636-wN0cb.pdf', '1710736636-gc9dS.pdf', '1710736636-wOh1W.pdf', '1710736636-34gsh.pdf', '1710736636-JdsCS.pdf', '1710736636-J5uOy.pdf', '1710736636-pT5VE.pdf', '1710736636-YEZpl.pdf', '1710736636-Pog2G.pdf', '1710736636-WXGqg.pdf', '1710736636-1DU7J.pdf', '1710736636-socp1.pdf', '1710736636-bDJd8.pdf', '1710736636-IK5B8.pdf', '1710736636-37pUS.pdf', '1710736636-Zu2tW.pdf', '1710736636-S8XPP.pdf', '1710736636-dAMlr.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Dini', '2024-03-17 21:37:16', '2024-03-17 21:37:16'),
('9b9731f4-c606-4fcd-ab86-6c0561fb487f', '9b82df72-6f59-4c34-9b3b-73af9fd34ccc', 'IFAN RIFALDI d', '3042021010', '089512581105', 'jl rahadi', '1710736804-ACxH8.jpeg', '1710736804-Sg4zH.pdf', '1710736804-IIOaP.pdf', '1710736804-BsIh6.pdf', '1710736804-MsqqZ.pdf', '1710736804-3KOOg.pdf', '1710736804-RGsH8.pdf', '1710736804-sC0Sg.pdf', '1710736804-UMUSt.pdf', '1710736804-zgOgd.pdf', '1710736804-GB1tU.pdf', '1710736804-oO2pd.pdf', '1710736804-MzfEE.pdf', '1710736804-Q0NlA.pdf', '1710736804-wSHOY.pdf', '1710736804-SpAdb.pdf', '1710736804-lJrKF.pdf', '1710736804-V2I0p.pdf', '1710736804-LGr12.pdf', '1710736804-tDHkw.pdf', '1710736804-Y0rJh.pdf', '1710736804-yHlAS.pdf', '1710736804-mYcO0.pdf', '1710736804-8LBLv.pdf', '1710736804-x8esh.pdf', '1710736804-jy0VN.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Dini', '2024-03-17 21:40:04', '2024-03-17 21:40:04'),
('9b973eb1-641f-4643-bf00-b4e00024cf2e', '9b96e557-0ab9-454d-b660-1d1d5f347e34', 'IFAN RIFALDI', '3042021010', '089512581105', 'Jl. Rahadi Usman', '1710738941-JGa1N.jpg', '1710738941-aW78p.pdf', '1710738941-A4BOY.pdf', '1710738941-zYgOy.pdf', '1710738941-iPV7w.pdf', '1710738941-u5WDE.pdf', '1710738941-IQnK9.pdf', '1710738941-5bOgw.pdf', '1710738941-YgLhn.pdf', '1710738941-qIetI.pdf', '1710738941-4KAPH.pdf', '1710738941-hrhmq.pdf', '1710738941-zwpxr.pdf', '1710738941-dg4Pi.pdf', '1710738941-9YMFb.pdf', '1710738941-8qZTd.pdf', '1710738941-tNHB7.pdf', '1710738941-hfxWG.pdf', '1710738941-wLLHS.pdf', '1710738941-vbkyR.pdf', '1710738941-Xj1ty.pdf', '1710738941-G2T3B.pdf', '1710738941-bgjdy.pdf', '1710738941-LApaJ.pdf', '1710738941-TjBaG.pdf', '1710738941-5LHOC.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Dini', '2024-03-17 22:15:41', '2024-03-17 22:15:41'),
('9b9749f6-e9b5-4e08-9d37-2e73b7494231', '9b974935-2a3f-4b9b-94ad-6032f61c76b2', 'Cobain', '3042021010', '089512581105', 'jl rahadi', '1710740832-BFSUw.png', '1710740832-DPp2Z.pdf', '1710740832-z3pNK.pdf', '1710740832-dOafI.pdf', '1710740832-kpdOm.pdf', '1710740832-lCmiJ.pdf', '1710740832-FBKMW.pdf', '1710740832-u9Dem.pdf', '1710740832-b4Uyc.pdf', '1710740832-NDi7R.pdf', '1710740832-okxPD.pdf', '1710740832-h5THx.pdf', '1710740832-Jnr8w.pdf', '1710740832-GEUk6.pdf', '1710740832-8PfMm.pdf', '1710740832-iiS5m.pdf', '1710740832-ECLKB.pdf', '1710740832-pSt7L.pdf', '1710740832-NY2wr.pdf', '1710740832-Yyo82.pdf', '1710740832-hn3a2.pdf', '1710740832-5hiFm.pdf', '1710740832-96Rce.pdf', '1710740832-j2Pml.pdf', '1710740832-92MKY.pdf', '1710740832-TKjxF.pdf', 'Diterima', 'Berkas sesuai', 'Pensiun Dini', '2024-03-17 22:47:12', '2024-03-17 22:47:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_produk` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_jenis_produk`, `nama`, `deskripsi_produk`, `foto`, `created_at`, `updated_at`) VALUES
('995420fb-79de-4af7-8ea2-389fa6c18ec5', '9941b6b0-8c71-400a-b39f-537313e8506c', 'KAOS KERAH / POLO', '<h4 class=\"\" style=\"text-align: center; \"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">HARGA : 90 – 145</font></span></b></h4><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">1. BEBAS TITIK BORDIR&nbsp; / SABLON ( BED / KOMPUTER / VELCRO)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">2. BEBAS UKURAN <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">3. BEBAS MODEL <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">4. BEBAS WARNA ( SATU\r\nWARNA / DUA WARNA / TIGA WARNA / EMPAT WARNA,DLL )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">5. GRATIS DESAIN<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">6. BAHAN GRAD A ( PE DOUBLE\r\n/ CVC CATTON / PIQUE CATTON )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">7. GRATIS KONSULTASI<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">8. KHUSUS 3 – 11 PCS\r\nHARGA BERBEDA</font></span></b></p><p class=\"MsoNormal\" style=\"text-align: left; line-height: normal;\"><b style=\"font-size: 1rem;\"><span style=\"font-size:11.0pt;\r\nline-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">NOTE : POINT 1 – 7 TIDAK ADA PENMABAHAN BIAYA KHUSUS\r\nSABLON LEBIH MURAH</font></span></b></p>', 'app/produk/1685869226-tXORK.jpg', '2023-06-04 09:00:26', '2023-06-04 02:00:26'),
('9954292f-3c4f-4fc4-8296-5f181c31b92d', '9941b6ce-10d9-4106-b95c-d515f97173bf', 'JAS / ALMAMATER', '<h4 style=\"text-align: center; line-height: normal;\" class=\"\"><b><span style=\"font-size: 11pt; line-height: 115%; font-family: &quot;Arial Narrow&quot;, sans-serif;\"><font color=\"#000000\">HARGA : 125 -160</font></span></b></h4><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">1. BEBAS TITIK BORDIR\r\n(BED / KOMPUTER / VELCRO)</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">2. BEBAS UKURAN</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b style=\"font-size: 1rem;\"><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">3. BEBAS MODEL</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">4. BEBAS WARNA ( SATU\r\nWARNA / DUA WARNA / TIGA WARNA / EMPAT WARNA,DLL )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">5. GRATIS DESAIN</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">6. BAHAN GRAD A (\r\nKANTATA / AMERICAN / JAPAN / TWIST / NAMURA / NAGATA / HISOFY / RIPSTOP /\r\nTOYOBO, DLL)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">7. GRATIS KONSULTASI</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">8. BUSA BAHU DUA SISI</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\"><o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">9. FULL FURING</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">10. KHUSUS 3 – 11 PCS HARGA\r\nBERBEDA</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">NOTE : POINT 1 – 9\r\nTIDAK ADA PENMABAHAN BIAYA</font></span></b></p>', 'app/produk/1685869391-RLoUo.jpg', '2023-06-04 09:03:11', '2023-06-04 02:03:11'),
('99542dae-7b23-4856-bf0c-511104fb25de', '9941b438-70dc-493f-8d6a-c61153af50b8', 'KEMEJA PDL / PDH', '<h4 class=\"\" style=\"text-align: center; \"><font color=\"#000000\"><span style=\"font-size: 11pt; line-height: 115%; font-family: &quot;Arial Narrow&quot;, sans-serif;\"><b style=\"\">HARGA : 125 -160</b></span></font></h4><p style=\"line-height: normal;\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">1. BEBAS TITIK BORDIR\r\n(BED / KOMPUTER / VELCRO)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">2. BEBAS UKURAN <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">3. BEBAS MODEL (CUPIT\r\n/ SCOTLITE )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">4. BEBAS WARNA ( SATU\r\nWARNA / DUA WARNA / TIGA WARNA / EMPAT WARNA )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">5. GRATIS DESAIN (\r\nTIGA KALI REVISI)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">6. BAHAN GRAD A(\r\nKANTATA / AMERICAN / JAPAN / TWIST / NAMURA / NAGATA / HISOFY / RIPSTOP /\r\nTOYOBO, DLL)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">7. GRATIS KONSULTASI <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">8. KHUSUS 3 – 11 PCS\r\nHARGA BERBEDA</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-size:11.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,sans-serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><font color=\"#000000\">NOTE : POINT 1 – 7 TIDAK\r\nADA PENMABAHAN BIAYA</font></span></b><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\"><br></font></span></b></p>', 'app/produk/1685869066-kwgfg.jpg', '2023-06-04 08:57:46', '2023-06-04 01:57:46'),
('99542eb9-bb21-42ff-b5f2-7583a1b4a8b3', '99542e64-1cdb-45f4-ba4c-12c6a2a071b3', 'ROMPI', '<h4 class=\"\" style=\"text-align: center; \"><b><span style=\"font-size: 11pt; line-height: 115%; font-family: &quot;Arial Narrow&quot;, sans-serif;\"><font color=\"#000000\">HARGA : 125 -160</font></span></b></h4><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">1. BEBAS TITIK BORDIR\r\n(BED / KOMPUTER / VELCRO)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">2. BEBAS UKURAN <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">3. BEBAS MODEL (SCOTLITE\r\n/ CUPIT / JAHIT DOUBLE STICK&nbsp; / D <o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">4. BEBAS WARNA ( SATU\r\nWARNA / DUA WARNA / TIGA WARNA / EMPAT WARNA,DLL )<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">5. GRATIS DESAIN<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">6. BAHAN GRAD A (\r\nKANTATA / AMERICAN / JAPAN / TWIST / NAMURA / NAGATA / HISOFY / RIPSTOP /\r\nTOYOBO, DLL)<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">7. GRATIS KONSULTASI<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">8. FULL FURING<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">9. KHUSUS 3 – 11 PCS\r\nHARGA BERBEDA</font></span></b></p><p class=\"MsoNormal\" style=\"line-height:normal\"><b><span style=\"font-family:&quot;Arial Narrow&quot;,sans-serif\"><font color=\"#000000\">NOTE : POINT 1 – 8\r\nTIDAK ADA PENMABAHAN BIAYA</font><o:p></o:p></span></b></p>', 'app/produk/1685868402-VvbtM.jpg', '2023-06-04 08:51:21', '2023-06-04 01:51:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` char(36) NOT NULL,
  `profil_konveksi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `moto` text NOT NULL,
  `tujuan` text NOT NULL,
  `struktur_organisasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `profil_konveksi`, `visi`, `misi`, `moto`, `tujuan`, `struktur_organisasi`, `created_at`, `updated_at`) VALUES
('9948633e-b0f0-4908-8bf8-525df0345d3f', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis tortor feugiat, placerat sapien sed, tristique nisi. Nunc id velit non nisi fringilla sagittis a at risus. Vivamus molestie iaculis augue vitae ultrices. Fusce sed tincidunt metus, eu cursus justo. Nunc tincidunt est quis magna efficitur consequat. Nullam vehicula nisi a velit faucibus dapibus. Sed quis ex vel velit dapibus convallis. Vestibulum volutpat augue eu augue condimentum posuere vitae vitae diam. Curabitur vitae dui eget tortor tempus vehicula. Pellentesque suscipit, tortor in suscipit gravida, dolor mauris tincidunt augue, a consequat elit massa pharetra massa.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Phasellus efficitur ullamcorper porttitor. Quisque nulla libero, ultrices et tristique eu, maximus non nulla. Phasellus sit amet nibh velit. Praesent viverra mauris nec est vehicula, in imperdiet turpis facilisis. Nulla facilisi. Integer consequat accumsan placerat. Praesent scelerisque sed ante sit amet lacinia. Nam venenatis eu sem non lobortis. In ac libero risus. Suspendisse potenti. In iaculis enim in dolor tempor viverra. Duis a sodales diam. Pellentesque venenatis nulla a est gravida congue. Phasellus finibus a neque eget bibendum.</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis tortor feugiat, placerat sapien sed, tristique nisi. Nunc id velit non nisi fringilla sagittis a at risus. Vivamus molestie iaculis augue vitae ultrices. Fusce sed tincidunt metus, eu cursus justo. Nunc tincidunt est quis magna efficitur consequat<br></p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis tortor feugiat, placerat sapien sed, tristique nisi. Nunc id velit non nisi fringilla sagittis a at risus. Vivamus molestie iaculis augue vitae ultrices. Fusce sed tincidunt metus, eu cursus justo. Nunc tincidunt est quis magna efficitur consequat<br></p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis tortor feugiat, placerat sapien sed, tristique nisi. Nunc id velit non nisi fringilla sagittis a at risus. Vivamus molestie iaculis augue vitae ultrices. Fusce sed tincidunt metus, eu cursus justo. Nunc tincidunt est quis magna efficitur consequat<br></p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis tortor feugiat, placerat sapien sed, tristique nisi. Nunc id velit non nisi fringilla sagittis a at risus. Vivamus molestie iaculis augue vitae ultrices. Fusce sed tincidunt metus, eu cursus justo. Nunc tincidunt est quis magna efficitur consequat<br></p>', 'app/Profil/1685361816-kUSnh.jpg', '2023-05-29 12:10:32', '2023-05-29 05:10:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_desain`
--

CREATE TABLE `prosedur_desain` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_order`
--

CREATE TABLE `prosedur_order` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_pengajuan`
--

CREATE TABLE `prosedur_pengajuan` (
  `id` char(36) NOT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `masuk` varchar(255) DEFAULT NULL,
  `keluar` varchar(255) DEFAULT NULL,
  `dizur` varchar(255) DEFAULT NULL,
  `bujaduya` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prosedur_pengajuan`
--

INSERT INTO `prosedur_pengajuan` (`id`, `instansi`, `sekolah`, `masuk`, `keluar`, `dizur`, `bujaduya`, `created_at`, `updated_at`) VALUES
('9b97672d-58e8-4c17-8723-2d556010aa92', '1710768703-Cvgky.pdf', '1710768740-XHARy.pdf', '1710745733-VIzEx.pdf', '1710745733-cZcFx.pdf', '1710745733-tIl8I.pdf', '1710745733-CMC4M.pdf', '2024-03-18 13:32:20', '2024-03-18 06:32:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_produksi`
--

CREATE TABLE `prosedur_produksi` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `balasan_komentar`
--
ALTER TABLE `balasan_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_galeri`
--
ALTER TABLE `galeri_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mutasi_instansi`
--
ALTER TABLE `mutasi_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mutasi_keluar_daerah`
--
ALTER TABLE `mutasi_keluar_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mutasi_masuk_daerah`
--
ALTER TABLE `mutasi_masuk_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mutasi_sekolah`
--
ALTER TABLE `mutasi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pensiun_bujaduya`
--
ALTER TABLE `pensiun_bujaduya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pensiun_dizur`
--
ALTER TABLE `pensiun_dizur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prosedur_desain`
--
ALTER TABLE `prosedur_desain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prosedur_order`
--
ALTER TABLE `prosedur_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prosedur_pengajuan`
--
ALTER TABLE `prosedur_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prosedur_produksi`
--
ALTER TABLE `prosedur_produksi`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
