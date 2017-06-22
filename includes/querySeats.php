<?php
    namespace es\ucm\fdi\aw;
    require_once __DIR__.'/config.php';

    if ( !isset($_SESSION['username']) ) 
    {
        echo "error";
        die();
    }



    $response=array();
    $app = App::getSingleton();
    $conn = $app->conexionBd();

    $cine = $_POST['cine'];
    $id = $_POST['id'];
    $sala = $_POST['sala'];
    
    $myfile = "../userFolder/queries/" . $_SESSION['username'] . ".json";
    $fh = fopen($myfile,'w') or die("can't open file");


    $sql2 = "SELECT b.id ,b.numbutaca , butacaS.activo , butacaS.id
             FROM butacas_en_sesion butacaS , sala s , cine c , funcion f , butaca b
             WHERE id_pelicula='$id' and s.numSala='$sala' and c.nombre='$cine' and 
             f.id_sala=s.id and s.idCine=c.id and b.id=butacaS.id_butaca and butacaS.id_sesion=f.id AND
             b.idSala=s.id and f.id_pelicula='$id'
             ";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $dat = $row['numbutaca'] . ',' . $row['activo'];
        array_push($response, $dat);
      }
    }

    $stringData= serialize($response);
    fwrite($fh,$stringData);
    fclose($fh);
    $result->free();
    $usr = $_SESSION['username'];
    array_push($response,$usr);
    echo implode(";", $response);

  ?>
