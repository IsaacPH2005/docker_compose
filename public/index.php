/**
* Página principal que muestra una tabla con los usuarios del sistema.
*
* Este archivo PHP realiza lo siguiente:
* - Conecta a una base de datos MySQL utilizando las credenciales proporcionadas.
* - Selecciona la base de datos 'db_example_1'.
* - Ejecuta una consulta para obtener todos los registros de la tabla 'Usuarios'.
* - Muestra los resultados en una tabla HTML utilizando Bootstrap para el estilo.
* - Maneja errores de conexión, selección de base de datos y consulta, mostrando mensajes descriptivos.
* - Cierra la conexión y libera los recursos al finalizar.
*
* Dependencias:
* - Bootstrap 5 para el diseño de la tabla y la interfaz.
*
* Notas:
* - Asegúrese de que el contenedor de la base de datos esté corriendo y accesible.
* - Las credenciales y el nombre de la base de datos deben coincidir con la configuración de su entorno Docker.
*/
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>LAMP CON DOCKER</title>
</head>

<body>
    <div class="container-fluid">
        <?php
        echo '<h1>Usuarios del Sistema</h1>';
        $conection = mysqli_connect('db', 'root', 'rootpass');
        if (!$conection) {
            die('Error de conexión: ' . mysqli_connect_error());
        }
        $database = mysqli_select_db($conection, 'db_example_1');
        if (!$database) {
            die('Error al seleccionar la base de datos: ' . mysqli_error($conection));
        }
        $query = "SELECT * FROM Usuarios";
        $result = mysqli_query($conection, $query);
        if (!$result) {
            die('Error en la consulta: ' . mysqli_error($conection));
        }
        echo '<table class="table table-striped">';
        echo '<thead><tr><th>ID</th><th>Nombre</th><th>Correo</th></tr></thead>';
        echo '<tbody>';
        while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
            if (!$value) {
                die('Error al obtener los datos: ' . mysqli_error($conection));
            }
            echo '<tr>';
            foreach ($value as $elemet) {
                echo '<td>' . $elemet . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        $result->close();
        mysqli_close($conection);
        ?>
    </div>
</body>

</html>