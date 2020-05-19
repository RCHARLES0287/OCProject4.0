

    <h2>Ici on pourra éditer les chapitres</h2>

    <h3>Création, modification et suppression de chapitres</h3>


    <?php
    /** @var \Entity\ChapterEntity $chapter */
    ?>


    <form method="post" action="/admin/editonechapter">
        <label for="chap_number">Numéro de chapitre</label>
        <input required id="chapter_number" type="number" name="chap_number" value='<?= $chapter->chapter_number() ?>' /><br />

        <label for="chapter_title">Titre du chapitre</label>
        <input required id="chapter_title" type="text" name="chapter_title" value='test du retour chapitre' /><br /><br />

        <label for="chapter_content">Texte du chapitre</label>
        <textarea class="tiny_mce" id="chapter_content" name="chapter_content" > Ici aussi je teste le retour du chapitre </textarea><br /><br />

        <input name="submit_button" type="submit" value="Enregistrer" />

        <input name="delete_button" type="submit" value="Supprimer" />
    </form>


    <script>
        tinymce.init({
            selector: 'textarea',
            // plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>



<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/editonechapter
 <route url="/admin/editonechapter" module="Chapters" action="editonechapter"/>-->



<!--
    <form method="post" action="/admin/editonechapter">
        <label for="chap_number">Numéro de chapitre</label>
        <input required id="chapter_number" type="number" name="chap_number" value='<?/*= $chapter->chapter_number() */?>' /><br />

        <label for="chapter_title">Titre du chapitre</label>
        <input required id="chapter_title" type="text" name="chapter_title" value='<?/*= $chapter->title() */?>' /><br /><br />

        <label for="chapter_content">Texte du chapitre</label>
        <textarea class="tiny_mce" id="chapter_content" name="chapter_content" > <?/*= $chapter->text() */?> </textarea><br /><br />

        <input name="submit_button" type="submit" value="Enregistrer" />

        <input name="delete_button" type="submit" value="Supprimer" />
    </form>

-->











    <!--
    <form method="post" action="/admin/editonechapter">
        <label for="chap_number">Numéro de chapitre</label>
        <input required id="chapter_number" type="number" name="chap_number" value="<?/*= $chapter->chapter_number() */?>" /><br />

        <label for="chapter_title">Titre du chapitre</label>
        <input required id="chapter_title" type="text" name="chapter_title" value="<?/*= $chapter->title() */?>" /><br /><br />

        <label for="chapter_content">Texte du chapitre</label>
        <textarea class="tiny_mce" id="chapter_content" type="text" name="chapter_content" > </textarea><br /><br />

        <input name="submit_button" type="submit" value="Enregistrer" />

        <input name="delete_button" type="submit" value="Supprimer" />
    </form>
    -->

