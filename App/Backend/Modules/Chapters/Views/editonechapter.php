<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
    <script src="https://cdn.tiny.cloud/1/hgsrcotr84d8b32tbwy0opsqe12o7cimt1j2ne74vioz1qhi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <h2>Ici on pourra éditer les chapitres</h2>

    <h3>Création, modification et suppression de chapitres</h3>

    <form method="post" action="/admin/editonechapter">
        <label for="chap_number">Numéro de chapitre</label>
        <input required id="chapter_number" type="number" name="chap_number" /><br />

        <label for="chapter_title">Titre du chapitre</label>
        <input required id="chapter_title" type="text" name="chapter_title" /><br /><br />

        <label for="chapter_content">Texte du chapitre</label>
        <textarea required id="chapter_content" type="text" name="chapter_content" ></textarea><br /><br />

        <input name="submit_button" type="submit" value="Enregistrer" />

        <input name="delete_button" type="submit" value="Supprimer" />
    </form>

    <textarea>
    Welcome to TinyMCE!
    </textarea>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>


</body>
</html>

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/editonechapter
 <route url="/admin/editonechapter" module="Chapters" action="editonechapter"/>-->
