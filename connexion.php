<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <title>Connexion</title>
</head>
<style>
    header{
            width: 100%;
                }

    #horloge{
        background-color: transparent;
        width: 10%;
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        align-self: end;
        text-shadow: black 2px 2px 4px;
            }

    h1 {
        text-align: center
            }

    form {  
        display: block;
        margin: auto;
        background-color: white;
        opacity: 0.8;
            }

    .FormP{
        font-size: x-large;
        text-shadow: black 2px 2px 2px;
            }

    #Inscription{
        width: 50%;
        margin: auto;
        color: black;
        font-size: large;
            }

    #Inscription > a{
        display: block;
        width: 100%;
        height: 80%;
        text-decoration: none;
        color: black;
            }

    #Inscription > a:hover{
        color: blue;
        text-transform: capitalize;
            }

    #Connexion{
        width: 25%;
        margin-right: 0%;
        color: black;
            }

    .buttons{
        width: 100%;
        display: block;
            }
    
    .Sub{
        margin: 37.5%;
        margin-top: 2%;
        width: 50%;
            }

    form {
        margin-top: 7%;
    }
</style>
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
</header> 
<body onload=showDate();>
<?php
    require_once("./include/connect_mysql.php");
    ?>
<div id="Mutu">
    <div class="Ngonga">
        <span id="horloge"></span>
    </div>
    <div id="Lykos">
        <input class="Lykos" type="text" name="recherche" id="WatchBar" required name="recerche" placeholder="Recherche">
    </div>
</div>
<h1>Connexion</h1>
    <!--formulaire de connexion pour clients et Admin-->
<form method="POST" action="./MembresGest/memblog.php">
    <div>
        <label for="pseudo">Pseudo</label>  
        <input type="text" name="pseudo" placeholder="Pseudo" value="">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="fungola" placeholder="Password" value="">
    </div>
    <div class="buttons">
        <button id="Connexion" type="submit" value="Connexion">Se connecter</button>
    </div>
</form>
<div class="Sub">
    <a href="./MembresGest/inscriptmembres.php"><button id="Inscription" type="submit"> S'inscrire</a></button>
</div>
<footer>
    <p><a class="CBE" href="www.congo-b-exchange.fr"> CONGO-B-EXCHANGE</a> all rights reserved.</p>
    <p>Siren : 751345034</p>
    <p>Website performed by <a class="Wakanda" href="https://www.facebook.com/wakandais">WAKANDA Developpement.</p></a>
</footer> 
<script src="Contact.js"></script>
</body>
</html>
