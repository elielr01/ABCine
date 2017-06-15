<?php
require_once __DIR__.'/includes/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE-Cines</title>
	<link id="estilo" rel="stylesheet" type="text/css" href="css/cines/cines-principal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/footerHeader/estilo.css">
  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>
      <?php
        $conn = $app->conexionBd();
        $sql = "SELECT c.nombre as c_nombre, p.nombreFoto, p.nombre as p_nombre, p.sinopsis
                FROM cine c, sala s, pelicula p
                WHERE c.id = s.idCine AND s.idPelicula = p.id
                ORDER BY c.id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $nombre_cine = "";
          echo "<div class='cine-contenedor'>";
          while($row = $result->fetch_assoc()) {
            if ($row['c_nombre'] != $nombre_cine) {
              $nombre_cine = $row['c_nombre'];
              echo "</div></div>";
              echo "<div class='cine-contenedor'>";
              echo "<div class='cine-contenedor-header'><h1>" . $nombre_cine . "</h1></div>";
              echo "<div class='cine-contenedor-peliculas'>";
            }
            echo "<div class='pelicula-contenedor'><h2>" . $row['p_nombre'] . "</h2>";
            echo "<div class='pelicula-img'><a href='#'><img src='IMG/" . $row['nombreFoto'] . "'/></a></div>";
            echo "<div class='pelicula-detalles'><p>";
            echo $row['sinopsis'];
            echo "</p><br><h4>Horarios:</h4><br><p class='horarios'>";
            //TODO ESTO HAY CAMBIAR LA TABLA DE FUNCION PARA OBTENER LOS HORARIOS.
            echo "13:30<br>";
            echo "</p></div></div>";
          }
          echo "</div></div>";
        } else {
          echo "ERROR: 0 results";
        }
        $conn->close();
      ?>

		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>