<?php
require_once "login.php";
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // MySQL connect
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'checkin';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    //two fonctions mysqli_real_escape_string and htmlspecialchars
    // to protect against any type of injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM login where 
              email = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // if the login and password is correct ones
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // login or password is not correct
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // login or password is empty
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // to destroy the DB connection 
?>