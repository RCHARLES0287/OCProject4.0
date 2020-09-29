<?php
if ($_SESSION['connexion_status'] === 'connected')
    {
        ?>
        <h2 class="titres_vues">Suppression de chapitre</h2>




        <div class="bloc_flash">
            <?php
            /** @var \Entity\ChapterEntity $chapter */
            ?>

            <p class="message-au-visiteur">Etes-vous sûr de vouloir supprimer le chapitre <?= $chapter->chapter_number() ?> ?</p>

            <form method="post" action="/admin/deleteonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value="<?= $chapter->id() ?>" /><br />
                <input name="delete_chapter_button" type="submit" value="Supprimer">
            </form>

            <form method="post" action="/admin/showallchapters">
                <input name="abort_chapter_cancellation_button" type="submit" value="Annuler">
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




