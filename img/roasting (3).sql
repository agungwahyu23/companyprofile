-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2021 pada 07.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roasting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `idGaleri` varchar(50) NOT NULL,
  `idProduk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `idProduk`, `foto`) VALUES
('7pxhqqWmJbbox8sGimVmdoYUUtEp7CLF', 'BPXXkPXhlolq5ZqYfuYKRYyVBiD8DWI2', 'produk32.jpeg'),
('avqUoMxzndeUpyM3ei4VmdLgheo7tYhY', 'BPXXkPXhlolq5ZqYfuYKRYyVBiD8DWI2', 'WhatsApp_Image_2021-04-04_at_12_50_421.jpeg'),
('u98pmnnK84K1C2q5sN2kFWKXncHYEyGD', 'a0RY0sUAbUfrXc3aQCRfM855tcRMcM8p', 'produk12.jpeg'),
('zoXJsappdvIw6hDyrAJMibik0VJyKcDY', 'c4fxmv6RzTVmmC1TEtIf1EZXyUX2N28a', 'produk101.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `idKritik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createDate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `nama`, `email`, `password`, `status`, `createDate`) VALUES
('p2yRI7LV8z9teVHSeInJHrKK0Gp11KW0', 'idris', 'idristifa@gmail.com', 'ee276272e30c7caf455d9bcb2834414d', 'Admin', '2021-04-10 17:0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kapasitas` varchar(15) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `spesifikasi` varchar(5000) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `nama`, `kapasitas`, `harga`, `status`, `spesifikasi`, `deskripsi`, `foto`) VALUES
('a0RY0sUAbUfrXc3aQCRfM855tcRMcM8p', 'Mesin Roasting Kopi', '1000', '20000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 120.70.95<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; rantai<br />\r\nDaya Listrik : 350 Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk10211.jpeg'),
('c4fxmv6RzTVmmC1TEtIf1EZXyUX2N28a', 'Mesin Roasting Kopi', '2000', '24000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 130.75.100<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; rantai<br />\r\nDaya Listrik : 350 Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk1021.jpeg'),
('J9SZrR3ae4cmzRoSaiJJ4EmNuxTVKruF', 'Mesin Roasting Kopi', '3000', '32000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 150.80.130<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; Copel<br />\r\nDaya Listrik : 500 Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk103.jpeg'),
('lMSUf1jsxmsH3j7UuqEli4jbyLrm7eu2', 'Mesin Roasting Kopi', '10000', '60000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 170.62.160<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; Copel<br />\r\nDaya Listrik : 725&nbsp;Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk106.jpeg'),
('TsiyFfhgkc8wRqWUvH390AG9JYkG3vYy', 'Mesin Roasting Kopi', '20000', '70000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 195.110.178<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; rantai<br />\r\nDaya Listrik : 925&nbsp;Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk108.jpeg'),
('wFOgCtmtcoEpRV7SSPl6ikAmlr5KvJvD', 'Mesin Roasting Kopi', '50000', '110000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 220.80.185<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; Copel<br />\r\nDaya Listrik : 1150 Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk109.jpeg'),
('Xd1fkKWtLE5yqwjU5vPs2JOuY3Mb4v1a', 'Mesin Roasting Kopi', '15000', '65000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 175.67.165<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; Copel<br />\r\nDaya Listrik : 825&nbsp;Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk107.jpeg'),
('xWAMMlj6WyXLBEXbuZ2n9RImcG8W4aRi', 'Mesih Roasting Kopi', '5000', '45000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 170.80.155<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; Copel<br />\r\nDaya Listrik : 650&nbsp;Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk104.jpeg'),
('xXsbXkJNXUtlqtGuOFTzlUS8dcSHuxJ8', 'Mesin Roasting Kopi', '500', '18000000', '1', '<p>Type burner : harmonica otomatis burner<br />\r\nType drum : Silinder datar<br />\r\nVariable Speed drum : yes<br />\r\nBlower : Centrifugal<br />\r\nCooling been : Yes<br />\r\nPreheating : 15 Menit<br />\r\nRoasting time : 9-16 Menit<br />\r\nDrum termo : Digital<br />\r\nbeen termo : Digital<br />\r\nEgitator : Yes<br />\r\nAirflow : Yes<br />\r\nDimensi mesin : P x L x T 90.50.70<br />\r\nRoast drum : Solid Stainles Steel&nbsp; 304 t. 5mm<br />\r\nMaterial : Steel &amp; Stainles Steel&nbsp;<br />\r\nCooling time :&nbsp;3-5 Menit<br />\r\nSistem tranmisi : Gaer &amp; rantai<br />\r\nDaya Listrik : 210&nbsp;Watt<br />\r\nPelengkap : Kaca pengintai biji, Stic pengontrol biji, Lampu penerang, Manometer gas<br />\r\nData loger : Artisan scope<br />\r\nHeat resource : Gas (LPG)</p>\r\n', '-', 'produk105.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noTelefon` varchar(15) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `ig` varchar(20) NOT NULL,
  `fb` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `nama`, `email`, `noTelefon`, `wa`, `ig`, `fb`, `tanggal`, `alamat`, `deskripsi`) VALUES
(1, 'Azis cooffee roaster', 'idristifa@gmail.com', '085257461375', '6285257461375', 'idrisrm', '-', '-', 'Dusun Gumuk limo RT 22 RW 04, Desa Nogosari, Kecamatan Rambipuji, Kabupaten Jember', '<p>-</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idGaleri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`idKritik`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
