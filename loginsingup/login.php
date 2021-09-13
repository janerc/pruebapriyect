<?php
require "database.php"
$db = new database();
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("usuario", $_POST['email'], $_POST['password'])) {
            echo "Session iniciada";
        } else echo "Usuario o contraseña incorrectas";
    } else echo "Error: Coneccion con la base de datos";
} else echo "Todos los campos son obligatorios";
?>