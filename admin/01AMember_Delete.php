<?php
session_start();
include '../mycon.php';
$mid = $_REQUEST['mid'];
$q="delete from members where mid=$mid";
if($con->query($q))
{
    $_SESSION["md"]="Member $mid accout has been removed.";
}
else
{
    $_SESSION["md"] = "Error : ".mysqli_error($con);
}
header("location:./01AMember.php");
?>