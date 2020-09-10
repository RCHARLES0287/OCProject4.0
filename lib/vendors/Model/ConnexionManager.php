<?php
namespace Model;

use OCFram\Managers;
use Entity\AdminEntity;
use OCFram\Utilitaires;

class ConnexionManager extends Managers
{
    //private $_visitorPseudo = null;
    //private $_visitorPassword = null;
    private $_dbAdmins = null;
    private $_dbAdmin = null;
    private $_adminPseudos = null;
    private $_adminPassword = null;
    public $_visitorStatus = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAdminsData()
    {
        $answerAdminsData = $this->db->query('SELECT login, password FROM blog_auteur_admins');

        while ($this->_dbAdmins[] = $answerAdminsData->fetch());

    }

    public function compareVisitorWithDb ($visitorLogin, $visitorPwd)
    {
        if(!Utilitaires::emptyMinusZero($visitorLogin) && !Utilitaires::emptyMinusZero($visitorPwd))
        {
            $answerAdminsData = $this->db->prepare('SELECT id, login, password, status, creation_date FROM blog_auteur_admins WHERE login= :loginVisiteur');
            $answerAdminsData->execute(array('loginVisiteur' => $visitorLogin));
            $dbAdmin = $answerAdminsData->fetch();

            if ($dbAdmin === false)
            {
                return false;
            }

            $administratorFeatures = new AdminEntity($dbAdmin);

            if(password_verify($visitorPwd, $administratorFeatures->password()))
            {
                return $administratorFeatures;
            }
            else
            {
                return false;
            }

        }
        return false;
    }

    public function getDbAdmin()
    {
        return $this->_dbAdmin;
    }


    public function getterAdminsData()
    {
        return $this->_dbAdmins;
    }


    public function getDbAdmins()
    {

    }

}
