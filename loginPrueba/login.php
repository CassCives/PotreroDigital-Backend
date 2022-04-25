<?php
    $user = $_POST["user"];
    $password = $_POST["password"]; 
    $usuario = "admin";
    $contraseña = "admin";
    if($user==$usuario&&$password==$contraseña){
        header("location:https://www.google.com.ar/maps");
    }
    else{
        header("location:error.html");
    }
?>