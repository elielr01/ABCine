<?php
namespace es\ucm\fdi\aw;

$app = App::getSingleton();
$conn = $app->conexionBd();
$sql = "SELECT *
        FROM pelicula
        WHERE comun = 1 AND preestreno = 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "<div class='pelicula' >";
    echo "<a href='pelicula-detalle.php?id=".$row['id']."'> <img src= '". IMG_PATH. $row['nombreFoto']."'/></a>";
    echo "</div>";
  }
}
$result->free();
?>
