-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2014 at 08:34 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cahyo_ska`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug_articles` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `img_header` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_articles` (`slug_articles`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug_articles`, `date`, `time`, `img_header`, `content`, `category`, `status`) VALUES
(1, 'Gangnam Style Pecahkan Rekor 2 Miliar di YouTube', 'gangnam-style-pecahkan-rekor-2-miliar-di-youtube', '2014-06-02', '07:06:04', '166472422.jpg', '<p style="text-align:justify"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Nama Psy sontak mendunia, tak lama setelah video klip &#39;Gangnam Style&#39; meramaikan YouTube sekitar dua tahun lalu. Meski sudah cukup lama, antusiasme pemirsa YouTube masih terus bertambah, hingga videonya memecahkan rekor baru di tahun ini.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Saat kemunculannya, dunia seolah teracuni oleh gaya menari ala menunggang kuda, pakaian&nbsp;</span><em>colorful</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">, setelan jas plus kacamata hitam ala Psy, dan tentu saja potongan lirik lagunya:&nbsp;</span><em>&quot;hey, sexy lady!&quot;</em><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Apapun penyebabnya yang membuat orang masih senang melihatnya di YouTube, yang jelas video ini baru saja mencatat rekor 2 miliar view. Rekor ini didapatkannya kurang dari dua tahun sejak video tersebut di-</span><em>upload</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;ke YoTube.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Sebagai penghargaan, seperti&nbsp;</span><strong>detikiNET&nbsp;</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">kutip dari&nbsp;</span><em>Daily Mail,</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;Senin (2/6/2014), YouTube merayakan pencapaian ini dengan menampilkan animasi Psy menari Gangnam Style.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Dua miliar view, ini adalah suatu kehormatan sekaligus sedikit beban bagi saya. Dengan apresiasi demikian tinggi, saya akan berjanji akan kembali secepatnya dengan menghadirkan konten yang lebih menyenangkan!,&quot; ujar Psy saat dimintai tanggapan.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Gangnam Style menjadi video tersukses menarik minat audiens untuk mengunjungi YouTube. Pada 2012, Google merayakan satu miliar view pertamanya karena video ini.</span></p>\r\n', 'news-events', 'Y'),
(2, 'iPhone dkk Tak Cuma Masuk ''Pasar Gelap'' di Iran', 'iphone-dkk-tak-cuma-masuk-pasar-gelap-di-iran', '2014-06-02', '07:06:24', '135337_img2013061101838.jpg', '<p style="text-align:justify"><strong>Teheran</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Apple merambah &#39;jajahannya&#39; memasuki pasar Iran. Kini, konsumen di Iran tak lagi sembunyi-sembunyi membeli gadget Apple. Untuk pertama kalinya,&nbsp;</span><em>reseller</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;resmi produk Apple dibuka di negara ini.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Sebelumnya, produk Apple hanya bisa dibeli melalui black market alias secara tak resmi. Pasalnya, Apple memang tak punya&nbsp;</span><em>official reseller</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;di negara tersebut sebagai dampak blokir ekspor ke Iran oleh pemerintah Amerika Serikat.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Beberapa media setempat melaporkan, Vaghaye Gostar Fars kini mendapatkan izin dari pihak berwenang untuk mengimpor perangkat Apple dan menjualnya secara terbuka.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Namun seperti&nbsp;</span><strong>detikINET</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;kutip</span><em>&nbsp;Cellular-news,</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;Senin (2/6/2014), tidak dijelaskan apakah&nbsp;</span><em>reseller</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;ini punya hubungan komersial dengan Apple, atau membelinya melalui distributor pihak ketiga.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Mei silam, pemerintah AS mulai melonggarkan larangan ekspor elektronik ke Iran. Apple pun merevisi sejumlah informasi di websitenya berkaitan dengan kondisi bisnis ini, namun belum ada tindakan lebih lanjut. Tidak ada indikasi bahwa Apple akan membuka Apple Store di Iran.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Ada cerita kurang mengenakkan berkaitan dengan larangan ekspor ini. Pada 2012 silam, Apple dikabarkan bertindak diskriminatif terhadap konsumen asal Iran bernama Sarah Sabet.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Diwawancarai TV WSB-TV, mahasiswi University of Georgia ini mengunjungi Apple Store terdekat dari tempat tinggalnya bersama seorang teman. Mendengar Sarah dan temannya berbicara dalam bahasa Persia, karyawan Apple Store bertanya, bahasa apa yang mereka gunakan? dari mana asal mereka dan dimana gadget tersebut akan digunakan?</span></p>\r\n', 'news-events', 'Y'),
(3, 'Liquid Leap, Wearable Gadget Pertama dari Acer', 'liquid-leap-wearable-gadget-pertama-dari-acer', '2014-06-02', '07:06:43', 'liquidleapfamily.jpg', '<p style="text-align:justify"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Acer sebelumnya sudah pernah mengemukakan rencananya terjun di pasar wearable gadget. Kini, saatnya wearable gadget pertamanya mulai unjuk gigi.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Di ajang Computex 2014, Acer memamerkan Liquid Leap. Gelang digital ini kabarnya akan dikapalkan bersama smartphone terbaru Acer Liquid Jade Android mulai kuartal ketiga.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Liquid Leap tampak lebih mirip seperti fitness tracker ketimbang smartwatch. Acer sendiri memang mengatakan bahwa perangkatnya ini berfungsi untuk mencatat aktivitas si pengguna, antara lain berapa langkah kaki dalam sehari, jarak berlari, jumlah kalori yang terbakar dan siklus tidur.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Fitur tambahan yang mungkin tidak ada pada fitness tracker pada umumnya mungkin adalah fungsi notifikasi panggilan masuk dan SMS, kontrol musik yang biasanya ada di smartwatch.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Seperti dikutip dari&nbsp;</span><em>Ubergizmo,</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;Minggu (1/6/2014), perangkat tahan air ini akan hadir dengan lima pilihan warna, yakni Moonstone White, Mineral Black, Aquamarine, Fragrant Pink dan Vivid Orange.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Mengingat Acer tak terlalu sukses di pasar mobile device, wearable gadget yang satu ini mungkin akan membantunya bersinar. Apalagi jika benar Acer berniat membuatnya satu paket penjualan dengan smartphonenya.</span></p>\r\n', 'news-events', 'Y'),
(4, 'K-Touch Terjun ke Perang Android Octa Core', 'k-touch-terjun-ke-perang-android-octa-core', '2014-06-02', '02:06:22', 'ktouchocta460.jpg', '<p style="text-align: justify;"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Persaingan di kancah ponsel Android yang mengusung prosesor 8 inti alias octa core semakin seru. Pemain baru di segmen ini berasal dari China, K-Touch.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Nama K-Touch memang tak setenar Samsung, HTC, ataupun Sony, Namun mereka berani mengklaim sebagai ponsel Tiongkok pertama yang mampu meluncurkan ponsel Android Quad Core murah lewat K-Touch Octa dengan harga Rp 3.499.000.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Terlebih, proseor octa core yang tertanam di perangkat ini diklaim murni, bukan sekadar quad core dikalikan dua.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Ponsel yang di negeri asalnya dikenal dengan nama K-Touch Nibiru Mars One H1 ini berdesain cukup tipis dengan bobot 140 gram.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Prosesor octa core-nya memiliki kecepatan 1,7 GHz dan didukung oleh kapasitas RAM 2 GB serta ROM 16 GB.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Di sektor pengolahan grafis, tersemat Mali-450MP sebagai GPU-nya. Fitur penunjang yang lain yakni dual SIM On (HSPA &amp; EDGE), USB OTG, serta IPv6.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Layarnya berukuran 5 inch beresolusi Full HD (1920x1080 pixsel) dengan kerapatan mencapai 441 ppi. Dari sektor kamera, K-Touch Octa memiliki kamera belakang berukuran 13 MP dilengkapi LED Flash &amp; Touch Focus. Sementara kamera depan berukuran 5MP.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Videonya sanggup merekam &amp; memutar video Full HD 1080p dengan dilengkapi fasilitas Motion Video Preview yg dijamin sanggup membuat mata kita tidak bosan memandangnya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Kami bukan yang pertama meluncurkan Ponsel sejenis (Octa Core), namun kami memberikan beberapa keunggulan dibanding produk serupa di pasaran. Misal kepastian akan upgrade ke versi OS KitKat/4.4, layarnya terbuat dari gelas kaca buatan Asahi Glass dengan skala tahan goresan 7H,&quot; ujar Manager Marketing &amp; Sales E-Commerce K-Touch Indonesia, Andy Tanujaya, dalam keterangannya, Sabtu (31/5/2014).</span><br />\r\n&nbsp;</p>\r\n', 'news-events', 'Y'),
(5, 'Soal Pabrik di Vietnam, Samsung: Itu Sudah Cerita Lama', 'soal-pabrik-di-vietnam-samsung-itu-sudah-cerita-lama', '2014-06-02', '02:06:48', 'pabriksam460.jpg', '<p style="text-align: justify;"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Produsen ponsel asal Korea Selatan, Samsung, buka suara soal investasinya mendirikan pabrik ponsel di Vietnam ketimbang di Indonesia. Menurut Samsung, investasi membuka pabrik di Vietnam sudah lama dilakukan.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Vice President Samsung Electronics Lee Kang Hyun mengatakan, saat membuka pabriknya di Vietnam, Samsung mempunyai pertimbangan soal insentif fiskal atau pajak yang lebih menguntungkan.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Jadi soal Samsung mendirikan pabrik di Vietnam, itu cerita lama, bukan berita saat ini,&quot; ujar Lee saat berbincang dengan detikFinance, Sabtu (31/5/2014).</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Sementara terkait berita yang ramai dibicarakan saat ini tentang permintaan pemerintah Indonesia agar Samsung membuka pabrik ponselnya di sini, Lee mengatakan hal itu sedang dibicarakan oleh kantor pusat Samsung di Korsel.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Lee bercerita, Menko Perekonomian Chairul Tanjung (CT) memang meminta Samsung untuk berinvestasi di Indonesia dengan membuka pabrik ponselnya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Permintaan ini sudah kami sampaikan ke kantor pusat dan sedang dibahas,&quot; ujar Lee.</span><br />\r\n&nbsp;</p>\r\n', 'news-events', 'Y'),
(6, 'Polisi Gerebek Pabrik Rekondisi Smartphone di Jakarta Utara', 'polisi-gerebek-pabrik-rekondisi-smartphone-di-jakarta-utara', '2014-06-02', '02:06:13', '153118_hprekondisiedo.jpg', '<p style="text-align: justify;"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Polres Jakarta Utara mengungkap pabrik rekondisi smartphone di Jakarta Utara dan menangkap dua tersangka. Tak hanya merakit, kedua tersangka yang ditahan juga mengedarkan ponsel rekondisi tersebut.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Hari ini kita melakukan penangkapan dua tersangka yang melakukan usaha ilegal merakit smartphone jenis BlackBerry, Samsung, dan iPhone,&quot; ujar Kapolres Jakarta Utara Kombes M Iqbal di Polres Jakarta Utara, Jl Yos Sudarso, Jakarta, Sabtu (31/5/2014).</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Selain merekondisi handphone tersebut, para tersangka juga memalsukan manual book, garansi, dan nomor IMEI. Perbuatan tersangka telah melanggar izin perlindungan konsumen, perindustrian dan perdagangan, serta izin telkomunikasi.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Para tersangka merakit handpone ini tingkat home industri, dimana hape yang rusak diperbaiki kembali lagi dengan spare part China kemudian dijual ke konsumen dengan harga sesuai pasaran,&quot; tuturnya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Kendati memproduksi handphone rekondisi, Iqbal mengatakan hasil produksi tersangka dalam merakit sangat rapi. Sehingga untuk membedakan mana handphone baru dan rekondisi diperlukan keterangan ahli.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Besok kita akan memanggil saksi ahli sebagai bahan melengkapi berkas. Pengakuan tersangka, barang-barang yang dijual disebarkan ke seluruh wilayah Indonesia terutama Riau dan Pulau Jawa,&quot; imbuhnya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Polisi menjerat keduanya dengan Pasal 24 ayat (1) UU No 5 Tahun 1984 tentang Perindustrian atau Pasal 62 ayat (1) No 8 tahun 1999 tentang Perlindungan Konsumen dan Pasal 52 junto Pasal 32 ayat 1 UU No 36 tahun 1999 tentang Telekomunikasi. Akibat perbuatannya tersangka terancam hukuman penjara 5 tahun.</span><br />\r\n<br />\r\n<strong>(edo/ash)</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;</span></p>\r\n', 'news-events', 'Y'),
(7, 'Smartfren Andromax C2 Dibanderol Rp 850 Ribu', 'smartfren-andromax-c2-dibanderol-rp-850-ribu', '2014-06-02', '02:06:41', 'c2460.jpg', '<p style="text-align: justify;"><strong>akarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Penyedia jasa layanan telekomunikasi berbasis teknologi canggih CDMA EV-DO Rev. B Fase 2, Smartfren Telecom, kembali merilis produk smartphone terbarunya yaitu Andromax C2.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Perangkat ini diklaim lebih elegan dengan penambahan bezel alumunium. Sementara untuk prosesor, Andromax C2 telah di-</span><em>upgrade</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;dengan menggunakan prosesor Snapdragon dual core 1,2 GHz, perangkat grafis Adreno 302, memori internal sebesar 4 GB, serta sistem operasi Android 4.3 Jelly Bean.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Sayang, RAM Andromax C2 terbilang masih&nbsp;</span><em>pas-pasan</em><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;karena cuma dibekali dengan RAM 512 MB.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Adapun fitur lain yang hadir di perangkat dengan lebar layar 4 inch ini adalah kamera 3 megapixel, radio FM serta baterai berkapasitas 1.500 mAh.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Andromax C2 mempunyai dua pilihan warna yaitu hitam dan putih serta ditawarkan dengan harga Rp 849.000.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Spesifikasi Smartfren Andromax C2:</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; CDMA2000-1X EVDO Rev A (3.5G) + GSM</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Download Speed up to 3.1 Mbps (EVDO Rev.A)</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Dual Mode - Dual On Active EVDO + GSM</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Snapdragon Dual Core 1.2GHz Processor&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Adreno 302 Graphic Processor Unit</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Large Internal Memory 4GB ROM + 512MB RAM</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Only 10 mm in Thickness</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; OS Android 4.3 Jelly Bean (JB)</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Camera 3.0 MPix (FF) Main Camera&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Dolby Digital Plus Audio Enhancer</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Snapdragon Audio+</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Snapdragon Quick Charge</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; 4.0&rdquo; LCD with WVGA Resolution</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Support HD (720P) Video Playback</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Capacitive Multi Touch Screen with Multi Gesture</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Built-in GPS with A-GPS Support</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Wi-Fi Hotspot (Tethering) up to 5 Users</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Bluetooth 3.0 with A2DP support</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Accelerometer, Proximity and Ambience Sensor</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; 3.5 mm Audio Port Stereo</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Micro-USB port Interface</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Multimedia</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; FM Radio</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Support Micro-SDHC external memory up to 32GB&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&bull; Battery 1500mAh</span><br />\r\n<br />\r\n<strong>(ash/ash)</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;</span><br />\r\n&nbsp;</p>\r\n', 'news-events', 'Y'),
(8, 'Impor Ponsel Naik Terus, Indonesia Perlu Bikin Pabrik', 'impor-ponsel-naik-terus-indonesia-perlu-bikin-pabrik', '2014-06-02', '02:06:23', '135337_img2013061101838.jpg', '<p style="text-align: justify;"><strong>Jakarta</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;- Indonesia boleh saja memiliki potensi pasar yang besar untuk penjualan perangkat telekomunikasi. Itu bisa kita lihat dari impor ponsel yang mencapai 15.338 ton lebih dengan nilai belanja USD 2,6 miliar di sepanjang 2013.&nbsp;</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Tapi sayangnya, menurut Direktur Smartfren Merza Fachys, kondisi ini belum cukup ampuh untuk menarik minat investor asing membangun pabrik perangkat di negeri ini.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Tahun lalu kami mengimpor sekitar 1,8 juta unit smartphone dan dongle. Tahun ini ada sekitar 4,8 juta unit untuk kedua perangkat itu yang akan diimpor. Kita sudah bicara dengan beberapa manufaktur terkait skala ekonomi yang ada itu,kenyataannya sejauh ini belum ada yang tertarik menggarap,&quot; ungkapnya saat menghadiri diskusi IndoTelko Forum&nbsp;di Jakarta.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Dijelaskannya, Smartfren yang menjalankan teknologi Code Division Multiple Access (CDMA) terpaksa mendatangkan perangkat untuk konsumen karena di pasar lebih banyak tersedia alat yang bisa digunakan untuk suara dan SMS.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Sedangkan tren sekarang itu data. Kami terpaksa bicara dengan manufaktur di China dan bicara skala ekonomi. Akhirnya kita bisa dapatkan harga perangkat lumayan terjangkau. Masalahnya, dari tahun ke tahun impor smartphone dari Smartfren naik terus, nilainya lumayan menguras kantong, inilah pertimbangan perlunya digandeng manufaktur lokal, minimal kita bisa berhemat 5%-10% jika merakitnya di dalam negeri,&quot; jelasnya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Menurutnya, belajar dari pengalaman yang dialami Smartfren sudah saatnya semua pemangku kepentingan untuk duduk bersama guna menentukan arah dari manufaktur lokal agar Indonesia tidak terus menjadi pasar bagi penjualan perangkat. &quot;Hal yang pasti, skala ekonomi saja ternyata tak cukup,&quot;katanya.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">Wakil Ketua Umum Bidang IT, Telekomunikasi, Penyiaran, dan Ristek Kadin Indonesia Didi Suwondo mengakui sudah saatnya dilakukan penyehatan di sektor manufaktur perangkat telekomunikasi agar lebih mandiri.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&quot;Bisa menyediakan lahan ribuan hektar belum jaminan investor asing itu datang. Harus ada sejumlah insentif. Jika tidak, Indonesia tak akan mandiri sektor manufakturnya,&quot; katanya.</span><br />\r\n<br />\r\n<br />\r\n<strong>(rou/rou)</strong><span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif">&nbsp;</span><br />\r\n&nbsp;</p>\r\n', 'news-events', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(150) NOT NULL,
  `image_perusahaan` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `association`
--

INSERT INTO `association` (`id`, `nama_perusahaan`, `image_perusahaan`) VALUES
(2, 'Shipify Studio', 'img4-hover.png'),
(3, 'Magento Studio', 'img5-hover.png'),
(4, 'Mailchimp', 'img6-hover.png'),
(5, 'Satisfaction', 'img7-hover.png'),
(6, 'Google Analytic', 'img8-hover.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subjek` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Agus Cahyono', 'cahyo.mamen@gmail.com', 'Hallo Dunia', 'Hallo Mitra Desain'),
(2, 'Agus Waluyo', 'cahyo.mamen@gmail.com', 'Jelly  Beand', 'Kitkat Sudah Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `gbr_webs`
--

CREATE TABLE IF NOT EXISTS `gbr_webs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gbr_logo` varchar(150) NOT NULL,
  `gbr_bg` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gbr_webs`
--

INSERT INTO `gbr_webs` (`id`, `gbr_logo`, `gbr_bg`) VALUES
(1, 'muliakarya.jpg', 'background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(5) NOT NULL AUTO_INCREMENT,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `twitter` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_fax` varchar(20) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `twitter`, `alamat`, `no_telp`, `no_fax`, `meta_deskripsi`, `meta_keyword`, `favicon`) VALUES
(1, 'PT Mulia Karya Prima', 'muliakarya@msn.com', 'http://localhost/ska', 'https://www.facebook.com/', 'http://twitter.com/gauscahyono', 'Jl. Letjen MT. Haryono Kav. 8 Cawang Jakarta 13340', '021-8193708', '021-8196107', 'Deskripsi Tentang Website Anda Ketikan Disini\r\n', 'Keyword website anda untuk optimalkan pencarian google', 'FAV.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `content_id` varchar(200) NOT NULL,
  `view_type` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `content_id`, `view_type`, `status`) VALUES
(1, 'Company Profile', 'company-profile', 0, 'company-profile', '2', 1),
(8, 'Kamar Dagang dan Industri', 'kamar-dagang-dan-industri', 1, 'kamar-dagang-dan-industri', '2', 1),
(9, 'SKA Arsitek', 'ska-arsitek', 1, 'surat-keterangan-asal-arsitektur', '2', 1),
(10, 'SKA Sipil', 'ska-sipil', 1, 'surat-keterangan-asal-sipil', '2', 1),
(11, 'News and Events', 'news-and-events', 0, 'news', '1', 1),
(12, 'Project', 'project', 0, 'portofolio', '1', 1),
(13, 'Contact Us', 'contact-us', 0, 'contact', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_30_041652_create_users_table', 1),
('2014_05_30_041939_create_pages_table', 1),
('2014_05_30_042012_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug_pages` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug_pages`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Company Profile', 'company-profile', '<p><strong>Nama Perusahaan &nbsp; &nbsp; : PT. MULIA KARYA prima</strong><br />\r\nDomisili Perusahaan &nbsp;</p>\r\n\r\n<p><br />\r\n<strong>Kantor Pusat</strong><br />\r\nAlamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Puncak Permata Sengkaling F14, &nbsp;Sumbersekar, Dau, Malang<br />\r\nTelepon &nbsp;/ Fax &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 0341- 2998235</p>\r\n\r\n<p><br />\r\n<strong>Kantor Cabang</strong><br />\r\nAlamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Jl Mayjend Sungkono No 53, Madiun<br />\r\nTelepon / Fax &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 0351-463371<br />\r\nAkte Pendirian &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Siti Noer Endah, S.H.<br />\r\nSK MENKUM HAM &nbsp; &nbsp; &nbsp; : AHU-29525, AHA.01.01.TAHUN 2013<br />\r\nNPWP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 31.719.008.0-657.000</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><a href="https://www.mediafire.com/?notc14909j344e0" target="_blank">DOWNLOAD COMPANY PROFILE LENGKAP KAMI</a></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'About PT Mulia Karya', 'about-pt-mulia-karya', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kamar Dagang dan Industri', 'kamar-dagang-dan-industri', '<p><img alt="" src="http://www.mediafire.com/convkey/4cf6/32k2qiti585kddsfg.jpg" style="height:618px; width:450px" /></p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Surat Keterangan Asal Arsitektur', 'surat-keterangan-asal-arsitektur', '<p>Silahkan Download SKA Arsitek <strong><a href="http://www.mediafire.com/download/nmqmc1p369pcclz/SKA_ARSITEK.rar" onclick="window.open(this.href, '''', ''resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no''); return false;">Di Sini</a></strong></p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Surat Keterangan Asal Sipil', 'surat-keterangan-asal-sipil', '<p>Silahkan Download SKA Sipil <a href="http://www.mediafire.com/download/n582mi3r2m5e4nb/SKA_SIPIL.rar" onclick="window.open(this.href, '''', ''resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no''); return false;">Disini</a></p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Career', 'career', '<p><strong>G</strong><span style="color:rgb(102, 102, 102); font-family:verdana,arial,helvetica,sans-serif; font-size:12px">aruda Indonesia adopted a Human Capital Management approach which perceives employees as assets with high levels of competitiveness. Engaged in the service industry, Garuda Indonesia acknowledges the importance of human resources in creating a strong and sustainable corporate performance. Therefore, since 2005 the Company has actively redefined its policies and human resources systems in order to be aligned with the Company&#39;s grand strategy and objectives. For Garuda Indonesia, people have always been the main priority. Employees can be viewed as human capital, implying that Garuda Indonesia&#39;s employees have knowledge, skills and potential work habits that can support the Company&#39;s productivity. In order to become valuable capital with a strong contribution to the organization, every employee has to have a healthy work spirit and hence will be competent enough for the organization.</span></p>\r\n', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `slug_porto` varchar(150) NOT NULL,
  `img_porto` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `title`, `slug_porto`, `img_porto`, `description`, `date`, `status`) VALUES
(10, 'Pembangunan Gedung Serba Guna Universitas Brawijaya 12', 'pembangunan-gedung-serba-guna-universitas-brawijaya-12', 'portfolio-1-big.jpg', '<p>Pembangunan Gedung Serba Guna Universitas Brawijaya 12</p>\r\n', '2014-06-02', 'Y'),
(11, 'Pembangunan Gedung Olahraga UIN Malang', 'pembangunan-gedung-olahraga-uin-malang', 'portfolio-2-big.jpg', '<p>Pembangunan Gedung Olahraga UIN Malang</p>\r\n', '2014-06-02', 'Y'),
(12, 'Pembangunan Gedung DOM UMM', 'pembangunan-gedung-dom-umm', 'portfolio-3-big.jpg', '<p>Pembangunan Gedung DOM UMM</p>\r\n', '2014-06-02', 'Y'),
(13, 'Pembangunan Gedung Mall Malang', 'pembangunan-gedung-mall-malang', '1.jpg', '<p>Pembangunan Gedung Mall Malang</p>\r\n', '2014-06-03', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slider` varchar(150) NOT NULL,
  `image_slider` varchar(150) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama_slider`, `image_slider`, `deskripsi`) VALUES
(1, 'Slider Satu', 'slider-1-flex.jpg', 'Slider Satu'),
(2, 'Slider dua', 'slider-2-flex.jpg', 'Slider dua'),
(3, 'Slider Tiga', 'slider-3-flex.jpg', 'Slider Tiga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Agus Cahyono S.Kom', 'agus', '$2y$10$LQWCnnowyCdCsnZ8JvcBY.2ANQjwvnLF1p9zE42uJOIJ/W4K886zy', 'cahyo.mamen@gmail.com', '2014-05-29 21:32:45', '2014-05-30 20:23:05', '1YT9d3b97iWN7v4SExHDkp0aYSxbHgT1sJQD0pqMILpMti8kIoQwRtLyIIIn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
