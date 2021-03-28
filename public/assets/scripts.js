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

  request.open('GET', API_url, true)
  request.onload = function () {
    var API_data = JSON.parse(this.response)

    for (var i = 0; i < API_data.length; i++) {
      // New marker
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(API_data[i].latitude, API_data[i].longitude),
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

      const onChangeHandler = function () {

        if ($("#end").val() == "") {
          return true;
        }
        var selectedDestination = $("#end").val().split(", ");
        var latLong1 = new google.maps.LatLng(currentLat, currentLong);
        var latLong2 = new google.maps.LatLng(selectedDestination[0], selectedDestination[1]);
        directionsService.route({
            origin: latLong1,
            destination: latLong2,
            travelMode: google.maps.TravelMode.WALKING,
          },
          (response, status) => {
            if (status === "OK") {
              directionsRenderer.setDirections(response);
            } else {
              window.alert("Directions request failed due to " + status);
            }
          }
        );
      };

      // function calculateAndDisplayRoute(directionsService, directionsRenderer) {
      //   if ($("#end").val() == "") {
      //     return true;
      //   }
      //   var selectedDestination = $("#end").val().split(", ");
      //   var latLong1 = new google.maps.LatLng(currentLat, currentLong);
      //   var latLong2 = new google.maps.LatLng(selectedDestination[0], selectedDestination[1]);
      //   directionsService.route(
      //     {
      //       origin: latLong1,
      //       destination: latLong2,
      //       travelMode: google.maps.TravelMode.WALKING,
      //     },
      //     (response, status) => {
      //       if (status === "OK") {
      //         directionsRenderer.setDirections(response);
      //       } else {
      //         window.alert("Directions request failed due to " + status);
      //       }
      //     }
      //   );
      // }
      var origLat = data[i].latitude;
      var origLong = data[i].longitude;

      $("#end").on("change", onChangeHandler);

      if (data[i].id != superid) {
        $("#end").append("<option value='" + origLat + ", " + origLong + "'>" + data[i].place_name + "</option>");
      }
    }
  }
  request.send()
}


//Add new place
$("#add-place").click(function () {

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
    url: "/api/create.php",
    data: newPlace,
    dataType: "text",
    success: function (resultData) {
      //let deita = JSON.parse(resultData);
      //addPlace(lat, long, place_name, points, about_place);
      $('input[name=latitude]').val('');
      $('input[name=longitude]').val('');
      $('input[name=place_name]').val('');
      $('input[name=points]').val('');
      $('input[name=about_place]').val('');
    },
    error: function (resultData) {
      alert("Viss slikti");
      console.log(resultData);
    }
  });
});

function editPlace() {

  $("body").on("click", 'a[href$="#exampleModal"]', function () {
    placeId = $(this).data().id;
  });

  let id = placeId;

  let lat = $('input[name=latitude]').val();
  let long = $('input[name=longitude]').val();
  let place_name = $('input[name=place_name]').val();
  let points = $('input[name=points]').val();
  let about_place = $('input[name=about_place]').val();
  console.log(id);

  let newPlace = {
    'id': id,
    'latitude': lat,
    'longitude': long,
    'place_name': place_name,
    'points': points,
    'about_place': about_place
  };

  console.log(newPlace);


  let saveData = $.ajax({
    type: 'PUT',
    url: "/api/update.php",
    data: newPlace,
    dataType: "text",
    success: function (resultData) {
      let deita = JSON.parse(resultData);
      editPlace(deita.placeId, lat, long, place_name, points, about_place);

      console.log(resultData);
    },
    error: function (resultData) {
      // let deita = JSON.parse(resultData);
      // editPlace(deita.placeId, lat, long, place_name, points, about_place);
      alert("Viss slikti");
      console.log(resultData);
    }
  });
  $('#exampleModal').modal('hide');
}

// Get all objects for editing.

function getAllEntries() {
  const API_url = '/api/get.php';
  var request = new XMLHttpRequest()

  // Open a new connection, using the GET request on the URL endpoint
  request.open('GET', API_url, true)
  request.onload = function () {
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)

    for (var i = 0; i < data.length; i++) {

      $("#places").append("<ul>" + data[i].place_name + "</ul>" +
        "<a href='#exampleModal' data-id='" + data[i].id + "'>" + "Labot" + "</a>"
      );
      //   + "<button id='edit-object' type='button' data-id='"
      //   + data[i].id
      //   +"' class='btn btn-primary' zdata-toggle='modal' data-target='#exampleModal'>"
      //   + "Labot" + "</button>" + "</ul>");

    }
  }
  // Send request
  request.send()
}

var placeId;

$("body").on("click", 'a[href$="#exampleModal"]', function () {

  placeId = $(this).data().id;
  console.log(placeId);
  let url = "add-place-form.php?id=" + placeId;
  $('#modal-places').load(url + ' .form');
  $('#exampleModal').modal('show');
});

// $('#exampleModal').on('shown.bs.modal', function () {

//   $('#myInput').trigger('focus');
//   $('#modal-places').load('add-place-form.php?id='+ 2 +' .form');
// })