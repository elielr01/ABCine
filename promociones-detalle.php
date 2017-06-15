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
        <h1>Nombre de la promocion</h1>
        <div class="promo-img">
          <img src="IMG/promo-detalle.png">
        </div>
        <div class="promo-descripcion">
          <p>
            Promocion: Por motivo de nuestro aniversario, te invitamos al cine gratis.<br>
            3(s): 2 19 de Abril del 2017<br>
            Cine(s): Todos<br>
            Detalles:<br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae neque vulputate, faucibus lectus sed,
            rhoncus nibh. Vestibulum erat ligula, dictum in leo et, pharetra blandit leo. In mattis mauris ut erat
            elementum cursus. Vestibulum id dui dolor. Proin ac lectus eu eros commodo mattis et sed lacus. Praesent
            vestibulum consequat ipsum sed dictum. Cras euismod eu massa ut lobortis. Nulla eros tortor, vulputate in
            elit nec, feugiat convallis dolor. Integer consectetur rutrum eros, eget commodo justo ultricies ac.
          </p>
        </div>
      </div>
		</article>

    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
