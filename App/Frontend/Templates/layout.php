<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8" />
        <!--      Fontawesome   -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="/css/style.css"/>
        <!--      Script du CDN TinyMCE-->
        <script src="https://cdn.tiny.cloud/1/hgsrcotr84d8b32tbwy0opsqe12o7cimt1j2ne74vioz1qhi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <title>Mon blog d'auteur</title>
    </head>

    <body>
        <script src="/burgermenu.js"></script>

        <header>
            <div id="titre_accueil">Le blog de Jean Forteroche</div>
            <div class="menu_entete">
                <ul class="list_menu_entete" id="liste_menu_entete_frontend">
                    <li class="bouton_menu_frontend"><i class="fas fa-book-open"></i></li>
                    <li class="bouton_menu_frontend"><a href="/visitor/showallchapters">Sommaire</a></li>
                    <li class="bouton_menu_backend">Connexion</li>
                </ul>
            </div>
            <div class="icone_burgermenu"><i class="fas fa-bars"></i></div>

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
            <a href="/admin/identification">Espace administrateur</a>
            <div class="copyright"><i class="far fa-copyright"></i>Jean Forteroche</div>
        </footer>
    </body>
</html>

