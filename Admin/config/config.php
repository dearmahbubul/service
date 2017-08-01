<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "moderna";
    $con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$con){
        echo "Mysqli connect failed";
    }
?>