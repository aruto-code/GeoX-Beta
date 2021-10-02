<?php

session_start();

if(session_id() == '' || !isset($_SESSION['user_id'])) {
    header("location: /login.php");
}



?>