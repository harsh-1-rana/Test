<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<title>COOKIES</title>
<style>
    <?php include 'style.css';
    ?>
</style>
</head>
<body>
<?php include 'validate.php';   ?>
<section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5    cardCustom">
        <div class="top">
            <img class="logo" src="head.png" alt="headerfile">
             <h1 class="topHeading"><strong>DEV COMMUNITY</strong></h1>
        </div>
    <div class="container">
        <?php
              
              if (!isset($_COOKIE["cookiename"]))
               {
                echo '<h2 class="main"><strong>To Hear More From Us <br> Do Subscribe to Our Newsletter</strong></h2>'; 

               }
               else
               {
                echo '<h2 class="main"><strong>Thanks for connecting with us:  <br></strong>
                <center>'.$_COOKIE["cookiename"].'</center></h2>';
                echo '<center>Your cookie value is:'.$_COOKIE["cookiename"].'<center>';
               }
     ?>
    </div>

            <div class="bottom">
              <form method="POST">
              
                <div >
                <h2 class="bottomTitle"><strong>SUBSCRIBE TO OUR NEWSLETTER</strong></h2>
                </div>
                <div class="col-md-3 mb-4 pb-2">
                    <input type="text"  class="form-control form-control-lg" placeholder="NAME" name="name" required/>
                    <span class="error"><?php echo $nerror;?><span>
                </div>
                <div class="col-md-3 mb-4 pb-2">
                    <input type="email" id="email" class="form-control form-control-lg" placeholder="EMAIL" name="email" required/>
                    <span class="error"><?php echo $e_error;?><span>
                </div>
                <div class="mt-6 pt-2">
                   <input  class="submitButton" type="submit" value="Submit" />
                </div>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>