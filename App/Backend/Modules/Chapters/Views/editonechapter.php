<?php
if ($_SESSION['connexion_status'] === 'connected')
    {
        ?>
        <h2 class="titres_vues">Edition des chapitres</h2>




        <?php
        /** @var \Entity\ChapterEntity $chapter */
        ?>

        <form method="post" class="new_chap_form" action="/admin/editonechapter">

            <input required id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>' />

            <label for="chapter_number">Numéro de chapitre</label>
            <input required id="chapter_number" type="number" name="chap_number" value='<?= $chapter->chapter_number() ?>' /><br /><br />

            <label for="chapter_title">Titre du chapitre</label>
            <input required id="chapter_title" type="text" name="chapter_title" value='<?= htmlspecialchars($chapter->title()) ?>' /> <br /><br />

            <label for="chapter_content">Texte du chapitre</label>
            <textarea required class="tiny_mce" id="chapter_content" name="chapter_content" > <?= htmlspecialchars($chapter->text()) ?> </textarea><br /><br />

            <input name="submit_button" type="submit" value="Enregistrer" />

            <input name="delete_button" type="submit" value="Supprimer" />
        </form>
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




<script type="application/javascript">
    tinymce.init({
        selector: 'textarea',
        // plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>

