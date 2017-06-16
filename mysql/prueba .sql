-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2017 a las 12:38:15
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `butaca`
--

CREATE TABLE IF NOT EXISTS `butaca` (
  `id` int(11) NOT NULL,
  `idSala` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `numbutaca` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

CREATE TABLE IF NOT EXISTS `cine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cine`
--

INSERT INTO `cine` (`id`, `nombre`) VALUES
(1, 'Cine 1'),
(2, 'Cine 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idFuncion` int(11) NOT NULL,
  `numEntradas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE IF NOT EXISTS `funcion` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idButaca` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreFoto` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `urlyoutube` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sinopsis` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  `preestreno` tinyint(1) NOT NULL,
  `comun` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `nombreFoto`, `nombre`, `urlyoutube`, `descripcion`, `sinopsis`, `preestreno`, `comun`) VALUES
(1, 'kkong.jpg', 'KONG: LA ISLA CALAVERA', 'https://www.youtube.com/embed/8wP_3OO3Res', 'Título original\r\nKong: Skull Islandaka \r\nAño\r\n2017\r\nDuración\r\n120 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nJordan Vogt-Roberts\r\nGuion\r\nDan Gilroy, Max Borenstein, Derek Connolly (Historia: John Gatins)', 'Un grupo de viajeros, exploradores y soldados de lo más dispar se reúne para viajar a una misteriosa isla del Pacífico que no aparece en los mapas. Entre ellos están el Capitán James Conrad (Tom Hiddleston), el Teniente Coronel Packard (Samuel L. Jackson) ', 0, 1),
(2, 'mult.jpg', 'MÚLTIPLE', 'https://www.youtube.com/embed/vxBR7LeYKiw', 'Título original\r\nSplit\r\nAño\r\n2016\r\nDuración\r\n116 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nM. Night Shyamalan\r\nGuion\r\nM. Night Shyamalan\r\nMúsica\r\nWest Dylan Thordson\r\nProductora\r\nUniversal / Blinding Edge Pictures / Blumhouse Productions', 'Debido a un trauma de la infancia temprana, Kevin (James McAvoy) sufre trastorno de identidad disociativo (DID), más comúnmente conocido como trastorno de personalidad múltiple. Dentro de él conviven 23 identidades diferentes. Entre ellas, están las person', 0, 1),
(3, 'life.jpg', 'LIFE (VIDA)', 'https://www.youtube.com/embed/y9hrcbwmYKI', 'Life\r\nAño\r\n2017\r\nDuración\r\n103 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nDaniel Espinosa\r\nGuion\r\nRhett Reese, Paul Wernick\r\nMúsica\r\nJon Ekstrand\r\nFotografía\r\nSeamus McGarvey', 'Roy Adams (Ryan Reynolds), David Jordan (Jake Gyllenhaal) y la tripulación de la Estación Espacial Internacional viajan a Marte con el objetivo de comprobar si las muestras recogidas en el planeta rojo presentan indicios de vida inteligente. Cuando uno de ', 0, 0),
(4, 'logan.jpg', 'LOGAN', 'https://www.youtube.com/embed/3OUSBjG3peI', 'Título original\r\nLoganaka \r\nAño\r\n2017\r\nDuración\r\n135 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nJames Mangold\r\nGuion\r\nScott Frank, James Mangold, Michael Green (Historia: James Mangold)\r\nMúsica\r\nMarco Beltrami\r\nFotografía\r\nJohn Mathieson', 'Es el año 2029. Los mutantes prácticamente han desparecido. Un cansado y abatido Logan (Hugh Jackman) vive retirado en la ciudad mexicana de El Paso. Es una sombra de lo que era. Se gana la vida conduciendo limusinas y se emborracha más de la cuenta. Su co', 0, 0),
(5, 'zonahostil.jpg', 'Zona Hostil', 'https://www.youtube.com/embed/HIaVe_j84Hs', 'Título original\r\nZona hostil\r\nAño\r\n2017\r\nDuración\r\n93 min.\r\nPaís\r\nEspaña España\r\nDirector\r\nAdolfo Martínez\r\nGuion\r\nLuis Arranz, Andrés M. Koppel\r\nMúsica\r\nRoque Baños\r\nFotografía\r\nAlfredo Mayo', 'A un convoy americano escoltado por la Legión española le estalla una mina al norte de Afganistán, y el inexperto Teniente Conte (Raúl Mérida) queda al mando de una dotación para proteger a los heridos hasta que los evacuen. La capitán Varela (Ariadna Gil)', 0, 0),
(6, 'byb.jpg', 'Bella y Bestia', 'https://www.youtube.com/embed/XpMjfUJ1lUc', 'Título original\r\nBeauty and the Beastaka \r\nAño\r\n2017\r\nDuración\r\n123 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nBill Condon\r\nGuion\r\nStephen Chbosky, Evan Spiliotopoulos (Novela: Jeanne-Marie Leprince de Beaumont)\r\nMúsica\r\nAlan Menken\r\nFotografía\r\n', 'Adaptación en imagen real del clásico de Disney "La bella y la bestia", que cuenta la historia de Bella (Emma Watson), una joven brillante y enérgica, que sueña con aventuras y un mundo que se extiende más allá de los confines de su pueblo en Francia. Inde', 0, 0),
(7, 'ff.jpg', 'Fast and Furious 8', 'https://www.youtube.com/embed/BLKaI3D9P2E', 'Título original\r\nThe Fate of the Furiousaka \r\nAño\r\n2017\r\nDuración\r\n136 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nF. Gary Gray\r\nGuion\r\nChris Morgan, Gary Scott Thompson\r\nMúsica\r\nBrian Tyler\r\nFotografía\r\nStephen F. Windon', 'Con Dom y Letty de luna de miel, Brian y Mia fuera del juego y el resto de la pandilla exonerada de todo cargo, el equipo está instalado en una vida aparentemente normal. Pero cuando una misteriosa mujer (Theron) seduce a Dom (Diesel) para regresar nuevame', 0, 0),
(8, 'eptb.jpg', 'Es por tu bien', 'https://www.youtube.com/embed/IvbBc2hFN4Q', 'Título original\r\nEs por tu bien\r\nAño\r\n2017\r\nDuración\r\n93 min.\r\nPaís\r\nEspaña España\r\nDirector\r\nCarlos Therón\r\nGuion\r\nManuel Burque, Josep Gatell\r\nMúsica\r\nJavier Rodero\r\nFotografía\r\nMiguel P. Gilaberte', 'La peor pesadilla que un padre puede tener con una hija es que ésta crezca y llegue el día en que le presente a su novio, y que éste sea un tipo despreciable que busca una sola cosa de su preciada y amada niñita. Y ese día es precisamente el que les llega ', 0, 0),
(9, 'cb.jpg', 'La cura del bienestar', 'https://www.youtube.com/embed/YiUPcwzb7tA', 'Título original\r\nA Cure for Wellness\r\nAño\r\n2017\r\nDuración\r\n156 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nGore Verbinski\r\nGuion\r\nJustin Haythe, Gore Verbinski\r\nMúsica\r\nBenjamin Wallfisch\r\nFotografía\r\nBojan Bazelli', 'Un joven y ambicioso ejecutivo de empresa (Dane DeHaan) es enviado para traer de vuelta al CEO de su compañía, que se encuentra en un idílico pero misterioso "centro de bienestar", situado en un lugar remoto de los Alpes suizos. El joven pronto sospecha qu', 0, 0),
(10, 'gi.jpg', 'El guardian invisible', 'https://www.youtube.com/embed/ONnr5_un0Qg', 'Título original\r\nEl guardián invisible\r\nAño\r\n2017\r\nDuración\r\n129 min.\r\nPaís\r\nEspaña España\r\nDirector\r\nFernando González Molina\r\nGuion\r\nLuiso Berdejo (Novela: Dolores Redondo)\r\nMúsica\r\nFernando Velázquez\r\nFotografía\r\nFlavio Martínez Labiano', 'En los márgenes del río Baztán, en tierras de Navarra, aparece el cuerpo desnudo de una adolescente en circunstancias que relacionan ese crimen con un asesinato ocurrido un mes atrás. La inspectora Amaia Salazar dirige la investigación, la cual le llevará ', 0, 0),
(11, 'muralla.jpg', 'La gran muralla', 'https://www.youtube.com/embed/Vv1bF_djMAY', 'Título original\r\nThe Great Wallaka \r\nAño\r\n2016\r\nDuración\r\n92 min.\r\nPaís\r\nChina China\r\nDirector\r\nZhang Yimou\r\nGuion\r\nTony Gilroy, Carlo Bernard, Doug Miro (Historia: Max Brooks, Edward Zwick, Marshall Herskovitz)\r\nMúsica\r\nRamin Djawadi\r\nFotografía\r\nStuart D', 'China, siglo XV. Un mercenario inglés (Matt Damon) y otro español (Pedro Pascal) son testigos del misterio que rodea a la construcción de la Gran Muralla China; ambos descubrirán que no se construyó para mantener alejados a los mongoles, sino para algo más', 0, 0),
(12, 'cantabrico.jpg', 'Cantabrico', 'https://www.youtube.com/embed/7I5urHr43o0', 'Título original\r\nCantábrico (Los dominios del oso pardo)\r\nAño\r\n2017\r\nDuración\r\n101 min.\r\nPaís\r\nEspaña España\r\nDirector\r\nJoaquín Gutiérrez Acha\r\nGuion\r\nJoaquín Gutiérrez Acha\r\nMúsica\r\nPablo Martín Caminero\r\nFotografía\r\nJoaquín Gutiérrez Acha', 'Km. como si se tratara de una gran muralla paralela a la costa del Mar Cantábrico. En su otra cara, la cordillera Cantábrica está repleta de cañones y bosques. Gracias a la influencia del mar y las elevadas precipitaciones, se ha originado una amplia veget', 0, 0),
(13, 'bat.jpg', 'Lego Batman', 'https://www.youtube.com/embed/nY42RllYdIU', 'Título original\r\nThe LEGO Batman Movie\r\nAño\r\n2017\r\nDuración\r\n104 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nChris McKay\r\nGuion\r\nSeth Grahame-Smith, Chris McKenna, Erik Sommers, Jared Stern, John Whittington\r\nMúsica\r\nLorne Balfe\r\nFotografía\r\nAnima', 'Spin-off de "La LEGO Película", protagonizado por Batman. En esta ocasión, el irreverente Batman, que también tiene algo de artista frustrado, intentará salvar la ciudad de Gotham de un peligroso villano, el Joker. Pero no podrá hacerlo solo, y tendrá que ', 0, 0),
(14, 'power.jpg', 'Power Rangers ', 'https://www.youtube.com/embed/5kIe6UZHSXw', 'Power Rangers\r\nAño\r\n2017\r\nDuración\r\n123 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nDean Israelite\r\nGuion\r\nJohn Gatins\r\nMúsica\r\nBrian Tyler\r\nFotografía\r\nMatthew J. Lloyd', 'La película sigue a cinco jóvenes predestinados a convertirse en algo extraordinario cuando descubren que tanto su modesto poblado, Angel Grove, como el resto del mundo, están al borde de la aniquilación por una amenaza alienígena. Nuestros héroes descubre', 0, 0),
(15, 'babyb.jpg', 'EL BEBÉ JEFAZO', 'https://www.youtube.com/embed/_qLryRS71BY', 'ítulo original\r\nThe Boss Baby\r\nAño\r\n2017\r\nDuración\r\n97 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nTom McGrath\r\nGuion\r\nMichael McCullers (Libro: Marla Frazee)\r\nMúsica\r\nSteve Mazzaro, Hans Zimmer\r\nFotografía\r\nAnimation', 'Tim es un niño de 7 años que tiene los mejores padres del mundo. Su vida es perfecta hasta que un fatídico día todo cambia de forma radical. ¿El motivo? Ya no serán solo tres en la familia, porque ha llegado su nuevo hermanito, un adorable bebé, que hace q', 0, 0),
(16, 'memp.jpg', 'Mañana empieza todo', 'https://www.youtube.com/embed/0I3Jr-b0G_Y', 'Título original\r\nDemain tout commence\r\nAño\r\n2016\r\nDuración\r\n115 min.\r\nPaís\r\nFrancia Francia\r\nDirector\r\nHugo Gélin\r\nGuion\r\nHugo Gélin, Mathieu Oullion, Jean-André Yerles (Historia: Guillermo Ríos, Leticia López Margalli, Eugenio Derbez)\r\nMúsica\r\nRob Simonse', 'Samuel vive la vida sin responsabilidades en la playa en el sur de Francia. Hasta que un día, una de sus antiguos amores le deja en los brazos a un bebé de pocos meses, Gloria: su hija. Incapaz de cuidar de un bebé y decidido a devolverle la niña a su madr', 0, 0),
(17, 'rey.jpg', 'De la nada surge un rey', 'https://www.youtube.com/embed/t0lBYhhSqYE', 'Título original\r\nKing Arthur: Legend of the Swordaka \r\nAño\r\n2017\r\nDuración\r\n120 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nGuy Ritchie\r\nGuion\r\nJoby Harold, Guy Ritchie, Lionel Wigram (Historia: David Dobkin, Joby Harold)\r\nMúsica\r\nDaniel Pemberton', 'Arturo es un joven intrépido que dirige a su pandilla por los callejones de Londonium. Tras sacar la espada de Excalibur, se verá obligado a tomar algunas duras decisiones. Junto a una misteriosa mujer llamada Guinevere, deberá aprender a manejar la espada', 1, 0),
(18, 'gits.jpg', 'Ghost in the shell', 'https://www.youtube.com/embed/8nfFMf6Hg9A', 'Título original\r\nGhost in the Shellaka \r\nAño\r\n2017\r\nDuración\r\n107 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nRupert Sanders\r\nGuion\r\nWilliam Wheeler (Manga: Masamune Shirow)\r\nMúsica\r\nClint Mansell, Lorne Balfe\r\nFotografía\r\nJess Hall', 'En un japón futurista la joven Motoko Kusanagi (Scarlett Johansson), también conocida como ''the Major'' Mira Killian, es la líder de grupo operativo de élite, Sección 9, cuyo objetivo es luchar contra el ciberterrorismo y los crímenes tecnológicos. Al mando', 1, 0),
(19, 'GGvol2.jpg', 'Guardianes de la galaxia v2', 'https://www.youtube.com/embed/12gvJgLE4us', 'Título original\r\nGuardians of the Galaxy Vol. 2aka \r\nAño\r\n2017\r\nDuración\r\n137 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nJames Gunn\r\nGuion\r\nJames Gunn (Cómic: Dan Abnett, Andy Lanning)\r\nMúsica\r\nTyler Bates\r\nFotografía\r\nHenry Braham', 'Continúan las aventuras del equipo en su travesía por los confines del cosmos. Los Guardianes deberán luchar para mantener unida a su nueva familia mientras intentan resolver el misterio de los verdaderos orígenes de Peter Quill. Viejos rivales se converti', 1, 0),
(20, 'ww.jpg', 'Wonder woman', 'https://www.youtube.com/embed/VSB4wGIdDwo', 'Título original\r\nWonder Womanaka \r\nAño\r\n2017\r\nDuración\r\n141 min.\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nPatty Jenkins\r\nGuion\r\nAllan Heinberg (Historia: Zack Snyder, Allan Heinberg, Jason Fuchs; Personajes: William M. Marston)\r\nMúsica\r\nRupert Gregs', 'Antes de ser Wonder Woman (Gal Gadot) era Diana, princesa de las Amazonas entrenada para ser una guerrera invencible. Diana ha sido criada en una isla paradisíaca protegida. Hasta que un día un piloto americano (Chris Pine) que tiene un accidente y acaba e', 1, 0),
(21, 'jl.jpg', 'United', 'https://www.youtube.com/embed/OiAmnKUaNmc', 'Título original\r\nJustice League\r\nAño\r\n2017\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nZack Snyder,  Joss Whedon\r\nGuion\r\nChris Terrio, David S. Goyer (Creador: Gardner Fox)\r\nMúsica\r\nJunkie XL\r\nFotografía\r\nFabian Wagner\r\n', 'Motivado por la fe que había recuperado en la humanidad e inspirado por la acción altruista de Superman, Bruce Wayne recluta la ayuda de su nueva aliada, Diana Prince, para enfrentarse a un enemigo aún mayor. Juntos, Batman y Wonder Woman se mueven rápidam', 1, 0),
(22, 'swviii.jpg', 'Star Wars episode VIII', 'https://www.youtube.com/embed/vvjOTLQ1nSQ', 'Título original\r\nStar Wars: The Last Jediaka \r\nAño\r\n2017\r\nPaís\r\nEstados Unidos Estados Unidos\r\nDirector\r\nRian Johnson\r\nGuion\r\nRian Johnson (Personajes: George Lucas)\r\nMúsica\r\nJohn Williams\r\nFotografía\r\nSteve Yedlin', 'Octavo episodio de la saga. Continuará la historia de Luke Skywalker, Rey y Finn en su lucha contra la Primera Orden. (FILMAFFINITY)', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE IF NOT EXISTS `promocion` (
  `id` int(11) NOT NULL,
  `porcentaje` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesusuario`
--

CREATE TABLE IF NOT EXISTS `rolesusuario` (
  `usuario` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`usuario`,`rol`),
  KEY `rol` (`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rolesusuario`
--

INSERT INTO `rolesusuario` (`usuario`, `rol`) VALUES
(1, 1),
(2, 1),
(7, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL,
  `idCine` int(11) NOT NULL,
  `numSala` int(11) NOT NULL,
  `idPelicula` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `idCine`, `numSala`, `idPelicula`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 2, 1, 2),
(5, 2, 2, 3),
(6, 2, 3, 4),
(7, 2, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tlf` int(32) NOT NULL,
  `correoAlternativo` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreFoto` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'pic.jpg',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `apellidos`, `tlf`, `correoAlternativo`, `nombreFoto`, `activo`) VALUES
(1, 'user@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', 'aa', 'aa', 123, '', 'pic.jpg', 1),
(2, 'admin@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', '', '', 0, '', 'pic.jpg', 1),
(7, 'wilortiz@ucm.es', '$2y$10$11okZYT50Pm2xG1BERxL8.RC5t.pBTraDetpqgWZOt6XgBwFTidA.', 'andresaurio', 'ortiz', 1231231, 'andreswauu@gmail.com', 'pic.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
