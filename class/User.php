<?php
class User
{
    public $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "db_php_form";

        $conn = new mysqli($servername, $username, $password, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }

    public function userLogin($id, $type)
    {
        $sql = "SELECT * FROM users WHERE id = '$id' AND type = '$type'";
        $result = $this->conn->query($sql);
        if($result){
            while($row = $result->fetch_assoc()) {
                return $row;
            }
        }
    }

    public function getOwner()
    {
        $data = array();
        $sql = "SELECT * FROM users WHERE  type = '1'";
        $result = $this->conn->query($sql);

        if($result){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getClient()
    {
        $data = array();
        $sql = "SELECT * FROM users WHERE  type = '2'";
        $result = $this->conn->query($sql);

        if($result){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

}