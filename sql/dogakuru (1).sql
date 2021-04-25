-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 10 Nis 2021, 15:14:56
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dogakuru`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` int(50) NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googlemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_adres`, `ayar_il`, `ayar_ilce`, `ayar_recapctha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_instagram`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtpassword`, `ayar_smtpport`) VALUES
(0, '', '1https://www.dogakuruyemis.net/', '1doga2', '1Do?a Kuruyemi?Do?a Kuruyemi?Do?a Kuruyemi?Do?a Kuruyemi?Do?a K                 ', 'kuruyemiÅŸ,doga                  ', 'cihat ÅŸenel2', '216-311-18-00', '0', 0, 'esdogakuruyemis1@hotmail.com ', 'Topselvi mahallesi D-100 Güney Yan Yol no:6 Kartal/İstanbul', 'İstanbul', 'Kartal', '2', 'AIzaSyCk3znYvr4A7CuBUftO64X3PCzinQBNukk', ' 2    ', 'http://www.facebook.com1', 'http://www.twitter.com1', 'http://www.youtube.com    ', 'https://www.instagram.com/es.dogakuruyemis/', 'cihatmail.siteadrssesiniz.com', 'eposta@siteadresiniz.com', '1234 5 ', '25  ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(1) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`) VALUES
(0, 'Hakkımızda Başlık', '<p>ferhatLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis condimentum massa. Donec varius ante turpis, a pharetra arcu facilisis quis. Donec placerat, sapien blandit commodo luctus, velit erat ultricies velit, in venenatis purus mauris ac dolor. Vestibulum nec m3aximus lorem. Morbi non ligula tincidunt, blandit ipsum ut, maximus metus. Nullam semper vulputate nulla vel maximus. Praesent cursus libero quis erat mattis, sed commodo augue pellentesque. Morbi nec erat condimentum, ornare felis eget, cursus lectus. Nam bibendum eros eu justo dictum, eget dignissim tortor fringilla. Vivamus non sapien commodo, imperdiet leo vel, vulputate turpis. Vestibulum vel pulvinar lacus.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isbirlikci`
--

DROP TABLE IF EXISTS `isbirlikci`;
CREATE TABLE IF NOT EXISTS `isbirlikci` (
  `isbirlikci_id` int(11) NOT NULL AUTO_INCREMENT,
  `isbirlikci_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `isbirlikci_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `isbirlikci_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`isbirlikci_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_ad`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_durum`) VALUES
(2, '2021-03-31 16:34:42', 'admin', '7c0b1fca8176c7b8ed56c8c185123d88', 'Cihat Senel', '5', 1),
(1, '2021-03-31 18:44:04', 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Cihat Şenel', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kuru`
--

DROP TABLE IF EXISTS `kuru`;
CREATE TABLE IF NOT EXISTS `kuru` (
  `kuru_id` int(11) NOT NULL AUTO_INCREMENT,
  `kuru_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kuru_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kuru_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kuru_sira` int(2) NOT NULL,
  `kuru_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`kuru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kuru`
--

INSERT INTO `kuru` (`kuru_id`, `kuru_ad`, `kuru_resimyol`, `kuru_link`, `kuru_sira`, `kuru_durum`) VALUES
(4, 'Antep Fıstığı Anaçıtlak', 'kimg/kuru/29536309323127220492WhatsApp Image 2021-03-31 at 19.55.21.jpeg', '', 1, '1'),
(5, 'Leblebi Çifte Kavrulmuş ', 'kimg/kuru/23956254662874430557WhatsApp Image 2021-03-31 at 19.58.31.jpeg', '', 2, '1'),
(6, 'Extra Kokteyl', 'kimg/kuru/22550247622231326990WhatsApp Image 2021-03-31 at 19.58.32 (1).jpeg', '', 3, '1'),
(7, 'Çiğ Kaju', 'kimg/kuru/29030263292706828043WhatsApp Image 2021-03-31 at 19.58.32.jpeg', '', 4, '1'),
(8, 'Fındık Çifte Kavrulmuş', 'kimg/kuru/29628314743160428017WhatsApp Image 2021-03-31 at 19.58.33 (1).jpeg', '', 5, '1'),
(9, 'Tuzlu Fıstık Jumbo', 'kimg/kuru/31837307982375125679WhatsApp Image 2021-03-31 at 19.58.33 (2).jpeg', '', 6, '1'),
(10, 'Çiğ Badem', 'kimg/kuru/25062303522572827265WhatsApp Image 2021-03-31 at 19.58.33.jpeg', '', 7, '1'),
(11, 'Çiğ Kokteyl', 'kimg/kuru/31389241632336329524WhatsApp Image 2021-03-31 at 19.58.34.jpeg', '', 8, '1'),
(12, 'Özel Kokteyl', 'kimg/kuru/24190225313066629326WhatsApp Image 2021-03-31 at 19.58.35.jpeg', '', 9, '1'),
(13, 'Siyah Çekirdek', 'kimg/kuru/25378285272780828092WhatsApp Image 2021-03-31 at 19.58.37 (1).jpeg', '', 10, '1'),
(14, 'Kabak Çekirdeği Çifte Kavrulmuş', 'kimg/kuru/30931294622809527151WhatsApp Image 2021-03-31 at 19.58.37.jpeg', '', 11, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meyve`
--

DROP TABLE IF EXISTS `meyve`;
CREATE TABLE IF NOT EXISTS `meyve` (
  `meyve_id` int(11) NOT NULL AUTO_INCREMENT,
  `meyve_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `meyve_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meyve_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `meyve_sira` int(2) NOT NULL,
  `meyve_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`meyve_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `meyve`
--

INSERT INTO `meyve` (`meyve_id`, `meyve_ad`, `meyve_resimyol`, `meyve_link`, `meyve_sira`, `meyve_durum`) VALUES
(7, 'Hurma Kudüs', 'mimg/meyve/20708298322721424329WhatsApp Image 2021-03-31 at 19.58.37 (2).jpeg', '', 3, '1'),
(6, 'İncir Dizme', 'mimg/meyve/27527310402843931312WhatsApp Image 2021-03-31 at 19.55.23.jpeg', '', 2, '1'),
(5, 'Çekirdeksiz Sarı Üzüm', 'mimg/meyve/30555282772344321679WhatsApp Image 2021-03-31 at 19.55.22.jpeg', '', 1, '1'),
(8, 'Kayısı Jumbo', 'mimg/meyve/30083281943132528084WhatsApp Image 2021-03-31 at 19.58.39.jpeg', '', 4, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(18, 'slider3', 'dimg/slider/27959316912911826521pictu2res_4_5.jpg', '', 0, '1'),
(17, 'slider2', 'dimg/slider/21553261982527023942Ekran görüntüsü 2021-04-06 123052.png', '', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sube`
--

DROP TABLE IF EXISTS `sube`;
CREATE TABLE IF NOT EXISTS `sube` (
  `sube_id` int(11) NOT NULL AUTO_INCREMENT,
  `sube_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sube_adres` varchar(600) COLLATE utf8_turkish_ci NOT NULL,
  `sube_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sube_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`sube_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sube`
--

INSERT INTO `sube` (`sube_id`, `sube_ad`, `sube_adres`, `sube_resimyol`, `sube_durum`) VALUES
(3, 'Maltepe Şubesi', 'Bağlarbaşı mahallesi Atatürk caddesi no:58/D Maltepe/İstanbul', 'simg/sube/29482318912146727179WhatsApp Image 2021-03-31 at 19.53.21.jpeg', '1'),
(4, 'Sultanbeyli Şubesi', 'Abdurrahmangazi mahallesi Fatih bulvarı no:92-G2 Sultanbeyli/İstanbul', 'simg/sube/28291254732443524010WhatsApp Image 2021-03-31 at 19.53.35.jpeg', '1'),
(5, 'Tuzla Şubesi', 'Fevzi Çakmak caddesi no:42/B Tuzla/İstanbul', 'simg/sube/20835258342787829471WhatsApp Image 2021-03-31 at 19.53.33.jpeg', '1'),
(6, 'Kartal Şubesi', 'Topselvi mahallesi D-100 Güney Yan Yol  no:6 Kartal/İstanbul', 'simg/sube/29461249353090824331WhatsApp Image 2021-03-31 at 19.53.29.jpeg', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vitrin`
--

DROP TABLE IF EXISTS `vitrin`;
CREATE TABLE IF NOT EXISTS `vitrin` (
  `vitrin_id` int(11) NOT NULL AUTO_INCREMENT,
  `vitrin_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `vitrin_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `vitrin_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `vitrin_sira` int(2) NOT NULL,
  `vitrin_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`vitrin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `vitrin`
--

INSERT INTO `vitrin` (`vitrin_id`, `vitrin_ad`, `vitrin_resimyol`, `vitrin_link`, `vitrin_sira`, `vitrin_durum`) VALUES
(7, 'kuru kayısı', 'vimg/vitrin/25527312732102921621WhatsApp Image 2021-03-31 at 19.58.39.jpeg', '', 0, '1'),
(8, 'Özel Kokteyl', 'vimg/vitrin/26538222202479022241WhatsApp Image 2021-03-31 at 19.58.35.jpeg', '', 0, '1'),
(9, 'Extra Kokteyl', 'vimg/vitrin/25680307792499422935WhatsApp Image 2021-03-31 at 19.58.32 (1).jpeg', '', 0, '1'),
(10, 'Hurma Kudüs', 'vimg/vitrin/22764312372453723109WhatsApp Image 2021-03-31 at 19.58.37 (2).jpeg', '', 0, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
