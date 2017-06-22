<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCine - Cine 1</title>
	   <link id="estilo" rel="stylesheet" type="text/css" href="css/cines/cines-detalle.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta charset="utf-8" />
     <script src="js/getParemeters.js" charset="utf-8"></script>
     <link rel="stylesheet" href="css/footerHeader/estilo.css">

  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>

    <?php
    $app->doInclude('queryViewCine.php');
    ?>

		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
