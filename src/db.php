<?php
$conexion = new mysqli("mysql-server", "root", "rootpassword", "midb");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
