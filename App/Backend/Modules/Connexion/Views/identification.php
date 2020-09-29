

<div class="confirmation_authentification">
    <?php
    if ($_SESSION['connexion_status']==='connected')
    {
        ?>
        <p class="acces_valide">
            Accès authorisé <br/>
            Bienvenue dans l'espace administrateur <?php echo $_SESSION['login'] ?>
        </p>

        <a href="/admin/showallchapters">Accueil administrateur</a>
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
