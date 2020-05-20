<?php
    require_once '/../models/EmergencyModel.php';

    class EmergencyController
    {
        public function index()
        {
            $db = new EmergencyModel();
            $cursor = $db->getAllStree();
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
                //$tmp["condition"] = $doc["condition"];
                array_push($result,$tmp);
            }
            response(200, $result);
        }


        public function getdata($position){
            $db = new EmergencyModel();
            $cursor = $db->getdata($position);
            response(200, $cursor);
        }
    }