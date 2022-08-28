<?php
         
         
         $sql ="INSERT INTO PHP_CRUD (fname,lname,email,nationality,dob) VALUES ('$fname','$lname','$email','$nationality','$dob')";
           
            if ($conn->query($sql) === TRUE) {
               echo "<script>alert('inserted sucessfully')</script>";
             
             } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
            }
?>