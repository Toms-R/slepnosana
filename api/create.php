<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once "../config/db.php";
    include_once "../class/places.php";

    $database = new Database();
    $db = $database->getConnection();

    parse_str(file_get_contents("php://input"), $data);

    $item = new Place($db);
    $item->latitude = $data['latitude'];
    $item->longitude = $data['longitude'];
    $item->place_name = $data['place_name'];
    $item->points = $data['points'];
    $item->about_place = $data['about_place'];

    if($item->addPlace()){
        echo 'Place created successfully.';
    } else{
        echo 'Place could not be created.';
    }
