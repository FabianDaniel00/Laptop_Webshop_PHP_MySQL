-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jan 23. 10:56
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `notebook`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `pic`, `link`) VALUES
(1, 'Asus ZenBook 14 UX431F (UX431FL-AN014T) Utópiakék/Ezüst', 269900, 'Intel® Core™ i5-8265U Processor (6M Cache, up to 3.90 GHz) • Microsoft Windows 10 Home • 8GB LPDDR3 2133MHz RAM • 256GB M.2 NVMe™ PCIe® 3.0 SSD • 14\" FullHD (1920 x 1080) fényes Wide View LED kijelző • NVIDIA® GeForce™ MX250 2GB GDDR5 grafikus vezérlő • Wi-Fi 802.11 ac • Bluetooth 5.0 • HDMI (1db) • USB 2.0 (1db) • USB 3.0 (1db) • USB-C 3.1 (1db) • SD/SDHX/SDXC-kártyaolvasó • HD Webkamera (beépített) • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/6/261311-1-w10h.jpg', 'https://www.notebook.hu/asus-zenbook-14-ux431fl-an014t-an014t'),
(2, 'MSI GF63 Thin 10SCSR (9S7-16R412-1017HU) Fekete', 299900, 'Intel® Core™ i5-10300H Processor (8M Cache, up to 4.50 GHz) • FreeDos • 8GB DDR4 2666MHz RAM • 512 GB NVMe PCIe SSD • 15.6\" FullHD (1920 x 1080) matt IPS LCD (144 Hz) kijelző • NVIDIA® GeForce™ GTX 1650Ti (Max-Q) 4GB GDDR6 grafikus vezérlő • GigabitLAN RJ45 (1 db) • Wi-Fi 802.11 ax • Bluetooth 5.0 • HDMI (1db) • USB 3.1 (3db) • USB-C 3.1 (1db) • Beépített HD Webkamera (30fps@720p) • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/m/s/MSI_GF63_Thin_10SCSR_156_FHD_120Hz_Intel_Core_i7-10750H_8GB_512GB_SSD_GTX_1650Ti-4_DOS_Black-i445724.jpg', 'https://www.notebook.hu/msi-gf63-thin-10scsr-9s7-16r412-1017hu'),
(3, 'Asus ROG Strix G15 G512LI (G512LI-AL043) Fekete', 379900, 'Intel® Core™ i7-10750H Processor (12M Cache, up to 5.00 GHz) • Operációs rendszer nélkül • 8GB DDR4 2933MHz RAM • 512 GB M.2 NVMe™ PCIe® 3.0 SSD • 15.6\" FullHD (1920 x 1080) matt IPS LCD kijelző • NVIDIA® GeForce™ GTX 1650Ti 4GB GDDR6 grafikus vezérlő • GigabitLAN RJ45 (1 db) • Wi-Fi 802.11 ax • Bluetooth 5.1 • HDMI (1db) • USB 3.1 (3db) • USB-C 3.1 (1db) • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/a/s/asus-rog-strix-g15-g512li-01.jpg', 'https://www.notebook.hu/asus-rog-strix-g512li-g512li-al043'),
(4, 'LENOVO IdeaPad C340-14API (81N60077HV) Fekete', 209900, 'AMD® Ryzen™ 3-3200U Dual-core 2.6 GHz Mobile APU (4M Cache, up to 3.5 GHz) • Microsoft Windows 10 Home • 4GB DDR4 2400MHz RAM • 128GB M.2 PCIe SSD • 14\" HD (1366 x 768) fényes Multi-Touch LCD érintőkijelző • Radeon™ Vega 3 Graphics integrált grafikus vezérlő • Wi-Fi 802.11 ac • Bluetooth 4.2 • HDMI (1db) • USB 3.0 (2db) • USB-C 3.0 (1db) • MMC/SD/SDHX/SDXC-kártyaolvasó • HD Webkamera (beépített) • Garancia: 24 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/5/257644-1-w10h.jpg', 'https://www.notebook.hu/lenovo-ideapad-c340-14api-81n60077hv'),
(5, 'Acer Nitro 5 AN515-55-56F5 (NH.Q7MEU.002) fekete', 309900, 'Intel® Core™ i5-10300H Processor (8M Cache, up to 4.50 GHz) • Operációs rendszer nélkül • 8GB DDR4 2933MHz RAM • 512GB M.2 PCIe SSD • 15.6\" FullHD (1920 x 1080) ComfyView™ IPS matt LCD (144Hz) kijelző • NVIDIA® GeForce™ GTX 1650 4GB GDDR6 grafikus vezérlő • GigabitLAN RJ45 (1 db) • Wi-Fi 802.11 ax • Bluetooth 5.0 • HDMI (1db) • USB 3.0 (1db) • USB 3.1 (2db) • USB-C 3.1 (1db) • Acer Crystal Eye HD webkamera, SHDR + beépített mikrofon • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/8/282932-1.jpg', 'https://www.notebook.hu/acer-nitro-5-an515-55-56f5-nh-q7meu-002-282219'),
(6, 'APPLE MacBook Air (MQD32MG/A) Ezüst (2017)', 309900, 'Intel® Core™ i5 Processor (3M cache, up to 2.9 GHz) • Mac OS Sierra • 8GB LPDDR3/2133MHz • 128GB SSD • 13.3\" WXGA (1440x900) fényes LED kijelző • Intel HD Graphics 6000 • Wireless 802.11b/g/n/ac • Bluetooth 4.0 • Thunderbolt 2 (1db) • USB3 (2db) • 3.5 jack • Gyártói cikkszám MQD32MG/A• Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/3/236088-2.jpg', 'https://www.notebook.hu/apple-macbook-air-128gb-2017'),
(7, 'Lenovo ThinkPad X280 (20KES5B300) Fekete', 229900, 'Intel® Core™ i3-8130U Processor (4M Cache, up to 3.40 GHz) • Microsoft Windows 10 Professional • 8GB DDR4 2400MHz RAM • 256GB M.2 PCIe SSD • 12.5\" HD (1366 x 768) matt LCD kijelző • Intel® UHD Graphics 620 integrált grafikus vezérlő • Wi-Fi 802.11 ac • Bluetooth 4.1 • HDMI (1db) • USB 3.0 (2db) • USB-C 3.1 (2db) • microSD-kártyaolvasó • HD Webkamera (beépített) • Garancia: 24 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/4/240784-1.jpg', 'https://www.notebook.hu/lenovo-thinkpad-x280-20kes5b300-274936'),
(8, 'Dell Inspiron 15 3593 (3593FI3WE1) Fekete', 249900, 'Intel® Core™ i3-1005G1 Processor (4M Cache, Up to 3.40) • Microsoft Windows 10 Home • 4GB DDR4 2666MHz RAM • 256GB M.2 PCIe SSD • 15.6\" FullHD (1920 x 1080) matt LCD kijelző • Intel® UHD Graphics integrált grafikus vezérlő • 10/100 RJ45 (1 db) • Wi-Fi 802.11 ac • Bluetooth 4.0 • HDMI (1db) • USB 2.0 (1db) • USB 3.0 (2db) • SD-kártyaolvasó • Integrált, szélesvásznú, HD felbontású (720p) webkamera egyetlen digitális mikrofonnal • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/d/e/dell-inspiron-15-3593-fekete-01.jpg', 'https://www.notebook.hu/dell-inspiron-15-3593-3593fi3we1-278247'),
(9, 'MSI GF63 Thin 10SCXR (9S7-16R412-234HU) Fekete', 299900, 'Intel® Core™ i5-10300H Processor (8M Cache, up to 4.50 GHz) • FreeDos • 8GB DDR4 2666MHz RAM • 512 GB NVMe PCIe SSD • 15.6\" FullHD (1920 x 1080) matt IPS LCD kijelző • NVIDIA® GeForce™ GTX 1650 4GB GDDR6 (Max-q) grafikus vezérlő • GigabitLAN RJ45 (1 db) • Wi-Fi 802.11 ax • Bluetooth 5.0 • HDMI (1db) • USB 3.1 (3db) • USB-C 3.1 (1db) • Beépített HD Webkamera (30fps@720p) • Garancia: 36 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/m/s/MSI_GF63_Thin_10SCXR_156_FHD_120Hz_Intel_Core_i5-10300H_8GB_512GB_SSD_GTX_1650-4_DOS_Black-i445724.jpg', 'https://www.notebook.hu/msi-gf63-thin-10scxr-9s7-16r412-234hu'),
(10, 'Lenovo Ideapad Flex 5 14ARE05 (81X2005CHV) Grafitszürke', 229900, 'AMD® Ryzen™ 3-4300U 4-magos 2.7 GHz Mobile APU (4M Cache, up to 3.7 GHz) • Microsoft Windows 10 Home • 4GB DDR4 3200MHz RAM • 256GB M.2 PCIe SSD • 14\" FullHD (1920 x 1080) fényes Multi-Touch TN LCD érintőkijelző • AMD Radeon™ Graphics integrált grafikus vezérlő • Wi-Fi 802.11 ac • Bluetooth 5.0 • HDMI (1db) • USB 3.0 (2db) • USB-C 3.0 (1db) • MMC/SD/SDHX/SDXC-kártyaolvasó • Beépített HD 720p Webkamera, Privacy Shutter, fix fókusz • Garancia: 24 hónap', 'https://www.notebook.hu/notebook.hu/default/cache/images/product/800_600/2/7/278481-01.jpg', 'https://www.notebook.hu/lenovo-ideapad-flex-5-14are05-81x2005chv-279771');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
