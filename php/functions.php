<?php

// Convierte el título en una URL
function convertInUrl($titulo)
{
    $titulo = str_replace(
        array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ü', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü'),
        array('a', 'e', 'i', 'o', 'u', 'n', 'u', 'A', 'E', 'I', 'O', 'U', 'N', 'U'),
        $titulo
    );

    // Reemplazar caracteres especiales y espacios en blanco por guiones
    $titulo = strtolower($titulo);
    $titulo = preg_replace('/[^a-z0-9]/', '-', $titulo);
    $titulo = preg_replace('/-+/', '-', $titulo);

    // Eliminar guiones al comienzo y al final
    $titulo = trim($titulo, '-');

    return $titulo;
}

// Obtener las opciones marcadas en el select
function getSelect($categoria)
{
    $categorias = array();
    for ($i = 0; $i < count($categoria); $i++) {
        array_push($categorias, $categoria[$i]);
    }
    return $categorias;
}


// Convertir fecha a Español
function fechaEsp($fecha)
{
    $fecha = substr($fecha, 0, 10);
    $numeroDia = date('d', strtotime($fecha));
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));
    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    return $numeroDia . " " . $nombreMes . " " . $anio;
}


/**
 * subir_fichero()
 *
 * Sube una imagen al servidor  al directorio especificado teniendo el Atributo 'Name' del campo archivo.
 *
 * @param string $directorio_destino Directorio de destino dónde queremos dejar el archivo
 * @param string $nombre_fichero Atributo 'Name' del campo archivo
 * @return boolean
 */
function subir_fichero($directorio_destino, $nombre_fichero, $nombre_final)
{
    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
    if (is_dir($directorio_destino) && is_uploaded_file($tmp_name)) {
        $img_type = $_FILES[$nombre_fichero]['type'];

        // comprobar si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
            strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
            //Se sube la imagen
            if (move_uploaded_file($tmp_name, $directorio_destino . $nombre_final)) {
                return true;
            }
        }
    }
    return false;
}

function base_url()
{
    return 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
}
