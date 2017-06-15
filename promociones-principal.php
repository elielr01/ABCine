<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Footer and header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/footerHeader/estilo.css">
    <link rel="stylesheet" href="css/promos/promos-principal.css">
  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>
          <!--
      Este bloque es para 1 cine
      ==================================================================================================================
      -->
      <div class="cine-contenedor">

        <div class="cine-contenedor-header">
        </div>

        <div class="cine-contenedor-promos">
          <div class="promos-destacadas">
            <h1>Promociones destacadas</h1>
            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle.php"><img src="IMG/promo1.jpg"></a>
            </div>
            <div class="promos-img">
              <img src="IMG/promo2.jpg">
            </div>
            <div class="promos-img">
              <img src="IMG/promo3.jpg">
            </div>

          </div>

          <div class="promos">
            <h1>Todas nuestras las promociones</h1>
            <div class="promos-img">
              <img src="IMG/promo1.jpg">
            </div>
            <div class="promos-img">
              <img src="IMG/promo2.jpg">
            </div>
            <div class="promos-img">
              <img src="IMG/promo3.jpg">
            </div>

            <div class="promos-img">
              <img src="IMG/promo4.jpg">
            </div>
            <div class="promos-img">
              <img src="IMG/promo5.jpg">
            </div>
          </div>

        </div>
      </div>

		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
