<?php
namespace App\Backend\Modules\Comments\Controller;

use Entity\ChapterEntity;
use Entity\CommentEntity;
use Model\ChaptersManager;
use Exception;
use Model\CommentsManager;
use OCFram\BackController;
use OCFram\Entity;
use OCFram\HTTPRequest;


class CommentsController extends BackController
{
    public function executeDeleteonecomment (HTTPRequest $request)
    {
        if ($request->postExists('delete_comment') && !empty($request->postData('comment_id')))
        {
            $commentsManager = new CommentsManager();
            $comment = $commentsManager->getOneComment($request->postData('comment_id'));
            $chapterId = $comment->chapter_id();
            $this->page->addVar('chapterId', $chapterId);


            /*
                        $commentEntity = new CommentEntity();
                        $chapterId = $commentEntity->chapter_id();

                        var_dump('bla bla', $chapterId);
                        exit;

                        $this->page->addVar('chapter', $chapterId);

                        */

            $commentsManager->deleteOneComment($request->postData('comment_id'));



        }
    }

    public function executeValidateonecomment (HTTPRequest $request)
    {
        if ($request->postExists('validate_comment') && !empty($request->getData('comment_id')))
        {
            $commentsManager = new CommentsManager();

            $selectedComment = $commentsManager->getOneComment($request->getData('comment_id'));

//            La valeur -1 pour le nombre de warnings correspondra aux commentaires qui ont été validés par l'administrateur
            $newNumberOfWarnings = -1;

            $selectedComment->setNumber_of_warnings($newNumberOfWarnings);

            $commentsManager->updateOneComment($selectedComment, $request->getData('comment_id'));

            $this->page->addVar('chapterId', $selectedComment->chapter_id());
        }
    }
}





