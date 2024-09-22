<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "libreria";
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
  die("No se ha podido establecer la conexion " . $conn->connect_error);
}
