<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $prestamo = $_POST["prestamo"];
  $cliente = $_POST["cliente"];
  $fecha_prestamo = $_POST["fecha_prestamo"];
  $fecha_entrega = $_POST["fecha_entrega"];
  $sql = "INSERT INTO prestamo (libro_prestado, id_cliente, fecha_prestamo, fecha_entrega) VALUES ('$prestamo', '$cliente', '$fecha_prestamo', '$fecha_entrega')";
  if ($conn->query($sql) === TRUE) {
    echo (
      "Prestamo registrado correctamente"
    );
  } else {
    echo (
      "Prestamo no se pudo registrar"
    );
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestamo</title>
</head>

<body>
  <h1>Prestamo</h1>
  <form action="<?php $_PHP_SELF ?>" method="post">
    <label for="prestamo">Libro a prestar</label>
    <input type="text" name="prestamo" id="prestamo"><br><br>
    <label for="cliente">ID del Cliente</label>
    <input type="number" name="cliente" id="cliente"><br><br>
    <label for="fecha_prestamo">Fecha Actual</label>
    <input type="date" name="fecha_prestamo" id="fecha_prestamo"><br><br>
    <label for="fecha_entrega">Fecha de retorno</label>
    <input type="date" name="fecha_entrega" id="fecha_entrega"><br><br><br>
    <input type="submit" value="Guardar"><br><br>
  </form>
  <a href="index.php"><input type="button" value="Volver al Incio"></a>
</body>

</html>