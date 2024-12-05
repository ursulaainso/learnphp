<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;

class PublicController
{
   public function index()
   {
      $posts = Post::all();
      view('index', compact('posts')); //compact returns an array with all the variables added to it
      
      // ise mähin
      $users = User::all();
      view('index', compact('users'));
   }

   public function us()
   {
      $posts = Post::all();
      view('us', compact('posts'));
   }

   public function tech()
   {
      $posts = Post::all();
      view('tech', compact('posts'));
   }

   public function form()
   {
      // dd($_POST);
      $name = $_GET['name'] ?? '';
      view('form', compact('name'));
   }

   public function answer()
   {
      dump($_POST);
      dump($_GET);
   }
}
