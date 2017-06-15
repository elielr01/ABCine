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
			<div class="enlacecab"> <a id="enlace" href="pelicula-detalle.php"><h3>Star Wars VIII</h3></a></div>
			<div class="titulocab"><h3>WONDER WOMAN</h3></div>
			<div class="enlacecab"> <a id="enlace" href="pelicula-detalle.php"><h3>Guard.Gal.Vol2</h3></a></div>
			<div class="media">
				<div class="cartel" >
					<img  src="IMG/ww.jpg"/>
				</div>
				<div class="trailer">
					<iframe width="420" height="320" src="https://www.youtube.com/embed/WXMwfxYAmiA?ecver=2"></iframe>
				</div>
			</div>

			<div class="resumen">
				<p>País: Estados Unidos</p>
				<p>Género: Acción - Aventura - Fantasía</p>
				<p>Estreno: 23/06/2017</p>
				<p>Directores: Patty Jenkins</p>
				<p>Actores: Chris Pine, Connie Nielsen, David Thewlis, Gal Gadot, Lucy Davis, Robin Wright</p>
				<p>Guionistas: Allan Heinberg, Geoff Johns, Jay Oliva</p>
				<p>Productores: WBros</p>
			</div>

			<div class="sinopsis">
				<p>Sinopsis: Antes de ser Wonder Woman, era Diana, princesa de las amazonas, entrenada para ser una guerrera imparable.
				Criada en una isla paraíso escondida del resto del mundo, cuando un piloto americano se estrella en sus costas y le explica
				el gran conflicto que está desatándose en el exterior, Diana decidirá abandonar su hogar convencida de que puede detener la
				amenaza. Luchando junto al hombre en una guerra para detener todas las guerras, Diana descubrirá todos sus poderes… y su
				verdadero destino.</p>

			</div>

			<div class="containercompra">
				<div class="containerslector">
					<select>
						<option value="cine1">Cine1</option>
						<option value="cine2">Cine2</option>
						<option value="cine3">Cine3</option>
						<option value="cine4">Cine4</option>
						<option value="cine5">Cine5</option>
					</select>
				</div>
				<div class="containerslector">
					<select>
						<option value="cine1">Sala1</option>
						<option value="cine2">Sala2</option>
						<option value="cine3">Sala3</option>
						<option value="cine4">Sala4</option>
						<option value="cine5">Sala5</option>
					</select>
				</div>
				<div class="containerslector">
					<select>
						<option value="cine1">Hora1</option>
						<option value="cine2">Hora2</option>
						<option value="cine3">Hora3</option>
						<option value="cine4">Hora4</option>
						<option value="cine5">Hora5</option>
					</select>
				</div>

				<div class="containerboton">
					<a href="checkout.php">COMPRAR</a>
				</div>
			</div>

		</article>
    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>
</html>
