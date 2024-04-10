<?php

namespace src\Repositories;

use Models\User;
use PDO;
use src\Models\Database;


class UserRepository
{
    private $DB;
    private $user;
    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        $this->user = new User();

        require_once __DIR__ . '/../../config.php';
    }


    public function login($email, $password): array
    {
        $sql = "SELECT * FROM GA_User
        WHERE User_Email = :Email_User AND  User_Password = :Password_User";

        $statement = $this->DB->prepare($sql);
        $statement->execute([
            ":Email_User" => $email,
            ":Password_User" => $password

        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}