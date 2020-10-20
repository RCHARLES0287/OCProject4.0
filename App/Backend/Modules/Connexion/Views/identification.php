

<div class="confirmation_authentification">
    <?php

    use App\Backend\Modules\Connexion\Controller\ConnexionController;

    if (ConnexionController::isConnected())
    {
        ?>
        <p  class="acces_valide">
            Accès authorisé <br/>
            Bienvenue dans l'espace administrateur <?php echo $_SESSION['login'] ?>
        </p>

        <a href="/admin/showallchapters">Accueil administrateur</a>

        <script src="/AutoRedirection.js"></script>
        <script type="application/javascript">
            $(function () {
                new AutoRedirection('/admin/showallchapters', 5000);
            });
        </script>

        <?php
    }
    else
    {
        ?>
        <p class="acces_refuse">
            Accès refusé
        </p>

        <a href="/visitor/showallchapters">Accueil visiteur</a>
        <?php
    }
    ?>
</div>

