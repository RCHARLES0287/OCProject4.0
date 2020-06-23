<?php
namespace App\Frontend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
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

        if ($request->postExists('comment_chapter_button') && !empty($request->postData('chap_id')))
        {
            var_dump('On pourra ajouter des commentaires ici');
        }

    }


}
