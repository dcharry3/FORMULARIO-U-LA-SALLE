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
        <title>Formulario Mi Salle</title>
        <style>
            body {
                background-color: pink;
                font-family: Arial, sans-serif;
                padding: 40px;
                text-align: center;
            }

            h1 {
                color: #333;
            }

            form {
                display: inline-block;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }

            input {
                display: block;
                margin: 10px auto;
                padding: 10px;
                width: 80%;
                max-width: 300px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            input[type="submit"], input[type="reset"] {
                background-color: #f06292;
                color: white;
                border: none;
                cursor: pointer;
            }

            input[type="submit"]:hover, input[type="reset"]:hover {
                background-color: #ec407a;
            }

            p {
                margin-top: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Formulario Mi Salle</h1>
        <form action="#" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="text" name="telefono" placeholder="
