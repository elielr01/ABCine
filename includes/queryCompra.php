<?php
    namespace es\ucm\fdi\aw;
    require_once __DIR__.'/config.php';

    $app = App::getSingleton();
    $conn = $app->conexionBd();


    $user = $_POST['user'];
    $sitios = $_POST['seat'];
   
    
    $funcion = $user['funcion'];
    $sala = $user['sala'];
    $usuario = $user['usr'];
    $price;
    foreach ($sitios as $sitio) {

        $sql = "UPDATE butacas_en_sesion , sala , butaca  
                SET activo = '0'
                WHERE sala.id='$sala' AND butacas_en_sesion.id_sesion='$funcion' AND
                      butacas_en_sesion.id_butaca=butaca.id AND butaca.idSala=sala.id
                      AND butaca.numbutaca='$sitio'"; 

                      
    
        $conn->query($sql);  

        $sql="INSERT INTO compra (id_usuario,id_butaca,fecha,total,id_funcion)
              SELECT u.id , b.id, f.fecha,f.precio,f.id
              FROM usuarios u,butaca b,funcion f,sala s , butacas_en_sesion bs
              WHERE u.username='$usuario' and b.numbutaca='$sitio' and s.id='$sala' and b.idSala=s.id
                    and bs.id_butaca=b.id and f.id='$funcion' and bs.id_sesion=f.id
        
        ";
        
        $conn->query($sql);
    }
    //$conn->close();
  
?>
        



  
