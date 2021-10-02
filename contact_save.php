<?php 
session_start();
include './mycon.php';
$name = $_REQUEST['name'];
$email=$_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message =$_REQUEST['message'];
$q="insert into contact(name,email,subject,message,duration)values('$name','$email','$subject','$message',now());";
if($con->query($q))
{
   $_SESSION['cs']="Contact has successfully saved.";
}
else
{
    $_SESSION['cs'] = "Error : ".mysqli_error($con);
}
header("location:./contact.php");
?>