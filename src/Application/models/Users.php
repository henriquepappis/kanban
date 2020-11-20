<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Users
{
    public static function findAll()
    {
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM tb_user');

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery(
            "SELECT     id,
                        login
            FROM        tb_user
            WHERE       id = :id
            ",
            array(':id' => $id)
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
