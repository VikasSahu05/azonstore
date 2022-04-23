<?php
include "connection.php";
// var_dump($_POST);
if($_POST){
    $id=$conn -> real_escape_string($_POST['id']);
    $fname=$conn -> real_escape_string($_POST['name']);
    $phoneNo=$conn -> real_escape_string($_POST['phone']);
    $emailId=$conn -> real_escape_string($_POST['email']);
    $pass=$conn -> real_escape_string($_POST['pass']);
    $sql = "SELECT * FROM  user where id='$id'";
    $result =mysqli_query($conn,$sql);
    $db_data=mysqli_fetch_assoc($result);
if($pass==$db_data["pass"]){
    $updateQuery="UPDATE user SET name='$fname',phone='$phoneNo',email='$emailId',pass='$pass' WHERE id='$id'";
    $result =mysqli_query($conn,$updateQuery);
    // var_dump($result);
    $sql1 = "SELECT name FROM  user where id='$id'";
    $result1 =mysqli_query($conn,$sql1);
    $db_data1=mysqli_fetch_assoc($result1);
    $db_data1["name"];
    $data['name']=$db_data1["name"];
    // echo json_encode($result);
    echo json_encode($data);
}
else{
    $passHash=$conn -> real_escape_string(md5($_POST['pass']));
    $updateQuery1="UPDATE user SET         
    name='$fname',
    phone='$phoneNo',
    email='$emailId',
    pass='$passHash',
    WHERE id='$id'";
    $result =mysqli_query($conn,$updateQuery1);
    echo json_encode($result);
}
}
?>