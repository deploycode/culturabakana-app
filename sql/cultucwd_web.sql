-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-05-2016 a las 15:54:08
-- Versión del servidor: 5.5.44-37.3-log
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cultucwd_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `anuncio_id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `anuncio_titulo` varchar(40) COLLATE utf8_bin NOT NULL,
  `subcategoria_cod` int(11) NOT NULL,
  `anuncio_descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `anuncio_precio` varchar(50) COLLATE utf8_bin DEFAULT 'A convenir',
  `anuncio_imagen` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`anuncio_id`),
  KEY `cod_subcategoria` (`subcategoria_cod`),
  KEY `email_persona` (`persona_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=319 ;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`anuncio_id`, `persona_email`, `anuncio_titulo`, `subcategoria_cod`, `anuncio_descripcion`, `anuncio_precio`, `anuncio_imagen`) VALUES
(196, 'culturabakanacol@gmail.com', 'Ref: ASCB1942 ', 28, 'Ref: ASCB1942 Primitivo verde', '$8.000 racimo', '../img/producto/IMG_20150418_101942.jpg'),
(197, 'culturabakanacol@gmail.com', 'REF: ASCB0043 ', 28, 'REF: ASCB0043 Yerbas aromáticas chocoanas (albahaca, cilantro, etc)', '$2.000', '../img/producto/IMG_20150418_110043.jpg'),
(199, 'culturabakanacol@gmail.com', 'REF: ASCB0305 ', 28, 'REF: ASCB0305 Ñame morado y blanco', '$6.000 el kilo', '../img/producto/IMG_20150418_110305.jpg'),
(200, 'culturabakanacol@gmail.com', 'REF: ASCB0458 ', 28, 'REF: ASCB0458 Papachina o Achín', '$ 5.000 según tamaño', '../img/producto/IMG_20150418_110458.jpg'),
(201, 'culturabakanacol@gmail.com', 'REF: ASCB0557 ', 28, 'REF: ASCB0557 Almirajó', '$5.000', '../img/producto/IMG_20150418_110557.jpg'),
(203, 'culturabakanacol@gmail.com', 'CUCAS ', 29, '  REF: ASCB735 Cucas', '$2.000', '../img/producto/IMG_20150528_105735.jpg'),
(204, 'culturabakanacol@gmail.com', 'PANES AYEMADOS', 29, '  REF: ASCB816 Panes ayemados', '$9.000', '../img/producto/IMG_20150528_105816.jpg'),
(205, 'culturabakanacol@gmail.com', 'REF: ASCB4454', 28, 'REF: ASCB4454 Carambolo', '$7.000 la docena', '../img/producto/IMG_20150418_104454.jpg'),
(226, 'culturabakanacol@gmail.com', 'REF:ASCB1051', 28, 'REF:ASCB1051.Lulo Chocoano cultivado en nuestra región.', '$3.000 unidad', '../img/producto/IMG_20150418_111051.jpg'),
(240, 'culturabakanacol@gmail.com', 'MARAÑON', 28, 'El marañón es una de las frutas mas deliciosas que conseguimos en nuestra región.', '$1.100 la unidad', '../img/producto/IMG_20150418_110157.jpg'),
(246, 'culturabakanacol@gmail.com', 'VIJA', 28, 'Vija, utilizada para dar color a las comidas.', '$1.500 cada una', '../img/producto/IMG_20150704_100309.jpg'),
(251, 'culturabakanacol@gmail.com', 'LONGANIZA Y CARNES AHUMADOS', 28, 'Longaniza, carne de cerdo y pollo ahumados.', '$18.000 por libra', '../img/producto/IMG-20150703-WA0009.jpg'),
(259, 'culturabakanacol@gmail.com', 'ARBOL DEL PAN', 28, 'REF: ASCB5831 Pepa de árbol del pan', '$3.000', '../img/producto/IMG_20150703_085831.jpg'),
(262, 'culturabakanacol@gmail.com', 'PIÑA', 28, 'Piña cultivada en el Chocó, famosa por su sabor dulce.', 'Entre $3.000 y $6.000', '../img/producto/IMG_20150703_085741.jpg'),
(263, 'culturabakanacol@gmail.com', 'CAÑA', 28, 'Caña entera y picada', '$2.000', '../img/producto/IMG_20150704_093248.jpg'),
(267, 'culturabakanacol@gmail.com', 'REF:IMG-20150703.', 28, 'REF: IMG-20150703. Mil peso alimento típico silvestre cultivado en nuestra región.', '$5.000 TOTUMO', '../img/producto/IMG_20150703_085722.jpg'),
(281, 'culturabakanacol@gmail.com', 'Envueltos de maíz  choclo', 28, 'Deliciosos envueltos de maíz choclo.', '$3.000', '../img/producto/IMG_20150722_173303.jpg'),
(286, 'culturabakanacol@gmail.com', 'Arequipe de borojo', 29, 'Delicioso y dulce arequipe de borojo, considerado como un agradable pasa-bocas, fabricado en nuestro departamento del choco.', '$ 6.000', '../img/producto/001.jpg'),
(288, 'culturabakanacol@gmail.com', 'Cocadas', 29, '      Cocadas elaboradas  artesanalmente en borojò, lulo, panela, leche y borojó.', '$2000', '../img/producto/03.jpg'),
(292, 'culturabakanacol@gmail.com', 'Vino De Borojò Y Pipilongo. REF: CB01LOR', 30, 'Vino De Borojò Y Pipilongo Elaborados En El Departamento Del Chocó 100% Medicinal Y Afrodisíaco.  ', '$16.000', '../img/producto/IMG_20151006_161932.jpg'),
(298, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM01', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras típicas del Departamento del Chocó. ', '$50,000', '../img/producto/IMG-20160116-WA0007.jpg'),
(299, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM02', 31, 'Hermosa cartera para hombres elaborada en damagua y cabecinegro fibras típicas del Departamento del Choco.', '$50.000', '../img/producto/IMG-20160116-WA0000.jpg'),
(300, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM03', 31, 'Hermosa cartera elaborada en damagua y cebecinegro fibras típicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0001.jpg'),
(301, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM04', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras tipicas del Departamento del Chocò', '$50.000', '../img/producto/IMG-20160116-WA0002.jpg'),
(302, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM05', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras típicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0003.jpg'),
(303, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM06', 31, 'Hermosa cartera para hombres elaborados en damagua y cebecinegro fibras típicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0004.jpg'),
(304, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM07', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras típicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0005.jpg'),
(305, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM08', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras tipicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0006.jpg'),
(306, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM09', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras típicas del Departamento del Chocò', '$50.000', '../img/producto/IMG-20160116-WA0008.jpg'),
(307, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM10', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras típicas del Departamento del Chocò', '$50.000', '../img/producto/IMG-20160116-WA0009.jpg'),
(308, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM11', 31, 'Hermosa cartera para hombres elaboradas en damagua y cabecinegro fibras tipicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0010.jpg'),
(309, 'culturabakanacol@gmail.com', 'Cartera para hombres; REF. CBMOM12', 31, 'Hermosa cartera para hombres elaboradas en damagua y cebecinegro fibras típicas del Departamento del Chocò.', '$50.000', '../img/producto/IMG-20160116-WA0011.jpg'),
(310, 'culturabakanacol@gmail.com', 'REF:CBMOM13', 21, ' Hermoso bolso grande para mujer elaborados en Damagua y Cabecinegro fibras típicas del Departamento del Chocò.', '$210.000', '../img/producto/'),
(311, 'culturabakanacol@gmail.com', 'REF:CBMOM14', 21, ' Hermoso bolso grande para mujer elaborado en Damagua y Cabecinegro fibras típicas del Departamento del Chocò', '$210.000', '../img/producto/'),
(312, 'culturabakanacol@gmail.com', 'REF:CBMOM15', 21, ' Hermoso bolso para mujer mediano elaborado en Damagua y Cebecinegro fibras típicas del Departamento del Chocò.', '$140.000', '../img/producto/'),
(313, 'culturabakanacol@gmail.com', 'REF:CBMAR004', 21, ' Bolso para hombre elaborado en Damagua y Cabecinegro fibras típicas del Departamento del Chocò', '$150.000', '../img/producto/'),
(314, 'culturabakanacol@gmail.com', 'REF:CBMOM17', 31, 'Monederos elaborados en Damagua y Cabecinegro fibras típicas del Departamento del Chocò', '$15.000', '../img/producto/IMG-20160125-WA0009.jpg'),
(315, 'culturabakanacol@gmail.com', 'REF: CBMAR001', 21, 'Hermoso bolso  para mujer, elaborado en damagua y cabecinegro ( fibras típicas del departamento del Choco). ', '$129.500', '../img/producto/001.jpg'),
(316, 'culturabakanacol@gmail.com', 'REF: CBMAR002', 21, 'Fino bolso para mujer (mediano) .  Elaborado en Damagua y Cebecinegro fibras típicas del Departamento del Chocò.', '155.000', '../img/producto/IMG_20160312_103144.jpg'),
(318, 'culturabakanacol@gmail.com', 'REF: CBMAR003', 21, 'atractivo bolso para mujer, elaborado en damagua y cabecinegro ( fibras típicas del departamento del Choco). ', '$130.000', '../img/producto/004.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`) VALUES
(1, 'Alimentos'),
(10, 'Artesanias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_empresa` varchar(50) COLLATE utf8_bin NOT NULL,
  `texto_empresa` varchar(5000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `titulo_empresa`, `texto_empresa`) VALUES
(6, 'contacto', 'Cultura Bakana Colombiana S.A.S.\r\nQuibdó - Chocó - Colombia\r\n\r\nMaría Nancy Aguilar\r\nculturabakanacol@gmail.com. \r\nTeléfonos: 310 368 78 42 - 310 368 0429'),
(7, 'mensaje', '   Felicidades por su Compra!.\r\n\r\nUsted ha realizado un pedido en nuestra página web www.culturabakana.com, a continuación expondremos las instrucciones a seguir para obtener el producto.\r\n\r\nINSTRUCCIONES\r\n\r\nPuede realizar el pago por consignación o transacción bancaria a la cuenta de ahorros de Cultura Bakana Colombiana S.A.S:\r\n\r\nNumero : 578525263 \r\nBanco de Bogotá\r\n\r\nO si desea, puede realizar un giro ( Efecty, supergiros, Sim) por el monto del producto a nombre de:\r\n\r\nMaría Nancy Aguilar\r\nC.C.  26331436\r\nQuibdó - Chocó\r\n\r\nAl realizar la consignación, transacción o giro, favor comunicarse con nosotros para confirmar su compra y el medio usado:\r\n\r\nculturabakanacol@gmail.com.   Tel: 310 368 78 42 - 310 368 0429'),
(8, 'Nosotros', 'MISION\r\n\r\nDifundir los productos de nuestra cultura afrocolombiana en sus diferentes manifestaciones, a fin de que sean reconocidos y valorados en Colombia y el mundo a través de su comercialización con altos estándares de calidad y practicidad.  \r\n\r\n\r\n\r\nVISIÓN\r\n\r\nEn el 2020 Cultura Bakana Colombiana será el mejor referente de la cultura afrocolombiana a nivel nacional e internacional.\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  `cod_tipo` int(11) NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  KEY `cod_tipo` (`cod_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `email`, `contrasena`, `cod_tipo`, `telefono`) VALUES
('Admin', 'a-gabrielrodriguez@hotmail.com', 'MilenkaSofia1992', 2, '3205317510'),
('anyer', 'anyermosquera@gmail.com', 'Anyerteamo', 1, '3226210222'),
('Cultura', 'culturabakanacol@gmail.com', '123', 2, '3103687842'),
('prueba', 'marianancyaguilarmosquera@yahoo.com.co', 'Anita10', 1, '3103687842'),
('mery yovana', 'merymoom@hotmail.com', '87061562573', 1, '3226371881');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `subcategoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_cod` int(11) NOT NULL,
  `subcategoria_nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`subcategoria_id`),
  KEY `categoria_cod` (`categoria_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`subcategoria_id`, `categoria_cod`, `subcategoria_nombre`) VALUES
(21, 10, 'Bolsos'),
(22, 10, 'cuadros'),
(23, 10, 'Flores'),
(24, 10, 'Sombreros'),
(28, 1, 'Alimentos tipicos'),
(29, 1, 'Dulces'),
(30, 1, 'Bebidas'),
(31, 10, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `tipousuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipousuario_nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`tipousuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`tipousuario_id`, `tipousuario_nombre`) VALUES
(1, 'user '),
(2, 'admin');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`persona_email`) REFERENCES `persona` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anuncio_ibfk_5` FOREIGN KEY (`subcategoria_cod`) REFERENCES `subcategoria` (`subcategoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`cod_tipo`) REFERENCES `tipousuario` (`tipousuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`categoria_cod`) REFERENCES `categoria` (`categoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
