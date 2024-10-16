<?php

if(isset($_POST["btnIniciarSesion"]))
{
    $correo = $_POST["txtCorreo"];
    $contrasenna= $_POST["txtContrasenna"];
}
if(isset($_POST[btnRegistrarUsuario]))
{
    $correo = $_POST["txtIdentificacion"];
    $contrasenna= $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $contrasenna= $_POST["txtContrasenna"];   
}
?>