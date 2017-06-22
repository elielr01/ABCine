<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';



  $conn = App::conexionBd();
  $sql = "SELECT nombre, descripcion, nombreFoto, activo
          FROM promocion
          WHERE id = ". htmlspecialchars($_GET['id']) .";";
         

     $result = $conn->query($sql);
     $row = $result->fetch_assoc();

     echo "<div class='promo-contenedor'>";
        echo "<h1>" . $row['nombre'] . "</h1>";
        echo "<div class='promo-img'>";
          echo "<img src='IMG/". $row['nombreFoto'] . "'/>";
        echo "</div>";

        echo "<div class='promo-descripcion'>";

      		  echo  $row['descripcion'];

         echo "</div>";
       echo "</div>";


 ?>