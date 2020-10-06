<h2 class="titres_vues">Accueil</h2>

<div class="create_new_chapter">
    <form method="post" action="/admin/editonechapter">
        <input name="newchap_submit_button" type="submit" value="Nouveau chapitre">
    </form>
</div>


<div class="liste_accueil_admin">

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    foreach ($chapters as $chapter)
    {
        ?>
        <div class="list_chap">
            <div class="chap_title_accueil_admin">
                Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>.<br/>
            </div>
            <div class="chap_text_accueil_admin">
                <?= mb_substr(strip_tags($chapter->text()), 0, 300) . ' [...]' ?>
            </div>


            <div class="boutons_accueil_admin">
                <form method="post" action="/admin/confirmdeleteonechapter">
                    <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/>
                    <input name="delete_chapter_button" type="submit" value="Supprimer">
                </form>

                <form method="post" action="/admin/showonechapter">
                    <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/>
                    <input name="show_chapter_button" type="submit" value="Afficher">
                </form>

                <form method="post" action="/admin/editonechapter">
                    <input id="chapter_id_modify" type="hidden" name="chap_id_modify"
                           value='<?= $chapter->id() ?>'/>
                    <input name="modify_chapter_button" type="submit" value="Modifier">
                </form>
            </div>
        </div>

        <?php
    }
    ?>

</div>



