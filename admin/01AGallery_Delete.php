<?php 
session_start();
include_once '../mycon.php';
$gid=$_REQUEST['gid'];
$q="delete from gallery where gid=$gid";
if($con->query($q))
{
    $_SESSION['gd']="Image has successfully removed from Gallery.";
}
else
{
    $_SESSION['gd'] = "Error : ".mysqli_error($con);
}
header("location:./01AGallery.php");
?>