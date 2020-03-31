<!DOCTYPE html>
<html lang="fr_FR">
  <head>
      <meta charset="utf-8" />
        <!--      Fontawesome   -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/style.css"/>
      <title>Mon blog d'auteur</title>
  </head>
  
  <body>

      <script src="/burgermenu.js"></script>

      <header>
          <h1 id="titre_accueil">Le blog de Jean Forteroche</h1>
          <div class="menu_entete">
              <ul class="list_menu_entete" id="liste_menu_entete_backend">
                  <li class="bouton_menu_backend"><i class="fas fa-book-open"></i></li>
                  <li class="bouton_menu_backend">Sommaire</li>
                  <li class="bouton_menu_backend">Déconnexion</li>
              </ul>
          </div>
          <div class="icone_burgermenu"><i class="fas fa-bars"></i></div>

      </header>

      <section class="corps_de_page">
          <h1>Ceci est le layout commun à toutes les pages du backend</h1>
          <h2>Ici se trouve le haut de page</h2>


          <?= $content ?>


          <h2>Ici se trouve le bas de page</h2>
      </section>

      <footer>
          <div class="copyright"><i class="far fa-copyright"></i>Jean Forteroche</div>
      </footer>
  </body>
</html>

