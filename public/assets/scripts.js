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
      getAllObjectMarkers(data,map,directionsService,directionsRenderer);
  }
  request.send()
}

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

  let saveData = $.ajax({
    type: 'POST',
    url: "/api/create.php",
    data: newPlace,
    dataType: "text",
    success: function (resultData) {
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

var placeId;

function editCurrentPlace() {

  $("body").on( "click", 'a[href$="#exampleModal"]', function() {
    placeId = $(this).data().id;
  });

  let id = placeId;
  let lat = $('input[name=latitude]').val();
  let long = $('input[name=longitude]').val();
  let place_name = $('input[name=place_name]').val();
  let points = $('input[name=points]').val();
  let about_place = $('input[name=about_place]').val();

  let newPlace = {
    'id': id,
    'latitude': lat,
    'longitude': long,
    'place_name': place_name,
    'points': points,
    'about_place': about_place
  };

  let saveData = $.ajax({
    type: 'PUT',
    url: "/api/update.php",
    data: newPlace,
    dataType: "text",
    success: function (resultData) {
    },
      error: function (resultData) {
      alert("Viss slikti");
      console.log(resultData);
    }
  });
  $('#exampleModal').modal('hide');
}

function getAllEntries() {

  const API_url = '/api/get.php';
  var request = new XMLHttpRequest()

  request.open('GET', API_url, true)
  request.onload = function () {
    var data = JSON.parse(this.response)

    for (var i = 0; i < data.length; i++) {
      $("#places").append("<ul>" + data[i].place_name + "</ul>"
      + "<a href='#exampleModal' data-id='"+ data[i].id +"'>" + "Labot" +"</a>"
      );
    }
  }
  request.send()
}

$("body").on( "click", 'a[href$="#exampleModal"]', function() {

  placeId = $(this).data().id;
  let url = "add-place-form.php?id=" + placeId;
  $('#modal-places').load(url + ' .form');
  $('#exampleModal').modal('show');
});

function getAllObjectMarkers(data,map,directionsService,directionsRenderer) {
  for (var i = 0; i < data.length; i++) {
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
      map,
      icon: "assets/images/tree.png"
    });

    var content = "<h6>" + data[i].place_name + '</h6> <br>';
    var infowindow = new google.maps.InfoWindow()

    google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
      return function () {
        infowindow.setContent(content);
        infowindow.open(map, marker);
        map.setZoom(15);
        map.panTo(marker.position);
      };
    })(marker, content, infowindow));

    const onChangeHandler = function () {

      if ($("#end").val() == "") {
        return true;
      }

      var selectedDestination = $("#end").val().split(", ");
      var currentObjectLatLong = new google.maps.LatLng(currentObjectLat, currentObjectLong);
      var selectedObjectLatLong = new google.maps.LatLng(selectedDestination[0], selectedDestination[1]);

      directionsService.route(
        {
          origin: currentObjectLatLong,
          destination: selectedObjectLatLong,
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

    $("#end").on("change", onChangeHandler);

    if (data[i].id != currentObjectId) {
      $("#end").append("<option value='"+ data[i].latitude + ", " + data[i].longitude  +"'>" + data[i].place_name  +"</option>");
    }
  }
}
