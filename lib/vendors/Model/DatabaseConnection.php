<?php
namespace lib\vendors\Model;

use Exception;
use PDO;

class DatabaseConnection
{
    static public function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=romainchgcdemost.mysql.db;dbname=romainchgcdemost;charset=utf8', 'romainchgcdemost', 'aP0lLoI3H0A1P');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        return $db;
    }
}

// La classe Managers appellera : 
// DatabaseConnection::DbConnect();
