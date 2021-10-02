<?php
session_start();

$email = $_POST['email'];
$password = MD5($_POST['password']);
$role = $_POST['role'];

if($email=="admin@gmail.com" && $password==MD5("123@123") && $role == "Admin")
{
    $_SESSION['admin']="Admin Home";
    header("location:./admin/01AHome.php");
}
elseif($role == "Employee") {
    require_once("mycon.php");
    $q = mysqli_query($con, "select id from users where email = '".$email."' and password = '".$password."' limit 1");
    if(mysqli_num_rows($q) == 1) {
        $row = mysqli_fetch_assoc($q);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['login_time'] = date('H');
        $q = mysqli_query($con, "update users set login_time = '".date(DATE_RFC822)."' where id = ".$row['id']." ");
        echo mysqli_error($con);
        header("location: ./admin/01EHome.php");
    }
    else {
        $_SESSION['fail']="Sorry Login has failed.";
        header("location:./login.php");
    }
}
else
{
    $_SESSION['fail']="Sorry Login has failed.";
  header("location:./login.php");
}
?>