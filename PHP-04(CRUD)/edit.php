<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        <?php include "style.css"; ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>formPageValidation</title>
</head>

<body>
<?php require 'update.php'; ?>
    <section class="vh-100 ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5    cardCustom">
                            <div class="heading">
                                <img class="img1" src="img/head.png" alt="headerfile">
                                <h1 class="headingTitle"><strong>DEV COMMUNITY</strong></h1>
                                <h5 class="loginTitle"><strong>LOGIN</strong></h5>
                            </div>
                            <div class="body_box">
                                <div style="margin-left: 10%;">
                                    <h2 class="mb-4 pb-2 pb-md-0 mb-md-5" style="tex"><strong>CUSTOMER DATA ENTRY FORM</strong></h2>
                                    <?php
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM PHP_CRUD WHERE id='$id'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $date =  date("d-m-Y", strtotime($row['dob']));


                                    ?>
                                            <form method="post">


                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input type="text" id="firstName" class="form-control form-control-lg inpClass" placeholder="FIRST NAME" name="fname" value='<?php echo $row['fname'] ?>' required><br>
                                                            <span class="error"><?php echo $fnerror; ?><span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input type="text" id="lastName" class="form-control form-control-lg inpClass" placeholder="LAST NAME" name="lname" value='<?php echo $row['lname'] ?>' required /><br>
                                                            <span class="error"><?php echo $lnerror; ?><span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline datepicker w-100">
                                                            <input type="email" id="emailAddress" class="form-control form-control-lg inpClass" placeholder="EMAIL" name="email" value='<?php echo $row['email'] ?>'required /><br>
                                                            <span class="error"><?php echo $e_error; ?><span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="date" id="form3Example4cd" name="date" class="form-control" placeholder="Date of birth" value='<?=date("d-m-Y", strtotime($row['dob'])); ?>' required />
                                                            <?php echo $date ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="nation" class="form-control form-control-lg inpClass" placeholder="NATIONALITY" name="nationality" value='<?php echo $row['nationality'] ?>' required /><br>
                                                            <span class="error"><?php echo $nerror; ?><span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">
                                                        <div class="form-outline">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">
                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <input class="btn btn-primary btn-lg" type="submit" value="Save Changes" name="update" style="margin-left: 35%;" /><br>
                                                </div>
                                        <?php }
                                    } ?>
                                </form>
                                </div>
                                <div>


                                    <table class="table">
                                        <h2 class="tableHeading">CUSTOMER DATA LIST</h2>

                                        <tr>
                                            <td>First Name</td> 
                                            <td>Last Name</td>
                                            <td>Nationality</td>
                                            <td>Email</td>
                                            <td>Date of Birth</td>
                                            <td>Operations</td>
                                        </tr>
                                        <tr>
                                            <?php
                                            $sql = "SELECT * FROM PHP_CRUD";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?>
                                                    <td><?php echo $row['fname'] ?></td>
                                                    <td><?php echo $row['lname'] ?></td>
                                                    <td><?php echo $row['nationality'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['dob'] ?></td>
                                                    <td>

                                                        <a class="edit" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                                        <a class="delete" href="delete.php?id=<?php echo $row['id'] ?>">delete</a>

                                                    </td>
                                        </tr>
                                <?php  }
                                            } ?>
                                    </table>
                                    <?php
                                    $conn->close();
                                    ?>
                                </div>
                            </div>
                            <div class="bottom">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
