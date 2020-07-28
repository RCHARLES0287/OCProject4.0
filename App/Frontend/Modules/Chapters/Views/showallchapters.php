






<h2 class="titres_vues">Accueil</h2>





<ul>

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    foreach ($chapters as $chapter)
    {
        ?>
        <li>
            Chapitre <?= $chapter->chapter_number() ?>: <?= htmlspecialchars($chapter->title()) ?>.<br/>
            <?= htmlspecialchars($chapter->text()) ?>
            <!--        Titre du chapitre : --><?//= $chapter->title() ?><!--<br/>-->

            <?php echo $chapter->id() ?>

            <form method="get" action="/visitor/showonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
                <input name="show_chapter_button" type="submit" value="Afficher">
            </form>

        </li>

        <?php
    }
    ?>

</ul>



