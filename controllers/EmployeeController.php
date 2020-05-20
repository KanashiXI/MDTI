<?php
    require_once '/../models/EmployeeModel.php';

    class EmployeeController
    {
        public function index()
        {
            $db = new EmployeeModel();
            $cursor = $db->getAllEmployee();
            //Variable to store result
            $result = array();

            //Do itteration for all document in a collection
            foreach ($cursor as $doc) {
                $tmp = array();
                $tmp["license"] = $doc["license"];
                $tmp["name"] = $doc["name"];
                $tmp["surname"] = $doc["surname"];
                $tmp["position"] = $doc["position"];
                $tmp["section"] = $doc["section"];
                $tmp["round"] = $doc["round"];
                // $tmp["condition"] = $doc["condition"];
                array_push($result,$tmp);
            }
            response(200, $result);
        }

        // public function insert($app){
        //     $name = $app->post('name');
        //     $age = $app->post('age');
            
        //     $db = new TestModel();
        //     $cur = $db->insert($name,$age);
        //     $res = array();
        //     if($cur) {
        //         $res["error"] = FALSE;
        //         $res["message"] = "Success to insert a new friend";
        //     } else {
        //         $res["error"] = TRUE;
        //         $res["message"] = "Failed to add a new friend";
        //     }
        //     response(200, $res);
        // }

        // public function search($name){
        //     $db = new TestModel();
        //     $cursor = $db->search($name);

        //     $result = array();
        //     foreach ($cursor as $doc) {
        //         $tmp = array();
        //         $tmp["name"] = $doc["name"];
        //         $tmp["age"] = $doc["age"];
        //         array_push($result,$tmp);
        //     }
        //     response(200, $result);
        // }

        public function getdata($position){
            $db = new EmployeeModel();
            $cursor = $db->getdata($position);
            response(200, $cursor);
        }
    }