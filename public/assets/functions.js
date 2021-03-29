function initMap() {

  const directionsService = new google.maps.DirectionsService();
  const directionsRenderer = new google.maps.DirectionsRenderer();
  const map = new google.maps.Map(document.getElementById("map"), {
    mapId: "e7903b59956c0e74",
    zoom: 7,
    center: {
      lat: 56.946285,
      lng: 24.105078
    },
  });

  directionsRenderer.setMap(map);

  const API_url = "../api/get.php";
  var request = new XMLHttpRequest()

  request.open('GET', API_url, true)
  request.onload = function () {
    var data = JSON.parse(this.response)
    getAllObjectMarkers(data,map);
  }
  request.send()
}

function getAllObjectMarkers(data,map) {
  for (var i = 0; i < data.length; i++) {
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
      map,
      icon: "assets/images/tree.png"
    });

    var content = "<h6>" + data[i].place_name + '</h6> <br>';
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
      return function () {
        infowindow.setContent(content);
        infowindow.open(map, marker);
        map.setZoom(15);
        map.panTo(marker.position);
      };
    })(marker, content, infowindow));
  }
}
