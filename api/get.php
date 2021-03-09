<?php
// Headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/db.php';
include_once '../class/places.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->getConnection();

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

    echo json_encode($item_arr);
} else {
    http_response_code(404);

    echo json_encode(array("message" => "No places exist."));
}
// Query
// $result = $post->read();
// Get row count
// $num = $result->rowCount();
// Check if any posts
// if($num > 0){
    // Post array
    /* $posts_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        
        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' => $category_id,
            'category_name' => $category_name
        );

        // Push to "data"
        array_push($posts_arr['data'], $post_item);
    }
*/
    // Turn to JSON & output