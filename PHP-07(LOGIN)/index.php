<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<title>loginPage</title>
<style>
    <?php include 'style.css';
    ?>
</style>
</head>
<body>
  <?php include 'validate.php'?>
<section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5    cardCustom">
        <div class="heading">
            <img class="img1" src="head.png" alt="headerfile">
             <h1 class="headingTitle"><strong>DEV COMMUNITY</strong></h1>
        </div>
        <div class="body_box">
        <div style="margin-left: 40%;margin-top: 30%;">
            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color:#08b6b6bd;margin-left: -7%;"><strong>LOGIN</strong></h2>
            <form method="post">
              <div class="row">
                  <div class="form-outline ">
                    <br>
                  <input type="text" placeholder="EMAIL" name="email" class="inputData" required><br>
                  <span class="error">* <?php echo $e_error;?></span>
                  <br>
                  </div>
                  <div class="form-outline">
                  <input type="password" placeholder="PASSWORD" name="pass" class="inputData" required><br>
                  <span class="error">* <?php echo $perror;?></span>
                  <br><br>
                  </div>
              </div>
              <div class="mt-4 pt-2">
                <input  type="submit" value="SUBMIT" class="submitButton"/>
              </div>
            </form>
          </div>
          <div>
          <img src="img.jpg" class="img-fluid indexBackg" alt="Sample image">
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