<html>
    <head>
       <meta charset="utf-8">
        <!-- import of the CSS file  -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <!--Google Fonts--><link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">     
</head>
    <body>
    <body>
<video playsinline autoplay muted loop class="bgvideo" id="bgvideo">
  <source src="testbg.mp4" type="video/mp4">
</video>
        <div id="container">
            <!-- The login form -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Votre e-mail</b></label>
                <input type="text" placeholder="Entrez votre e-mail ici" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <input type="reset"  id='reset' value= 'RESET'>
                
                <!--small verification-->
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>E-mail ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>