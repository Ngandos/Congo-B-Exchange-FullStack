<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <style
    type="text/css">
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
        margin: 38%;
        margin-top: 2%;
        width: 50%;
            }
</style>
    <title>Blog</title>
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
<body onload=showDate();>
<?php
    session_start();
        require_once("include/connect_mysql.php");/*Acceptation d'ouverture de session user*/
        $idsession = $_SESSION['ID'];
        echo $idsession;    
            ?>
    <div id="Mutu">
        <div class="Ngonga">
            <span id="horloge"></span>
        </div>   
    </div>
    <h1>Blog</h1>
    <br>
    
    <footer>
        <p><a class="CBE" href="www.congo-b-exchange.fr"> CONGO-B-EXCHANGE</a> all rights reserved.</p>
        <p>Siren : 751345034</p>
        <p>Website performed by <a class="Wakanda" href="https://www.facebook.com/wakandais">WAKANDA Developpement.</p></a>
    </footer> 
    <script src="Contact.js"></script>
</body>
</html>