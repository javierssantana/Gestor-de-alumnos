<!DOCTYPE html>
<html>
<head>
    <!-- Título de la página -->
    <title>Datos del Alumno</title>
</head>
<body>
    <br>
    <center>
        <!-- Tabla para mostrar los datos del alumno -->
        <table border="1">
            <tr bgcolor="#336699" style="color:#FF6;">
                <!-- Encabezados de la tabla -->
                <td>No. Cuenta</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Materia</td>
                <td>Turno</td>
                <td>Comentarios</td>
            </tr>

            <?php
                // Obtener el valor de "CLAVE" del formulario enviado
                $CLAVE = $_POST["CLAVE"];
                // Incluir el archivo de conexión a la base de datos
                include "conexion.php";
                // Realizar la consulta a la base de datos
                $myconsulta = $conectar->query("SELECT * FROM alumnos WHERE no_cuenta='$CLAVE'");
                // Obtener el número de filas resultantes de la consulta
                $filas = $myconsulta->num_rows;
                // Verificar si se encontraron registros
                if ($filas >= 1) {
                    // Iterar sobre los resultados de la consulta
                    while ($lafila = $myconsulta->fetch_assoc()) {
            ?>
            <tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#CEF6F5';">
                <!-- Mostrar los datos del alumno en la tabla -->
                <td><?php echo $lafila['no_cuenta']; ?></td>
                <td><?php echo $lafila['nombre'] . " " . $lafila['apat'] . " " . $lafila['amat']; ?></td>
                <td><?php echo $lafila['edad']; ?></td>
                <td><?php echo $lafila['materia']; ?></td>
                <td><?php echo $lafila['turno']; ?></td>
                <td><?php echo $lafila['comentarios']; ?></td>
            </tr>
            
            <?php
                    }
                } else {
                    // Mensaje si no se encontraron registros
                    echo "<br><h1>Registro no encontrado</h1>";
                    echo "<a href='buscar.html'> Volver a buscar</a>";
                }
             
            ?>
        </table>
        <br>
        <!-- Enlace a la página principal -->
        <a href="index.html">Página Principal</a>
    </center>
</body>
</html>


