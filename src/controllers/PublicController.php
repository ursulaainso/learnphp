<?php 

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
        $db = new DB();
        $posts = $db->all('posts', Post::class);
        dump($posts);
        $users = $db->all('users', User::class);
        dd($users);
        view('index', compact('posts'));
    }

    public function us() {
        $db = new DB();
        $posts = $db->all('posts', Post::class);
        view('us', compact('posts'));
    }

    public function tech() {
        $db = new DB();
        $posts = $db->all('posts', Post::class);
        view('tech', compact('posts'));
    }

    public function form(){
        
        $name = $_GET['name'] ?? '';
        view('form', compact('name'));
    }

    public function answer(){
        dump($_POST);
        dump($_GET);
    }
}