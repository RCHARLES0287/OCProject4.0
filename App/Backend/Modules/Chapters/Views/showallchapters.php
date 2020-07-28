






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
            <form method="post" action="/admin/confirmdeleteonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
                <input name="delete_chapter_button" type="submit" value="Supprimer">
            </form>

            <form method="post" action="/admin/showonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
                <input name="show_chapter_button" type="submit" value="Afficher">
            </form>

            <form method="post" action="/admin/editonechapter">
                <input id="chapter_id_modify" type="hidden" name="chap_id_modify" value='<?= $chapter->id() ?>'/><br />
                <input name="modify_chapter_button" type="submit" value="Modifier">
            </form>
        </li>

        <?php
    }
    ?>

</ul>

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/showallchapters
 <route url="/admin/showallchapters" module="Chapters" action="showallchapters"/>-->
 