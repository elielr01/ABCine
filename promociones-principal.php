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

          <div class="promos-destacadas">

          	<h1 class="promotitulo"> Promociones destacadas </h1>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle1.php"><img src="IMG/promo1.jpg"></a>
               <p class ="descripdes">Jueves mas barato</p>
            </div>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle2.php"><img src="IMG/promo2.jpg"></a>
              <p class ="descripdes">Cambia tus puntos</p>
            </div>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle3.php"><img src="IMG/promo3.jpg"></a>
              <p class ="descripdes">Euro 6000 menú</p>
            </div>

            <marquee class="tit1">ABCINE se reserva el derecho a modificar o cancelar el descuento durante el
			desarrollo de la misma si concurriesen circunstancias de fuerza mayor o caso fortuito
			que así lo impusiesen. Para cualquier consulta o problema en el uso de los cupones, puede ponerse en contacto con el Servicio de Atención al Cliente en el 902 453 453</marquee>

       </div>


       <div class="todas-promociones">

          	<h1 class="promotitulo"> Todas nuestras promociones </h1>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle1.php"><img src="IMG/promo1.jpg"></a>
               <p class ="descripdes">Jueves mas barato</p>

            </div>


            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle2.php"><img src="IMG/promo2.jpg"></a>
              <p class ="descripdes">Cambia tus puntos</p>
            </div>

            <div class="promos-img">
              <a href="http://localhost/miweb/promociones-detalle3.php"><img src="IMG/promo3.jpg"></a>
              <p class ="descripdes">Euro 6000 menú</p>
            </div>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle4.php"><img src="IMG/promo4.jpg"></a>
               <p class ="descripdes">La gran quedada</p>

            </div>

            <div class="promos-img">
               <a href="http://localhost/miweb/promociones-detalle5.php"><img src="IMG/promo5.jpg"></a>
              <p class ="descripdes">Miércoles al cine</p>
            </div>


            <marquee class="tit1">ABCINE se reserva el derecho a modificar o cancelar el descuento durante el
			desarrollo de la misma si concurriesen circunstancias de fuerza mayor o caso fortuito
			que así lo impusiesen. Para cualquier consulta o problema en el uso de los cupones, puede ponerse en contacto con el Servicio de Atención al Cliente en el 902 453 453</marquee>

       </div>






      </div>

		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
