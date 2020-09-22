<?php

namespace App\Backend\Modules\Connexion\Controller;

use Model\ConnexionManager;
use OCFram\BackController;
use OCFram\HTTPRequest;


class ConnexionController extends BackController
{

    private $_visitorPseudo = null;
    private $_visitorPassword = null;


    public function executeIdentification(HTTPRequest $request)
    {
        /*
        var_dump('ON EST BIEN DANS LA PARTIE IDENTIFICATION');
        exit;
        */

//        if($request->postExists('submit_button'))
        {
            $connexionManager = new ConnexionManager();
            $adminEntity = $connexionManager->compareVisitorWithDb($request->postData('login'), $request->postData('password'));


            if($adminEntity !== false)
            {
                var_dump('Le visiteur est bien authentifié');
            }
            else
            {
                var_dump('Le visiteur n\'a pas pu être authentifié');
            }

        }

        header('Location: /admin/showallchapters');     //Ne jamais mettre l'URL absolue
        exit;
    }


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


    public function setVisitorPseudo()
    {
        if(isset($_POST['login']) AND is_string($_POST['login']))
        {
            $this->_visitorPseudo = $_POST['login'];
        }
    }

    public function setVisitorPassword()
    {
        if(isset($_POST['password']) AND is_string($_POST['password']))
        {
            $this->_visitorPassword = $_POST['password'];
        }
    }

    public function testAdmin()
    {
        $dbInfo [] = getAdminsData();

        if(in_array($this->_visitorPseudo , $this->_dbAdmins))
        {
            session_start();
            // récuperer la valeur correspondant à la clé _visitorPseudo et la mettre dans $_adminPassword;
            if($this->_visitorPassword === $this->$_adminPassword)
            {
                $_SESSION['connexion_status'] = 'connected';
                // renvoyer vers la page d'accueil de l'administrateur
            }
            else
            {
                $_SESSION['connexion_status'] = 'not_connected';
                // renvoyer vers la page d'accueil du site
            }
        }
    }

}

