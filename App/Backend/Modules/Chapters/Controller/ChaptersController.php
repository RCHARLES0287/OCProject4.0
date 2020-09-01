<?php
namespace App\Backend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
use Model\ChaptersManager;
use Exception;
use Model\CommentsManager;
use OCFram\BackController;
use OCFram\HTTPRequest;


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

        /** @noinspection DuplicatedCode */
        if (!empty($request->postData('chap_id')))
        {
//            Afficher le chapitre
            $chapterManager = new ChaptersManager();
            $chapterEntity = $chapterManager->getOneChapter($request->postData('chap_id'));
            $this->page->addVar('chapter', $chapterEntity);


//            Afficher les commentaires avec warnings
            $commentsManager = new CommentsManager();

            $commentsWithWarnings = $commentsManager->getCommentsWithWarnings($request->postData('chap_id'));

            $this->page->addVar('comments_with_warnings', $commentsWithWarnings);


//            Afficher les commentaires sans warnings
            $commentsManager = new CommentsManager();

            $commentsWithNoWarnings = $commentsManager->getCommentsWithNoWarnings($request->postData('chap_id'));

            $this->page->addVar('comments_with_no_warnings', $commentsWithNoWarnings);

        }

        else
        {
            throw new Exception('Vous devez sélectionner un chapitre');
        }

    }

    public function executeEditonechapter (HTTPRequest $request)
    {

        $this->page->addVar('chapter', new ChapterEntity());

        if ($request->postExists('modify_chapter_button') && !empty($request->postData('chap_id_modify')))
        {

            $this->page->addVar('chapter', new ChapterEntity());
            $chaptersManager = new ChaptersManager();
            $chapterEntity = $chaptersManager->getOneChapter($request->postData('chap_id_modify'));
            $this->page->addVar('chapter', $chapterEntity);
        }

        else if($request->postExists('submit_button') && !empty($request->postData('chap_number')) && !empty($request->postData('chapter_title')) && !empty($request->postData('chapter_content')))
        {

            $chaptersManager = new ChaptersManager();
            $chapterEntity = $chaptersManager->getOneChapter($request->postData('chap_number'));


            $testChapExist = $chaptersManager->checkChapterNumber($chapterEntity);

            if ($testChapExist === false)
            {
                var_dump($chapterEntity);
                exit;
                throw new Exception('Ce chapitre existe déjà');
            }
            else
            {

                $newChapterContent = [
                    'id' => $request->postData('chap_id'),
                    'chapter_number' => $request->postData('chap_number'),
                    'title' => $request->postData('chapter_title'),
                    'text' => $request->postData('chapter_content'),
                    'release_date' => date('Y-m-d')
                ];

                $newChapter = new ChapterEntity($newChapterContent);

                $chaptersManager = new ChaptersManager();
                $chaptersManager->saveOneChapter($newChapter);

                header('Location: /admin/showallchapters');     //Ne jamais mettre l'URL absolue
                exit;
            }


            /*
            $newChapterContent = [
                'id' => $request->postData('chap_id'),
                'chapter_number' => $request->postData('chap_number'),
                'title' => $request->postData('chapter_title'),
                'text' => $request->postData('chapter_content'),
                'release_date' => date('Y-m-d')
            ];

            $newChapter = new ChapterEntity($newChapterContent);

            $chaptersManager = new ChaptersManager();
            $chaptersManager->saveOneChapter($newChapter);

            header('Location: /admin/showallchapters');     //Ne jamais mettre l'URL absolue
            exit;
            */
        }

        else if ($request->postExists('submit_button'))
        {
            throw new Exception('Vous devez remplir chacun des champs avant de valider');
        }

    }

    public function executeConfirmdeleteonechapter (HTTPRequest $request)
    {
        if (empty($request->postData('chap_id')))
        {
            throw new \Exception('Impossible de supprimer ce chapitre : id du chapitre manquant');
        }
        else
        {
            $chapterManager = new ChaptersManager();
            $chapterEntity = $chapterManager->getOneChapter($request->postData('chap_id'));
            $this->page->addVar('chapter', $chapterEntity);
        }
    }

    public function executeDeleteonechapter (HTTPRequest $request)
    {
        if($request->postExists('delete_chapter_button') && !empty($request->postData('chap_id')))
        {
            $chapterManager = new ChaptersManager();
            $chapterManager->deleteOneChapter($request->postData('chap_id'));
        }
    }
}


