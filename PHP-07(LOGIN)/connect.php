<?php
$servername="localhost";
$username="root";
$password="Admin@123";
$dbname="";

//create connection

$conn=new mysqli($servername,$username,$password,$dbname="osl_db");

//checking connection

if($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}

else{
    // echo "connected with database";
}
?>