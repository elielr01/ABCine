<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';


  $app = App::getSingleton();
  $conn = $app->conexionBd();
  $cine = $_POST['cine'];
  $id = $_POST['id'];
  $sala = $_POST['sala'];
  $sql2 = "
  SELECT f.fecha ,f.id
FROM funcion f , sala s , cine c
WHERE id_pelicula='$id' AND s.numSala='$sala' and c.nombre='$cine' and f.id_sala=s.id and s.idCine=c.id
    ";

  $result = $conn->query($sql2);
  //echo $sql2;
  $send = array();

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $dat = date('j / F / G : i  A',strtotime($row['fecha']));
        $send[]=array('id'=>$row['id'],'fecha'=>$dat);
      }
    }
  
  
  $result->free();
  header('Content-Type: application/json');
  echo json_encode($send, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);


 ?>
