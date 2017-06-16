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
        <h1>Euro 6000 menú</h1>
        <div class="promo-img">
          <img src="IMG/promo3.jpg">
        </div>
        <div class="promo-descripcion">
          <p>
           DÍAS: Todos los días<br><br>


          CINES: Todos los cines<br><br>


          DÓNDE COMPRAR:Descargar cupón en la web y entregarlo en taquilla acreditándote como titular de Euro 6000<br><br>

          RECARGOS: Las butacas VIP, proyecciones 3D y las salas IMAX e iSens tienen un recargo extra.<br><br>

           OTROS: Disfruta con EURO 6000 de 50% de descuento en Bucket de palomitas + 75cl de refresco (todos los días) acreditándote como titular de una tarjeta Euro 6000. Máximo cuatro menús por tarjeta. En caso de que el cine no disponga de este menú, se ofrecerá uno equivalente. Oferta no válida para compras por Internet. En caso de no estar disponible se entregará el menú equivalente. 
           Es necesario descargar y presentar un cupón por cada menú al que se quiera aplicar la promoción.

          </p>
        </div>
      </div>
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
