<?php

//  recibimos el identificador del alumno a eliminar de elimina.php
//   el método es GET y se envia con el nombre "idalumno"

$valornumeroc=$_GET['idalumno'];

include "conexion.php";
//$myconsulta y $conectar estan declaradas en conexion.php
$myconsulta="delete from alumnos where no_cuenta=". $valornumeroc;
$conectar->query($myconsulta);

//******************** cerramos la conexión
$conectar->close();

//******************** mostramos el resultado de eliminar registro
echo " Se ha eliminado el registro:<br> N&uacute;mero de cuenta: " .$valornumeroc . "<br><br>" ;
echo "<a href='index.html'>REGRESAR AL MEN&Uacute;</a>";

//************************
?>
