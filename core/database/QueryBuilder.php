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

        public function insert($table, $parameters)
        {
            $sql = sprintf(
                'insert into %models (%models)  values (%models)',
                $table,
                implode(',', array_keys($parameters)),
                ':'.implode(', :', array_keys($parameters))
            );

            try{
                $statement = $this->pdo->prepare($sql);
                $statement->execute($parameters);
            } catch (Exception $e) {
                die('Whoops, something went wrong.');
            }
        }

}
  