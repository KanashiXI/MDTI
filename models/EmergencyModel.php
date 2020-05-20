<?php 
require_once '/../include/dbConnect.php';

class EmergencyModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllStree() {
        $cursor = $this->col->find(
            array("section"=>"S03")
        );
        return $cursor;
        
    }


}