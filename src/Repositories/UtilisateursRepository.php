<?php
namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Utilisateurs;

class UserRepository {
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }
    public function getAllUser()
    {
      $sql = "SELECT * FROM " . "user;";
  
      return  $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Utilisateurs::class);
    }
}
