<?php
namespace App\Backend\Modules\Connexion\Model;

use OCFram\Managers;

class ConnexionManager extends Managers
{
    //private $_visitorPseudo = null;
    //private $_visitorPassword = null;
    private $_dbAdmins = null;
    private $_adminPseudos = null;
    private $_adminPassword = null;

    public function __construct()
    {
        parent::__construct();
        $this->getAdminsData();
//        setVisitorPseudo();
//        setVisitorPassword();
//        getDbAdmins();
//        testAdmin();
    }

    public function getAdminsData()
    {
        $answerAdminsData = $this->db->query('SELECT login, password FROM blog_auteur_admins');

        while ($this->_dbAdmins[] = $answerAdminsData->fetch());


        /*
        $answerLogin = $this->db->query('SELECT login FROM blog_auteur_admins');

        while ($this->_adminPseudos[] = $answerLogin->fetch());

        $answerPwd = $this->db->query('SELECT password FROM blog_auteur_admins');

        while ($this->_adminPassword[] = $answerPwd->fetch());
        */
    }

    public function getterAdminsData()
    {
        return $this->_dbAdmins;
    }


    public function getDbAdmins()
    {

    }

    // A effacer une fois correctement implémenté dans ConnexionController
    public function testAdmin()
    {
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
