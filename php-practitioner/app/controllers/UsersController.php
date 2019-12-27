<?php

namespace App\Controllers;
use App\core\App;
use App\core\services\Connection;
use App\Models\Task;
use PDO;

class UsersController {

    public function index(){

//        $args = [
////            'description' => 'Test test update desc again',
////            'completed' => 0
////        ];
////
////        Task::update($args, 2);
///
        Task::delete(5);

        $tasks = App::get('database')->selectAll('todos');

        $db = Connection::make(App::get('config')['database']);
        $query =  $db->prepare("SELECT  name, description
         FROM author a 
         INNER JOIN todos t 
         ON a.todo_id = t.id
         ");

        $query->execute();
        $authors = $query->fetchAll(PDO::FETCH_OBJ);

        view('add-user', [
            'authors' => $authors,
            'tasks' => $tasks,
        ]);
     }

     public function store(){
         $name = $_POST['name'];
         $todo_id = $_POST['todo'];

         $args = [
             'name' => $name,
             'todo_id' => $todo_id
         ];

         App::get('database')->insert('author', $args);
         return redirect('add-user');
     }
}

