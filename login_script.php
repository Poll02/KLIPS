<?php
if(isset($_POST["submit"])){
    $nomeutente = $_POST["username"];
    $pword = $_POST["password"];

include_once( "database.php");
include_once( "user_function.php");

header("Location: login_form.php?errore=userExist");

if(emptyInputlogin($nomeutente, $pword) !==false){
    header("Location: login_form.php?error=emptyInput"); //da modificare
     exit();
 }
 LoginUser($con,$nomeutente,$pword);
}
else{
    header("Location: login_form.php?error=LoginUser"); //da modificare
     exit();
}
?>