<?php
// Se obtienen los datos enviados por el formulario mediante el método POST
$no_cuenta = $_POST["no_cuenta"];
$nombre = $_POST["nombre"];
$apat = $_POST["apat"];
$amat = $_POST["amat"];
$edad = $_POST["edad"];
$materia = $_POST["materia"];
$turno = $_POST["turno"];
$comentarios = $_POST["comentarios"];

// Se verifica que todos los campos no estén vacíos
if (!empty($no_cuenta) && !empty($nombre) && !empty($apat) && !empty($amat) && !empty($edad) 
&& !empty($materia) && !empty($turno) && !empty($comentarios)) {
    // Se incluye el archivo de conexión a la base de datos
    include "conexion.php"; // se establece la conexión dentro de la variable $conectar
    
    // Se prepara la consulta SQL para insertar los datos en la tabla 'alumnos'
    $consulta = "INSERT INTO alumnos (no_cuenta, nombre, apat, amat, edad, materia, turno, comentarios) 
    VALUES ('$no_cuenta', '$nombre', '$apat', '$amat', '$edad', '$materia', '$turno', '$comentarios')";
    
    // Se ejecuta la consulta SQL
    $conectar->query($consulta);
    
    // Se muestra un mensaje de éxito y un enlace para regresar a la página principal
    echo "El registro fue insertado correctamente <BR>";
    echo "<a href=\"index.html\">Pagina Principal</a>";
} else {
    // Si algún campo está vacío, se muestra un mensaje de error y un enlace para regresar a la página principal
    echo "Ingresa todos los datos por mostrar";
    echo "<a href=\"index.html\">Pagina Principal</a>";
}
?>

