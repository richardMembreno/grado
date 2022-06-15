<?php
class database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "grado";

    public function create_connection(){
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($connection->connect_errno){
            echo "Ocurrio un error en la conexion. ".$connection->connect_error."";
        }else{
            return $connection;
        }
    }

    public function close_connection($connection)
    {
        mysqli_close($connection);
    }

}
?>