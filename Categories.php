<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <link rel="stylesheet" href="Categories.css">
    <style type="text/css">
    .rotation3d {
        width: 285px;
        background: #eaeaed;
        float: center;
        margin: auto;
            }

    .rotation3d > img{
        width: 100%;
    }

    .box_box_2 {
        width: 100%;
        background: #e4087e;
        height: 100%;
        line-height: 120px;
        text-align: center;
        width: 100%;
        color: #fff;
        font-weight: 700;
            }

    .run-rotation {
        width: 285px;
        height: 285px;
        cursor: pointer;
        transform-style: preserve-3d;
            }
    .run-rotation:hover {
        animation: run-rotation 5s linear infinite;
            }

    @keyframes run-rotation {
    0% {
        transform: rotateY(0deg);
        }
    50% {
        transform: rotateY(180deg);
    }    

    75% {
        transform :rotateY(360deg);
    }

    100% {
        transform: rotateY(0deg);
            }
        }

    .box-2 {
    transform: perspective(200px) rotateXY(360deg);
            }

    img{
        width: 100%;
        height: 100%;
            }

    </style>
    <title>Recherche par catégories</title>
</head>
<body>
  <div class="wrapper">
    <h1>Rechercher par catégories</h1>
    <div class="cols">
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/BeurreDeKariteConditionne/beurre_de_karité_pot_250g.jpg)">
						<div class="inner">
							<p>Crémes</p>
              				<span>Articles Crèmes</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						  	<p><a href="./InfosMatPrem/InfosBeurreDeKarité.php">Infos</a></p>
						  	<p><a href="./Articles/ArticlesCremes.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/HuileDeRicinConditionnee/huile_de_ricin_pot_150ml_dessus.JPG)">
						<div class="inner">
							<p>Huiles</p>
              				<span>100% Naturelle préssée à froid</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p><a href="./InfosMatPrem/InfosHuileDeRincin.php">Infos</a></p>
						  	<p><a href="./Articles/ArticleHuilesVegetales.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/Parfums/ParfumsLacosteHomeEtFemme.jpeg)">
						<div class="inner">
							<p>Parfums</p>
              				<span>Parfums grandes marques</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p><a href="./InfosMatPrem/InfosHuileDeRincin.php">Infos</a></p>
						  	<p><a href="./Articles/ArticlesSavons.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/SavonsAuKarite/SavonKariteAmandedouce.JPG)">
						<div class="inner">
							<p>Savons</p>
              				<span>Gammes de Savons</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p><a href="#">Infos</a></p>
						  	<p><a href="./Articles/ArticlesSavons.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/BeurreDeKariteConditionne/beurre_de_karité_pot_250G_image_presentation.jpg)">
						<div class="inner">
							<p>Beurre de karité</p>
              				<span>100% Naturel non raffiné préssé à froid</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p><a href="./InfosMatPrem/InfosBeurreDeKarité.php">Infos</a></p>
						  	<p><a href="./Articles/ArticleBeurreDeKarite.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/HuileDeRicinConditionnee/Huiledericin30mlPresentation.jpg)">
						<div class="inner">
							<p>Huile de ricin</p>
              				<span>100% Naturelle non raffinée, préssée à froid.</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p><a href="./InfosMatPrem/InfosHuileDeRincin.php">Infos</a></p>
						  <p><a href="./Articles/articlehuiledericin.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/SavonsAuKarite/SavonKariteAmandedouce.JPG)">
						<div class="inner">
							<p>Savons</p>
              				<span>Savons aux karité et aux huiles</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p><a href="#">Infos</a></p>
						  <p><a href="./Articles/ArticlesSavons.php">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url(Images/Articles/PortesSavons/PorteSavonsTerreCuite.jpeg)">
						<div class="inner">
							<p>Portes savons</p>
              				<span>Porte savon fabriqué à la main</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p><a href="#">Infos</a></p>
						  <p><a href="#">Voir l'article</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
 </div>
<?php
	include './template_calling/footer.php'
	?>