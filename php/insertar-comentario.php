<?php
include "conexion.php";

if (isset($_POST['nombre'], $_POST['email'], $_POST['comentario'], $_POST['post_id'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $post_id = intval($_POST['post_id']);
    $fecha = date("Y-m-d H:i:s");

    $query = "INSERT INTO comentarios (nombre, email, comentario, fecha, post_id) VALUES (?, ?, ?, ?, ?)";
    $statement = $conexion->prepare($query);
    $statement->bind_param("ssssi", $nombre, $email, $comentario, $fecha, $post_id);

    if ($statement->execute()) {
        $statement->close();
        $conexion->close();
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}

header('Location: ../blog-single.php?error=No se ha podido publicar el comentario');
exit;
