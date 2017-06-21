<?php

  namespace es\ucm\fdi\aw;

  $app = App::getSingleton();
  $conn = $app->conexionBd();
  $sql2 = "
    SELECT *
    FROM	(SELECT c.nombre
          FROM pelicula p, funcion f, sala s, cine c
          WHERE p.id = f.id_pelicula AND f.id_sala = s.id AND s.idCine = c.id AND p.id = ".htmlspecialchars($_GET['id']).") as temp
    GROUP BY nombre;
    ";

  $result = $conn->query($sql2);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
    }
  }

  $result->free();
?>
