<?php
require_once __DIR__.'/includes/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE</title>
	<link rel="stylesheet" href="css/admin/estilo-admin.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/footerHeader/estilo.css">

  </head>


	<body>
		<?php
			$app->doInclude('comun/header.php');
		?>

		<article id=main>
		<?php
			if ($app->tieneRol('admin', 'Acceso Denegado', 'No tienes permisos suficientes para administrar la web.')) {
		?>
  		<h1 class ="titulo">Pantalla administrador </h1>




      <?php $formBaneo = new \es\ucm\fdi\aw\FormularioBaneo();
        $formBaneo->gestiona();
      ?>




      <textarea name="name" rows="8" cols="80">
        <?php $app->doInclude('querySearchForBan.php') ?>
        </textarea>







		<form class = "quitar"  action="index.html"  onsubmit="mgsa()" >

  			<ul>

  				<li class ="cont">Quitar peliculas</li>

  					<select name="peliculas"  required>
  					<option value="pelicula1" >Kong</option>
  					<option value="pelicula2" >Multiple</option>
  					<option value="pelicula3" >Vida</option>
  					<option value="pelicula4">Logan</option>
  					<option value="pelicula5">Zona Hostil</option>
					<option value="pelicula6" >Bella y Bestia</option>
  					<option value="pelicula7" >Fast and furious 8</option>
  					<option value="pelicula8" >Es por tu bien</option>
  					<option value="pelicula9">La cura del bienestar</option>
  					<option value="pelicula10">El guardian invisible</option>
					<option value="pelicula11" >La gran muralla</option>
  					<option value="pelicula12" >Cantabrico</option>
  					<option value="pelicula13" >Lego Batman</option>
  					<option value="pelicula14">Power Rangers</option>
  					<option value="pelicula15">Bebe jefazo</option>
  					</select>

					<select name="cine"  required>
  					<option value="cine1" >Cine 1</option>
  					<option value="cine2" >Cine 2</option>
  					<option value="cine3" >Cine 3</option>
  					<option value="cine4" >Cine 4</option>
  					<option value="cine5" >Cine 5</option>
  					</select>

					<select name="sala"  required>
  					<option value="sala1" >Sala 1</option>
  					<option value="sala2" >Sala 2</option>
  					<option value="sala3" >Sala 3</option>

  					</select>


					<input type="submit" value="Quitar"/>

			</ul>

		</form>

		<input id="botona" type="submit" value="Añadir pelicula" onclick="location.href='add-pelicula.php'"/>

		</article>
		<?php
		}
		?>

		<?php
  		$app->doInclude('comun/footer.html');
  		?>

	</body>
</html>
