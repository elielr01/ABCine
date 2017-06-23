<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';

  $app = App::getSingleton();
  $conn = $app->conexionBd();


  $sql2 = "SELECT u.username FROM usuarios u,rolesusuario r
          WHERE r.usuario=u.id and r.rol='1'";


  $result = $conn->query($sql2);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $var = $row['username'] . " \n";
      echo $var;
      $var="";

    }
  }
  $result->close();
  ?>
