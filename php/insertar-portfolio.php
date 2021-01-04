<?php
include "conexion.php";

if (
    isset($_POST['enlace'])  &&  isset($_POST['titulo']) &&  isset($_POST['categoria'])   &&  isset($_POST['fecha'])
    &&  isset($_POST['nombre_imagen']) &&  isset($_POST['alt'])
) {

    $carpeta = "../img/portfolio/";
    $nombreFinal = $_POST['nombre_imagen'];
    $nombre = $_FILES['imagen']['name'];


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $nombreFinal)) {
        $conexion->query("insert into portfolio 
                (id,enlace,titulo,categoria,fecha,imagen,alt) values
                (
                    '',
                    '" . $_POST['enlace'] . "',
                    '" . $_POST['titulo'] . "',
                    '" . $_POST['categoria'] . "',
                    '" . $_POST['fecha'] . "',
                    '" . $_POST['nombre_imagen'] . "',
                    '" . $_POST['alt'] . "'
                )   ") or die($conexion->error);
        // header("Location: ../admin-jms/nuevo-portfolio.php?success");
    } else {
        // header("Location: ../admin-jms/nuevo-portfolio.php?error=No se pudo subir la imagen");
    }
} else {
    // header("Location: ../admin-jms/nuevo-portfolio.php?error=Por favor rellene todos los campos");
}
