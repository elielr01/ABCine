$("#father").on("change", function() {
	getSalas();
  getHoras();
});

$("#child1").on("change", function() {
	getHoras();
});

$( document ).ready(function() {
  getSalas();
  getHoras();
});

function getSalas(){
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

  var request = $.ajax({
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
        },

        error: function() {
          alert('Error');
        }
  });
}


function getHoras(){

  var idSala = document.getElementById("child1").value;

  var urlHref = window.location.href;
  var urlReferrer = document.referrer;

  var getId = urlHref.lastIndexOf("id=");
  var idPelicula = urlHref.split("=")[1];

  var lastSlash = urlReferrer.lastIndexOf('/');
  var ruta = urlReferrer.substring(0, lastSlash);

  var datos = {
    id: idPelicula,
    sala: idSala
  };


  var request = $.ajax({
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
        },

        error: function() {
          alert('p0rp0c0');
        }
  });

}
