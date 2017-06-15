<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Footer and header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/checkout/checkout.css">
  <link rel="stylesheet" href="css/checkout/seats.css">
  <link rel="stylesheet" href="css/footerHeader/estilo.css">
    <meta charset="utf-8" />
  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>

		<article>

      </div>
      <div class="cover">
        <img src="IMG/ghost.jpg" alt="movieCover" width="320" height="320" >
      </div>

      <div class="seats" >
          <script src="js/checkout/seats.js" ></script>
      </div>
      <div class="shopMenu">
        <ul>
          <li><a  href="#"></i>Comprar</a> </li>
        </ul>
      </div>


		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
