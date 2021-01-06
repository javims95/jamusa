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

    // Obtener los select marcados
    $categorias_select = getSelect($category);
    $categorias = implode(",", $categorias_select);

    // Convertir nombre del fichero en URL
    $ruta = '../blog/';
    $nombre_pagina = convertInUrl($titulo);
    $nombre_final = $_POST['nombre_img'];
    $ruta_absoluta = $ruta . $nombre_final;

    // Variables para la imagen
    $directorio_destino = '../img/blog/';
    $nombre_fichero = 'imagen';    

    // Se guarda la imagen en el servidor
    if (!empty($_FILES['imagen']['tmp_name']) && !empty($_POST['nombre_img'])) {
        if (subir_fichero($directorio_destino, $nombre_fichero, $nombre_final)) {
            echo 'Archivo recibido correctamente';
        } else {
            echo 'No se ha podido subir la imagen';
        }
    } else {
        echo 'No existen las variables';
    }

    var_dump($titulo);
    var_dump($nombre_pagina);

    // Inserción de los datos en la DDBB
    $conexion->query("insert into blog 
                (id,titulo,nombre_pagina,contenido,fecha,categoria,imagen,meta_titulo,meta_descripcion,keywords) values
                (
                    '',
                    '$titulo',
                    '$nombre_pagina',
                    '" . $_POST['content'] . "',
                    '" . $_POST['fecha'] . "',
                    '$categorias',
                    '$nombre_final',
                    '" . $_POST['meta_titulo'] . "',
                    '" . $_POST['meta_descripcion'] . "',
                    '" . $_POST['keywords'] . "'
                )   ") or die($conexion->error);

    file_put_contents($ruta_absoluta, 'Hola');
}


// if (
//     isset($_POST['enlace'])  &&  isset($_POST['titulo']) &&  isset($_POST['categoria'])   &&  isset($_POST['fecha'])
//     &&  isset($_POST['nombre_imagen']) &&  isset($_POST['alt']) 
// ) {

//     $directorio = "../img/portfolio/";
//     $nombre = $_POST['nombre_imagen'];
//     $ruta = $directorio . $nombre;

//     $guardado = $_FILES['imagen']['tmp_name'];

//     if (!file_exists($directorio)) {
//         mkdir($directorio, 0777, true);
//         if (file_exists($directorio)) {
//             echo "Archivo no se pudo guardar";
//         }
//     } else {
//         if (move_uploaded_file($guardado, $directorio . $nombre)) {
//             echo "Archivo guardado con exito";

//             // Insertamos los datos en la DDBB
//             $conexion->query("insert into portfolio 
//                 (id,enlace,titulo,categoria,fecha,imagen,alt) values
//                 (
//                     '',
//                     '" . $_POST['enlace'] . "',
//                     '" . $_POST['titulo'] . "',
//                     '" . $_POST['categoria'] . "',
//                     '" . $_POST['fecha'] . "',
//                     '" . $_POST['nombre_imagen'] . "',
//                     '" . $_POST['alt'] . "'
//                 )   ") or die($conexion->error);  


//         } else {
//             echo "Archivo no se pudo guardar";
//         }

        
//     }
// } else {
//     header("Location: ../admin-jms/nuevo-portfolio.php?error=Por favor rellene todos los campos");
// }
