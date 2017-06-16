<?php

require_once __DIR__.'/includes/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE</title>
	<link rel="stylesheet" href="css/formularios/estilo-registro.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/footerHeader/estilo.css">
     <script language ="javascript">

    	function mgs(){

    		alert("Cuenta registrada correctamente.")

    	}

    </script>
  </head>
	<body>
    <?php
		$app->doInclude('comun/header.php');
		?>
		<article id=main>


		<?php $formRegistro = new \es\ucm\fdi\aw\FormularioRegistro();
		$formRegistro->gestiona();
		?>

			
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/checkuser.js"></script>



    <?php
		$app->doInclude('comun/footer.html');
		?>

	</body>

</html>
