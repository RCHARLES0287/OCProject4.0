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





            <h2>Ajouter un commentaire</h2>

            <form method="post" action="/visitor/commentonechapter">
                <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />

                <label for="visitor_pseudo">Votre pseudo</label>
                <input required id="visitor_pseudo" type="text" name="visitor_pseudo" /> <br /><br />

                <label for="comment_content">Votre commentaire</label>
                <textarea class="tiny_mce" id="comment_content" name="comment_content" >  </textarea><br /><br />

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
                        Date de publication : <?= $comment->release_date() ?>

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

<!--

<label for="chapter_content">Texte du chapitre</label>
        <textarea class="tiny_mce" id="chapter_content" name="chapter_content" > < ?= htmlspecialchars($chapter->text()) ? > </textarea><br /><br />


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

-->
