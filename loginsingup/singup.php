<?php
require "database.php";
$db = new database();
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['identification']) && isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("usuario",$_POST['nombre'], $_POST['apellidos'], $_POST['identification'], $_POST['email'], $_POST['password'])) {
            echo "Registro exitoso";
        } else echo "Registro fallidp";
    } else echo "Error: Coneccion con la base de datos";
} else echo "Todos los campos son obligatorios";
?>