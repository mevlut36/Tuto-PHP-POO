<?php

class Friend {
    public function getAllFriends(){
        $array = array(
            "Billy" => "1M abo",
            "Amine" => "100k abo jcrois",
            "Yass" => "700k abo"
        );
        foreach($array as $key => $values){
            echo $key . ", le boug a ". $values . "<br>";
        }
    }
}
