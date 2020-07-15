<?php
namespace App\Backend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
use Entity\CommentEntity;
use Model\ChaptersManager;
use Exception;
use Model\CommentsManager;
use OCFram\BackController;
use OCFram\Entity;
use OCFram\HTTPRequest;


class ChaptersController extends BackController
{
    public function executeShowallchapters (HTTPRequest $request)
    {
        $chaptersManager = new ChaptersManager();



        $allChaptersData = $chaptersManager->getAllChapters();

//        var_dump($allChaptersData);
        $this->page->addVar('chapters', $allChaptersData);
        
    }

    public function executeShowonechapter (HTTPRequest $request)
    {

//        if ($request->postExists('show_chapter_button') && !empty($request->postData('chap_id')))
        /** @noinspection DuplicatedCode */
        if (!empty($request->postData('chap_id')))
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

    public function executeEditonechapter (HTTPRequest $request)
    {

        $this->page->addVar('chapter', new ChapterEntity());

        if ($request->postExists('modify_chapter_button') && !empty($request->postData('chap_id_modify')))
        {

            $this->page->addVar('chapter', new ChapterEntity());
//            throw new \Exception('TEST DU CONTROLLER CHAPITRES PARTIE EDITION');
            $chaptersManager = new ChaptersManager();
            $chapterEntity = $chaptersManager->getOneChapter($request->postData('chap_id_modify'));
            $this->page->addVar('chapter', $chapterEntity);
//            var_dump($chapterEntity);
//            throw new \Exception('TEST DU CONTROLLER CHAPITRES PARTIE EDITION');
        }

        else if($request->postExists('submit_button') && !empty($request->postData('chap_number')) && !empty($request->postData('chapter_title')) && !empty($request->postData('chapter_content')))
        {
            $newChapterContent = [
                'chapter_number' => $request->postData('chap_number'),
                'title' => $request->postData('chapter_title'),
                'text' => $request->postData('chapter_content'),
                'release_date' => date('Y-m-d')
            ];

//            var_dump('premier test', $newChapterContent);


            $newChapter = new ChapterEntity($newChapterContent);

//            var_dump('deuxième test', $newChapter);


            $chaptersManager = new ChaptersManager();
            $chaptersManager->saveOneChapter($newChapter);

            header('Location: /admin/showallchapters');     //Ne jamais mettre l'URL absolue
            exit;

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

/*
    public function executeDeleteonecomment (HTTPRequest $request)
    {
        if ($request->postExists('delete_comment') && !empty($request->postData('comment_id')))
        {

            $commentsManager = new CommentsManager();
            $commentsManager->deleteOneComment($request->postData('comment_id'));


        }
    }

    */
}

/*
public function executeEditonechapter (HTTPRequest $request)
{
    if($request->postExists('submit_button'))
    {
        $newChapterContent [] = [
            $request->postData('chap_number'),
            $request->postData('chapter_title'),
            $request->postData('chapter_content'),
            date('d M Y')
        ];
        $newChapter[] = new ChapterEntity($newChapterContent);
        $chaptersManager = new ChaptersManager();
        $chaptersManager->saveOneChapter($request->postData('chap_number'), $request->postData('chapter_title'), $request->postData('chapter_content'), 'date à compléter');

    }
}




getAllChapters
foreach ($dbChapters as $chapter)
{
    $chaptersFeatures[] = new ChapterEntity($chapter);
}

        return $chaptersFeatures;



ChapterEntity::
public function __construct(array $donnees = [])
{
    parent::__construct($donnees);
}

Entity::
public function hydrate(array $donnees)
{
    foreach ($donnees as $attribut => $valeur)
    {
        $methode = 'set'.ucfirst($attribut);

        if (is_callable([$this, $methode]))
        {
            $this->$methode($valeur);
        }
    }
}
*/
