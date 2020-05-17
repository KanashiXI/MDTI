<?php 
require_once '/../include/dbConnect.php';

class EmployeeModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
    }

    public function getAllEmployee() {
        $cursor = $this->col->find();
        return $cursor;
    }

    // public function search($name){
    //     $query = array('name' => $name);
    //     $cursor = $this->col->find($query);
    //     return $cursor;
    // }

    // public function getdata($age){
    //     $query = array('age' => $age);
    //     $cursor = $this->col->findOne($query);
    //     return $cursor;
    // }
    
    // public function insert($name,$age){
    //     $document = array(
    //         "name" => $name,
    //         "age" => $age
    //     );
    
    //     try {
    //         $cur = $this->col->insert($document);
    //         return $cur;
    //     }
    //     catch (MongoCursorException $e) {
    //         return false;
    //     }
    // }

}