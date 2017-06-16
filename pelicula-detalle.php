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
			  $sql = "SELECT id,nombre, urlyoutube, nombrefoto, descripcion, sinopsis
					  FROM pelicula
					  WHERE id = ". htmlspecialchars($_GET['id']) ."";
		 
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
						echo "<option value='cine1'>Cine1</option>";
						echo "<option value='cine2'>Cine2</option>";
						echo "<option value='cine3'>Cine3</option>";
						echo "<option value='cine4'>Cine4</option>";
						echo "<option value='cine5'>Cine5</option>";
					echo "</select>";
				echo "</div>";
				echo "<div class='containerslector'>";
					echo "<select>";
						echo "<option value='cine1'>Sala1</option>";
						echo "<option value='cine2'>Sala2</option>";
						echo "<option value='cine3'>Sala3</option>";
						echo "<option value='cine4'>Sala4</option>";
						echo "<option value='cine5'>Sala5</option>";
					echo "</select>";
				echo "</div>";
				echo "<div class='containerslector'>";
					echo "<select>";
						echo "<option value='cine1'>Hora1</option>";
						echo "<option value='cine2'>Hora2</option>";
						echo "<option value='cine3'>Hora3</option>";
						echo "<option value='cine4'>Hora4</option>";
						echo "<option value='cine5'>Hora5</option>";
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
