CREATE DATABASE weatherapi;
USE weatherapi;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `datos` (
  `id` int(20) NOT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `temperatura` int(20) DEFAULT NULL,
  `sensacion_termica` int(20) DEFAULT NULL,
  `velocidad_direccion_viento` varchar(20) DEFAULT NULL,
  `precipitacion` decimal(20,0) DEFAULT NULL,
  `humedad` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `datos` (`id`, `ciudad`, `fecha_hora`, `temperatura`, `sensacion_termica`, `velocidad_direccion_viento`, `precipitacion`, `humedad`) VALUES
(43, 'Albacete', '2023-02-10 17:19:00', 8, 5, '15', '0', 53);

ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `datos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;
