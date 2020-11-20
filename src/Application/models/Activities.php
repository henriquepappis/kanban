<?php

namespace Application\models;

use Application\core\Database;
use PDO;
use PDOException;

class Activities
{
    public static function findAll()
    {
        $conn = new Database();
        $result = $conn->executeQuery("
            SELECT      tb_activity.id, tb_activity.activity_name, tb_user.login, tb_activity.status_id
            FROM        tb_activity
            INNER JOIN  tb_user ON tb_activity.user_id = tb_user.id
        ");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id)
    {
        $conn = new Database();
        $result = $conn->executeQuery("
            SELECT      id,
                        activity_name,
                        user_id,
                        status_id
            FROM        tb_activity
            WHERE       id = :id
        ", array(':id' => $id));

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function save($activityData)
    {
        try {
            $conn = new Database();

            $conn->executeQuery(
                "UPDATE  tb_activity
                SET     id = :id,
                        activity_name =  :activity_name,
                        user_id = :user_id,
                        status_id = :status_id
                WHERE   id = :id",
                array(
                    ':id' => $activityData['id'],
                    ':activity_name' => $activityData['activity_name'],
                    ':user_id' => $activityData['user_id'],
                    ':status_id' => $activityData['status_id']
                )
            );
        } catch(PDOException $x) {
            die("Secured ".$x);
        }
    }
}
