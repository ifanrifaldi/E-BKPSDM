-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Agu 2024 pada 15.58
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
-- Database: `tugasakhir`
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
('99419863-4c57-4abd-9727-60233f8f53db', 'AdminKite', 'adminkite', '$2y$10$IzTJwRPRlD7qsBDLWEqg8OIONc0DOrzN7oX9oJ9TMe6j8RTvVqgi2', 'app/data-admin/1721560141-zgJo6.jpg', '2024-08-09 15:34:33', '2024-08-09 08:34:33'),
('9c1480a7-7227-4897-b768-cdea2489e72c', 'Ifan Rifaldi', 'ifanrifaldi', '$2y$10$wZ1OXQVauRbSyX6YIOG.GOsXFzUrVvcs7Rh0699eBZtUTKFxZS5mS', 'app/data-admin/1723217608-O7PWT.jpg', '2024-08-09 15:33:28', '2024-08-09 08:33:28');

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
('9cb9d1db-f024-4ddd-82ce-ff66aec298ce', '9cb9d139-377f-4738-8c51-fd1bb7002695', '9cb9d1b2-8cb7-404a-b05b-f920e9816862', 'AdminKite', 'Terimakasih', 2, '2024-08-09 08:57:17', '2024-08-09 08:57:17');

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
('9c381e2c-3668-4b7a-9d99-79ede2cbd1bd', 'Suharto', 'Ketua KASN Ingatkan ASN Tak Mudik Demi Menekan Penyebaran Covid-19', '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Bupati Ketapang, Martin Rantan menghadiri peresmian pindah Kantor BKPSDM Kabupaten Ketapang yang terletak di Jalan Dr Sutomo nomor 66, pada Senin (06/05/2024).</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Pemindahan kantor yang dirangkai dengan acara ramah tamah dan tasyakuran tersebut tampak dihadiri sejumlah pejabat di lingkungan Pemkab Ketapang.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Pertama-tama, saya mengucapkan selamat atas peresmian kantor baru BKPSDM, semoga dengan suasana baru ini semangat bekerja dan memberikan pelayanan kepada ASN serta masyarakat semakin meningkat,” ucap Martin saat menyampaikan sambutan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Dirinya berharap, pihak BKPSDM dapat berkoordinasi dengan Dinas PUPR Ketapang terkait beberapa perbaikan infrastruktur yang dinilai masih kurang. Martin juga berharap, penempatan kantor baru itu mampu membawa semangat baru terhadap kinerja dan disiplin para pegawainya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Selain itu, Martin dalam kesempatan tersebut juga meminta kepada para kepala OPD yang hadir, agar memperhatikan disiplin dan kinerja jajaran ASN di lingkungan kerja mereka masing-masing.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Saya harap ASN diberikan pembinaan bagi yang masih kurang disiplin, yang masih nongkrong-nongkrong pada jam kerja menjadi tanggung jawab kepala OPD,” kata dia.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Martin menegaskan, kalau kepala OPD haruslah menjadi contoh bagi staf-stafnya, jika ada keluhan masyarakat terkait pelayanan publik, segera tindaklanjuti dan koordinasikan dengan instansi terkait.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Kita mesti menjaga citra dan wibawa pemerintah, jika ada yang menyampaikan informasi yang tidak benar terhadap pemerintah daerah ini, kepala OPD terkait harus segera meng-counter dengan menyampaikan informasi yang valid, baik melalui media sosial atau media massa,” ujarnya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Sementara itu, Kepala BKPSDM Ketapang, Sugiarto berharap, dengan merangkapnya posisi kantor BKPSDM dan gedung diklat, maka fasilitas-fasilitas yang dibutuhkan dapat segera direalisasikan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Fira Sans&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">“Mudah-mudahan, ini secara tempat cukup memadai, dan menjadi tempat yang nyaman untuk para ASN untuk berkoordinasi masalah kepegawaian,” katanya.</p>', 'app/blog/1719910100-hzZrE.jpg', '2024-07-02 08:48:52', '2024-07-02 01:48:52'),
('9cb9ce6d-75c9-41a9-aef8-2e85e0a7fa57', 'Nirwana', 'Ketapang Rekrut 800 CPNS dan PPPK Tahun 2024', '<p style=\"margin-bottom: 1.3rem; color: rgb(26, 26, 26); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 17.6px;\">&nbsp;Pemerintah Kabupaten Ketapang bakal merekrut Calon Pegawai Negeri Sipil (CPNS) dan Pegawai Pemerintah dengan Perjanjian Kerja (PPPK) pada tahun 2024 sebanyak 800 orang.</p><p style=\"margin-bottom: 1.3rem; color: rgb(26, 26, 26); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 17.6px;\">Kepala Bidang Pengadaan dan Mutasi ASN, Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM) Kabupaten Ketapang, Eko Cahyono memaparkan, dari total 800 formasi tersebut, 150 orang dikhususkan untuk CPNS dan 650 orang untuk kebutuhan PPPK.</p><p style=\"margin-bottom: 1.3rem; color: rgb(26, 26, 26); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 17.6px;\">“Nah untuk gurunya ini sebanyak 167, teknisnya 106 CPNS, 201 PPPK, total guru, Nakses dan teknis 800 orang” papar Eko saat dikonfirmasi Senin (20/5/2024).</p>', 'app/blog/1723218461-luMIn.jpg', '2024-08-09 08:47:41', '2024-08-09 08:47:41'),
('9cb9cfae-92b7-460c-846a-bcfe150a2ac4', 'Juneo', 'Kompak, Bupati Dan Wakil Bupati Hadiri Syukuran Pindah Kantor BKPSDM Ketapang', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Bupati Ketapang, Martin Rantan bersama wakilnya Farhan, kompak menghadiri ramah tamah dan syukuran pindah Kantor BKPSDM Kabupaten Ketapang, yang berlokasi di Jalan Dr Sutomo nomor 65, pada Senin (06/05/2024).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Turut hadir juga mendampingi Bupati dan Wakil Bupati Ketapang, Ketua PKK Ketapang, Elisabeth Betty Martin dan Wakil Ketua PKK Ketapang, Ervina Masitha Farhan, para kepala OPD, instansi vertikal, staf di lingkungan Pemda Ketapang dan lainnya.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">“Pertama-tama, Saya mengucapkan selamat atas peresmian kantor baru BKPSDM, semoga dengan suasana baru ini, semangat bekerja dan memberikan pelayanan kepada ASN serta masyarakat semakin meningkat,” ucap Bupati Martin saat menyampaikan sambutannya.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Walaupun masih banyak kekurangan, ia meminta agar infrastruktur yang kurang tersebut dapat segera diperbaiki dengan berkoordinasi dengan Dinas PU Ketapang.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Selain itu, Bupati Martin berpesan kepada kepala OPD yang hadir, agar memperhatikan disiplin dan kinerja ASN di lingkungan kerjanya.</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial; width: 517.438px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-6227233062377995\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"display: block; margin: auto; background-color: transparent; height: 0px;\"><div id=\"aswift_2_host\" style=\"border: none; height: 0px; width: 517px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"517\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-6227233062377995&amp;output=html&amp;h=280&amp;adk=56412737&amp;adf=3260875046&amp;pi=t.aa~a.2714080555~i.8~rp.4&amp;w=517&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1723203464&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=3344590227&amp;ad_type=text_image&amp;format=517x280&amp;url=https%3A%2F%2Fkalbaronline.com%2F2024%2F05%2F07%2Fkompak-bupati-dan-wakil-bupati-hadiri-syukuran-pindah-kantor-bkpsdm-ketapang%2F&amp;fwr=0&amp;pra=3&amp;rh=130&amp;rw=517&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTUuMC4wIiwieDg2IiwiIiwiMTI3LjAuNjUzMy4xMDAiLG51bGwsMCxudWxsLCI2NCIsW1siTm90KUE7QnJhbmQiLCI5OS4wLjAuMCJdLFsiR29vZ2xlIENocm9tZSIsIjEyNy4wLjY1MzMuMTAwIl0sWyJDaHJvbWl1bSIsIjEyNy4wLjY1MzMuMTAwIl1dLDBd&amp;dt=1723218518686&amp;bpp=1&amp;bdt=934&amp;idt=-M&amp;shv=r20240807&amp;mjsv=m202408060101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3De2f4651324d7a9a6%3AT%3D1717246022%3ART%3D1723218520%3AS%3DALNI_MZLOixo92Ulpx1RkFFhPtTGJweaxg&amp;gpic=UID%3D00000e3ad7018b5a%3AT%3D1717246023%3ART%3D1723218520%3AS%3DALNI_MZhIEV-oecVb27_NAdPy_WK1tWkBg&amp;eo_id_str=ID%3Dacbe22faf8d72a55%3AT%3D1717246023%3ART%3D1723218520%3AS%3DAA-AfjYXtJv_xpoh1bDa7C_t7699&amp;prev_fmts=0x0%2C300x600&amp;nras=2&amp;correlator=1339804916907&amp;frm=20&amp;pv=1&amp;u_tz=420&amp;u_his=4&amp;u_h=768&amp;u_w=1366&amp;u_ah=720&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=214&amp;ady=2221&amp;biw=1349&amp;bih=599&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C44795922%2C95334527%2C95334829%2C95337868%2C95339648%2C95338263%2C95336266%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=191858334519526&amp;tmod=2001658492&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C720%2C1366%2C599&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;tdf=2&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=141\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CKTZ16Wh6IcDFahHnQkdrM87Lw\" data-load-complete=\"true\" style=\"max-width: 100%; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 517px; height: 0px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">“Saya harap ASN diberikan pembinaan bagi yang masih kurang disiplin, yang masih nongkrong nongkrong pada jam kerja menjadi tanggung jawab kepala OPD,” tegasnya.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Dirinya juga menegaskan, agar kepala OPD harus menjadi contoh bagi stafnya, jika ada keluhan masyarakat terkait pelayanan publik segera tindak lanjuti dan koordinasikan dengan instansi terkait.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">“Kita mesti menjaga citra dan wibawa Pemerintah, jika ada yang menyampaikan informasi yang tidak benar terhadap Pemerintah daerah ini, kepala OPD terkait harus segera meng-counter dengan menyampaikan informasi yang valid baik melalui media sosial atau media massa,” ujarnya.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">Sementara itu, Kepala BKPSDM, Sugiarto berharap dengan merangkapnya kantor BKPSDM dan gedung diklat, fasilitas-fasilitas yang dibutuhkannya dapat terlaksana dan terealisasi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Noto Sans&quot;, Helvetica, Arial;\">“Mudah-mudahan ini secara tempat cukup memadai, dan menjadi tempat yang nyaman&nbsp; untuk para ASN untuk berkoordinasi masalah kepegawaian,” pungkasnya.</p>', 'app/blog/1723218672-4iORy.jpg', '2024-08-09 08:51:12', '2024-08-09 08:51:12'),
('9cb9d139-377f-4738-8c51-fd1bb7002695', 'Ifdal', 'Kepala BKSDM Kabupaten Ketapang Ajak Masyarakat Daftar PPPK', '<p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Kepala&nbsp;Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (<a href=\"https://pontianakpost.jawapos.com/tag/bkpsdm\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; color: rgb(195, 0, 0); vertical-align: top; outline: 0px; transition: 0.2s; text-decoration: inherit; position: relative;\">BKPSDM</a>) Kabupaten Ketapang, Sugiarto, mengatakan, secara resmi pembukaan pendaftaran untuk Pegawain Pemerintah dengan Perjanjian Kerja (<a href=\"https://pontianakpost.jawapos.com/tag/pppk\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; color: rgb(195, 0, 0); vertical-align: top; outline: 0px; transition: 0.2s; text-decoration: inherit; position: relative;\">PPPK</a>) tahun 2023.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Diharapkan dia, masyarakat bisa mendaftar dan bisa mengisi&nbsp;<a href=\"https://pontianakpost.jawapos.com/tag/formasi\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; color: rgb(195, 0, 0); vertical-align: top; outline: 0px; transition: 0.2s; text-decoration: inherit; position: relative;\">formasi</a>-formasi yang telah disediakan.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Dia menjelaskan, Pemerintah Kabupaten (Pemkab) Ketapang membuka pendaftaran PPPK dengan jumlah 999 formasi. Angka tersebut, menurutnya, terdiri dari tenaga guru sebanyak 593 orang, tenaga kesehatan (305 orang), dan tenaga teknis sebanyak, 101 formasi.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Menurutnya, pembukaan penerimaan PPPK ini sebagai upaya untuk memenuhi kebutuhan pegawai di lingkungan Pemkab, termasuk untuk pegawai di kecamatan.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\"><center style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000;\"><div class=\"ads mt3 clearfix\" style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; position: relative; margin-top: 30px;\"></div></center></p><p style=\"box-sizing: border-box; border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">“Pembukaan PPPK ini juga untuk mengakomodir dari 6.734 tenaga kontrak di lingkungan Pemerintahan Kabupaten Ketapang,” jelasnya.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Sugiarto mengungkapkan, dari 6.734 yang dikirim datanya ke Badan Kepegawaian Nasional (BKN), yang bisa diterima BKN itu hanya 5.047.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">“Sesuai aplikasi, artinya yang masuk BKN tersebut berpeluang untuk dapat mengikuti PPPK dan PNS. Sisanya akan kami petakan dengan kebijakan Bupati Ketapang akan ditampung dengan tenaga&nbsp;<em style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000;\">outsourcing</em>,” ungkapnya.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">Dia juga berharap, formasi yang telah disediakan untuk PPPK ini diharapkan bisa terisi semuanya. Masyarakat, termasuk tenaga kontrak yang memenuhi syarat diharapkan dia untuk mendaftarkan diri.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; margin: 17px 0px; color: rgb(20, 20, 43); font-family: Poppins, sans-serif;\">“Kita berharap agar formasi yang tersedia ini bisa terisi penuh. Sayang jika tidak terpenuhi,” harapnya.</p>', 'app/blog/1723218967-nWRtq.webp', '2024-08-09 15:56:07', '2024-08-09 08:56:07');

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
('9c6ca88b-3b08-4c39-b585-8587abb06372', 'Ifan Rifaldi', 'Politeknik Negeri Ketapang', 'Mengurus berkas magang', 'app/buku_tamu/1719904980-UalOx.png', '2024-07-02 00:23:01', '2024-07-02 00:23:01'),
('9cbb19e6-9e31-46bc-9e78-85c6d9797dca', 'IFAN RIFALDI', 'politap', 'Ijin magang', 'app/buku_tamu/1723274073-0VEY2.png', '2024-08-10 00:14:33', '2024-08-10 00:14:33');

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
('9cb9d1b2-8cb7-404a-b05b-f920e9816862', '9cb9d139-377f-4738-8c51-fd1bb7002695', 'Sahroni', 'sahroni@gmail.com', 'Mantapppppp', 1, '2024-08-09 08:56:50', '2024-08-09 08:56:50'),
('9cbb1a4e-0c26-461d-9aec-ee6276efe7d8', '9cb9d139-377f-4738-8c51-fd1bb7002695', 'Ifan', 'ifandqw@gmail.com', 'siap min', 1, '2024-08-10 00:15:41', '2024-08-10 00:15:41');

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
('9c9f014d-fd45-493b-8b26-e650c284534a', 'Politap', 'www.politap.ac.id', 'app/mitra/1722067356-eBRMQ.png', '2024-07-27 01:02:36', '2024-07-27 01:02:36'),
('9cb9ca13-004d-492d-aec6-db54ce8696c7', 'Pemda Ketapang', 'www.ketapangkab.go.id', 'app/mitra/1723217731-Z0lQo.png', '2024-08-09 08:35:31', '2024-08-09 08:35:31');

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
  `v1` int(5) DEFAULT NULL,
  `v2` int(5) DEFAULT NULL,
  `v3` int(5) DEFAULT NULL,
  `v4` int(5) DEFAULT NULL,
  `v5` int(5) DEFAULT NULL,
  `v6` int(5) DEFAULT NULL,
  `v7` int(5) DEFAULT NULL,
  `v8` int(5) DEFAULT NULL,
  `v9` int(5) DEFAULT NULL,
  `v10` int(5) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_instansi`
--

INSERT INTO `mutasi_instansi` (`id`, `id_pegawai`, `nama`, `nip`, `no_hp`, `alamat`, `foto`, `asal`, `tujuan`, `sum`, `spm`, `spp`, `spdi`, `spstmtb`, `skjt`, `sk_pns`, `skp`, `skbt`, `alasan`, `status`, `pesan`, `created_at`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `v8`, `v9`, `v10`, `updated_at`) VALUES
('9c6c6377-b565-4271-bc5b-6c9e48d2c215', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Udin Kamarudin', '199008172020041032', '08512581105', 'Jl. Rahadi Usman', '1719893391-WEsrO.JPG', 'Dinas Pendidikan', 'Dinas Pariwisata budaya', '1719893391-0MEEy.pdf', '1719893391-otpGm.pdf', '1719893391-kipGd.pdf', '1719893391-yEB6S.pdf', '1719893391-4E6kt.pdf', '1719893391-NE5hR.pdf', '1719893391-IU7he.pdf', '1719893391-DVK5h.pdf', '1719893391-PkXjz.pdf', NULL, 'Diproses', 'Pengajuan sedang di proses', '2024-07-01 21:09:51', 2, 2, 1, 2, 1, 1, 1, 1, 1, 1, '2024-08-13 20:51:16'),
('9cc7d21b-6035-496e-98c7-99593f683893', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', NULL, NULL, NULL, NULL, 'Dinas Kominfo Ketpang', NULL, '1723820948-X0ERP.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Draft', 'Lengkapi Berkas', '2024-08-16 07:59:34', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-08-16 08:09:08'),
('9cc9f05b-8410-4de1-9c54-872dae48bbd1', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', NULL, NULL, NULL, NULL, 'Dinas PUPR Ketapang', NULL, '1723911355-DK9Lu.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Draft', 'Lengkapi Berkas', '2024-08-17 09:15:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-08-17 09:15:55'),
('9cc9f0a6-8dc1-4fd4-8959-454452d93638', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', NULL, NULL, NULL, NULL, 'Dinas Pertanian Kabupaten Ketapang', '1723989774-JXv5q.pdf', '1723990198-nJLnA.pdf', '1723989762-IftOX.pdf', '1723990156-WCtgr.pdf', '1723990136-Pbbq6.pdf', '1723990162-ML2kv.pdf', '1723990143-yk8Hl.pdf', '1723990168-OYJXI.pdf', '1723990149-eIYHx.pdf', '1723995313-I6z2f.pdf', 'Diterima', 'Berkas sesuai', '2024-08-17 09:16:38', 1, 2, 1, 2, 2, 1, 0, 0, 0, 0, '2024-08-18 08:52:51'),
('9cccf265-7f32-4afb-861e-ef576c4cafbd', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', NULL, NULL, NULL, NULL, 'Dinas Pemuda dan Olahraga Ketapang', '1724040623-Gnopl.pdf', '1724040552-iPmdQ.pdf', '1724040588-Lu47T.pdf', '1724040630-6R3JP.pdf', '1724040595-I3cvP.pdf', '1724040639-8IYQH.pdf', '1724040604-PXjw7.pdf', '1724040647-uMYIw.pdf', '1724040614-gs6IU.pdf', '1724040670-wI3h2.pdf', 'Direvisi', 'Berkas pengajuan di revisi', '2024-08-18 21:09:00', 1, 1, 1, 1, 1, 1, 2, 2, 1, 1, '2024-08-18 21:20:39'),
('9cd35841-e384-4b6c-90eb-2ede32d26a0d', '9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', NULL, NULL, NULL, NULL, 'Dinas Kominfo Ketpang', NULL, '1724315340-Gr9Un.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Draft', 'Lengkapi Berkas', '2024-08-22 01:28:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2024-08-22 01:29:00');

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
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `tahun_lulus` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `eselon` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `masa_kerja` varchar(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `email`, `foto`, `password`, `tanggal_lahir`, `tempat_lahir`, `agama`, `alamat`, `pendidikan_terakhir`, `tahun_lulus`, `unit_kerja`, `jabatan`, `eselon`, `golongan`, `masa_kerja`, `created_at`, `updated_at`) VALUES
('9cbff9cb-1823-4d2d-9a33-a7d583020ce1', 'Nunung Simanjutak', '978979687567456745', 'Perempuan', '08222222222', 'nunung@gmail.com', 'app/pegawai/1723483435-dYpgG.png', '$2y$10$1Dg2N2L32cxWfmy0GC1hJO9ITX13OYSntK4NB20zOJ57NTyCkOx82', '1990-08-04', 'Kristen', 'Islam', 'Jl. Brigdjen Katamso', 'S2-Ilmu Sosial', '2020', 'Dinas Pemuda Dan Olahraga', 'Kepala Bidang', 'IV A', 'IIId', '10 Tahun', '2024-08-12 18:19:15', '2024-08-12 18:19:15'),
('9cc003c3-ae76-41ce-bff0-ad0f4901b258', 'Budiman', '123456789012345678', 'Laki-laki', '0840037569854', 'budiskuy@gmail.com', 'app/pegawai/1723485108-s6kqY.png', '$2y$10$jmXQPFvKkwM5wEIvs6L.SeMlFAXDQRh.zq36Ztp1kTuc/GjBT4LRa', '1995-09-07', 'Islam', 'Islam', 'Jl. Rahadi Usman', 'S2-Ilmu Sosial', '2017', 'Dinas Pemuda Dan Olahraga', 'Kepala Bidang', 'III A', 'IIId', '10 Tahun', '2024-08-12 18:19:06', '2024-08-12 18:19:06');

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
('9c6c6a12-8e89-4da1-80af-10555bec1c56', '9c13ee8a-296d-4397-8ec5-5fc3ba02890c', 'Subarjo', '199008172020044354', '0853213414242', 'Jl. Rahadi Usman', '1719894499-BKwt2.JPG', '1719894499-DkZrp.pdf', '1719894499-Ci3yS.pdf', '1719894499-uY7Wp.pdf', '1719894499-iIz1L.pdf', '1719894499-sb1QA.pdf', '1719894499-SFafX.pdf', '1719894499-pMZnV.pdf', '1719894499-4U3sj.pdf', '1719894499-063PO.pdf', '1719894499-8sfca.pdf', '1719894499-T0mkZ.pdf', '1719894499-rmElC.pdf', '1719894499-3wT2L.pdf', '1719894499-w7RMW.pdf', '1719894499-RQaGT.pdf', '1719894499-asfv6.pdf', '1719894499-Mn8ZN.pdf', '1719894499-146Z7.pdf', '1719894499-Y3aZV.pdf', '1719894499-h7D1t.pdf', '1719894499-5I8SJ.pdf', '1719894499-aIboF.pdf', '1719894499-kGNl5.pdf', '1719894499-Tk3am.pdf', '1719894500-BUXgX.pdf', 'Diterima', 'pensiun diterima', 'Pensiun Dini', '2024-07-01 21:28:20', '2024-08-10 01:57:59');

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
('9b97672d-58e8-4c17-8723-2d556010aa92', '1723036838-BiG5Q.pdf', '1723036838-tjMCl.pdf', '1723036838-2aqyZ.pdf', '1723036838-t0VgQ.pdf', '1723269071-UsaeN.pdf', '1723268418-82FRW.jpg', '2024-08-10 05:51:11', '2024-08-09 22:51:11');

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
