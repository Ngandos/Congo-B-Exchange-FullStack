<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Congo-B-Exchange.css">
    <title>Document</title>
</head>
<body>
<div class="QCMINS">
        <form id="Souscript" method="POST" action="./Insc.php">
            <div>
                <label for="nom">Votre Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Nom" maxlength="10">
            </div>
            <div>
                <label for="prenom">Votre Prénom :</label>
                <input type="text"  name="prenom" id="prenom" placeholder="Prénom" maxlength="10">
            </div>
            <div>
                <label for="pseudo">Créer votre Pseudo :</label>
                <input type="text"  name="pseudo" id="pseudo" placeholder="Pseudo" maxlenght="10">
            </div>
            <div>
                <label for="email">Votre Adresse E-mail :</label>
                <input type="email"  name="email" id="email" placeholder="Adresse E-mail">
            </div>
            <div>
                <label for="fungola">Mot de passe:</label>
                <input type="password"  name="fungola" id="passcode" placeholder="password" maxlength="10">
            </div>
            <div>
                <label for="wordPassConfirm">Confirmez le Mot de passe:</label>
                <input type="password" name="fungolaconfirm" id="passcodeconfirm" placeholder="password confirm" maxlength="10">
            </div>
            <div>
                <button class="InsSubmit" type="submit">Valider</button>
            </div>    
        </form>
    </div>
    <script src="Inscriptions.js"></script>
</body>
</html>