<?php
include "connection.php";
$mail=$_POST["email"];
$otp=rand(100000,999999);
$insertdb=mysqli_select_db($conn, "azonestore");
$insertQuery="UPDATE user SET otp='$otp' WHERE email='$mail'";
$res=mysqli_query($conn,$insertQuery,$insertdb);
$to = $mail;
$subject = 'AzoneStore';
$message = 'Your Otp is '. $otp;
// Sendmail in PHP using mail()
if (mail($to, $subject, $message,)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Unable to send mail. Please try again.';
}
?>