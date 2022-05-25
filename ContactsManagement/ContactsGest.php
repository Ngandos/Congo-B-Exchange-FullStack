<?php
if(!empty($_POST)){
    $errors = array();
       
if(empty($_POST['nom'])){
    echo 'Remplir le champ nom';
    }
if(empty($_POST['prenom'])){
    echo 'Remplir le champ prenom';
    }

if(empty($_POST['email'])){
    echo 'Renseignez un email';
    }

if(empty($_POST['contact'])){
    echo 'Ecrivez votre message !';
    }
else{
    require "../include/connect_mysql.php";
    $req = $pdo->prepare("INSERT INTO contacts SET nom = ?, prenom = ?, email = ?, contact = ?");
    $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['contact']]);
    header('location: ../Index.php');
    exit();
    }
}
if(isset($errors)){
    echo '<font color=red>' .$errors. '</font>';
    header('location: ./Contacts.php');
}
?>