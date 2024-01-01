<?php
    include './template_calling/header.php';
    include './Lib/functions.php';
    getPart('menu');
?>

<link rel="stylesheet" href="./Congo-B-Exchange.css">
<style type="text/css">
    h1 {
        text-align: center;
            }

    p {
        text-align: center;
            }

    header{
        width: 100%;
            }

    #Lykos {
        margin-left: 68%;
    }
    
</style>
<title>Accueil Congo-B-Exchange</title> 
<body onload=showDate();>
    <br>
    <br>
    <div class="body2">
        <div id="Mutu">
            <div class="Ngonga">
                <span id="horloge"></span>
            </div>   
        </div>

        <div id="Lykos">
            <form action="" method="post">
                <label for="recherche" hidden></label>
                <input class="Lykos" type="text" name="recherche" id="WatchBar" required name="recerche" placeholder="Recherche">
                <input class="LykSub" type="submit" value="Rechercher">
            </form>
        </div>

        <h1>CONGO-B-EXCHANGE</h1>

        <div class="Artbeurre3">
            <span class="Slog">Be Beauty By Nature</span>
            <div class="contenu_carou_auto">
                <div class="caroussel-image">
                    <img id="shaking" src="Images/ID.Visuelle/LogoBexchange2019FinalfondCiel.png" title="Congo-B-Exchange">
                    <img src="Images/Articles/SavonsAuKarite/savons_karité_presentation_vue_de_dessus.jpg" title="Savons au karité et aux huile végétales">
                    <img src="Images/Articles/BeurreDeKariteConditionne/FruitEtCremeDuKarité.jpeg" title="Beurre de karité non raffiné">
                    <img src="Images/Articles/HuileDeRicinConditionnee/huile_de_ricin_fiole_30ml_face.jpg" title="Huile de Ricin">
                    <img src="Images/Articles/B-Packs/B-PackMedium(Or).JPG" title="Packs B-Exchange">
                    <img src="Images/Articles/M-Packs/IMG_6764.JPG" title="Packs Mokokoli">
                    <img src="Images/HuilesVegetales/huile_amande_douce.jpg" title="Huile d'Amande douce">
                    <img src="Images/HuilesVegetales/huile_de_carapate.jpg" title="Huile de Carapate">
                </div>
            </div>
        </div>
    </div>

<?php
    include './template_calling/footer.php';
?>