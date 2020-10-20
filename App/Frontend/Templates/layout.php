<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="utf-8"/>
    <!--      Fontawesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <!--      Script du CDN TinyMCE-->
    <script src="https://cdn.tiny.cloud/1/hgsrcotr84d8b32tbwy0opsqe12o7cimt1j2ne74vioz1qhi/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <title>Mon blog d'auteur</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
</head>

<body>

<header>
    <div id="titre_accueil">Le blog de Jean Forteroche</div>
    <div class="menu_entete">
        <a class="bouton_menu_frontend" href="/visitor/showallchapters">Sommaire</a>
    </div>
</header>

<section class="corps_de_page">

    <?php


    use OCFram\Utilitaires;

    if (!Utilitaires::emptyMinusZero($errorMessage))
    {
        ?>
        <div class="affichage_exception">
            <?= $errorMessage ?>
        </div>
        <?php
    }
    ?>


    <?= $content ?>


</section>

<footer>
    <a></a>
    <a href="/admin/loggingin">Espace administrateur</a>
    <div class="copyright"><i class="far fa-copyright"></i>Jean Forteroche</div>
</footer>
</body>
</html>

