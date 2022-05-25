<?php
    function getContent(){
        if(!isset($_GET['page'])){
            include __DIR__. '/../Index.php';
                }
        else {
            switch($_GET['page']){
                case "Presentations" :
                    include __DIR__. '/../Presentations.php';
                    break;
                case "Matierespremieres" :
                    include __DIR__. '/../Matierespremieres.php';
                    break;
                case "Contacts" :
                    include __DIR__. '/../Contacts.php';
                    break;
                case "Inscription" :
                    include __DIR__. '/../Inscription.php' ;
                    break;
                case "connexion" :
                    include __DIR__. '/../connexion.php';
                    break;
                case "Contacts" :
                    include __DIR__. '/../Contacts.php';
                    break;
                case "Boutique" :
                    include __DIR__. '/../Boutique.php';
                    break;
                case "InfoHuiled'Olive" :
                    include __DIR__. '/../InfosMatPrem/InfoHuiled%27Olive.php';
                    break;
                case "InfosBeurreDeKarité" :
                    include __DIR__. '/../InfosMatPrem/InfosBeurreDeKarit%C3%A9.php';
                    break;
                case "InfosHuilesd'AmandeDouce" :
                    include __DIR__. '/../InfosMatPrem/InfosHuiled%27AmandeDouce.php';
                    break;
                case "InfosHuiled'Argan" :
                    include __DIR__. '/../InfosMatPrem/InfosHuiled%27Argan.php';
                    break;
                case "InfosHuiled'Avocat" :
                    include __DIR__. '/../InfosMatPrem/InfosHuiled%27Avocat.php';
                    break;
                case "InfoHuileDeCoco" :
                    Include __DIR__. '/../InfosMatPrem/InfosHuileDeCoco.php';
                    break;
                case "InfosHuileDeMoringa" :
                    include __DIR__. '/../InfosMatPrem/InfosHuileDeMoringa.php';
                    break;
                case "InfosHuileDeRicin" :
                    include __DIR__. '/../InfosMatPrem/InfosHuileDeRincin.php';
                    }
                }
            }
    function getPart($name){
        include __DIR__. '/../Parts/'.$name.'.php';
            }        
    