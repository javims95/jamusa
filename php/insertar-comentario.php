<?php
include "conexion.php";

if (
    isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['comentario']) 
) {

    $fecha = date("Y-m-d H:i:s");

    $conexion->query("INSERT INTO comentarios(id,nombre,email,comentario,fecha) VALUES
    (
        '',
      '" . $_POST['nombre'] . "',
      '" . $_POST['email'] . "',
      '" . $_POST['comentario'] . "',
      '$fecha'
    )") or die($conexion->error);
    header('Location: ../blog/blog-single.php#success');
} else {
    header('Location: ../blog/blog-single.php&error=No se ha podido publicar el comentario');
}

// " . $_POST['id_blog'] . "