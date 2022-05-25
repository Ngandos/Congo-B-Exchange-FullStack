<?php
    include '../template_calling/header.php';
    require '../include/connect_mysql.php';
    include '../Lib/functions.php';
    getPart('menu');
    ?>
<link rel="stylesheet" href="../Congo-B-Exchange.css">
<style>
    .figpro {
        width: 20%;
        height: 60%;
            }
    .propict {
        height: 87%;
        width: 100%;
            }
    .details {
        width: 100%;
        margin-left: 1%;
        text-align: start;
        background-color: whitesmoke;
        opacity: 0.8;
            }
    .cusdet {
        text-align: start;
            }
</style>
<title>Espace Clients</title>
<br>
<br>
<h1>Espace Clients</h1>
<section class="profil">
    <aside class="figonass">
    <div class="details">
            <p class="cusdet">Nom :</p>
            <p class="cusdet">Prenom :</p>
            <p class="cusdet">Adresse :</p>
            <p class="cusdet">CP :</p>    
        </div>
    </aside>
    <aside class="figondet">
        <div class="details">
            <p class="cusdet">Mes commandes</p>
            <p class="cusdet">liste de souhait</p>
            <p class="cusdet">Adresse :</p>
            <p class="cusdet">CP :</p>    
        </div>
    </aside>
</section>
<?php
    include '../template_calling/footer.php'
        ?>