<?php require_once("../assoc.php");  require_once("../mycon.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
          body{
    background: url(./assets/img/city.jpg);
    background-size: cover;
    margin:0;
    padding:0;
    font-family:poopins; 
}
.header{
    width:100%;
    height: 150vh;
}
.main{
    width:50%;
    background:rgba(0,0,0,.7);
    color:#ffffff;
    text-align:center;
    padding:50px;
    font-size: 18px;
    position:absolute;
    top:55%;
    left:50%;   
    transform:translate(-50%,-50%);
}
.main span{
    color:#f5bb00;
}
.vid-bg{
    min-width: 100%;
    min-width: 100%;
}
</style>
<center><h1><u>Attendance of Employee</u></h1></center>
        
    <div class="header">
     <div class="main">

<a href="./01Ehome.php">Go Home</a>

<?php

$sql = "SELECT login_time, logout_time FROM users where id = ".(int)$_SESSION['user_id'];
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$last_login = $row["login_time"];
$last_logout = $row["logout_time"];

$sql = "SELECT hours FROM user_hours where id = ".(int)$_SESSION['user_id'];
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

//$hours_count = $row["hours"];

?>

<table>
    <tr>
        <td>Last Login</td>
        <td><?php echo $last_login;?></td>
    </tr>
    <tr>
        <td>Last Logout</td>
        <td><?php echo $last_logout;?></td>
    </tr>
    <tr>
        <td>Todays hours completed</td>
      <!-- <td><?php echo $hours_count;?></td> -->
    </tr>
</table>
 </div>
 </div>


</body>
</html>