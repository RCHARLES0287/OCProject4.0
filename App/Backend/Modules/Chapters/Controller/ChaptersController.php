<?php
namespace App\Backend\Modules\Chapters\Controller;

use Model\ChaptersManager;
use OCFram\BackController;
use OCFram\HTTPRequest;


class ChaptersController extends BackController
{
    public function executeShowallchapters ()
    {
        $chaptersManager = new ChaptersManager();

        $allChaptersData = $chaptersManager->getAllChapters();

        var_dump($allChaptersData);
    }

    public function executeEditonechapter ()
    {

    }
}
