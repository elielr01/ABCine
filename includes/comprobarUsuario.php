<?php

	namespace es\ucm\fdi\aw;
if( $_GET["user"]  ){

	 echo json_encode(array("data"=>"Disponible", "status"=>"Success"));
}
else{

	 echo json_encode(array("data"=>"Existe", "status"=>"Success"));
}
?>