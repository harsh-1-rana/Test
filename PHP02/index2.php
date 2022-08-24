<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style><?php include "style.css" ;?></style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<title>formPageValidation</title>
</head>
<body>
<?php include 'validate.php'; ?>
<section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5    cardCustom">
        <div class="heading">
            <img class="img1" src="head.png" alt="headerfile">
             <h1 class="headingTitle"><strong>DEV COMMUNITY</strong></h1>
             <h5 class="loginTitle"><strong>LOGIN</strong></h5>
        </div>
        <div class="body_box">
        <div style="margin-left: 10%;">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color:#08b6b6bd;;"><strong>REGISTRATION PAGE</strong></h3>
            <form method="post">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" placeholder="FIRST NAME" name="fname" required>
                    <span class="error"><?php echo $fnerror;?><span><br>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" placeholder="LAST NAME" name="lname" required/>
                    <span class="error"><?php echo $lnerror;?><span><br>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="uname" placeholder="USER NAME" name="uname" required/>
                    <span class="error"><?php echo $unerror;?><span><br>
                </div>
               </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" placeholder="EMAIL" name="email" required/>
                    <span class="error"><?php echo $e_error;?><span><br>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" id="gender" name="gender" class="form-control form-control-lg" placeholder="GENDER" required/>
                    <span class="error"><?php echo $gerror;?><span><br>
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" placeholder="PHONE NUMBER" name="phone" required/>
                    <span class="error"><?php echo $perror;?><span><br>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="date" id="dateofbirth" class="form-control form-control-lg" placeholder="DATE OF BIRTH" name="dob" required />
                    <!-- <span class="error"><span><br> -->
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" id="nation" class="form-control form-control-lg" placeholder="NATIONALITY" name="nationality" required/>
                    <span class="error"><?php echo $nerror;?><span><br>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <input type="text" id="profileimg" class="form-control form-control-lg" placeholder="PROFILE IMAGE"/><br>
                </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <label class="form-label select-label">UPLOAD IMAGE &ensp;<i class="fa-solid fa-upload" style="color:rgba(0, 255, 255, 0.714)";></i></label>
                    <input type="file" name="file" id="file" name="profImg" required><br>
                  </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" /><br>
              </div>
            </form>
          </div>
          <div>
          <img src="office.jpg" class="img-fluid" alt="Sample image">
          </div>
      </div>
            <div class="bottom">
                <div >
                <h2 class="bottomTitle"><strong>SUBSCRIBE TO OUR NEWSLETTER</strong></h2>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" placeholder="EMAIL" />
                </div>
                <div class="mt-4 pt-2">
                   <input class="btn btn-primary btn-md" type="submit" value="Submit" disabled/>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>