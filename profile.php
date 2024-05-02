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

            <li class="list active" style="--colr: #36f43f;" data-link="profile.php">
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
            <div id="profile" class="profile">
                <h1>Profilo</h1>
                <div class="page-box-profilo">
                    <div class="signout">
                        <a href="logout.php"> 
                        <p>Esci</p>                        
                    </a>
                    </div>
                    <h2>Foto Profilo e Biografia</h2>
                    <div class="profile-info">
                        <div class="profile-pic">
                            <img src="<?php
                                if($_SESSION["foto"]==''){
                                    echo "Grafiche/default-propic.jpg";
                                }
                                else{
                                    echo $_SESSION["foto"];
                                }
                            


                            ?>" alt="Propic">
                        </div>
    
                        <div class="profile-bio">
                            <h2>Biografia</h2>
                                <p id="bio-text">

                                <?php

                                echo strval(getBio($_SESSION["id"], $con));

                                ?>

                                </p>
                        </div>
                    </div>
                    <p style="font-weight: bold;">KLIPS <span style="font-weight: normal;">Caricate:</span> <span style="color: #13f4d5;">
                
                    <?php
                    echo strval(getnKlips($_SESSION["id"], $con));
                    ?> 
                
                </span></p> 
                    <p style="font-weight: bold;">GG <span style="font-weight: normal;">Ottenuti:</span> <span style="color: #13f4d5;">
                
                    <?php
                    
                    echo strval(getnGG($_SESSION["id"], $con));
                    ?> 
                
                
                </span></p> 
                    <h2 style="margin-top: 20px;">Le tue KLIPS</h2>
                    
                    <div class="klips-grid">


                    <?php

                    if(isset($_SESSION["id"])){
                        $nklips = intval(getnKlips($_SESSION["id"], $con));
                        $klipsid = getKlipsIDs($_SESSION["id"], $con);
                        $j = sizeof($klipsid)-1;
                    }
                    

                for ($i = 0; $i<$nklips; $i++) {
                    $klipid = $klipsid[$j--];
                    $path = getKlipsPath($klipid, $con);
                    
                
                    
                       echo "<div class='prova'>
                                <video src=$path autoplay muted loop></video>
                                </a>
                                </div>";
                }

                    ?>
                        
                        
                        
                    </div>
                    
                    </div>
                </div>
            </div>

            


    </div>

    

    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>