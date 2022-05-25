<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Congo-B-Exchange.css">
    <style type="text/css">  
        .button {
            font-weight: bold;
            font-size: 20px;
                }

        .Propriétés {  
            font-weight: bold;
            font-size: 25px;
                }

        a {
            font-size: 20px;
            color: black;
                }

        #Souscript{
            margin: auto;
            margin-top: 10%;
            width: 50%;
            background-color: antiquewhite;
            opacity: 0.8;
                }

        label{
            width: 100%;
                }

        .InsSubmit{
            width: 30%;
            margin-right: 0px;
            font-size: larger;
                }

        #horloge{
            margin-top: 0;
                }
    </style>
    <title>Inscriptions</title>
</head>
<body>
    <header>
        <span id="horloge"></span>
    </header>
    <br>
    <br>
    <button class="Returns" type="submit"><a class="ReturnsLinks" href="../connexion.php">Retour a la page de connexion</a></button>
    <br>
    <h1 id="Intro">Inscritpions</h1>
    <div class="QCMINS">
        <form id="Souscript" method="POST" action="./inscmembchecking.php">
            <div>
                <label for="nom">Votre Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Nom" maxlength="10">
            </div>
            <div>
                <label for="prenom">Votre Prénom :</label>
                <input type="text"  name="prenom" id="prenom" placeholder="Prénom" maxlength="10">
            </div>
            <div>
                <label for="birthdate">Votre date de naissance :</label>
                <input type="date"  name="birth_date" id="birth_date" placeholder="(2021-09-26)"> 
            </div>
            <div>
                <label for="email">Votre Adresse E-mail :</label>
                <input type="email"  name="email" id="email" placeholder="Adresse E-mail">
            </div>
            <div>
                <label for="pseudo">Créer votre Pseudo :</label>
                <input type="text"  name="pseudo" id="pseudo" placeholder="Pseudo" maxlenght="20">
            </div>
            <div>
                <label for="fungola">Mot de passe:</label>
                <input type="password"  name="fungola" id="fungola" placeholder="password" maxlength="20">
            </div>
            <div>
                <label for="fungolaconfirm">Confirmez le Mot de passe:</label>
                <input type="password" name="fungolaConfirm" id="fungolaConfirm" placeholder="password confirm" maxlength="65">
            </div>
            <div>
                <button class="InsSubmit" type="submit">Valider</button>
            </div>    
        </form>
    </div>
    <script src="Inscriptions.js"></script>
<?php
    include '../template_calling/footer.php';
    ?>