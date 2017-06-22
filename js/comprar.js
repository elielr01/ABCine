 $('#comprar').click(function(){
     
    var idSala = document.getElementById("child1").value;
	var idCine = document.getElementById("father").value;
    var idFecha = document.getElementById("child2").value;
    var urlHref = window.location.href;
    var urlReferrer = document.referrer;
 

    var getId = urlHref.lastIndexOf("id=");
    var idPelicula = urlHref.split("=")[1];

    var lastSlash = urlReferrer.lastIndexOf('/');
    var ruta = urlReferrer.substring(0, lastSlash);
 
    var datos = {
    id: idPelicula,
    sala: idSala,
	cine : idCine,
    fecha : idFecha
    };

   
    
    $.ajax({                        
        type: "post",                 
        url: ruta + "/includes/querySeats.php",                     
        data: datos, 
        success: function(response)             
        {   
            
            if(response=="error"){
                alert("Necesitas tener una cuenta para comprar entradas");
            }else{
            alert(response);     
            window.location.href = ruta+"/checkout.php?id=" + idPelicula; 
            } 
        }
       });
      
    });