<h2 class="titres_vues">Confirmation de validation du commentaire</h2>


<div class="bloc_flash">
    <?php
    /** @var int $chapterId */
    ?>

    <p class="message-au-visiteur">Le commentaire a bien été validé.</p>

    <form method="post" action="/admin/showonechapter">
        <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapterId ?>'/><br/>
        <input name="show_chapter_button" type="submit" value="Retour au chapitre">
    </form>


</div>



