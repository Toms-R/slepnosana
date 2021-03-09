// Initialize and add the map
function initMap() {
  // The location of Pils
  const pils = { lat: 57.31495175, lng: 25.268124944552586 };
  // The map, centered at Pils
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    center: { lat: 56.946285, lng: 24.105078 },
  });
  // The marker, positioned at Pils


  const marker = new google.maps.Marker({
    position: pils,
    map: map,

  });
}

$("#button").click(function() {

  let lat = $('input[name=latitude]').val();
  let long = $('input[name=longitude]').val();
  let place_name = $('input[name=place_name]').val();
  let points = $('input[name=points]').val();
  let about_place = $('input[name=about_place]').val();

  let newPlace = { 'latitude': lat, 'longitude': long,'place_name': place_name, 'points': points, 'about_place': about_place };

  console.log(newPlace);
  let saveData = $.ajax({
      type: 'POST',
      url: "api/create.php",
      data: newPlace,
      dataType: "text",
      success: function(resultData) {
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

