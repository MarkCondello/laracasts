<?php

namespace App\Models;
use App\core\App;

//todo: create methods to CRUD the tasks table.

class Task
{

    public static function update($args, $id){
       return App::get('database')->update('todos', $args, $id);
    }

    public static function delete($id){
        return App::get('database')->delete('todos', $id);
    }
}