<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devoluciones</title>
</head>

<body>
  <h1>Devoluciones</h1>
  <form action="" method="post">
    <label for="libro">ID Libro a devolver</label>
    <input type="text" name="libro" id="libro"><br><br>
    <label for="fecha_devuelto">Fecha</label>
    <input type="date" name="fecha_devuelto" id="fecha_devuelto"><br><br>
    <label for="monto">Monto pagado</label>
    <input type="number" name="monto" id="monto"><br><br><br>
    <input type="submit" value="Guardar"><br><br>
  </form>
  <a href="index.php"><input type="button" value="Volver al Incio"></a>
</body>

</html>