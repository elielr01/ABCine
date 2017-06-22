<?php
namespace es\ucm\fdi\aw;

class FormularioSelect extends Form {
    
	public function __construct() {
    $opciones['action']="checkout.php";
    parent::__construct('formSelect',$opciones);
  }

protected function generaCamposFormulario ($datos) {
    $var='<a href="" >COMPRAR</a>';
    $camposFormulario=<<<EOF
	</div>
    <div id='comprar' class='containerboton'>
    <input type="submit" 	value="comprar"  >
    </div>

EOF;
    return $camposFormulario;
    }


protected function procesaFormulario($datos){
    $postData = array("cine"=>1 ,"sala"=>"2");
    foreach ($postData as $name=>$value) {  
        $elements[] = "{$name}=".urlencode($value);  
        } 
    $c=curl_init();
    curl_setopt($c, CURLOPT_URL, 'http://localhost/ABCine-master/checkout.php');
    curl_setopt($handler, CURLOPT_POST,true);  
    curl_setopt($handler, CURLOPT_POSTFIELDS, $elements);  
    $response = curl_exec ($handler);  
    curl_close($handler); 
        
    }

}

?>