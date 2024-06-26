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
            <a href="login_form.php"><h1>KLIPS</h1></a>
            <nav>
                <a href="#" class="active">Login</a>
                <a href="registrazione_form.php">Registrati</a>
                <a href="#">Cosa è KLIPS?</a>
            </nav>
        </header>
    
        <video autoplay muted loop id="video-bg">
            <source src="Grafiche/video-background.mp4" type="video/mp4">
        </video>
    
        <div class="logomobile-container">
            <h2>KLIPS</h2>
        </div>
    
    
    
        <div class="login-container">
            <div class="logo-container">
                <img src="Grafiche/logo512.png" alt="Logo">
            </div>
    
        <div class="login-container">
            <div class="login-form" style="display: block;">
                <h2>Login</h2>
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="username">Username <span class="err-mex">  <?php

                        if(isset($_GET["error"])){
                           
                            if($_GET["error"]== "userExist"){
                                echo"Utente non trovato";
                            }

                        }
                        ?></span>

                            
                        
                        
                        
                        </label>
                        <input type="text" id="username" name="username" placeholder="Inserisci username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="err-mex"><?php

                            if(isset($_GET["error"])){
                                if($_GET["error"]== "PasswordError"){
                                    echo"- Password errata";
                                }
                            }
                            ?></span>
                        
                        </label>
                        <input type="password" id="password" name="password" placeholder="Inserisci password" required>
                    </div>
                    <a href="homepage.html">
                        <button type="submit" name="submit" id = "submit"> <!--Da Cambiare in submit-->
                            <ion-icon name="log-in-outline"></ion-icon> 
                        </button>
                    </a>
                    
                </form>
                <div class="register-link">
                    <p> Non hai ancora un account? <a href="registrazione_form.php">Registrati</a></p>
                </div>
            </div>
    
         </div>
        </div>

 

    
    
    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>