<?php
include "conexion.php";
include "functions.php";

if (
    isset($_POST['titulo']) && isset($_POST['content']) && isset($_POST['categoria']) &&  isset($_POST['fecha'])
    &&  isset($_POST['meta_titulo']) &&  isset($_POST['meta_descripcion']) &&  isset($_POST['keywords'])
) {

    // Variables generales
    $titulo = $_POST['titulo'];
    $category = $_POST['categoria'];

    // Obtener slug
    $slug = convertInUrl($titulo);

    // Obtener los select marcados
    $categorias_select = getSelect($category);
    $categorias = implode(",", $categorias_select);

    // Variables para la imagen
    $nombre_final = $_POST['nombre_img'];
    $directorio_destino = '../img/blog/';
    $nombre_fichero = 'imagen';

    // Convertir fecha a formato Español
    $fecha = new DateTime($_POST['fecha']);
    $fechaFormateada = $fecha->format('d/m/Y H:i');

    // Se guarda la imagen en el servidor
    if (!empty($_FILES['imagen']['tmp_name']) && !empty($_POST['nombre_img'])) {
        if (subir_fichero($directorio_destino, $nombre_fichero, $nombre_final)) {
            header("Location: ../admin-jms/nuevo-blog.php");
        } else {
            echo 'No se ha podido subir la imagen';
        }
    } else {
        echo 'No existen las variables';
    }

    // Inserción de los datos en la DDBB
    $conexion->query("insert into blog 
                (id,titulo,slug,resumen,contenido,fecha,categoria,imagen,meta_titulo,meta_descripcion,keywords) values
                (
                    '',
                    '$titulo',
                    '$slug',
                    '" . $_POST['resumen'] . "',
                    '" . $_POST['content'] . "',
                    '" . $fechaFormateada . "',
                    '$categorias',
                    '$nombre_final',
                    '" . $_POST['meta_titulo'] . "',
                    '" . $_POST['meta_descripcion'] . "',
                    '" . $_POST['keywords'] . "'
                )   ") or die($conexion->error);
}
