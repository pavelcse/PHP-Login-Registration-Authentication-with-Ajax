<?php
class Login
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

    public function login($data)
    {
        $email = $data['email'];
        $password = md5($data['password']);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) {
                if($row['type'] == 1){
                    $id = $row['id'];
                    echo "<script> document.location.href='../views/owner.php?id=$id';</script>";
                }elseif ($row['type'] == 2){
                    $id = $row['id'];
                    echo "<script> document.location.href='../views/client.php?id=$id';</script>";
                }else{
                    $id = $row['id'];
                    echo "<script> document.location.href='../views/admin.php?id=$id';</script>";
                }
            }
        }else {
            return "Email or Password dosn't match. Please try again...";
        }
    }
}