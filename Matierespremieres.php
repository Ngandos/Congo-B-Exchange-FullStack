<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jquery-ui.css.">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <style type="text/css">
        h1,h2,h3 {
            text-align: center;
                }

        h3{
            border-radius: 1em;
            background-color: white;
            opacity: 0.8;
                }

        li {
            font-weight: bolder;
                }
        em {
            font-weight: bolder;
            text-align: center;
                }

        .Titre3{
            width: 300px;
            margin: auto;
            background-color: transparent;
            font-size: larger;
            border-radius: 1em;
            box-shadow: 5px 5px 10px black;
                }

        h4{
            font-weight: bolder;
                }

        .Supplies{
            height: 400px;
            width: 100%;
                }

        .TextMatPrem{
            width: 900px;
            padding: 5px;
            background-color: white;
            opacity: 0.8;
            box-shadow: 5px 5px 10px black;
                }

        .InfosMatPrem{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: auto;
                }

        .InfosMatPrems{
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: auto;
                }

        .ParaH2{
            padding-top: 100px;
            font-size: xx-large;
            font-weight: bolder;
            text-shadow: white 2px 2px 5px;
                }

        .MatViews{
            text-decoration: none;
            color: black;
                }

        .MatViews:hover{
            text-transform: uppercase;
            background: linear-gradient(to top, yellow 10%, orange 30%, red 100% );
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
</style>
    <title>Matière premières</title>
</head>
<body>
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
    <h1>Matières premières</h1>
    <br>
    <div class="Guide">
        <p>Consulter les vertues et bienfaits de chacun de nos produits et matières premières servant à la fabrication des savons.</p>
    </div>
    <br>
    <div class="Artbeurre"></div>
    <br>
    <div class="Titre3">
        <h3>Le beurre de karité</h3>
    </div>
    <br>
    <div class="InfosMatPrem">
        <figure>
            <img class="Supplies" id="suppl" src="Images/Articles/BeurreDeKariteConditionne/ArticleBeurredeKarite250g.jpeg" title="Beurre de karité">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosBeurreDeKarité.php" >Beurre de Karité Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/Articles/HuileDeRicinConditionnee/Huiledericin30mlPresentation.jpg" title="Huile de Ricin">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuileDeRincin.php" >Huile de Ricin Infos</a></figcaption>
        </figure>
    </div>    
    <br>
    <div class="Artbeurre"><!--Parallax-->
        <h2 class="ParaH2">Huiles Végétales</h2>
    </div>
    <div class="InfosMatPrems">
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/huile_amande_douce.jpg" title="Huile d'Amande douce">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuiled'AmandeDouce.php" >Huile d'Amande douce Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/huile_d'argan1.jpg" title="Huile d'Argan">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuiled'Argan.php" >Huile d'Argan Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/huile_d'avocat.jpg" title="Huile d'Avocat">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuiled'Avocat.php" >Huile d'Avocat Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/MoringaOil.jpg" title="Huile de Moringa">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuileDeMoringa.php" >Huile de Moringa Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/huile_de_coco_2.jpg" title="Huile de Noix de Coco">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfosHuileDeCoco.php" >Huile de Coco Infos</a></figcaption>
        </figure>
        <figure>
            <img class="Supplies" src="Images/HuilesVegetales/huile_d'olive.jpg" title="Huile d'Olive">
            <figcaption><a class= "MatViews"  href="./InfosMatPrem/InfoHuiled'Olive.php" >Huile d'Olive Infos</a></figcaption>
        </figure>
    </div>
<script src="jquery-3.5.1.min.js"></script>
<script src="jquery-ui.js"></script>
<script src="Anims.js"></script>   
</body>
<footer>
    <p><a class="CBE" href="www.congo-b-exchange.fr">CONGO-B-EXCHANGE</a> all rights reserved.</p>
    <p>Siren : 751345034</p>
    <p>Website performed by<a class="Wakanda" href="https://www.facebook.com/wakandais">WAKANDA Developpement.</p></a>
</footer> 
</html>