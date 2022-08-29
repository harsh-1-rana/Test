<?php
  if(isset($_SESSION['email']))
  {
    
    unset($_SESSION['email']);
    session_destroy();
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<title>logoutPage</title>
<style>
    <?php include 'style.css';
    ?>
</style>
</head>
<body>
<section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5    cardCustom">
        <div class="heading">
            <img class="img1" src="head.png" alt="headerfile">
             <h1 class="headingTitle"><strong>DEV COMMUNITY</strong></h1>
             <a href="index.php"><h5 class="lastloginTitle">LOGIN</h5></a>
        </div>

<div class="lasttest">
<div class="container">
        
        <h3 class="lasttext"><strong>Glad, you visited us <br>:) <br>Come back soon..!</strong></h3>
     
     </div>
</div>

            <div class="bottom">
              <form method="POST">
                <div >
                <h2 class="bottomTitle"><strong>SUBSCRIBE TO OUR NEWSLETTER</strong></h2>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" placeholder="EMAIL" name="email" required/>
                    <label for="form-label" class="emailAddress"></label>
                </div>
                <div class="mt-4 pt-2">
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