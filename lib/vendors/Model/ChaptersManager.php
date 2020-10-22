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
        $answerChaptersData = $this->db->prepare('SELECT id, title, chapter_number, text, release_date, released FROM blog_auteur_chapters ORDER BY chapter_number DESC');
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
            throw new \Exception('Le chapitre dont l\'id est ' . $chapId . ' n\'existe pas');
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
    public function saveOneChapter(ChapterEntity $newChapterEntity)
    {

        $testChapExist = $this->checkChapterNumber($newChapterEntity);
        if ($testChapExist === true)
        {

            if ($newChapterEntity->id() == 0)
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
                $req = $this->db->prepare('UPDATE blog_auteur_chapters SET title=:title, chapter_number=:chapter_number, text=:text, release_date=:release_date WHERE id=:id');
                $req->execute(array(
                    'title' => $newChapterEntity->title(),
                    'chapter_number' => $newChapterEntity->chapter_number(),
                    'text' => $newChapterEntity->text(),
                    'release_date' => $newChapterEntity->release_date(),
                    'id' => $newChapterEntity->id()
                ));
            }
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
        if ($idTest == $chapterId)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function checkChapterNumber(ChapterEntity $chapterEntity)
    {
        $dbNumber = $this->db->prepare("SELECT chapter_number FROM blog_auteur_chapters WHERE chapter_number=:chapterNumber AND id!=:chapterId");

        $dbNumber->bindValue('chapterNumber', $chapterEntity->chapter_number(), PDO::PARAM_INT);
        $dbNumber->bindValue('chapterId', $chapterEntity->id(), PDO::PARAM_INT);
        $dbNumber->execute();

        $numberTest = $dbNumber->fetch(PDO::FETCH_COLUMN);
//        Le test se fait avec un "triple =" pour vérifier à la fois la valeur ET le type afin de ne pas matcher avec la valeur 0
        if ($numberTest === false)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}


