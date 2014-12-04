-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2014 a las 14:28:13
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_cms-cabooselake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_19_142945_create_users_table', 1),
('2014_11_19_163021_initial_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) unsigned NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_num` tinyint(3) unsigned NOT NULL DEFAULT '200',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `tab_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
`id` int(10) unsigned NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu` tinyint(1) NOT NULL DEFAULT '0',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '200',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `guid`, `name`, `slug_url`, `menu`, `menu_order`, `type`, `published`, `created_by`, `update_by`, `created_at`, `updated_at`, `published_at`, `published_by`, `deleted_at`) VALUES
(6, '', 'Et unde.', 'et-unde', 0, 4, 'page', 0, '', '', '2014-11-25 21:22:35', '2014-11-25 21:22:35', '0000-00-00 00:00:00', '', NULL),
(7, '', 'Et rerum.', 'et-rerum', 1, 6, 'page', 0, '', '', '2014-11-25 21:22:35', '2014-11-25 21:22:35', '0000-00-00 00:00:00', '', NULL),
(8, '', 'Rerum aliquam.', 'rerum-aliquam', 1, 6, 'gallery', 0, '', '', '2014-11-25 21:22:35', '2014-11-25 21:22:35', '0000-00-00 00:00:00', '', NULL),
(9, '', 'Aliquam doloremque.', 'aliquam-doloremque', 1, 10, 'blog', 0, '', '', '2014-11-25 21:22:35', '2014-11-25 21:22:35', '0000-00-00 00:00:00', '', NULL),
(10, '', 'Dolore minima ab.', 'dolore-minima-ab', 0, 10, 'blog', 1, '', '', '2014-11-25 21:22:35', '2014-11-25 21:22:35', '0000-00-00 00:00:00', '', NULL),
(11, '', 'Consequatur blanditiis.', 'consequatur-blanditiis', 1, 1, 'blog', 0, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(12, '', 'Ut dolores sed.', 'ut-dolores-sed', 1, 3, 'page', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(13, '', 'Reiciendis ipsa totam.', 'reiciendis-ipsa-totam', 0, 4, 'page', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(14, '', 'Earum mollitia.', 'earum-mollitia', 0, 10, 'gallery', 0, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(15, '', 'Recusandae est vero.', 'recusandae-est-vero', 0, 1, 'gallery', 0, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(16, '', 'Voluptas animi.', 'voluptas-animi', 0, 3, 'page', 0, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(17, '', 'Libero aliquid quis.', 'libero-aliquid-quis', 1, 1, 'blog', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(18, '', 'Ea illo.', 'ea-illo', 1, 2, 'gallery', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(19, '', 'Vel dicta sit.', 'vel-dicta-sit', 1, 6, 'blog', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(20, '', 'Nihil est.', 'nihil-est', 0, 5, 'gallery', 0, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(21, '', 'Quas numquam.', 'quas-numquam', 1, 10, 'blog', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(22, '', 'Qui magni.', 'qui-magni', 0, 1, 'page', 1, '', '', '2014-11-25 21:22:36', '2014-11-25 21:22:36', '0000-00-00 00:00:00', '', NULL),
(23, '', 'Harum blanditiis.', 'harum-blanditiis', 0, 3, 'blog', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(24, '', 'Nihil assumenda.', 'nihil-assumenda', 1, 8, 'blog', 1, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(25, '', 'Ut fugiat.', 'ut-fugiat', 1, 3, 'gallery', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(26, '', 'Commodi esse.', 'commodi-esse', 0, 6, 'blog', 1, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(27, '', 'Magni soluta.', 'magni-soluta', 1, 10, 'page', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(28, '', 'Ut repellat.', 'ut-repellat', 0, 10, 'blog', 1, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(29, '', 'Voluptatum alias id.', 'voluptatum-alias-id', 0, 8, 'page', 1, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(30, '', 'Itaque voluptatum.', 'itaque-voluptatum', 0, 1, 'page', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(31, '', 'Impedit non.', 'impedit-non', 0, 4, 'blog', 1, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(32, '', 'Similique saepe inventore.', 'similique-saepe-inventore', 0, 1, 'page', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(33, '', 'Omnis qui.', 'omnis-qui', 1, 7, 'blog', 0, '', '', '2014-11-25 21:22:37', '2014-11-25 21:22:37', '0000-00-00 00:00:00', '', NULL),
(34, '', 'In voluptatem.', 'in-voluptatem', 0, 6, 'gallery', 1, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(35, '', 'Quis nihil quis.', 'quis-nihil-quis', 1, 5, 'gallery', 1, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(36, '', 'Nostrum quia sint.', 'nostrum-quia-sint', 1, 10, 'gallery', 1, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(37, '', 'Expedita in.', 'expedita-in', 1, 9, 'page', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(38, '', 'Omnis quis magnam.', 'omnis-quis-magnam', 1, 3, 'blog', 1, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(39, '', 'Animi vitae.', 'animi-vitae', 1, 8, 'blog', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(40, '', 'Mollitia assumenda.', 'mollitia-assumenda', 0, 7, 'blog', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(41, '', 'Ea dolorem nam.', 'ea-dolorem-nam', 0, 7, 'page', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(42, '', 'Qui dolor pariatur.', 'qui-dolor-pariatur', 0, 2, 'page', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(43, '', 'Suscipit voluptas est.', 'suscipit-voluptas-est', 0, 3, 'page', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(44, '', 'Voluptas numquam.', 'voluptas-numquam', 1, 9, 'page', 0, '', '', '2014-11-25 21:22:38', '2014-11-25 21:22:38', '0000-00-00 00:00:00', '', NULL),
(45, '', 'Aut alias ducimus.', 'aut-alias-ducimus', 1, 8, 'page', 1, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(46, '', 'Assumenda et expedita.', 'assumenda-et-expedita', 1, 8, 'blog', 1, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(47, '', 'Amet sapiente.', 'amet-sapiente', 1, 6, 'blog', 1, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(48, '', 'Quae eligendi.', 'quae-eligendi', 0, 7, 'blog', 0, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(49, '', 'Labore id.', 'labore-id', 0, 4, 'page', 0, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(50, '', 'Est ipsam.', 'est-ipsam', 0, 9, 'page', 0, '', '', '2014-11-25 21:22:39', '2014-11-25 21:22:39', '0000-00-00 00:00:00', '', NULL),
(51, '', 'contact', 'about-us', 0, 10, 'page', 1, '', '', '2014-11-25 21:26:57', '2014-11-25 21:26:57', '0000-00-00 00:00:00', '', NULL),
(52, '', 'Nueva seccion 1', 'nueva-seccion', 0, 1, 'page', 1, '', '', '2014-11-26 21:39:15', '2014-11-26 21:39:50', '0000-00-00 00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `userId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `userId`, `firstName`, `lastName`, `username`, `email`, `password`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
(1, '72A3556E-D026-4BC1-9F24-C7EF346C5EC6', 'System', 'Administrator', 'admin', 'postmaster@domain.com', '$2y$10$bSvaaNWD41g8TLY6g66.S.YTwpM/tp97NmI.u5jz4RQJkMt76800G', 'LE5mkLBNnw5H0r86wKLscOuzoy4tNwlQyP30wWgUg2LrHQP8km5WlscTRVF3', 1, '2014-11-27 03:26:12', '2014-12-04 02:46:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`), ADD KEY `pages_section_id_foreign` (`section_id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pages`
--
ALTER TABLE `pages`
ADD CONSTRAINT `pages_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
