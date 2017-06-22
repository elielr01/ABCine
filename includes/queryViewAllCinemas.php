<?php

  namespace es\ucm\fdi\aw;

  $conn = App::conexionBd();
  $sql = "SELECT c.nombre AS c_nombre, p.id AS p_id, p.nombre AS p_nombre, p.nombreFoto, p.sinopsis, f.fecha
          FROM cine c, sala s, funcion f, pelicula p
          WHERE c.id = s.idCine AND s.id = f.id_sala AND f.id_pelicula = p.id
          GROUP BY c.id, p.id
          ORDER BY c.id, p.id
          ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $nombre_cine_anterior = "";
    $boolCineAbierto = false;
    while($row = $result->fetch_assoc()) {

      $nombre_cine_ahora = $row['c_nombre'];

      if ($nombre_cine_ahora != $nombre_cine_anterior) {
        if ($boolCineAbierto) {
          echo "</div></div>";
        }
        $nombre_cine_anterior = $nombre_cine_ahora;
        $boolCineAbierto = true;
        echo "<div class='cine-contenedor'>";
        echo "<div class='cine-contenedor-header'><h1>" . $nombre_cine_ahora . "</h1></div>";
        echo "<div class='cine-contenedor-peliculas'>";
      }
      echo "<div class='pelicula-contenedor'><h2>" . $row['p_nombre'] . "</h2>";
      echo "<div class='pelicula-img'><a href='pelicula-detalle.php?id=" . $row['p_id'] . "'><img src='IMG/" . $row['nombreFoto'] . "'/></a></div>";
      echo "<div class='pelicula-detalles'><p>";
      echo $row['sinopsis'];
      //echo "</p><br><h4>Horarios:</h4><br><p class='horarios'>";
      //TODO ESTO HAY CAMBIAR LA TABLA DE FUNCION PARA OBTENER LOS HORARIOS.
      //echo "13:30<br>";
      echo "</p></div></div>";
    }
    echo "</div></div>";
  } else {
    echo "ERROR: 0 results";
  }
  $result->free();
?>
