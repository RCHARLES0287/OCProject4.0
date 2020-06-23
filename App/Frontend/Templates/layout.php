<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../Web/css/style.css"/>
        <title>Mon blog d'auteur</title>
    </head>

    <body>
        <header>
            <h1 id="titre_accueil">Le blog de Jean Forteroche</h1>
            <ul class="menu_entete" id="menu_entete_frontend">
                <li class="bouton_menu_frontend"><i class="fas fa-book-open"></i></li>
                <li class="bouton_menu_frontend">Sommaire</li>
                <li class="bouton_menu_frontend">Connexion</li>
            </ul>
        </header>

        <h1>Ceci est le layout commun à toutes les pages du frontend</h1>
        <h2>Ici se trouve le haut de page</h2>



        <?= $content ?>


        <h2>Ici se trouve le bas de page</h2>
        <div><i class="far fa-copyright"></i>Jean Forteroche</div>
    </body>
</html>
