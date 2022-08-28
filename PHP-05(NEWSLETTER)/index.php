<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<title>Form Page</title>
<style>
    <?php include 'style.css';
    ?>
</style>
</head>
<body>

<?php
    include 'validator.php';

?>
<section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5    cardCustom">
        <div class="heading">
            <img class="img1" src="img/header.php" alt="headerfile">
             <h1 class="headingTitle"><strong>DEV COMMUNITY</strong></h1>
             <h5 class="loginTitle">LOGIN</h5>
        </div>
        <div class="body_box">
        <div style="margin-left: 10%;">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color:#08b6b6bd;;"><strong>REGISTRATION PAGE</strong></h3>
            <form>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="fname" id="firstName" class="form-control form-control-lg" placeholder="FIRST NAME" /><br>
                    <span class="error"><?php echo $ferror;?><span>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="lname" id="lastName" class="form-control form-control-lg" placeholder="LAST NAME"  /><br>
                    <span class="error"><?php echo $lerror;?><span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline datepicker w-100">
                    <input type="text" name="uname" class="form-control form-control-lg" id="uname" placeholder="USER NAME" /><br>
                    <span class="error"><?php echo $uerror;?><span>
                </div>
               </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" placeholder="EMAIL"  /><br>
                    <span class="error"><?php echo $eerror;?><span>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" name="gender" id="gender" class="form-control form-control-lg" placeholder="GENDER" /><br>
                    <span class="error"><?php echo $gerror;?><span>
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" placeholder="PHONE NUMBER" /><br>
                    <span class="error"><?php echo $perror;?><span>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="date" name="dob" id="dateofbirth" class="form-control form-control-lg" placeholder="DATE OF BIRTH"  /><br>
                    
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" name="nationality" id="nation" class="form-control form-control-lg" placeholder="NATIONALITY" /><br>
                    <span class="error"><?php echo $nerror;?><span>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" id="profileimg" class="form-control form-control-lg" placeholder="PROFILE IMAGE" />
        
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <label class="form-label select-label">UPLOAD IMAGE &ensp;<i class="fa-solid fa-upload" style="color:rgba(0, 255, 255, 0.714)";></i></label>
                    <input type="file" name="pimg" id="file"   >
                    <span class="error"><?php echo $img_error;?><span>
                  </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>
            </form>
          </div>
          <div>
          <img src="img/img.jpg" class="img-fluid" alt="Sample image">
          </div>
      </div>
            <div class="bottom">
              <form method="POST">
                <div >
                <h2 class="bottomTitle"><strong>SUBSCRIBE TO OUR NEWSLETTER</strong></h2>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" placeholder="EMAIL" name="semail"x/>
                    <label for="form-label" class="emailAddress"></label>
                </div>
                <div class="mt-4 pt-2">
                   <input class="btn btn-primary btn-md" type="submit" value="Submit" />
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