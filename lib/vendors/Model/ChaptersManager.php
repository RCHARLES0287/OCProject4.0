<?php


namespace Model;


use Entity\ChaptersEntity;
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

        $dbChapters = $answerChaptersData->fetchAll();

        $chaptersFeatures = new ChaptersEntity($dbChapters);

        return $chaptersFeatures;

    }
}
