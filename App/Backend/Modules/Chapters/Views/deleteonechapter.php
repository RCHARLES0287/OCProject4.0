<?php
if ($_SESSION['connexion_status'] === 'connected')
    {
        ?>
        <h2 class="titres_vues">Chapitre supprimé</h2>




        <div class="bloc_flash">
            <?php
            /** @var \Entity\ChapterEntity $chapter */
            ?>

            <p class="message-au-visiteur">Le chapitre a bien été supprimé.</p>

            <form method="post" action="/admin/showallchapters">
                <input name="back_to_chapters" type="submit" value="Retour aux chapitres">
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






