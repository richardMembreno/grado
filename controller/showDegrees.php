<?php
require_once("../model/db_connection.php");
require_once("../model/grado.php");

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $grado = new grado();
    $data = "
        <thead class='table-secondary'>
            <tr>
                <th scope='col'>Código</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Abreviatura</th>
                <th scope='col'>Sección</th>
                <th scope='col'>Nivel</th>
                <th scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>
    ";
    switch($status){
        case 'a':
            $info = $grado->showEnableDegree();
            foreach($info as $gra){
                $data .= "
                    <tr>
                        <th scope='row'>$gra[codigo]</th>
                        <td>$gra[nombregra]</td>
                        <td>$gra[abreviatura]</td>
                        <td>$gra[seccion]</td>
                        <td>".utf8_encode($gra['nombre'])."</td>
                        <td>
                            <a onclick='getDegree($gra[idgra])' class='m-4'><i class='fa-solid fa-pencil'></i></a>
                            <a onclick='getDegreeToDelete($gra[idgra])' class='m-4' style='color:red;'><i class='fa-solid fa-trash-can'></i></a>
                        </td>
                    </tr>
                ";
            }
            break;
        case 'i':
            $info = $grado->showDisableDegree();
            foreach($info as $gra){
                $data .= "
                    <tr>
                        <th scope='row'>$gra[codigo]</th>
                        <td>$gra[nombregra]</td>
                        <td>$gra[abreviatura]</td>
                        <td>$gra[seccion]</td>
                        <td>".utf8_encode($gra['nombre'])."</td>
                        <td>
                            <a onclick='getDegree($gra[idgra])' class='m-4'><i class='fa-solid fa-pencil'></i></a>
                            <a onclick='getDegreeToDelete($gra[idgra])' class='m-4' style='color:red;'><i class='fa-solid fa-trash-can'></i></a>
                        </td>
                    </tr>
                ";
            }
            break;
        default:
            break;
    }
    $data .= "
        </tbody>
    ";
    echo $data;
}

?>