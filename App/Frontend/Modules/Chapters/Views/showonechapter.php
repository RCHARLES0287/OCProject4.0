<div class="chap_view">

    <?php

    /** @var \Entity\ChapterEntity $chapter */
    {
        ?>
        <h1 class="chap_title">
            Chapitre <?= $chapter->chapter_number() ?>: <?= $chapter->title() ?>
        </h1>

        <div class="chapter_bloc">
            <?= $chapter->text() ?>
        </div>


        <h3>Ajouter un commentaire</h3>

        <form method="post" action="/visitor/commentonechapter">
            <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br/>

            <label for="visitor_pseudo">Votre pseudo</label>
            <input required id="visitor_pseudo" type="text" name="visitor_pseudo"/> <br/><br/>

            <label for="comment_content">Votre commentaire</label>
            <textarea class="tiny_mce" id="comment_content" name="comment_content">  </textarea><br/><br/>

            <input name="comment_chapter_button" type="submit" value="Commenter">
        </form>

        <script>
            tinymce.init({
                selector: 'textarea',
                // plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
            });
        </script>

        <div class="comments_with_warnings">

            <?php
            if (count($comments) === 0)
            {
                ?>
                <h3>Soyez le premier à laisser un commentaire</h3>
                <?php
            }
            else
            {
                ?>
                <h3>Commentaires</h3>

                <ul class="list_commentaires_showonechapter_visitor">

                    <?php
                    /** @var \Entity\CommentEntity $comment */
                    foreach ($comments as $comment)
                    {
                        ?>

                        <li>

                            <div class="comment_showonechapter_visitor">
                                <?= $comment->visitor_pseudo() ?> :
                            </div>
                            <div class="comment_showonechapter_content">
                                <?= $comment->content() ?>
                            </div>
                            <div class="date_publication_showonechapter_visitor">
                                Date de publication : <?= $comment->release_date() ?>
                            </div>


                            <form method="post" action="/visitor/warningoncomment">
                                <input id="comment_id" type="hidden" name="comment_id"
                                       value='<?= $comment->id() ?>'/><br/>
                                <input name="send_warning" type="submit" value="Signaler">
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

        <?php
    }
    ?>

</div>


