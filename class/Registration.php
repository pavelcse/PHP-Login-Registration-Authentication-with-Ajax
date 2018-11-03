<?php
session_start();

class Registration
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

    public function newRegistration($data)
    {
        $f_name = $data['f_name'];
        $l_name = $data['l_name'];
        $email = $data['email'];
        $password = md5($data['password']);
        $country = $data['country'];
        $city = $data['city'];
        $address = $data['address'];
        $code = $data['code'];
        $type = $data['type'];
        $shop_name = $data['shop_name'];
        $shop_address = $data['shop_address'];

        if(!empty($email)){
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
               return "Email already exist. Please try with new one...";
            }else{
                $sql = "INSERT INTO users (f_name, l_name,  email,  password,  country,  city,  address,  code,  type,  shop_name,  shop_address) 
                VALUES ('$f_name', '$l_name', '$email', '$password', '$country', '$city', '$address', '$code', '$type', '$shop_name', '$shop_address')";

                if ($this->conn->query($sql) === TRUE)
                {
                    echo "<script> document.location.href='../index.php?msg=success';</script>";
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $this->conn->error;
                }
            }
        }

    }

    public function __destruct()
    {
        $this->conn->close();
    }


}