<div class="chap_view">

    <?php

    /** @var \Entity\ChapterEntity $chapter */


    ?>
    <h1 class="chap_title">
        Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>
    </h1>

    <div class="chapter_bloc">

        <?= $chapter->text() ?>

    </div>

    <div class="comments_with_warnings">

        <?php
        if (count($comments_with_warnings) === 0)
        {
            ?>
            <h3>Aucun commentaire signalé</h3>
            <?php
        }
        else
        {
            ?>
            <h3>Commentaires signalés</h3>

            <ul>

                <?php
                /** @var \Entity\CommentEntity[] $comments_with_warnings */
                foreach ($comments_with_warnings as $comment)
                {
                    ?>

                    <li>

                        <?= $comment->visitor_pseudo() ?> :
                        <div class="comment_showonechapter_content"><?= $comment->content() ?></div>
                        <br/>
                        Date de publication : <?= $comment->release_date() ?> <br/>
                        Nombre de signalements : <?= $comment->number_of_warnings() ?>

                        <form method="get" action="/admin/validateonecomment">
                            <input id="comment_id" type="hidden" name="comment_id"
                                   value='<?= $comment->id() ?>'/><br/>
                            <input name="validate_comment" type="submit" value="Valider">
                        </form>

                        <form method="post" action="/admin/deleteonecomment">
                            <input id="comment_id" type="hidden" name="comment_id"
                                   value='<?= $comment->id() ?>'/><br/>
                            <input name="delete_comment" type="submit" value="Supprimer">
                        </form>

                    </li>

                    <?php
                }
                ?>
            </ul>
            <?php
        }
        ?>
    </div>

    <div class="comments_with_no_warnings">

        <?php
        if (count($comments_with_no_warnings) === 0)
        {
            ?>
            <h3>Aucun commentaire non signalé ou validé</h3>
            <?php
        }
        else
        {
            ?>
            <h3>Commentaires non signalés ou validés</h3>

            <ul>

                <?php
                /** @var \Entity\CommentEntity[] $comments_with_no_warnings */
                foreach ($comments_with_no_warnings as $comment)
                {
                    ?>

                    <li>

                        <?= $comment->visitor_pseudo() ?> :
                        <div class="comment_showonechapter_content"><?= $comment->content() ?></div>
                        <br/>
                        Date de publication : <?= $comment->release_date() ?> <br/>
                        <?php
                        if ($comment->number_of_warnings() !== -1)
                        {
                            echo('Nombre de signalements : ' . $comment->number_of_warnings());
                        }
                        else
                        {
                            echo('Commentaire validé');
                        }
                        ?>

                        <form method="get" action="/admin/validateonecomment">
                            <input id="comment_id" type="hidden" name="comment_id"
                                   value='<?= $comment->id() ?>'/><br/>
                            <input name="validate_comment" type="submit" value="Valider">
                        </form>

                        <form method="post" action="/admin/deleteonecomment">
                            <input id="comment_id" type="hidden" name="comment_id"
                                   value='<?= $comment->id() ?>'/><br/>
                            <input name="delete_comment" type="submit" value="Supprimer">
                        </form>

                    </li>

                    <?php
                }
                ?>
            </ul>

            <?php
        }
        ?>
    </div>
</div>








