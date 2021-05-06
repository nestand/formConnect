<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
    </head>
    <body style='background-image: url("https://source.unsplash.com/random/4500x500?sig=1"), z-index: 0.6, position: relative'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
            
        </div>
    </body>
</html>