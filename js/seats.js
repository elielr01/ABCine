var htmlEndpointToRenderTo = document.getElementsByClassName("seats")[0];
//console.log(htmlEndpointToRenderTo);

var seatRows = 5;
var seatColummns = 5;

var selectedSeats = [];
var user = {};

var randomBoolean = function() {
  return Math.random() >= 0.5;
};

var onSeatClick = function(id, e) {
  var element = e.target;

  if (element.classList.contains("open")) {
    element.className = element.className.replace("open", "selected");
    selectedSeats.push(id);
    //console.log(selectedSeats);
    return;
  }

  if (element.classList.contains("selected")) {
    element.className = element.className.replace("selected", "open");
    selectedSeats = selectedSeats.filter(function(seat) {
      return seat !== id;
    });
    //console.log(selectedSeats);
    return;
  }
};

var renderSeat = function(config) {
  config = config || {};

  var id = config.id;
  if (id === undefined) {
    console.log(id);
    console.warn("Id not provided on renderSeat");
    return;
  }

  var status = config.status || "open";

  var element = document.createElement("i");

  element.addEventListener("click", function(e) {
    if (status === "open") {
      onSeatClick(id, e);
    }
  });

  element.className = "zmdi zmdi-seat seat " + status;
  element.setAttribute("title", "Seat " + id);

  return element;
};

var renderSeatsGroup = function(id, numRows, numColumns, seats) {
  numRows = numRows || 0;
  numColumns = numColumns || 0;

  seatState = seats.map(function(child) {
    return child.activo;
  });
  
  var groupSeats = document.createElement("div");
  groupSeats.className = "seatsGroup";
  var i = 1;

  for (var x = 0; x < numRows; x++) {
    var row = document.createElement("div");
    row.className = "row";

    for (var y = 0; y < numColumns; y++) {
      var column = document.createElement("div");
      column.className = "column";
      column.appendChild(
        renderSeat({
          status: seatState[i-1] ? "open" : "occupied",
          id: i
        })
      );
      row.appendChild(column);
      i++;
    }
    groupSeats.appendChild(row);
  }

  return groupSeats;
};
var buildTheater = function(element) {
  var datos = JSON.parse(localStorage.getItem("checkout"));
  var datos;
  var urlReferrer = document.referrer;

  var lastSlash = urlReferrer.lastIndexOf("/");
  var ruta = urlReferrer.substring(0, lastSlash);
  
  $.ajax({
    type: "post",
    url: ruta + "/includes/querySeats.php",
    data: datos,
    success: function(response) {
      var json = JSON.parse(response);
      element.appendChild(renderSeatsGroup(0, 4, 12, json.seat || []));
      user = json.user || {};
    }
  });

  // element.appendChild(renderSeatsGroup(1, 4, 6));
  // element.appendChild(renderSeatsGroup(2, 6, 2));
};

buildTheater(htmlEndpointToRenderTo);

$(".shopMenu").click(function() {

  var urlReferrer = document.referrer;

  var lastSlash = urlReferrer.lastIndexOf("/");
  var ruta = urlReferrer.substring(0, lastSlash);

  //console.log(selectedSeats);
  $.ajax({
    type: "post",
    url: ruta + "/includes/queryCompra.php",
    data: {
      seat: selectedSeats,
      user: user
    },
    success: function(response) {
	  alert("Gracias por tu compra , tus entradas están en tu perfil");
      window.location.replace(ruta + "/index.php");
    }
  });

});
