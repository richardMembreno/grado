<?php
require_once("../model/db_connection.php");
require_once("../model/grado.php");

if(isset($_GET['id']) && isset($_GET['cod'])){
    $id = $_GET['id'];
    $cod = $_GET['cod'];
    $grado = new grado();

    if($id == 0){
        $data = $grado->getCode($cod);
        if(is_null($data)){
            $response = true;
        }else{
            $response = false;
        }
    }else{
        $info = $grado->getCode($cod);

        if($info == null){
            $response = true;
        }else{
            $codigo = $info[0];
            if($codigo == $id){
                $response = true;
            }else{
                $response = false;
            }
        }
    }
    echo json_encode($response);
}
?>