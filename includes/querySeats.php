<?php
    namespace es\ucm\fdi\aw;
    require_once __DIR__.'/config.php';

    if ( !isset($_SESSION['username']) ) 
    {
        echo "error";
        die();
    }



    
    $app = App::getSingleton();
    $conn = $app->conexionBd();

    $cine = $_POST['cine'];
    $id = $_POST['id'];
    $sala = $_POST['sala'];
    $fun= $_POST['fun'];
    
    $myfile = "../userFolder/queries/" . $_SESSION['username'] . ".json";
    //$fh = fopen($myfile,'w') or die("can't open file");


    $sql2 = "SELECT b.id ,b.numbutaca , butacaS.activo , butacaS.id
             FROM butacas_en_sesion butacaS , sala s , cine c , funcion f , butaca b
             WHERE id_pelicula='$id' and s.numSala='$sala' and c.nombre='$cine' and 
             f.id_sala=s.id and s.idCine=c.id and b.id=butacaS.id_butaca and butacaS.id_sesion=f.id AND
             b.idSala=s.id and f.id_pelicula='$id'
             ";
    $result = $conn->query($sql2);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $numButaca = $row['numbutaca'];
        $activo =  $row['activo'];
        $infoSeat[] = array('butaca'=>$numButaca,'activo'=>$activo);
      }
    }

    
    
    
    $usr = $_SESSION['username'];
    $infoQuery = array('usr'=>$usr,'id'=>$id,'sala'=>$sala,'funcion'=>$fun);
    $response['seat']=$infoSeat;
    $response['user']=$infoQuery;
  
    //$result->close();
	  //fwrite($fh,json_encode($response,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_NUMERIC_CHECK));
    echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_NUMERIC_CHECK);
    //fclose($fh);
    //echo ("correct");

  ?>
