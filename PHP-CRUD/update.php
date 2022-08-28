<?php
    require 'connect.php';
    $id=$_GET['id'];

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        global $id;
        $fname=filter($_POST['fname']);
        $lname=filter($_POST['lname']);
        $nationality=filter($_POST['nationality']);
        $email=$_POST['email'];
        $dob=$_POST['date'];
        $fnerror=$lnerror=$e_error=$nerror="";
        
        
        
            if(empty($fname)||strlen($fname)<3||strlen($lname)<3||!filter_var($email, FILTER_VALIDATE_EMAIL)||strlen($nationality)<2){
                if(empty($fname)||strlen($fname)<3){
                    $fnerror="Please enter first Name <br> and Name must be of 3 character";
                }
                if(empty($lname)||strlen($lname)<3){
                    $lnerror="Please enter full Name <br> and Name must be of 3 character";
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                     $e_error = "Invalid email format";
                 }     
                if (empty($nationality)||strlen($nationality)<2){
                    $nerror="Invalid nationality";
                }
            }
            else{
                $sql =" UPDATE PHP_CRUD SET fname ='$fname',lname='$lname',email='$email',nationality='$nationality',dob='$dob' WHERE id='$id'";
           
                if ($conn->query($sql) === TRUE) {
               echo "<script>alert('Hurray!! Updated Sucessfully')</script>";
               header('Refresh: 2; URL=index3.php');
             
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
        