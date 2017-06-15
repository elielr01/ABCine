<?php

require_once __DIR__.'/includes/config.php';


?>
<!DOCTYPE html>
<html>
  <head>
    <title>ABCINE</title>
      <link rel="stylesheet" href="css/user/user.css">
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
        if ($app->tieneRol('user', 'Acceso Denegado', 'Necesitas estar logueado.')) {



      ?>
      <div class="profilePicture">
        <div class="pic">
          <img src="IMG/pic.jpg" alt="img" id="picture">
        </div>
      </div>

        <div class="user">
      <ul>
        <li> Nombre</li>
        <li> Apellidos</li>
        <li>  Fecha de Nacimiento </li>
        <li> Puntos </li>
        <li><a  href="uploadPhoto.php"></i> Cambiar foto de perfil</a></li>
        <li><a  href="#"></i>Cambiar contraseña </a></li>
      </ul>
        </div>

      <div class="info">
        <li> Paquito </li>
        <li> Perez</li>
        <li>  27/7/1993 </li>
        <li> 15000 </li>
		<?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == true && $app->tieneRol('admin', '', '')){
            echo <<<END
			<li><a  href="administrador.php"></i>Administración </a></li>
END;
        }
          ?>
      </div>

		</article>

    <?php
    }
    ?>
    <?php
    $app->doInclude('comun/footer.html');
    ?>


	</body>

</html>
