<?php

class QueryBuilder
{

    protected $pdo ;

    public function __construct($pdo)
    {
         $this->pdo =$pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        // $arr = ['one', 'two', 'three'];

        // $sql =implode(',', $arr);
        // die(var_dump($sql));
        
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table, 
            implode(',', array_keys($parameters)), 
            ':' . implode(', :', array_keys($parameters))
        );

        // $statement = $this->pdo->prepare($sql);

        // $statement->execute($parameters);
        try
        {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        }
        catch(Exception $e)
        {
            die('sorry wrong request');
        }
        

        // die(var_dump($sql));
    }
}