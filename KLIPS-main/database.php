<?php

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "klips";



// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

if(!$con){
    die("connection failed");
}
?>