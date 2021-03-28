// Initialize and add the map
function initMap() {
    // The map, centered at Pils
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
  
  
  
    const API_url = '../api/get.php';
    var request = new XMLHttpRequest()
  
    // Open a new connection, using the GET request on the URL endpoint
    request.open('GET', API_url, true)
    request.onload = function () {
      // Begin accessing JSON data here
      var data = JSON.parse(this.response)
  
      for (var i = 0; i < data.length; i++) {
        // New marker
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
          map,
          icon: "/assets/tree.png"
        });
  
        var content = "<h6>" + data[i].place_name + '</h6> <br>';
        var infowindow = new google.maps.InfoWindow()
  
        // Marker event listener
        google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
          return function () {
            // Marker click attributes
            infowindow.setContent(content);
            infowindow.open(map, marker);
            map.setZoom(15);
            map.panTo(marker.position);
          };
        })(marker, content, infowindow));
  
        //Select directions
      }
    }
    // Send request
    request.send()
  }
