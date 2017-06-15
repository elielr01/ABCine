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

      <!--
      TODO aquí debería de haber un script que, de acuerdo al parámetro del nombre del cine, muestre la cartelera
      correspondiente
      -->

      <!--
      Este bloque es para 1 cine
      ==================================================================================================================
      -->
      <div class="cine-contenedor">

        <div class="cine-contenedor-header">
          <h1>Cine 1</h1>
        </div>

        <div class="cine-contenedor-peliculas">

          <div class="info-contenedor">

            <div id="map">


             <script src="js/map/map.js"></script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdGQVp0iusUDU4LVpNde-wo6lrYzRhXhg&callback=initMap">
			</script>
            </div>

            <div class="info-descripcion">
              <h3>Información general:</h3>
              <p>
                Direccion: Calle Atocha 13, 28012. Madrid, España.<br>
                Teléfono: 665-050-054<br>
                <a href="mailto:cine1@abcine.com?subject=feedback">cine1@abcine.com</a>
              </p>

            </div>

          </div>


          <!-- TODO Hay que hacer que esto sea dinámico, con algún script -->

          <!--
          Este bloque es para 1 película
          ==============================================================================================================
          -->
          <div class="pelicula-contenedor">
            <h2>Kong: La isla calavera</h2>

            <div class="pelicula-img">
              <a href="#"> <img  src="IMG/kkong.jpg"/></a>
            </div>

            <div class="pelicula-detalles">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
              rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
              elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
              vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
              elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
              </p>
              <br>
              <h4>Horarios:</h4>
              <br>
              <p class="horarios">
                15:30<br>
                16:15<br>
                18:30<br>
                20:00<br>
                22:15<br>
              </p>
            </div>

          </div>
          <!--
          Termina 1 pelicula
          ==============================================================================================================
          -->

          <!--
          Este bloque es para 1 película
          ==============================================================================================================
          -->
          <div class="pelicula-contenedor">
            <h2>Múltiple</h2>

            <div class="pelicula-img">
              <a href="#"> <img  src="IMG/mult.jpg"/></a>
            </div>

            <div class="pelicula-detalles">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
              rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
              elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
              vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
              elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
              </p>
              <br>
              <h4>Horarios:</h4>
              <br>
              <p class="horarios">
                15:30<br>
                16:15<br>
                18:30<br>
                20:00<br>
                22:15<br>
              </p>
            </div>

          </div>
          <!--
          Termina 1 pelicula
          ==============================================================================================================
          -->

          <!--
          Este bloque es para 1 película
          ==============================================================================================================
          -->
          <div class="pelicula-contenedor">
            <h2>Life - Vida</h2>

            <div class="pelicula-img">
              <a href="#"> <img  src="IMG/life.jpg"/></a>
            </div>

            <div class="pelicula-detalles">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
              rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
              elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
              vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
              elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
              </p>
              <br>
              <h4>Horarios:</h4>
              <br>
              <p class="horarios">
                15:30<br>
                16:15<br>
                18:30<br>
                20:00<br>
                22:15<br>
              </p>
            </div>

          </div>
          <!--
          Termina 1 pelicula
          ==============================================================================================================
          -->

          <!--
          Este bloque es para 1 película
          ==============================================================================================================
          -->
          <div class="pelicula-contenedor">
            <h2>Logan</h2>

            <div class="pelicula-img">
              <a href="#"> <img  src="IMG/logan.jpg"/></a>
            </div>

            <div class="pelicula-detalles">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
              rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
              elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
              vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
              elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
              </p>
              <br>
              <h4>Horarios:</h4>
              <br>
              <p class="horarios">
                15:30<br>
                16:15<br>
                18:30<br>
                20:00<br>
                22:15<br>
              </p>
            </div>

          </div>
          <!--
          Termina 1 pelicula
          ==============================================================================================================
          -->

          <!--
          Este bloque es para 1 película
          ==============================================================================================================
          -->
          <div class="pelicula-contenedor">
            <h2>Zona hostil</h2>

            <div class="pelicula-img">
              <a href="#"> <img  src="IMG/zonahostil.jpg"/></a>
            </div>

            <div class="pelicula-detalles">
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
              rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
              elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
              vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
              elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
              </p>
              <br>
              <h4>Horarios:</h4>
              <br>
              <p class="horarios">
                15:30<br>
                16:15<br>
                18:30<br>
                20:00<br>
                22:15<br>
              </p>
            </div>

          </div>
          <!--
          Termina 1 pelicula
          ==============================================================================================================
          -->
        </div>
      </div>
      <!--
      Termina 1 cine
      ==================================================================================================================
      -->


		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
