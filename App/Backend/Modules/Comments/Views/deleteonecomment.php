<?php
if ($_SESSION['connexion_status'] === 'connected')
    {
        ?>
        <h2 class="titres_vues">Confirmation de suppression de commentaire</h2>



        <div class="bloc_flash">
            <?php
            /** @var int $chapterId */
            ?>

            <p class="message-au-visiteur">Le commentaire a bien été supprimé.</p>

            <form method="post" action="/admin/showonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapterId ?>'/><br />
                <input name="show_chapter_button" type="submit" value="Retour au chapitre">
            </form>


        </div>
        <?php
    }
else
{
    ?>
    <p class="acces_refuse">
        Espace réservé à l'administrateur
    </p>

    <a href="/visitor/showallchapters">Accueil visiteur</a>
    <?php
}
?>







