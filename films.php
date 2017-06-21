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
      $app->doInclude('queryViewAllFilms.php');
      ?>


		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>
	</body>
</html>
