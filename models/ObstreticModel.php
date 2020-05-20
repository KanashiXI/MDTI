<?php 
require_once '/../include/dbConnect.php';

class ObstreticModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllSsix() {
        $cursor = $this->col->find(
            array("section"=>"S06")
        );
        return $cursor;
        
    }


}