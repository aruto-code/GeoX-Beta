<?php

if(session_id() == '' || !isset($_SESSION)) {
    header("location: /login.php");
}



?>