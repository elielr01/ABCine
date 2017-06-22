

var htmlEndpointToRenderTo = document.getElementsByClassName('seats')[0];

var seatRows = 5;
var seatColummns = 5;

var randomBoolean = function() {
	return Math.random() >= 0.5
};

var onSeatClick = function(id, e) {
  var element = e.target;

	if (element.classList.contains('open')) {
  	element.className = element.className.replace('open', 'selected');
    return;
  }

  if (element.classList.contains('selected')) {
  	element.className = element.className.replace('selected', 'open');
    return;
  }
}

var renderSeat = function(config) {
  config = config || {};

  var id = config.id;
  if (id === undefined) {
  	console.log(id);
    console.warn('Id not provided on renderSeat');
    return;
  }

  var status = config.status || 'open';

  var element = document.createElement('i');

  element.addEventListener('click', function(e) {
    if (status === 'open') {
    	onSeatClick(id, e);
    }
  });

  element.className = 'zmdi zmdi-seat seat ' + status;
	element.setAttribute('title', 'Seat ' + id);

  return element;
}

var renderSeatsGroup = function(id, numRows, numColumns) {
  numRows = numRows || 0;
  numColumns = numColumns || 0;

  var groupSeats = document.createElement('div');
  groupSeats.className = 'seatsGroup';

	for (var x = 0; x < numRows; x++) {
  	var row = document.createElement('div');
    row.className = 'row';

    for (var y = 0; y < numColumns; y++) {
    	var column = document.createElement('div');
    	column.className = 'column';
      column.appendChild(renderSeat({
        status: randomBoolean()
        	? 'open'
          : 'occupied',
        id: '' + id + x + y,
      }));
      row.appendChild(column);
    }

    groupSeats.appendChild(row);
  }

  return groupSeats;
}

var buildTheater = function(element) {
	element.appendChild(renderSeatsGroup(0, 6, 2));
  element.appendChild(renderSeatsGroup(1, 4, 6));
  element.appendChild(renderSeatsGroup(2, 6, 2));
}

buildTheater(htmlEndpointToRenderTo);
