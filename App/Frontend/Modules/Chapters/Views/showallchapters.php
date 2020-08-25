






<h2 class="titres_vues">Accueil</h2>





<ul>

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    foreach ($chapters as $chapter)
    {
        ?>
        <li>
            <div class="chap_title_accueil_visitor">
                Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>.<br/>
            </div>
            <div class="chap_text_accueil_visitor">
                <?= $chapter->text() ?>
            </div>


            <form method="get" action="/visitor/showonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
                <input name="show_chapter_button" type="submit" value="Afficher">
            </form>

        </li>

        <?php
    }
    ?>

</ul>



