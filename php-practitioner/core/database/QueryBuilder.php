<?php
namespace App\Core\Services;
use PDO;

class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function selectAll($table)
    {
        $stmnt = $this->db->prepare("SELECT * FROM {$table}");
        $stmnt->execute();
        //$tasks = $stmnt->fetchAll(PDO::FETCH_OBJ );
        return $stmnt->fetchAll(PDO::FETCH_CLASS);
    }

    public function addRecord($table,  $column,  $data)
    {
        $stmnt = $this->db->prepare("INSERT INTO {$table} ({$column}) VALUES ('{$data}');");
        $stmnt->execute();
     }

    public function insert($table, $parameters)
    {
        $keys = implode(', ', array_keys($parameters));

        $values = implode( ', ', array_map(function($param){
                return (":" . $param);
            }, array_keys($parameters))
        );

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, $keys, $values
        );

        //var_dump($sql);

        try {
           // $stmt = $this->db->prepare('INSERT INTO author (name, todo_id) VALUES (:name, :todo_id)');
            $stmt = $this->db->prepare($sql);
            $stmt->execute($parameters);

        } catch(Exception $e){
              die('Something went wrong. <br>' . $e);
        }
//        $stmt->execute('INSERT INTO %s (%s) VALUES (%s)');
//        $stmt->execute();
    }
//
//    public function query($query){
//        $this->stmt = $this->db->prepare($query);
//    }
//
//    // checks what type is being passed as a query to the db
//    //https://www.php.net/manual/en/pdostatement.bindvalue.php
//    public function bind($param, $value, $type = null)
//    {
//        if(is_null($type)){
//            switch(true){
//                case is_int($value):
//                    $type = PDO::PARAM_INT;
//                    break;
//                case is_bool($value):
//                    $type = PDO::PARAM_BOOL;
//                    break;
//                case is_null($value):
//                    $type = PDO::PARAM_NULL;
//                    break;
//                default :
//                    $type = PDO::PARAM_STR;
//            }
//        }
//        $this->stmt->bindValue($param, $value, $type);
//    }
//
//    public function execute()
//    {
//        return $this->stmt->execute();
//    }
//
//    //get set as array of objects
//    public function resultset()
//    {
//        $this->execute();
//        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
//    }
//
//    //get single record as obj
//    public function single()
//    {
//        $this->execute();
//        return $this->stmt->fetch(PDO::FETCH_OBJ);
//    }
//
//    //get row count
//    public function rowCount()
//    {
//        $this->execute();
//        return $this->stmt->rowCount( );
//    }
//
//    //https://www.php.net/manual/en/pdo.lastinsertid.php
//    public function lastInsertId()
//    {
//        $this->db->lastInsertId();
//    }


}
