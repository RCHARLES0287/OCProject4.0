<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>

<h2>Ici c'est le frontend</h2>

<h2>Liste de tous les chapitres</h2>

<h3>Il y aura les titres de chapitres :</h3>

<h3>Il y aura aussi le texte des chapitres</h3>


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



