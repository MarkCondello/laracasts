<?php

class PagesController
{
    public function home(){
        view('index' );
    }

    public function about(){
        view('about');
    }

    public function contact(){
        view('contact');
     }

    public function culture(){
        $title = 'Cultural assimilation';
        view('culture', [
            'title' => $title
            ]);
     }

//    public function addName(){
//        $name = $_POST['name'];
//        $todo_id = $_POST['todo'];
//
//        $args = [
//            'name' => $name,
//            'todo_id' => $todo_id
//        ];
//
//        App::get('database')->insert('author', $args);
//        header('Location: /');
//        return;
//    }
}