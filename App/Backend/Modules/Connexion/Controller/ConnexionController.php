<?php

namespace App\Backend\Modules\Connexion\Controller;

session_start();

use Model\ConnexionManager;
use OCFram\BackController;
use OCFram\HTTPRequest;


class ConnexionController extends BackController
{

    private $_visitorPseudo = null;
    private $_visitorPassword = null;

    static public function isConnected()
    {
        if ($_SESSION['connexion_status'] === 'connected')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function executeErrorauthentification(HTTPRequest $request)
    {

    }

    public function executeLoggingin(HTTPRequest $request)
    {

    }

    public function executeIdentification(HTTPRequest $request)
    {
        {
            $connexionManager = new ConnexionManager();
            $adminEntity = $connexionManager->compareVisitorWithDb($request->postData('login'), $request->postData('password'));

            if ($adminEntity !== false)
            {
                $_SESSION['connexion_status'] = 'connected';
                $_SESSION['login'] = $adminEntity->login();
            }
        }
    }

    public function executeLoggingoff(HTTPRequest $request)
    {
//        On vide la session afin de mettre fin à l'indentification de l'administrateur
        $_SESSION = array();
    }

}

