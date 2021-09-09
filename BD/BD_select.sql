-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2021 a las 04:50:34
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `select`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(10) NOT NULL,
  `nombreMascota` varchar(250) DEFAULT NULL,
  `sexoMascota` varchar(50) DEFAULT NULL,
  `tipoMascota` varchar(50) DEFAULT NULL,
  `raza_mascota` varchar(150) DEFAULT NULL,
  `foto_mascota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombreMascota`, `sexoMascota`, `tipoMascota`, `raza_mascota`, `foto_mascota`) VALUES
(8, 'Cutu', 'Hembra', 'Gato', 'Abisinio', 'fotoMascota/31a8d0ad2672647.png'),
(9, 'Dormilon', 'Hembra', 'Gato', 'hez', 'fotoMascota/3.png'),
(10, 'God', 'Hembra', 'Gato', 'Manx', 'fotoMascota/22fe3a179d1d89a.jpg'),
(11, 'Full', 'Hembra', 'Perro', 'Sabueso', 'fotoMascota/33f506d9bf370cb.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` int(11) NOT NULL,
  `tipoMascota` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL,
  `raza` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `tipoMascota`, `raza`) VALUES
(200, 'cns_gato', 'Abisinio'),
(201, 'cns_gato', 'Bobtail americano'),
(202, 'cns_gato', 'Americano de pelo corto'),
(203, 'cns_gato', 'Balinés'),
(204, 'cns_gato', 'Bengalí'),
(205, 'cns_gato', 'Bombay'),
(206, 'cns_gato', 'Británico de pelo largo'),
(207, 'cns_gato', 'Británico de pelo corto'),
(208, 'cns_gato', 'Birmano'),
(209, 'cns_gato', 'Chartreux'),
(210, 'cns_gato', 'Cornish Rex'),
(211, 'cns_gato', 'Devon Rex'),
(212, 'cns_gato', 'Mau egipcio'),
(213, 'cns_gato', 'Exótico de pelo corto'),
(214, 'cns_gato', 'La Habana'),
(215, 'cns_gato', 'Bobtail japonés'),
(216, 'cns_gato', 'Maine Coon'),
(217, 'cns_gato', 'Manx'),
(218, 'cns_gato', 'Neva Masquerade'),
(219, 'cns_gato', 'Bosques de Noruega'),
(220, 'cns_gato', 'Ocicat'),
(221, 'cns_gato', 'Oriental'),
(222, 'cns_gato', 'Persa'),
(223, 'cns_gato', 'Ragdoll'),
(224, 'cns_gato', 'Ruso Azul'),
(225, 'cns_gato', 'Sagrado de Birmania'),
(226, 'cns_gato', 'Scottish Fold'),
(227, 'cns_gato', 'Siamés'),
(228, 'cns_gato', 'Siberiano'),
(229, 'cns_gato', 'Singapura'),
(230, 'cns_gato', 'Snowshoe'),
(231, 'cns_gato', 'Somalí'),
(232, 'cns_gato', 'Sphynx'),
(233, 'cns_gato', 'Tailandes'),
(234, 'cns_gato', 'Tonquinés'),
(235, 'cns_gato', 'Angora turco'),
(236, 'cns_gato', 'Otro'),
(237, 'cns_perro', 'Galgo Afgano'),
(238, 'cns_perro', 'Airedale Terrier'),
(239, 'cns_perro', 'Akita Inu'),
(240, 'cns_perro', 'Malamute de Alaska'),
(241, 'cns_perro', 'Akita americano'),
(242, 'cns_perro', 'Cocker spaniel americano'),
(243, 'cns_perro', 'American Staffordshire Terrier'),
(244, 'cns_perro', 'Pastor australiano'),
(245, 'cns_perro', 'Terrier sedoso australiano'),
(246, 'cns_perro', 'Basenji'),
(247, 'cns_perro', 'Basset hound'),
(248, 'cns_perro', 'Beagle'),
(249, 'cns_perro', 'Collie Barbudo'),
(250, 'cns_perro', 'Bedlington Terrier'),
(251, 'cns_perro', 'Pastor belga'),
(252, 'cns_perro', 'Bernese de la montaña'),
(253, 'cns_perro', 'Bichon Frise'),
(254, 'cns_perro', 'Sabueso'),
(255, 'cns_perro', 'Azul de Gascuña'),
(256, 'cns_perro', 'Border collie'),
(257, 'cns_perro', 'Borzoi'),
(258, 'cns_perro', 'Boston Terrier'),
(259, 'cns_perro', 'Bouvier des Flanders'),
(260, 'cns_perro', 'Boxer'),
(261, 'cns_perro', 'Braco Italiano'),
(262, 'cns_perro', 'Braco Aleman'),
(263, 'cns_perro', 'Pastor de Brie'),
(264, 'cns_perro', 'Grifón de Bruselas'),
(265, 'cns_perro', 'Bull terrier'),
(266, 'cns_perro', 'Bullmastiff'),
(267, 'cns_perro', 'Cairn Terrier'),
(268, 'cns_perro', 'Perro pastor catalán'),
(269, 'cns_perro', 'Cavalier King Charles Spaniel'),
(270, 'cns_perro', 'Chihuahua'),
(271, 'cns_perro', 'Crestado chino'),
(272, 'cns_perro', 'Shar-Pei '),
(273, 'cns_perro', 'Chow chow'),
(274, 'cns_perro', 'Clumber Spaniels'),
(275, 'cns_perro', 'Collie '),
(276, 'cns_perro', 'Salchicha, teckel ó Dachshund'),
(277, 'cns_perro', 'Dálmata'),
(278, 'cns_perro', 'Dandie Dinmont Terrier'),
(279, 'cns_perro', 'Doberman pinscher'),
(280, 'cns_perro', 'Doberman'),
(281, 'cns_perro', 'Dogo Argentino'),
(282, 'cns_perro', 'Dogo de Burdeos'),
(283, 'cns_perro', 'Bulldog inglés'),
(284, 'cns_perro', 'Cocker spaniel inglés'),
(285, 'cns_perro', 'Foxhound'),
(286, 'cns_perro', 'Pointer Inglés'),
(287, 'cns_perro', 'Setter inglés'),
(288, 'cns_perro', 'Springer Spaniel Inglés'),
(289, 'cns_perro', 'Fox Terrier pelo liso'),
(290, 'cns_perro', 'Fox Terrier pelo de alambre'),
(291, 'cns_perro', 'Bulldog francés'),
(292, 'cns_perro', 'Pastor alemán'),
(293, 'cns_perro', 'Pointer Aleman Pelo Corto'),
(294, 'cns_perro', 'Spitz alemán'),
(295, 'cns_perro', 'Pointer alemán pelo duro'),
(296, 'cns_perro', 'Schnauzer gigante'),
(297, 'cns_perro', 'Golden Retriever'),
(298, 'cns_perro', 'Gran Danés'),
(299, 'cns_perro', 'Azul Gascuña'),
(300, 'cns_perro', 'Gran pirineo'),
(301, 'cns_perro', 'Galgo'),
(302, 'cns_perro', 'Podenco ibicenco'),
(303, 'cns_perro', 'Setter irlandés rojo y blanco'),
(304, 'cns_perro', 'Setter irlandés rojo'),
(305, 'cns_perro', 'Setter irlandés'),
(306, 'cns_perro', 'Galgo italiano'),
(307, 'cns_perro', 'Jack Russell Terrier'),
(308, 'cns_perro', 'Spitz japonés'),
(309, 'cns_perro', 'Komondor'),
(310, 'cns_perro', 'Kuvasz'),
(311, 'cns_perro', 'Labrador retriever'),
(312, 'cns_perro', 'Lhasa Apso'),
(313, 'cns_perro', 'Maltés'),
(314, 'cns_perro', 'Mastín'),
(315, 'cns_perro', 'Pinscher miniatura'),
(316, 'cns_perro', 'Schnauzer miniatura'),
(317, 'cns_perro', 'Mastín napolitano'),
(318, 'cns_perro', 'Terranova'),
(319, 'cns_perro', 'Terrier de Norwich'),
(320, 'cns_perro', 'Pekinés'),
(321, 'cns_perro', 'Mallorquín'),
(322, 'cns_perro', 'Viringo peruano o Perro sin pelo del peru'),
(323, 'cns_perro', 'Podenco del faraón'),
(324, 'cns_perro', 'Podenco Canario'),
(325, 'cns_perro', 'Pointer'),
(326, 'cns_perro', 'Pomeranio o Pomeranian'),
(327, 'cns_perro', 'Caniche o Poodle'),
(328, 'cns_perro', 'Perro de agua portugués'),
(329, 'cns_perro', 'Presa Canario'),
(330, 'cns_perro', 'Pug'),
(331, 'cns_perro', 'Puli'),
(332, 'cns_perro', 'Mastín de los Pirineos'),
(333, 'cns_perro', 'Perro de montaña de los Pirineos'),
(334, 'cns_perro', 'Rhodesian Ridgeback'),
(335, 'cns_perro', 'Rottweiler'),
(336, 'cns_perro', 'San Bernardo'),
(337, 'cns_perro', 'Saluki'),
(338, 'cns_perro', 'Samoyedo'),
(339, 'cns_perro', 'Schnauzer'),
(340, 'cns_perro', 'Terrier escocés'),
(341, 'cns_perro', 'Shar Pei'),
(342, 'cns_perro', 'Pastor de Shetland'),
(343, 'cns_perro', 'Shiba Inu'),
(344, 'cns_perro', 'Shih Tzu'),
(345, 'cns_perro', 'Husky siberiano'),
(346, 'cns_perro', 'Silky Terrier'),
(347, 'cns_perro', 'Skye Terrier'),
(348, 'cns_perro', 'Fox terrier liso'),
(349, 'cns_perro', 'Galgo español'),
(350, 'cns_perro', 'Sabueso español'),
(351, 'cns_perro', 'Mastín español'),
(352, 'cns_perro', 'Perro de Agua Español'),
(353, 'cns_perro', 'San Bernardo'),
(354, 'cns_perro', 'Staffordshire Bull Terrier'),
(355, 'cns_perro', 'Schnauzer estándar'),
(356, 'cns_perro', 'Mastín tibetano'),
(357, 'cns_perro', 'Vizsla'),
(358, 'cns_perro', 'Weimaraner'),
(359, 'cns_perro', 'Cárdigan Welsh Corgi'),
(360, 'cns_perro', 'Corgi Galés Pembroke'),
(361, 'cns_perro', 'West Highland White Terrier o Westie'),
(362, 'cns_perro', 'Whippet'),
(363, 'cns_perro', 'Fox Terrier  pelo de alambre'),
(364, 'cns_perro', 'Xoloitzcuintle'),
(365, 'cns_perro', 'Yorkshire terrier'),
(366, 'cns_perro', 'Otro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
