<?php 
require_once '/../include/dbConnect.php';

class MedicineModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllSone() {
        $cursor = $this->col->find(
            array("section"=>"S01")
        );
        return $cursor;
        
    }


}