<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE-Nuestras peliculas</title>
	<link id="estilo" rel="stylesheet" type="text/css" href="estilofilms.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
	<link rel="stylesheet" href="css/footerHeader/estilo.css">
  </head>


	<body>

    <?php
		$app->doInclude('comun/header.php');
		?>
		<article>
		
		<?php
      $conn = $app->conexionBd();
      $sql = "SELECT *
              FROM Pelicula";
             
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {

          echo "<div class='pelicula' >";
          echo "<a href='pelicula-detalle.php?id=".$row['id']."'> <img src= 'IMG/".$row['nombreFoto']."'/></a>";
          echo "</div>";
        }
      }
      ?>
		
			
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>
	</body>
</html>
