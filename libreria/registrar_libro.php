<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $isbn = $_POST['isbn'];
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $edicion = $_POST['edicion'];
  $costo = $_POST['costo'];
  $sql = "INSERT INTO libro (isbn, titulo, autor, edicion, costo) VALUES ('$isbn', '$titulo', '$autor', '$edicion', '$costo')";
  if ($conn->query($sql) == TRUE) {
    echo (
      "Nuevo producto registrado exitosamente"
    );
  } else {
    echo (
      "Error $conn->error"
    );
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><a href="index.php">Registrar Libro</a></title>
</head>

<body>
  <h1>Registrar Libro</h1>
  <form action="<?php $_PHP_SELF ?>" method="POST">
    <label for="isbn">ISBN</label>
    <input type="number" name="isbn" id="isbn" maxlength="13"><br><br>
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" maxlength="100"><br><br>
    <label for="autor">Autor</label>
    <input type="text" name="autor" id="autor" maxlength="50"><br><br>
    <label for="edicion">Edicion</label>
    <input type="number" name="edicion" id="edicion" maxlength="2"><br><br>
    <label for="costo">Costo Diario</label>
    <input type="number" name="costo" id="costo"><br><br><br>
    <input type="submit" value="Registrar"><br><br>
  </form>
  <a href="listar_libros.php"><input type="button" value="Ver lista de libros"></a><br><br>
  <a href="index.php"><input type="button" value="Volver al Incio"></a>
</body>

</html>