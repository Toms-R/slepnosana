<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once '../../config/config.php';
    require_once '../../class/Database.php';
    require_once '../../class/Places.php';

    $database = new Database();
    $db = $database->getConnection($db_config);

    $item = new Place($db);

    $place = $item->readPlace();

    $item->id = $data['id'];
    $item->latitude = $data['latitude'];
    $item->longitude = $data['longitude'];
    $item->place_name = $data['place_name'];
    $item->points = $data['points'];
    $item->about_place = $data['about_place'];

    if($item->readPlace()) {
        echo 'Place returned successfully.';
    } else {
        echo 'Place could not be returned.';
    }
