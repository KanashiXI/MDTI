<?php 
require_once '/../include/dbConnect.php';

class IntensitiveModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllSfive() {
        $cursor = $this->col->find(
            array("section"=>"S05")
        );
        return $cursor;
        
    }


}