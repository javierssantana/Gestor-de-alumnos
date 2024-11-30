<?php
$host="localhost";
$usuario="root";
$passwoed="";
$basedatos="datos";

$conectar= new mysqli($host,$usuario,$passwoed,$basedatos);
if($conectar->connect_error)
{
    echo "Error de conexion";
}
else {
    echo "Conexion exitosa!";
}
