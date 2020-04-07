<?php


namespace Model;


use Entity\ChapterEntity;
use OCFram\Managers;

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

    public function getOneChapter($chapNumber)
    {
        $answerChapterData = $this->db->prepare('SELECT id, title, chapter_number, text, release_date, released FROM blog_auteur_chapters WHERE chapter_number=$chapNumber');
        $answerChapterData->execute();

        $chapterFeatures = [];

        $dbChapter = $answerChapterData->fetch();

        $chapterFeatures[] = new ChapterEntity($dbChapter);

        return $chapterFeatures;
    }

    Public function saveOneChapter($chapterNumber, $chapterTitle, $chapterContent, $releaseDate)
    {
        if(!empty($chapterNumber) && !empty($chapterTitle) && !empty($chapterContent))
        {
            $req = $this->db->prepare('INSERT INTO blog_auteur_chapters(title, chapter_number, text, release_date) VALUES(:title, :chapter_number, :text, :release_date)');
            $req->execute(array(
                'title' => $title,
                'chapter_number' => $chapter_number,
                'text' => $chapterContent,
                'release_date' => $releaseDate
            ));
        }
    }
}
