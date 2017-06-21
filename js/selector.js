


$("#father").on("change", function() {
	getSalas();

});

$("#child1").on("change", function() {
	getHoras();
});


$( document ).ready(function() {
  getSalas();



});




function getSalas(callback){
  var cinema = $("#father").val();

  var urlHref = window.location.href;
  var urlReferrer = document.referrer;

  var getId = urlHref.lastIndexOf("id=");
  var idPelicula = urlHref.split("=")[1];

  var lastSlash = urlReferrer.lastIndexOf('/');
  var ruta = urlReferrer.substring(0, lastSlash);

  var datos = {
    cine: cinema,
    pelicula: idPelicula
  };

  $.ajax({
        url: ruta + "/includes/querySala.php",
        type: "post",
        data: datos,
        success: function(response) {
          var responseSplit = response.split(';');

          $('#child1').empty();
          $('#child2').empty();

          responseSplit.forEach(function(currentValue) {
            $('#child1').append($('<option>', {
              id: currentValue,
              value: currentValue,
              text: currentValue
            }));
          });
		  typeof callback === 'function' && callback(); // CUANDO LA PETICION HAYA ACABADO LLAMA A LA FUNCION QUE SE LE PASA POR ARGUMENTO
			getHoras();
        },

        error: function() {
          alert('Error');
        }
  });
}


function getHoras(callback){

	//debugger;

  var idSala = document.getElementById("child1").value;
	var idCine = document.getElementById("father").value;
  var urlHref = window.location.href;
  var urlReferrer = document.referrer;

  var getId = urlHref.lastIndexOf("id=");
  var idPelicula = urlHref.split("=")[1];

  var lastSlash = urlReferrer.lastIndexOf('/');
  var ruta = urlReferrer.substring(0, lastSlash);

  var datos = {
    id: idPelicula,
    sala: idSala,
		cine : idCine
  };


  $.ajax({
        url: ruta + "/includes/queryHora.php",
        type: "post",
        data: datos,
        success: function(response) {

          var responseSplit = response.split(';');

          $('#child2').empty();

          responseSplit.forEach(function(currentValue) {
            $('#child2').append($('<option>', {
              id: currentValue,
              value: currentValue,
              text: currentValue
            }));

          });
		  typeof callback === 'function' && callback();
        },

        error: function() {
          alert('Error');
        }
  });

}
