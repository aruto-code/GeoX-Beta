<?php

    if(isset($_GET['longitude']) && isset($_GET['latitude'])) {
        session_start();
        $_SESSION['user_longitude'] = $_GET['longitude'];
        $_SESSION['user_latitude'] = $_GET['latitude'];
    }


?>