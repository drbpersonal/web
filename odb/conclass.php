<?php
class conclass{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $conn;
    public function_construct(){
        $this->conn = new mysqli(
            $this->serverName,
            $this->userName,
            $this->password,
            $this->dbName);
if($this->conn->connect_error){
    die("connection failed:".$this->conn->connect_error);
}
echo"connected Successful";
    }
}

?>