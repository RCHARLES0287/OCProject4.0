<?php
namespace App\Backend\Modules\Chapters\Model;

class ChapterSetManager
{
    public function setChapter($title, $chapter_number, $text, $release_date, $released)
    {
        $db = dbConnect();
        $req = $db->prepare('INSERT INTO chapters(title, chapter_number, text, release_date, released) VALUES(:title, :chapter_number, :text, :release_date, :released)');

        $req->execute(array(
            'title' => $title,
            'chapter_number' => $chapter_number,
            'text' => $text,
            'release_date' => $release_date,
            'released' => $released
            ));
        
        echo 'Le nouveau chapitre a bien été ajouté.';
    }

    public function deleteChapter($id)
    {
        $db = dbConnect();
        $req = $db->exec('DELETE FROM chapters WHERE id=$id');

        echo 'Le chapitre a été supprimé.';
    }

    public function updateChapter($title, $chapter_number, $text, $released, $id)
    {
        $db = dbConnect();
        $req = $db->prepare('UPDATE chapters SET title = :title, chapter_number = :chapter_number, text = :text, released = :released WHERE id = :id');

        $req->execute(array(
            'title' => $title,
            'chapter_number' => $chapter_number,
            'text' => $text,
            'released' => $released,
            'id' => $id
        ));

        echo 'Le chapitre a été modifié.';
    }


    public function getChapters()
    {
        $db = dbConnect();
        $req = $db->query('SELECT title, chapter_number, text, release_date, released FROM chapters');
        $chaptersData = [];

        while ($chaptersData[] = $req->fetch())
        {}
        return $chaptersData;
    }



    // Connexion à la base de données
    public function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=DWJ_Projet_4;charset=utf8', 'root', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}
