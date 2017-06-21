<?php
require_once __DIR__.'/includes/config.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE </title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
  <link rel="stylesheet" href="css/footerHeader/estilo.css">
  </head>


	<body>
		<?php
		$app->doInclude('comun/header.php');
		?>

		<article>

			<div class="slide">
				<ul>
					<li><a href="#"><img class="slideImg" src="IMG/slide1.jpg" style="width:100%"></a></li>
					<li><a href="#"><img class="slideImg" src="IMG/slide2.jpg" style="width:100%"></a></li>
					<li><a href="#"><img class="SlideImg" src="IMG/slide3.jpg" style="width:100%"></a></li>
				</ul>
			</div>


			<div class="cabece"><h2>Peliculas en cartelera</h></div>

      <?php
        $app->doInclude('queryViewCommonFilms.php');
      ?>

			<div class="cabece"><h2>Proximos Estrenos</h></div>

      <?php
        $app->doInclude('queryPremierFilm.php')

      ?>

			<div class="cabece"><h2>Nuestras Promociones</h></div>
			<div class="promo">
				<a href="promociones-detalle1.php"><img src="IMG/promo1.jpg"/></a>
			</div>
			<div class="promo">
				<a href="promociones-detalle2.php"><img src="IMG/promo2.jpg"/></a>
			</div>
			<div class="promo">
				<a href="promociones-detalle3.php"><img src="IMG/promo3.jpg"/></a>
			</div>
			<div class="promo">
				<a href="promociones-detalle4.php"><img src="IMG/promo4.jpg"/></a>
			</div>
			<div class="promo">
				<a href="promociones-detalle5.php"><img src="IMG/promo5.jpg"/></a>

			</div>

		</article>
		<?php
		$app->doInclude('comun/footer.html');
		?>
	</body>
</html>
