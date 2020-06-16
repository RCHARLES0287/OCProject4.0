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


    public function getAllComments($chapterId)
    {
        $answerCommentsData = $this->db->prepare('SELECT com.content AS comment, com.visitor_pseudo AS pseudo, com.release_date AS calendar
                                                            FROM blog_auteur_comments AS com
                                                            INNER JOIN blog_auteur_chapters AS chap
                                                            ON com.chapter_id = chap.id
                                                            WHERE chap.id =:chapterId');

        $answerCommentsData->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
        $answerCommentsData->execute();

        $commentsFeatures = [];

        $dbComments = $answerCommentsData->fetchAll();


        foreach ($dbComments as $comment)
        {
            $commentsFeatures[] = new ChapterEntity($comment);
        }

        return $commentsFeatures;

    }


}

