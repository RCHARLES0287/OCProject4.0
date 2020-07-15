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
            /*
                        $commentEntity = new CommentEntity();
                        $chapterId = $commentEntity->chapter_id();

                        var_dump('bla bla', $chapterId);
                        exit;

                        $this->page->addVar('chapter', $chapterId);

                        */
            $commentsManager = new CommentsManager();
            $commentsManager->deleteOneComment($request->postData('comment_id'));


        }
    }
}




