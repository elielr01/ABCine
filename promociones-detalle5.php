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
	<link rel="stylesheet" href="css/promos/promos-detalle.css">

  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article id=main>

        <div class="promo-contenedor">
        <h1>Miércoles al cine</h1>
        <div class="promo-img">
          <img src="IMG/promo5.jpg">
        </div>
        <div class="promo-descripcion">
        
          <p>


          PRECIO: Los precios especiales Miércoles sólo se aplican en taquilla.<br><br>

          DÍAS: Miércoles <br><br>
          DÓNDE COMPRAR: El precio miércoles es aplicable en taquilla, web y canjeros. Los precios especiales Miércoles Cinesacard sólo se aplican en taquilla.<br><br>

          RECARGOS: Las butacas VIP, las proyecciones 3D y las salas iSens, IMAX® y Dolby tienen un recargo extra.<br><br>

          OTROS: Precio por entrada. No acumulable a otras ofertas. No válido para eventos especiales.<br><br>

          VÁLIDO HASTA:Oferta válida hasta el 19/06/2017<br><br>



          </p>
        </div>
      </div>
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
