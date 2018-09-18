<?php

$servidor_var = "localhost";
$usuario_var = "usuario";
$password_var = "password";
$baseDatos_var= "";
$conect_var= mysqli_connect ($servidor_var,$usuario_var,$password_var,$baseDatos_var);

if(!$conect_var)
{
    echo ("no existe conexion a servidor");
}
else
{
    echo ("conexion exitosa base de datos");
}
?>