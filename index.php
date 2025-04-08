<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "contacto_lasalle";
    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
    if (!$enlace) die("Error de conexión: " . mysqli_connect_error());
?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario La Salle</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #87CEEB; /* Azul cielo */
                min-height: 100vh;
            }
            h1 {
                color: #FFFFFF; /* Blanco para contrastar con el fondo */
                text-align: center;
                text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
            }
            form {
                background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 15px rgba(0,0,0,0.2);
            }
            input {
                display: block;
                width: 95%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            input[type="submit"], input[type="reset"] {
                width: auto;
                display: inline-block;
                margin-right: 10px;
                cursor: pointer;
                background-color: #0066cc;
                color: white;
                border: none;
                padding: 10px 20px;
            }
            input[type="submit"]:hover, input[type="reset"]:hover {
                background-color: #0055aa;
            }
            .mensaje {
                padding: 10px;
                margin: 10px 0;
                border-radius: 4px;
            }
            .exito {
                background-color: #dff0d8;
                color: #3c763d;
            }
            .error {
                background-color: #f2dede;
                color: #a94442;
            }
        </style>
    </head>
    <body>
        <h1>Formulario La Salle</h1>
        
        <form action="#" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="text" name="telefono" placeholder="Teléfono" required>
            <div>
                <input type="submit" name="registro" value="Enviar">
                <input type="reset" value="Limpiar">
            </div>
        </form>
        
        <?php
            if(isset($_POST['registro'])) {
                $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
                $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
                $telefono = mysqli_real_escape_string($enlace, $_POST['telefono']);
               
                $insertarDatos = "INSERT INTO mensajes (nombre, correo, telefono)
                                  VALUES ('$nombre', '$correo', '$telefono')";
                $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
               
                if ($ejecutarInsertar) {
                    echo '<div class="mensaje exito">Datos guardados correctamente.</div>';
                } else {
                    echo '<div class="mensaje error">Error: ' . mysqli_error($enlace) . '</div>';
                }
                
                // Cerrar la conexión
                mysqli_close($enlace);
            }
        ?>
    </body>
</html>