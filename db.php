<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "crud_application";

$con = new mysqli($host, $user, $password, $dbName);

if($con->connect_error){
    die("connection failed").$db->connect_error;
}else{
    // echo "connected successfully";
}
?>
