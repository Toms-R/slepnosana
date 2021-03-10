// Initialize and add the map
function initMap() {
  // The map, centered at Pils
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    center: {
      lat: 56.946285,
      lng: 24.105078
    },
  });

  const infowindow = new google.maps.InfoWindow({
    content: "TESTING",
  });


  const API_url = 'http://localhost/slepnosana/api/get.php';
  var request = new XMLHttpRequest()
  // Open a new connection, using the GET request on the URL endpoint
  request.open('GET', API_url, true)


  request.onload = function () {
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)
    for (var i = 0; i < data.length; i++) {
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
        map,
        title: "TITLE HAS TO BE HERE",
      });
      var content = "<h3>" + data[i].place_name + '</h3><br>' + "About: " + data[i].about_place;

      var infowindow = new google.maps.InfoWindow()

      google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
        return function () {
          infowindow.setContent(content);
          infowindow.open(map, marker);
        };
      })(marker, content, infowindow));
    }
  }
  // Send request
  request.send()
}

$("#button").click(function () {

  let lat = $('input[name=latitude]').val();
  let long = $('input[name=longitude]').val();
  let place_name = $('input[name=place_name]').val();
  let points = $('input[name=points]').val();
  let about_place = $('input[name=about_place]').val();

  let newPlace = {
    'latitude': lat,
    'longitude': long,
    'place_name': place_name,
    'points': points,
    'about_place': about_place
  };

  console.log(newPlace);
  let saveData = $.ajax({
    type: 'POST',
    url: "api/create.php",
    data: newPlace,
    dataType: "text",
    success: function (resultData) {
      let deita = JSON.parse(resultData);
      addPlace(deita.id, lat, long, place_name, points, about_place);
      $('input[name=latitude]').val('');
      $('input[name=longitude]').val('');
      $('input[name=place_name]').val('');
      $('input[name=points]').val('');
      $('input[name=about_place]').val('');
    }
  });
});