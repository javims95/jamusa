<?php
include "conexion.php";

if (
    isset($_POST['enlace'])  &&  isset($_POST['titulo']) &&  isset($_POST['categoria'])   &&  isset($_POST['fecha'])
    &&  isset($_POST['nombre_imagen']) &&  isset($_POST['alt']) 
) {

    $directorio = "../img/portfolio/";
    $aleatorio = mt_rand(100, 999);
    $nombre = $_POST['nombre_imagen'];
    $ruta = $directorio . $nombre;

    $guardado = $_FILES['imagen']['tmp_name'];

    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
        if (file_exists($directorio)) {

            if (move_uploaded_file($guardado, $directorio . $nombre)) {
                echo "Archivo guardado con exito";
            } else {
                echo "Archivo no se pudo guardar";
            }
        }
    } else {
        if (move_uploaded_file($guardado, $directorio . $nombre)) {
            echo "Archivo guardado con exito";
        } elseif (move_uploaded_file($guardado, $directorio . $nombre)) {
            echo "Archivo guardado con exito";
        } else {
            echo "Archivo no se pudo guardar";
        }

        var_dump($ruta);
    }
} else {
    header("Location: ../admin-jms/nuevo-portfolio.php?error=Por favor rellene todos los campos");
}
