<?php

namespace App\Controllers;


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
}