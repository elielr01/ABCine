<?php
require_once __DIR__.'/includes/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
  <title>ABCINE</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>/admin/estilo-añadir.css">
  <meta charset="utf-8" />
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/footerHeader/estilo.css">
  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>

      <div class="main-container">

        <h2 class ="form-titulo">Añadir Pelicula</h2>

        <div class="form-container">
          <?php
            $formAddPeli = new \es\ucm\fdi\aw\FormularioAgregarPeli();
            $formAddPeli->gestiona();
          ?>
        </div>
      </div>

		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>
	</body>

</html>
