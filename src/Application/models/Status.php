<?php

namespace Application\models;

use Application\core\Database;
use PDO;

class Status
{
    public static function findAll()
    {
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM tb_status');

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery(
            "SELECT     id,
                        status_name
            FROM        tb_status
            WHERE       id = :id
            ",
            array(':id' => $id)
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
