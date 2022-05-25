<?php
    include './template_calling/header.php';
    include './Lib/functions.php';
    getPart('menu');
?>
<link rel="stylesheet" href="Congo-B-Exchange.css">
<link rel="stylesheet" href="jquery-ui.css">
<style type="text/css">
    body{
        background-image: url("./Images/ID.Visuelle/LogoBexchange2019FinalfondCiel.png");
            }

    .prodlook {
        margin-left: 88%;
        position: fixed;
        z-index: 100;
        box-shadow: whitesmoke 2px 2px 10px;
            }

    .Shop {   
        border: solid black 1px;
        margin-top: 10px;
        border-radius: 1em;
        margin-left: 18%;
        box-shadow: 2px 2px 10px black;
            }

    h2 {
        text-align: center;
        color: antiquewhite;
        text-shadow: black 2px 2px 4px;
                }

    .buy {
        width: 70%;
        padding: auto;
        margin-left: 16%;
        font-weight: bold;
        color: black;
            }

    .buy:hover{
        background-color: #5a3f3F;
        color: white;
            }

    .shop, .artview {
        display: block;
        margin: auto;
        padding: auto;
            }

    .artview{
        width: 100%;
        color: black;
        font-weight: bolder;
        font-size: larger;
        text-decoration: none;
            }

    .artview:hover{
        color: white;
            }

    .supplies{
        display: block;
        background-color: white;
        box-shadow: black 5px 5px 10px;
        width: 300px;
        height: 265px;
        padding: auto;
        margin: auto;
        border-radius: 1em;
        opacity: 0.8;
            }

</style>
<title>Boutique</title>
<body onload=showDate();>  
<div id="Mutu">
    <div class="Ngonga">
        <span id="horloge"></span>
    </div>   
</div>
<h1>Boutique</h1>
<a href="Categories.php"><button class="prodlook" type="submit">rechercher un produit</button></a>
<h2>All</h2>
<div class="Artbeurre2"></div>
<section class="rows">
    <div class="supplies"><img class="Shop" src="Images/Articles/BeurreDeKariteConditionne/beurre_de_karité_pot_250G_image_presentation.jpg" alt="Beurre de karité" title="Beurre de karité"><button class="buy" id="bounce" type="submit"><a class="artview" href="./Articles/ArticleBeurreDeKarite.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/HuileDeRicinConditionnee/Huiledericin30mlPresentation.jpg" alt="Huile de ricin" title="Huile de ricin"><button class="buy" id="bounce1" type="submit"><a class="artview" href="./Articles/articlehuiledericin.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles//SavonsAuKarite/savons_karité_presentation.jpg" alt="Savons Au Karité" title="Savons au Karité et huiles végétales"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlesSavons.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackBasic(Or).JPG" alt="Pack B-Exchange Basic" title="Pack B-Exchange Basic"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_Basic.php">Voir l'article</a></button></div>
</section>
<br>
<div class="Artbeurre2"></div>
<br>
<section class="rows">
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackNormal(Arg).JPG" alt="Pack B-Exchange Normal" title="Pack B-Exchange Normal"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_normal.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackMedium(Arg).JPG" alt="Pack B-Exchange Medium" title="Pack B-Exchange Medium"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_medium.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackLarge(Arg).JPG" alt="Pack B-Exchange Large" title="Pack B-Exchange Large"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_Large.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/PackBExchangePremiumGoldArg.jpeg" alt="Pack B-Exchange XL" title="Pack B-Exchange XL"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_XL.php">Voir l'article</a></button></div>
</section>
<br>
<div class="Artbeurre2"></div>
<br>
<section class="rows">
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackBasic(Arg).JPG" alt="Pack B-Exchange XXL" title="Pack B-Exchange XXL"></a><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_XXL.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackMedium(Or).JPG" alt="Pack B-Exchange Premium" title="Pack B-Exchange Premium"></a><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackB-Exchange_Premium.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/B-Packs/B-PackMedium(Or).JPG" alt="Pack B-Exchange VIP" title="Pack B-Exchange VIP"><button class="buy" type="submit"><a class="artview"  href="./Articles/ArticlePackB-Exchange_V.I.P.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliNormal.jpeg" alt="Pack MOKOKOLI Normal" title="Pack MOKOKOLI Normal"><button class="buy" type="submit"><a class="artview" href="./Articles/articlepackMOKOKOLI_Normal.php">Voir l'article</a></button></div>
</section>
<br>
<div class="Artbeurre2"></div>
<br>
<section class="rows">
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliMedium.jpeg" alt="Mokokoli Pack Medium" title="Mokokoli Pack Medium"><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackMOKOKOLI_medium.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliLarge.jpeg" alt="Mokokoli Pack large" title="Mokokoli Pack Large"><button class="buy" type="submit"><a class="artview" href="./Articles/articlepackMOKOKOLI_Large.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliXl.jpeg" alt="Mokokoli Pack XL" title="Mokokoli Pack XL"><button class="buy" type="submit"><a class="artview" href="./Articles/articlepackMOKOKOLI_XL.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliXxl.jpeg" alt="Mokokoli Pack XXL" title="Mokokoli Pack XXL"><button class="buy" type="submit"><a class="artview" href="./Articles/articlepackMOKOKOLI_XXL.php">Voir l'article</a></button></div>
</section>
<br>
<div class="Artbeurre2"></div>
<br>
<section class="rows">
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliPremium.jpeg" alt="Mokokoli Pack Premium" title="Mokokoli Pack Premium "><button class="buy" type="submit"><a class="artview" href="./Articles/ArticlePackMOKOKOLI_Premium.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="Images/Articles/M-Packs/ArticlePackMokokoliVip.jpeg" alt="Mokokoli Pack V.I.P" title="Mokokoli Pack V.I.P"><button class="buy" type="submit"><a class="artview" href="./Articles/articlepackMOKOKOLI_V.I.P.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="./Images/Articles/Parfums/PArfumLAcosteBoosterHomme.jpeg" alt="Article Hot Sales" title="Articles Hot Sales"><button class="buy" type="submit"><a class="artview" href="./Articles/articlesHotSales.php">Voir l'article</a></button></div>
    <div class="supplies"><img class="Shop" src="./Images/Articles/Agricole/ArticleFeveDeCacao250g.jpeg" alt="Mokokoli Pack Large Or" title="Feves de Cacao"></a><button class="buy" type="submit"><a class="artview" href="./Articles/articleFevesDeCacao.php">Voir l'article</a></button></div>
</section>
   <?php
        include './template_calling/footer.php';
   ?>