<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';

  $app = App::getSingleton();
  $conn = $app->conexionBd();
  //TODO: por hacer
  //FIXME: no funciona esto tete


  $sql2 = "
    SELECT *
    FROM	(SELECT f.fecha
          FROM pelicula p, funcion f, sala s, cine c
          WHERE p.id = f.id_pelicula AND f.id_sala =".htmlspecialchars($_GET['sala'])."  AND s.idCine = c.id AND p.id = ".htmlspecialchars($_GET['id']).") as temp
    GROUP BY fecha;
    ";

  $result = $conn->query($sql2);

  $send = array();

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $dat = date('D / F / G  ',strtotime($row['fecha']));
        array_push($send, $dat);
      }
    }

  echo implode(";", $send);

 ?>
