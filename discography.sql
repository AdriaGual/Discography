-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2018 a las 23:02:21
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `discography`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artist`
--

CREATE TABLE `artist` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_artist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artist`
--

INSERT INTO `artist` (`name`, `description`, `id_artist`) VALUES
('John L.', 'Its John Lennon.', 1),
('Michael Jackson', 'Michael Joseph Jackson (nacido el 29 de agosto de 1958 en Gary, Indiana, fallecido el 25 de junio de 2009 en Los Ángeles, California,) conocido en el mundo artístico como Michael Jackson, fue un cantante, compositor y bailarín estadounidense de música pop y sus variantes.', 15),
('The Beatles', 'The Beatles fue una banda de rock inglesa activa durante la década de 1960, y reconocida como la más exitosa comercialmente y críticamente aclamada en la historia de la música popular.', 17),
('Queen', 'Queen es una banda de rock británica formada en 1971 en Londres por el guitarrista Brian May, el cantante Freddie Mercury, el baterista Roger Taylor y el bajista John Deacon.', 19),
('Nirvana', 'Nirvana fue un grupo estadounidense de Grunge, procedente de Aberdeen, Washington. Con el éxito del sencillo \"Smells Like Teen Spirit\", del álbum Nevermind (1991), Nirvana escaló las listas musicales en todo el mundo e inició la explosión de lo que hasta ese momento era punk underground.', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artist_lp`
--

CREATE TABLE `artist_lp` (
  `id_artist` int(11) NOT NULL,
  `id_lp` int(11) NOT NULL,
  `id_artist_lp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artist_lp`
--

INSERT INTO `artist_lp` (`id_artist`, `id_lp`, `id_artist_lp`) VALUES
(15, 20, 2),
(21, 18, 3),
(21, 16, 4),
(15, 18, 5),
(19, 22, 6),
(19, 12, 7),
(17, 10, 8),
(1, 10, 9),
(17, 6, 10),
(1, 14, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lps`
--

CREATE TABLE `lps` (
  `id_lp` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lps`
--

INSERT INTO `lps` (`id_lp`, `name`, `description`) VALUES
(6, 'Racine Carrée', 'Las barreras del lenguaje son irrelevantes para la música Dance.'),
(8, 'Fischerspooner', 'El artístico duo formado por Warren Fischer y Casey Spooner generó un choque electrónico cuando debutó en un gran sello artístico. Ofrecieron una crítica a la estructura de la música pop al hacer su propio álbum pop. '),
(10, 'Les Rythmes Digitales: Darkdancer ', 'Antes de convertirse en Jaques Lu Cont, Thin White Duke o en el productor de Madonna, Kylie y the Killers, Stuart Price fue Les Rythmes Digitales. '),
(12, 'Ellen Allien & Apparat: Orchestra of Bubbles', 'Los artistas electrónicos alemanes Ellen Allien y Apparat tienen de forma independiente impresionantes catálogos, pero es su álbum colaborativo, Orchestra of Bubbles, el que amerita tocarse por una hora en la pista de baile.'),
(14, 'The Presets: Apocalypso', 'En su segundo álbum, The Presets demostraron ser sinvergüenzas subversivos del club, de forma más notable con \"My People\", un destructivo y obscuro track acerca de las atroces condiciones de los centros de detención de inmigrantes en Australia.'),
(16, 'Colette: When the Music\'s Loud ', 'En su primer LP para su propio sello, tras una carrera llena de influyentes publicaciones en el sello OM, la cantante, DJ y productora Colette deja atrás el sonido deep house que el mundo apenas está descubriendo por un toque más electro e italo-disco, co'),
(18, ' Boys Noize', 'Este álbum llegó al mundo como un puñetazo a la cara y la impresión que dejó la pedrería del guante aún se mantiene. Básicamente, el hip-hop, los breaks y el acid house se pusieron realmente '),
(20, 'Bangarang', 'uando Bangarang se publicó, el \"dubstep\" era un fenómeno mundial y Skrillex era uno de los bienes mas comerciables de la música dance. '),
(22, 'Drexciya: Neptune\'s Lair', 'Actualmente agotado y muy difícil de encontrar por varios años, Neptune\'s Lair del duo Drexciya se volvió algo enigmático aún cuando su influencia perdura. Temas como \"Surface Terrestrial Colonization\" muestran por qué. '),
(24, 'Clean Bandit: New Eyes ', 'Mientras el mundo se cansa de la arbitrariedad del EDM, Clean Bandit ofreció a una nueva generación metáforas de la música dance más suaves y más profundas.'),
(26, 'Major Lazer: Guns Don\'t Kill People... Lazers Do', 'Antes de que Diplo fuera un nombre reconocido, Major Lazer se conformaba por dos aleatorios chicos blancos y una caricatura jamaiquina con una pistola laser por brazo. Cuando se reunieron en el estudio Tuff Gong en Jamaica con un sonido de parlante sucio ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`);

--
-- Indices de la tabla `artist_lp`
--
ALTER TABLE `artist_lp`
  ADD PRIMARY KEY (`id_artist_lp`);

--
-- Indices de la tabla `lps`
--
ALTER TABLE `lps`
  ADD PRIMARY KEY (`id_lp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artist`
--
ALTER TABLE `artist`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `artist_lp`
--
ALTER TABLE `artist_lp`
  MODIFY `id_artist_lp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `lps`
--
ALTER TABLE `lps`
  MODIFY `id_lp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
