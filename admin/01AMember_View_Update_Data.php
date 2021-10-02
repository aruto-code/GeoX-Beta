<?php
session_start();
include '../mycon.php';
$mid=$_REQUEST['mid'];
$name = $_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$about = $_REQUEST['about'];
$post = $_REQUEST['post'];
$q="update members set name='$name',email='$email',mobile='$mobile',about='$about',post='$post' where mid=$mid";
if($con->query($q))
{
    $_SESSION['mud']="Member has successfully updated.";
}
else
{
    $_SESSION['mud'] = "Error : ".mysqli_error($con);
}
header("location:./01AMember_View.php?mid=$mid");
?>