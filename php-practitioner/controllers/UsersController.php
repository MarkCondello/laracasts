<?php
class UsersController {

    public function index(){
        $tasks = App::get('database')->selectAll('todos');
        //$authors = $app['database']->selectAll('author');

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

