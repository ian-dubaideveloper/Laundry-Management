-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 10:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `karyawan_id` char(4) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `gaji_perbulan` int(11) NOT NULL,
  `tgl_bergabung` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `nama_karyawan`, `jeniskelamin`, `alamat`, `no_hp`, `gaji_perbulan`, `tgl_bergabung`, `tgl_berhenti`, `aktif`) VALUES
('K000', 'John Smith', 'Male', '23 St., There, Here City', '09123654789', 0, '2018-01-01', '0000-00-00', 2),
('K001', 'George WIlson', 'Male', 'Sample Address 101', '09123456879', 1500, '2022-02-22', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `pelanggan_id` char(150) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `pelanggan_id`, `nama_pelanggan`, `jeniskelamin`, `alamat`, `no_hp`) VALUES
(1, 'P000', 'Claire Blake', 'Female', 'Sample Address 102', '09789654123');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `pengeluaran_id` varchar(14) NOT NULL,
  `total` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `karyawan_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`pengeluaran_id`, `total`, `detail`, `tgl_pengeluaran`, `karyawan_id`) VALUES
('20220628094542', 1500, 'Employee Salary Payment June 2022', '2022-06-28', 'K000'),
('20220628094556', 100, 'Sample Expense', '2022-06-28', 'K001');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` varchar(14) NOT NULL,
  `pelanggan_id` char(7) NOT NULL,
  `karyawan_id` char(6) NOT NULL,
  `berat` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `pelanggan_id`, `karyawan_id`, `berat`, `total`, `tgl_order`, `tgl_selesai`) VALUES
('20220628143538', 'P000', 'K001', 15, 58, '2022-06-28', '2022-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(4) NOT NULL,
  `namauser` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `namauser`, `username`, `password`, `level`) VALUES
('U001', 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 'superuser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`),
  ADD UNIQUE KEY `UNIQUE` (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`pengeluaran_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
