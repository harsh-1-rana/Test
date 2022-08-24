<?php
// require("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname=filter($_POST['fname']);
$lname=filter($_POST['lname']);
$uname=filter($_POST['uname']);
$gender=filter($_POST['gender']);
$nationality=filter($_POST['nationality']);
$phone=filter($_POST['phone']);
$email=$_POST['email'];
$dob=$_POST['dob'];
$fnerror=$lnerror=$unerror=$gerror=$nerror=$perror=$e_error="";

   
    if(empty($fname)||strlen($fname)<3||strlen($lname)<3||empty($uname)||strlen($uname)<3||empty($gender)||strlen($gender)<3||empty($nationality)||strlen($nationality)<3||empty($phone)||preg_match('/^[0-9]{10}+$/', $phone)||!filter_var($email, FILTER_VALIDATE_EMAIL)){
        if(empty($fname)||strlen($fname)<3){
            $fnerror="Please enter first Name <br> and Name must be of 3 character";
        }
        if(empty($lname)||strlen($lname)<3){
            $lnerror="Please enter last Name <br> and Name must be of 3 character";
        }
        if(empty($uname)||strlen($uname)<3){
            $unerror="Please enter username <br> and it must be of atleast 8 character";
        }
        if(empty($gender)||strlen($gender)<3){
            $gerror="Please enter gender <br> and Name must be of 3 character";
        }
        if (empty($nationality)||strlen($nationality)<3){
            $nerror="Invalid nationality";
        }
        if(!preg_match('/^[0-9]{10}+$/', $phone)) {
            $perror= "Invalid Phone Number";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $e_error = "Invalid email format";
        }     

    }
else{
}

}
function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}