<?php
require_once "conection.php";

class ModelUsers{
    // show uusers
    static public function mdlShowUsers($table, $item, $value){

        $stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        
        $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

        $stmt ->execute();

        return $stmt -> fetch();
    }
}