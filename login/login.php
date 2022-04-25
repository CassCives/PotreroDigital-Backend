<?php
    $user = $_POST["user"];
    $password = $_POST["password"];
    $usuario = "admin";
    $contraseña = "admin";
    if($user==$usuario&&$password==$contraseña){
        header("location:loginExitoso.html");
    }
    else{
        header("location:loginError.html");
    }
?>