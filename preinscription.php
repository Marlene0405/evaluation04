<!DOCTYPE html>

<html>

<head>
	<title> Evaluation 04 </title> <!-- titre de l'onglet du naviguateur-->
		<meta charset="utf8">
		<meta name="copyright" content="copyright 2019">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel='stylesheet' href='style_inscription.css' type='text/css' media='all'>
</head>

<body>
    <header>

    </header>
             <main id="conteneur_corp"> <!--Contenu de la page-->
                 <h2>Formulaire de preinscription</h2>
                    <p>Merci de remplir tous les champs du formulaire pour pouvoir vous preinscrire </p> <br>
                    <?php echo'<form method="post" action="Formulaire.php">

                        <label for="name">Nom :</label> <br>
                        <input class="case" type="text" id="NOM_ADHERENT" name="Nom" size="30" required > <br>

                        <label for="Prenom">Prénom :</label> <br>
                        <input class="case" type="text" id="PRENOM_ADHERENT" name="Prenom" size="30" required > <br>

                        <label for="Adresse">Adresse :</label> <br>
                        <input class="case" id="ADRESSE_ADHERENT" name="Adresse" size="100" required > <br>

                        <label for="Cp">CP :</label> <br>
                        <input class="case" id="CP_ADHERENT" name="Cp" size="5" required > <br>

                        <label for="Ville">Ville :</label> <br>
                        <input class="case" id="VILLE_ADHERENT" name="Ville" size="30" required > <br>

                        <label for="Tel">Tel :</label> <br>
                        <input class="case" id="TEL_ADHERENT" name="Tel" size="10" required > <br>

                        <label for="MDP"> Mot de passe :</label> <br>
                        <input class="case" id="MDP_IDENTITE" type="password" name="MDP" size="30" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins 8 caractères, 1 chiffre, 1 lettre en majuscule et en minuscule" > <br>

                        <label for="MDP"> Confirmation du mot de passe :</label> <br>
                        <input class="case" id="MDP_IDENTITE" type="password" name="MDPCONFIRM" size="30" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins 8 caractères, 1 chiffre, 1 lettre en majuscule et en minuscule" > <br> <br>

                        <label for="mail"> E-mail :</label> <br>
                        <input class="case" type="email" id="MAIL_ADHERENT" name="Mail" size="50" required > <br> <br>

                        <label for="mon_fichier"> Votre photo (JPEG ou PNG | max. 1 Mo) </label> <br>
     					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" >
                        <input type="file" id="PHOTO_ADHERENT" name="Photo" accept="image/png, image/jpeg" required> <br>

                        <button class="button" type="submit">Valider</button>

                        </form>'?>
            </main>
    <footer>

    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>

</html>
