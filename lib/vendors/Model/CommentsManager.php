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


    public function getOneComment($commentId)
    {
        $answerCommentData = $this->db->prepare('SELECT id, chapter_id, content, number_of_warnings, visitor_pseudo, release_date
                                                            FROM blog_auteur_comments
                                                            WHERE id =:commentId');

        $answerCommentData->execute(array(
            'commentId' => $commentId
        ));

        $dbComment = $answerCommentData->fetch();

//        var_dump($dbComment);

        $commentEntity = new CommentEntity($dbComment);
        $commentEntity->setId($commentId);

//        var_dump($commentEntity);


        return $commentEntity;
    }


    public function updateOneComment(CommentEntity $commentEntity, $commentId)
    {
        $req = $this->db->prepare('UPDATE blog_auteur_comments
                                            SET chapter_id=:chapter_id, content=:content, number_of_warnings=:number_of_warnings, visitor_pseudo=:visitor_pseudo, release_date=:release_date
                                            WHERE id=:commentId');
        $req->execute(array(
            'commentId' => $commentId,
            'chapter_id' => $commentEntity->chapter_id(),
            'content' => $commentEntity->content(),
            'number_of_warnings' => $commentEntity->number_of_warnings(),
            'visitor_pseudo' => $commentEntity->visitor_pseudo(),
            'release_date' => $commentEntity->release_date()
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


    public function deleteOneComment($commentId)
    {
        $req = $this->db->prepare('DELETE FROM blog_auteur_comments WHERE id:=commentId');
        $req->execute(array(
            'commentId' => $commentId
        ));
    }

}

/*
$answerCommentsData->bindValue('chapterId', $chapterId, PDO::PARAM_INT);
$answerCommentsData->execute();
*/
