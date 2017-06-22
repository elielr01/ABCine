<?php
  namespace es\ucm\fdi\aw;
  require_once __DIR__.'/config.php';



  $conn = App::conexionBd();

  $sql = "SELECT c.info as c_info, c.nombre as c_nombre, c.email as c_email
          FROM cine c
          WHERE c.id = ". htmlspecialchars($_GET['id']) .";";


     $result = $conn->query($sql);
     $row = $result->fetch_assoc();


      echo "<div class='cine-contenedor'>";

         echo "<div class='cine-contenedor-header'>";
          echo " <h1>". $row['c_nombre'] ."</h1>";
        echo "</div>";

        echo "<div class='cine-contenedor-peliculas'>";

          echo"<div class='info-contenedor'>";

            echo "<div id='map'>";


             echo "<script src='js/map/map.js'></script>";
		        	 echo "<script async defer
			         src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAdGQVp0iusUDU4LVpNde-wo6lrYzRhXhg&callback=initMap'>";
			      echo "</script>";

            echo "</div>";

            echo "<div class='info-descripcion'>";
              echo"<h3>Información general:</h3>";
              
              echo  $row['c_info']; 
              echo "<br>";
              echo "<a href='mailto:". $row['c_email'] ."?subject=feedback'>". $row['c_email'] ."</a>";
              

            echo"</div>";

          echo"</div>";



  $sql = "SELECT distinct p.id AS p_id, p.nombre AS p_nombre, p.nombreFoto, p.sinopsis, f.fecha
          FROM cine c, sala s, funcion f, pelicula p
          WHERE c.id = s.idCine AND s.id = f.id_sala AND f.id_pelicula = p.id AND c.id = '". htmlspecialchars($_GET['id']) ."';";
        
            
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          $nombre_pelicula_anterior = "";

        while($row = $result->fetch_assoc()) {
       
              $nombre_pelicula_ahora = $row['p_nombre'];

             if ($nombre_pelicula_ahora != $nombre_pelicula_anterior) {
                
                  $nombre_pelicula_anterior = $nombre_pelicula_ahora;

                  echo "<div class='pelicula-contenedor'>";
                  echo "<h2>". $row['p_nombre'] ."</h2>";

    
                  echo "<div class='pelicula-img'><a href='pelicula-detalle.php?id=" . $row['p_id'] . "'><img src='IMG/" . $row['nombreFoto'] . "'/></a></div>";
                
               echo "</div>";

                echo "<div class='pelicula-detalles'>";
                echo $row['sinopsis'];
                echo "<p class=horarios>";
                echo"<br>";
             }
             
              echo $row['fecha'];
              echo"<br>";
             
        }

         echo"</p>";
          echo"</div>";

          echo"</div>";

      }

?>