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



            <h3>Commentaires</h3>

            <ul>

                <?php
                //                var_dump($comments);
                /** @var \Entity\CommentEntity $comment */
                foreach ($comments as $comment)
                {
                    ?>

                    <li>


                        <?= $comment->visitor_pseudo() ?> : <?= $comment->content() ?>.<br/>
                        Date de publication : <?= $comment->release_date() ?> <br/>
                        Nombre de signalements : <?= $comment->number_of_warnings() ?>

                        <form method="post" action="/admin/deleteonecomment">
                            <input id="comment_id" type="hidden" name="comment_id" value='<?= $comment->id() ?>'/><br />
                            <input name="delete_comment" type="submit" value="Supprimer">
                        </form>

                    </li>

                    <?php
                }
                ?>
            </ul>

        </li>

        <?php
    }
    ?>

</ul>



</body>
</html>

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/showonechapter
 <route url="/admin/showonechapter" module="Chapters" action="showonechapter"/>-->





