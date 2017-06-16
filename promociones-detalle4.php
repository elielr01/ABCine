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
        <h1>La gran quedada</h1>
        <div class="promo-img">
          <img src="IMG/promo4.jpg">
        </div>
        <div class="promo-descripcion">
          <p>
              PRECIO: Precio por entrada 5'70€ (precio online) y 6'50€ con cupón Facebook en taquilla<br><br>

              DÍAS: Todos los días<br><br>

              CINES: Todos los cines ABCINE<br><br>

              DÓNDE COMPRAR: Online o con cupón Facebook en taquilla<br><br>

              RECARGOS: Las butacas VIP, las proyecciones 3D y las salas iSens, IMAX® y Dolby tienen un recargo extra.<br><br>

              OTROS:

              Comprar online: Accede a la compra online desde el botón de esta página. El icono rojo de "promo" te indicará dónde es válida la promoción. Elige el precio "Gran Quedada" y añade entre 4 y 8 entradas. Compra tus entradas y enséñalas directamente en el punto de acceso a las salas.

              Comprar en taquilla: Crea tu cupón desde facebook para grupos de 4 a 8 amigos, imprime tu cupón y enséñalo en taquilla junto a tus amigos (y 6'50€ con cupón Facebook en taquilla). Válido también para venta anticipada (sólo con la presencia de todas las personas que aparezcan en el cupón). Dicha promoción sólo se aplicará a las personas que aparezcan en el cupón presentado en taquilla. 

              ABCINE se reserva el derecho a dejar algunas películas fuera de esta promoción. Consulta en la cartelera de cinesa.es las películas en las que no se aplican promociones. No se permitirán devoluciones de las entradas. ABCINE se reserva el derecho de aplicar suplementos para ciertas películas o en fechas determinadas.
              Esta promoción no es aplicable a aquellas películas en cuya ficha online se especifica ‘No todas las promociones son válidas para esta película’.<br><br>
              VÁLIDO HASTA:Válido hasta el 19/06/2017



            

          </p>
        </div>
      </div>
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
