<?php
require_once("../model/db_connection.php");
require_once("../model/grado.php");
//variables para verificar los datos
$valId = "/[0-9]+/";
$valCodigo = "/[0-9]{1,15}+/";
$valNombre = "/[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}+/";
$valSeccion = "/[a-zA-Z]{1}+/";
$valAbrev = "/[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}+/";
$valEstado = "/[ai]{1}+/";
$valNivel = "/[123]{1}+/";
$error = 0;//contador de errores

if(isset($_POST['id']) && isset($_POST['code']) && isset($_POST['name']) && isset($_POST['abbreviation']) && isset($_POST['section']) && isset($_POST['level']) && isset($_POST['status'])){
    $grado = new grado();
    //verificamos que los datos recibidos sean correctos
    if(preg_match($valId,$_POST['id']) != 1){
        $error += 1;
    }
    if(preg_match($valCodigo,$_POST['code']) != 1){
        $error += 1;
    }
    if(preg_match($valNombre,$_POST['name']) != 1){
        $error += 1;
    }
    if(preg_match($valAbrev,$_POST['abbreviation']) != 1){
        $error += 1;
    }
    if(preg_match($valSeccion,$_POST['section']) != 1){
        $error += 1;
    }
    if(preg_match($valNivel,$_POST['level']) != 1){
        $error += 1;
    }
    if(preg_match($valEstado,$_POST['status']) != 1){
        $error += 1;
    }

    //verificamos si encontramos errores en los datos
    if($error != 0){
        $response = false;
    }else{//realizamos la consulta a la bdd
        $response = $grado->editDegree($_POST['code'], $_POST['section'], $_POST['name'], $_POST['status'], $_POST['level'], $_POST['abbreviation'], $_POST['id']);
    }

    echo json_encode($response);//enviamos resultado
}else{
    return false;
}
?>