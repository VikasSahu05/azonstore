<?php
include "connection.php";
// var_dump($_POST);
$emailId=$_POST['otpEmail'];
$email=$emailId["email"];
$otp=$_POST['otp'];
// var_dump($otp);
$query1 = "SELECT otp FROM  user where email='$email'";
$result1 =mysqli_query($conn,$query1);
$userOtpArray=mysqli_fetch_assoc($result1);
// var_dump($userOtpArray["otp"]);
if($userOtpArray["otp"]==$otp){
    $response["result"]="pass";
    echo json_encode($response);
}
else{
    $response["result"]="wrongOtp";
    echo json_encode($response);
}
?>