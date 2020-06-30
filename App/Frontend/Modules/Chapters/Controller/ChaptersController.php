<?php
namespace App\Frontend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
use Entity\CommentEntity;
use Model\ChaptersManager;
use Model\CommentsManager;
use Exception;
use OCFram\BackController;
use OCFram\Entity;
use OCFram\HTTPRequest;


class ChaptersController extends BackController
{
    public function executeShowallchapters (HTTPRequest $request)
    {
        $chaptersManager = new ChaptersManager();

        $allChaptersData = $chaptersManager->getAllChapters();

        $this->page->addVar('chapters', $allChaptersData);

//        var_dump($allChaptersData);
    }


    public function executeShowonechapter (HTTPRequest $request)
    {

        if ($request->postExists('show_chapter_button') && !empty($request->postData('chap_id')))
        {
//            Afficher le chapitre
            $chapterManager = new ChaptersManager();
            $chapterEntity = $chapterManager->getOneChapter($request->postData('chap_id'));
            $this->page->addVar('chapter', $chapterEntity);


//            Afficher les commentaires
            $commentsManager = new CommentsManager();

            $allCommentsData = $commentsManager->getAllComments($request->postData('chap_id'));

//            var_dump($allCommentsData);

            $this->page->addVar('comments', $allCommentsData);

        }
        else
        {
            throw new Exception('Vous devez sélectionner un chapitre');
        }


    }


    public function executeCommentonechapter (HTTPRequest $request)
    {

        if ($request->postExists('comment_chapter_button') && !empty($request->postData('visitor_pseudo')) && !empty($request->postData('comment_content')) && !empty($request->postData('chap_id')))
        {
            $newCommentContent = [
                'chapter_id' => $request->postData('chap_id'),
                'content' => $request->postData('comment_content'),
                'number_of_warnings' => 0,
                'visitor_pseudo' => $request->postData('visitor_pseudo'),
                'release_date' => date('Y-m-d')
            ];

            $newComment = new CommentEntity($newCommentContent);

            $commentsManager = new CommentsManager();
            $commentsManager->saveOneComment($newComment);

            header('Location: /visitor/showallchapters');     //Ne jamais mettre l'URL absolue
            exit;

        }

    }


    public function executeWarningoncomment (HTTPRequest $request)
    {
        if ($request->postExists('send_warning') && isset($_POST['warn_comment_checkbox']) && !empty($request->postData('chapter_id_comment')) && !empty($request->postData('comment_id')))
        {
            $commentsManager = new CommentsManager();
            $selectedComment = $commentsManager->getOneComment($request->postData('chapter_id_comment'), $request->postData('comment_id'));

            $newNumberOfWarnings = $selectedComment->number_of_warnings() += 1;
            $selectedComment->setNumber_of_warnings($newNumberOfWarnings);

            $newCommentsManager = new CommentsManager();
            $newCommentsManager->updateWarnings($request->postData('chapter_id_comment'), $request->postData('comment_id'));
        }
    }

}
