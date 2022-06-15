<?php
header("Content-Type: text/html;charset=utf-8");
require_once("../model/db_connection.php");
require_once("../model/grado.php");
$data = "";
$grado = new grado();
$niveles = $grado->showLevels();
foreach($niveles as $nivel){
    $data .= "
        <option value='$nivel[id_nivel]'>".utf8_encode($nivel['nombre'])."</option>
    ";
}
echo $data;
?>
