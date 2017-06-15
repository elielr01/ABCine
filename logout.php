<?php

require_once __DIR__.'/includes/config.php';

$app->logout();

?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" href="css/footerHeader/estilo.css">
  <title>Logout</title>
</head>
<body>
  <?php
  $app->doInclude('comun/header.php');
  ?>

		<article id=main>



      HASTA PRONTO

		</article>

    <?php
  		$app->doInclude('comun/footer.html');
  		?>


	</body>

</html>
