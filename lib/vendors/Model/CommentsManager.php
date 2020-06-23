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
        $answerCommentsData = $this->db->prepare('SELECT id, chapter_id, content, number_of_warnings, visitor_pseudo, release_date
                                                            FROM blog_auteur_comments
                                                            WHERE chapter_id =:chapterId');

        $answerCommentsData->execute(array(
            'chapterId' => $chapterId
        ));

        $commentsFeatures = [];

        $dbComments = $answerCommentsData->fetchAll();

//        var_dump($dbComments);

        foreach ($dbComments as $comment)
        {
            $commentsFeatures[] = new CommentEntity($comment);
        }

        return $commentsFeatures;

    }


}

/*
$answerCommentsData->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
$answerCommentsData->execute();
*/
