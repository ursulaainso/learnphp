<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
   public function index()
   {
      $users = User::all();
      view('users/index', compact('users'));
   }

   public function create()
   {
      view('users/create');
   }

   public function store()
   {
      $user = new User();
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      $user->password = $_POST['password'];
      $user->save();
      redirect('/admin/users');
   }

   public function show()
   {
      $user = User::find($_GET['id']);
      if (!$user) {
         http_response_code(404);
         echo '404 page not found';
      } else {
         view('users/show', compact('user'));
      }
   }

   public function edit()
   {
      $user = User::find($_GET['id']);
      if (!$user) {
         http_response_code(404);
         echo '404 page not found';
      } else {
         view('users/edit', compact('user'));
      }
   }

   public function update()
   {
      $user = User::find($_GET['id']);
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      $user->password = $_POST['password'];
      $user->save();
      redirect('/admin/users');
   }

   public function destroy(){
      $user = User::find($_GET['id']);
      $user->delete();
      redirect('/admin/users');
   }
}
