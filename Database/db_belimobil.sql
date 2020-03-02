-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 08:39 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belimobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status_berita` enum('Publish','Draft','','') NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `slug_berita`, `judul_berita`, `isi_berita`, `gambar`, `status_berita`, `jenis_berita`, `keywords`, `tanggal_post`, `tanggal`) VALUES
(20, 1, 'nissan-gt-r50-akan-diproduksi-harganya-mencengangkan', 'Nissan GT-R50 Akan Diproduksi, Harganya Mencengangkan!', '<p>Nissan akhirnya mengkonfirmasi mobil prototipe GT-R50 masuk jalur produksi. Namun mereka hanya membuat 50 unit saja. Apalagi alasannya, kalau bukan untuk mengerek eksklusivitas merek. Di Eropa satu unit berbanderol dasar &euro; 990.000 atau setara dengan Rp 16,35 miliar. Itu pun sebelum pajak dan tambahan opsional. Melihat harganya, seakan membuat jantung mau copot.</p>\r\n<p>Harga yang tak lazim itu bisa menjadi investasi. Biasanya petrol head, atau kolektor mobil berebutan membeli. Sebab keluarga GT-R tergolong istimewa, apalagi unit diproduksi terbatas. Kecil kemungkinan GT-R50 mengalami depresiasi value. Yang ada harganya malah bisa naik drastis, lantaran desainnya juga eksotis.</p>\r\n<p>Ya, eksterior GT-R50 tetap tampan, identik dengan&nbsp;<a href=\"https://www.oto.com/berita-mobil/perkenalkan-nissan-gt-r50-italdesign-super-godzilla-21178755\" target=\"_blank\" rel=\"noopener\"><strong>model konsep</strong></a>&nbsp;karya Italdesign yang kali pertama ditunjukkan pada masyarakat dunia, melalui Goodwood Festival of Speed awal 2018. Tapi jangan khawatir. Jika berniat meminangnya, Anda bisa menentukan pilihan warna eksterior dan interior sesuai personalitas.</p>\r\n<p>Namun tetap, pada dasarnya GT-R50 memiliki splitter depan besar, lampu depan LED, sayap belakang lebar, diffuser belakang sporty dan dua lubang angin di atas kap mesin. Saat memasuki kabinnya, Anda bisa melihat dasbor dan konsol tengah berbahan serat karbon. Lalu kursi mobil sporty berbalut kulit, serta lingkar kemudi yang dilapis Alcantara. Istimewa!</p>\r\n<p>Varian produksi dari GT-R50 meminjam jantung mekanis dari GT-R regular. Tapi mesin bensin V6 twin-turbocharged 3,8 liter telah mengalami upgrade. Lantaran edisi spesial, mesin dilengkapi turbo yang lebih besar, intercooler yang lebih besar, injektor bahan bakar baru dan piston yang lebih tinggi. Hasilnya, ia mampu memproduksi ledakan daya 710 hp dan dorongan torsi 780 Nm.</p>\r\n<p>Gearbox GT-R standar dan diferensial juga disematkan. Disesuaikan untuk mengimbangi lontaran tenaga ekstra. Kestabilan juga dijamin, dengan suspensi baru garapan Bilstein DampTronic yang tingkatan peredamannya dapat disesuaikan dengan kebutuhan. Untuk menambah performa, pelek super ringan 21 inci dipasangkan bersama kaliper Brembo yang terbukti kualitasnya.</p>\r\n<p>\"Reaksi dari para penggemar Nissan di seluruh dunia dan pelanggan potensial dari GT-R50 sangat melampaui harapan kami. Sejumlah 50 mobil ini, turut merayakan kehadiran 50 tahun GT-R, serta 50 tahun Italdesign (sebagai perancang). Mobil ini sangat istimewa dengan mempertahankan&nbsp;<a href=\"https://www.oto.com/artikel-feature-mobil/nissan-gt-r-legenda-yang-abadi\" target=\"_blank\" rel=\"noopener\"><strong>warisan mobil sport Nissan</strong></a>&nbsp;yang fantastis,&rdquo; jelas Direktur Nissan Sports Car Global, Bob Laishley.</p>\r\n<p>Semua pengiriman Nissan GT-R50 by Italdesign dimulai pada 2019. Diperkirakan unit sampai di garasi pelanggan pada kuartal pertama tahun depan. Namun sebelum memulai proses produksi, kendaraan dipajang di Galeri Nissan di Yokohama, Jepang, mulai 7 Desember 2018.&nbsp;<strong>(Alx/Odi)</strong></p>\r\n<p>Sumber:&nbsp;<a href=\"https://www.carscoops.com/2018/12/nissan-gt-r50-limited-production-run-confirmed-will-priced-1-1-million/\" target=\"_blank\" rel=\"noopener\">Carscoops</a>,&nbsp;<a href=\"https://www.motor1.com/news/290379/nissan-gt-r50-production-version/\" target=\"_blank\" rel=\"noopener\">Motor1</a></p>', 'b_nissan_gtr50.jpg', 'Publish', 'Berita', 'Nissan GT-R50 Akan Diproduksi, Harganya Mencengangkan!', '2018-12-09 18:48:13', '2018-12-09 17:48:13'),
(21, 1, 'toyota-avanza-baru-harusnya-punya-fitur-ini', 'Toyota Avanza Baru Harusnya Punya Fitur Ini', '<p>Toyota Avanza terbaru rumornya segera meluncur. Multi purpose vehicle (MPV) andalan Toyota ini, memang sudah lama tak mendapatkan pembaruan total. Generasi keduanya saja sudah memasukki tahun ketujuh pada 2018 ini.&nbsp;</p>\r\n<p>Bila jadi diluncurkan, Toyota harus meramu Avanza sebaik-baiknya. Pasalnya, saat ini pemain di segmen MPV semakin banyak menawarkan beragam keunggulan. Nah, kali ini Oto mencoba mengulik fitur apa saja yang seharusnya dibenamkan ke&nbsp;<a href=\"https://www.oto.com/mobil-baru/toyota/avanza\" target=\"_blank\" rel=\"noopener\"><strong>Avanza terbaru</strong></a>.</p>\r\n<p><strong>1.&nbsp; Enam Airbag</strong></p>\r\n<p>Berkaca pada Rush terbaru yang sudah dilengkapi 6 airbag. SUV ini mampu menjaga harganya tetap stabil. Harusnya Avanza bisa mengikuti jejak Rush, memperkuat sektor keselamatan, pengemudi dan penumpang di seluruh baris terlindungi. Avanza pun memiliki poin lebih yang mampu menggoda konsumen untuk membelinya.</p>\r\n<p><strong>2. Stability control dan Brake Assist</strong></p>\r\n<p>Avanza, dikenal sebagai&nbsp;<a href=\"https://www.oto.com/berita-mobil/daftar-low-mpv-terlaris-2018-toyota-avanza-kembali-ke-puncak\" target=\"_blank\" rel=\"noopener\"><strong>mobil yang memiliki manuver lincah</strong></a>. Tetapi mobil sejuta umat ini tak didukung stability control. Padahal, fitur ini sangat membantu dalam menjaga keamanan berkendara. Mobil dapat terhindar dari bahaya selip karena tenaga terdistribusi secara dinamis ke roda mengikuti kebutuhan traksi.</p>\r\n<p>Fitur pendukung keselamatan lainnya, brake assist (BA). Adanya BA membantu rem ABS untuk bekerja lebih optimal menghindari insiden. Fitur ini berfungsi membantu pengereman, bahkan secara otomatis mampu mengaplikasikan rem saat terdeteksi adanya pelepasan pedal gas tiba-tiba, yang menandakan adanya bahaya terjadi.</p>\r\n<p><strong>3. Lampu LED dan DRL</strong></p>\r\n<p>Penguatan sektor penerangan tak hanya menguntungkan dari sisi fungsional. Penggunaan LED juga dapat meningkatkan tampilan Avanza. Baik lampu depan dan belakang bisa dimanipulasi desainnya tanpa batas. Daytime running light (DRL) juga perlu menjadi pertimbangan Toyota. Ini merupakan fitur pasif yang berkontribusi menjaga keselamatan, baik pengemudi itu sendiri maupun pengguna jalan di sekitar. Sebenarnya, Avanza pernah mendapatkan imbuhan DRL, namun waktu itu Toyota menghadirkannya sebagai edisi terbatas.</p>\r\n<p><strong>4. Smart Key</strong></p>\r\n<p>Teknologi tanpa anak&nbsp;<a href=\"https://www.oto.com/berita-mobil/auto2000-akui-hadirnya-pesaing-baru-ganggu-penjualan-toyota-avanza\" target=\"_blank\" rel=\"noopener\"><strong>kunci untuk mengakses mobil (Smart Key)</strong></a>, sudah banyak digunakan pabrikan mobil di Indonesia. Toyota sendiri juga punya model yang mengusung fitur ini, contohnya Rush. Kehadiran keyless di Avanza terbaru tentunya menarik. Fitur ini biasanya disandingkan dengan teknologi start stop engine. Pengemudi jadi lebih mudah menyalakan dan mematikan mesin dengan sentuhan satu jari.&nbsp;&nbsp;</p>\r\n<p><strong>5. Cruise Control</strong></p>\r\n<p>Fitur ini bisa menjadi pertimbangan bagi Toyota sebagai bekal Avanza. Cruise control bukan lagi barang mewah. Tengok saja Mitsubishi Xpander Ultimate yang Oktober lalu sudah dilengkapi peranti itu. Penggunaannya membantu pengemudi berkendara di jalan bebas hambatan. Apalagi jika perjalanannya cukup jauh, rasa lelah pada kaki pengemudi bisa diminimalisir karena mobil berakselerasi secara otomatis mengikuti batas kecepatan yang ditentukan.</p>', 'b_toyota_avanza_baru.jpg', 'Draft', 'Berita', 'Toyota Avanza Baru Harusnya Punya Fitur Ini', '2018-12-09 18:55:49', '2018-12-09 18:24:37'),
(22, 1, 'suv-lamborghini-urus-resmi-dijual-di-indonesia-seharga-34-mitsubishi-xpander', 'SUV Lamborghini Urus Resmi Dijual di Indonesia, Seharga 34 Mitsubishi Xpander', '<p>Urus, SUV garapan Lamborghini resmi dijual di Indonesia. Harganya dimulai dari Rp 8,5 miliar off the road. Banderol dasar itu, setara dengan 34 unit Mitsubishi Xpander Ultimate yang dihargai Rp 250 juta. (on the road) Peluncuran di Indonesia kemarin, juga menandai setahun tepat pengenalan super SUV di Italia 4 Desember 2017.</p>\r\n<p>Meski baru diluncurkan, namun pemesanan unit tahun ini ditutup. David M Pangemanan, CRM and Sales Executive Lamborghini Jakarta, mengaku mengantongi pemesanan&nbsp;<a href=\"https://www.oto.com/mobil-baru/lamborghini\" target=\"_blank\" rel=\"noopener\"><strong>Lamborghini Urus&nbsp;</strong></a>sebanyak delapan unit. Dan baru tahun depan, pemesanan dibuka kembali.</p>\r\n<p>Sebagai SUV premium, di Indonesia lawan tandingnya tak banyak. Sebutlah Porsche Cayenne, Bentley Bentayga dan Maserati Levante berada di segmen selevel. Namun Urus punya tenaga paling ganas. Di bawah bonet, tertancap jantung mekanis gahar, V8 twin-turbo 4.0 liter. Mesin yang meminum bensin beroktan minimal RON 95 ini, mampu melecutkan daya 650 Hp pada 6.800 rpm dan torsi 850 Nm pada 2.250 rpm.</p>\r\n<p><a href=\"https://www.oto.com/berita-mobil/raja-nurburgring-lamborghini-aventador-svj-resmi-dijual-21183511\" target=\"_blank\" rel=\"noopener\"><strong>Tenaga besar itu</strong></a>&nbsp;disalurkan melalui transmisi otomatis 8-speed. Mereka menjanjikan kesenangan berkendara dengan gearbox elektro-hidraulik yang ringan dan efisien. Sistem disetel untuk memberikan rasio gigi rendah yang sangat pendek dan gigi tinggi yang lebih panjang.</p>\r\n<p>Jadi mudah saja baginya&nbsp;<a href=\"https://www.oto.com/berita-mobil/dua-model-lamborgini-ini-paling-laku-di-seluruh-dunia-21183321\" target=\"_blank\" rel=\"noopener\"><strong>untuk berakselerasi kencang</strong></a>. Untuk melesat dari 0-100 km/jam dalam tempo 3,6 detik dan 0-200 km/jam cuma 12,8 detik. Namun demi keselamatan, kecepatan tertinggi dibatasi hanya sampai 305 km/jam. Pengereman juga tidak kalah mengesankan. Urus mampu berhenti dari 100 km/jam sampai diam, hanya dalam jarak 33,7 m.</p>\r\n<p>Tak seperti model sedan, banteng muda besutan Lambo dilengkapi enam mode pengendaraan: Strada, Sport, Corsa, Sabbia, Terra dan Neve. Atau dalam bahasa Inggris disebut Street, Sport, Track, Sand, Land (Off-Road) dan Snow.</p>\r\n<p>Lambo mengklaim,&nbsp;<a href=\"https://www.oto.com/berita-mobil/lamborghini-huracan-performante-spyder-resmi-dijual-di-indonesia-segini-harganya-21183480\" target=\"_blank\" rel=\"noopener\"><strong>sistem penggerak four wheel drive</strong></a>&nbsp;Urus, memberikan dinamika berkendara yang aman dan sangat responsif di setiap permukaan jalan dan segala cuaca. Itu berkat central self-locking differential, yang menyediakan kontrol dan kelincahan dalam semua kondisi berkendara, terutama jalan off-road.</p>\r\n<p>Torsi terbagi 40/60 pada as roda depan dan belakang sebagai standar. Kemudian torsi maksimum yang disalurkan sebanyak 70% ke roda depan dan 87% ke roda belakang. Urus pun dikatakan mengantongi traksi yang lebih tinggi. Sederet kemampuan itulah yang membuat pabrikan percaya diri dan mampu menarik minat konsumen.</p>\r\n<p>Seperti pada jenis kendaraan premium secara umum, Anda bisa melakukan personalisasi unit. Misal mulai dari pemilihan model pelek, kelir bodi, hingga material premium untuk membalut bagian interior. Semua tersedia sebagai paket-paket yang ditawarkan Lamborghini Jakarta, distributor resmi Urus.</p>', 'b_lamborghini_urus.jpg', 'Publish', 'Berita', 'SUV Lamborghini Urus Resmi Dijual di Indonesia, Seharga 34 Mitsubishi Xpander', '2018-12-09 18:58:48', '2018-12-09 17:58:48'),
(23, 1, 'akhir-tahun-kenapa-jadi-momen-tepat-beli-mobil-bekas', 'Akhir Tahun, Kenapa Jadi Momen Tepat Beli Mobil Bekas?', '<p>Momen akhir tahun, bagi sebagian orang dianggap waktu yang tepat mengganti mobil. Pilihan tentu tak hanya&nbsp;<a href=\"https://www.oto.com/mobil-baru\" target=\"_blank\" rel=\"noopener\"><strong>mobil baru</strong></a>, bahkan bagi sebagian kalangan, mobil bekas juga bisa jadi opsi yang logis. Lantas, kenapa harus beli mobil bekas di akhir tahun?</p>\r\n<p>Dari laman Mobil88, ada beberapa alasan yang dicantumkan. Bisa jadi bahan pertimbangan Anda untuk memantapkan niat menawar aneka model kendaraan yang ada di gerai&nbsp;<a href=\"https://www.oto.com/mobil-bekas?utm_source=nc&amp;utm_medium=top_nav\" target=\"_blank\" rel=\"noopener\"><strong>mobil bekas</strong></a>.</p>\r\n<h2>Serbuan Promo</h2>\r\n<p>Diskon, gimmick hadiah langsung, maupun cashback dan aneka promo lain, kerap disajikan oleh gerai mobil bekas. Dijelaskan Mobil88, &ldquo;Kompetisi bisnis otomotif di akhir tahun semakin panas, termasuk di segmen mobil bekas. Hal ini membuat showroom berlomba menawarkan program menarik.&rdquo;</p>\r\n<p>Tujuannya tentu untuk menarik hati konsumen. Selain itu, juga menghabiskan stok mobil bekas yang tahunnya makin tua. Maklum, sudah bukan rahasia lagi jika harga mobil bekas makin turun seiring bergantinya tahun. Karenanya para pengusaha berupaya menghabiskan kendaraan di gerainya.</p>\r\n<p>Nah, Mobil88 pun menganjurkan masyarakat untuk memilih promo mobil bekas di gerai terpercaya. Misalnya pada gerai mereka, sistem yang sudah ditetapkan memungkinkan konsumen mendapat mobil yang berkualitas.</p>\r\n<p>&ldquo;Showroom kami menjamin kualitas mobil dengan memberikan buyback guarantee. Jaminannya, mobil bukan bekas tabrakan, yang bisa berefek pada kestabilan rangka. Mobil juga bukan bekas banjir yang bisa menyebabkan karat dan keropos. Begitu juga soal nomor rangka dan mesin yang dijamin sesuai STNK seta BPKB. Odometer pun tidak diputar balik,&rdquo; tutur Mobil88.</p>\r\n<h2>Persiapan Libur Panjang</h2>\r\n<p>Sejatinya memang ada beberapa momen libur di sepanjang tahun. Momen pergantian tahun, jadi waktu yang tepat untuk menghabiskan cuti maupun hari libur untuk berwisata bersama keluarga atau sahabat. Bagi Anda yang saat ini mobilnya belum terlalu bisa diandalkan untuk berlibur jarak jauh atau mengangkut banyak penumpang, menilik gerai mobil bekas bisa jadi pilihan masuk akal.</p>\r\n<p>Bisa jadi harga Low MPV 7-seater berumur 4 tahun senilai dengan city car yang saat ini Anda miliki. Contohnya dari laman OTO.com,&nbsp;<a href=\"https://www.oto.com/detail-mobil-bekas/daihatsu-xenia-2003-2011-xi-family-376564\" target=\"_blank\" rel=\"noopener\"><strong>Daihatsu Xenia lansiran 2008</strong></a>&nbsp;ditawarkan dengan banderol Rp 81 juta. Bahkan jika ingin mengambil dengan skema cicilan, besarannya hanya Rp 2,75 juta perbulan.</p>\r\n<p>Kalau Anda memiliki&nbsp;<a href=\"https://www.oto.com/mobil-baru/toyota/agya\" target=\"_blank\" rel=\"noopener\"><strong>Toyota Agya</strong></a>&nbsp;yang baru berumur satu tahun, opsi tukar tambah dengan Xenia seken tentu bisa dipikirkan. Tentu saja, nominal cicilan Xenia seken, lebih rendah dari Agya baru. Kapabilitas angkutnya juga lebih banyak dibanding Agya. Sekali dayung, dua tiga pulau terlampaui. Mendapat mobil yang lebih fungsional untuk liburan, sekaligus meringankan beban finansial.</p>', 'b_akhir_tahun_beli_mobil.jpg', 'Publish', 'Berita', 'Akhir Tahun, Kenapa Jadi Momen Tepat Beli Mobil Bekas?', '2018-12-09 19:01:42', '2018-12-09 18:01:42'),
(24, 1, 'ford-fiesta-r2-rally-2019-bermesin-kecil-tapi-beringas', 'Ford Fiesta R2 Rally 2019 Bermesin Kecil Tapi Beringas!', '<p>Ford dan M-Sport mengenalkan Fiesta R2 anyar. Hatchback ini merupakan mobil rally pertama yang dibangun sesuai peraturan R2 terbaru FIA. Menariknya, mobil untuk rally dirancang dan dikembangkan sepenuhnya di fasilitas M-Sport di Krakow, Polandia. Mesinnya cuma satu liter (1.000 cc), tapi tenaganya buas.</p>\r\n<p>Sebagai mobil petarung, rombakan utama difokuskan pada sektor mesin, transmisi dan suspensi. M-Sport meramu ulang mesin EcoBoost tiga silinder turbocharged 1,0 liter, hingga tenaga meningkat drastis menjadi 200 hp pada 6.500 rpm. Padahal pada versi Fiesta regular, hanya punya lontaran 125 hp. Besaran output torsi puncak Fiesta R2 juga meningkat menjadi 290 Nm (214 lb-ft) pada 4.000 rpm. Berbeda jauh jika dibandingkan dengan model biasa yang hanya 170 Nm.</p>\r\n<p>Untuk menggerakkan roda, tenaga mesin bensin ini lalu disalurkan melalui gearbox lima-percepatan (sequential) yang bisa disesuaikan. Tentunya dengan limited-slip differential agar memberi traksi ekstra saat menikung. Meski tak melansir kemampuan akselerasi, mereka mengatakan Fiesta R2 bisa melesat kilat.</p>\r\n<p>Lanjut soal desain eksterior. Betul, sekilas fisiknya sama dengan Fiesta yang sempat diniagakan di Indonesia. Namun Fiesta R2 punya dua pintu depan saja. Dan ubahan eksterior jua tak terlalu mencolok. Bodi dikelir abu-abu tua dengan sentuhan sedikit tarikan garis keemasan. Di atas bonet, tertera logo besar R2 untuk menegaskan nilai sporty.</p>\r\n<p>Menurut tuner, Fiesta R2 juga mengadopsi beberapa ubahan yang membuatnya melesat lebih kencang, lincah dan daya tahan lebih kuat, agar dapat bersaing dalam ajang rally. Sebenarnya, Ia memiliki sedikit kesamaan dengan pendahulunya. Sebab M-Sport melihat Fiesta WRC saat ini sebagai inspirasi penyempurnaan.</p>\r\n<p>Nah, untuk mengimbangi tenaga besar dan menjaga stabilitas, Fiesta R2 menggunakan formulasi suspensi baru. Ubahan mencakup peredam Reiger yang dapat disesuaikan (tiga arah di suspensi depan dan dua arah di belakang). Selain itu, suspensi diperkuat dengan per Eibach, bikinan Jerman. Per tersedia dengan pengaturan keras atau lembut dan opsi anti-roll bar. Jadi perpaduan ini bisa membantu pengemudi menemukan pengaturan yang tepat, sesuai dengan track atau lintasan yang dituju.</p>\r\n<p>Tak kalah penting, sistem pengereman. Untuk menghela laju kendaraan, M-Sport memakai kaliper balap dan cakram Alcon yang terkenal kuat. Sedangkan cakram depan berventilasi pakai merek AP Racing. M-Sport meracik Fiesta R2 dengan berbagai ubahan. Mobil siap terjun di ajang FIA Junior WRC Championship pada musim mendatang.&nbsp;</p>', 'b_ford_fiesta_r2.jpg', 'Publish', 'Berita', 'Ford Fiesta R2 Rally 2019 Bermesin Kecil Tapi Beringas!', '2018-12-09 19:06:58', '2018-12-09 18:06:58'),
(25, 1, 'jeep-wrangler-hanya-raih-1-bintang-uji-euro-ncap', 'Jeep Wrangler Hanya Raih 1 Bintang Uji Euro NCAP', '<p>Euro NCAP (New Car Assessment Programme) mengumumkan hasil uji terbarunya. Kali ini mobil yang dites tabrak Jeep Wrangler yang&nbsp;<a href=\"https://www.oto.com/berita-mobil/jeep-wrangler-jl-meluncur-apm-kini-dipegang-hascar-internasional\" target=\"_blank\" rel=\"noopener\"><strong>baru saja meluncur</strong></a>&nbsp;di Indonesia. Varian dipilih badan pengujian kendaraan independen adalah Sahara 4 pintu (Unlimited).</p>\r\n<p>Setelah diuji menggunakan 4 metode tabrak, mobil berbobot 2.089 kg itu hanya mendapat satu bintang. Kecilnya raihan bintang Jeep Wrangler, didominasi kurangnya perlindungan terhadap pejalan kaki dan fitur keselamatan berkendara.</p>\r\n<p>Model yang diuji memiliki fitur keselamatan tidak istimewa. Fitur pengingat sabuk pengaman seluruh penumpang, pretensioner, load-limiter dan speed assistance sudah ada. Tetapi Wrangler Sahara tak memiliki lane assist system maupun pengereman darurat yang umumnya ada pada mobil pesaing. Poin yang diraih&nbsp;<a href=\"https://www.oto.com/mobil-baru/jeep/wrangler-2019\" target=\"_blank\" rel=\"noopener\"><strong>Wrangler</strong></a>&nbsp;untuk orang dewasa 50%, anak 69%, perlindungan pejalan kaki 49% dan safety assist 32%.</p>\r\n<p>Hasil tes menunjukkan bumper Wrangler memang mampu memberikan perlindungan bagi kaki pejalan kaki. Sayangnya dampak berbeda terjadi pada anggota tubuh lain. Dalam data terungkap, kepala dan panggul pejalan kaki alami cedera akibat desain depan Wrangler yang tinggi.</p>\r\n<p>Dalam uji tabrak depan sisi pengemudi dengan kecepatan 64 km/jam, ditemukan kerusakan berat yang menyebabkan cedera, khususnya pengemudi. Area dada pengemudi mengalami benturan cukup keras, meskipun sudah dilindungi kantung udara. Begitu pun bagian kaki, meski tingkat cederanya tak separah dada. Sedangkan penumpang depan hanya cedera minor di dada.</p>\r\n<p>Masih dalam pengujian menggunakan metode sama, hasil untuk anak-anak bervariasi. Perlindungan terhadap tubuh anak 6 tahun dinyatakan optimal. Namun, dari data terlihat anak 10 tahun mengalami tegangan di leher yang menyebabkan cedera. Sekalipun seluruh bagian tubuhnya baik-baik saja.</p>\r\n<p>Kondisi yang tak sama terjadi ketika mobil dites melalui metode tabrak depan frontal seluruh sisi. Pengujian yang dilakukan dengan kecepatan 50 km/jam tak menyebabkan luka parah pada pengemudi. Justru penumpang belakang yang kena dampak paling besar, khususnya area dada akibat tertekan sabuk pengaman.</p>\r\n<p>Pada uji tabrak samping, hasilnya tergolong sangat baik bagi pengemudi. Kantung udara samping untuk kepala dan dada mampu melindungi secara maksimal. Sayangnya raihan baik tak berlaku untuk anak yang duduk di belakang. Soalnya kepala anak terbentur interior kabin. Sehingga Euro NCAP memberikan nilai tipis. Saat uji whiplash, Wrangler mampu meraih prestasi bagus. Whiplash sendiri merupakan kondisi leher mengalami perenggangan secara tiba-tiba akibat terentak keras.</p>', 'Jeep_Wrangler_Hanya_Raih_1_Bintang_Uji_Euro_NCAP.jpg', 'Publish', 'Berita', 'Jeep Wrangler Hanya Raih 1 Bintang Uji Euro NCAP', '2018-12-09 19:10:38', '2018-12-09 18:10:38'),
(26, 1, 'harga-resmi-datsun-go-live-diumumkan-konsumen-terima-unit-desember-ini', 'Harga Resmi Datsun Go Live Diumumkan, Konsumen Terima Unit Desember Ini', '<p>Edisi spesial Datsun Go Live sudah&nbsp;<a href=\"https://www.oto.com/berita-mobil/giias-2018-datsun-go-live-city-car-unik-seharga-rp-135-juta-21181506\" target=\"_blank\" rel=\"noopener\"><strong>diluncurkan di GIIAS 2018</strong></a>&nbsp;Agustus lalu. Saat itu, harganya belum diumumkan secara resmi. Hanya disebut mulai dari Rp 135 juta. Datsun pun berjanji merilis harganya pada November, sekaligus pengiriman ke tangan konsumen.</p>\r\n<p>Sesuai janjinya, Go Live kini punya harga resmi, walau sedikit telat. Untuk varian transmisi manual dijual dengan harga Rp 134,39 juta, versi CVT dikenakan Rp 149,89 juta (on the road DKI Jakarta). Angka ini selisih sedikit dari harga pre-order yang disebutkan saat pameran, bahkan lebih murah Rp 600 ribuan.&nbsp;</p>\r\n<p>Datsun Go Live adalah varian tersendiri di model GO. Mobil ini didesain langsung oleh tim desainer Datsun di Jepang, yang dipimpin oleh Kei Kyu selaku Executive Design Director Datsun. Ubahan banyak terjadi di bagian eksterior. Tepatnya didandani agar tampil lebih modis dan spesial dibanding&nbsp;<a href=\"https://www.oto.com/mobil-baru/datsun/go\" target=\"_blank\" rel=\"noopener\"><strong>Datsun GO</strong>&nbsp;</a>standar. Basisnya mengambil dari Datsun GO T Active sebagai varian tertinggi. Dapat dilihat dari penyematan body kit dan desain pelek 15-inci sama.</p>\r\n<p>Sentuhan personal ditambahkan melalui aksen kuning di beberapa elemen mobil, seperti: front spoiler, pelindung bagian bawah dari rear diffuser, body side molding dan roof spoiler. Inspirasinya berdasar&nbsp;<a href=\"https://www.oto.com/berita-mobil/imx-2018-datsun-gandeng-saint-barkley-produsen-sneakers-lokal\" target=\"_blank\" rel=\"noopener\"><strong>pewarnaan sepatu sneakers</strong></a>. Ikon kuning hexagonal turut dijumpai di antara grille dan palang pelek, yang warna dasarnya diganti hitam. Peningkatan tampilan juga menjalar ke kabin. Sabuk pengaman warna kuning tampak mencolok. Sementara warna senada juga menghias lewat jahitan bangku dan beberapa panel.&nbsp;</p>\r\n<p>&ldquo;Selain desain yang menarik, model ini juga dibekali teknologi pintar dan fitur untuk menunjang kenyamanan berkendara, membuatnya menjadi pilihan yang tepat dengan harga yang kompetitif. Mobil ini tersedia dalam jumlah terbatas,&rdquo; kata Masato Nakamura, Head of Datsun Indonesia dalam keterangan resmi Nissan yang diterima OTO (05/12).</p>\r\n<p>Fitur Datsun Go Live sama dengan GO T Active. Guna menunjang kenyamanan pengemudi, pilihan transmisi Xtronic CVT turut tersedia. Selain itu ada auto-headlights dengan Day Time running lighs, follow-me-home lights, intelligent wiper dan koneksi smartphone melalui layar sentuh berukuran 6.75 inci.</p>\r\n<p>Datsun GO Live diproduksi di Pabrik Nissan di Purwakarta, Jawa Barat. Unitnya sudah tersedia di seluruh diler resmi di Indonesia. Konsumen yang sudah memesan, segera menerima unit Desember ini.</p>\r\n<p>Sayangnya, Datsun enggan mengungkapkan berapa unit yang telah dipesan oleh konsumen. Sama halnya dengan jumlah unit yang disediakan sebagai edisi terbatas. Pabrikan mobil asal Jepang ini, juga tak menyediakan aksesori khas Go Live untuk konsumen yang ingin mengubah tampilan mobil Datsun versi standar. Hal ini dilakukan untuk menjaga eksklusivitas pemilik Go Live.</p>', 'Harga_Resmi_Datsun_Go_Live_Diumumkan,_Konsumen_Terima_Unit_Desember_Ini.jpeg', 'Publish', 'Berita', 'Harga Resmi Datsun Go Live Diumumkan, Konsumen Terima Unit Desember Ini', '2018-12-09 19:13:06', '2018-12-09 18:13:06'),
(27, 1, 'ini-alasan-honda-brio-cocok-buat-mahasiswa', 'Ini Alasan Honda Brio Cocok Buat Mahasiswa', '<p>Sebagai mobil perkotaan, Brio baru punya target pasar spesifik. Generasi muda menjadi target utama. Bahkan pihak Honda Prospect Motor (HPM) pernah mengatakan, sejumlah konsumen Brio merupakan pemilik mobil pertama, baik itu dibeli untuk istri atau anaknya.</p>\r\n<p>Untuk sang anak, paling masuk kategori ya mahasiswa, yang sudah cukup usia mengemudi. Lantas apa yang menjadikan Brio cocok buat mahasiswa?</p>\r\n<p>Pertama, desainnya. Honda Brio generasi terbaru dikembangkan dengan pertimbangan untuk digunakan oleh kawula muda. Makanya Brio punya desain atraktif. Bisa dilihat dari nilai-nilai sporty yang disertakan, baik pada eksterior dan interiornya. Itu berlaku baik untuk Brio Satya maupun RS. Sedang fitur di eksterior, ada LED light guide, lampu kabut, spoiler belakang dengan lampu rem terintegrasi dan pelek 14 inci.</p>\r\n<p><a href=\"https://www.oto.com/mobil-baru/honda/brio\" target=\"_blank\" rel=\"noopener\"><strong>Honda Brio RS Terbaru,</strong></a>&nbsp;peleknya 15 inci dan lebih sporty berkat bodi kit di sekujur tubuh. Interior Brio Satya memakai skema dua warna, sedang RS didominasi warna hitam dengan aksen jingga. Keduanya termasuk sporty dan tidak kaku desainnya, mahasiswa sewajarnya suka dengan desain itu. Masih dari sektor desain, mahasiswa yang kerap memodifikasi juga bisa mengandalkan Brio. Sejak generasi awal, Brio cukup ramah untuk modifikasi ringan, apalagi untuk slalom atau balap, sangat berjiwa muda.</p>\r\n<p>Berikutnya, Brio baru punya kabin yang lebih lapang dari pendahulunya. Ini penting. Mahasiswa kerap bepergian bersama teman dan kabin lapang menjadikannya lebih nyaman. Bagasi juga lebih lega, bisa muat barang-barang pendukung aktivitas maupun hobi. Alat musik, olahraga, koper dan berbagai macam barang lain bisa ditata rapi pada bagasi.</p>\r\n<p>Soal fitur,&nbsp;<a href=\"https://www.oto.com/berita-mobil/honda-brio-terbaru-pimpin-penjualan-honda\" target=\"_blank\" rel=\"noopener\"><strong>Brio juga asyik untuk mahasiswa.&nbsp;</strong></a>Misal dari infotainment, Satya dilengkapi head unit 2DIN dengan banyak konektivitas, termasuk Bluetooth ke smartphone. Mahasiswa tak lepas dari gawainya, dengan begitu akses musik dan telepon dari smartphone semakin mudah. Apalagi pada RS yang sudah menggunakan layar sentuh 6,1 inci dan bisa memutar video serta DVD. Mahasiswa kerap tak ingin ribet oleh hal sepele, dengan keyless entry pada Brio memudahkan akses memasuki kabin.</p>\r\n<p>Namanya&nbsp;<a href=\"https://www.oto.com/berita-mobil/honda-brio-rakitan-karawang-menuju-pasar-ekspor\" target=\"_blank\" rel=\"noopener\"><strong>mobil perkotaan,</strong></a>&nbsp;Brio didukung performa yang dioptimalkan untuk menjelajah di kota. Artinya, Brio menawarkan kemudahan pengendaraan, pengendalian dan performa mesin yang cukup. Jantung mekanis 4-silinder 1,2 liter i-VTEC berdaya 90 PS dan torsi 110 Nm yang disalurkan melalui transmisi CVT. Karakternya sudah bisa memenuhi berbagai kebutuhan berkendara. Dalam kota yang padat oke, berkendara lebih kencang di jalan bebas hambatan atau saat ke luar kota.</p>\r\n<p>Tak ketinggalan, fitur safety. Semua varian Brio baru didukung dua kantung udara, rem ABS+EBD dan pengingat sabuk keselamatan bagi pengemudi. Dari segi keamanan ada immobilizer, sistem alarm dan pengunci pintu otomatis dari sensor kecepatan.</p>', 'Ini_Alasan_Honda_Brio_Cocok_Buat_Mahasiswa.jpg', 'Publish', 'Berita', 'Ini Alasan Honda Brio Cocok Buat Mahasiswa', '2018-12-09 19:15:15', '2018-12-09 18:15:15'),
(28, 1, 'porsche-911-seri-992-penyempurnaan-tanpa-banyak-ubahan', 'Porsche 911 Seri 992, Penyempurnaan Tanpa Banyak Ubahan', '<p>Menilik desain, Porsche 911 adalah salah satu dari sedikit mobil yang mengalami evolusi sangat lambat. Lihat saja model yang kami tampilkan. Sulit untuk menyangka ini generasi terbaru dari 911, keturunan kedelapan dengan kode bodi 992. Karena hampir terlihat sama dengan seri 991 generasi tujuh yang beredar sejak 2012.</p>\r\n<p>Ya, tidak terjadi ubahan desain radikal. Bahkan mau disebut facelift pun sah saja. Porsche mati-matian mempertahankan desain dasar&nbsp;<a href=\"https://www.oto.com/berita-mobil/porsche-901-original-bangkit-dari-kubur-21170745\" target=\"_blank\" rel=\"noopener\"><strong>901 original</strong></a>&nbsp;yang terinspirasi Volkswagen Beetle. Lebih tepatnya, bentuknya sekilas masih sama persis dengan generasi enam seri 997 (2005-2012) yang sudah jauh lebih modern. Seolah hanya merancang ulang bumper depan, bokong, pelek dan interior.</p>\r\n<p>Desain eksterior memang merefleksikan DNA Porsche asli yang begitu mendarah daging. Semua model lain Porsche pun, juga punya pola sama bersumber dari 911. Entah menjadi pekerjaan sulit bagi para desainer atau justru sebaliknya. Yang pasti, desain 911 pasti tak jauh berbeda setidaknya untuk satu dekade ke depan. Porsche seperti punya formula tersendiri sehingga membuat 911 melegenda. Dan karakter desain seperti sekarang ini patut terus dijaga, walau semakin membosankan.</p>\r\n<p>Tanpa perlu berpanjang lebar membahas eksterior, ubahan terjadi di bumper depan dan buritan keseluruhan. Porsche mengaku, desain 911 pada 1970an cukup mempengaruhi 992. Kap bagasi kini terpahat garis tegas dan ujungnya membentuk sudut lebih tajam. Ventilasi udara di bawah fog lamp LED berbentuk persegi panjang menggantikan bentuk oval.</p>\r\n<p>Dari samping, bentuk bodi identik dengan 991. Masih serba membulat dengan gaya atap sloping seperti VW Beetle klasik. Tapi 992 mudah dikenali dari gagang pintu model pop-out yang tersembunyi. Frontal belakang, baru tampak&nbsp;<a href=\"https://www.oto.com/berita-mobil/bokong-porsche-911-generasi-mendatang-tersingkap-21172347\" target=\"_blank\" rel=\"noopener\"><strong>perbedaan paling signifikan dari 992</strong></a>. Lampu yang lebih tipis dan gelap disatukan garis di ujung kap mesin. Ventilasi kap mesin kini membujur vertikal. Bumpernya pun lebih ramai dari kisi udara di ujung.</p>\r\n<p>Interior 992 ternyata juga minim pembaruan. Paling kentara, satu tarikan garis horizontal di layout dasbor. Di tengah bertengger monitor layar sentuh 10,9-inci. Bagian paling unik, bentuk baru tuas transmisi yang mirip pencukur jenggot elektrik. Di baliknya terpendam transmisi baru Porsche Doppelkupplung (PDK) 8-speed. Untuk sementara, baru jenis transmisi ini yang tersedia untuk Carrera S dan Carrera 4S saat peluncuran di LA Auto Show.</p>\r\n<p>Girboks itulah yang mentransfer tenaga ke roda belakang (Carrera S) dan keempat roda (Carrera 4S) dari mesin Boxer flat-6 twin-turbo. Yup,&nbsp;<a href=\"https://www.oto.com/berita-mobil/porsche-mulai-tinggalkan-mesin-diesel-21185578\" target=\"_blank\" rel=\"noopener\"><strong>mesin yang sudah diperkenalkan</strong></a>&nbsp;di seri 991 fase kedua pada 2016. Outputnya tentu alami peningkatan. Tenaga naik 23 hp jadi 443 hp, sedangkan torsinya menyentuh 530 Nm atau naik 30 Nm.</p>\r\n<p>Dengan transmisi 8-percepatan baru, akselerasinya pun meningkat. Menurut klaim pabrikan, figur 0-100 km/jam untuk Carrera S secepat 3,7 detik (dengan Sport Chrono Package 3,5 detik) dan Carrera 4S 3,6 detik (dengan Sport Chrono Package 3,4 detik). Kecepatan tertinggi tembus 308 km/jam (Carrera S) dan 306 km/jam (306 km/jam).</p>\r\n<p>Belum dapat diketahui perubahan dari segi pengendaraan dan pengendalian. Konstruksi kaki-kaki tetap sama. Hanya saja semua 911 sudah mengadopsi bodi dan trek roda lebih lebar 4,4 cm yang dulu cuma ada di Carrera 4S. Soal harga, di Jerman Porsche 911 Carrera S dilabeli 120.125 euro (Rp 1,9 miliar) dan Carrera 4S 127.979 euro (Rp 2,07 miliar). Selama ini 911 terus hadir di pasar Indonesia. Jadi, semestinya generasi baru 992 juga bakal mengaspal.</p>', 'Porsche_911_Seri_992,_Penyempurnaan_Tanpa_Banyak_Ubahan.jpg', 'Publish', 'Berita', 'Porsche 911 Seri 992, Penyempurnaan Tanpa Banyak Ubahan', '2018-12-09 19:17:39', '2018-12-09 18:17:39'),
(29, 1, 'tanggapi-avanza-xenia-baru-honda-tak-gegabah-benahi-mobilio', 'Tanggapi Avanza-Xenia Baru, Honda Tak Gegabah Benahi Mobilio', '<p>Menanggapi gempuran kompetitor baru di segmen LMPV, PT Honda Prospect Motor (HPM) tak ambil pusing. Hadirnya Xpander, Ertiga baru, sampai Avanza-Xenia baru yang rumornya siap meluncur tahun depan tak membuat Honda Indonesia gegabah benahi Mobilio.</p>\r\n<p>Dijelaskan oleh Marketing &amp; After Sales Service Director PT HPM, Jonfis Fandy, tingginya permintaan pada produk kompetitor dinilai wajar, lantaran euforia produk baru. Sedang konsumen bisa menilai kembali soal kualitas produk.</p>\r\n<p>Jonfis menekankan, namanya produk baru pasti menimbulkan ketertarikan tinggi. Namun setelah beberapa lama, kembali normal. \"Memang (ketertarikan) dari model selalu ada. Waktu kami launching Mobilio juga ada,&nbsp;<a href=\"https://www.oto.com/berita-mobil/nusantara-buka-diler-honda-terbesar-di-indonesia-21181157\" target=\"_blank\" rel=\"noopener\"><strong>pengaruh faktor kebaruan</strong></a>,\" ungkap Jonfis saat ditemui di sela balap HJSC dan HBSC di sirkuit BSD (2/12).</p>\r\n<p>\"Duforia model baru seperti, misalnya Xpander, sekarang konsumen sudah mulai lebih rasional. Makanya kami pikir dengan rasional ini konsumen sudah mulai balik melihat ke fungsional, running cost, bahan bakar, nilai jual kembali dan brand image-nya,\" tambah Jonfis.</p>\r\n<p>Meski begitu, Jonfis tak menampik kalau Xpander punya kontribusi pada pasar LMPV. Menurutnya, sejak kedatangan Xpander tahun lalu market LMPV terus naik. Sebelumnya, penjualan mobil jenis ini terus turun karena tergerus LCGC dan LSUV.</p>\r\n<p>Terkait&nbsp;<a href=\"https://www.oto.com/mobil-baru/honda/mobilio\" target=\"_blank\" rel=\"noopener\"><strong>penjualan Honda Mobilio,</strong></a>&nbsp;Jonfis menjelaskan angkanya kini makin positif. Khususnya dua bulan ke belakang, dengan angka 2.000-an unit per bulan, dari sebelumnya 1.500-an unit. \"Mobilio kalau dilihat dari trennya sudah mulai naik akhir tahun. Dulu kan 1.500, sekarang sudah naik 2.000 lebih, sempat 2.300 bulan lalu, bulan ini juga 2.000-an lebih,\" tukas Jonfis.</p>\r\n<p>Sementara dikatakan, belum ada rencana pembaruan bagi Mobilio untuk menghadapi kompetitor baru di LMPV, khususnya Avanza-Xenia yang isunya bakal disegarkan awal tahun depan. Penyegaran terakhir Mobilio pada 2017 lalu dinilai masih cukup untuk saat ini.</p>\r\n<p>\"Belum ada, 2017 kan baru kami lakukan. (Avanza-Xenia baru) kan sama saja kaya kami dulu tahun lalu, ubah depan, belakang sedikit. Kan bukan major change, tapi nanti kita lihat lah seperti apa,\" papar Jonfis. Meski begitu Honda tak menutup kemungkinan ada ubahan untuk Mobilio pada 2019.</p>\r\n<p>Mobilio sendiri jadi salah satu<a href=\"https://www.oto.com/berita-mobil/honda-tawarkan-promo-untuk-pembelian-br-v-dan-mobilio-bulan-ini-21186120\" target=\"_blank\" rel=\"noopener\"><strong>&nbsp;pilar jualan HPM</strong></a>&nbsp;selain dari keluarga seri Brio (yang memakai basis platform sama). Dengan itu, dipastikan Mobilio bakal terus diperhatikan perkembangannya. \"Keluarga Brio series lah, seperti Mobilio, BR-V, HR-V, semuanya pendukung penjualan kami. Yang produksi di Indonesia ya kami pertahankan, yang makan banyak soalnya,\" tutup Jonfis.</p>', 'Tanggapi_Avanza-Xenia_Baru,_Honda_Tak_Gegabah_Benahi_Mobilio.jpg', 'Publish', 'Berita', 'Tanggapi Avanza-Xenia Baru, Honda Tak Gegabah Benahi Mobilio', '2018-12-09 19:19:44', '2018-12-09 18:19:44'),
(30, 1, 'bmw-x7-versi-produksi-diperkenalkan-ini-spesifikasinya', 'BMW X7 Versi Produksi Diperkenalkan, Ini Spesifikasinya', '<p>BMW akhirnya resmi menampilkan&nbsp;<a href=\"https://www.oto.com/berita-mobil/galeri-foto-bmw-x7-dirakit-di-pabrik-21170854\" target=\"_blank\" rel=\"noopener\"><strong>X7 versi produksi</strong></a>&nbsp;di Los Angeles Auto Show 2018. Ia menjadi model SUV terbesar dan termahal yang dimiliki BMW, melengkapi seri X yang ada. Selain bertenaga besar, kabin lega, alat pijat otomatis, apalagi yang dijanjikan mobil ini?</p>\r\n<p>X7 ditawarkan dalam dua tipe mesin: xDrive40i dan xDrive50i. Untuk xDrive40i mengusung mesin 6 silinder TwinPower Turbo berkubikasi 3,0 liter. Tipe paling bawah ini mampu menghasilkan tenaga sudah cukup besar, mencapai 339 PS dan torsi 447 Nm. Wajar saja, mengingat X7 punya dimensi yang gambot. Tipe ini dibanderol $ 73.900 atau Rp 1,06 miliaran.</p>\r\n<p>Tipe tertingginya berspesifikasi mesin V8 4,4 liter TwinPower Turbo, dengan memproduksi daya 464 PS dan torsi 649 Nm. Harganya $92.600 atau setara Rp 1,329 miliaran jika dikonversi. Keseluruhan tenaga pada xDrive40i dan xDrive50i didistribusi melalui sistem transmisi otomatis 8-percepatan ke seluruh roda.</p>\r\n<p>Mobil berdimensi 5.176 x 1.998 x 1.805 mm (PxLxT) ini, punya daya tampung hingga 7 penumpang. Itu pun masih menyisakan ruang bagasi berkapasitas 1.376 liter. Fleksibilitas angkut barang dioptimalkan BMW dengan pelipatan bangku yang rata dengan lantai. Hasilnya, bila bangku baris kedua dan ketiga dilipat bakal menyediakan ruang bagasi mencapai 2.549 liter.</p>\r\n<p>Standar kenyamanan BMW memang tak perlu dipertanyakan lagi. Selain dimanjakan desain interior yang elegan, penumpang disuguhi panoramic roof berdimensi besar. Bangku pengendara dilengkapi pemanas. Bahkan dapat ditingkatkan dengan ventilasi atau pemijat otomatis. Bila konsumen menginginkan fitur ini dipasang ke seluruh bangku, BMW menyediakannya sebagai opsional. Kenyamanan pengendaraan turut ditunjang suspensi udara two-axle yang dapat diatur ketinggiannya, sehingga memudahkan akses penumpang dan memuat barang.</p>\r\n<p>Kemudahan akses hiburan, kontrol kendaraan dan navigasi didukung sistem BMW iDrive 7.0. Segala informasi ditampilkan dalam dua layar 12,3 inci. Terdapat BMW Intelligent Personal Assistant yang bisa diaktifkan melalui perintah suara. Pengemudi cukup mengucapkan \'Hey BMW\' atau menciptakan kata aktivitasi sendiri. Fitur hiburan turut diperkuat perangkat Harman Kardon Surround Sound Audio System. Setidaknya terdapat 16 speaker yang mencakup: 7 tweeter, 4 midrange speaker di pintu, 2 midrange speaker di pilar D, 2 bass speaker di bawah bangku depan dan 1 midrange center channel speaker.</p>\r\n<p>Urusan keamanan dan keselamatan berkendara tak luput dari perhatian BMW untuk X7. Versi terbawahnya sudah dilengkapi berbagai fitur keselematan, baik untuk pengemudi maupun lingkungan sekitar. Fiturnya meliputi: Extended Traffic Jam Assistant, Daytime Pedestrian Protection, Frontal Collision Warning with City Collision Mitigation, Lane Departure Warning, Active Blind Spot Detection, Rear Cross Traffic Alert dan kamera 360 derajat untuk memantau kondisi sekitar mobil. Bahkan BMW juga menawarkan opsi Remote Engine Start bagi konsumen yang ingin meningkatkan kenyamanan saat ingin berkendara.</p>\r\n<p>BMW X7 baru mulai dipasarkan di Amerika Serikat tahun depan. Bagaimana dengan Indonesia?&nbsp;<a href=\"https://www.oto.com/cari/mobil-crossover+bmw\" target=\"_blank\" rel=\"noopener\"><strong>Seri X di Indonesia</strong></a>&nbsp;cukup digemari dan semua lini sudah dijual. Cuma sejauh ini belum ada informasi terkait hal itu.&nbsp;</p>', 'BMW_X7_Versi_Produksi_Diperkenalkan,_Ini_Spesifikasinya.jpg', 'Publish', 'Berita', 'BMW X7 Versi Produksi Diperkenalkan, Ini Spesifikasinya', '2018-12-09 19:24:13', '2018-12-09 18:24:13'),
(31, 1, 'honda-hr-v-15-turbo-dipasarkan-di-eropa-tahun-depan', 'Honda HR-V 1.5 Turbo Dipasarkan di Eropa Tahun Depan', '<p>Honda Eropa memastikan segera memasarkan HR-V versi turbo. Dalam keterangan resminya, varian baru dinamai HR-V Sport, menggunakan mesin Civic generasi terbaru. Honda Eropa mulai produksi&nbsp;<a href=\"https://www.oto.com/mobil-baru/honda/hr-v\" target=\"_blank\" rel=\"noopener\"><strong>HR-V</strong></a>bermesin induksi turbo pada Desember 2018 dan dikirim ke konsumen awal 2019. Sayangnya belum ada informasi lebih jelas soal harga.</p>\r\n<p>Bila mengambil mesin Civic, artinya HR-V turbo punya performa meningkat tajam dibanding mesin naturally aspirated. Jantung mekanis berkubikasi 1.5-liter VTEC, dipadu dua sistem transmisi manual 6 percepatan atau CVT. Masing-masing transmisi punya keluaran tenaga dan torsi di putaran mesin berbeda. Tenaga puncak yang dihasilkan, diklaim mencapai 182 PS. Angkanya jauh dibandingkan&nbsp;<a href=\"https://www.oto.com/artikel-feature-mobil/naksir-honda-hr-v-pilih-varian-1-5-atau-1-8\" target=\"_blank\" rel=\"noopener\"><strong>versi 1,8 liter</strong>&nbsp;</a>yang dipasarkan di Indonesia, yakni 139 PS. Bahkan mampu menyamai mesin 2,4 liter sekalipun.</p>\r\n<p>Tenaga puncak HR-V turbo keluar pada putaran 5.500 rpm di tipe transmisi manual. Sedangkan versi CVT pada putaran 6.000 rpm. Untuk torsi, versi manual mampu memproduksi 240 Nm di rentang putaran mesin 1.900 hingga 5.000 rpm. Untuk transmisi CVT justru torsinya lebih kecil, 220 Nm pada 1.700 sampai 5.500 rpm.</p>\r\n<p>Selain mesin, Honda turut memberi ubahan di sektor sasis dan suspensi. Teknologi redaman \'Performance Damper\' diracik untuk kestabilan lebih baik. Fungsinya mengantisipasi pergerakan lateral dan puntiran melalui sasis. Sehingga mobil tetap stabil ketika bermanuver di tikungan, berpindah jalur secara tiba-tiba dan meredam getaran saat melewati jalan tak rata. Pengendalian ikut ditingkatkan melalui teknologi Honda Agile Handling Assist. Membuat kontrol kemudi&nbsp;<a href=\"https://www.oto.com/artikel-feature-mobil/5-alasan-honda-hr-v-masih-sangat-digemari\" target=\"_blank\" rel=\"noopener\"><strong>terasa lebih halus dan mantap</strong></a>.</p>\r\n<p>Rupa luar dan dalam kabin diberi sentuhan baru agar terlihat lebih sporty. Kesan elegan diperkuat melalui pengaplikasian panel high-gloss black chrome yang tetap menggambarkan grafis \'Honda Solid Wing Face\'. Terdapat grille bermotif sarang lebah dan aksen sama di area lampu kabut. Sektor penerangan termasuk daytime running lights dan lampu sein sudah LED sebagai standar.</p>\r\n<p>Sesuai namanya, beberapa detail disematkan untuk menonjolkan karakter sport. Seperti penggunaan splitter depan, side skirt, bemper belakang agresif yang keseluruhan berwarna hitam dan corong knalpot ganda. Tak ketinggalan pelek 18 inci berdesain propeler dinamis berwarna gelap mempertegas konsepnya</p>\r\n<p>Di dalam kabin, bangku pengemudi dan penumpang baris pertama diperbarui. Gaya dinamis dan sporty dipilih Honda menghiasi tampilan kabin. Perpaduan warna hitam dan merah gelap meliputi bangku, doortrim dan dashboard. Sedangkan bagian atapnya ditutup warna hitam.</p>', 'Honda_HR-V_1_5_Turbo_Dipasarkan_di_Eropa_Tahun_Depan.jpeg', 'Publish', 'Berita', 'Honda HR-V 1.5 Turbo Dipasarkan di Eropa Tahun Depan', '2018-12-09 19:26:45', '2018-12-09 18:26:45'),
(32, 1, 'hyundai-palisade-mendebut-suv-mewah-berkapasitas-8-penumpang', 'Hyundai Palisade Mendebut, SUV Mewah Berkapasitas 8 Penumpang', '<p>Hyundai resmi punya flagship untuk lini SUV mereka. Hyundai Palisade 2020 dikenalkan ke media global saat pembukaan Los Angeles Auto Show 2018. Tak hanya menjadi SUV termahal pabrikan, ia juga menawarkan kenyamanan melalui kapasitas kabin terbesar dan fleksibilitas kursi.</p>\r\n<p>Palisade menawarkan kapasitas penumpang&nbsp;<a href=\"https://www.oto.com/berita-mobil/sosok-hyundai-palisade-bocor-sebelum-resmi-meluncur\" target=\"_blank\" rel=\"noopener\"><strong>hingga delapan orang</strong></a>&nbsp;dewasa, dengan masih menyisakan ruang kargo lapang. Tersedia opsi kursi baris kedua model captain seat. Kepraktisannya didapat dari fleksibilitas pengaturan kursi. Melipat dan menggeser baris kedua, hanya melalui metode One-Touch dan seketika tersedia akses menuju baris ketiga. Semakin memudahkan lagi, jok baris ketiga mampu dilipat secara elektrik. Data luas kabinnya menunjukkan kapasitas bagasi terbesar dibandingkan lawan-lawannya seperti: Honda Pilot, Nissan Pathfinder dan Ford Explorer. Begitu pula ruang kakinya.</p>\r\n<p>Sehingga mobil ini sangat ideal untuk perjalanan jauh bersama keluarga. Ditambah lagi sarana hiburan lengkap mulai dari monitor layar sentuh 10-inci, wireless charging, 7 USB slot, jok baris kedua dengan ventilasi udara dan masih banyak lainnya. Kabin Palisade dirancang untuk menciptakan relaksasi bagi seluruh penumpang. Semua jok terlapisi material kulit premium dan Nappa.</p>\r\n<p>Ada yang menarik dalam rangkaian sistem infotainment. Palisade menawarkan sistem intercom agar pengemudi dapat lebih mudah berkomunikasi dengan penumpang baris kedua dan ketiga. Caranya dengan mengaktifkan mode conversation di sistem audio. Terdapat juga Rear Sleep Mode, yang memungkinkan pengemudi atau penumpang depan punya frekuensi suara audio sendiri tanpa perlu mengganggu penumpang belakang.</p>\r\n<p><a href=\"https://www.oto.com/berita-mobil/hyundai-buatan-cina-bakal-dikirim-ke-asia-tenggara-21184034\" target=\"_blank\" rel=\"noopener\"><strong>SUV berbadan besar</strong></a>&nbsp;memang sangat digandrungi pasar Amerika Utara. Ukuran yang gambot, memang sulit dipadukan desain bodi streamline. Kebanyakan berbentuk boxy seperti pola dasar desain Palisade ini. Namun bahasa desain Fluidic Sculpture 2.0 terpancar jelas. Kemiripan dengan Hyundai Santa Fe dan Kona dapat dikenali dari grille heksagonal baru dan model lampu berderet vertikal. Garis- garis di samping pun mirip, mengibaratkan Santa Fe sehabis minum obat penggemuk badan.</p>\r\n<p>Rancangan garis mengalir khas Fluidic Sculpture ternyata berdampak positif. Coefficient of drag (Cd) dihasilkan hanya sekecil 0,33. Itu berkat sudut pilar-A yang landai, garnish di sisi spoiler belakang, optimalisasi ventilasi udara di bumer depan dengan tambahan saluran di bagian dalam, panel aerodinamika di kolong dan deflektor di area roda belakang.</p>\r\n<p>Fitur di Palisade terbilang premium, termasuk juga sektor keselamatan. Semua varian dilengkapi teknologi Hyundai SmartSense. Yaitu peranti asistensi yang bekerja aktif maupun pasif untuk mencegah terjadinya kecelakaan. Isinya antara lain: Blind-Spot Collision-Avoidance Assist, Lane Keeping Assist, High Beam Assist, Forward Collision-Avoidance Assist, Rear Cross-Traffic Collision dan Smart Cruise Control.</p>\r\n<p>Sebagai sumber tenaga,<a href=\"https://www.oto.com/mobil-baru/hyundai\" target=\"_blank\" rel=\"noopener\"><strong>&nbsp;Palisade menggunakan mesin V6 3,8-liter&nbsp;</strong></a>dengan siklus Atkinson, direct injection dan dual CVVT. Belum ada data pasti soal daya dihasilkan. Estimasi tenaga sebesar 291 hp dan torsi 355 Nm. Pasangan transmisinya adalah otomatis 8-speed yang pengoperasiannya berupa tombol, bukan bentuk tuas lagi. Pilihan konfigurasi penggerak ada roda depan (FWD) dan empat roda (AWD). Sistem AWD digawangi HTRAC yang punya mode pengaturan torsi secara elektrik.</p>\r\n<p>Hyundai Palisade memang tipikal SUV besar yang cocok untuk pasar AS. Di sana, pemasarannya baru dimulai pertengahan 2019. Tapi produksinya tetap di tanah kelahirannya, Ulsan, Korea Selatan.&nbsp;</p>\r\n<p>Sumber: Newspress</p>', 'Hyundai_Palisade_Mendebut,_SUV_Mewah_Berkapasitas_8_Penumpang.jpg', 'Publish', 'Berita', 'Hyundai Palisade Mendebut, SUV Mewah Berkapasitas 8 Penumpang', '2018-12-09 19:29:06', '2018-12-09 18:29:06'),
(33, 1, 'sejarah-belimobil', 'Sejarah BeliMobil', '<p style=\"text-align: justify;\">Dealer mobil BeliMobil, adalah sebuah perusahaan yang bergerak di bidang jual beli mobil, khususnya jual beli mobil bekas. BeliMobil mulai aktif pada tahun 2011. Adalah Megiyanto, orang yang membangun Dealer BeliMobil.</p>\r\n<p style=\"text-align: justify;\">Cikal bakal Dealer BeliMobil ini berawal dari pencetusnya yang dulu bekerja sebagai marketing leasing mobil bekas di perusahaan XYZ. 12 tahun menggeluti dunia marketing leasing mobil bekas, Megi akhirnya memutuskan untuk keluar dari tempat ia bekerja. Selama 12 tahun berkecimpung di dunia kerjanya tersebut, Megi telah menyerap banyak ilmu.</p>\r\n<p style=\"text-align: justify;\">Dengan ilmu yang ia dapat selama 12 tahun bekerja di dunia marketing leasing mobil bekas, Megi memiliki iniasiatif menggunakan ilmu yang ia miliki tersebut untuk membuka usaha sendiri setelah ia memutuskan untuk berhenti dari tempat kerjanya tersebut.</p>\r\n<p style=\"text-align: justify;\">Usaha yang ia bangun tidak jauh-jauh dari dunia kerjanya yang dulu. Dahulu berkecimpung di dunia marketing leasing mobil bekas lalu sekarang Megi membuka usahanya sendiri, usaha yang bergerak di bidang jual beli mobil bekas bernama Dealer BeliMobil.</p>', 'belimobil.jpg', 'Publish', 'Profil', 'Sejarah BeliMobil', '2018-12-09 20:01:30', '2018-12-09 19:03:20'),
(34, 1, 'visi-misi-belimobil', 'Visi & Misi BeliMobil', '<p>Menjadi showroom mobil bekas dengan dagangan yang berkualitas. Di setiap transaksi yang terjadi di Garasi Auto Gallery diupayakan menjadi Repeat Order, di mana pembeli nantinya akan kembali lagi ke Dealer BeliMobil baik membeli maupun menjual unit, Dealer BeliMobil siap melayani. Hal tersebut juga merupakan langkah untuk mengembangkan persaudaraan bisnis, komunikasi yang berkelanjutan bukan sekali transaksi lalu selesai.</p>', 'belimobil_2.jpg', 'Publish', 'Profil', 'Visi & Misi BeliMobil', '2018-12-09 20:10:10', '2018-12-09 19:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_galeri` varchar(200) NOT NULL,
  `isi_galeri` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `posisi_galeri` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_user`, `judul_galeri`, `isi_galeri`, `website`, `gambar`, `posisi_galeri`, `tanggal_post`, `tanggal`) VALUES
(3, 1, 'Kenapa Pilih BeliMobil?', '<p>Dokumen dijamin<br />Tidak bekas tabrak<br />Tidak bekas banjir<br />Odometer asli</p>', 'http://localhost/carimobil/mobil', 'slider.jpg', 'Homepage', '2018-11-30 20:13:31', '2018-12-10 11:30:54'),
(5, 1, 'Kenapa Pilih BeliMobil?', '<p>Dokumen dijamin<br />Tidak bekas tabrak<br />Tidak bekas banjir<br />Odometer asli</p>', 'http://localhost/carimobil/mobil', 'evo21.jpg', 'Homepage', '2018-12-10 12:34:04', '2018-12-10 11:37:08'),
(6, 1, 'Kenapa Pilih BeliMobil?', '<p>Dokumen dijamin<br />Tidak bekas tabrak<br />Tidak bekas banjir<br />Odometer asli</p>', 'http://localhost/carimobil/mobil', 'evo.jpg', 'Homepage', '2018-12-10 12:34:25', '2018-12-10 11:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `deskripsi_kategori` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `deskripsi_kategori`, `gambar`, `urutan`, `tanggal`) VALUES
(5, 1, 'mpv', 'MPV', '<p>MPV punya fungsi utama mengangkut banyak penumpang.</p>', 'mpv.jpg', 1, '2018-12-09 19:43:37'),
(7, 1, 'suv', 'SUV', '<p>Mobil jenis SUV, menurut fungsinya mampu melewati berbagai medan, baik itu&nbsp;<em>off-road </em>maupun&nbsp;<em>on-road</em>. SUV bisa saja didesain untuk membawa muatan barang, atau penumpang. Mobil ini dituntut tangguh untuk mampu melampaui segala jenis medan.</p>', 'suv.jpg', 2, '2018-12-09 19:35:24'),
(8, 1, 'sedan', 'Sedan', '<p>Sedan identik dengan kenyamanan dan desainnya yang elegan, memberikan kesan mewah. Mobil ini juga menawarkan kestabilan dan kecepatan bagi pengendaranya. Desain mobil sedan juga membuatnya nyaman dikendarai bahkan dalam kecepatan tinggi atau pun jarak jauh.</p>', 'sedan.jpg', 3, '2018-12-09 19:29:43'),
(9, 1, 'city-car', 'City Car', '<p>City car atau urban car merupakan mobil yang desain mesin dan bodinya memang diperuntukkan bagi jalan raya di kota-kota besar. Kemacetan yang dihadapi setiap hari, menyebabkan mobil mungil yang hemat bahan bakar menjadi alternatif.</p>', 'city_car.jpg', 4, '2018-12-09 19:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaweb` varchar(50) NOT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(24) NOT NULL,
  `whatsapp` varchar(24) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `metatext` text,
  `map` text,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `id_user`, `namaweb`, `tagline`, `email`, `telepon`, `whatsapp`, `alamat`, `website`, `deskripsi`, `keywords`, `metatext`, `map`, `logo`, `icon`, `facebook`, `instagram`, `tanggal`) VALUES
(1, 1, 'BeliMobil', 'Delaer Mobil Bekas Terpercaya', 'contact@belimobil.com', '08123456789', '+628123456789', 'Jl. Kamal Raya No.8\r\nCengkareng\r\nJakarta-Barat', 'http://belimobil.com', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8697262375977!2d106.72523471428887!3d-6.14819306197785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f961c04f65%3A0x91667efd0496a1cd!2sBina+Sarana+Informatika!5e0!3m2!1sid!2sid!4v1539889106287\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Belimobil2.jpg', 'Belimobil1.jpg', 'http://facebook.com/belimobil', 'http://instagram.com', '2019-10-04 14:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_merek` varchar(255) NOT NULL,
  `nama_merek` varchar(25) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `id_user`, `slug_merek`, `nama_merek`, `gambar`, `urutan`, `tanggal`) VALUES
(5, 1, 'mercedes-benz', 'Mercedes-Benz', 'mercedes_benz.png', 1, '2018-12-09 19:54:05'),
(6, 1, 'bmw', 'BMW', 'bmw.png', 2, '2018-12-09 19:54:27'),
(7, 1, 'chevrolet', 'Chevrolet', 'chevrolet.png', 3, '2018-12-09 19:54:51'),
(8, 1, 'daihatsu', 'Daihatsu', 'daihatsu.png', 4, '2018-12-09 19:55:06'),
(9, 1, 'honda', 'Honda', 'honda.png', 5, '2018-12-09 19:55:23'),
(11, 1, 'nissan', 'Nissan', 'nissan.png', 7, '2018-12-09 19:56:19'),
(12, 1, 'suzuki', 'Suzuki', 'suzuki.png', 8, '2018-12-09 19:56:35'),
(13, 1, 'toyota', 'Toyota', 'toyota.jpg', 9, '2018-12-09 19:56:55'),
(16, 1, 'mitsubishi', 'Mitsubishi', 'mitsubishi.png', 0, '2019-10-04 16:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `slug_mobil` varchar(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `deskripsi_mobil` text NOT NULL,
  `harga` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `masa_stnk` date NOT NULL,
  `kilometer` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status_mobil` enum('Publish','Draft','','') NOT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_user`, `id_kategori`, `id_merek`, `slug_mobil`, `nama_mobil`, `deskripsi_mobil`, `harga`, `tahun`, `warna`, `transmisi`, `bahan_bakar`, `cc`, `masa_stnk`, `kilometer`, `gambar`, `status_mobil`, `keywords`, `tanggal_post`, `tanggal`) VALUES
(7, 1, 7, 10, 'pajero-dakar', 'Pajero Dakar', '<p>Pajero Dakar tahun 2018 like new</p>', 490000000, 2018, 'Hitam', 'Otomatis', 'Solar', 2500, '2023-01-09', 5000, 'pajero_dakar.png', 'Publish', 'Pajero Dakar', '2018-12-10 07:07:13', '2018-12-10 06:07:13'),
(8, 1, 5, 10, 'xpander-sport-at', 'Xpander Sport A/T', '<p>Mitsubishi Xpander Sport A/T baru 5 bulan pemakain, kondisi mulus seperti baru.</p>', 247000000, 2018, 'Putih', 'Otomatis', 'Bensin', 1500, '2023-07-13', 400, 'Xpander.jpg', 'Publish', 'Xpander Sport A/T', '2018-12-10 07:23:03', '2018-12-10 06:23:03'),
(9, 1, 9, 10, 'mitsubishi-mirage-exceed-at', 'Mitsubishi Mirage Exceed A/T', '<p>Mitsubishi Mirage Exceed A/T terawat, body mulus, mesin normal.</p>', 120000000, 2016, 'Putih', 'Otomatis', 'Bensin', 1200, '2021-06-15', 27000, 'mirage.jpg', 'Publish', 'Mitsubishi Mirage Exceed A/T', '2018-12-10 07:34:45', '2018-12-10 06:34:45'),
(10, 1, 8, 13, 'toyota-vios-g-2012-mt', 'Toyota VIOS G 2012 MT', '<p>.Mobil Mulus<br />.Mesin halus<br />.Bukan bekas taxi<br />.Tipe G sudah komplit<br />spion Sen<br />Rem Double Disc<br />Spiom lipat<br />Eliktric Miror<br />Sensor Parkir</p>', 117000000, 2012, 'Hitam', 'Manual', 'Bensin', 1500, '2022-08-10', 70000, 'vios.jpg', 'Publish', 'Toyota VIOS G 2012 MT', '2018-12-10 07:45:37', '2018-12-10 06:45:37'),
(11, 1, 5, 13, 'innova-g-25-2010-manual-diesel', 'Innova G 2.5 2010 Manual Diesel', '<p>Dijual Innova G 2.5 2010 Manual Diesel<br />- tangan pertama<br />- KM 140rb<br />- pajak baru bayar<br />- dijamin bukan bekas insiden/travel/rental</p>', 175000000, 2010, 'Hitam', 'Manual', 'Solar', 2500, '2020-10-09', 140000, 'innova_2010.jpg', 'Publish', 'Innova G 2.5 2010 Manual Diesel', '2018-12-10 07:52:25', '2018-12-10 06:52:25'),
(12, 1, 7, 13, 'toyota-rush-g-2012-matic', 'Toyota Rush G 2012 Matic', '<p>*Kondisi:<br />-Body mulus<br />-Mesin responsif<br />-Interior bersih<br />-Ac Nyes<br />-Pajak hidup<br />-Tinggal pakai tidak ada PR<br />-Liat pasti suka<br />-surat2 aman</p>', 160000000, 2012, 'Hitam', 'Otomatis', 'Bensin', 15000, '2022-06-13', 80000, 'rush.jpg', 'Publish', 'Toyota Rush G 2012 Matic', '2018-12-10 08:07:17', '2018-12-10 07:07:17'),
(13, 1, 9, 13, 'toyota-agya-g-at-2015', 'Toyota Agya G A/T 2015', '<p>Toyota Agya<br />- Type G Automatic<br />- Pajak Baru<br />- Spec: Elektrik Mirror, Power Window, Power Stering, Central Lock, Remot, Foglamp, Spoiler Belakang, Eco Indikator, CD-Dvd-Aux-USB-Radio Player, Sensor Parkir, Wiper Belakang, Sarung Jok , Airbag SRS.<br /><br />Kondisi Siap pakai Tanpa Kendala<br />Surat-surat Ready + Lengkap (Bpkb-Faktur-Fotocopy Ktp-Kwitansi Kosong-Stnk-Buku Panduan-Buku Service)</p>', 100000000, 2015, 'Merah', 'Otomatis', 'Bensin', 1200, '2020-09-25', 55000, 'agya.jpg', 'Publish', 'Toyota Agya G A/T 2015', '2018-12-10 08:13:15', '2018-12-10 07:13:15'),
(14, 1, 9, 8, 'ayla-x-manual', 'Ayla X Manual', '<p>Kondisi Kendaraan :<br />Full Orisinil Cat Asli<br />Istimewa Sekali<br />Mulus Sekali<br />Terawat Sekali<br />Interior Terawat Dan Bersih Sekali<br />Jog Masih Orisinil<br />AC Dingin Sekali<br />Mesin Halus Dan Kering Sekali<br />Kaki2 Oke<br />Suspensi Empuk Dan Nyaman&nbsp;<br />Ban Masih Tebal Semua<br />Ban Serep Juga Tebal<br />Mobil Jaminan Tidak Pernah Nabrak<br />Mobil Tidak Ada Perawatan<br />Mobil Siap Pakai<br />Di Jamin Sekali Lihat Ga Mengecewakan&nbsp;</p>', 95000000, 2016, 'Putih', 'Manual', 'Bensin', 1200, '2021-02-18', 39000, 'ayla.jpg', 'Publish', 'Ayla X Manual', '2018-12-10 08:36:50', '2018-12-10 07:36:50'),
(15, 1, 9, 12, 'suzuki-ignis-gx-mt-12', 'Suzuki IGNIS GX MT 1.2', '<p>suzuki ignis gx mt<br />mobil siap jalan jauh...<br />semuanya masih original suzuki.</p>', 150000000, 2017, 'Biru', 'Manual', 'Bensin', 1200, '2022-12-16', 5000, 'Suzuki-Ignis.png', 'Publish', 'Suzuki IGNIS GX MT 1.2', '2018-12-20 20:41:47', '2018-12-20 19:41:47'),
(16, 1, 8, 6, 'bmw-318i-e46-at', 'BMW 318i E46 A/T', '<p>pajak panjang baru ganti plat<br />mesin sehat<br />matic sehat<br />kelistrikan normal<br />ac dingin</p>', 80000000, 2001, 'Silver', 'Otomatis', 'Bensin', 2000, '2021-04-20', 35000, 'Bmw_318i_e46.jpg', 'Publish', 'Bmw 318i e46 th 2001 A/T silver', '2018-12-10 09:30:20', '2018-12-10 08:30:20'),
(17, 1, 8, 6, 'bmw-e39-528-at', 'Bmw E39 528 A/T', '<p>bmw asli e39 2800cc tahun 98<br />kondisi mesin sehat</p>', 65000000, 1998, 'Hitam', 'Otomatis', 'Bensin', 2800, '2023-02-15', 160000, 'bmw_e39.jpeg', 'Publish', 'bmw asli e39 2800cc tahun 98', '2018-12-10 09:40:41', '2018-12-10 08:40:41'),
(18, 1, 7, 11, 'nissan-juke-at', 'Nissan Juke A/T', '<p>nissan juke 2011<br />mulus<br />matic<br />pjk hidup<br />putih terawat</p>', 140000000, 2011, 'Putih', 'Otomatis', 'Bensin', 1500, '2021-03-24', 35000, 'nissan_juke.jpg', 'Publish', 'Nissan Juke A/T', '2018-12-10 09:49:48', '2018-12-10 08:49:48'),
(19, 1, 8, 7, 'chevrolet-camaro-lt-facelift-2015-36-v6', 'Chevrolet Camaro LT Facelift 2015 3.6 V6 ', '<p>3600CC V6 Engine 320HP, 6Speed, Km 5.000, Antik, Tgn 1 Dr Br, Full Original Paint, Mbl Simpanan, Hanya Utk Pajangan di Garasi Rumah, Sunroof, Original Leather With Electric Seat, Boston Audio System, Head Up Display, Cruise Control, 4Seater, Tinggal Pakai Saja.&nbsp;</p>', 1335000000, 2015, 'Merah', 'Otomatis', 'Bensin', 3600, '2020-07-11', 5000, 'camaro.jpg', 'Publish', 'Chevrolet Camaro LT Facelift 2015 3.6 V6 ', '2018-12-10 09:56:26', '2018-12-10 08:56:26'),
(20, 1, 8, 5, 'mercedes-benz-e400-amg-facelift-2016-full-spec', 'Mercedes Benz E400 AMG Facelift 2016 Full Spec', '<p>Plat ganjil, NIK 2015, Full Spec E400, 3000CC V6, KM 6.000, Rear Seat Entertaintmet, 2TV Headrest, AMG Package (Velg, Bumper, Brake, Pedal Brake, DRL+LED Headlamp, Sunroof+Moonroof, Antik Jarang Sekali Pakai, Hanya Utk Pajangan Utk Di Garasi Rumah, Kondisi 99,9% Persis Baru, Masih Wangi Baru, Harman Kardon Audio, Eletric With Memory Seat, Original Leather Seat, Siap Pakai</p>', 870000000, 2016, 'Putih', 'Otomatis', 'Bensin', 3000, '2021-07-14', 5000, 'bmw_e400.jpg', 'Publish', 'Mercedes Benz E400 AMG Facelift 2016 Full Spec', '2018-12-10 10:15:44', '2018-12-10 09:15:44'),
(21, 1, 8, 10, 'lancer-evolution-evo-x', 'Lancer Evolution (Evo) X ', '<p>Mitsubishi Lancer Evo X Premium Package (Full Specs Stage-2)<br /><br />Tahun 2008<br />Full Paper<br />AWD<br />Sunroof<br />Odo 23k on going<br />M/T<br />Good Condition!!<br /><br />Specs:<br />- HKS boostcontroller EVC evo X edition<br />- HKS turbo timer type1<br />- HKS spec R intercooler<br />- HKS upperpipe intercooler<br />- HKS lowerpipe intercooler<br />- HKS blow off valve ssqv IV<br />- HKS racing suction kit<br />- Fullrace header<br />- Weldcraft open close muffler<br />- HKS coilover<br />- HKS turbo GT3240<br />- HKS 256 | 248 camshaft set<br />- Carbonetics clucth<br />- Hks oil cooler (double)<br />- AMS fuel rail<br />- Sard fuel press<br />- DW injector&nbsp;<br />- Walbro fuelpump<br />- Carbing oil castank<br />- Defi shift light<br />- defi boost meter<br />- Cobb tuning&nbsp;<br />- Ralliart shift knob<br />- Rayz ZE 40 R 18&nbsp;<br />- Ban advan neova<br />- Cp carillo piston<br />- BC con rod<br />- Forged racing radiator</p>', 680000000, 2008, 'Merah', 'Manual', 'Bensin', 2000, '2020-07-02', 25000, 'lancer_evo_x.jpg', 'Publish', 'Lancer Evolution (Evo) X Full Specs Stage-2', '2019-10-04 18:29:49', '2019-10-04 16:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(11, 'Indah', 'indah@gmail.com', 'hi', '2019-10-04 16:07:04'),
(12, 'Dewi', 'dewi@gmail.com', 'hai', '2019-10-04 16:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal`) VALUES
(1, 'Baihirul Fuat', 'admin@belimobil.com', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin', '2018-12-09 16:08:55'),
(3, 'Samara', 'samara@gmail.com', 'samara', '8cb2237d0679ca88db6464eac60da96345513964', 'User', '2019-10-04 16:42:26'),
(4, 'Harmono', 'harmono@gmail.com', 'harmono', '8cb2237d0679ca88db6464eac60da96345513964', 'User', '2018-11-25 19:57:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
