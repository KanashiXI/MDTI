<?php 
require_once '/../include/dbConnect.php';

class OperatingModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllSfour() {
        $cursor = $this->col->find(
            array("section"=>"S04")
        );
        return $cursor;
        
    }


}