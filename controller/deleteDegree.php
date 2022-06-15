<?php
require_once("../model/db_connection.php");
require_once("../model/grado.php");

if(isset($_POST['id'])){
    $grado = new grado();
    $response = $grado->deleteDegree($_POST['id']);
    echo json_encode($response);
}else{
    return false;
}
?>