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
        <h1>Cambia tus puntos</h1>
        <div class="promo-img">
          <img src="IMG/promo2.jpg">
        </div>
        <div class="promo-descripcion">
          <p>

            OTROS:

            Los máximos puntos diarios por cliente serán 140 según el sistema de puntos por euros de consumo. Los puntos recibidos por acciones especiales serán acumulados adicionalmente, pudiendo en este caso sobrepasar el límite de 140 puntos (hasta un máximo de 1.000 puntos diarios).
            ABCINE se reserva el derecho de bloqueo de otorgación de puntos y/o de la tarjeta Cinesacard en caso de detectar un posible fraude por parte del cliente. Cada cliente podrá disponer de solo una cuenta asociada a una Cinesacard en la que acumule puntos y redima sus beneficios. ABCINE no se hace responsable del uso fraudulento por parte de terceros a causa de pérdida, cesión o mal uso de la tarjeta por parte del titular de la misma. Recuerda que para el canjeo de puntos la Cinesacard debe estar activada.

          </p>
        </div>
      </div>
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
