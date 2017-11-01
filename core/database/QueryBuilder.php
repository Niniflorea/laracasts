<?php

/**
 * Class QueryBuilder
 */
class QueryBuilder
{
  protected $pdo;

  public  function __construct($pdo)
  {
      $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $tasks = $statement->fetchAll(PDO::FETCH_CLASS);

  }
}
  