<?php


namespace Model;


use Entity\ChapterEntity;
use OCFram\Managers;
use PDO;

class ChaptersManager extends Managers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllChapters()
    {
        $answerChaptersData = $this->db->prepare('SELECT id, title, chapter_number, text, release_date, released FROM blog_auteur_chapters');
        $answerChaptersData->execute();

        $chaptersFeatures = [];

        $dbChapters = $answerChaptersData->fetchAll();


        foreach ($dbChapters as $chapter)
        {
            $chaptersFeatures[] = new ChapterEntity($chapter);
        }

        return $chaptersFeatures;

    }

    public function getOneChapter($chapId)
    {
        $answerChapterData = $this->db->prepare('SELECT id, title, chapter_number, text, release_date, released FROM blog_auteur_chapters WHERE id=:chapId');
        $answerChapterData->execute(array(
            'chapId' => $chapId
        ));

        $dbChapter = $answerChapterData->fetch();

        if ($dbChapter === false)
        {
            throw new \Exception('Le chapitre dont l\'id est ' .$chapId. ' n\'existe pas');
        }
        else
        {
            return new ChapterEntity($dbChapter);
        }

    }

    /**
     * @param ChapterEntity $newChapterEntity L'entité chapitre
     * @throws \Exception
     */
    Public function saveOneChapter(ChapterEntity $newChapterEntity)
    {

        $testChapExist = $this->checkChapterNumber($newChapterEntity->chapter_number());

        var_dump('test du numéro de chapitre', $testChapExist);
        if ($testChapExist === true)
        {
            $req = $this->db->prepare('INSERT INTO blog_auteur_chapters(title, chapter_number, text, release_date) VALUES(:title, :chapter_number, :text, :release_date)');
            $req->execute(array(
                'title' => $newChapterEntity->title(),
                'chapter_number' => $newChapterEntity->chapter_number(),
                'text' => $newChapterEntity->text(),
                'release_date' => $newChapterEntity->release_date()
            ));
        }
        else
        {
            throw new \Exception('Le numéro de chapitre choisi existe déjà');
        }
    }


    public function deleteOneChapter($chapterId)
    {

        $testChapExist = $this->checkChapterId($chapterId);

        if ($testChapExist === true)
        {
            $req = $this->db->prepare('DELETE FROM blog_auteur_chapters WHERE id=:chapterId');
            $req->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
            $req->execute();
        }

    }


    private function checkChapterId($chapterId)
    {
        $dbId = $this->db->prepare("SELECT id FROM blog_auteur_chapters WHERE id=:chapterId");

        $dbId->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
        $dbId->execute();

        $idTest = $dbId->fetch(PDO::FETCH_COLUMN);
        if($idTest == $chapterId)
        {
            return true;
        }
        else{
            return false;
        }
    }



    private function checkChapterNumber($chapterNumber)
    {
        $dbNumber = $this->db->prepare("SELECT chapter_number FROM blog_auteur_chapters WHERE chapter_number=:chapterNumber");

        $dbNumber->bindValue('chapterNumber', $chapterNumber, PDO::PARAM_INT);
        $dbNumber->execute();

        $numberTest = $dbNumber->fetch(PDO::FETCH_COLUMN);
        if($numberTest == $chapterNumber)
        {
            return false;
        }
        else{
            return true;
        }
    }
}


