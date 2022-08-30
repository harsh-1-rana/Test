<?php
    //checking if the request method is POST or not
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        echo "hii buddy";

        //validating the required conditions
        if(empty($name)||strlen($name)<3||empty($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(empty($name)){
                $nerror="Name cannot be empty";
            }
            if(strlen($name)<3){
                $nerror="Name must be atleast 3 characters";
            }
            if(empty($email)){
                $e_error="Email cannot ne empty";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $e_error="Inavalid email format";
            }
        }
        else{

            //setting up the cookies
            setcookie("cookiename","$name",time()+10);
            header("Location:index.php");
        }
}
else{
        
}
?>