

<h2>Ici on propose de valider ou d'annuler la suppression d'un chapitre</h2>

<h3>Suppression de chapitres</h3>




<div class="bloc_flash">
    <p classe="message-au-visiteur">Etes-vous sûr de vouloir supprimer le chapitre <?= ?>?</p>

    <form method="post" action="/admin/deleteonechapter">
        <input name="delete_chapter_button" type="button" value="Supprimer">
    </form>

    <form method="post" action="/admin/showallchapters">
        <input name="abort_chapter_cancellation_button" type="button" value="Annuler">
    </form>
</div>


