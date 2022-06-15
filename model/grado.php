<?php
require_once('db_connection.php');
class grado{
    //Funcion para agregar un grado
    public function addDegree($code, $section, $name, $status, $level, $abbreviature){
        $db = new database();
        $connect = $db->create_connection();
        $query = "INSERT INTO grado_prueba (idgra,codigo, seccion, nombregra, estadogra, id_nivel_educativo_fk, abreviatura) VALUES (null,".$code.", '".$section."', '".$name."', '".$status."', ".$level.", '".$abbreviature."')";
        $result = mysqli_query($connect, $query);
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para modificar grado
    public function editDegree($code, $section, $name, $status, $level, $abbreviature, $id){
        $db = new database();
        $connect = $db->create_connection();
        $query = "UPDATE grado_prueba SET codigo='".$code."', seccion='".$section."', nombregra='".$name."', estadogra='".$status."', id_nivel_educativo_fk=".$level.", abreviatura='".$abbreviature."' WHERE idgra=".$id."";
        $result = mysqli_query($connect, $query);
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para eliminar grado
    public function deleteDegree($id){
        $db = new database();
        $connect = $db->create_connection();
        $query = "DELETE FROM grado_prueba WHERE idgra=".$id."";
        $result = mysqli_query($connect, $query);
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para obtener grados activos
    public function showEnableDegree(){
        $db = new database();
        $connect = $db->create_connection();
        $query = "SELECT grado_prueba.idgra, grado_prueba.codigo, grado_prueba.seccion, grado_prueba.nombregra, nivel_educativo_prueba.nombre, grado_prueba.abreviatura ";
        $query .= "FROM grado_prueba ";
        $query .= "INNER JOIN nivel_educativo_prueba ON nivel_educativo_prueba.id_nivel = grado_prueba.id_nivel_educativo_fk ";
        $query .= "WHERE grado_prueba.estadogra = 'a'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para obtener grados inactivos
    public function showDisableDegree(){
        $db = new database();
        $connect = $db->create_connection();
        $query = "SELECT grado_prueba.idgra, grado_prueba.codigo, grado_prueba.seccion, grado_prueba.nombregra, nivel_educativo_prueba.nombre, grado_prueba.abreviatura ";
        $query .= "FROM grado_prueba ";
        $query .= "INNER JOIN nivel_educativo_prueba ON nivel_educativo_prueba.id_nivel = grado_prueba.id_nivel_educativo_fk ";
        $query .= "WHERE grado_prueba.estadogra = 'i'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para obtener un grado especifico
    public function getDegree($code){
        $db = new database();
        $connect = $db->create_connection();
        $query = "SELECT * FROM grado_prueba WHERE idgra = ".$code;
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para obtener los niveles educativos
    public function showLevels(){
        $db = new database();
        $connect = $db->create_connection();
        $query = "SELECT id_nivel, nombre FROM nivel_educativo_prueba";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $db->close_connection($connect);
        return $result;
    }

    //Funcion para obtener el grado a partir de un codigo
    public function getCode($code){
        $db = new database();
        $connect = $db->create_connection();
        $query = "SELECT * FROM grado_prueba WHERE codigo='".$code."'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_row($result);
        $db->close_connection($connect);
        return $row;
    }


}
?>