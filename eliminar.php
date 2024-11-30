<!DOCTYPE html>
<html>
<head>
    <title>Manipulando una BD</title>
</head>
<body>
    <center>
        <h1>Manejando BD de Alumnos</h1>
    </center>
    <br>
    <center>
        <table border="1">
            <tr bgcolor="#336999" style="color: #FF6;">
                <td>No. Cuenta</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Materia</td>
                <td>Turno</td>
                <td>Comentarios</td>
                <td>Eliminar</td>
            </tr>
            <?php
            include "conexion.php";
            $myconsulta = $conectar->query("SELECT * FROM alumnos");
            $filas = $myconsulta->num_rows;
            if ($filas >= 1) {
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
                <td><a href="eliminacion.php?idalumno=<?php echo $lafila['no_cuenta']; ?>">Eliminar</a></td>
            </tr>
            <?php
                }
            } else {
                echo "<br><h1>Registro no encontrado</h1>";
                echo "<a href='buscar.html'> Volver a buscar</a>";
            }
            ?>
        </table>
        <br>
        <a href="index.html">Página Principal</a>
    </center>
</body>
</html>
