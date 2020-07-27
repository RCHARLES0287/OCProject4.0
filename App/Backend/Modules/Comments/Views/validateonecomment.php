





<h2>Ici on confirme la validation d'un commentaire</h2>

<h3>Validation de commentaires</h3>




<div class="bloc_flash">
    <?php
    /** @var int $chapterId */
    ?>

<!--
    <?php
/*    var_dump('zlkrgc,jklf', $chapterId);
    exit;
    */?>

-->
    <p class="message-au-visiteur">Le commentaire a bien été validé.</p>

    <form method="post" action="/admin/showonechapter">
        <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapterId ?>'/><br />
        <input name="show_chapter_button" type="submit" value="Retour au chapitre">
    </form>


</div>

