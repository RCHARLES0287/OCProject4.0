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
    foreach ($chapters as $chapter)
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

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/showonechapter
 <route url="/admin/showonechapter" module="Chapters" action="showonechapter"/>-->
