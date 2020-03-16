-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2020 às 04:06
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagueaqui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pg_agua`
--

CREATE TABLE `pg_agua` (
  `pg_agua_id` bigint(20) UNSIGNED NOT NULL,
  `pg_agua_cbarra` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_agua_vencimento` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_agua_valor` decimal(10,2) DEFAULT NULL,
  `pg_agua_valor_total` decimal(10,2) DEFAULT NULL,
  `pg_agua_data` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_agua_hora` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_agua_taxa` decimal(10,2) DEFAULT NULL,
  `pg_agua_taxa_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_agua_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pg_agua_users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pg_agua`
--

INSERT INTO `pg_agua` (`pg_agua_id`, `pg_agua_cbarra`, `pg_agua_vencimento`, `pg_agua_valor`, `pg_agua_valor_total`, `pg_agua_data`, `pg_agua_hora`, `pg_agua_taxa`, `pg_agua_taxa_status`, `pg_agua_status`, `created_at`, `updated_at`, `pg_agua_users_id`) VALUES
(23, '81750000000809445552020021700000000000428810', '8/3/2020', '23.40', '23.40', '08/03/2020', '02:48:33', '2.00', 'pendente', 'pago', '2020-03-08 20:46:02', '2020-03-08 20:46:02', 18),
(25, '81740000000235945552020021700000000000428812', '1/3/2020', '23.40', '23.40', '01/03/2020', '03:19:21', '2.00', 'recolido', 'pago', '2020-03-01 21:16:50', '2020-03-09 18:01:23', 2),
(26, '81720000000235945552020021700000000000428813', '8/3/2020', '23.40', '23.40', '08/02/2020', '03:26:44', '2.00', 'pendente', 'pago', '2020-02-08 21:24:13', '2020-02-08 21:24:13', 2),
(27, '81700000000235945552020021700000000000428814', '2/3/2020', '23.59', '46.00', '02/03/2020', '04:11:19', '2.00', 'pendente', 'pago', '2020-03-02 22:08:48', '2020-03-10 01:32:42', 3),
(28, '81760000000235945552020021700000000000428811', '8/3/2020', '23.40', '23.40', '08/02/2020', '04:25:56', '2.00', 'recolido', 'pago', '2020-02-08 22:23:25', '2020-02-08 22:23:25', 2),
(30, '82660000000234005861020191400100203520191111', '8/3/2020', '23.40', '25.00', '03/03/2020', '05:13:52', '2.00', 'pendente', 'pago', '2020-03-03 23:11:21', '2020-03-12 03:31:00', 2),
(31, '82630000000234005860120200400100203520200210', '15/3/2020', '23.40', '23.40', '15/03/2020', '06:45:41', '2.00', 'pendente', 'pago', '2020-03-15 12:43:04', '2020-03-15 12:43:04', 2),
(32, '82630000000234005860120201400100203520200210', '15/3/2020', '23.40', '25.00', '15/03/2020', '11:06:10', '2.00', 'pendente', 'pago', '2020-03-16 05:03:28', '2020-03-16 05:05:25', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pg_agua`
--
ALTER TABLE `pg_agua`
  ADD PRIMARY KEY (`pg_agua_id`),
  ADD KEY `pg_agua_pg_agua_users_id_foreign` (`pg_agua_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pg_agua`
--
ALTER TABLE `pg_agua`
  MODIFY `pg_agua_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pg_agua`
--
ALTER TABLE `pg_agua`
  ADD CONSTRAINT `pg_agua_pg_agua_users_id_foreign` FOREIGN KEY (`pg_agua_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
