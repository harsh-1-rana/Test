<?php
require("connect.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){

$email=$_POST['semail'];
   
    if (empty($email)||filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format')</script>";
    }
    else if(!empty($email)&&filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql ="INSERT INTO PHP_MYSQL_03 (email) VALUES ('$email')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Hurray you have subscribed to our newsletter');</script>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
    
} 

else{

}

function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}

?>




