<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>



    <h2>Ici on confirme la suppression d'un commentaire</h2>

    <h3>Suppression de commentaires</h3>




    <div class="bloc_flash">
        <?php
        /** @var \Entity\ChapterEntity $chapter */
        ?>

        <p class="message-au-visiteur">Le commentaire a bien été supprimé.</p>

        <form method="post" action="/admin/showonechapter">
            <input id="chapter_id" type="hidden" name="chap_id" value='<?= $chapter->id() ?>'/><br />
            <input name="show_chapter_button" type="submit" value="Retour au chapitre">
        </form>


    </div>


</body>


<?php
