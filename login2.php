<?php
if(isset($_POST["submit"])){
    $nomeutente = $_POST["username"];
    $pword = $_POST["password"];

include_once( "database.php");
include_once( "user_function.php");

if(emptyInputlogin($nomeutente, $pword) !==false){
    // header("Location: login.html"); //da modificare
    echo"errore input login";
     exit();
 }
 LoginUser($con,$nomeutente,$pword)
}
else{
    // header("Location: login.html"); //da modificare
    echo"errore ";
     exit();
}