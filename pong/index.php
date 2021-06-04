<!DOCTYPE html>
<html>
    <head>
        <title>RetroRoom - Pong</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- setta in una variabile di javascript lo username dell'utente -->
        <?php include "../assets/php/getUsername.php"; ?>
        <!-- jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- implementazione gioco e librerie per riuso codice create da noi -->
        <script type="text/javascript" src="../assets/javascript/geometries.js"></script>
        <script type="text/javascript" src="../assets/javascript/gameFramework.js"></script>
        <script type="text/javascript" src="pong.js"></script>
        <!-- vue.js -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script type="text/javascript" src="../assets/javascript/vueGameButtons.js"></script>
        <!-- bootstrap e fontawesome, per responsiveness e icone rispettivamente -->
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://kit.fontawesome.com/f9afe9f463.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"/>
        <!-- stylesheets -->
        <link rel="stylesheet" type="text/css" href="../assets/css/games.css"/>
        <link rel="stylesheet" type="text/css" href="pong.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/buttons.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/baseStyle.css"/>
    </head>
    <body>
        <div class="container">
            <!-- pulsanti per navigare nel sito, codice riusato grazie a vue -->
            <buttonsheader id="buttons-container" v-bind:button1="text1" v-bind:button2="text2"></buttonsheader>
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <!-- canvas che contiene il gioco -->
                    <canvas id="pong" width="800" height="600"></canvas>
                </div>
            </div>
        </div>
    </body>
</html>