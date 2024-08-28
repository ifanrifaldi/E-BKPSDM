-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Agu 2024 pada 16.08
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
('99419863-4c57-4abd-9727-60233f8f53db', 'admin 1', 'adminadmin123', '$2y$10$IzTJwRPRlD7qsBDLWEqg8OIONc0DOrzN7oX9oJ9TMe6j8RTvVqgi2', 'app/data-admin/1721560141-zgJo6.jpg', '2024-07-21 11:09:01', '2024-07-21 04:09:01'),
('9c1480a7-7227-4897-b768-cdea2489e72c', 'Ifan Rifaldi', 'ifanrifaldi', '$2y$10$wZ1OXQVauRbSyX6YIOG.GOsXFzUrVvcs7Rh0699eBZtUTKFxZS5mS', 'app/data-admin/1716118717-SP224.png', '2024-06-11 15:21:02', '2024-06-11 08:21:02');

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
('9bb53f39-8461-41ef-8e7f-c9399617d934', 'Humas BKN - Dit', 'Lantik Pejabat Fungsional dan PPPK BKN, Plt. Kepala: ASN Berpedoman pada Core Values BerAKHLAK', '<p class=\"selectable-text copyable-text iq0m558w g0rxnol2\" dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(97, 97, 97); text-align: justify;\"><span class=\"selectable-text copyable-text\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font: inherit; vertical-align: baseline;\">Jakarta – Humas BKN, “Dengan dilantiknya Saudara hari ini, diharapkan dapat mematuhi dan mengikuti segala peraturan dan ketentuan yang ada serta selalu berpedoman pada&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: inherit; font-weight: inherit;\">core values</em>&nbsp;ASN, yaitu BerAKHLAK,” tutur Plt. Kepala Badan Kepegawaian Negara, Haryomo Dwi Putranto, dalam kegiatan Pelantikan dan Pengambilan Sumpah Jabatan Pejabat Fungsional di Lingkungan Badan Kepegawaian Negara (BKN) pada Senin (01/04/2024) bertempat di Aula Kantor Pusat BKN Jakarta.</span></p><p class=\"selectable-text copyable-text iq0m558w g0rxnol2\" dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(97, 97, 97); text-align: justify;\"><span class=\"selectable-text copyable-text\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font: inherit; vertical-align: baseline;\">Haryomo menambahkan untuk pegawai PPPK yang dilantik agar segera berkonsolidasi internal dengan pimpinan unit kerja penempatan, serta mampu bergerak dengan cepat berdasarkan tugas dan fungsinya untuk menyelesaikan permasalahan dan target kinerja yang telah ditetapkan sejak awal tahun pada unit kerja.</span></p><p class=\"selectable-text copyable-text iq0m558w g0rxnol2\" dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(97, 97, 97); text-align: justify;\"><span class=\"selectable-text copyable-text\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font: inherit; vertical-align: baseline;\"><a href=\"https://www.bkn.go.id/unggahan/2024/04/3.png\" style=\"color: rgb(38, 204, 212);\"></a></span></p><p class=\"selectable-text copyable-text iq0m558w g0rxnol2\" dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(97, 97, 97); text-align: justify;\"><span class=\"selectable-text copyable-text\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font: inherit; vertical-align: baseline;\">Pelantikan dan pengambilan sumpah jabatan dilakukan secara luring dan daring oleh 125 (seratus dua puluh lima) ASN BKN yang terdiri dari 119 (seratus sembilan belas) orang PPPK Tenaga Teknis Formasi Tahun 2023 dan 6 (enam) orang PNS yang diangkat dalam Jabatan Fungsional.</span></p>', 'app/blog/1712027521-4kXMO.png', '2024-04-01 20:12:01', '2024-04-01 20:12:01'),
('9c381e2c-3668-4b7a-9d99-79ede2cbd1bd', 'Suharto', 'Ketua KASN Ingatkan ASN Tak Mudik Demi Menekan Penyebaran Covid-19', '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Bupati Ketapang, Martin Rantan menghadiri peresmian pindah Kantor BKPSDM Kabupaten Ketapang yang terletak di Jalan Dr Sutomo nomor 66, pada Senin (06/05/2024).</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Pemindahan kantor yang dirangkai dengan acara ramah tamah dan tasyakuran tersebut tampak dihadiri sejumlah pejabat di lingkungan Pemkab Ketapang.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Pertama-tama, saya mengucapkan selamat atas peresmian kantor baru BKPSDM, semoga dengan suasana baru ini semangat bekerja dan memberikan pelayanan kepada ASN serta masyarakat semakin meningkat,” ucap Martin saat menyampaikan sambutan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Dirinya berharap, pihak BKPSDM dapat berkoordinasi dengan Dinas PUPR Ketapang terkait beberapa perbaikan infrastruktur yang dinilai masih kurang. Martin juga berharap, penempatan kantor baru itu mampu membawa semangat baru terhadap kinerja dan disiplin para pegawainya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Selain itu, Martin dalam kesempatan tersebut juga meminta kepada para kepala OPD yang hadir, agar memperhatikan disiplin dan kinerja jajaran ASN di lingkungan kerja mereka masing-masing.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Saya harap ASN diberikan pembinaan bagi yang masih kurang disiplin, yang masih nongkrong-nongkrong pada jam kerja menjadi tanggung jawab kepala OPD,” kata dia.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Martin menegaskan, kalau kepala OPD haruslah menjadi contoh bagi staf-stafnya, jika ada keluhan masyarakat terkait pelayanan publik, segera tindaklanjuti dan koordinasikan dengan instansi terkait.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Kita mesti menjaga citra dan wibawa pemerintah, jika ada yang menyampaikan informasi yang tidak benar terhadap pemerintah daerah ini, kepala OPD terkait harus segera meng-counter dengan menyampaikan informasi yang valid, baik melalui media sosial atau media massa,” ujarnya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Sementara itu, Kepala BKPSDM Ketapang, Sugiarto berharap, dengan merangkapnya posisi kantor BKPSDM dan gedung diklat, maka fasilitas-fasilitas yang dibutuhkan dapat segera direalisasikan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Mudah-mudahan, ini secara tempat cukup memadai, dan menjadi tempat yang nyaman untuk para ASN untuk berkoordinasi masalah kepegawaian,” katanya.</p>', 'app/blog/1719910100-hzZrE.jpg', '2024-07-02 08:48:52', '2024-07-02 01:48:52');

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
('9c6ca88b-3b08-4c39-b585-8587abb06372', 'Ifan Rifaldi', 'Politeknik Negeri Ketapang', 'Mengurus berkas magang', 'app/buku_tamu/1719904980-UalOx.png', '2024-07-02 00:23:01', '2024-07-02 00:23:01');

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
('9954aefe-29d3-469e-8857-ccc25bdd5780', 'Prokopim Ketapang', 'https://instagram.com/berkah_konveksi05?igshid=NTc4MTIwNjQ2YQ==', 'app/mitra/1710817546-X8uZ7.jpg', '2024-03-19 03:05:46', '2024-03-18 20:05:46'),
('9954af3e-5634-4227-83a7-ba834f8bdcd7', 'BKN RI', 'https://instagram.com/rumah_konveksikalbar?igshid=NTc4MTIwNjQ2YQ==', 'app/mitra/1710817570-5Gelv.jpg', '2024-06-13 07:17:53', '2024-06-13 00:17:53'),
('9c9f014d-fd45-493b-8b26-e650c284534a', 'Politap', 'www.politap.ac.id', 'app/mitra/1722067356-eBRMQ.png', '2024-07-27 01:02:36', '2024-07-27 01:02:36');

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
('9c6c6377-b565-4271-bc5b-6c9e48d2c215', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Udin Kamarudin b', '1990081720200410', '08512581105', 'Jl. Rahadi Usman', '1719893391-WEsrO.JPG', 'Dinas Pendidikan', 'Dinas Pariwisata budaya', '1719893391-0MEEy.pdf', '1719893391-otpGm.pdf', '1719893391-kipGd.pdf', '1719893391-yEB6S.pdf', '1719893391-4E6kt.pdf', '1719893391-NE5hR.pdf', '1719893391-IU7he.pdf', '1719893391-DVK5h.pdf', '1719893391-PkXjz.pdf', '1719893391-n1w1F.pdf', 'Ditolak', 'Berkas tidak sesuai', '2024-07-01 21:09:51', '2024-07-27 01:33:45'),
('9c6c6481-0a2c-4420-baa6-4443c99baf3e', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Sumarno', '199008172020034599', '0812546454545', 'Jl. Rahadi Ismail', '1719893565-Ep2Hb.JPG', 'Dinas Kominfo', 'Dinas Pemuda dan Olahraga', '1719893565-H4FZC.pdf', '1719893565-297GG.pdf', '1719893565-RuFFE.pdf', '1719893565-Mky2t.pdf', '1719893565-3HCby.pdf', '1719893565-2mtQW.pdf', '1719893565-Ln647.pdf', '1719893565-gS1m9.pdf', '1719893565-3JH4o.pdf', '1719893565-TndU9.pdf', 'Diproses', 'Belum Di Verifikasi', '2024-07-01 21:12:45', '2024-08-04 05:30:05');

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
('9c6c681b-3b36-41c9-bed6-3f504ad1cc27', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Agustinus', '199008172020048888', '0822234723075', 'Jl. Rahadi Ismail', '1719894170-SSE1g.JPG', 'Dinas Pendidikan', 'Dinas Pendidikan Provinsi', '1719894170-OTQ58.pdf', '1719894170-cjyT2.pdf', '1719894170-q11zG.pdf', '1719894170-0XmXR.pdf', '1719894170-l0CAy.pdf', '1719894170-tHdkI.pdf', '1719894170-rJb1u.pdf', '1719894170-jQeXu.pdf', '1719894170-HZhfH.pdf', '1719894170-QPR4Z.pdf', 'Diproses', 'Belum Di Verifikasi', '2024-07-01 21:22:50', '2024-08-04 05:38:56');

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
('9c6c6743-66d8-4cc0-b905-ca4cbf030cfb', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Leonardo', '199008172020046476', '0852874543646', 'Jl. Jend. Sudirman', '1719894028-Hwt2l.JPG', 'Dinas Kominfo Provinsi Riau', 'Dinas Kominfo Ketapang', '1719894028-jU00V.pdf', '1719894028-8GfC0.pdf', '1719894028-qzF4D.pdf', '1719894028-LKXHN.pdf', '1719894028-Ozez9.pdf', '1719894028-Y6aA4.pdf', '1719894028-TAj4R.pdf', '1719894028-Usmzn.pdf', 'Diproses', 'Belum Di Verifikasi', '2024-07-01 21:20:28', '2024-08-04 05:36:12');

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
('9c6c65d3-6997-41c4-a3ee-fde5a1a2c984', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Siti NurbayaR34', '199008172020012333', '0867347362478', 'Jl. Brigdjen Katamso', '1719893787-HCCeL.JPG', 'bkpsdm', 'SMPN 1 Ketapang', '1719893787-aUdht.pdf', '1719893787-aUUFh.pdf', '1719893787-t3BFa.pdf', '1719893787-x10Jp.pdf', '1719893787-YlYBa.pdf', '1719893787-qvwX6.pdf', '1719893787-T5uoi.pdf', '1719893787-0mU03.pdf', '1719893787-Cn2og.pdf', '1719893787-Uol0K.pdf', '1719893787-iKe0A.pdf', 'Diproses', 'Belum Di Verifikasi', '2024-07-01 21:16:27', '2024-08-04 05:32:51');

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
('9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Bejo', '123456789123456789', 'Laki-Laki', '0822222222', 'sugiarto4@gmail.com', 'app/pegawai/1719896101-qTh6t.jpg', '$2y$10$pf8PkGHNsgP.ORgjFtU/HeRvmEVGdzcE5QpqtisRHxy93e4ukhGAi', '2024-08-04 12:23:04', '2024-08-04 05:23:04'),
('9c97865f-9829-4d86-bd31-ba44d4b2e66c', 'Marpuah', '112233445511223344', 'Perempuan', '08234354', 'marpuah@gmail.com', 'app/pegawai/1721746083-HUEpE.png', '$2y$10$2bnM5MdSTkkXHo3G1B6SXeFBZmIeJ1ocPR6rxq3y/hTKlzvTz.ilW', '2024-08-04 12:46:38', '2024-08-04 05:46:38'),
('9c9bb1fc-2203-40cc-b183-02339b587635', 'ifan rd', '888888888888888888', 'Laki-laki', '082343543212', 'ifanrifaldi@gmai.com', 'app/pegawai/1721925199-r6Tk7.png', '$2y$10$w6hB/gQKEzfyLpQv4m1DF.iZ4f.d.QHq2A9Ck.tnVRbvj/15rtfV2', '2024-07-25 09:33:19', '2024-07-25 09:33:19'),
('9c9f2981-ddab-43af-ad70-622dd316c9d3', 'ifan rifaldi', '198511142005022001', 'Laki-laki', '089512581105', 'sugiarto4@gmail.com', 'app/pegawai/1722074101-jQFA2.png', '$2y$10$K4VIhnmBfG25KDQ5JUUur.Wefj2NMNhplnlFRYgCYAZsSpwXfgVDG', '2024-07-27 02:55:01', '2024-07-27 02:55:01'),
('9caf84e1-7df5-48ab-90a6-aac5e37e01db', 'BKN RII', '435344444444445656', 'Laki-laki', '085454', 'xdfewefff.c@dwqd', 'app/pegawai/1722776625-sMsuK.jpg', '$2y$10$cu3qKsd/w/aNJBF4RJNVyuOOhMFK/LHebSUoujFPKhqlbqf/1L.HS', '2024-08-04 06:03:45', '2024-08-04 06:03:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jenis_pengaduan` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `bukti` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `jenis_pengaduan`, `keterangan`, `bukti`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('9c6c6fba-54db-4279-8319-4ce49131f756', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'IFAN RIFALDI', '123456789123456789', '089512581105', 'Masalah Sistem', 'Ada bug di bagian pengajuan mutasi instansi', '1719895448-RKleK.png', 'Sudah Dilihat', 'Terimakasih Sudah Melapor', '2024-07-23 14:50:08', '2024-07-23 07:50:08'),
('9c6c7143-8d40-4c5d-bb20-327b1087e887', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'IFAN RIFALDI', '123456789123456789', '089512581105', 'Masalah Pelayanan', 'Kurangnya penjelasan tentang cara mengajukan pensiun', '1719895706-S3s47.pdf', 'Sudah Dilihat', 'Terimakasih Sudah Melapor', '2024-07-02 08:01:12', '2024-07-02 08:01:12'),
('9ca0e8dd-26dc-4c43-b509-603cb6b0b998', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Bejo', '123456789123456789', '089512581105', 'Masalah Sistem', 'bug', '1722149155-CHAi7.pdf', 'Belum Dilihat', NULL, '2024-07-27 23:45:55', '2024-07-27 23:45:55');

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
('9c6c6c74-8e82-4d20-9585-2e6075111076', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Juliansyah', '199008172020035645', '0822345464545', 'Jl. Brigdjen Katamso', '1719894899-EmsmN.JPG', '1719894899-p3mqL.pdf', '1719894899-ObHR8.pdf', '1719894899-ty3MZ.pdf', '1719894899-qFQRe.pdf', '1719894899-J4ZlP.pdf', '1719894899-93rQw.pdf', '1719894899-QdALN.pdf', '1719894899-YQjzm.pdf', '1719894899-85K0L.pdf', '1719894899-uahnN.pdf', '1719894899-SVurS.pdf', '1719894899-JeFOZ.pdf', '1719894899-GyCDa.pdf', '1719894899-wDIl9.pdf', '1719894899-7Gbaw.pdf', '1719894899-cLcfg.pdf', '1719894899-d3bgv.pdf', '1719894899-drNWm.pdf', '1719894899-vWEGb.pdf', '1719894899-kWJzB.pdf', '1719894899-TC9eg.pdf', '1719894899-Jn2iZ.pdf', '1719894899-cAqPA.pdf', '1719894899-Pe4Wd.pdf', '1719894899-RFNbO.pdf', '1719894899-LgotL.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Janda/Duda/Yatim', '2024-07-01 21:34:59', '2024-08-04 05:45:35');

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
('9c6c6a12-8e89-4da1-80af-10555bec1c56', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Subarjo', '199008172020044354', '0853213414242', 'Jl. Rahadi Usman', '1719894499-BKwt2.JPG', '1719894499-DkZrp.pdf', '1719894499-Ci3yS.pdf', '1719894499-uY7Wp.pdf', '1719894499-iIz1L.pdf', '1719894499-sb1QA.pdf', '1719894499-SFafX.pdf', '1719894499-pMZnV.pdf', '1719894499-4U3sj.pdf', '1719894499-063PO.pdf', '1719894499-8sfca.pdf', '1719894499-T0mkZ.pdf', '1719894499-rmElC.pdf', '1719894499-3wT2L.pdf', '1719894499-w7RMW.pdf', '1719894499-RQaGT.pdf', '1719894499-asfv6.pdf', '1719894499-Mn8ZN.pdf', '1719894499-146Z7.pdf', '1719894499-Y3aZV.pdf', '1719894499-h7D1t.pdf', '1719894499-5I8SJ.pdf', '1719894499-aIboF.pdf', '1719894499-kGNl5.pdf', '1719894499-Tk3am.pdf', '1719894500-BUXgX.pdf', 'Diproses', 'Belum Di Verifikasi', 'Pensiun Dini', '2024-07-01 21:28:20', '2024-08-04 05:42:14');

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
  `profil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `profil`, `created_at`, `updated_at`) VALUES
('9c466628-936d-4cc7-b629-0264a51e8e17', '1718261755-RYZJc.png', '2024-06-12 23:55:55', '2024-06-12 23:55:55');

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
('9b97672d-58e8-4c17-8723-2d556010aa92', '1723036838-BiG5Q.pdf', '1723036838-tjMCl.pdf', '1723036838-2aqyZ.pdf', '1723036838-t0VgQ.pdf', '1710745733-tIl8I.pdf', '1710745733-CMC4M.pdf', '2024-08-07 13:20:38', '2024-08-07 06:20:38');

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
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
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
