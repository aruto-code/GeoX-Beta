<?php
session_start();
include '../mycon.php';
$mid=$_REQUEST['mid'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pics/member/";
move_uploaded_file($tmp, $location.$pic);
$q="update members set pic='$pic' where mid=$mid";
if($con->query($q))
{
    $_SESSION['mpu']="Member Image has successfully updated.";
}
else
{
    $_SESSION['mpu'] = "Error : ".mysqli_error($con);
}
header("location:./01AMember_View.php?mid=$mid");
?>