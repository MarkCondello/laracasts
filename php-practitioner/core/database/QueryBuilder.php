<?php

class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAllTasks($table, $intoClass)
    {
        $stmnt = $this->db->prepare("SELECT * FROM {$table}");
        $stmnt->execute();
        //$tasks = $stmnt->fetchAll(PDO::FETCH_OBJ );
        return $stmnt->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function addRecord($table, $column, $data)
    {
        $stmnt = $this->db->prepare("INSERT INTO {$table} ({$column}) VALUES ('{$data}');");
        $stmnt->execute();
       // print_r($stmnt);
    }
}
