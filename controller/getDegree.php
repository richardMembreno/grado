<?php
header("Content-Type: text/html;charset=utf-8");
require_once("../model/db_connection.php");
require_once("../model/grado.php");

if(isset($_POST['id'])){
    $cod = $_POST['id'];
    $grado = new grado();
    $response = "";
    $data = $grado->getDegree($_POST['id']);
    foreach($data as $info){
        $response = ["id"=>$info['idgra'], "code"=>$info['codigo'], "name"=>$info['nombregra'], "section"=>$info['seccion'], "status"=>$info['estadogra'], "level"=>$info['id_nivel_educativo_fk'], "abbr"=>$info['abreviatura']];
    }
    echo json_encode($response);
}
?>