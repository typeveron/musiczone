<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Toronto");

    $con =  mysqli_connect("localhost:3306", "root", "", "musiczonedb");

    if (mysqli_connect_errno()) {
        echo "Failed to connect: " .  mysqli_connect_errno();
    }


?>