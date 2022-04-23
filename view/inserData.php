<?php
include "connection.php";
    // var_dump($_POST);
    // exit();     
$fname=$conn -> real_escape_string($_POST['name']);
$phoneNo=$conn -> real_escape_string($_POST['phone']);
$emailId=$conn -> real_escape_string($_POST['email']);
$pass=$conn -> real_escape_string(md5($_POST['pass']));
$date=date("Y-m-d");
$sql = "SELECT phone FROM  user where phone='$phoneNo'";

$sql1 = "SELECT email FROM  user where email='$emailId'";
// $sql1 = "SELECT email  FROM  user where email='$emailId'";
// var_dump($sql);
$result =mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
// var_dump($result);
// $db_data=mysqli_fetch_assoc($result);
// var_dump($db_data);
if(mysqli_num_rows($result)<1 && mysqli_num_rows($result1)<1){
    $insertdb=mysqli_select_db($conn, "azonestore");
    $insertQuery="insert into user(name,phone,email,pass,created_on)
    values('$fname','$phoneNo','$emailId','$pass','$date')";
    $res=mysqli_query($conn,$insertQuery,$insertdb);
    if($res){
        $query1 = "SELECT * FROM  user where phone='$phoneNo' AND email='$emailId'";
        $result1=mysqli_query($conn,$query1);
        $userNameArray=mysqli_fetch_assoc($result1);
        $user=$userNameArray["name"];
        $email=$userNameArray["email"];
        $response["resp"]="uploaded";
        $response["name"]=$user;
        $response["email"]=$email;
        echo json_encode($response);
        
    }
    else{
        $response["resp"]="Problem";
        echo json_encode($response);
    }
}
else{
    $response["resp"]="DataExist";
    echo json_encode($response);
}

?>