<?php
include("connection.php");
$mail=$_POST["email"];
$insertdb=mysqli_select_db($conn, "azonestore");
$insertQuery="UPDATE user SET otp=0  WHERE email='$mail'";
$res=mysqli_query($conn,$insertQuery,$insertdb);
if($res){
    $success["login"]="success";
    echo json_encode($success);
}
else{
    $success["login"]="error";
    echo json_encode($success);
}
?>