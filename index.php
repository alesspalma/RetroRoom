<!DOCTYPE html>
<html>
    <head>
        <title>RetroRoom</title> 
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- vue.js -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script type="text/javascript" src="./assets/javascript/vueTitle.js"></script>
        <!-- fontawesome -->
        <script type="text/javascript" src="https://kit.fontawesome.com/f9afe9f463.js" crossorigin="anonymous"></script>
        <!-- stylesheets -->
        <link rel="stylesheet" type="text/css" href="assets/css/baseStyle.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/buttons.css"/>
    </head>
    <body>
    <!-- titolo che scorre, tramite vue -->
    <mytitle id="title-container" v-bind:text="titleText"></mytitle>
        <?php
            // messaggio di benvenuto personalizzato
            session_start();
            if (isset($_SESSION["username"])) {
                $username = $_SESSION["username"];
                echo "<div class='glow pb-2 h2'>Benvenuto $username, scegli un gioco!</div>";
            }
            else echo "<div class='glow pb-2 h2'>Benvenuto, scegli un gioco!</div>";
        ?>
        <!-- pulsanti per navigare nel sito -->
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-2 pb-2">
                    <a href="./leaderboards/index.php" class="btn btn-lg">
                        <span class="fas fa-trophy"></span>
                        Top-5
                    </a>
                </div>
                <?php include "./assets/php/profileButton.php"; ?>
            </div>
        </div>
        <!-- immagini che puntano ai giochi -->
        <div class="container myCon">
           <div class="row pb-2 justify-content-around">
               <div class="col-lg-4 myCol gif tetris">
                    <a href="tetris/index.php">
                        <img src="assets/images/tetris.jpg" alt="immagine tetris" class="image"/>
                    </a>
               </div>
               <div class="col-lg-4 myCol gif pong">
                    <a href="pong/index.php">
                        <img src="assets/images/pong.jpg" alt="immagine pong" class="image"/>
                    </a>
               </div>
           </div>
           <div class="row justify-content-around">
               <div class="col-lg-4 myCol gif snake">
                    <a href="snake/index.php">
                        <img src="assets/images/snake.jpg" alt="immagine snake" class="image"/>
                    </a>
               </div>
               <div class="col-lg-4 myCol gif breakout">
                    <a href="breakout/index.php">
                        <img src="assets/images/breakout.jpg" alt="immagine breakout" class="image"/>
                    </a>
               </div>
           </div>
        </div>
    </body>
</html>