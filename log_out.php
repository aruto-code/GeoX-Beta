<?php
require_once("mycon.php");

session_start();

$hrs = date('H') - (int) $_SESSION['login_time'];

echo $hrs;

$query = "select id from user_hours where user_id = ".(int) $_SESSION["user_id"]." and dnt = '".date("Y-m-d")."' ";

echo $query;

$q = mysqli_query($con, $query);

echo  mysqli_num_rows($q) ;
/*function updateLogOut()
{
    if(mysqli_num_rows($q) == 0) {
        $q = mysqli_query($con, "insert into user_hours (user_id, hours, dnt) values (".(int) $_SESSION["user_id"].", 0, '".date("Y-m-d")."' ) ");
    }
    else {
        $q = mysqli_query($con, "update user_hours set hours = hours + ".$hrs." where user_id = ".(int) $_SESSION["user_id"]." and dnt = '".date("Y-m-d")."' ");
    }
}*/
 $q = mysqli_query($con, "update users set logout_time = '".date(DATE_RFC822)."' where id =1");

//$q = mysqli_query($con, "update users set logout_time = '".date(DATE_RFC822)."' where id = ".$row['id']." ");


# if condition to check if in fensing area ( update logout should run in both)

/*
if(
     ((int)$_SESSION['longitude'] - $main_long > 2 || (int)$_SESSION['longitude'] - $main_long < 2) &&
     ((int)$_SESSION['latitude'] - $main_lat > 2 || (int)$_SESSION['latitude'] - $main_lat < 2) 
 )
{
   updateLogOut();
}
*/

echo mysqli_error($con);

session_unset();
session_destroy();

header("location: /login.php");

?> 