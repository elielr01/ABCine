<?php

namespace es\ucm\fdi\aw;

$conn = App::conexionBd();

$sql = "SELECT p.nombre AS p_nombre, p.nombreFoto, ci.nombre AS c_nombre, s.numSala, b.numbutaca,
               DATE_FORMAT(f.fecha, '%W, %M %e, %Y') AS dia, DATE_FORMAT(f.fecha, '%H:%i hrs.') AS hora
        FROM compra co, butaca b, funcion f, pelicula p, sala s, cine ci
        WHERE co.id_usuario = " . $_SESSION['id'] . " AND co.id_butaca = b.id AND co.id_funcion = f.id AND f.id_pelicula = p.id AND
              f.id_sala = s.id AND s.id = ci.id
       ";

$result = $conn->query($sql);
if ($result != null && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='ticket-contenedor'>";
      echo "<div class='ticket-img-pelicula'>";
        echo "<img src='" . IMG_PATH . $row['nombreFoto'] . "' />";
      echo "</div>";

      echo "<div class='ticket-detalles'>";
        echo "<h2>" . $row['p_nombre'] . "<br/><br/></h2>";
        echo "<p>" . $row['c_nombre'] . "<br/><br/></p>";
        echo "<p>Sala: " . $row['numSala'] ."<br/><br/></p>";
        echo "<p>Butaca: " . $row['numbutaca'] . "<br/><br/></p>";
        echo "<p>Día: " . $row['dia'] . "<br/><br/></p>";
        echo "<p>Hora: " . $row['hora'] . "</p>";
      echo "</div>";
    echo "</div>";

  }
  $result->free();
} else {
  echo "ERROR: 0 results";
  echo $_SESSION['id'];
}
?>
