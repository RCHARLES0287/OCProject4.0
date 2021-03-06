<?php

namespace App\Frontend\Modules\Comments\Controller;

use Entity\CommentEntity;
use Model\CommentsManager;
use OCFram\BackController;
use OCFram\HTTPRequest;
use OCFram\Utilitaires;


class CommentsController extends BackController
{
    public function executeCommentonechapter(HTTPRequest $request)
    {

        if ($request->postExists('comment_chapter_button') && !Utilitaires::emptyMinusZero($request->postData('visitor_pseudo')) && !Utilitaires::emptyMinusZero($request->postData('comment_content')) && !Utilitaires::emptyMinusZero($request->postData('chap_id')))
        {
            $newCommentContent = [
                'chapter_id' => $request->postData('chap_id'),
                'content' => $request->postData('comment_content'),
                'number_of_warnings' => 0,
                'visitor_pseudo' => $request->postData('visitor_pseudo'),
                'release_date' => date('Y-m-d H:i:s')
            ];

            $newComment = new CommentEntity($newCommentContent);
            $commentsManager = new CommentsManager();
            $commentsManager->saveOneComment($newComment);

        }

        header('Location: /visitor/showonechapter?chap_id=' . $request->postData('chap_id'));     //Ne jamais mettre l'URL absolue
        exit;
    }

    public function executeWarningoncomment(HTTPRequest $request)
    {
        if ($request->postExists('send_warning') && !Utilitaires::emptyMinusZero($request->postData('comment_id')))
        {
            $commentsManager = new CommentsManager();

            $selectedComment = $commentsManager->getOneComment($request->postData('comment_id'));

            if ($selectedComment->number_of_warnings() !== -1)
            {
                $newNumberOfWarnings = $selectedComment->number_of_warnings() + 1;

                $selectedComment->setNumber_of_warnings($newNumberOfWarnings);

                $commentsManager->updateOneComment($selectedComment, $request->postData('comment_id'));

                header('Location: /visitor/showonechapter?chap_id=' . $selectedComment->chapter_id());
                exit;
            }
            else
            {
                header('Location: /visitor/showonechapter?chap_id=' . $selectedComment->chapter_id());
                exit;
            }
        }
        header('Location: /visitor/showallchapters');     //Ne jamais mettre l'URL absolue
        exit;
    }

}
