<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
	<header>
		<div class="logo">			
				 <img src="IMG/Logo.png"  />				 
			</div>
				
				<input type="checkbox" id="btnm">
				<label for="btnm"><i class="fa fa-align-justify"></i></label>	
				
			<nav>
				<ul>
					<li> <a id ="botton2" href="index.php"><i class="fa fa-home"></i>Inicio</a></li>
					<li> <a href="films.php"><i class="fa fa-film"></i>Peliculas</a></li>
					<li> <a href="cines-principal.php"><i class="fa fa-map-o"></i>Cines</a>
						<ul>


						<?php
							 echo "<li><a href='cines-detalle.php?id=1'><i class='fa fa-map-marker'></i>Cine1</a></li>";
							 echo "<li> <a href='cines-detalle.php?id=2'><i class='fa fa-map-marker'></i>Cine2</a></li>";
							 echo "<li> <a href='cines-detalle.php?id=3'><i class='fa fa-map-marker'></i>Cine3</a></li>";
							 echo "<li> <a href='cines-detalle.php?id=4'><i class='fa fa-map-marker'></i>Cine4</a></li>";
							 echo "<li> <a href='cines-detalle.php?id=5'><i class='fa fa-map-marker'></i>Cine5</a></li>";
						?>
							
						</ul>
					</li>
					
					<li> <a href="promociones-principal.php"><i class="fa fa-users"></i>Promociones</a>
						<ul>
						
						<?php
							 echo "<li><a href='promociones-detalle.php?id=1'><i class='fa fa-map-marker'></i>Promocion1</a></li>";
							 echo "<li> <a href='promociones-detalle.php?id=2'><i class='fa fa-map-marker'></i>Promocion2</a></li>";
							 echo "<li> <a href='promociones-detalle.php?id=3'><i class='fa fa-map-marker'></i>Promocion3</a></li>";
							 echo "<li> <a href='promociones-detalle.php?id=4'><i class='fa fa-map-marker'></i>Promocion4</a></li>";
							 echo "<li> <a href='promociones-detalle.php?id=5'><i class='fa fa-map-marker'></i>Promocion5</a></li>";
						?>
							
						</ul>
					</li>
					<li> <a href="user.php"><i class="fa fa-user-o"></i>Usuario</a></li>
					<li> <a href="contacto.php"><i class="	fa fa-envelope-open-o"></i>Contacto</a></li>
					
					<li> <a href=  <?php
		 		if(isset($_SESSION['login']) && $_SESSION['login'] == true  ){
					echo "logout.php";
				}else{
					echo "Login.php";
				}
		  ?>>
		  
		  <i class="fa fa-map-marker"></i>
			<?php

		 if(isset($_SESSION['login']) && $_SESSION['login'] == true ){
			echo "log out";
		}else{
			echo "Log In";
		}
		?></a></li>
			</ul>
				
			</nav>
	
	

    </header>
	
	<body>
	
	
	</body>
</html>	