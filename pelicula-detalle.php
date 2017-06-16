<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE-Nuestras peliculas</title>
	<link id="estilo" rel="stylesheet" type="text/css" href="css/peliculas/estilofilm.css">
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
					echo "<img src= 'IMG/". $row['nombrefoto'] . "'/>";
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
					echo "<select>";
					
					//muestra Cines
					
					$sql2 = "
						SELECT *
						FROM	(SELECT c.nombre
									FROM pelicula p, funcion f, sala s, cine c
									WHERE p.id = f.id_pelicula AND f.id_sala = s.id AND s.idCine = c.id AND p.id = ".htmlspecialchars($_GET['id']).") as temp
						GROUP BY nombre;		
						";

					$result = $conn->query($sql2);
	
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
						}
					}
					
			
					echo "</select>";
				echo "</div>";
				echo "<div class='containerslector'>";
					echo "<select>";
					
					echo "</select>";
				echo "</div>";
				echo "<div class='containerslector'>";
					echo "<select>";
			
			
					echo "</select>";
				echo "</div>";
					
					
					echo "<div class='containerboton'>";
					echo "<a href='checkout.php'>COMPRAR</a>";
				echo "</div>";
			echo "</div>";

		echo"</article>";			
				
		?>
		
		  <?php
		$app->doInclude('comun/footer.html');
		?>

		
	</body>
</html>
