<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [

        ];
        view('index', compact('posts'));
    }

    public function us() {
        $posts = [
            
        ];
        view('us', compact('posts'));
    }

    public function form(){
        view('form');
    }

    public function answer(){
        dump($_GET);
        dump($_POST);
    }
}

