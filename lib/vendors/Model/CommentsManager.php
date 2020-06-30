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


    public function getOneComment($chapterId, $commentId)
    {
        $answerCommentData = $this->db->prepare('SELECT id, chapter_id, content, number_of_warnings, visitor_pseudo, release_date
                                                            FROM blog_auteur_comments
                                                            WHERE chapter_id =:chapterId AND id =:commentId');

        $answerCommentData->execute(array(
            'chapterId' => $chapterId,
            'commentId' => $commentId
        ));

        $dbComment = $answerCommentData->fetchAll();

        return new CommentEntity($dbComment);
    }


    public function updateWarnings($newWarnings, $commentId)
    {
        $req = $this->db->prepare('UPDATE blog_auteur_comments SET number_of_warnings=:newWarnings WHERE id=:commentId');
        $req->execute(array(
            'newWarnings' => $newWarnings,
            'commentId' => $commentId
        ));
    }


    public function saveOneComment(CommentEntity $newCommentEntity)
    {

        $req = $this->db->prepare('INSERT INTO blog_auteur_comments(chapter_id, content, number_of_warnings, visitor_pseudo, release_date) VALUES(:chapter_id, :content, :number_of_warnings, :visitor_pseudo, :release_date)');
        $req->execute(array(
            'chapter_id' => $newCommentEntity->chapter_id(),
            'content' => $newCommentEntity->content(),
            'number_of_warnings' => $newCommentEntity->number_of_warnings(),
            'visitor_pseudo' => $newCommentEntity->visitor_pseudo(),
            'release_date' => $newCommentEntity->release_date()
        ));

    }


}

/*
$answerCommentsData->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
$answerCommentsData->execute();
*/
