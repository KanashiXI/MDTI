<?php 
require_once '/../include/dbConnect.php';

class SurgicalModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "employees");
        $this->col1 = new MongoCollection($this->con, "round");
        $this->col2 = new MongoCollection($this->con, "duty");
    }

    public function getAllStwo() {
        $cursor = $this->col->find(
            array("section"=>"S02")
        );

        return $cursor;
    }

    public function getRound($r) {
        $cursor1 = $this->col1->find(
            array("round"=>$r)
        );
        return $cursor1;

    }

    // public function getRound($r) {
    //     $cursor1 = $this->col1->find(
    //         array("round"=>$r)
    //     );

    //     public function getDuty($cursor) {
    //         $cursor2 = $this->col2->find(
    //             array("round"=>$cursor)
    //         );
    //         return $cursor2
    //     }
    //     return $cursor1
        
    // }



}