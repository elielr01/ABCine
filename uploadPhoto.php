<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/footerHeader/estilo.css">
    <link rel="stylesheet" href="css/formularios/estilo-foto.css">

  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article >
      <?php
        if ($app->tieneRol('user', 'Acceso Denegado', 'Necesitas estar logueado.')) {
      ?>


      <?php $formFoto = new \es\ucm\fdi\aw\FormularioFoto();
  		$formFoto->gestiona();
  		?>


    <?php print_r($_SESSION) ?>



  </article>

  <?php
  }
  ?>



    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
