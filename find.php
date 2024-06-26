<?php


session_start();

if(!isset($_SESSION["id"])){
    header("Location: login_form.php");
    
}
include_once( "database.php");
include_once( "user_function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="Grafiche/favicon.png" type="image/png">
    <link rel="icon" href="Grafiche/favicon.png" type="image/png">
    <title>KLIPS - Condividi i tuoi momenti migliori</title>
</head>
<body>
    <div class="navigation">
        <div class="menuLogo">
            <img src="Grafiche/logo512.png" type="image/png" alt="Logo">
        </div>
        <ul>
            <li class="list" style="--colr: #368ff4;" data-link="homepage.php">
                <a href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home</span>
                </a>
            </li>

            <li class="list" style="--colr: #36f43f;" data-link="profile.php">
                <a href="#">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="text">Profilo</span>
                </a>
            </li>
            <li class="list active" style="--colr: #13f4d5;" data-link="find.html">
                <a href="#">
                    <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                    <span class="text">Messaggi</span>
                </a>
            </li>

            <li class="list" style="--colr: #de36f4;" data-link="addKlip.html">
                <a href="#">
                    <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                    <span class="text">Nuovo</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="page-content">
            <!-- Contenuto della pagina -->
            <div id="find" class="find">
                <h1>Cerca</h1>
                <div class="page-box-find">
                    <h2>Cerca per Gioco</h2>
                    <div class="games-grid">
                        <div class="games-grid-box">
                            <img src="Grafiche/league-banner.jpg">
                            <h3 style="color: #377D7B; font-size: 17px;">League of Legends</h3>
                            <p style="color: #1f1c37;">
                            
                            <?php

                            $game = "league";
                            echo strval(getnKlipsByGames($con, $game));

                            ?>
                            
                            <span style="font-weight: bold; color: #1f1c37;">KLIPS</span>
                        </div>
                        <div class="games-grid-box">
                            <img src="Grafiche/overwatch-banner.jpeg">
                            <h3 style="color: #377D7B; font-size: 17px;">Overwatch</h3>
                            <p style="color: #1f1c37;">
                            
                            <?php

                            $game = "overwatch";
                            echo strval(getnKlipsByGames($con, $game));

                            ?>
                            
                            <span style="font-weight: bold; color: #1f1c37;">KLIPS</span>
                        </div>
                        <div class="games-grid-box">
                            <img src="Grafiche/battlefield-banner.jpeg">
                            <h3 style="color: #377D7B; font-size: 17px;">Battefield</h3>
                            <p style="color: #1f1c37;">
                            
                            <?php

                            $game = "battlefield";
                            echo strval(getnKlipsByGames($con, $game));

                            ?>

                            <span style="font-weight: bold; color: #1f1c37;">KLIPS</span>
                        </div>
                        <div class="games-grid-box">
                            <img src="Grafiche/cod-banner.jpeg">
                            <h3 style="color: #377D7B; font-size: 17px;">Call of Duty</h3>
                            <p style="color: #1f1c37;">
                            
                            <?php

                            $game = "cod";
                            echo strval(getnKlipsByGames($con, $game));

                            ?>
                            
                            <span style="font-weight: bold; color: #1f1c37;">KLIPS</span>
                        </div>
                        <div class="games-grid-box">
                            <img src="Grafiche/fortnite-banner.jpeg">
                            <h3 style="color: #377D7B; font-size: 17px;">Fortnite</h3>
                            <p style="color: #1f1c37;">
                            
                            <?php

                            $game = "fortnite";
                            echo strval(getnKlipsByGames($con, $game));

                            ?>
                            <span style="font-weight: bold; color: #1f1c37;">KLIPS</span>
                        </div>
                        <div class="games-grid-box">
                            <img src="Grafiche/PROPONI.png">
                        
                        </div>
                        
                    </div>
                    <h2>Cerca per Utente</h2>
                    <div class="id-search">
                        <input type="text" name="idsearch" id="idsearch" placeholder="Inserisci nome utente">
                    </div>
                    <hr style="margin-top: 20px;" class="solid">

                </div>
            </div>

            


    </div>

    

    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>