<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$dbname="";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname="osl_db");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?> 
