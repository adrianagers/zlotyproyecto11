<?php

    include ("../Modelo/conexion.php");


    //$idUsuario = $_POST[""];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $numusu = 0;


    $consulta = "SELECT * FROM gestionusuario WHERE email = '$email'";
    $resultado = $conexion->query($consulta);

    while ($fila = $resultado->fetch_assoc()) {
        if(password_verify($password, $fila['password']))
        {
            $numusu++;
        }
    }
    if ($numusu == 1){
        session_start();
        //$_SESSION['usuario'] = $email;
        $consulta = "SELECT * FROM gestionusuario WHERE email = '$email'";
        $resultado = $conexion->query($consulta);
        while($usuario = $resultado->fetch_assoc()){
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['correo'] = $usuario['email'];
            $_SESSION['idUsuario'] =$usuario['idUsuario'];
        }

        header("location: ../Vista/php/logueado.php");
    }
    else {
        echo'<script type="text/javascript">
            alert("Usuario o Contraseña erronea, por favor intentelo de nuevo.");
            location="../Vista/php/iniciar-sesion.php";
            </script>';
    }

?>