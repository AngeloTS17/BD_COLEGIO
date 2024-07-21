-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2024 a las 21:34:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `usuario`, `contra`) VALUES
(1, 'angel', '$2y$10$OWA6dW0T43aSDbBGX7jMDObdrQGtQvZkr5S65eKs0JhY.v4UGeMBS'),
(2, 'angelo', '$2y$10$D9bsq79qnRi45rnb/g0B9.npgcaNwBqVi91lnqazAbQJC1AWsWJPC'),
(3, 'junior', '$2y$10$ZiiQsv5xvDNHBdTWBsBVpOBAkRjo3dZ4fEDuXtnM8w/q/hqLPUhJy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_curso` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_estudiante`, `id_docente`, `id_curso`, `fecha`, `estado`) VALUES
(1, 2, 2, 17, '2024-01-17', 'Presente'),
(2, 3, 2, 17, '2024-01-17', 'Presente'),
(3, 5, 2, 17, '2024-01-17', 'Presente'),
(4, 6, 2, 17, '2024-01-17', 'Presente'),
(5, 7, 2, 17, '2024-01-17', 'Presente'),
(6, 8, 2, 17, '2024-01-17', 'Presente'),
(7, 9, 2, 17, '2024-01-17', 'Presente'),
(8, 10, 2, 17, '2024-01-17', 'Presente'),
(9, 11, 2, 17, '2024-01-17', 'Presente'),
(10, 12, 2, 17, '2024-01-17', 'Presente'),
(11, 13, 2, 17, '2024-01-17', 'Presente'),
(12, 15, 2, 17, '2024-01-17', 'Presente'),
(13, 16, 2, 17, '2024-01-17', 'Presente'),
(14, 17, 2, 17, '2024-01-17', 'Presente'),
(15, 18, 2, 17, '2024-01-17', 'Presente'),
(16, 19, 2, 17, '2024-01-17', 'Presente'),
(17, 20, 2, 17, '2024-01-17', 'Presente'),
(18, 21, 2, 17, '2024-01-17', 'Presente'),
(19, 22, 2, 17, '2024-01-17', 'Presente'),
(20, 52, 2, 17, '2024-01-17', 'Presente'),
(21, 65, 2, 17, '2024-01-17', 'Presente'),
(22, 66, 2, 17, '2024-01-17', 'Presente'),
(23, 67, 2, 17, '2024-01-17', 'Presente'),
(26, 70, 2, 17, '2024-01-17', 'Presente'),
(27, 2, 2, 17, '2024-03-23', 'Presente'),
(28, 3, 2, 17, '2024-03-23', 'Presente'),
(29, 5, 2, 17, '2024-03-23', 'Presente'),
(30, 6, 2, 17, '2024-03-23', 'Presente'),
(31, 7, 2, 17, '2024-03-23', 'Presente'),
(32, 8, 2, 17, '2024-03-23', 'Presente'),
(33, 9, 2, 17, '2024-03-23', 'Presente'),
(34, 10, 2, 17, '2024-03-23', 'Presente'),
(35, 11, 2, 17, '2024-03-23', 'Presente'),
(36, 12, 2, 17, '2024-03-23', 'Presente'),
(37, 13, 2, 17, '2024-03-23', 'Presente'),
(38, 15, 2, 17, '2024-03-23', 'Presente'),
(39, 16, 2, 17, '2024-03-23', 'Presente'),
(40, 17, 2, 17, '2024-03-23', 'Presente'),
(41, 18, 2, 17, '2024-03-23', 'Presente'),
(42, 19, 2, 17, '2024-03-23', 'Presente'),
(43, 20, 2, 17, '2024-03-23', 'Presente'),
(44, 21, 2, 17, '2024-03-23', 'Presente'),
(45, 22, 2, 17, '2024-03-23', 'Presente'),
(46, 52, 2, 17, '2024-03-23', 'Presente'),
(47, 65, 2, 17, '2024-03-23', 'Presente'),
(48, 66, 2, 17, '2024-03-23', 'Presente'),
(49, 67, 2, 17, '2024-03-23', 'Presente'),
(50, 68, 2, 17, '2024-03-23', 'Presente'),
(51, 69, 2, 17, '2024-03-23', 'Presente'),
(52, 70, 2, 17, '2024-03-23', 'Presente'),
(53, 2, 2, 17, '2024-03-23', 'Presente'),
(54, 3, 2, 17, '2024-03-23', 'Presente'),
(55, 5, 2, 17, '2024-03-23', 'Presente'),
(56, 6, 2, 17, '2024-03-23', 'Presente'),
(57, 7, 2, 17, '2024-03-23', 'Presente'),
(58, 8, 2, 17, '2024-03-23', 'Presente'),
(59, 9, 2, 17, '2024-03-23', 'Presente'),
(60, 10, 2, 17, '2024-03-23', 'Presente'),
(61, 11, 2, 17, '2024-03-23', 'Presente'),
(62, 12, 2, 17, '2024-03-23', 'Presente'),
(63, 13, 2, 17, '2024-03-23', 'Presente'),
(64, 15, 2, 17, '2024-03-23', 'Presente'),
(65, 16, 2, 17, '2024-03-23', 'Presente'),
(66, 17, 2, 17, '2024-03-23', 'Presente'),
(67, 18, 2, 17, '2024-03-23', 'Presente'),
(68, 19, 2, 17, '2024-03-23', 'Presente'),
(69, 20, 2, 17, '2024-03-23', 'Presente'),
(70, 21, 2, 17, '2024-03-23', 'Presente'),
(71, 22, 2, 17, '2024-03-23', 'Presente'),
(72, 52, 2, 17, '2024-03-23', 'Presente'),
(73, 65, 2, 17, '2024-03-23', 'Presente'),
(74, 66, 2, 17, '2024-03-23', 'Presente'),
(75, 67, 2, 17, '2024-03-23', 'Presente'),
(76, 68, 2, 17, '2024-03-23', 'Presente'),
(77, 69, 2, 17, '2024-03-23', 'Presente'),
(78, 70, 2, 17, '2024-03-23', 'Presente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_docentes`
--

CREATE TABLE `auditoria_docentes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `accion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoria_docentes`
--

INSERT INTO `auditoria_docentes` (`id`, `usuario`, `fecha`, `accion`) VALUES
(1, 'root@localhost', '2024-07-20', 'Se insertó un docente'),
(2, 'root@localhost', '2024-07-20', 'Se modificó un docente'),
(3, 'root@localhost', '2024-07-20', 'Se modificó un docente'),
(4, 'root@localhost', '2024-07-20', 'Se eliminó un docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_estudiantes`
--

CREATE TABLE `auditoria_estudiantes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `accion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoria_estudiantes`
--

INSERT INTO `auditoria_estudiantes` (`id`, `usuario`, `fecha`, `accion`) VALUES
(1, 'root@localhost', '2024-07-20', 'Se insertó un nuevo estudiante'),
(2, 'root@localhost', '2024-07-20', 'Se modificó un estudiante'),
(3, 'root@localhost', '2024-07-20', 'Se modificó un estudiante'),
(4, 'root@localhost', '2024-07-20', 'Se eliminó un estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(3) NOT NULL,
  `nombre_curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`) VALUES
(13, 'QUÍMICA'),
(14, 'INVESTIGACIÓN DE OPERACIONES I'),
(15, 'TALLER DE PROGRAMACIÓN II'),
(16, 'INGENIERÍA DE SOFTWARE'),
(17, 'ACTIVIDADES DE PROYECCIÓN SOCIAL IV'),
(18, 'ESTADÍSTICA Y PROBABILIDADES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `apellidoPaterno` varchar(70) NOT NULL,
  `apellidoMaterno` varchar(70) NOT NULL,
  `celular` int(9) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `dia_clase` varchar(70) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `borrado` int(11) NOT NULL,
  `curso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `dni`, `nombres`, `apellidoPaterno`, `apellidoMaterno`, `celular`, `correo`, `dia_clase`, `foto`, `borrado`, `curso`) VALUES
(1, 71883055, 'JOSE JONATHAN', 'HUALLANCA', 'CARBAJAL', 953734314, 'jose_huallanca_14mayo@hotmail.com', 'Miercoles', 'perfil-de-usuario.webp', 0, 16),
(2, 75778563, 'ANGELO MICHAEL', 'TORRES', 'SEBASTIAN', 902220172, 'angelots2017@gmail.com', 'Miercoles', 'perfil-de-usuario.webp', 0, 14),
(3, 757785621, 'INCA COLA', 'CIELO', 'MINERAL', 902201919, 'angelots2017@gmail.com', 'Miercoles', 'Loso simple.png', 0, 15),
(4, 75778568, 'Denisse', 'TORRES', 'SEBASTIAN', 902220178, 'angelo2017@gmail.com', 'Miercoles', 'Loso simple.png', 0, 13),
(10, 12345678, 'John', 'Doe', 'Smith', 987654321, 'john.doe@example.com', 'Lunes', 'path/to/photo1.jpg', 0, 17),
(11, 87654321, 'Jane', 'Roe', 'Johnson', 123456789, 'jane.roe@example.com', 'Martes', 'path/to/photo2.jpg', 0, 18),
(12, 11223344, 'Alice', 'Wonder', 'Land', 123123123, 'alice.wonder@example.com', 'Miércoles', 'path/to/photo3.jpg', 0, 15),
(13, 44332211, 'Bob', 'Builder', 'Works', 321321321, 'bob.builder@example.com', 'Jueves', 'path/to/photo4.jpg', 0, 16);

--
-- Disparadores `docentes`
--
DELIMITER $$
CREATE TRIGGER `TRIGGERDOCENTE_DELETE` AFTER DELETE ON `docentes` FOR EACH ROW INSERT INTO auditoria_docentes (usuario, fecha, accion) VALUES (CURRENT_USER(), NOW(), "Se eliminó un docente")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIGGERDOCENTE_INSERT` AFTER INSERT ON `docentes` FOR EACH ROW INSERT INTO auditoria_docentes (usuario, fecha, accion) VALUES (CURRENT_USER(), NOW(), "Se insertó un docente")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIGGERDOCENTE_UPDATE` AFTER UPDATE ON `docentes` FOR EACH ROW INSERT INTO auditoria_docentes (usuario, fecha, accion) VALUES (CURRENT_USER(), NOW(), "Se modificó un docente")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correoPersonal` varchar(100) NOT NULL,
  `correoInstitucional` varchar(100) NOT NULL,
  `grado` int(2) NOT NULL,
  `seccion` varchar(2) NOT NULL,
  `turno` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `borrado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `dni`, `nombres`, `apellidoPaterno`, `apellidoMaterno`, `edad`, `celular`, `correoPersonal`, `correoInstitucional`, `grado`, `seccion`, `turno`, `foto`, `borrado`) VALUES
(2, '71883041', 'ALESSANDRO JESUS', 'ARENALES', ' GRIJALVA ', 13, '925312804', 'alessandroarenalesgrijalva@gmail.com', 'alessandro.arenales@autonomadeica.edu.pe', 5, 'B', 'Tarde', 'GIGA_IMG.jpg', 0),
(3, '74697875', 'MARLON YSAAC', 'BENAVIDES', 'HUAPAYA', 16, '944497286', 'marlonbenavides333@gmail.com', 'marlon.benavides@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(5, '71472345', 'FARID JOSUE', 'CAJO', 'LOAYZA', 16, '988459618', 'cajofarid50@gmail.com', 'farid.cajo@autonomadeica.edu.pe', 5, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(6, '71717319', 'WILDER YUSSEF', 'CANELO ', 'TORRES', 16, '984329135', 'wildercanelo2003@gmail.com', 'wilder.canelo@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'CANELO.png', 0),
(7, '73930631', 'EMANUEL ISAI', 'CHACALIAZA', 'RONCEROS', 16, '998113280', 'ccrys012622@hotmail.com', 'emanuel.chacaliaza@autonomadeica.edu.pe', 5, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(8, '73952228', 'MARGIORY IVETH', 'CUYA', 'JARES', 16, '981262358', 'margiorycuya@hotmail.com', 'margiory.cuya@autonomadeica.edu.pe', 5, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(9, '71590508', 'LEHIDY PAMELA', 'DIAZ', 'MUNAYCO', 15, '977419841', 'lehidy.diaz@gmail.com', 'lehidy.diaz@autonomadeica.edu.pe', 3, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(10, '71711892', 'JUAN CARLOS JUNIOR', 'DIAZ', 'RODRIGUEZ', 16, '908601979', 'diaz.rodriguez.juan2402@gmail.com', 'juan.diaz@autononomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(11, '72318662', 'ROLANDO ANDRES', 'FERREYRA', 'BLANCO', 14, '922741205', 'rolandoferreyra06@gmail.com', 'rolando.ferreyra@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(12, '73760841', 'GABRIEL ALEJANDRO', 'GAVILANO', 'MAGALLANES', 13, '944306086', 'magallanespro16@gmail.com', 'gabriel.gavilano@autonomadeica.edu.pe', 3, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(13, '74959408', 'ANGEL ALONSO', 'HUAMAN', 'DEL AGUILA', 16, '966230642', 'angelhuaman2805@gmail.com', 'angel.huaman@autonomadeica.edu.pe', 5, 'A', 'Noche', 'perfil-de-usuario.webp', 0),
(15, '74418899', 'CRISPIN JHUNIOR', 'IZAGUIRRE', 'CAYLLAHUA', 15, '922287349', 'crispin.izaguirre@gmail.com', 'crispin.izaguirre@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(16, '72781474', 'ALEX JAIRO', 'MORAN', 'SOLIS', 15, '952231843', 'alex1100_@outlook.com', 'alex.moran@autonomadeica.edu.pe', 3, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(17, '73470220', 'DANNA RUBI', 'PEÑALOZA', 'VASQUEZ', 16, '922076745', 'dannarubi102@gmail.com', 'danna.penaloza@autonomadeica.edu.pe', 5, 'B', 'Mañana', 'perfil-de-usuario.webp', 0),
(18, '72575748', 'ANDREA CAROLINA', 'RAMIREZ', 'ALVIAR', 16, '953981913', 'ramirezalviar.0805@gmail.com', 'andrea.ramirez@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(19, '75777120', 'HARITH JHAMPIERE', 'SAAVEDRA', 'NINA', 12, '902558733', 'harith.992004@gmail.com', 'harith.saavedra@autonomadeica.edu.pe', 5, 'A', 'Tarde', 'perfil-de-usuario.webp', 0),
(20, '72608337', 'CARLOS DAVID', 'SARAVIA', 'ALMEYDA', 16, '902132953', 'carlos.david.saravia.13@gmail.com', 'carlos.saravia@autonomadeica.edu.pe', 5, 'B', 'Tarde', 'perfil-de-usuario.webp', 0),
(21, '75778563', 'ANGELO MICHAEL', 'TORRES', 'SEBASTIAN', 14, '902220172', 'angelots2017@gmail.com', 'angelo.torres@autonomadeica.edu.pe', 5, 'C', 'Tarde', '1080p.png', 0),
(22, '73636490', 'ANTHONY MARTIN', 'VALENCIA', 'HEREDIA', 16, '960412900', 'antoni73636490@gmail.com', 'anthony.valencia@autonomadeica.edu.pe', 5, 'A', 'Tarde', 'perfil-de-usuario.webp', 0),
(52, '70465820', 'VALERIA CRISTINA', 'VASQUEZ', 'TAPIA', 16, '935476010', 'valeriatapia019@gmail.com', 'valeria.vasquez@autonomadeica.edu.pe', 5, 'A', 'Mañana', 'perfil-de-usuario.webp', 0),
(65, '75778564', 'MINERAL', 'CIELO', 'COCA', 15, '902220178', 'agua.cielo@gmail.com', 'agua.cielo@autonomadeica.edu.pe', 3, 'C', 'Noche', 'Carta de Orgullo del rey mago Juliuus novacrono.png', 0),
(66, '12345676', 'CUADERNO', 'LORO', 'CUADRICULADO', 15, '902220121', 'Emanuel.CR@gmail.com', 'angelo.torres@autonomadeica.edu.pe', 4, 'C', 'Noche', 'Loso simple.png', 0),
(67, '12345676', 'CUADERNO', 'LORO', 'CUADRICULADO', 15, '902220121', 'Emanuel.CR@gmail.com', 'angelo.torres@autonomadeica.edu.pe', 4, 'C', 'Noche', 'Loso simple.png', 0),
(68, '12345676', 'CUADERNO', 'LORO', 'CUADRICULADO', 15, '902220121', 'Emanuel.CR@gmail.com', 'angelo.torres@autonomadeica.edu.pe', 4, 'C', 'Noche', 'Loso simple.png', 1),
(69, '12345676', 'CUADERNO', 'LORO', 'CUADRICULADO', 15, '902220121', 'Emanuel.CR@gmail.com', 'angelo.torres@autonomadeica.edu.pe', 4, 'C', 'Noche', 'Loso simple.png', 0),
(70, '75778568', 'dwawae', 'wadwdawda', 'dwwdawd', 16, '131241421', 'angelots2017@gamil.com', 'angelo.torres@autonomadeica.edu.pe', 4, 'C', 'Tarde', 'Loso simple.png', 0),
(71, '75778564', 'fesfes', 'esffsef', 'fsefes', 14, '213312', 'angelots207@gmail.com', 'angelo.torres333@autonomadeica.edu.pe', 3, 'C', 'Tarde', 'Fondoooo-con-banner.png', 0);

--
-- Disparadores `estudiantes`
--
DELIMITER $$
CREATE TRIGGER `TRIGGERESTUDIANTE_DELETE` AFTER DELETE ON `estudiantes` FOR EACH ROW INSERT INTO auditoria_estudiantes (usuario, fecha, accion) VALUES (CURRENT_USER(), NOW(), "Se eliminó un estudiante")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIGGERESTUDIANTE_INSERT` AFTER INSERT ON `estudiantes` FOR EACH ROW INSERT INTO auditoria_estudiantes (usuario, fecha, accion)
VALUES (CURRENT_USER(), NOW(), "Se insertó un nuevo estudiante")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIGGERESTUDIANTE_UPDATE` AFTER UPDATE ON `estudiantes` FOR EACH ROW INSERT INTO auditoria_estudiantes (usuario, fecha, accion) VALUES (CURRENT_USER(), NOW(), "Se modificó un estudiante")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `id_matricula` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`id_matricula`, `id_estudiante`, `id_curso`, `id_docente`) VALUES
(7, 21, 16, 1),
(8, 21, 13, 4),
(9, 21, 18, 11),
(10, 21, 17, 10),
(11, 2, 13, 4),
(12, 10, 14, 2),
(13, 21, 16, 1),
(14, 21, 14, 2),
(15, 5, 13, 4),
(16, 5, 13, 4),
(17, 5, 13, 4),
(18, 5, 13, 4),
(19, 5, 17, 10),
(20, 52, 15, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_curso` int(3) NOT NULL,
  `nota` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `id_estudiante`, `id_docente`, `id_curso`, `nota`) VALUES
(1, 2, 2, 13, 12.00),
(2, 3, 2, 13, 13.00),
(3, 5, 2, 13, 14.00),
(4, 6, 2, 13, 12.00),
(5, 7, 2, 13, 13.00),
(6, 8, 2, 13, 14.00),
(7, 9, 2, 13, 15.00),
(8, 10, 2, 13, 16.00),
(9, 11, 2, 13, 12.00),
(10, 12, 2, 13, 12.00),
(11, 13, 2, 13, 16.00),
(12, 15, 2, 13, 15.00),
(13, 16, 2, 13, 14.00),
(14, 17, 2, 13, 12.00),
(15, 18, 2, 13, 11.00),
(16, 19, 2, 13, 11.00),
(17, 20, 2, 13, 11.00),
(18, 21, 2, 13, 11.00),
(19, 22, 2, 13, 11.00),
(20, 52, 2, 13, 11.00),
(21, 65, 2, 13, 11.00),
(22, 66, 2, 13, 11.00),
(23, 67, 2, 13, 11.00),
(24, 68, 2, 13, 11.00),
(25, 69, 2, 13, 11.00),
(26, 70, 2, 13, 11.00),
(27, 2, 2, 13, 12.00),
(28, 3, 2, 13, 13.00),
(29, 5, 2, 13, 14.00),
(30, 6, 2, 13, 12.00),
(31, 7, 2, 13, 13.00),
(32, 8, 2, 13, 14.00),
(33, 9, 2, 13, 15.00),
(34, 10, 2, 13, 16.00),
(35, 11, 2, 13, 12.00),
(36, 12, 2, 13, 12.00),
(37, 13, 2, 13, 16.00),
(38, 15, 2, 13, 15.00),
(39, 16, 2, 13, 14.00),
(40, 17, 2, 13, 12.00),
(41, 18, 2, 13, 11.00),
(42, 19, 2, 13, 11.00),
(43, 20, 2, 13, 11.00),
(44, 21, 2, 13, 11.00),
(45, 22, 2, 13, 11.00),
(46, 52, 2, 13, 11.00),
(47, 65, 2, 13, 11.00),
(48, 66, 2, 13, 11.00),
(49, 67, 2, 13, 11.00),
(50, 68, 2, 13, 11.00),
(51, 69, 2, 13, 11.00),
(52, 70, 2, 13, 11.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `auditoria_docentes`
--
ALTER TABLE `auditoria_docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auditoria_estudiantes`
--
ALTER TABLE `auditoria_estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `curso` (`curso`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_curso` (`id_curso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `auditoria_docentes`
--
ALTER TABLE `auditoria_docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `auditoria_estudiantes`
--
ALTER TABLE `auditoria_estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `asistencia_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `matriculas_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
