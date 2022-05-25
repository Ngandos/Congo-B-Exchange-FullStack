
<?php
    require "./include/connect_mysql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <style type="text/css">
        h1 {  text-align: center;
                }
        h2 {
            text-shadow: red 2px 2px 2px;
                }

        p {   text-align: center;
                }

        em  {text-align: center;
                }

        .liens:hover{
            color: red;
                }

        button{
            margin: auto;
        }

    </style>
    <title>Contacts</title>
</head>
<header>
    <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a href="./index.php"><li>Accueil</li></a>
            <a href="./Presentations.php"><li>Pésentations</li></a>
            <a href="./Matierespremieres.php"><li>Matières premières</li></a>
            <a href="./Boutique.php"><li>Boutique</li></a>
            <a href="./Blog.php"><li>Blog</li></a>
            <a href="./Contacts.php"><li>Contacts</li></a>
            <a href="./connexion.php"><li>Connexion</li></a>
          </ul>
        </div>
    </nav>
    <div id="Lykos">
            <input class="Lykos" type="text" name="recherche" id="WatchBar" required name="recerche" placeholder="Recherche">
        </div>
</header>
<body>
    <div id="Mutu">
        <div class="Ngonga">
            <span id="horloge"></span>
        </div>
    </div>
    <h1>Contacts</h1>
    <br>
    <div class="CoordContacts">
        <form class="Contcs" action="./ContactsManagement/ContactsGest.php" method="POST">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="nom">
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            </div>
            <div>
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" placeholder="E-mail de contact">
            </div>
            <div>
                <label for="nom">Message :</label>
                <textarea id="contact" name="contact" placeholder="Votre message"></textarea>
            </div>
            <div class="butonform">
                <button onclick="themeCrea('red'), alert('Message Envoyé !')"><strong>Envoyer le message</strong></button>
            </div>
        </form>
        <div class="Contacts">
            <em>Congo-B-Exchange</em>
            <br>
            <em>12 Rue des étangs</em>
            <br>
            <em>62870 ROUSSENT</em>
            <br>
            <em>Tel : 03.21.81.88.09</em>
            <br>
            <a class="Mentions Légales" href="blank">Mentions Légales</a>
            <br>
            <a class="Courriel" href="bogniwacongoexchange@gmail.com">Contacts@Congo-B</a>
            <a class="liens" href="https://www.facebook.com/CongoBex/">FaceBook</a>
            <a class="liens" href="https://www.instagram.com/bogniwa.exchange/?hl=fr">Instagram</a>
        </div>
    </div>
    <footer>
        <p><a class="CBE" href="www.congo-b-exchange.fr"> CONGO-B-EXCHANGE</a> all rights reserved.</p>
        <p>Siren : 751345034</p>
        <p>Website performed by <a class="Wakanda" href="https://www.facebook.com/wakandais">WAKANDA Developpement.</p></a>
    </footer>
<script src="Contact.js"></script>
</body>
</html>