<?php
    session_start();
    if(empty($_SESSION['pseudo'])){
        header('location: connexion.php');
            }
if($_SESSION['rang'] != 1){
    header('location: ./MembresGest/memberspage');
        }
include "./tempate_calling/header.php";
?>
<link rel="stylesheet" href="Congo-B-Exchange.css">
<style type="text/css">
        
</style>
<div>Liste des membres</div>

<table>
    <tr> <th>ID</th> <th>Pseudo</th> <th>Adresse Mail</th> <th>Niveau</th></tr>
    <?php
        include "connect_mysql.php";
        $req = $pdo->query("SELECT * FROM membres");
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>" . "</td><td>" .$data['pseudo']. "</td><td>" .$data['email']. "</td><td>" . "</td>";
            echo "<td>";
            echo "<a href='./MembSapces/UpdateMemb.php?id=" .$data['pseudo']. "'>Modifier</a> ";
            echo "<a href=''>Supprimer</a> ";
            echo "</td></tr>";
        }
        ?>
</table>