<?php

namespace App\Frontend\Modules\Accueil;

use OCFram\BackController;
use OCFram\HTTPRequest;

class AccueilController extends BackController
{
    
    public function executeTest(HTTPRequest $request)
    {
        $page = $this->page();
        $page->addVar('pageName', $request->requestURI());
    }
}
