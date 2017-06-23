<?php

  namespace es\ucm\fdi\aw;
  

  $conn = $app= App::ConexionBd();
  $sql = "SELECT *
          FROM pelicula";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

      echo "<div class='pelicula' >";
      echo "<a href='pelicula-detalle.php?id=".$row['id']."'> <img src= ".IMG_PATH .$row['nombreFoto']. "></a>";
      echo "</div>";
    }
  }
  $result->free();
  ?>
