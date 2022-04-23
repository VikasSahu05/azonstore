<?php
include("connection.php");
var_dump($_POST);
$seller_name=$conn->real_escape_string($_POST['seller_name']);
$seller_category=$conn->real_escape_string($_POST['seller_category']);
$seller_phone=$conn->real_escape_string($_POST['seller_phone']);
$seller_email=$conn->real_escape_string($_POST['seller_email']);
$seller_aadhar=$conn->real_escape_string($_POST['seller_aadhar']);
$seller_pan=$conn->real_escape_string($_POST['seller_pan']);
$seller_gst=$conn->real_escape_string($_POST['seller_gst']);
$seller_tc=$conn->real_escape_string($_POST['seller_tc']);

?>