<!DOCTYPE html>
<html>
<head>
    <!-- Título de la página -->
    <title>Manipulando una BD</title>
</head>
<body>
    <!-- Encabezado principal centrado -->
    <h1>
        <center>
            Listado de Alumnos
        </center>
    </h1>
    <br>
    <center>
    <!-- Tabla con borde para mostrar los datos de los alumnos -->
    <table border="1">
        <!-- Fila de encabezado con fondo azul y texto amarillo -->
        <tr bgcolor="#336999" style="color: #FF6;">
            <td>No. Cuenta</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Materia</td>
            <td>Turno</td>
            <td>Comentarios</td>
        </tr>
        <?php
        // Incluir el archivo de conexión a la base de datos
        include "conexion.php";
        
        // Realizar una consulta a la base de datos para obtener todos los registros de la tabla 'alumnos'
        $myconsulta = $conectar->query("SELECT * FROM alumnos");
        
        // Obtener el número de filas devueltas por la consulta
        $filas = $myconsulta->num_rows;
        
        // Verificar si hay al menos un registro
        if ($filas >= 1) {
            // Recorrer cada fila de resultados de la consulta
            while ($lafila = $myconsulta->fetch_assoc()) {
                // Crear una fila de la tabla con datos del alumno y cambiar el color de fondo al pasar el ratón
                echo "<tr bgcolor=\"#CEF6F5\" onmouseover=\"this.style.background='#FFD961';\" onmouseout=\"this.style.background='#CEF6F5';\">";
                echo "<td>" . $lafila['no_cuenta'] . "</td>";
                echo "<td>" . $lafila['nombre'] . " " . $lafila['apat'] . " " . $lafila['amat'] . "</td>";
                echo "<td>" . $lafila['edad'] . "</td>";
                echo "<td>" . $lafila['materia'] . "</td>";
                echo "<td>" . $lafila['turno'] . "</td>";
                echo "<td>" . $lafila['comentarios'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <br>
    <!-- Enlace a la página principal -->
    <a href="index.html">Pagina Principal</a>
    </center>
</body>
</html>





