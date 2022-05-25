<?php
require '../include/connect_mysql.php';

if(isset($_POST['submit'])){
    if(empty($_POST['pseudo']) || empty($_POST['fungola'])){
        echo 'remplissage absent';
            }
    else{
        $query = 'SELECT * FROM membres WHERE pseudo = :pseudo LIMIT 1';
        $statement = $pdo->prepare($query);
        $statement->execute(array ('pseudo' => $_POST['pseudo']));
        $count = $statement->rowCount();
        if($count > 0) {
            $resultat = $statement->fetch(PDO::FETCH_ASSOC);

            //check password

            if(password_verify($_POST['fungola'], $resultat['fungola'])){
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                setcookie('pseudo', time() + (86400));
                exit(header('location: ../MembresGest/Membdex.php'));
            }else{
                echo 't\'es naze';
                header ('location: ./connexion.php');
            }
        }
        if(isset($errors)){
            echo '<font color=red>' .$errors. '</font>';
            header('location: ./connexion.php');
                }
        }
}
?>