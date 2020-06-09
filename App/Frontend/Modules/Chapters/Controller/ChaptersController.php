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


    public function executeShowonechapter (HTTPRequest $request)
    {

    }


    public function executeCommentonechapter (HTTPRequest $request)
    {

    }


}
