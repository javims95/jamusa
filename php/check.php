<?php 
session_start();
include "./conexion.php";

if(  isset($_POST['email'])  && isset($_POST['contraseña'])   ){
    
    $resultado = $conexion->query("select * from usuarios where 
        email='".$_POST['email']."' and 
        contraseña='".sha1($_POST['contraseña'])."' limit 1")or die($conexion->error);
    if(mysqli_num_rows($resultado)>0){
        $datos_usuario = mysqli_fetch_row($resultado);
        $id = $datos_usuario[0];
        $nombre = $datos_usuario[1];
        $apellidos = $datos_usuario[2];
        $email = $datos_usuario[3];
        $rol = $datos_usuario[4];

        $_SESSION['datos_login']= array(
            'id'=>$id,
            'nombre'=>$nombre,
            'apellidos'=>$apellidos,
            'email'=>$email,
            'rol'=>$rol
        );
        header("Location: ../admin-jms/");
    }else{
        header("Location: ../login.php?error=Credenciales incorrectas");
    }



}else{
    header("../login.php");
}

?>