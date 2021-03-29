<?php

    if(!empty($_GET['id'])) {
        require_once '../config/config.php';
        require_once '../class/Database.php';
        require_once '../class/Places.php';

        $database = new Database();
        $db = $database->getConnection($db_config);
        $item = new Place($db);

        $id = $item-> id = $_GET['id'];

        $item->readPlace();

        $latitude = $item-> latitude;
        $longitude = $item-> longitude;
        $place_name = $item-> place_name;
        $points = $item-> points;
        $about_place = $item-> about_place;
    } else {
        $latitude="";
        $longitude="";
        $place_name="";
        $points="";
        $about_place="";
    }
    
    include 'header.tpl.php';
    include 'templates/add-place-form.tpl.php';
