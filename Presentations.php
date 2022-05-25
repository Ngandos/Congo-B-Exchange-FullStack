<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <style
        type="text/css">
        .insco {
            width: 15%;
            margin: auto;
            margin-left: 2%;
                }

        .interact {
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: row;
            padding: auto;
                }

        h1 {text-align: center
            }

        .Infosmat{
            font-size: medium;
            font-weight: bold;
            color: black;
                }

        a:hover{
            color: red;
            font-weight: bolder;
                }

        a:active{
            color: red;
                }

    </style>
    <title>Présentations</title>
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
    <div id="Mutu">
        <div class="Ngonga">
            <span id="horloge"></span>
        </div>   
    </div>     
    <h1>Présentation</h1>
    <br>
    <div class="Présentations">
        <p>Congo-B-Exchange, est une petite société familiale Française, dont la principale activité est la commercialisation de produits naturels, principalement des produits de beauté et bien etre mais aussi des denrées issues de l'agriculture.</p>
        <p>Crée en 2018 dans la région du Pas De Calais, ses principaux partenaires sont siégés en Afrique de l'Ouest et Saharienne d'oû proviennent en grande partie les matières premières.</p>
        <p>La plupart de nos produits sont importés d'Afrique de l'Ouest, comme le beurre de karité et l'huile de ricin, qui sont cultivés et éxtrait artisanalement par des procédés restants inchangés depuis des générations, chacunes de nos huiles sont extraites à froid sans aucun raffinage ni modification afin de vous garantir un produit 100% naturel ayant conservé toutes les propriétés et bienfaits des matières premières le composant.</p>
        <p>En ce qui concerne nos savons, ils sont fabriqués en région parisienne par le maître artisan savonnier MOKOKOLI avec qui nous travaillons depuis nos débuts.</p>
        <p>Tous nos produits sont issus de matières premières éxtraites naturellement et fabriqués artisanalement sans aucune manipulation ou transformation quelquonque, retrouvez toutes les informations sur les modes d'extractions pour le beurre de karité et les huiles végétales sur notre page <a class="Infosmat" href="Matières premières.html">Matières premières</a>.</p> 
    </div> 
    <footer>
        <p><a class="CBE" href="www.congo-b-exchange.fr"> CONGO-B-EXCHANGE</a> all rights reserved.</p>
        <p>Siren : 751345034</p>
        <p>Website performed by <a class="Wakanda" href="https://www.facebook.com/wakandais">WAKANDA Developpement.</p></a>
    </footer> 
    <script src="Contact.js"></script>
</body>
</html>