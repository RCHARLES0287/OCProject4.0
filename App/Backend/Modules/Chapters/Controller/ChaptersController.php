<?php
namespace App\Backend\Modules\Chapters\Controller;


use Model\ChaptersManager;
use OCFram\HTTPRequest;

class ChaptersController extends BackController
{
    public function executeShowallchapters (HTTPRequest $request)
    {
        $chaptersManager = new ChaptersManager();

        var_dump($chaptersManager);
    }
}
