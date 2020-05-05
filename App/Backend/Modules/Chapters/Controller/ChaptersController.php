<?php
namespace App\Backend\Modules\Chapters\Controller;

use Entity\ChapterEntity;
use Model\ChaptersManager;
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

    public function executeEditonechapter (HTTPRequest $request)
    {

        if($request->postExists('submit_button') && !empty($request->postData('chap_number')) && !empty($request->postData('chapter_title')) && !empty($request->postData('chapter_content')))
        {
            $newChapterContent = [
                'chapter_number' => $request->postData('chap_number'),
                'title' => $request->postData('chapter_title'),
                'text' => $request->postData('chapter_content'),
                'release_date' => date('Y-m-d')
            ];

            var_dump('premier test', $newChapterContent);


            $newChapter = new ChapterEntity($newChapterContent);

//            var_dump('deuxième test', $newChapter);


            $chaptersManager = new ChaptersManager();
            $chaptersManager->saveOneChapter($newChapter);

            header('Location: /admin/showallchapters');     //Ne jamais mettre l'URL absolue

        }
    }

    public function executeConfirmdeleteonechapter (HTTPRequest $request)
    {
        echo 'On est entré dans ConfirmDeleteOneChapter';
        if($request->postExists('delete_chapter_button') && !empty($request->postData('chap_id')))
        {
            echo 'On est bien entré dans le test de ConfirmDeleteOneChapter';
            $chapterToDelete = new ChapterEntity();
            $chapterToDelete->setChapter_id($request->postData('chap_id'));
            header('Location: /admin/deleteonechapterconfirmation');
        }
        else
        {
            throw new \Exception('Impossible de supprimer ce chapitre');
        }
    }

    public function executeDeleteonechapter (HTTPRequest $request)
    {
        if($request->postExists('delete_chapter_button') && !empty($request->postData('chap_id')))
        {
//            echo $chapter->chapter_number();
            $chapterDelete = new ChaptersManager();
//            Préciser le paramètre
            $chapterDelete->deleteOneChapter($request->postData('chap_id'));
        }
    }
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
