<?php
namespace App\Backend\Modules\Administration\Model;

class AdminsManager
{
    public function getIdentity()
    {
        $db = dbConnect();
        $req = $db->query('SELECT id, login, status FROM admins');

        while ($adminData = $req->fetch())
        return $adminData;

        $req->closeCursor();
    }

    public function postIdentity($login, $password, $status, $creation_date)
    {
        $db = dbConnect();
        $req = $db->prepare('INSERT INTO admins(login, password, status, creation_date) VALUES(:login, :password, :status, :creation_date)');

        $req->execute(array(
            'login' => $login,
            'password' => $password,
            'status' => $status,
            'creation_date' => $creation_date
            ));

        echo 'La nouvelle identité a été ajoutée.';
    }


    // Connexion à la base de données
    public function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=DWJ_Projet_4;charset=utf8', 'root', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}
