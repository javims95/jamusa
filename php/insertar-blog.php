<?php
include "conexion.php";
include "functions.php";

if (
    isset($_POST['titulo']) && isset($_POST['content']) && isset($_POST['categoria'])
) {

    $titulo = $_POST['titulo'];
    $titulo_original = $titulo;
    $content = $_POST['content'];
    $categoria = $_POST['categoria'];

    $categorias_select = getSelect($categoria);
    

    // $ruta = '../blog/';
    // $nombre_fichero = convertInUrl($titulo);
    // $ruta_absoluta = $ruta . $nombre_fichero;

    // file_put_contents($ruta_absoluta, $codigo);
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