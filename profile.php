<?php
session_start();
require_once("mycon.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
</head>
<body>
	 <style type="text/css">
          body{
    background: url(./admin/assets/img/bg2.jpg);
    background-size: cover;
    margin:0;
    padding:0;
    font-family:poopins; 
}
.box{
    box-sizing:border-box;
    width:153px;
    height:163px;
    border:2px solid #3498db;
    box-shadow: -3px -3px 7px #ffffff73,
                3px 3px 5px rgba(0,0,0,0.7);
                border-radius:5px;
                background-color:#ffffff;
                margin-top:50px;
                overflow:hidden;
                transition: all 1s;
    }
    img
    {
        box-sizing:border-box;
        width:149px;
        height: 149px;
        border-radius:50%;
        margin:0;
        border:5px solid #0082e6;
        padding:0px;
        background-color:white;
                transition: all 1s;

            }
label{
                box-sizing:border-box;
                font-size: 20px;
                background-color:#ffffff;
                color:white;
                border:1px solid #3498db;
                padding: 2px 15px;
                border-radius:5px;
                transition:all 0.3s;

            }
            label:hover{
                background-color:#3498db;
                color:black;
            }
            .box:hover{
                width:360px;
                height: 500px;
                border-radius:5px; 
            }
            .box:hover img{
                width:50px
                height:50px;
                margin:20px 31%;

            }
            input[type="file"]{
                display:none;
            }
            label{
                box-sizing:border-box;
                font-size: 20px;
                background-color:black;
                color:white;
                border:1px solid #3498db;
                padding: 2px 15px;
                border-radius:5px;
                transition:all 0.3s;

            }
        }
</style>
<center><h1><u>Profile of Employee</u></h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="box">
      <input type="file" name="" id="file" accept="image/*">
        <label for="file">EDIT PIC</label> 
          <img src="gallery1/team-4.jpg">
       </form> 
    
	<?php
	$result = mysqli_query($con, "Select * from users where Id=".$_SESSION['user_id'].";");
$row = mysqli_fetch_assoc($result);
$Name= $row['name'];
$Email=$row['email'];
$Mobile=$row['mobile'];
?>

        <h3>Employee Name:</h3>
        
        <?php echo $Name;?>
        <h3>Email:</h3>
        <?php echo $Email;?></td>
    
       <h3> Mobile No.:</h3>
        <?php echo $Mobile;?>
    
</div>
</center>
</body>
</html>