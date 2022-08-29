<?php
  require("connect.php");

  //checking if the request method is post or not

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    //storing values in variables

  $email=$_POST['email'];
  $pass=$_POST['pass'];

  //validating the required conditions

  if(empty($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<script>alert('Invalid Email Format')</script>";
  }

  else{
    //starting sessions

    $store="SELECT * FROM login WHERE email='$email' AND pass='$pass'";
    $result=$conn->query($store);
      if($result->num_rows>0===TRUE){
        session_start();
        $_SESSION['email']=$_POST['email'];
        $_SESSION['login_string']="You've now entered the welcome page.";
        header("LOCATION:welcome.php");
      }
      else 
         {
            // echo "Error: " . $store . "<br>" . $conn-> error;
            echo "<script>alert('Sorry, Invalid Email or Password.')</script>";
         }
  }
  }
  else{
    
  }

?>