<?php
session_start();
include '../mycon.php';
$title=$_REQUEST['title'];
$gid = $_REQUEST['gid'];
$category = $_REQUEST['category'];
$about = $_REQUEST['about'];
$q="update gallery set title='$title',about='$about',category='$category' where gid=$gid";
if($con->query($q))
{
    $_SESSION['gu']= "Gallery Information has successfully updated.";
}
else
{
    $_SESSION['gu']= "Error : ".mysqli_error($con);
}
header("location:./01AGallery_View.php?gid=$gid");
?>