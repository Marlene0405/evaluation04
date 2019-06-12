<?php
//connexion à la base de données
/*$mysql_serveur = "localhost";
$mysql_pseudo = "root";
$mysql_pass = "";
$mysql_bdd = "lhtuto";

$bdd= new mysqli ($mysql_serveur, $mysql_pseudo, $mysql_pass, $mysql_bdd);
if ($bdd->connect_errno)
{
    echo "Echec lors de la connexion à MySQL :
    (". $bdd->connect_errno . ") " . $bdd->connect_error;
}*/


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=zumba','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (Exeption $e)
{
    die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo()));
}
//echo "connexion à la bdd <br />";
?>