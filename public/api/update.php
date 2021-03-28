<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once '../../config/config.php';
    require_once '../../class/Database.php';
    require_once '../../class/Places.php';

    $database = new Database();
    $db = $database->getConnection($db_config);

    parse_str(file_get_contents("php://input"), $data);

    $item = new Place($db);

    $item->id = $data['id'];
    $item->latitude = floatval($data['latitude']);
    $item->longitude = floatval($data['longitude']);
    $item->place_name = $data['place_name'];
    $item->points = $data['points'];
    $item->about_place = $data['about_place'];

    var_dump($item);

    if ($item->editPlace()) {
        echo 'Place updated successfully.';
    } else {
        http_response_code(418);
        echo 'Place could not be updated.';
    }
