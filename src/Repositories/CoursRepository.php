<?php

namespace src\Repositories;

use Models\Cours;
use PDO;
use PDOException;
use src\Models\Database;

class CoursRepository
{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }

    public function getAllCours()
    {
        $sql = "SELECT * FROM " . "cours;";

        $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, cours::class);

        return $retour;
    }

    public function getThiscoursById(int $id): cours|bool
    {
        $sql = "SELECT * FROM "  . "cours WHERE id = :id";

        $statement = $this->DB->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Cours::class);
        $retour = $statement->fetch();

        return $retour;
    }

    public function getThosecoursByName(string $nom): array
    {
        $sql = "SELECT * FROM "  . "cours WHERE NOM = :nom";

        $statement = $this->DB->prepare($sql);

        $statement->bindParam(':nom', $nom);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, cours::class);
    }

    public function CreateThisCours(cours $cours): bool
    {
        $sql = "INSERT INTO "  . "cours (ID,NOM,DEBUT_COURS,FIN_COURS,CODE,ID_PROMO) VALUES (:ID,:NOM,:DEBUT_COURS,:FIN_COURS,:CODE,:ID_PROMO)";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([':ID' => $cours->getIdCours(),
            ':NOM' => $cours->getNomCours(),
            ':DEBUT_COURS' => $cours->getDebutCours(),
            ':FIN_COURS' => $cours->getFinCours(),
            ':CODE' => $cours->getCode(),
            ':ID_PROMO' => $cours->getIdPromo()
        ]);

        return $retour;
    }

    public function UpdateThisCours(cours $cours): bool
    {
        $sql = "UPDATE "  . "cours 
            SET
            
              CODE =:CODE,
              NOM = :NOM
            WHERE ID = :ID";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':ID' => $cours->getIdCours(),
            ':NOM' => $cours->getNomCours(),
            ':DEBUT_COURS' => $cours->getDebutCours(),
            ':FIN_COURS' => $cours->getFinCours(),
            ':CODE' => $cours->getCode(),
            ':ID_PROMO' => $cours->getIdPromo()
        ]);

        return $retour;
    }

    public function deleteThiscours(int $ID): bool
    {
        try {
            $sql = "DELETE FROM " . "peut_etre WHERE Id_Cours = :ID;
              DELETE FROM " . "cours WHERE ID = :ID;";

            $statement = $this->DB->prepare($sql);

            return $statement->execute([':ID' => $ID]);
        } catch (PDOException $error) {
            echo "Erreur de suppression : " . $error->getMessage();
            return FALSE;
        }
    }
}