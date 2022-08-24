<?php
require("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname=filter($_POST['fname']);
$phone=filter($_POST['number']);
$email=$_POST['email'];
$dob=$_POST['date'];
$nerror=$perror="";
    if(!empty($fname)&&strlen($fname)>3 && preg_match('/^[0-9]{11}+$/', $phone)){
        $sql ="INSERT INTO Registration(fname,email,phone,dob) VALUES ('$fname','$email','$phone','$dob')";
        if ($conn->query($sql) === TRUE) {
            $url = "welcome.php?fname=".$fname;
            header("Location: $url");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
    if($fname==""||strlen($fname)<3){
            $nerror="Please enter full Name <br> and Name-length must be of 3 character";
        }
    if(!preg_match('/^[0-9]{11}+$/', $phone)){
            $perror="Please check phone number";
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