<?php 
class Place {

    private $conn;

    // Table.
    private $db_table = "places";

    // Columns.
    public $id;
    public $latitude;
    public $longitude;
    public $place_name;
    public $points;
    public $about_place;

    //DB connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addPlace() {

        $querry = "INSERT INTO
        ". $this->db_table ."
    SET
        latitude = :latitude,
        longitude = :longitude,
        place_name = :place_name,
        points = :points,
        about_place = :about_place";

        $stmt = $this->conn->prepare($querry);

        $this->latitude=htmlspecialchars(strip_tags($this->latitude));
        $this->longitude=htmlspecialchars(strip_tags($this->longitude));
        $this->place_name=htmlspecialchars(strip_tags($this->place_name));
        $this->points=htmlspecialchars(strip_tags($this->points));
        $this->about_place=htmlspecialchars(strip_tags($this->about_place));

        // Bind data.

        $stmt->bindParam(":latitude", $this->latitude);
        $stmt->bindParam(":longitude", $this->longitude);
        $stmt->bindParam(":place_name", $this->place_name);
        $stmt->bindParam(":points", $this->points);
        $stmt->bindParam(":about_place", $this->about_place);

        if($stmt->execute()){
            return true;
         }
         return false;
    }

    public function readPlaces(){
        // Create query
            $querry = "SELECT 
                id,
                latitude,
                longitude,
                place_name,
                points,
                about_place
                FROM
                " . $this->db_table . ";";

            // Prepare statement
            $stmt = $this->conn->prepare($querry);
            // Execute query
            $stmt->execute();

            return $stmt;
    }
}
