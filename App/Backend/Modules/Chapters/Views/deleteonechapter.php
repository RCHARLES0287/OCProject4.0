

<h2>Ici on confirme l'annulation de la suppression d'un chapitre</h2>

<h3>Suppression de chapitres</h3>




<div class="bloc_flash">
    <?php
    /** @var \Entity\ChapterEntity $chapter */
    ?>

    <p class="message-au-visiteur">Le chapitre a bien été supprimé.</p>

    <form method="post" action="/admin/showallchapters">
        <input name="back_to_chapters" type="submit" value="Retour aux chapitres">
    </form>
</div>


