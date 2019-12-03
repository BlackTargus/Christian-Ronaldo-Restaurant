<?php
require('connection.php');

function getClients(){
    global $conn;
    $getClientSQL = "SELECT * FROM tclientes";
    $resultClient = $conn->query($getClientSQL);
    return $resultClient;
}

function checkId($table,$col,$id){
    global $conn;
    $checkId = "SELECT * FROM $table WHERE $col='$id'";
    $resultCheck = $conn->query($checkId);
    if($resultCheck->num_rows > 0){
        return true;
    }else{
        return false;
    }
}
