<?php
namespace es\ucm\fdi\aw;



class FormularioRegistro extends Form {
	public function __construct() {
    parent::__construct('formRegistro');
  }

	protected function generaCamposFormulario ($datos) {
    $username='';
    $password='';
	$nombre='';
	$apellidos='';
	$tlf='';
	$dirAlternativa='';
	$nombreFoto='pic.jgp';
    $camposFormulario=<<<EOF
   <form class="form-registro"  action="index.php" onsubmit="mgs()">
	<h2 class ="form-titulo">Crea tu cuenta ABCine</h2>
      <div class="inputs">
					<input type="text"  	name="nombre" placeholder="Nombre" class="in100" required value=$nombre>
					<input type="text"  	name="apellidos" placeholder="Apellidos" class="in100" required value=$apellidos>
					<input type="email" 	name="email" placeholder="Correo electronico" class="in100" required value=$username>
					<input type="password"  name="pass" placeholder="Contraseña" class="in50" required value=$password>
					<input type="text" 	 	name="telefono" placeholder="Teléfono" class="in50" required value=$tlf>
  					<input type="email" 	 	name="emailAlt" placeholder="Dirección de correo alternativa" class="in100" required value=$dirAlternativa>
					<input type="submit" 	value="Registrar"  class="btn-enviar" required >

					<p class ="p-linker"> � Tienes una cuenta ? <a href="login.php"> Ingresa aqui</a></p>

				</div>

			</form>
EOF;
    return $camposFormulario;
  }



	protected function procesaFormulario($datos){

		$app = App::getSingleton();
		$conn = $app->conexionBd();
		$pw=password_hash($datos['pass'],PASSWORD_DEFAULT);
		$sql = ("INSERT INTO usuarios (username, password,nombre,apellidos,tlf,correoAlternativo)
		VALUES ('".$datos['email']."','".$pw."','".$datos['nombre']."','".$datos['apellidos']."','".$datos['telefono']."','".$datos['emailAlt']."')");


		if ($conn->query($sql) === TRUE) {
    echo "Cuenta creada correctamente";
		} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	$user = User::searchUser($datos['email']);
	$id=$user->getId();
	
	$sql = ("INSERT INTO rolesusuario (usuario,rol)
	VALUES('".$id."','1')");

	if ($conn->query($sql) === TRUE) {
	echo " Roles de usuario predefinidos.";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	return false;
	}

}

?>
