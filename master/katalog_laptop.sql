-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2010 at 06:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `katalog_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idartikel` int(5) NOT NULL auto_increment,
  `idcateg` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY  (`idartikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `idcateg`, `judul`, `isi`, `time`) VALUES
(1, 1, 'Dell Inspiron Mini 12', 'Produk keluaran terbaru dari DELL ini sangat ditunggu-tunggu, termasuk kami yang juga menunggu kedatangan produk ini. Design notebook yang begitu menawan dan sangat menarik perhatian.\r\n\r\nBerikut detail spesifikasi untuk Dell Mini Inspiron 12 :\r\n\r\nProcessor\r\nIntel Atom Z520/Z530 Silverthorne\r\n\r\nProcessor Speeds\r\n1.33GHz, 533MHz, 512K\r\n1.6GHz, 533MHz, 512K\r\n\r\nSystem Chipset\r\nIntel US15W\r\n\r\nMemory\r\n1024MB DDR2 533 Mhz\r\n\r\nLCD Types\r\n12.1? WXGA TL 1280 x 800 (CCFL)\r\n\r\nVideo\r\nIntel 500 GMA (Intel Integrated only)\r\n\r\nVideo Memory\r\nUp to 8MB shared\r\n\r\nAudio\r\nALC269 Audio\r\n\r\nUSB Support\r\n3x USB 2.0 ports\r\n\r\nHard Drive\r\nPATA 40GB/60GB/80GB\r\n\r\nMedia Bay Options\r\nExternal Only\r\n\r\nWireless Options\r\nWLAN / WWAN\r\n\r\nBluetooth Support\r\nMini card support for Bluetooth\r\n\r\nCamera\r\n1.3 megapixel, Fixed bezel-mounted camera\r\n\r\nNIC (LOM)\r\nLAN 10/100\r\n\r\nModem\r\nExternal USB modem (no internal option)\r\n\r\nConnectors\r\n2x full size minicard slots; accessible from Under the Keyboard; VGA port; RJ-45 Ethernet port 10/100 LAN; Audio – Headphone out x1 jack; Audio – Microphone in x1 jack; 3 x USB 2.0 ports; 3-in-1 media card reader SD-HC/MMC/MS; Modem is via external USB dongle\r\n\r\nOperating system\r\nUbuntu 8.04 (Post RTS)\r\nWindows Vista 32 Bit SP1\r\nWindows XP SP3(Post RTS)\r\n\r\nDocking Support\r\nNone\r\n\r\nAC adapter\r\nDell 30W Adapter\r\nBattery Base 3-cell (2.2Ahr, 31Whr) battery\r\nUpsell 6-cell (2.6Ahr, 56Whr) battery\r\n\r\nWeight\r\n2.6lbs (1.20kg) when configured with entry 3-cell battery, 40GB HDD', '2010-06-20'),
(6, 1, 'Tips Merawat laptop / notebook', 'Melalui tulisan sederhana kali ini akan disajikan berbagai tips sederhana dalam merawat dan menghindarkan laptop Anda dari kerusakan dini. Ini akan berguna dalam menambah umur laptop Anda.\r\n<br>\r\n1. Jangan sembarangan mendownload software gratis dari internet.\r\n<br>\r\nTerlebih lagi misalnya software yang seolah-olah sebagai suatu antivirus. Gunakan software-software yang telah Anda dapatkan dari paket laptop yang Anda beli. Risiko virus bisa merusak ke dalam laptop Anda jika Anda sembarangan menggunakan software dari internet. Jika Anda tetap ingin menggunakan software hasil download, maka pastikan sudah Anda scan software tersebut dengan antivirus yang Anda miliki.\r\n<br>\r\n2. Jangan letakkan laptop di lantai.\r\n<br>\r\nKetika laptop Anda di lantai, maka risiko laptop terinjak kaki orang, anak Anda, atau binatang peliharaan akan sangat besar. Anak kecil akan mengira laptop Anda mainan dan binatang peliharaan Anda bisa saja merusak bagian-bagian tertentu dari laptop. Selain itu laptop yang diletakkan di lantai akan cepat kotor oleh debu.\r\n<br>\r\n3. Tancapkan ke stabilizer listrik laptop Anda.\r\n<br>\r\nJika Anda sedang bekerja di laptop dengan menggunakan listrik (tanpa baterai), maka sebaiknya gunakan stabilizer yang bisa mencegah terjadinya tegangan listrik yang tidak stabil ke laptop Anda.\r\n<br>\r\n4. Jangan letakkan benda apapun di antara keyboard dan layar laptop.\r\n<br>\r\nSeringkali penulis jumpai seseorang yang menggunakan laptop, kemudian meletakkan kertas-kertas di atas keyboard laptop, kemudian menutup laptopnya. Hal ini sangat berbahaya, karena risiko layar tergores menjadi besar. Tentunya Anda tidak ingin mengganti layar laptop gara-gara tergores bukan?\r\n<br>\r\n5. Jangan letakkan laptop Anda pada permukaan yang terlalu empuk.\r\n<br>\r\nMisalnya laptop Anda letakkan pada sofa yang sangat empuk, sehingga laptop menjadi terlihat agak tenggelam di dalam sofa. Ini adalah sangat berbahaya, karena dapat menghambat keluarnya panas dari dalam laptop dan menjadikan laptop Anda kepanasan.\r\n<br>\r\n6. Berhati-hatilah ketika membawa laptop Anda di dalam tas.\r\n<br>\r\nJangan gunakan sembarang tas untuk membawa laptop Anda. Gunakan tas yang memang digunakan untuk laptop sehingga benda-benda lainnya tidak akan menggores bagian-bagian tertentu pada laptop.\r\n<br>\r\n7. Jangan pernah minum atau makan atau meletakkan minuman yang mengandung cairan di sekitar laptop.\r\n<br>\r\nIni sangatlah berbahaya, karena laptop sangat peka terhadap cairan yang mengenai laptop, misalnya saja cairan yang masuk ke dalam keyboard.\r\n<br>\r\n8. Jangan pernah berusaha untuk membongkar laptop Anda sendiri.\r\n<br>\r\nIni merupakan tindakan yang sangat tidak bijaksana. Laptop bukanlah seperti radio atau tape recorder biasa. Banyak bagian-bagian yang sangat kecil yang dari pabriknya saja sudah dirakit dengan menggunakan presisi robot. Jika Anda ceroboh, maka laptop Anda bisa rusak parah. Bawalah selalu laptop yang rusak ke dealer atau service center dari laptop Anda.', '2010-06-15'),
(7, 1, 'Tips Menghemat Baterai di Notebook/Netbook', 'Tips ini tidak akan bermanfaat jika baterai dari notebook anda memang sudah tua atau kondisinya telah drop yang hanya bertahan selama beberapa menit saat dinyalakan. Tidak ada cara lain selain mengganti baterai notebook lama dengan yang baru. Untuk yang lain, yang kondisi baterai notebooknya masih normal, bisa mencoba tips menarik ini.<br>\r\nUntuk membantu memaksimalkan kinerja dari baterai notebook anda, penting untuk terlebih dahulu memahami bagaimana sebenarnya cara kerja baterai dan kemana saja listrik dialirkan. Dengan memahami hal tersebut anda akan dapat menentukan langkah apa saja yang harus dikerjakan guna menghemat baterai dari laptop yang anda miliki.<br>\r\n<br><br>\r\nHal pertama yang perlu anda lakukan untuk efisiensi daya adalah menentukan dengan cermat konfigurasi penghematan baterai, kapan layar notebook anda akan mati secara otomatis apabila tidak digunakan (lihat diagram sekali lagi, layar LCD merupakan perangkat yang paling boros daya) dan pngaturan-pengaturan yang lain.<br><br>\r\nSelanjutnya, lakukan efisiensi dari perangkat lain seperti menentukan berapa lama hardisk drive akan berhenti setelah tidak ada transfer data, penghematan daya untuk Wi-Fi, processor, kartu grafis dan perangkat lainnya. Anda juga dapat menentukan kapan kipas dari notebook akan menyala, apakah tetap pada kondisi default (mengikuti kinerja operating system) atau sesuai dengan yang anda kehendaki (pada beberapa kondisi akan memperlambat kinerja dari notebook) yang tentunya akan lebih menghemat baterai dari notebook anda.<br><br>\r\nSesuai dengan apa yang kita lihat pada diagram, hal paling penting dari semua cara penghematan baterai, adalah dengan melakukan penghematan daya pada layar. Anda dapat melakukan penghematan dengan mengendalikan cahaya yang keluar dari layar notebook dan meredupkannya seredup-redupnya sampai batas tertentu dimana anda masih dapat melihat layar notebook. Meskipun penting, hal ini tidak dianjurkan untuk anda yang memiliki penglihatan yang kurang tajam karena dapat menyebabkab sakit pada mata anda. Jadi meskipun penting, jangan korbankan mata anda hanya untuk sebuah baterai notebook :)\r\n\r\nLanjut dengan langkah selanjutnya, matikan beberapa device yang pada saat itu tidak digunakan tetapi masih aktif. Device yang mungkin tidak berguna seperti Wi-Fi, bluetooth, LAN card maupun device lain yang tidak diperlukan. Cobalah untuk menghindari pemakaian device eksternal seperi hardisk eksternal, flash disk atau perangkat USB lain karena beberapa dari device itu memang sangat menguras kinerja dari baterai notebook anda.<br><br>\r\nSelain hardware, kadang software juga menjadi penyebab notebook anda tidak dapat bertahan lama saat dinyalakan. Terlebih lagi jika pada notebook anda banyak aplikasi yang berjalan di background (aplikasi yang tetap berjalan tetapi tidak terlihat pada layar) yang sebenarnya aplikasi tersebut tidak diperlukan. Bagi yang sudah terbiasa mengutak-atik system, anda dapat dengan mudah untuk mematikan aplikasi yang tidak berguna tersebut. Tetapi, bagi yang “blank” dan tidak terbiasa akan kebingungan bagaimana cara mematikan aplikasi tersebut. Hal ini dapat diatasi dengan cara menggunakan software Aerofoil yang dapat membantu anda untuk mengatasinya. Aerofoil adalah salah satu software gratis yang dapat membantu anda memanajemen aplikasi yang berjalan di notebook anda serta dapat membantu anda melakukan penghematan daya di notebook.', '2010-06-22'),
(8, 1, 'Lenovo G460, Notebook Mengagumkan', 'Lenovo G460, hadir dengan warna hitam klasik yang tidak begitu menonjolkan design yang ciamik. Mungkin karena notebook ini memang sengaja di design agar terlihat lebih ringan dan compak sehingga untuk sisi design tidak begitu di tonjolkan oleh produk ini.\r\n\r\nDengan dimotori oleh Processor Intel Core i3-M350 2,27GHz, notebook ini sudah cukup membantu untuk keperluan sehari-hari seperti menggunakannya untuk keperluan kantor, kepentingan study di kampus maupun digunakan oleh seorang pelajar dalam menyelesaikan tugas masing-masing. Ditambah lagi, dukungan RAM sebesar 2GB, menambah daya kerja dari produk satu ini. Dan yang paling menarik, integrasi VGA NVIDIA GeForce G310M 512MB di dalamnya, membuat notebook ini layak diacungi jempol mengingat pada seri sebelumnya Lenovo tidak menghadirkan video dengan kapasitas RAM sebesar ini.<br><br>\r\nKesimpulan kami, Lenovo G460 ini bukanlah sebuah notebook yang di design elegan karena lebih menonjolkan sisi kerampingan dan fungsionalitas. Faktor terpenting yang membuat produk ini patut diacungi jempol adalah dukungan VGA NVIDIA GeForce G310M 512MB, yang mempunyai kualitas dan kapasitas memory yang lebih baik dari tipe notebook  buatan Lenovo sebelumnya.', '2010-06-09'),
(9, 2, 'Cara Membuat Virtual Hard Disk Drive di Windows 7', 'Virtual hard disk drive adalah sebuah media penyimpanan virtual yang memanfaatkan hard disk fisik yang ada di perangkat komputer kita. Dengan memanfaatkan teknologi ini, kita dapat mengatur hard disk virtual tanpa harus mengganggu drive yang lain.\r\n<br><br>\r\nProses ini akan menciptakan sebuah drive baru pada perangkat komputer kita tanpa harus melakukan partisi ulang atau tambahan pada hard disk drive yang tentunya akan memperkecil resiko kehilangan data dari pada saat kita membuat partisi tambahan pada hard disk. Windows 7 akan membuat file .VHD baru yang menjadi isi seluruh file pada hard disk virtual dengan ukuran minimal 3MB.\r\n<br><br>\r\nVirtual Hard Disk Drive ini adalah salah satu fitur baru yang akan menambah fungsi baru pada Windows 7. Anda dapat memanfaatkannya untuk sekedar menambah volume drive pada perangkat komputer yang anda pakai atau memanfaatkannya untuk berbagi file pada jaringan di tempat anda.', '2010-06-23'),
(11, 1, 'Tips Apabila Notebook Terkena Air', 'Pada saat hujan & banjir, yang perlu diperhatikan adalah peralatan elektronik seperti Notebook. Perangkat ini memiliki kerentanan terhadap air karena memiliki komponen mekanis seperti Hard Disk, LCD dan Optical Disc. Kita pasti tidak mau kehilangan notebook berharga jutaan dalam waktu semalam saja, apalagi didalamnya mengandung data-data penting. Dibawah ini ada beberapa tips yang dapat membantu pada saat Notebook terkena hujan, atau banjir:\r\n<br><br>\r\n    * Jika Notebook dalam keadaan basah & kotor terkena air banjir, jangan sekali-kali menyalakannya (power-on) apalagi menggunakan colokan listrik. Keadaan ini malah akan memperparah Notebook, karena menyebabkan korsleting (short) pada komponen elektronika-nya. Sebaiknya segera memindahkan notebook ketempat kering, membuang semua sisa air dan kotoran yang masih melekat dengan lap kain bersih.\r\n<br><br>\r\n    * Selanjutnya adalah mencopot battere, lalu membersihkan dan mengeringkannya. Jika terlihat kotor, bersihkan dengan kain halus dengan sedikit air dan digosok perlahan. Hati-hati terhadap kutub-kutub plus-minus battere (biasanya dari logam berwarna kuning berkilau dibagian bawah/samping bodi battere), bersihkan bagian ini sampai kering. Jika sudah kering sebaiknya battere jangan dipasang kembali dulu keNotebook.\r\n<br><br>\r\n    * Jemur Notebook dibawah sinar matari, dan letakkan dengan berpindah posisi agar air dibagian dalam bisa langsung keluar. Setelah dijemur sampai kering, bisa disemprot dengan pengering rambut (hair-dryer) agar bagian dalam notebook bisa dijangkau. Semprotkan dilubang air-flow Notebook (biasanya dibagian belakang dekat konektor) dan lubang lainnya, seperti speaker, port-connector, power, keyboard, dsb. Hati-hati jangan sampai posisi Hair-dryer terlalu dekat agar tidak merusak komponennya.\r\n<br><br>\r\n    * Battere juga dapat dijemur dibawah matahari, tapi sebaiknya dibungkus kain terlebih dahulu. Battere tipe lithium (Li-Ion) sangat sensitif terhadap lingkungan panas yang dapat membuat struktur kimiawi-nya rusak dan beresiko meledak. Sebaiknya dijemur sampai 1 – 3 jam saja. Setelah itu dapat dimasukkan ke dalam kulkas (tetap dibungkuskain), dan jangan memasukkan kedalam frezeer. Suhu dingin selama beberapa jam dapat mengembalikan kemampuan battere.\r\n<br><br>\r\n    * Jika sudah terbiasa dengan hal-hal teknis, kita dapat membuka chassis (bodi) notebook untuk mengeluarkan perangkat utama (seperti Processor, Hard Disk, Motherboard, RAM, dsb) agar memastikan semuanya tidak mengalami kerusakan. Arsitektur notebook memiliki sistem yang cukup sederhana, terdiri dari berbagai modul card yang dikoneksikan menggunakan konektor & kabel. Yang perlu diingat, karena komponen notebook biasanya kecil dan halus, diperlukan perlakuan yang ekstra hati-hati.\r\n<br><br>\r\n    * Siapkan toolset seperti obeng plus-minus berukuran kecil dan sedang, lebih baik jika memiliki Ampere Meter. Balik notebook, dan copot semua mur dibagian bawah agar chassis dapat terbuka (umumnya HDD, RAM & Optical Disk terletak dibagian bawah). Hafalkan lokasi mur tersebut agar pada saat pemasangan kembali tidak salah letak. Telusuri dengan hati-hati semua bautyang belum terbuka, dan pisahkan semua komponen yang telah dibuka.\r\n<br><br>\r\n    * Perhatikan semua kabel dan konektor yang ada. Jangan sampai terputus atau rusak. Ini juga termasuk sirkuit yang ada terdapat didalam motherboard yang tidak boleh tergores atau lecet.\r\n<br><br>\r\n    * Komponen yang paling rentan mengalami kerusakan adalah perangkat mekanis seperti Hard Disk dan Optical Disc (CD/DVD). Jika sudah dapat membuka kedua perangkat ini, langsung pisahkan dan keringkan sama seperti langkah diatas.\r\n<br><br>\r\n    * Buka semua bagian dalam Notebook dan copot habis komponen semaksimal yang dapat dilakukan. Pisahkan semua peralatan, lalu jemur kembali sampai kering dan sesekali disemprot dengan hair-dryer. Setelah semuanya kering, ukur semua komponen dengan Ampere Meter dengan cara menghubungkan konektor ke alat tersebut. Jika dari angkanya di-indikasikan masih baik, berarti komponen dapat digunakan kembali. Jangan lupa untuk melakukan testing terhadap battere juga.\r\n<br><br>\r\n    * Pasang kembali semua komponen dengan hati-hati ke posisi semula dibagian dalam notebook. Kencangkan semua baut lalu setelah selesai semprot kembali dengan hair-dryer untuk memastikan semuanya telah kering. Pasang battere ketempat semula.\r\n<br><br>\r\n    * Sebaiknya gunakan listrik untuk melakukan testing pertama, dengan asumsi battere telah mengalami kekosongan daya. Jangan langsung dinyalakan, biarkan battere menyerap energi listrik kurang lebih selama satu jam.\r\n<br><br>\r\n    * Setelah itu copot kabel listrik, lalu nyalakan notebook seperti biasa. Jika tampilan notebook jalan seperti biasa, masuk ke menu BIOS dengan menekan tombol DEL atau F2 (tergantung tipe Notebook). Cek semua data peralatan BIOS apakah sudah benar, dan lakukan setting seperlunya seperti tanggal, booting priority dan sebagainya. Jika tidak mengerti, dapat melakukan setting original seperti kondisi aslinya pada saat dibeli. Pilihan ini pasti tersedia pada menu BIOS.\r\n<br><br>\r\nJika notebook tidak menyala sebagaimana mestinya, berati ada komponen yang mengalami kerusakan parah. Tidak ada pilihan lain selain menggantinya dengan yang baru. Kita dapat menghubungi vendor / dealer notebook tersebut atau membawanya ketempat reparasi notebook yang banyak tersedia. Kita hanya dapat berharap agar kerusakan tersebut tidak terlampau banyak dan mengenai komponen utama seperti Processor maupun Motherboardyang berharga cukup mahal.', '2010-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `art_categ`
--

CREATE TABLE IF NOT EXISTS `art_categ` (
  `idcateg` int(10) NOT NULL auto_increment,
  `nama_categ` varchar(25) NOT NULL,
  PRIMARY KEY  (`idcateg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `art_categ`
--

INSERT INTO `art_categ` (`idcateg`, `nama_categ`) VALUES
(1, 'hardware'),
(2, 'software');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL auto_increment,
  `first_name` varchar(10) default NULL,
  `email` varchar(35) default NULL,
  `phone` varchar(15) default NULL,
  `message` text,
  `time` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `email`, `phone`, `message`, `time`) VALUES
(1, 'sdf', 'asdf@asdf.dd', '123', 'asdf', '2010-06-21 14:54:44'),
(2, 'a', 'aaa@sss.bb', '1234', 'halloooo', '2010-06-07 14:54:48'),
(3, 'asdf', 'asdf@adsgf.adsf', '1234', 'sadfadsf', '2010-06-07 14:54:51'),
(4, 't', 'taspestaku@gmail.com', '1', 'ah', '2010-06-27 15:56:54'),
(5, 'ariwebe', 'ariwebe@awib.web.id', '3022999', 'nanya laptop yg battery nya tahan lama hingga 24 jam ada ga?? thx', '2010-06-29 17:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `gb_produk`
--

CREATE TABLE IF NOT EXISTS `gb_produk` (
  `idgb` int(5) NOT NULL auto_increment,
  `idmerk` int(5) NOT NULL,
  `idproduk` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY  (`idgb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `gb_produk`
--

INSERT INTO `gb_produk` (`idgb`, `idmerk`, `idproduk`, `gambar`) VALUES
(1, 1, 3, 'compaq_cq40_280.jpg'),
(2, 1, 1, 'hp_mini1014_280.jpg'),
(3, 2, 2, 'dell_a1440_280.jpg'),
(4, 2, 4, 'dell_11z_280.jpg'),
(5, 2, 5, 'Dell_V13_280.jpg'),
(6, 3, 6, 'lenovo_u150_280.jpg'),
(7, 4, 7, 'toshi_m500_280.jpg'),
(8, 4, 7, 'tosh_m500_281.jpg'),
(9, 1, 8, 'hp_mini_110_280.jpg'),
(10, 5, 9, 'msi_u230_280.jpg'),
(11, 5, 10, 'msi_ex400_280.jpg'),
(17, 5, 14, 'solo.jpg'),
(16, 5, 14, 'smt.jpg'),
(15, 5, 13, 'tower.jpg'),
(18, 2, 15, 'starone.jpeg'),
(19, 3, 16, 'fwt.jpeg'),
(20, 3, 16, 'tower.jpg'),
(21, 5, 17, 'Image (2).jpg'),
(22, 5, 17, 'Image (4).jpg'),
(23, 3, 18, 'Image (8).jpg'),
(24, 1, 19, 'AGP (1).jpg'),
(25, 1, 19, 'AGP (2).jpg'),
(26, 1, 20, 'hp_pavdm1_black_280.jpg'),
(27, 4, 21, 'toshi_m500_280.jpg'),
(28, 4, 21, 'tosh_m500_2_280.jpg'),
(29, 1, 20, 'hp_pavdv2_white.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `list_produk`
--

CREATE TABLE IF NOT EXISTS `list_produk` (
  `idproduk` int(5) NOT NULL auto_increment,
  `idmerk` int(5) NOT NULL,
  `type` varchar(35) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `info` text NOT NULL,
  `tglmasuk` date NOT NULL,
  PRIMARY KEY  (`idproduk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `list_produk`
--

INSERT INTO `list_produk` (`idproduk`, `idmerk`, `type`, `harga`, `info`, `tglmasuk`) VALUES
(1, 1, 'HP Mini 1014', '2789000', '10.1" LED / Intel Atom N450 (1.66GHz, 512KB L2 cache, 667MHz FSB)/ 1GB DDR2 / 160GB / Intel GMA950 /Bluetooth  / WiFi  b/g / Card Reader 5-in-1 / Webcam / DOS / 1.06Kg\r\n\r\n*FREE : Slip Case\r\n', '2010-06-01'),
(2, 2, 'DELL INSPIRON ALBA 1464', '7980000', 'Core i-3 M330 2.13Ghz / 14" WXGA / Intel Graphic / DVDRW / 2 GB / 250 GB / Webcam / Wifi / LAN 10/100 / Cardreader / Bluetooth / DOS / Battery 6 Cell ', '2010-06-27'),
(3, 1, 'Presario CQ40-717 TU', '5980000', '14.1" WXGA BV / Intel Dual Core T4400 (2.20GHz, 1MB L2 Cache, 800MHz FSB) / 1GB DDR2 / 160GB / Intel GMA X3100 / DVD+RW/ WiFi b/g /Card Reader 5-in-1 / Webcam / DOS / 2.27Kg', '2010-06-09'),
(4, 2, 'DELL INSPIRON 11z', '6879000', 'Pentium SU4100 (1.30 Ghz, 2MB, 800 MHz) / 11.6" WLED / GMA X4500MHD / 2 GB / 320 GB / Webcam / Wifi 1397 / LAN 10/100 / CardReader 3-in-1 / Bluetooth / Windows 7 Basic / Battery 6 Cell / Colours : Obsidian Black, Cherry Red', '2010-06-07'),
(5, 2, 'DELL VOSTRO V13 - Linux', '8120000', 'Core 2 Duo SU7300(1.3Ghz, 3MB, 800 Mhz) / 13.3 WLED / GMA 4500MHD / 2 GB / HDD 500 GB / Webcam 1.3mp / Wifi / CardReader / Bluetooth / Linux / Battery 6 Cell / Colour : Silver', '2010-06-02'),
(6, 3, 'LENOVO U150-7194', '9100000', 'Intel Core Duo SU4100 - 1.3 GHz/11.6 LED WXGA / 2 GB / HDD 320 GB / Intel GMA X4500 / Windows 7 Home Premium / Bluetooth / Camera / Colour : Black', '2010-06-01'),
(7, 4, 'SATELLITE M500 S432', '12490000', 'Intel Core i3-330M processor 2.13GHz / Windows 7 Premium / 2 GB / 500 GB SATA / DVDRW 14"WXGA / Nvidia GeForce GT210 / Integrated 802.11 bgn Gigabit Ethernet Modem / Bluetooth / Webcam / Fingerprint / 5 in 1 Card Reader / Harman Kardon Speakers Premier Black / 2 x USB / HDMI / Colours : Red Black White', '2010-05-14'),
(8, 1, 'HP Mini 110-1179 TU', '4321000', '10.1" LED / Intel Atom N280 (1.66GHz, 512KB L2 cache, 667MHz FSB) / 1GB DDR2 / 250GB / Intel GMA950 / Bluetooth / WiFi b/g / Card Reader 5-in-1 / Webcam / Win 7 Starter / 1.19Kg / Colour : Pink', '2010-06-23'),
(9, 5, 'U230', '4750000', 'AMD X2 Dual Core L335 ( 1.6GHZ , 512KB L2Cache ) / 12.1?WXGA / ATI HD3200 / 2GB DDR2 / HDD 250 GB / Camera 1.3M? / Wifi 802.11 b/g/n / LAN G-Bit / Card Reader 4 in 1 / 1.3 Kg / Battery 6 Cells / HDMI / HD Support / MSI Colour Film Print Technology / Ultraportable / EDS Keyboard', '2010-06-02'),
(10, 5, 'EX460', '6200000', 'Intel Core2 Duo T6600 ( 2MB L2Cache , 2.2GHZ, 800MHZ FSB) / 14?WXGA Glare / HD4330 512MB DDR2 / DVD Super / 2GB DDR2 / HDD 320 GB / Camera 1.3M? / Wifi 802.11 b/g/n / LAN G-Bit / Card Reader 4 in 1 / Bluetooth / 2.2 Kg / Battery 6 Cells', '2010-06-11'),
(20, 1, 'Pavilion dm1-1126', '7200000', '11.6" WXGA HD BV/Intel Pentium SU4100 (1.3GHz, 2MB L2 Cache, 800MHz FSB) / 2GB DDR2 / 250GB / Intel GMA 4500 / EXT DVD+RW/-/ WiFi a/b/g/n /Webcam / Windows 7 Home Basic / 1.91Kg / Colour : Black', '2010-06-29'),
(21, 4, 'SATELLITE M500 D434', '16990000', 'Intel Core2 Duo P8800 (2.66 GHz) / Windows Vista Premium / 4 GB / 500 GB and 64 GB SSD SATA / DVDRW / 14"WXGA / ATI Mobility Radeon HD4570 up to 1278MB (ext 512 MB VRAM) / Integrated 802.11 bgn Gigabit Ethernet Modem / Bluetooth / Webcam / Fingerprint / 5 in 1 Card Reader / Harman Kardon Speakers Premier Black / 2 x USB 1x USB / e-SATA RGB', '2010-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `merk_produk`
--

CREATE TABLE IF NOT EXISTS `merk_produk` (
  `idmerk` int(5) NOT NULL auto_increment,
  `nama_produk` varchar(15) NOT NULL,
  PRIMARY KEY  (`idmerk`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `merk_produk`
--

INSERT INTO `merk_produk` (`idmerk`, `nama_produk`) VALUES
(1, 'Compaq'),
(2, 'Dell'),
(3, 'Lenovo'),
(4, 'Toshiba'),
(5, 'MSI');

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `idartikel` int(5) unsigned NOT NULL default '0',
  `name` varchar(47) NOT NULL,
  `url` varchar(151) NOT NULL,
  `message` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `shoutbox`
--

INSERT INTO `shoutbox` (`id`, `idartikel`, `name`, `url`, `message`, `tanggal`) VALUES
(1, 2, 'opo', '', 'opoae', '2010-06-21 21:03:52'),
(2, 1, 'a', '', 'aa', '2010-06-21 21:06:26'),
(3, 1, 'a', '', 'aa', '2010-06-21 21:06:28'),
(4, 1, 'a', '', 'aa', '2010-06-21 21:06:41'),
(5, 2, 'adsf', 'asdf', 'asdf', '2010-06-21 21:07:03'),
(6, 2, 'test', '', 'test', '2010-06-21 21:08:02'),
(7, 1, 'test', '', 'test', '2010-06-21 21:08:30'),
(8, 2, 'gha', 'as', 'asd', '2010-06-21 21:55:15'),
(9, 1, 'ari', '', 'isi komen', '2010-06-22 05:32:25'),
(10, 1, 'fred', '', 'isi ', '2010-06-24 20:43:53'),
(11, 2, 'd', '', 'd', '2010-06-24 21:20:44'),
(12, 1, 'a', '', 'a', '2010-06-24 21:23:39'),
(13, 4, 'test', '', 'aloha', '2010-06-27 13:14:05'),
(14, 5, 'awib', '', 'ssss', '2010-06-27 15:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `uadmin`
--

CREATE TABLE IF NOT EXISTS `uadmin` (
  `idlogin` int(5) NOT NULL auto_increment,
  `user` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY  (`idlogin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uadmin`
--

INSERT INTO `uadmin` (`idlogin`, `user`, `pass`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');
