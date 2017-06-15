<?php

namespace es\ucm\fdi\aw;

class FormularioFoto extends Form {

  public function __construct() {
    parent::__construct('formFoto');
  }

  protected function generaCamposFormulario($datos){

    $camposFormulario=<<<EOF
      <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name"submit">
    </form>
EOF;
    return $camposFormulario;
  }

  protected function procesaFormulario($datos){
  
    return true;

  }

}
?>
