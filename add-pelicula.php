<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE</title>


	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>/admin/estilo-añadir.css">
    <meta charset="utf-8" />

     <script language ="javascript">

    	function mgs(){

    		alert("Pelicula registrada.")

    	}

    </script>


    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/footerHeader/estilo.css">
  </head>



	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>

			<form class="form-registro"  action="index.html" onsubmit="mgs()">

				<h2 class ="form-titulo">Añadir Pelicula</h2>

					<input type="text" id="titulo" name="titulo" placeholder="Titulo" class="in100" required>

					<p class = "desc" >  Descripción: </p>

					<textarea class = "desc" name="texto" rows="4" cols="80" required > </textarea>

					<select class = "sel"name="cine"  required>
  					<option value="cine1" >Cine 1</option>
  					<option value="cine2" >Cine 2</option>
  					<option value="cine3" >Cine 3</option>
  					<option value="cine4" >Cine 4</option>
  					<option value="cine5" >Cine 5</option>
  					</select>

					<select class = "sel" name="sala"  required>
  					<option value="sala1" >Sala 1</option>
  					<option value="sala2" >Sala 2</option>
  					<option value="sala3" >Sala 3</option>
					</select>

					<select class = "sel" name="hora"  required>
  					<option value="sala1" >9:00</option>
  					<option value="sala2" >12:00</option>
  					<option value="sala3" >14:00</option>
					<option value="sala4" >16:00</option>
  					<option value="sala5" >18:00</option>
  					<option value="sala6" >20:00</option>
					<option value="sala7" >22:00</option>
  					<option value="sala8" >00:00</option>

					</select>

					<input type="submit" value="Añadir">



			</form>


		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>
	</body>

</html>
