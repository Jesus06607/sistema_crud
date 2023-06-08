-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 18:31:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'Daniel', 'Salmerón', 'salmeron_dev', '123456', 'salm@emial.com'),
(5, 'Eduardo', 'Alvarado', 'daniel', '123', 'daniel@email.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
<title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <div>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellidos">
            <input type="text" name="telefono" placeholder="4811112233">
            
            </div>
            
            <div>
                <h1>Prueba caja 1</h1>
            <input type="date" name="fecha_pag" placeholder="0000-00-00">
            <input type="text" name="mto_total" placeholder="Total">
            <input type="date" id="prox_pgo" name="prox_pgo" >

            </div>
                       
           
            <input type="text" name="abono" placeholder="abono">

            <input type="submit" value="Agregar">
        </form>
       
    </div>




    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>telefono</th>
                    <th>fechas de pago</th>
                    <th>total</th>
                    <th>proximo pago</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['fecha_pag'] ?></th>
                        <th><?= $row['mto_total'] ?></th>
                        <th><?= $row['prox_pgo'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                        <td><a href="pagoautomatico.php?id=<?= $row['id'] ?>" class="users-table--pay">Realizar Pago</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>




