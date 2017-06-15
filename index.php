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
      <?php
       ?>
			<div class="slide">
				<ul>
					<li><a href="#"><img class="slideImg" src="IMG/slide1.jpg" style="width:100%"></a></li>
					<li><a href="#"><img class="slideImg" src="IMG/slide2.jpg" style="width:100%"></a></li>
					<li><a href="#"><img class="SlideImg" src="IMG/slide3.jpg" style="width:100%"></a></li>
				</ul>
			</div>

 
			<div class="cabece"><h2>Peliculas en cartelera</h></div>
			<div class="pelicula" >
				<a href="pelicula-detalle.php"> <img  src="IMG/kkong.jpg"/></a>
			</div>
			<div class="pelicula">
				 <a href="pelicula-detalle.php"><img src="IMG/mult.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/life.jpg"/></a>
			</div>
			<div class="pelicula">
				 <a href="#"><img src="IMG/logan.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/zonahostil.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/byb.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/ff.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/eptb.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/cb.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/gi.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/muralla.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/cantabrico.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/bat.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/power.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/babyb.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/memp.jpg"/></a>
			</div>

			<div class="cabece"><h2>Proximos Estrenos</h></div>
			<div class="pelicula">
				<a href="#"><img src="IMG/rey.jpg"/></a>
			</div>
			<div class="pelicula">
				 <a href="#"><img src="IMG/gits.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/GGvol2.jpg"/></a>
			</div>
			<div class="pelicula">
				 <a href="pelicula-detalle.php"><img src="IMG/ww.jpg"/></a>
			</div>
			<div class="pelicula">
				<a href="#"><img src="IMG/jl.jpg"/></a>
			</div>
			<div class="pelicula">
				 <a href="#"><img src="IMG/swviii.jpg"/></a>
			</div>
			<div class="cabece"><h2>Nuestras Promociones</h></div>
			<div class="promo">
				<a href="#"><img src="IMG/promo1.jpg"/></a>
			</div>
			<div class="promo">
				<a href="#"><img src="IMG/promo2.jpg"/></a>
			</div>
			<div class="promo">
				<a href="#"><img src="IMG/promo3.jpg"/></a>
			</div>
			<div class="promo">
				<a href="#"><img src="IMG/promo4.jpg"/></a>
			</div>
			<div class="promo">
				<a href="#"><img src="IMG/promo5.jpg"/></a>
			</div>
		</article>
		<?php
		$app->doInclude('comun/footer.html');
		?>
	</body>
</html>
