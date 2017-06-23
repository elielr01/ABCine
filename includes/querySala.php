<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';

  $app = App::getSingleton();
  $conn = $app->conexionBd();


  $cine = htmlspecialchars($_POST['cine']);
  $sql2 = "
    SELECT *
    FROM	(SELECT s.numSala
          FROM pelicula p, funcion f, sala s, cine c
          WHERE p.id = f.id_pelicula AND f.id_sala = s.id AND c.nombre='". $cine. "' AND s.idCine = c.id AND p.id = ".htmlspecialchars($_POST['pelicula']).") as temp
    GROUP BY numSala;
    ";

  $result = $conn->query($sql2);
  $send = array();

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($send, $row['numSala']);
      }
    }

  
  echo implode(";", $send);

  $result->close();
 ?>
