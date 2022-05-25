<?php
    if(!empty($_POST)){
        $erros = array();

    if(empty($_POST['nom'])){
        echo 'Resneignez le nom';
        }
    elseif(empty($_POST['pseudo'])){
        echo 'Veuillez renseigner votre pseudo';
        }
    elseif(empty($_POST['email'])){
        echo 'Renseignez votre email.';
        }
    elseif(empty($_POST['fungola'])){
        echo 'veuillez renseigner le mot de passe';
        }
    elseif(empty($_POST['fungolaconfirm'])){
        echo 'Veuillez confirmer le mot de passe.';
        }
    elseif(empty($_POST['fungola']) != ($_POST ['fungolaconfirm'])){
        echo 'Les mots de passe ne correspondent pas.';
        }
    elseif(empty($_POST['rang'])){
        echo 'rensignez le type de compte.';
        }
    else{
        require "./include/connect_mysql.php";
        $req = $base->prepare("INSERT INTO abonnes SET nom = ?, pseudo = ?, email = ?, fungola = ?, rang = ?");
        $password = password_hash($_POST['fungola'], PASSWORD_BCRYPT);
        $req->execute([$_POST['nom'], $_POST['pseudo'], $password ]);
        }
    }
?>