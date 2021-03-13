<?php
    // Curl opened
    $curl = curl_init();

      require_once "curl.config.php";

    $response = curl_exec($curl);
    $err = curl_error($curl);
    // Curl closed
    curl_close($curl);

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
        header("location:object_page.php");
      }
    }