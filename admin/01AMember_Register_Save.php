<?php
session_start();
include '../mycon.php';
$name = $_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$about = $_REQUEST['about'];
$post = $_REQUEST['post'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pics/member/";
move_uploaded_file($tmp, $location.$pic);
$q="insert into users (name,email,mobile,post,pic,about)values('$name','$email','$mobile','$post','$pic','$about');";
if($con->query($q))
{
    $_SESSION['ms']="Member has successfully saved.";
}
else
{
    $_SESSION['ms'] = "Error : ".mysqli_error($con);
}
header("location:./01AMember.php");
?>