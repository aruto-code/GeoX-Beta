<?php

require_once("mycon.php");

$email = $_POST['email'];
$password = MD5($_POST['password']);
$about = $_POST['about'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];


print_r($_POST);

$query = mysqli_query($con, "insert into users(name, email, about, mobile, password, job, post, pic) values (
  '".$name."',
  '".$email."',
  '".$about."',
  '".$mobile."',
  '".$password."',
  '',
  '',
  'https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg'
);" );

if($query) header("location: /login.php");
else echo mysqli_error($con);

?>