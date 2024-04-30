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
            <h2>Registrati</h2>
            <form action="registrazione_script.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Inserisci la tua mail" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Scegli il tuo username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Scegli la tua password" required>
                </div>
                <div class="form-group">
                    <label for="password">Conferma Password</label>
                    <input type="password" id="passwordrepeat" name="passwordrepeat" placeholder="Conferma la tua password" required>
                </div>
                    <button type="submit" name="submit" id="submit"  > <!--Da Cambiare in submit-->
                        <ion-icon name="log-in-outline"></ion-icon> 
                    </button>
                
            </form>
            <div class="register-link">
                <p> Hai già un account? <a href="login_form.php">Accedi</a></p>
            </div>

            <er><?php
            if(isset($_GET["error"])){
                if($_GET["error"]== "emptyInput"){
                    echo"inserire input validi";
                }
                if($_GET["error"]== "invalidUserId"){
                    echo"inserire username valido";
                }
                if($_GET["error"]== "invaliEmail"){
                    echo"inserire email valida";
                }
                if($_GET["error"]== "pwdNotMatching"){
                    echo"le due password non combaciano";
                }
                if($_GET["error"]== "userExist"){
                    echo"Username non disponibile";
                }
            }
        

            ?></er>

            <div class="registration-success" style="display: none;">
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