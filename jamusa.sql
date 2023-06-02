-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 12:43:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jamusa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `resumen` varchar(300) NOT NULL,
  `contenido` longtext NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `meta_titulo` varchar(100) NOT NULL,
  `meta_descripcion` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `slug`, `resumen`, `contenido`, `fecha`, `categoria`, `imagen`, `meta_titulo`, `meta_descripcion`, `keywords`) VALUES
(7, 'Los principios clave para un diseño de página web exitoso', 'los-principios-clave-para-un-diseno-de-pagina-web-exitoso', 'Descubre los principios fundamentales para lograr un diseño de página web exitoso que atraiga a los usuarios y cumpla tus objetivos. Aprende sobre la importancia de la usabilidad, la estética, la navegación intuitiva y mucho más.', '<p><span style=\"font-family: Montserrat;\">﻿</span><font face=\"Montserrat\">En este post, exploraremos los principios clave para el diseño de páginas web efectivas que cautivan a los usuarios y logran resultados exitosos. Un diseño web sólido es esencial para brindar una experiencia de usuario memorable y cumplir tus objetivos comerciales. Aquí hay algunos aspectos importantes a considerar:<br></font></p><p><font face=\"Montserrat\"><br></font></p><h2><font face=\"Montserrat\">Usabilidad:</font></h2><p><font face=\"Montserrat\">La usabilidad es fundamental para asegurar que los visitantes de tu sitio web puedan navegar fácilmente y encontrar lo que están buscando. Asegúrate de que tu diseño sea intuitivo, con una estructura clara y accesible. Simplifica la navegación y destaca los elementos clave para una experiencia fluida.</font></p><p><font face=\"Montserrat\"><br></font></p><h3><font face=\"Montserrat\">Estética web:</font></h3><p><font face=\"Montserrat\">El aspecto visual de tu página web es crucial para captar la atención de los usuarios. Utiliza un diseño atractivo, con una combinación de colores armoniosa y una tipografía legible. Considera la jerarquía visual para resaltar los elementos importantes y crea un diseño coherente que refleje la identidad de tu marca.</font></p><p><font face=\"Montserrat\"><br></font></p><h3><font face=\"Montserrat\">Navegación intuitiva:</font></h3><p><font face=\"Montserrat\">La navegación de tu página web debe ser fácil de entender y utilizar. Organiza el contenido de manera lógica y estructurada, con menús claros y enlaces que ayuden a los usuarios a moverse sin problemas por tu sitio. No olvides incluir un botón de inicio o enlace al inicio de la página para facilitar la navegación.</font></p><p><font face=\"Montserrat\"><br></font></p><h4><font face=\"Montserrat\">Experiencia de usuario:</font></h4><p><font face=\"Montserrat\">El diseño de tu página web debe centrarse en brindar una experiencia agradable y satisfactoria a los usuarios. Considera la velocidad de carga, la adaptabilidad a diferentes dispositivos y la optimización para motores de búsqueda. Además, asegúrate de que el contenido sea relevante, útil y esté bien organizado.</font></p>', '27/05/2023 16:20', 'Wordpress', 'diseño-web.jpg', 'Diseño de Páginas Web: Principios Clave para el Éxito', 'Conoce los principios clave para el diseño de páginas web exitosas y atractivas. Aprende sobre usabi', 'diseño de páginas web, usabilidad, estética web, navegación intuitiva, experiencia de usuario'),
(11, 'Recuperación de Datos y Reparación de Ordenadores: ¡Vuelve a la vida digital', 'recuperacion-de-datos-y-reparacion-de-ordenadores-vuelve-a-la-vida-digital', '¿Necesitas reparar tu ordenador o recuperar datos perdidos? Somos tu solución. Nuestro equipo de expertos en servicios informáticos ofrece soluciones rápidas y efectivas en reparación de ordenadores y recuperación de datos de discos duros. Con diagnósticos precisos y técnicas avanzadas, podemos devo', '<p><span style=\"font-family: Montserrat;\">﻿</span><span style=\"font-size: 1rem; font-family: Montserrat;\">﻿</span><span style=\"font-size: 1rem; background-color: rgb(247, 247, 248); color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap;\">En nuestra empresa de servicios informáticos, entendemos lo frustrante que puede ser cuando tu ordenador deja de funcionar correctamente o pierdes acceso a tus archivos importantes debido a un fallo en el disco duro. Pero no te preocupes, estamos aquí para ayudarte. Nuestro equipo de expertos en reparación de ordenadores y recuperación de datos está capacitado para resolver cualquier problema técnico y devolverle la vida a tu dispositivo.</span><br></p><p style=\"margin: 1.25em 0px; border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap; background-color: rgb(247, 247, 248);\">Cuando tu ordenador presenta fallas o no arranca, es fácil entrar en pánico. Sin embargo, con nuestros servicios de reparación de ordenadores, puedes tener la tranquilidad de que estás confiando en profesionales con amplia experiencia en el campo. Realizamos un diagnóstico completo para identificar la causa subyacente del problema y luego procedemos a reparar tu dispositivo de manera rápida y eficiente. Ya sea que se trate de un problema de hardware, software o ambas cosas, estamos preparados para solucionarlo.</p><p style=\"margin: 1.25em 0px; border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap; background-color: rgb(247, 247, 248);\">Además de la reparación de ordenadores, también nos especializamos en la recuperación de datos de discos duros. Sabemos lo importante que son tus archivos personales o de trabajo, y entendemos la angustia que puede causar su pérdida. Nuestro equipo utiliza las últimas herramientas y técnicas de recuperación de datos para intentar recuperar la mayor cantidad posible de información valiosa. Ya sea que tus datos se hayan perdido debido a un fallo del disco duro, un formateo accidental, un virus o cualquier otro motivo, haremos todo lo posible por ayudarte a recuperarlos.</p><p style=\"margin: 1.25em 0px; border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap; background-color: rgb(247, 247, 248);\">En nuestra empresa, nos enorgullece ofrecer soluciones rápidas y efectivas para todos tus problemas informáticos. Sabemos que tu tiempo es valioso, por lo que nos esforzamos por proporcionar un servicio ágil y eficiente para minimizar cualquier interrupción en tu flujo de trabajo o actividades digitales.</p><p style=\"margin: 1.25em 0px; border: 0px solid rgb(217, 217, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap; background-color: rgb(247, 247, 248);\">Confía en nosotros para reparar tu ordenador y recuperar tus datos de forma segura y confidencial. Nuestro equipo está altamente capacitado y comprometido con brindar un servicio de calidad que supere tus expectativas. Estamos aquí para ayudarte a volver a la vida digital de manera rápida y sin complicaciones.</p>', '28/05/2023 09:40', 'CSS', 'recovery-data.jpg', 'Reparación de Ordenadores y Recuperación de Datos: ¡Soluciones rápidas', '¿Tu ordenador necesita reparación? ¿Has perdido datos importantes debido a un fallo en el disco duro', 'reparación de ordenadores, recuperación de datos, reparación de discos duros, servicios informáticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `email`, `comentario`, `fecha`, `post_id`) VALUES
(3, 'Pedro', 'pedro@hotmail.com', 'Me parece super interesante este tema del diseño web.', '2023-05-28 10:57:59', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `enlace` varchar(150) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`id`, `enlace`, `titulo`, `categoria`, `fecha`, `imagen`, `alt`) VALUES
(4, 'https://panther.jamusa.es/', 'Panther', 'Blog', '2023-05-22T11:46', 'panther.svg', 'panther');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contraseña`, `rol`) VALUES
(1, 'Javier', 'Muñoz Sánchez', 'javier@jamusa.es', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
