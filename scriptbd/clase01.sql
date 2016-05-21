
-- Creacion de base de datos
create table clase01;

-- usar base de datos
use clase01;



-- Estructura de tabla para la tabla `alumno`


CREATE TABLE `alumno` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombres`, `apellidos`, `edad`) VALUES
('PEDRO', 'TENORIO', 39),
('CESAR', 'PONCE', 88),
('ERICK', 'NAVARRO', 36),
('ERICK', 'NAVARRO', 31);

