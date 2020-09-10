<?php
namespace App\Frontend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
use Model\ChaptersManager;
use Model\CommentsManager;
use Exception;
use OCFram\BackController;
use OCFram\HTTPRequest;
use OCFram\Utilitaires;


class ChaptersController extends BackController
{
    public function executeShowallchapters (HTTPRequest $request)
    {
        $chaptersManager = new ChaptersManager();

        $allChaptersData = $chaptersManager->getAllChapters();

        $this->page->addVar('chapters', $allChaptersData);

    }


    public function executeShowonechapter (HTTPRequest $request)
    {

        $this->page->addVar('comments', []);
        $this->page->addVar('chapter', new ChapterEntity());

        if (!Utilitaires::emptyMinusZero($request->getData('chap_id')))
        {
//            Afficher le chapitre
            $chapterManager = new ChaptersManager();
            $chapterEntity = $chapterManager->getOneChapter($request->getData('chap_id'));
            $this->page->addVar('chapter', $chapterEntity);


//            Afficher les commentaires
            $commentsManager = new CommentsManager();

            $allCommentsData = $commentsManager->getAllComments($request->getData('chap_id'));

            $this->page->addVar('comments', $allCommentsData);

        }

        else
        {
            throw new Exception('Vous devez sélectionner un chapitre');
        }

    }

}

