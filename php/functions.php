<?php

// Convierte el título en una URL
function convertInUrl($titulo)
{
    // Eliminar tildes
    $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹");
    $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E");
    $texto = str_replace($no_permitidas, $permitidas, $titulo);
    // En minúsculas
    $resultado = strtolower($texto);
    // Sustituir espacios en blanco por guiones
    $res = str_replace(' ', '-', $resultado);
    // Le añadimos la extensión .php
    $titulo_final = $res . '.php';

    return $titulo_final;
}

// Insertar codigo en páginas nuevas
function insertarCodigo()
{

    $codigo = '';
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
