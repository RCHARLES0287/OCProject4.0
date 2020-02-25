<?php

namespace OCFram;

use InvalidArgumentException;
use Model\DatabaseConnection;

class Managers
{
    protected $db = null;
    protected $managers = [];

    public function __construct()
    {
        $this->db = DatabaseConnection::dbConnect();
    }

    public function getManagerOf($module)
    {
        if (!is_string($module) || empty($module)) {
            throw new InvalidArgumentException('Le module spécifié est invalide');
        }

        if (!isset($this->managers[$module])) {
            $manager = '\\Model\\' . $module . 'Manager';

            $this->managers[$module] = new $manager($this->db);
        }

        return $this->managers[$module];
    }
}
