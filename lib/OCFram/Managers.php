<?php
namespace lib\OCFram;

class Managers
{
  protected $api = null;
  protected $db = null;
  protected $managers = [];

  public function __construct($api)
  {
    $this->api = $api;
    $this->db = DatabaseConnection::DbConnect();
  }

  public function getManagerOf($module)
  {
    if (!is_string($module) || empty($module))
    {
      throw new \InvalidArgumentException('Le module spécifié est invalide');
    }

    if (!isset($this->managers[$module]))
    {
      $manager = '\\Model\\'.$module.'Manager'.$this->api;

      $this->managers[$module] = new $manager($this->db);
    }

    return $this->managers[$module];
  }
}
