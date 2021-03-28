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

  const API_url = 'http://localhost/slepnosana/public/api/get.php';
  var request = new XMLHttpRequest()

  request.open('GET', API_url, true)
  request.onload = function () {
    var API_data = JSON.parse(this.response)

    for (var i = 0; i < API_data.length; i++) {
      // New marker
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(API_data[i].latitude, API_data[i].longitude),
        map,
      });

      var content = "<h6>" + API_data[i].place_name + '</h6><br>' + "About: " + API_data[i].about_place;
      var infowindow = new google.maps.InfoWindow()

      // Marker event listener
      google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
        return function () {
          // Marker click attributes
          infowindow.setContent(content);
          infowindow.open(map, marker);
          map.setZoom(10);
          map.panTo(marker.position);
        };
      })(marker, content, infowindow));
    }
  }
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