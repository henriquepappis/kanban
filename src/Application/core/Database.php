<?php

namespace Application\core;

use PDO;
use PDOException;

class Database extends PDO
{
  // configuração do banco de dados
  private $DB_NAME = 'kanban';
  private $DB_USER = 'root';
  private $DB_PASSWORD = 'r00t';
  private $DB_HOST = 'kanban-db';
  private $DB_PORT = 3306;

  private $conn;

  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:dbname=$this->DB_NAME;host=$this->DB_HOST;port=$this->DB_PORT;user=$this->DB_USER;password=$this->DB_PASSWORD");
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }

  private function setParameters($stmt, $key, $value)
  {
    $stmt->bindParam($key, $value);
  }

  private function mountQuery($stmt, $parameters)
  {
    foreach( $parameters as $key => $value ) {
      $this->setParameters($stmt, $key, $value);
    }
  }

  public function executeQuery(string $query, array $parameters = [])
  {
    $stmt = $this->conn->prepare($query);
    $this->mountQuery($stmt, $parameters);
    $stmt->execute();
    return $stmt;
  }

}
