 $('#comprar').click(function(){
     
    var idSala = document.getElementById("child1").value;
	var idCine = document.getElementById("father").value;
    var idFecha = $('#child2 option:selected').attr('id');
    
    var urlHref = window.location.href;
    var urlReferrer = document.referrer;
   

    var getId = urlHref.lastIndexOf("id=");
    var idPelicula = urlHref.split("=")[1];

    var lastSlash = urlReferrer.lastIndexOf('/');
    var ruta = urlReferrer.substring(0, lastSlash);

    if(idSala == undefined || idCine == undefined || idFecha == undefined){
        alert("No hay sesiones disponibles para esta película , lo sentimos");
        window.location.href = ruta+"/index.php";
        return;
    }
 
    var datos = {
    id: idPelicula,
    sala: idSala,
	cine : idCine,
    fun : idFecha
    };

   
    localStorage.setItem('checkout', JSON.stringify(datos));
    window.location.href = ruta+"/checkout.php?id=" + idPelicula;
    });