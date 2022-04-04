-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2022 às 12:03
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `processoseletivo2022_rodrigo_sousapereira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentistas`
--

CREATE TABLE `dentistas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cro` bigint(12) NOT NULL,
  `cro_uf` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dentistas`
--

INSERT INTO `dentistas` (`id`, `name`, `email`, `cro`, `cro_uf`, `created_at`, `updated_at`) VALUES
(30, 'Rodrigo Sousa', 'rodrigo112kl@gmail.com', 46816816161, 'df', '2022-03-29 12:56:04', '2022-03-29 12:56:04'),
(31, 'Alessandra Malinowsk', 'alessandra-malinowsk@dentalUni.com', 97949484944, 'PR', '2022-03-29 12:57:33', '2022-03-29 12:57:33'),
(32, 'Barbara Dentista', 'barbDentist@dentaluni.com', 86444864684, 'AM', '2022-03-29 12:58:27', '2022-03-29 12:58:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destistas_especialidades`
--

CREATE TABLE `destistas_especialidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `dentista_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `destistas_especialidades`
--

INSERT INTO `destistas_especialidades` (`id`, `especialidade_id`, `dentista_id`, `created_at`, `updated_at`) VALUES
(24, 1, 31, '2022-03-29 12:58:31', '2022-03-29 12:58:31'),
(25, 3, 31, '2022-03-29 12:58:34', '2022-03-29 12:58:34'),
(26, 6, 31, '2022-03-29 12:58:37', '2022-03-29 12:58:37'),
(27, 9, 30, '2022-03-29 12:58:47', '2022-03-29 12:58:47'),
(28, 7, 30, '2022-03-29 12:58:55', '2022-03-29 12:58:55'),
(29, 3, 32, '2022-03-29 12:59:04', '2022-03-29 12:59:04'),
(30, 6, 32, '2022-03-29 12:59:08', '2022-03-29 12:59:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Disfunção Temporomandibular e Dor Orofacial', '2022-03-29 09:42:19', '2022-03-29 12:54:40'),
(2, 'Estomatologia', '2022-03-29 10:02:04', '2022-03-29 12:54:54'),
(3, 'Prótese Dentária', '2022-03-29 10:02:21', '2022-03-29 12:55:28'),
(4, 'Implantodontia', '2022-03-29 10:04:15', '2022-03-29 12:55:01'),
(5, 'Periodontia', '2022-03-29 10:04:24', '2022-03-29 12:55:34'),
(6, 'Odontologia Legal', '2022-03-29 10:09:44', '2022-03-29 12:55:11'),
(7, 'Cirurgia e Traumatologia Buco-Maxilo-Faciais', '2022-03-29 10:10:24', '2022-03-29 12:54:31'),
(8, 'Cirurgião de dedo', '2022-03-29 10:10:39', '2022-03-29 10:19:56'),
(9, 'Endodontia', '2022-03-29 10:10:56', '2022-03-29 12:54:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_29_002136_create_dentistas_table', 1),
(2, '2022_03_29_002207_create_destistas_especialidades_table', 1),
(3, '2022_03_29_002234_create_especialidades_table', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dentistas`
--
ALTER TABLE `dentistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destistas_especialidades`
--
ALTER TABLE `destistas_especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dentistas`
--
ALTER TABLE `dentistas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `destistas_especialidades`
--
ALTER TABLE `destistas_especialidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
