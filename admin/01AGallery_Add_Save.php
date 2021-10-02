<?php 
session_start();
include '../mycon.php';
$title=$_REQUEST['title'];
$about = $_REQUEST['about'];
$category = $_REQUEST['category'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pics/gallery/";
move_uploaded_file($tmp, $location.$pic);
$q="insert into gallery(title,pic,about,category,duration)values('$title','$pic','$about','$category',now());";
if($con->query($q))
{
    $_SESSION['gs']="Image has successfully saved in Gallery";
}
else
{
    $_SESSION['gs']= "Error : ".mysqli_error($con);
}
header("location:./01AGallery.php");
?>