<?php
session_start();
include '../mycon.php';
$gid=$_REQUEST['gid'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pics/gallery/";
move_uploaded_file($tmp, $location.$pic);

$q="update gallery set pic='$pic' where gid=$gid";
if($con->query($q))
{
    $_SESSION['gps']="Gallery Image has success fully updated.";
}
else
{
    $_SESSION['gps'] = "Error : ".mysqli_error($con);
}
header("location:./01AGallery_View.php?gid=$gid");
?>