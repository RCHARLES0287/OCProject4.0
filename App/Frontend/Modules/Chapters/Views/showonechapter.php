<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>
<h2>Contenu d'un seul chapitre</h2>



<ul>

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    {
        ?>
        <li>
            Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>.<br/>
            <?= $chapter->text() ?>
            <!--        Titre du chapitre : --><?//= $chapter->title() ?><!--<br/>-->


            <form method="post" action="/visitor/commentonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
                <input name="comment_chapter_button" type="submit" value="Commenter">
            </form>

        </li>

        <?php
    }
    ?>

</ul>


</body>
</html>

