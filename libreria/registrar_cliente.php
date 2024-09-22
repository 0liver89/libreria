<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $identificacion = $_POST["identificacion"];
  $telefono = $_POST["telefono"];
  $sql = "INSERT INTO cliente (nombre, identificacion, telefono) VALUES ('$nombre', '$identificacion', '$telefono')";
  if ($conn->query($sql) == TRUE) {
    echo (
      "Nuevo cliente registrado"
    );
  } else {
    echo (
      "Hubo un error $conn->error"
    );
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Cliente</title>
</head>

<body>
  <h1>Registrar Clientes</h1>
  <form action="<?php $_PHP_SELF ?>" method="POST">
    <label for="cliente">Nombre del Cliente</label>
    <input type="text" name="nombre" id="nombre" max="100"><br><br>
    <label for="identificacion">Identificacion</label>
    <input type="number" name="identificacion" id="identificacion" maxlength="11"><br><br>
    <label for="telefono">Numero de telefono</label>
    <input type="number" name="telefono" id="telefono" maxlength="10"><br><br><br>
    <input type="submit" value="Guardar"><br><br>
  </form>
  <a href="index.php"><input type="button" value="Volver al Incio"></a>
</body>

</html>