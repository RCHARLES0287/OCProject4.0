<?php
namespace Model;

class AdminsManager
{
    public function getIdentity()
    {
        $db = new DatabaseConnection;
        $req = $db->query('SELECT id, `login`, `status` FROM admins');

        while ($adminData = $req->fetch())
        return $adminData;

        $req->closeCursor();
    }

    public function postIdentity($login, $password, $status, $creation_date)
    {
        $db = new DatabaseConnection;
        $req = $db->prepare('INSERT INTO admins(`login`, `password`, `status`, creation_date) VALUES(:`login`, :`password`, :`status`, :creation_date)');

        $req->execute(array(
            'login' => $login,
            'password' => $password,
            'status' => $status,
            'creation_date' => $creation_date
            ));

        echo 'La nouvelle identité a été ajoutée.';
    }
}
