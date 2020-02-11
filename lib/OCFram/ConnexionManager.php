<?php
namespace lib\OCFram;

class ConnexionManager extends Managers
{
    private $_VisitorPseudo = '';
    private $_VisitorPassword = '';
    private $_dbAdmins = [];
    private $_AdminPseudos = '';
    private $_AdminPassword = '';
    private $_DB = [];

    public function __construct()
    {
        setVisitorPseudo();
        setVisitorPassword();
        getDbAdmins();
        testAdmin();
        $this->_DB = DatabaseConnection::DbConnect();
    }

    public function getAdminsData()
    {
        $answerLogin = $this->_DB->query('SELECT login FROM blog_auteur_admins');

        while ($this->_AdminPseudos = $answerLogin->fetch());

        $answerPwd = $this->_DB->query('SELECT password FROM blog_auteur_admins');

        while ($this->_AdminPassword = $answerPwd->fetch());
    }


    public function setVisitorPseudo()
    {
        if(isset($_POST['login']) AND is_string($_POST['login']))
        {
            $this->_VisitorPseudo = $_POST['login'];
        }
    }

    public function setVisitorPassword()
    {
        if(isset($_POST['password']) AND is_string($_POST['password']))
        {
            $this->_VisitorPassword = $_POST['password'];
        }
    }

    public function getDbAdmins()
    {

    }

    public function testAdmin()
    {
        if(in_array($this->_VisitorPseudo , $this->_dbAdmins))
        {
            session_start();
            // récuperer la valeur correspondant à la clé _VisitorPseudo et la mettre dans $_AdminPassword;
            if($this->_VisitorPassword === $this->$_AdminPassword)
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
