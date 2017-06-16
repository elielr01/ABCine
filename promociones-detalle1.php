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
        <h1>Jueves más barato</h1>
        <div class="promo-img">
          <img src="IMG/promo1.jpg">
        </div>
        <div class="promo-descripcion">
          <p>

            DÍAS: Los jueves excepto festivos y vísperas de festivos.<br><br>
            DÓNDE COMPRAR:Taquilla<br><br>
            RECARGOS: Las butacas VIP, las proyecciones 3D y las salas iSens, IMAX® y Dolby tienen un recargo extra.<br><br>
            OTROS: Esta promoción no es aplicable a aquellas películas en cuya ficha online se especifica ‘No todas las promociones son válidas para esta película’. Promoción válida presentando tu Cinesacard activada en taquilla. Cinesa se reserva el derecho a dejar algunas películas fuera de esta promoción. Consulta en la cartelera de cinesa.es las películas en las que no se aplican promociones. Máximo cuatro entradas por tarjeta. Esta promoción no acumula puntos en los planes de fidelización ajenos a Cinesa. Las entradas compradas con Cinesacard recibirán los puntos establecidos según las condiciones legales vigentes del programa de puntos en el día y el cine de compra. Consulta las condiciones en www.cinesa.com/cinesacard. No acumula puntos en los planes de fidelización ajenos a Cinesa. No acumulable a otras ofertas. Cinesa se reserva el derecho a limitar temporalmente el uso de las entradas por causas imputables a las distribuidoras y de aplicar suplementos para ciertas películas o en fechas determinadas. No aplicable a preestrenos ni a jueves que sean festivos o vísperas de festivo. <br><br>
            VÁLIDO HASTA: Oferta válida hasta el 19/06/2017

      

          </p>
        </div>
      </div>
    </article>

    <?php
    $app->doInclude('comun/footer.html');
    ?>

  </body>

</html>
