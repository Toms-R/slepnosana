<?php
    // Curl opened
    $curl = curl_init();

<<<<<<< HEAD
    const MY_VARIABLE = 'test';

      require_once "curl.config.php";
=======
    include_once "../../config/config.php";

    curl_setopt_array($curl, array(
      CURLOPT_URL => $curl_url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
>>>>>>> b33d30130fb8e9521775ff387d0dde3ed88162ce

    $response = curl_exec($curl);
    $err = curl_error($curl);
    // Curl closed
    curl_close($curl);
    
    $API_get_data = json_decode($response);
    $API_get_data_length  = count($API_get_data);

<<<<<<< HEAD
    if (isset($_GET['object'])) { 
      if ($_GET['object'] > 0 && $_GET['object'] < $API_get_data_length) {

      $object_id_number = $_GET['object'];

      print_r("<h1>ID is: " . $API_get_data[$object_id_number - 1]->id . "<br>" . 
                "Latitude is: " . $API_get_data[$object_id_number - 1]->latitude . "<br>" . 
                "Longitude is: " . $API_get_data[$object_id_number - 1]->longitude . "<br>" .
                "Place name is: " . $API_get_data[$object_id_number - 1]->place_name . "<br>" .
                "Points is: " . $API_get_data[$object_id_number - 1]->points . "<br>" .
                "About place is: " . $API_get_data[$object_id_number-1]->about_place . "<br>" . 
      "</h1>");
      } else {
=======
    if(isset($_GET['object'])){
      if($_GET['object'] > 0 && $_GET['object'] <= $API_get_data_length){

      $object_id_number = $_GET['object'];

      echo "<script> 
      const superid = {$object_id_number}; 
      const currentLat = {$API_get_data[$object_id_number-1]->latitude}; 
      const currentLong = {$API_get_data[$object_id_number-1]->longitude};
      console.log(superid);
      </script>\n";

      print_r(" <div class='container'>
                  <div class='row d-flex justify-content-center container-heading'>
                     
                       " ."<h2>" . $API_get_data[$object_id_number-1]->place_name . "</h2>" .
                       //"ID is: " . $API_get_data[$object_id_number-1]->id . "<br>" . 
                //"Latitude is: " . $API_get_data[$object_id_number-1]->latitude . "<br>" . 
                //"Longitude is: " . $API_get_data[$object_id_number-1]->longitude . "<br>" .

                "     
                      
                   </div>
                   <div class='row'>
                      <div class='col-md-8'> "
                      .
                      "<h3>Punkti par šo vietu: " . $API_get_data[$object_id_number-1]->points . "</h3>" . 
      
                      "<h3>Informācija par šo vietu: " . $API_get_data[$object_id_number-1]->about_place . "</h3>" . "
                      </div> " . "
                      <div class='col-md-4 about-place d-flex justify-content-center'> ". 
                      "<img src='/assets/baznica.jpg'><br>" . "
                      </div>
                    </div>
                </div>");
      }
      else {
>>>>>>> b33d30130fb8e9521775ff387d0dde3ed88162ce
        header("location:object_page.php");
      }
    }
