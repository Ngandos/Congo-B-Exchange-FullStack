<?php
    include '../template_calling/header.php';
    require '../include/connect_mysql.php';
    include '../Lib/functions.php';
    getPart('menu');
    ?>
<link rel="stylesheet" href="../Congo-B-Exchange.css">
<style type="text/css">
    .button {    
        font-weight: bold;
        font-size: 25px;
            }

    h2 {  
        text-align: center;
            }

    a {
        font-size: 20px;
        color: black;
            }

    .returns {
        position: fixed;
            }
</style>
<title>Packs B-Exchange Basic</title>
<br>
<br>
<button class="Returns" type="submit"><a class="ReturnsLinks" href="../Boutique.php">Retour à la boutique</a></button> 
<h1>Article Packs-B-Exchange Basic</h1>
<?php
    $req3 = $pdo->query("SELECT * FROM produits WHERE reference = 'BEXPABOR'");
    while($article = $req3->fetch()){
        echo <<<ARTICLE
            <h2>{$article->nom}</h2>
            <section id="ArtDetails">
                <img class="Supplies" src={$article->image} title={$article->nom}>
                <aside>
                    <article>
                        <h3>Article {$article->nom}</h3>
                        <p>{$article->déscription}</p>
                        <p></p>
                        <p></p>
                        <a class="Propriétés" href="{$article->lien}">Voir propriétés</a>
                        <p class="PoidsNet">Poids net +/- : {$article->poids}</p>
                        <p>Prix/u {$article->prixUnitaire}<button type="submit">Acheter</button></p>
                    </article>
                </aside>
            </section>
        ARTICLE;
    };
?>
<?php
    include '../template_calling/footer.php'
        ?>