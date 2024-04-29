<?php

include_once( "database.php");
include_once( "user_function.php");

    if(isset($_POST["submit"])){
        $nomeutente = $_POST["username"];
        $pword = $_POST["password"];
        $email = $_POST["email"];
        $pwordr = $_POST["passwordrepeat"];
        if(emptyInputSignup($nomeutente, $pword,$email,$pwordr) !==false){
           // header("Location: registrazione.html"); //da modificare
           echo"errore inputsignup";
            exit();
        }
        if(invalidUid($nomeutente) !==false){
            //header("Location: registrazione.html"); //da modificare
            echo "errore invalid uid";
            exit();
        }
        if(invalidEmail($email) !==false){
            //header("Location: registrazione.html"); //da modificare
            echo "errore invalid email";
            exit();
        }
        if(pwdNotMatching($pword,$pwordr) !==false){
            //header("Location: registrazione.html"); //da modificare
            echo "errore pwd matching";
            exit();
        }
        if(userExist($con,$nomeutente, $email) !== false){
            echo"porcodio";
            exit();
        }
        create_user($con,$nomeutente,$pword,$email);



    }
