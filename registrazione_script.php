<?php


include_once( "database.php");
include_once( "user_function.php");
if(isset($_POST["submit"])){
    $nomeutente = $_POST["username"];
    $pword = $_POST["password"];
    $email = $_POST["email"];
    $pwordr = $_POST["passwordrepeat"];
   
        if(emptyInputSignup($nomeutente, $pword,$email,$pwordr) !==false){
           header("Location: registrazione_form.php?error=emptyInput"); //da modificare
            exit();
        }
        if(invalidUid($nomeutente) !==false){
            header("Location: registrazione_form.php?error=invalidUserId"); //da modificare
            exit();
        }
        if(invalidEmail($email) !==false){
            header("Location: registrazione_form.php?error=invalidEmail"); //da modificare
            exit();
        }
        if(pwdNotMatching($pword,$pwordr) !==false){
            header("Location: registrazione_form.php?error=pwdNotMatching"); //da modificare
            exit();
        }
        if(userExist($con,$nomeutente, $email) !== false){
            header("Location: registrazione_form.php?error=userExist"); //da modificare
            exit();
        }
        create_user($con,$nomeutente,$pword,$email);
    }
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Grafiche/favicon.png" type="image/png">
    <link rel="icon" href="Grafiche/favicon.png" type="image/png">
    <title>KLIPS - Condividi i tuoi momenti migliori</title>
</head>

<body>
    <header>
        <h1>KLIPS</h1>
        <nav>
            <a href="login_form.php">Login</a>
            <a href="registrazione_form.php" class="active">Registrati</a>
            <a href="#">Cosa è KLIPS?</a>
        </nav>
    </header>

    <video autoplay muted loop id="video-bg">
        <source src="Grafiche/video-background.mp4" type="video/mp4">
    </video>

    <div class="login-container">

    <div class="login-container">
        <div class="login-form" style="display: block;">
            
            

            <div class="registration-success" ">
                <h1>Registrazione effettuata con successo!</h1>
                <ion-icon name="thumbs-up-outline"></ion-icon>
                <p><a href="login_form.php">Prova subito il tuo nuovo account</a></p>
            </div>

        </div>

     </div>
    </div>
    
    <!--<script src="main.js"></script>  Assicurati di includere il tuo script JavaScript qui -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>




