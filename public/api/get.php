<?php
// Headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once '../../config/config.php';
require_once '../../class/Database.php';
require_once '../../class/Places.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->getConnection($db_config);

$item = new Place($db);

$allItems = $item->readPlaces();

$tableRowCount = $allItems->rowCount();

if($tableRowCount > 0){
    $item_arr = array();
    $item_arr['data'] = array();

    while($row = $allItems->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $table_item = array(
            'id' => $id,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'place_name' => $place_name,
            'points' => $points,
            'about_place' => $about_place
        );

        array_push($item_arr['data'], $table_item);
    }
    http_response_code(200);

    echo json_encode($item_arr['data']);
} else {
    http_response_code(404);

    echo json_encode(array("message" => "No places exist."));
}
