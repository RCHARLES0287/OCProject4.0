<?php
namespace App\Backend\Modules\Connexion;

use \OCFram\BackController;
use \OCFram\HTTPRequest;

class ConnexionController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Connexion');
    
    if ($request->postExists('login'))
    {
      $login = $request->postData('login');
      $password = $request->postData('password');
      
      if ($login == $this->app->config()->get('login') && $password == $this->app->config()->get('pass'))
      {
        $this->app->user()->setAuthenticated(true);
        $this->app->httpResponse()->redirect('.');
      }
      else
      {
        $this->app->user()->setFlash('Le pseudo ou le mot de passe est incorrect.');
      }
    }
  }

  public function indentificationRedirection()
  {
    session_start();
    if(isset($_SESSION['connexion_status']) && $_SESSION['connexion_status'] = 'connected')
    {
      header('Location: '); // Indiquer l'URL vers lequel on doit rediriger l'administrateur qui a été identifié
    }
    else{
      header('Location: '); // Indiquer l'URL vers lequel on doit rediriger le visiteur qui n'aura pas été identifié
    }
  }
}
