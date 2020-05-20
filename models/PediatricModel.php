<?php 
require_once '/../include/dbConnect.php';

class PediatricModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllSseven() {
        $cursor = $this->col->find(
            array("section"=>"S07")
        );
        return $cursor;
        
    }


}