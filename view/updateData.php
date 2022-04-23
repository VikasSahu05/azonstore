<?php
include "connection.php";
// var_dump($_POST);
$id=$conn -> real_escape_string($_POST['id']);
$city=$conn -> real_escape_string($_POST['city']);
$address=$conn -> real_escape_string($_POST['address']);
$pin=$conn -> real_escape_string($_POST['pin']);
$state=$conn -> real_escape_string($_POST['state']);
$country=$conn -> real_escape_string($_POST['country']);
    $updateQuery="UPDATE user SET         
    user_address='$address',
    user_pincode='$pin',
    user_city='$city',
    user_state='$state',
    user_country='$country'  WHERE id='$id'";
    $result =mysqli_query($conn,$updateQuery);
    $sql1 = "SELECT name FROM  user where id='$id'";
    $result1 =mysqli_query($conn,$sql1);
    $db_data1=mysqli_fetch_assoc($result1);
    $db_data1["name"];
    $data['name']=$db_data1["name"];
    // echo json_encode($result);
    echo json_encode($data);

?>