<?php
    session_start();
    if(empty($_SESSION['pseudo'])){
        header('Location: ./connexion.php');
        }
    include "./tempate_calling/header.php";
    ?>
    <link rel="stylesheet" href="Congo-B-Exchange.css">
    <p>Bonjour <?= $_SESSION["pseudo"] ?>  Que souhaitez vous faire ?</p>

    <a href="./articlegest.php">Gerer les messages</a>
    <a href="../Articles/articlesHotSales.php"></a>
    <a href="../Include/deco.php">Deconnexion</a>