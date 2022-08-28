<?php
require("connect.php");
?>

<?php
$id=$_GET['id'];


$sql="DELETE FROM PHP_CRUD WHERE id='$id'";

if($conn->query($sql)===TRUE){
    echo "<script>alert('Record deleted sucessfully');</script>";
    header('Refresh: 2; URL=index.php');
}
?>