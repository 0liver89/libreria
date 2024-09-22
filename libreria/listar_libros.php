<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $sql = "DELETE FROM libro WHERE id = $id";
  if ($conn->query($sql) == TRUE) {
    echo (
      "Libro removido satisfactoriamente"
    );
  } else {
    echo (
      "Hubo un error al remover el libro $id: $conn->error"
    );
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Libros</title>
</head>

<body>
  <h1>Lista de libros</h1>
  <div>
    <table border="1">
      <tr>
        <!-- <th>ID</th> -->
        <th>ISBN</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Numero de Edicion</th>
        <th>Costo Diario</th>
        <th>Acciones</th>
      </tr>
      <?php
      $sql = "SELECT * FROM libro";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo (
            "<tr>
              <!-- <td>{$row['id']}</td> -->
              <td>{$row['isbn']}</td>
              <td>{$row['titulo']}</td>
              <td>{$row['autor']}</td>
              <td>{$row['edicion']}</td>
              <td>{$row['costo']}</td>
              <td>
                <form method='POST'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <input type='submit' name='delete' value='Delete'>
                </form>
              </td>
            </tr>"
          );
        }
      } else {
        echo (
          "<tr>
            <td colspan='7' style='font-weight:bold; text-align:center; color:darkblue'>No hay libros</td>
          </tr>"
        );
      }
      $conn->close();
      ?>
    </table>
  </div>
  <br>
  <a href="registrar_libro.php"><input type="button" value="Registrar libro"></a><br><br>
  <a href="index.php"><input type="button" value="Volver al Incio"></a>
</body>

</html>