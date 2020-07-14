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

        $this->page->addVar('comments', []);
        $this->page->addVar('chapter', new ChapterEntity());

//        if ($request->postExists('show_chapter_button') && !empty($request->postData('chap_id')))
        if (!empty($request->getData('chap_id')))
        {
//            Afficher le chapitre
            $chapterManager = new ChaptersManager();
            $chapterEntity = $chapterManager->getOneChapter($request->getData('chap_id'));
            $this->page->addVar('chapter', $chapterEntity);


//            Afficher les commentaires
            $commentsManager = new CommentsManager();

            $allCommentsData = $commentsManager->getAllComments($request->getData('chap_id'));

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
                'release_date' => date('Y-m-d H:i:s')
            ];

            $newComment = new CommentEntity($newCommentContent);

            $commentsManager = new CommentsManager();
            $commentsManager->saveOneComment($newComment);


        }

        header('Location: /visitor/showallchapters');     //Ne jamais mettre l'URL absolue
        exit;


    }


    public function executeWarningoncomment (HTTPRequest $request)
    {
        if ($request->postExists('send_warning') && !empty($request->postData('comment_id')))
        {
//            var_dump($request->postData('chapter_id_comment'));
            $commentsManager = new CommentsManager();

            $selectedComment = $commentsManager->getOneComment($request->postData('comment_id'));

//            var_dump('Voici le contenu du commentaire', $selectedComment);



            $newNumberOfWarnings = $selectedComment->number_of_warnings() + 1;
//            var_dump($newNumberOfWarnings);


            $selectedComment->setNumber_of_warnings($newNumberOfWarnings);

//            var_dump($selectedComment);


            $commentsManager->updateOneComment($selectedComment, $request->postData('comment_id'));

//            var_dump('pif paf pouf');

            header('Location: /visitor/showonechapter?chap_id='.$selectedComment->chapter_id());
            exit;


        }

        header('Location: /visitor/showallchapters');     //Ne jamais mettre l'URL absolue
        exit;

/*
        else
        {
            header('Location: /visitor/showallchapters');     //Ne jamais mettre l'URL absolue
            exit;
        }
        */
    }

}
