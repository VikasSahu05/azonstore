<?php
include "connection.php";
$emailId=$conn -> real_escape_string($_POST['email']);
$pass=$conn -> real_escape_string(md5($_POST['pass']));
$query = "SELECT * FROM  user where email='$emailId' AND pass='$pass'";
$query1 = "SELECT name FROM  user where email='$emailId' AND pass='$pass'";
$result =mysqli_query($conn,$query);
$result1 =mysqli_query($conn,$query1);
$userNameArray=mysqli_fetch_assoc($result1);

// mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
    $userName=$userNameArray["name"];
    $response["resp"]="success";
    $response['name']=$userName;
    echo json_encode($response);
}
else{
    $response["resp"]="fail";
    echo json_encode($response);
}
?>