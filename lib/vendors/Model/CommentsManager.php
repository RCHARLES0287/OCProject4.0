<?php


namespace Model;


use Entity\ChapterEntity;
use Entity\CommentEntity;
use OCFram\Managers;
use PDO;

class CommentsManager extends Managers
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getAllComments()
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


}

