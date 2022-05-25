<?php
    if(!empty($_POST)){
        $errors = array();
        
    if(empty($_POST['nom'])){
        echo 'Remplir le champ nom';
            }
    if(empty($_POST['prenom'])){
        echo 'Remplir le champ prenom';
            }
    if(empty($_POST['birth_date'])){
        echo 'renseignez la date de naissance';
            }
    if(empty($_POST['email'])){
        echo 'Renseignez un email';
            }
    if(empty($_POST['pseudo'])){
        echo 'Remplissez le Champ pseudo';
            }
    elseif(empty($_POST['fungola'])){
        echo 'Remplir le champ mot de passe';
            }
    elseif(empty($_POST['fungolaConfirm'])){
        echo 'Confirmez le mot de passe';
            }
    elseif(($_POST['fungola']) != ($_POST ['fungolaConfirm'])){
        echo 'Les mots de passe ne correspondent pas';
            }
    else{
        require "../include/connect_mysql.php";
        $req = $pdo->prepare("INSERT INTO membres SET nom = ?, prenom = ?, birth_date = ?, email = ?, pseudo = ?,  fungola = ?");
        $password = password_hash($_POST['fungola'], PASSWORD_BCRYPT);
        $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['birth_date'], $_POST['email'], $_POST['pseudo'] , $password]);
        header('location: ../connexion.php');
        exit();
        }
    }
    if(isset($errors)){
        echo '<font color=red>' .$errors. '</font>';
        header('location: .inscriptmembres.php');
        }
?>