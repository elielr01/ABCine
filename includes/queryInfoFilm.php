<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';

  $app = App::getSingleton();
  $conn = $app->conexionBd();
  $sql = "
     SELECT id,nombre, urlyoutube, nombrefoto, descripcion, sinopsis
     FROM pelicula
     WHERE id = ". htmlspecialchars($_GET['id']) .";";

     $result = $conn->query($sql);
     $row = $result->fetch_assoc();


     echo "<div class='enlacecab'><p> AB</p></div>";
     echo "<div class='titulocab'><h3>" . $row['nombre'] . "</h3></div>";
     echo "<div class='enlacecab'><p> CINES</p></div>";

     echo "<div class='media'>";
       echo "<div class='cartel'>";
       $var= $row['nombrefoto'];
         echo "<img src=" , '"' , IMG_PATH ,  $var , '"/>';
         
       echo "</div>";

       echo "<div class='trailer'>";
         echo "<iframe width='420' height='320' src = '". $row['urlyoutube']."' > </iframe>";
       echo "</div>";
     echo "</div>";


     echo "<div class='resumen'>";
       echo  $row['descripcion'];
     echo "</div>";


     echo "<div class='sinopsis'>";
       echo"<p>Sinopsis: " .  $row['sinopsis'] . " </p>";
     echo "</div>";

     echo "<div class='containercompra'>";
       echo "<div class='containerslector'>";

      
     // $result->close();

?>
