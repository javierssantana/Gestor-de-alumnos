<html>
    <title>Manipulando una BD</title>
    <h1>
        <center>
            Datos de Alumno
        </center>
    </h1>
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
            </tr>   
            <?php
                $CLAVE = $_POST["CLAVE"];
                include "conexion.php";
                $myconsulta = $conectar->query("SELECT * FROM alumnos WHERE no_cuenta='$CLAVE'");
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
            </tr>
            <?php
                    }
                } else {
                    // Mensaje si no se encontraron registros
                    echo "<br><h1>Registro no encontrado</h1><br>";
                    echo "<a href='registroactualizar.html'> Volver a buscar/n";
                }
            ?>
            <table>
                <br>
                <br>
                <form action="actualizar.php" method="post">
                    No. de Cuenta: <input type="text" name="no_cuenta"><br>
                    Nombre: <input type="text" name="nombre"><br>
                    Apellido Paterno: <input type="text" name="apat"><br>
                    Apellido Materno: <input type="text" name="amat"><br>
                    <input type="submit" name="ok" value="Actualizar"><br> 
                </form>
                <br>
                <a href="index.html">Pagina Principal</a>
            </table>
    </center>
</html>