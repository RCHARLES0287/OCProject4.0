<h2 class="titres_vues">Accueil</h2>


<div class="liste_accueil_admin">

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    foreach ($chapters as $chapter)
    {
        ?>
        <div class="list_chap">
            <div class="chap_title_accueil_visitor">
                Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>
            </div>
            <div class="chap_text_accueil_visitor">
                <?= mb_substr(strip_tags($chapter->text()), 0, 300) . ' [...]' ?>
            </div>


            <form method="get" action="/visitor/showonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/>
                <input name="show_chapter_button" type="submit" value="Afficher">
            </form>

        </div>

        <?php
    }
    ?>

</div>



