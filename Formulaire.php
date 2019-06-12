<!DOCTYPE html>

<html>

<head>
	<title> Zumba </title> <!-- titre de l'onglet du naviguateur-->
		<meta charset="utf8">
		<meta name="copyright" content="copyright 2019">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <link rel='stylesheet' href='ressources/style_inscription.css' type='text/css' media='all'>
</head>
<body>

<?php

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$adresse = $_POST['Adresse'];
$cp = $_POST['Cp'];
$ville = $_POST['Ville'];
$tel = $_POST['Tel'];
$mdp = $_POST['MDP'];
$mdpcomfirm = $_POST['MDPCONFIRM'];
$mail = $_POST['Mail'];
$photo = $_POST['Photo'];

//connexion à la bdd
include("sql_connect.php");

$result = $bdd->prepare('SELECT  MAIL_ADHERENT FROM adherent WHERE MAIL_ADHERENT= :mail');
$result->bindValue(':mail', $mail, PDO::PARAM_STR);
$result->execute();
//print_r($result); die();

$tab_mail = array();
while ($data=$result->fetch()) {
    $tab_mail[]=$data['MAIL_ADHERENT'];
}
$number=$result->rowCount();
$mailbdd=0;
for ($i=0; $i<$number; $i++) {
     $mailbdd=$tab_mail[$i];
} if (strtolower($mail) == strtolower($mailbdd)) { //On vérifie si mail est déjà existant dans la bdd
          echo "<div id='message'> <br>
          <img src='ressources/images/flat.png'/> <br> <br>
          Oups, cette adresse e-mail est déjà utilisée.
          </div>";
          echo '<meta http-equiv="refresh" content= "5; URL=inscription.php">';
} elseif ($_POST['MDP'] != $_POST['MDPCONFIRM']) { //On vérifie que les mdp sont identiques
    echo "<div id='message'> <br>
          <img src='ressources/images/flat.png'/> <br> <br>
          Oups, les deux mots de passe ne sont pas identiques.
          </div>";
          echo '<meta http-equiv="refresh" content= "5; URL=inscription.php">';
} else {
    $mdp_crypte = password_hash($mdp, PASSWORD_DEFAULT); //Fonction passwordhash

    //requete preparée insertion sql
    $result = $bdd->prepare('INSERT INTO adherent (NOM_ADHERENT, PRENOM_ADHERENT, ADRESSE_ADHERENT, CP_ADHERENT, VILLE_ADHERENT, TEL_ADHERENT, MAIL_ADHERENT, MDP_ADHERENT, PHOTO_ADHERENT)
                             VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $result->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $mail, $mdp_crypte, $photo));

    $result->closeCursor();
};

?>

</body>

</html>