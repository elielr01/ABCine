<?php
    namespace es\ucm\fdi\aw;
    require_once __DIR__.'/config.php';
    
    $app = App::getSingleton();
    $conn = $app->conexionBd();
    $id=$_GET['id'];
    $sql = "SELECT p.nombrefoto 
            FROM pelicula p
            WHERE p.id='$id'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    
   echo "IMG/" . $row['nombrefoto'];
?>