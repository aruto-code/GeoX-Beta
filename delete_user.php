<?php
require_once("mycon.php");

mysqli_query($con, "Delete from users where Id='".$_GET['userId']."';");
mysqli_query($con,"Delete from user_hours where user_id='".$_GET['userId']."';");
?>
<script> alert('Record has been successfully deleted');
window.location.replace("/admin/01AMember.php");

</script>
