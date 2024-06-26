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
    <div class="navigation"> 
        <div class="menuLogo">
            <img src="Grafiche/logo512.png" type="image/png" alt="Logo">
        </div>
        <ul>
            <li class="list active" style="--colr: #368ff4;" data-link="homepage.php">
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
            <li class="list" style="--colr: #13f4d5;" data-link="find.php">
                <a href="#">
                    <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                    <span class="text">Cerca</span>
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
            <div id="home" class="homepage">
                <h1>Homepage</h1>
                <div class="page-box">
                    <div class="homepage-grid">
                        <div class="homepage-grid-box">
                            <video src="Grafiche/video-background.mp4" id="post-video" ></video>
                            <div class="dettagli-post">
                                <img src="Grafiche/propic.jpg" id="propic-homepage"><span><h3 style="color: #1f1c37; font-size: 17px;">Nome Utente </h3></span>
                                <a href="find.html"><p id=post-game>Nome Gioco</p></a>
                                <button type="button" id="gg-button">GG! <span>100</span></button> 
                            </div>   
                        </div>

                        <div class="homepage-grid-box">
                            <video src="Grafiche/video-background.mp4" id="post-video" ></video>
                            <div class="dettagli-post">
                                <img src="Grafiche/propic.jpg" id="propic-homepage"><span><h3 style="color: #1f1c37; font-size: 17px;">Nome Utente </h3></span>
                                <a href="find.html"><p id=post-game>Nome Gioco</p></a>
                                <button type="button" id="gg-button">GG! <span>100</span></button> 
                            </div>   
                        </div>

                        <div class="homepage-grid-box">
                            <video src="Grafiche/video-background.mp4" id="post-video" ></video>
                            <div class="dettagli-post">
                                <img src="Grafiche/propic.jpg" id="propic-homepage"><span><h3 style="color: #1f1c37; font-size: 17px;">Nome Utente </h3></span>
                                <a href="find.html"><p id=post-game>Nome Gioco</p></a>
                                <button type="button" id="gg-button">GG! <span>100</span></button> 
                            </div>   
                        </div>

                        <div class="homepage-grid-box">
                            <video src="Grafiche/video-background.mp4" id="post-video" ></video>
                            <div class="dettagli-post">
                                <img src="Grafiche/propic.jpg" id="propic-homepage"><span><h3 style="color: #1f1c37; font-size: 17px;">Nome Utente </h3></span>
                                <a href="find.html"><p id=post-game>Nome Gioco</p></a>
                                <button type="button" id="gg-button">GG! <span>100</span></button> 
                            </div>   
                        </div>

                        
                        
                        
                        
                        
                    
                    
                    
                    </div>
                </div>
                    

    

    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>