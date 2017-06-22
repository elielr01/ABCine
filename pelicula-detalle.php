<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE-Nuestras peliculas</title>
	<link id="estilo" rel="stylesheet" type="text/css" href="css/peliculas/estilofilm.css">
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
        $app->doInclude('queryInfoFilm.php');
			?>

     <select id='father'>

       <?php $app->doInclude('queryCines.php'); ?>


			</select>



			</div>
			 <div class='containerslector'>
				 <select id='child1'>
				 </select>


			 </div>
			 <div class='containerslector'>
				 <select id='child2'>


				 </select>

		
			 </div>

			 <div id='comprar' class='containerboton'>
    <input type="submit" 	value="comprar"  id="comprar"/>
    </div>
		</article>



		 

    

		

    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/selector.js"></script>
		<script type="text/javascript" src="js/comprar.js"></script>

	</body>
</html>
