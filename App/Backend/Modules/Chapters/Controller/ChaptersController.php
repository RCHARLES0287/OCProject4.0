<?php
namespace App\Backend\Modules\Chapters\Controller;

use Model\ChaptersManager;
use OCFram\BackController;
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
        if($request->postExists('submit_button'))
        {
            $chaptersManager = new ChaptersManager();
            $chaptersManager->saveOneChapter($request->postData('chap_number'), $request->postData('chapter_title'), $request->postData('chapter_content'), 'date à compléter');

        }
    }
}
