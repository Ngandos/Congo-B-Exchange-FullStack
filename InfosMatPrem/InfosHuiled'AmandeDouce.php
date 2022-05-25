<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Congo-B-Exchange.css">
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


        figure{
            width: 404px;
            margin: auto;
            height: 433px;
            margin-top: 8%;
            border: black solid 2px;
            box-shadow: 2px 5px 10px black;
                }

        figcaption{
            width: 400px;
            text-align: center;
            background-color: white;
            opacity: 0.9;
                }

        .Supplies{
            height: 400px;
            width: 400px;
                }

        .TextMatPrem{
            padding: auto;
            width: 90%;
            margin: auto;
            margin-top: 10%;
            padding: 5px;
            background-color: white;
            opacity: 0.8;
            box-shadow: 5px 5px 10px black;
                }

        .InfosMatPrem{
            width: 95%;
            display: block;
            margin: auto;
            margin-top: 5%;
                }

        .ParaH2{
            padding-top: 100px;
            font-size: xx-large;
            font-weight: bolder;
            text-shadow: white 2px 2px 5px;
                }

        button{
            width: 20%;
            margin-top: 2%;
                }

        .button {    
            font-weight: bold;
            font-size: 25px;
                }

        .ReturnsLinks{
            width: 100%;
            font-size: x-large;
        }
    </style>
    <title>Infos Huile d'Amande Douce</title>
</head>
<body>
    <button class="Returns" type="submit"><a class="ReturnsLinks" href="../Matierespremieres.php">Retour</a></button>
    <br>
    <video controls autoplay>
        <source src="../HuilesEssentiellesVideo/HuiledAmandeDouceBienfaitsDelHuiledAmandeDoucePourLeVisageEtLesCheveux-Doctissimo.mp4">
    </video>
    <div class="InfosMatPrem">
        <figure>
            <img class="Supplies" src="../Images/HuilesVegetales/huile_amande_douce.jpg" title="Huile d'Amande douce">
            <figcaption>Huile d'Amande douce</figcaption>
        </figure>
        <br>
        <div class="TextMatPrem">
            <p class="Produits">Qu'est ce que l'huile d'Amande douce ?</p> 
            <br>
            <p>Le ricin est un arbuste pouvant atteindre 8 à 10 mètres de hauteur, originaire d’Inde.</p>
            <p>Il possède de larges feuilles palmées de couleur verte ou rouge, et aux nervures rouges ou blanches.</p>
            <p>Pendant l’été, apparaissent de petites fleurs en épis suivies de grappes de fruits ovoïdes en capsules, hérissées d'épines souples et rouges.</p>
            <p>Son huile végétale est extraite par pression à froid des graines, et entre dans la composition de produits cosmétiques et pharmaceutiques pour les soins de la peau et des cheveux par exemple.</p>
            <p>L'huile de ricin est une huile végétale extraite des graines de la plante Ricinus Communis.</p>
            <em>♥ Bienfaits de l'huile de Ricin</em>
            <p>Nourrissante, Fortifiante Digestive Anti-inflammatoire et antalgique Immunostimulante</p>
        </div>    
    </div>
    <?php
        include '../template_calling/footer.php'
        ?>