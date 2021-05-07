<html>
    <head>
        <meta charset="utf-8">
        <!-- the CSS file -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style="color:#fff">
        <div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- Test if the user is connected to propose logout -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_destroy();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // Show hello message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
            
        </div>
    </body>
</html>