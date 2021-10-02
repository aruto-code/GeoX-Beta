<?php
session_start();
include '../mycon.php';
$id=$_REQUEST['id'];
$q="delete from contact where id=$id";
if($con->query($q))
{
    $_SESSION['cd']="Contact has removed.";
}
else
{
    $_SESSION['cd'] = "Error : ".mysqli_error($con);
}
header("location:./01AContact.php");
?>