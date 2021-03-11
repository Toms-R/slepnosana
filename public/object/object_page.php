<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Slēpņošana</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <h1 class="object-page-h1">Object has to show here!</h1>
    <?php 
    // Curl opened
    $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/slepnosana/public/api/get.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache"
        ),
      ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    // Curl closed
    curl_close($curl);

    // Variable that stores requested API data
    $API_get_data = json_decode($response);
    $API_get_data_length  = count($API_get_data);
    
    if(isset($_GET['object'])){
      if($_GET['object'] > 0 && $_GET['object'] < $API_get_data_length){
      $object_id_number = $_GET['object'];
    print_r("<h1>ID is: " . $API_get_data[$object_id_number-1]->id . "<br>" . 
                "Latitude is: " . $API_get_data[$object_id_number-1]->latitude . "<br>" . 
                "Longitude is: " . $API_get_data[$object_id_number-1]->longitude . "<br>" .
                "Place name is: " . $API_get_data[$object_id_number-1]->place_name . "<br>" .
                "Points is: " . $API_get_data[$object_id_number-1]->points . "<br>" .
                "About place is: " . $API_get_data[$object_id_number-1]->about_place . "<br>" . 
    "</h1>");
      }
      else {
        header("location:http://localhost/slepnosana/public/object/object_page.php");
      }
    }
    ?>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYtQlctouabXcBCtwB0HuUkufYU6csY9E&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script src="assets/scripts.js"></script>
</body>
</html>
