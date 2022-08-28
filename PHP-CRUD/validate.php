<?php
require("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fname=filter($_POST['fname']);
$lname=filter($_POST['lname']);
$email=$_POST['email'];
$nationality=filter($_POST['nationality']);
$dob=$_POST['dob'];
$fnerror=$lnerror=$e_error=$nerror="";


  $dob = date("Y-m-d", strtotime($dob));  


   if(empty($fname)||strlen($fname)<3||strlen($lname)<3||!filter_var($email, FILTER_VALIDATE_EMAIL)||strlen($nationality)<2){
      if($fname==""||strlen($fname)<3){
            $fnerror="Please enter First Name <br> and Name-length must be of  atleast 3 character";
        }
      if($lname==""||strlen($lname)<2){
            $lnerror="Please enter Last Name <br> and Name-length must be of atleast 2 character";
        }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $e_error = "Invalid email format";
          }
      if (empty($nationality)||strlen($nationality)<2){
            $nerror="Invalid nationality";
        }
    }
    else{
        

        $sql ="INSERT INTO PHP_CRUD (fname,lname,email,nationality,dob) VALUES ('$fname','$lname','$email','$nationality','$dob')";
        
        if ($conn->query($sql) === TRUE) {
          echo "I am here";
           echo "<script>alert('inserted sucessfully')</script>";
         
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