<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>
<h2>Ici on pourra éditer les chapitres</h2>

<h3>Création, modification et suppression de chapitres</h3>

<form method="post" action="/admin/editonechapter">
    <label for="chap_number">Numéro de chapitre</label>
    <input required id="chapter_number" type="number" name="chap_number" /><br />

    <label for="chapter_title">Titre du chapitre</label>
    <input required id="chapter_title" type="text" name="chapter_title" /><br /><br />

    <label for="chapter_content">Titre du chapitre</label>
    <input required id="chapter_content" type="text" name="chapter_content" /><br /><br />

    <input name="submit_button" type="submit" value="Enregistrer" />

    <input name="delete_button" type="submit" value="Supprimer" />
</form>


</body>
</html>

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/showallchapters
 <route url="/admin/showallchapters" module="Chapters" action="showallchapters"/>-->
