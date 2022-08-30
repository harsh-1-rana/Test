<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$mail=$_POST['semail'];
   
    if (empty($mail)||!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format')</script>";
    }
    else{
        require '/usr/share/php/libphp-phpmailer/src/PHPMailer.php';

        require '/usr/share/php/libphp-phpmailer/src/SMTP.php';

        //Declaring the object of PHPMailer.

        $email = new PHPMailer\PHPMailer\PHPMailer();

        //Now ready to set configurations to send an email

        $email->IsSMTP();

        $email->SMTPAuth = true;

        $email->SMTPSecure = 'ssl';

        $email->Host = "smtp.gmail.com";

        $email->Port = 465;

        //setting the gmail address that will be used for sending the mail

        $email->Username = "harsh.rana@opensenselabs.com";

        //setting the valid password for mail

        $email->Password = "Harshsingh@123";

        //set the sender email address

        $email->SetFrom("harsh.rana@opensenselabs.com");

        //set the receiver email address

        $email->AddAddress("$mail");

        //set the subject

        $email->Subject = "NewsLetter Testing";

        //setting the contents for email

        $email->Body = "Thank You for subscribing to our newsletter";

        //adding a dummy attachment pdf

        $email->addAttachment('dummy.pdf');

        //checking if email has been sent or not

        if($email->Send()){
            echo "<script>alert('Hurray you have subscribed to our newsletter');</script>";
        }

    }
} 

else{

}

?>




