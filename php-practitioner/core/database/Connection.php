<?php
namespace App\Core\Services;
use PDO;

class Connection{
    static public function make($config){
        try {
            //return new PDO('mysql:host=localhost;dbname=my_todo', 'root', 'root');
            return new PDO(
                $config['connection']. ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die('Could not connect: ' . print_r($e));
        }
    }
}