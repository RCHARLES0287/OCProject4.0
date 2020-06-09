<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>
<h2>Ici on pourra commenter un chapitre</h2>



<ul>

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    {
        ?>
        <li>
            Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>.<br/>
            <?= $chapter->text() ?>
            <!--        Titre du chapitre : --><?//= $chapter->title() ?><!--<br/>-->

        </li>

        <?php
    }
    ?>

</ul>


</body>
</html>

